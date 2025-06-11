<?php
// MySQL 연결 설정
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '1234';
$mysql_db   = 'smartpick_db';

$connect = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

if (!$connect) {
    die("❌ MySQL 연결 실패: " . mysqli_connect_error());
}
// echo "✅ MySQL 연결 성공";
?>
