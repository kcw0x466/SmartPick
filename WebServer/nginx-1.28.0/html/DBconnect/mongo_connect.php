<?php
try {
    $mongoManager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $mongoDBName = 'smartpick'; // DB 이름만 문자열로 보관
} catch (Exception $e) {
    die("❌ MongoDB 연결 실패: " . $e->getMessage());
}
?>
