<?php
$host = 'localhost';      // 또는 127.0.0.1
$user = 'root';  // 👉 여기에 DB 사용자명
$pass = '1234';  // 👉 여기에 비밀번호
$dbname = 'smartpick_db';// 👉 여기에 DB 이름

$conn = new mysqli($host, $user, $pass, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("<h3>❌ MySQL 연결 실패:</h3> " . $conn->connect_error);
}

echo "<h3>✅ MySQL 연결 성공</h3>";

// 간단한 쿼리 테스트 (옵션)
$result = $conn->query("SHOW TABLES");
if ($result) {
    echo "<pre>📦 현재 테이블 목록:\n";
    while ($row = $result->fetch_array()) {
        echo " - " . $row[0] . "\n";
    }
    echo "</pre>";
} else {
    echo "<p>⚠️ 테이블 조회 실패: " . $conn->error . "</p>";
}

$conn->close();
?>