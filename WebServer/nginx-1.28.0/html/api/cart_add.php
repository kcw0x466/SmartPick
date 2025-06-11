<?php
session_start();

if (!isset($_SESSION['member_id'])) {
    echo "<script>alert('로그인이 필요합니다.'); location.href='/log-in.php';</script>";
    exit;
}

require_once '../DBconnect/mysql_connect.php';

$memberId = $_SESSION['member_id'];
$productId = $_POST['product_id'] ?? '';
$category = $_POST['category'] ?? '';
$quantity = (int)($_POST['quantity'] ?? 1);
$addedAt = date('Y-m-d H:i:s');

// 유효성 검사
if (!$productId || $quantity <= 0) {
    echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
    exit;
}

// 중복 추가 시 수량만 증가
$sql = "INSERT INTO cart_item (member_id, product_id, category, quantity, added_at)
        VALUES (?, ?, ?, ?, ?)
        ON DUPLICATE KEY UPDATE quantity = quantity + VALUES(quantity)";

$stmt = $connect->prepare($sql);
$stmt->bind_param('iisis', $memberId, $productId, $category, $quantity, $addedAt);

if ($stmt->execute()) {
    echo "<script>alert('장바구니에 추가되었습니다.'); location.href='/cart.php';</script>";
} else {
    echo "<script>alert('오류 발생: 장바구니 추가 실패'); history.back();</script>";
}
?>
