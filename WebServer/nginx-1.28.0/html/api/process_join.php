<?php
require_once '../DBconnect/mysql_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. 사용자 입력 데이터 정리
    $email = mysqli_real_escape_string($connect, $_POST['userEmail']);
    $password = mysqli_real_escape_string($connect, $_POST['userPassword']);
    $name = mysqli_real_escape_string($connect, $_POST['userName']);
    $gender = mysqli_real_escape_string($connect, $_POST['gender']);
    $birthYear = intval($_POST['birthYear']);
    $birthMonth = str_pad($_POST['birthMonth'], 2, '0', STR_PAD_LEFT);
    $birthDay = str_pad($_POST['birthDay'], 2, '0', STR_PAD_LEFT);
    $birthDate = "$birthYear-$birthMonth-$birthDay";

    $phone = $_POST['phoneNumber1'] . '-' . $_POST['phoneNumber2'] . '-' . $_POST['phoneNumber3'];
    $phone = mysqli_real_escape_string($connect, $phone);

    $address1 = mysqli_real_escape_string($connect, $_POST['address1']);
    $address2 = mysqli_real_escape_string($connect, $_POST['address2']);
    $fullAddress = $address1 . ' ' . $address2;

    // 2. 이메일 중복 체크
    $checkQuery = "SELECT id FROM member WHERE email = '$email'";
    $checkResult = mysqli_query($connect, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<script>alert('이미 존재하는 이메일입니다.'); history.back();</script>";
        exit();
    }

    // 3. 회원 정보 insert (주소 포함)
    $insertQuery = "
        INSERT INTO member (email, name, password, phone, phone_number, birth_date, gender, address, created_at)
        VALUES ('$email', '$name', '$password', '$phone', '$phone', '$birthDate', '$gender', '$fullAddress', NOW())
    ";
    $result = mysqli_query($connect, $insertQuery);

    if ($result) {
        echo "<script>
            alert('회원가입이 완료되었습니다!');
            location.href = '/log-in.php';
        </script>";
    } else {
        echo "<script>
            alert('회원가입 실패: DB 오류 발생');
            history.back();
        </script>";
    }
} else {
    echo "잘못된 요청입니다.";
}
?>
