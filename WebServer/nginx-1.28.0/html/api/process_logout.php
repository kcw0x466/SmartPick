<?php
session_start();
session_unset();    // 모든 세션 변수 제거
session_destroy();  // 세션 자체 제거
header("Location: /log-in.php");  // 로그아웃 후 로그인 페이지로 이동
exit();
?>