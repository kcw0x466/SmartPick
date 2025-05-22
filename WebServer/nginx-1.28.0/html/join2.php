<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 회원가입 (2/3)</title>
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
            --success: #28a745;
            --warning: #ffc107;
            --danger: #dc3545;
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
            --success: #5cb85c;
            --warning: #f0ad4e;
            --danger: #ff453a;
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
            transition: background-color 0.3s ease, border-color 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
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
            max-width: 700px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
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
            padding: 0 40px;
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
            width: 66.66%;
            height: 3px;
            background-color: var(--primary);
            z-index: 2;
            transition: width 0.3s ease;
        }

        .step {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--card-bg);
            border: 3px solid var(--gray);
            font-weight: 600;
            font-size: 16px;
            color: var(--text);
            position: relative;
            z-index: 3;
            transition: var(--transition);
        }

        .step.active {
            background-color: var(--primary);
            border-color: var(--primary);
            color: white;
            transform: scale(1.1);
            box-shadow: 0 0 0 5px rgba(233, 49, 112, 0.2);
        }

        [data-theme="dark"] .step.active {
            box-shadow: 0 0 0 5px rgba(66, 135, 245, 0.2);
        }

        .step.completed {
            background-color: var(--primary);
            border-color: var(--primary);
            color: white;
        }

        .step-label {
            position: absolute;
            top: 50px;
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
            font-size: 14px;
            font-weight: 500;
            color: var(--text);
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
            font-size: 15px;
            color: var(--text);
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

        [data-theme="dark"] .form-input:focus {
            box-shadow: 0 0 0 3px rgba(66, 135, 245, 0.2);
        }

        .form-icon {
            position: absolute;
            left: 18px;
            top: 45px;
            color: var(--text);
            opacity: 0.6;
            transition: var(--transition);
        }

        .form-input:focus+.form-icon {
            color: var(--primary);
            opacity: 1;
        }

        .pw-toggle {
            position: absolute;
            right: 20px;
            top: 45px;
            color: var(--text);
            opacity: 0.6;
            cursor: pointer;
            transition: var(--transition);
        }

        .pw-toggle:hover {
            opacity: 1;
            color: var(--primary);
        }

        /* Password strength meter */
        .password-strength {
            margin-top: 15px;
            height: 6px;
            border-radius: 3px;
            background-color: var(--gray);
            overflow: hidden;
            position: relative;
        }

        .password-strength-bar {
            height: 100%;
            width: 0;
            transition: width 0.3s ease, background-color 0.3s ease;
        }

        .password-strength-text {
            font-size: 14px;
            margin-top: 8px;
            display: flex;
            justify-content: flex-end;
            font-weight: 500;
        }

        /* Password requirements */
        .password-requirements {
            margin-top: 20px;
            padding: 15px;
            background-color: var(--secondary);
            border-radius: var(--border-radius);
            transition: background-color 0.3s ease;
        }

        .requirement {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            font-size: 14px;
            color: var(--text);
            opacity: 0.8;
            transition: var(--transition);
        }

        .requirement i {
            margin-right: 10px;
            font-size: 14px;
            width: 16px;
            text-align: center;
        }

        .requirement.valid {
            color: var(--success);
            opacity: 1;
        }

        .requirement.valid i {
            color: var(--success);
        }

        /* Password complexity section */
        .password-complexity {
            margin-top: 25px;
            background-color: var(--secondary);
            padding: 15px;
            border-radius: var(--border-radius);
            transition: background-color 0.3s ease;
        }

        .radio-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 15px;
        }

        .radio-option {
            display: flex;
            align-items: center;
            cursor: pointer;
            padding: 5px 0;
        }

        .radio-option input[type="radio"] {
            margin-right: 10px;
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
        }

        .radio-label {
            font-size: 15px;
            color: var(--text);
        }

        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .back-button {
            flex: 1;
            padding: 15px;
            background-color: var(--secondary);
            color: var(--text);
            border: 2px solid var(--border-color);
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .back-button:hover {
            background-color: var(--gray);
            transform: translateY(-2px);
        }

        .next-button {
            flex: 2;
            padding: 15px;
            background: linear-gradient(to right, var(--primary), var(--primary-dark));
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
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
            transform: translateY(-1px);
        }

        .form-helper {
            margin-top: 25px;
            font-size: 14px;
            text-align: center;
            color: var(--text);
            opacity: 0.8;
            line-height: 1.5;
            background-color: var(--secondary);
            padding: 12px;
            border-radius: var(--border-radius);
            border-left: 3px solid var(--primary);
            transition: background-color 0.3s ease;
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
            background-color: var(--danger);
        }

        .toast i {
            font-size: 18px;
        }

        /* 반응형 디자인 */
        @media (max-width: 768px) {
            .register-container {
                padding: 30px 20px;
                max-width: 100%;
            }

            .page-title {
                font-size: 24px;
            }

            .progress-container {
                padding: 0 20px;
            }

            .button-group {
                flex-direction: column;
            }

            .back-button,
            .next-button {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Toast notification -->
    <div class="toast" id="toast">
        <i class="fas fa-exclamation-circle"></i>
        <span id="toast-message">비밀번호를 확인해주세요.</span>
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
                <h1 class="page-title">회원가입 (2/3)</h1>
                <p class="page-subtitle">안전한 비밀번호를 설정해주세요.</p>
            </div>

            <!-- Progress steps -->
            <div class="progress-container">
                <div class="progress-bar"></div>
                <div class="step completed">
                    <i class="fas fa-check"></i>
                    <span class="step-label">이메일 인증</span>
                </div>
                <div class="step active">2
                    <span class="step-label">정보 입력</span>
                </div>
                <div class="step">3
                    <span class="step-label">가입 완료</span>
                </div>
            </div>

            <form id="registerStep2Form" onsubmit="return validateStep2()">
                <div class="form-group">
                    <label for="userPassword" class="form-label">비밀번호</label>
                    <input type="password" id="userPassword" class="form-input" placeholder="비밀번호를 입력하세요" required>
                    <i class="fas fa-lock form-icon"></i>
                    <i class="fas fa-eye pw-toggle" id="pwToggle"></i>

                    <div class="password-strength">
                        <div class="password-strength-bar" id="strengthBar"></div>
                    </div>
                    <div class="password-strength-text" id="strengthText"></div>

                    <div class="password-requirements">
                        <div class="requirement" id="lengthReq">
                            <i class="fas fa-circle"></i>
                            <span>8자 이상</span>
                        </div>
                        <div class="requirement" id="letterReq">
                            <i class="fas fa-circle"></i>
                            <span>문자 1개 이상</span>
                        </div>
                        <div class="requirement" id="numberReq">
                            <i class="fas fa-circle"></i>
                            <span>숫자 1개 이상</span>
                        </div>
                        <div class="requirement" id="specialReq">
                            <i class="fas fa-circle"></i>
                            <span>특수문자 1개 이상</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirmPassword" class="form-label">비밀번호 확인</label>
                    <input type="password" id="confirmPassword" class="form-input" placeholder="비밀번호를 다시 입력하세요"
                        required>
                    <i class="fas fa-lock form-icon"></i>
                    <i class="fas fa-eye pw-toggle" id="confirmPwToggle"></i>
                </div>

                <div class="password-complexity">
                    <label class="form-label">비밀번호 복잡도 설정:</label>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="complexity" value="option1" checked>
                            <span class="radio-label">기본 (문자 + 숫자)</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="complexity" value="option2">
                            <span class="radio-label">중간 (문자 + 숫자 + 특수문자)</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="complexity" value="option3">
                            <span class="radio-label">높음 (대소문자 + 숫자 + 특수문자)</span>
                        </label>
                    </div>
                </div>

                <div class="button-group">
                    <button type="button" class="back-button" onclick="goBack()">
                        <i class="fas fa-arrow-left"></i>
                        <span>이전</span>
                    </button>
                    <button type="submit" class="next-button">
                        <span>다음</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </form>

            <p class="form-helper">
                <i class="fas fa-info-circle"></i>
                보안을 위해 이전에 사용하지 않은 비밀번호를 설정해주세요.
            </p>
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

        // 비밀번호 표시/숨기기 토글
        document.getElementById('pwToggle').addEventListener('click', function () {
            togglePassword('userPassword', this);
        });

        document.getElementById('confirmPwToggle').addEventListener('click', function () {
            togglePassword('confirmPassword', this);
        });

        function togglePassword(inputId, iconElement) {
            const passwordInput = document.getElementById(inputId);

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                iconElement.classList.remove('fa-eye');
                iconElement.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                iconElement.classList.remove('fa-eye-slash');
                iconElement.classList.add('fa-eye');
            }
        }

        // 비밀번호 강도 체크
        document.getElementById('userPassword').addEventListener('input', function () {
            checkPasswordStrength(this.value);
            validatePassword(this.value);
        });

        // 비밀번호 확인 일치 체크
        document.getElementById('confirmPassword').addEventListener('input', function () {
            const password = document.getElementById('userPassword').value;
            if (this.value === password) {
                this.style.borderColor = 'var(--success)';
            } else {
                this.style.borderColor = this.value ? 'var(--danger)' : 'var(--border-color)';
            }
        });

        // 비밀번호 강도 체크 함수
        function checkPasswordStrength(password) {
            const strengthBar = document.getElementById('strengthBar');
            const strengthText = document.getElementById('strengthText');

            // 초기화
            strengthBar.style.width = '0%';
            strengthBar.style.backgroundColor = 'var(--gray)';
            strengthText.textContent = '';

            if (password.length === 0) {
                return;
            }

            // 강도 계산 (간단한 버전)
            let strength = 0;

            // 길이 체크
            if (password.length >= 8) {
                strength += 25;
            }

            // 문자 포함 체크
            if (/[a-zA-Z]/.test(password)) {
                strength += 25;
            }

            // 숫자 포함 체크
            if (/\d/.test(password)) {
                strength += 25;
            }

            // 특수문자 포함 체크
            if (/[^a-zA-Z0-9]/.test(password)) {
                strength += 25;
            }

            // 강도 표시
            strengthBar.style.width = `${strength}%`;

            if (strength <= 25) {
                strengthBar.style.backgroundColor = 'var(--danger)';
                strengthText.textContent = '매우 약함';
                strengthText.style.color = 'var(--danger)';
            } else if (strength <= 50) {
                strengthBar.style.backgroundColor = 'var(--warning)';
                strengthText.textContent = '약함';
                strengthText.style.color = 'var(--warning)';
            } else if (strength <= 75) {
                strengthBar.style.backgroundColor = 'var(--primary)';
                strengthText.textContent = '보통';
                strengthText.style.color = 'var(--primary)';
            } else {
                strengthBar.style.backgroundColor = 'var(--success)';
                strengthText.textContent = '강함';
                strengthText.style.color = 'var(--success)';
            }
        }

        // 비밀번호 요구사항 체크
        function validatePassword(password) {
            // 길이 체크
            const lengthReq = document.getElementById('lengthReq');
            if (password.length >= 8) {
                lengthReq.classList.add('valid');
                lengthReq.querySelector('i').className = 'fas fa-check-circle';
            } else {
                lengthReq.classList.remove('valid');
                lengthReq.querySelector('i').className = 'fas fa-circle';
            }

            // 문자 포함 체크
            const letterReq = document.getElementById('letterReq');
            if (/[a-zA-Z]/.test(password)) {
                letterReq.classList.add('valid');
                letterReq.querySelector('i').className = 'fas fa-check-circle';
            } else {
                letterReq.classList.remove('valid');
                letterReq.querySelector('i').className = 'fas fa-circle';
            }

            // 숫자 포함 체크
            const numberReq = document.getElementById('numberReq');
            if (/\d/.test(password)) {
                numberReq.classList.add('valid');
                numberReq.querySelector('i').className = 'fas fa-check-circle';
            } else {
                numberReq.classList.remove('valid');
                numberReq.querySelector('i').className = 'fas fa-circle';
            }

            // 특수문자 포함 체크
            const specialReq = document.getElementById('specialReq');
            if (/[^a-zA-Z0-9]/.test(password)) {
                specialReq.classList.add('valid');
                specialReq.querySelector('i').className = 'fas fa-check-circle';
            } else {
                specialReq.classList.remove('valid');
                specialReq.querySelector('i').className = 'fas fa-circle';
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
        function validateStep2() {
            const password = document.getElementById('userPassword').value.trim();
            const confirmPassword = document.getElementById('confirmPassword').value.trim();

            // 비밀번호 유효성 검사
            if (password.length < 8) {
                showToast('비밀번호는 8자 이상이어야 합니다.', 'error');
                return false;
            }

            if (!/[a-zA-Z]/.test(password)) {
                showToast('비밀번호에 최소 1개의 문자가 포함되어야 합니다.', 'error');
                return false;
            }

            if (!/\d/.test(password)) {
                showToast('비밀번호에 최소 1개의 숫자가 포함되어야 합니다.', 'error');
                return false;
            }

            if (!/[^a-zA-Z0-9]/.test(password)) {
                showToast('비밀번호에 최소 1개의 특수문자가 포함되어야 합니다.', 'error');
                return false;
            }

            // 비밀번호 확인 일치 검사
            if (password !== confirmPassword) {
                showToast('비밀번호가 일치하지 않습니다.', 'error');
                return false;
            }

            // 모든 조건을 만족하면 다음 단계로 이동
            showToast('비밀번호가 성공적으로 설정되었습니다.', 'success');

            // 다음 단계로 이동 (회원가입 3단계 페이지로 이동)
            setTimeout(function () {
                window.location.href = 'join3.html';
            }, 1500);

            return false; // 실제 폼 제출 방지
        }

        // 이전 단계로 이동
        function goBack() {
            window.location.href = 'join1.html'; // 회원가입 1단계 페이지로 이동
        }

        // 입력 필드 포커스/블러 효과
        const inputFields = document.querySelectorAll('.form-input');
        inputFields.forEach(field => {
            field.addEventListener('focus', function () {
                this.parentElement.classList.add('focused');
            });

            field.addEventListener('blur', function () {
                if (this.value === '') {
                    this.parentElement.classList.remove('focused');
                }
            });
        });
    </script>
</body>

</html>