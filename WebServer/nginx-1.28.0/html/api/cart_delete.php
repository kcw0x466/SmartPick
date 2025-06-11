<?php
session_start();
require_once '../DBconnect/mysql_connect.php';

if (!isset($_SESSION['member_id'])) {
    header("Location: /log-in.php");
    exit;
}

$memberId = $_SESSION['member_id'];
$productId = $_GET['product_id'] ?? '';
$category = $_GET['category'] ?? '';

if ($productId && $category) {
    $stmt = $connect->prepare("DELETE FROM cart_item WHERE member_id = ? AND product_id = ? AND category = ?");
    $stmt->bind_param('iis', $memberId, $productId, $category);
    $stmt->execute();
}

header("Location: /cart.php");
exit;