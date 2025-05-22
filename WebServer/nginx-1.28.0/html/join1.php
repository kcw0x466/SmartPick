<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 회원가입</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            /* 라이트 모드 (기본) 변수 */
            --primary: #e93170;
            --primary-dark: #d42665;
            --primary-light: #ffedf3;
            --secondary: #f8f9fa;
            --dark: #343a40;
            --white: #ffffff;
            --gray: #e0e0e0;
            --gray-light: #f8f9fa;
            --text: #212529;
            --body-bg: #ffffff;
            --card-bg: #ffffff;
            --header-bg: #ffffff;
            --border-color: #e0e0e0;
            --error: #dc3545;
            --success: #28a745;
            --border-radius: 10px;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        /* 다크 모드 변수 */
        [data-theme="dark"] {
            --primary: #4287f5;
            /* 핑크색에서 파란색으로 변경 */
            --primary-dark: #2e6ad1;
            /* 더 어두운 파란색 */
            --primary-light: #213547;
            /* 파란색 계열의 어두운 배경 */
            --secondary: #343a40;
            --dark: #f8f9fa;
            --white: #343a40;
            --gray: #495057;
            --gray-light: #343a40;
            --text: #f8f9fa;
            --body-bg: #212529;
            --card-bg: #343a40;
            --header-bg: #282c31;
            --border-color: #495057;
            --error: #ff6b6b;
            --success: #51cf66;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Noto Sans KR', sans-serif;
        }

        body {
            background-color: var(--body-bg);
            color: var(--text);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: relative;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Header styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: var(--header-bg);
            position: sticky;
            top: 0;
            z-index: 1000;
            max-width: 1280px;
            margin: 0 auto;
            width: 100%;
            padding: 15px 20px;
            border-bottom: 1px solid var(--border-color);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: background-color 0.3s ease;
        }

        .logo {
            display: flex;
            align-items: center;
            font-weight: bold;
            font-size: 24px;
            color: var(--primary);
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
        }

        .logo:hover {
            transform: scale(1.05);
        }

    

        .logo-box {
            background-color: var(--gray);
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: var(--border-radius);
            margin-right: 10px;
            font-size: 14px;
            line-height: 1.2;
            text-align: center;
            color: var(--primary);
            /* 텍스트 색상 원래대로 수정 */
            box-shadow: none;
            /* 그림자 제거 */
        }

        /* 다크 모드 토글 버튼 */
        .theme-toggle {
            background-color: var(--secondary);
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            color: var(--text);
        }

        .theme-toggle:hover {
            background-color: var(--gray);
            transform: rotate(30deg);
        }

        /* Main Content */
        .main-container {
            max-width: 1280px;
            margin: 0 auto;
            width: 100%;
            padding: 40px 20px;
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-container {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            width: 100%;
            max-width: 560px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .register-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .register-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, var(--primary), var(--primary-dark));
        }

        .title-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .page-subtitle {
            font-size: 16px;
            color: var(--text);
            opacity: 0.8;
            line-height: 1.6;
        }

        /* Progress steps */
        .progress-container {
            display: flex;
            justify-content: space-between;
            margin: 30px 0;
            position: relative;
        }

        .progress-container::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 100%;
            height: 3px;
            background-color: var(--gray);
            z-index: 1;
        }

        .progress-bar {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 33.33%;
            height: 3px;
            background: linear-gradient(to right, var(--primary), var(--primary-dark));
            z-index: 2;
            transition: width 0.5s ease;
        }

        .step {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--card-bg);
            border: 3px solid var(--gray);
            font-weight: 600;
            color: var(--text);
            position: relative;
            z-index: 3;
            transition: var(--transition);
        }

        .step.active {
            background-color: var(--primary);
            border-color: var(--primary);
            color: white;
            box-shadow: 0 0 0 5px rgba(233, 49, 112, 0.2);
        }

        .step.completed {
            background-color: var(--primary);
            border-color: var(--primary);
            color: white;
        }

        .step.completed::after {
            content: '✓';
            position: absolute;
        }

        .step-label {
            position: absolute;
            top: 45px;
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
            font-size: 12px;
            color: var(--text);
            font-weight: 500;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 15px;
            display: flex;
            align-items: center;
            color: var(--text);
        }

        .required-mark {
            color: var(--primary);
            margin-left: 4px;
        }

        .form-input {
            width: 100%;
            padding: 15px 20px 15px 45px;
            border: 2px solid var(--border-color);
            border-radius: 50px;
            font-size: 16px;
            transition: var(--transition);
            outline: none;
            background-color: var(--secondary);
            color: var(--text);
        }

        .form-input:focus {
            border-color: var(--primary);
            background-color: var(--card-bg);
            box-shadow: 0 0 0 3px rgba(233, 49, 112, 0.2);
        }

        .form-input.error {
            border-color: var(--error);
            background-color: rgba(220, 53, 69, 0.05);
        }

        .form-input.error:focus {
            box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.2);
        }

        .error-message {
            color: var(--error);
            font-size: 12px;
            margin-top: 5px;
            padding-left: 45px;
            display: none;
        }

        .error-message.show {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-icon {
            position: absolute;
            left: 18px;
            top: 43px;
            color: var(--text);
            opacity: 0.6;
            transition: var(--transition);
        }

        .form-input:focus+.form-icon {
            color: var(--primary);
            opacity: 1;
        }

        .form-input.error+.form-icon {
            color: var(--error);
            opacity: 1;
        }

        .next-button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(to right, var(--primary), var(--primary-dark));
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .next-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .next-button:active {
            transform: translateY(0);
        }

        .privacy-agreement {
            margin-top: 30px;
            padding: 20px;
            background-color: var(--secondary);
            border-radius: var(--border-radius);
            font-size: 14px;
            border-left: 4px solid var(--primary);
            transition: background-color 0.3s ease;
        }

        .agreement-check {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .agreement-check input[type="checkbox"] {
            margin-right: 10px;
            width: 18px;
            height: 18px;
            border-radius: 3px;
            accent-color: var(--primary);
            cursor: pointer;
        }

        .agreement-check label {
            cursor: pointer;
            user-select: none;
            font-weight: 500;
            color: var(--text);
        }

        .agreement-details {
            margin-top: 10px;
            padding-left: 28px;
            font-size: 13px;
            color: var(--text);
            opacity: 0.8;
            line-height: 1.6;
        }

        .form-helper {
            margin-top: 25px;
            font-size: 14px;
            text-align: center;
            color: var(--text);
            opacity: 0.8;
            line-height: 1.5;
        }

        .form-helper a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }

        .form-helper a:hover {
            text-decoration: underline;
        }

        .bottom-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .bottom-link {
            color: var(--text);
            text-decoration: none;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 14px;
            padding: 8px 16px;
            background-color: var(--secondary);
            border-radius: 20px;
        }

        .bottom-link:hover {
            color: var(--primary);
            background-color: var(--card-bg);
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        /* Toast notification */
        .toast {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%) translateY(100px);
            background-color: var(--dark);
            color: white;
            padding: 12px 25px;
            border-radius: 30px;
            font-size: 14px;
            z-index: 1000;
            opacity: 0;
            transition: all 0.4s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .toast.show {
            transform: translateX(-50%) translateY(0);
            opacity: 1;
        }

        .toast.success {
            background-color: var(--success);
        }

        .toast.error {
            background-color: var(--error);
        }

        .toast i {
            font-size: 18px;
        }

        /* 반응형 디자인 */
        @media (max-width: 576px) {
            .register-container {
                padding: 30px 20px;
                max-width: 100%;
                margin: 0 15px;
            }

            .page-title {
                font-size: 24px;
            }

            .progress-container {
                margin: 20px 0;
            }

            .step {
                width: 30px;
                height: 30px;
                font-size: 14px;
            }

            .step-label {
                font-size: 11px;
            }
        }
    </style>
</head>

<body>
    <!-- Toast notification -->
    <div class="toast" id="toast">
        <i class="fas fa-exclamation-circle"></i>
        <span id="toast-message">이메일을 확인해주세요.</span>
    </div>

    <!-- Header -->
    <header>
        <a href="mainpage.html" class="logo">
            <div class="logo">
                <div class="logo-box">스마<br>트픽</div>
                <span>스마트픽</span>
            </div>
        </a>
        <button class="theme-toggle" id="themeToggle" aria-label="테마 변경">
            <i class="fas fa-sun"></i>
        </button>
    </header>

    <!-- Main Content -->
    <div class="main-container">
        <div class="register-container">
            <div class="title-container">
                <h1 class="page-title">회원가입</h1>
                <p class="page-subtitle">스마트픽에 오신 것을 환영합니다!<br>몇 가지 단계를 통해 빠르게 회원가입을 완료해보세요.</p>
            </div>

            <!-- Progress steps -->
            <div class="progress-container">
                <div class="progress-bar"></div>
                <div class="step active">1
                    <span class="step-label">이메일 인증</span>
                </div>
                <div class="step">2
                    <span class="step-label">정보 입력</span>
                </div>
                <div class="step">3
                    <span class="step-label">가입 완료</span>
                </div>
            </div>

            <form id="registerStep1Form" onsubmit="return validateStep1()">
                <div class="form-group">
                    <label for="userEmail" class="form-label">
                        이메일 주소<span class="required-mark">*</span>
                    </label>
                    <input type="email" id="userEmail" class="form-input" placeholder="사용하실 이메일 주소를 입력하세요" required
                        oninput="validateEmailFormat()">
                    <i class="fas fa-envelope form-icon"></i>
                    <div class="error-message" id="emailError">이메일 형식이 올바르지 않습니다. (@와 .com을 포함해야 합니다)</div>
                </div>

                <div class="privacy-agreement">
                    <div class="agreement-check">
                        <input type="checkbox" id="privacyAgree" required>
                        <label for="privacyAgree">개인정보 수집 및 이용에 동의합니다. (필수)</label>
                    </div>
                    <div class="agreement-details">
                        수집항목: 이메일 주소<br>
                        수집목적: 회원가입 및 계정 관리, 서비스 제공<br>
                        보유기간: 회원 탈퇴 시까지
                    </div>
                </div>

                <div class="agreement-check">
                    <input type="checkbox" id="marketingAgree">
                    <label for="marketingAgree">마케팅 정보 수신에 동의합니다. (선택)</label>
                </div>

                <button type="submit" class="next-button">
                    <span>다음</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </form>

            <p class="form-helper">
                입력하신 이메일로 인증 코드가 전송됩니다.<br>
                이미 계정이 있으신가요? <a href="log-in.html">로그인하기</a>
            </p>

            <div class="bottom-links">
                <a href="mainpage.html" class="bottom-link">
                    <i class="fas fa-home"></i>
                    메인페이지로
                </a>
            </div>
        </div>
    </div>

    <script>
        // DOM 로드 시 테마 설정
        document.addEventListener('DOMContentLoaded', function () {
            initTheme();
        });

        // 테마 초기화 및 설정
        function initTheme() {
            const themeToggle = document.getElementById('themeToggle');
            const themeIcon = themeToggle.querySelector('i');
            const savedTheme = localStorage.getItem('theme') || 'light';

            // 저장된 테마 적용
            if (savedTheme === 'dark') {
                document.documentElement.setAttribute('data-theme', 'dark');
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
            }

            // 테마 토글 이벤트
            themeToggle.addEventListener('click', function () {
                const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
                const newTheme = currentTheme === 'light' ? 'dark' : 'light';

                document.documentElement.setAttribute('data-theme', newTheme);
                localStorage.setItem('theme', newTheme);

                // 아이콘 변경
                if (newTheme === 'dark') {
                    themeIcon.classList.remove('fa-sun');
                    themeIcon.classList.add('fa-moon');
                } else {
                    themeIcon.classList.remove('fa-moon');
                    themeIcon.classList.add('fa-sun');
                }
            });
        }

        // 요소 참조
        const emailInput = document.getElementById('userEmail');
        const emailError = document.getElementById('emailError');
        const privacyAgree = document.getElementById('privacyAgree');
        const form = document.getElementById('registerStep1Form');

        // 이메일 형식 검증 함수
        function validateEmailFormat() {
            const email = emailInput.value.trim();
            const isValid = email.includes('@') && email.includes('.com');

            if (email && !isValid) {
                emailInput.classList.add('error');
                emailError.classList.add('show');
                return false;
            } else {
                emailInput.classList.remove('error');
                emailError.classList.remove('show');
                return true;
            }
        }

        // 토스트 메시지 표시 함수
        function showToast(message, type = 'error') {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toast-message');
            const icon = toast.querySelector('i');

            // 토스트 타입에 따라 스타일 및 아이콘 변경
            toast.className = 'toast';
            toast.classList.add(type);

            if (type === 'success') {
                icon.className = 'fas fa-check-circle';
            } else if (type === 'error') {
                icon.className = 'fas fa-exclamation-circle';
            }

            toastMessage.textContent = message;
            toast.classList.add('show');

            setTimeout(function () {
                toast.classList.remove('show');
            }, 3000);
        }

        // 폼 유효성 검사 및 제출
        function validateStep1() {
            const email = emailInput.value.trim();
            const isPrivacyChecked = privacyAgree.checked;

            // 이메일 형식 검증
            if (!email.includes('@') || !email.includes('.com')) {
                showToast('올바른 이메일 형식을 입력해주세요. (@와 .com을 포함해야 합니다)', 'error');
                emailInput.classList.add('error');
                emailError.classList.add('show');
                return false;
            }

            // 개인정보 동의 확인
            if (!isPrivacyChecked) {
                showToast('개인정보 수집 및 이용에 동의해주세요.', 'error');
                return false;
            }

            // 이메일 중복 체크 시뮬레이션 (실제로는 서버에서 확인)
            const isEmailAvailable = true; // 서버에서 확인한 결과

            if (!isEmailAvailable) {
                showToast('이미 사용 중인 이메일입니다.', 'error');
                return false;
            }

            // 성공 메시지 표시
            showToast('이메일로 인증 코드가 전송되었습니다.', 'success');

            // 다음 단계로 이동 (여기서는 회원가입 2단계 페이지로 이동 시뮬레이션)
            setTimeout(function () {
                // 실제로는 다음 페이지로 이메일 정보를 전달해야 합니다.
                window.location.href = 'join2.html?email=' + encodeURIComponent(email);
            }, 1500);

            return false; // 실제 폼 제출 방지
        }

        // 입력 필드 이벤트 설정
        emailInput.addEventListener('blur', validateEmailFormat);

        // 폼 제출 이벤트
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            validateStep1();
        });
    </script>
</body>

</html>