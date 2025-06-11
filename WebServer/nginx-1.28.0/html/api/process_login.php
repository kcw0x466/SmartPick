<?php
session_start();
require_once '../DBconnect/mysql_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = trim(mysqli_real_escape_string($connect, $_POST['userId']));
    $userPassword = trim(mysqli_real_escape_string($connect, $_POST['userPassword']));

    // 이메일 또는 이름으로 로그인 가능하도록 처리
    $query = "
        SELECT * FROM member 
        WHERE email = '$userId' OR name = '$userId'
        LIMIT 1
    ";

    // echo $query;
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // 평문 비밀번호 비교 (추후 hash 비교로 대체 필요)
        if ($userPassword === $row['password']) {
            // 로그인 성공 → 세션 저장
            $_SESSION['member_id'] = $row['id'];
            $_SESSION['member_name'] = $row['name'];
            $_SESSION['member_email'] = $row['email'];

            // 마지막 로그인 시간 업데이트
            $updateQuery = "UPDATE member SET last_login_at = NOW() WHERE id = {$row['id']}";
            mysqli_query($connect, $updateQuery);

            echo "<script>
                alert('로그인 성공!');
                location.href = '../mainpage.php';
            </script>";
            exit();
        } else {
            // 비밀번호 불일치
            echo "<script>
                alert('비밀번호가 올바르지 않습니다.');
                history.back();
            </script>";
            exit();
        }
    } else {
        // 해당 이메일/이름 없음
        echo "<script>
            alert('존재하지 않는 사용자입니다.');
            history.back();
        </script>";
        exit();
    }
    } else {
    echo "잘못된 접근입니다.";
   }
?>
