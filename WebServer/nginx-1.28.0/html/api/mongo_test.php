<?php
try {
    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

    $command = new MongoDB\Driver\Command(["listDatabases" => 1]);
    $cursor = $manager->executeCommand("admin", $command);
    $result = $cursor->toArray()[0];

    echo "<h3>✅ MongoDB 연결 성공</h3>";
    echo "<pre>";
    foreach ($result->databases as $db) {
        echo "DB 이름: " . $db->name . "\n";
    }
    echo "</pre>";
} catch (Exception $e) {
    echo "<h3>❌ 연결 실패:</h3> " . $e->getMessage();
}
