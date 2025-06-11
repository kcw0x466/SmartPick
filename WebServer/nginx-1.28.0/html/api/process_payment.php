<?php
session_start();
require_once '../DBconnect/mysql_connect.php';
require_once '../DBconnect/mongo_connect.php';

use MongoDB\Driver\Query;

// 로그인 확인
if (!isset($_SESSION['member_id'])) {
    echo "<script>alert('로그인이 필요합니다.'); location.href='/log-in.php';</script>";
    exit;
}

$memberId = $_SESSION['member_id'];

// 1. 장바구니 데이터 가져오기
$sql = "SELECT * FROM cart_item WHERE member_id = ?";
$stmt = $connect->prepare($sql);
$stmt->bind_param('i', $memberId);
$stmt->execute();
$result = $stmt->get_result();

$cartItems = [];
while ($row = $result->fetch_assoc()) {
    $cartItems[] = $row;
}

// 장바구니 비어있을 경우
if (empty($cartItems)) {
    echo "<script>alert('장바구니가 비어 있습니다.'); location.href='/cart.php';</script>";
    exit;
}

// 2. MongoDB에서 가격 조회
$totalPrice = 0;
$totalAmount = 0;
$orderItems = [];

foreach ($cartItems as $item) {
    $productId = $item['product_id'];
    $category = $item['category'];
    $quantity = $item['quantity'];

    // ObjectId가 아닌 숫자 or 문자열 대응
    $filters = [
        ['_id' => (string)$productId],
        ['_id' => (int)$productId]
    ];

    $found = false;
    foreach ($filters as $filter) {
        $query = new Query($filter, ['projection' => ['price' => 1]]);
        $cursor = $mongoManager->executeQuery("$mongoDBName.$category", $query);
        $documents = $cursor->toArray();

        if (!empty($documents)) {
            $product = $documents[0];
            $price = (int)$product->price;

            $totalPrice += $price * $quantity;
            $totalAmount += $quantity;

            $orderItems[] = [
                'product_id' => $productId,
                'category' => $category,
                'quantity' => $quantity,
                'price' => $price
            ];

            $found = true;
            break;
        }
    }

    if (!$found) {
        echo "<script>alert('상품 정보를 찾을 수 없습니다.'); history.back();</script>";
        exit;
    }
}

// 3. orders 테이블에 주문 정보 삽입
$insertOrderSQL = "INSERT INTO orders (member_id, status, total_amount, total_price, ordered_at)
                   VALUES (?, '결제완료', ?, ?, NOW())";
$orderStmt = $connect->prepare($insertOrderSQL);
$orderStmt->bind_param('iii', $memberId, $totalAmount, $totalPrice);
$orderStmt->execute();
$orderId = $connect->insert_id;

// 4. order_item 테이블에 각 항목 삽입
foreach ($orderItems as $item) {
    $insertItemSQL = "INSERT INTO order_item (order_id, product_id, category, quantity, price)
                      VALUES (?, ?, ?, ?, ?)";
    $itemStmt = $connect->prepare($insertItemSQL);
    $itemStmt->bind_param('iisii', $orderId, $item['product_id'], $item['category'], $item['quantity'], $item['price']);
    $itemStmt->execute();
}

// 5. 장바구니 비우기
$deleteSQL = "DELETE FROM cart_item WHERE member_id = ?";
$deleteStmt = $connect->prepare($deleteSQL);
$deleteStmt->bind_param('i', $memberId);
$deleteStmt->execute();

// 6. 결제 완료 페이지로 이동
header("Location: /order-complete.php?order_id=$orderId");
exit;
?>
