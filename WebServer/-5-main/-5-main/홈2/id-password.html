<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 아이디/비밀번호 찾기</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
            --danger: #d9534f;
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
            transition: var(--transition);
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

        .find-account-container {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            width: 100%;
            max-width: 500px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            transition: background-color 0.3s ease;
        }

        .find-account-container::before {
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
        }

        /* Tabs */
        .tabs {
            display: flex;
            margin-bottom: 30px;
            position: relative;
            border-bottom: 1px solid var(--border-color);
        }

        .tab {
            flex: 1;
            text-align: center;
            padding: 15px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            position: relative;
            transition: var(--transition);
            color: var(--text);
            opacity: 0.7;
        }

        .tab.active {
            color: var(--primary);
            opacity: 1;
            font-weight: 600;
        }

        .tab-indicator {
            position: absolute;
            bottom: -1px;
            height: 3px;
            width: 50%;
            background-color: var(--primary);
            transition: var(--transition);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .form-title {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 25px;
            color: var(--text);
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

        .form-icon {
            position: absolute;
            left: 18px;
            top: 43px;
            color: var(--dark);
            opacity: 0.6;
            transition: var(--transition);
        }

        .form-input:focus+.form-icon {
            color: var(--primary);
            opacity: 1;
        }

        .find-button {
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
            margin-top: 15px;
        }

        .find-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(233, 49, 112, 0.3);
        }

        .find-button:active {
            transform: translateY(0);
        }

        .form-helper {
            margin-top: 25px;
            font-size: 14px;
            text-align: center;
            color: var(--text);
            opacity: 0.8;
            line-height: 1.5;
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
        }

        .bottom-link:hover {
            color: var(--primary);
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

        .toast i {
            font-size: 18px;
        }

        /* Phone verification UI */
        .verification-ui {
            display: none;
            margin-top: 25px;
            background-color: var(--secondary);
            padding: 15px;
            border-radius: var(--border-radius);
            border-left: 4px solid var(--primary);
        }

        .verification-ui.show {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        .verification-title {
            font-weight: 600;
            font-size: 15px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text);
        }

        .verification-input-group {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .verification-input {
            flex: 1;
            padding: 12px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            text-align: center;
            font-size: 15px;
            outline: none;
            transition: var(--transition);
            background-color: var(--body-bg);
            color: var(--text);
        }

        .verification-input:focus {
            border-color: var(--primary);
        }

        .verification-button {
            padding: 12px 20px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 500;
        }

        .verification-button:hover {
            background-color: var(--primary-dark);
        }

        .timer {
            color: var(--primary);
            font-weight: 600;
            margin-left: 10px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* 반응형 디자인 */
        @media (max-width: 576px) {
            .find-account-container {
                padding: 30px 20px;
                max-width: 100%;
                margin: 0 15px;
            }

            .page-title {
                font-size: 24px;
            }

            .tab {
                padding: 12px 5px;
                font-size: 15px;
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
            <div class="logo" onclick="window.location.href='mainpage.html'">
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
        <div class="find-account-container">
            <div class="title-container">
                <h1 class="page-title">스마트픽</h1>
                <p class="page-subtitle">아이디 또는 비밀번호를 잊으셨나요?</p>
            </div>

            <div class="tabs">
                <div class="tab active" id="findIdTab" onclick="switchTab('findId')">아이디 찾기</div>
                <div class="tab" id="findPwTab" onclick="switchTab('findPw')">비밀번호 찾기</div>
                <div class="tab-indicator" id="tabIndicator"></div>
            </div>

            <!-- 아이디 찾기 탭 -->
            <div class="tab-content active" id="findIdContent">
                <h2 class="form-title">내 정보에 등록된 이메일로 찾기</h2>

                <form id="findIdForm" onsubmit="return handleFindId()">
                    <div class="form-group">
                        <label for="idEmail" class="form-label">이메일 주소</label>
                        <input type="email" id="idEmail" class="form-input" placeholder="가입 시 등록한 이메일을 입력하세요" required>
                        <i class="fas fa-envelope form-icon"></i>
                    </div>

                    <div class="verification-ui" id="idVerificationUI">
                        <div class="verification-title">
                            <i class="fas fa-mobile-alt"></i>
                            휴대폰 인증
                        </div>
                        <div class="verification-input-group">
                            <input type="text" class="verification-input" id="idVerificationCode" placeholder="인증번호 6자리"
                                maxlength="6">
                            <button type="button" class="verification-button" id="idVerifyButton">확인</button>
                        </div>
                        <div>인증번호 유효시간: <span class="timer" id="idVerificationTimer">03:00</span></div>
                    </div>

                    <button type="submit" class="find-button">인증번호 받기</button>
                </form>

                <p class="form-helper">
                    가입 시 등록한 이메일로 인증 후 아이디를 알려드립니다.<br>
                    이메일을 잊으셨다면 고객센터로 문의해주세요.
                </p>
            </div>

            <!-- 비밀번호 찾기 탭 -->
            <div class="tab-content" id="findPwContent">
                <h2 class="form-title">비밀번호를 재설정할 계정 정보를 입력해주세요</h2>

                <form id="findPwForm" onsubmit="return handleFindPw()">
                    <div class="form-group">
                        <label for="pwUserId" class="form-label">아이디</label>
                        <input type="text" id="pwUserId" class="form-input" placeholder="아이디를 입력하세요" required>
                        <i class="fas fa-user form-icon"></i>
                    </div>

                    <div class="form-group">
                        <label for="pwEmail" class="form-label">이메일 주소</label>
                        <input type="email" id="pwEmail" class="form-input" placeholder="가입 시 등록한 이메일을 입력하세요" required>
                        <i class="fas fa-envelope form-icon"></i>
                    </div>

                    <div class="verification-ui" id="pwVerificationUI">
                        <div class="verification-title">
                            <i class="fas fa-mobile-alt"></i>
                            인증번호 확인
                        </div>
                        <div class="verification-input-group">
                            <input type="text" class="verification-input" id="pwVerificationCode" placeholder="인증번호 6자리"
                                maxlength="6">
                            <button type="button" class="verification-button" id="pwVerifyButton">확인</button>
                        </div>
                        <div>인증번호 유효시간: <span class="timer" id="pwVerificationTimer">03:00</span></div>
                    </div>

                    <button type="submit" class="find-button">인증번호 받기</button>
                </form>

                <p class="form-helper">
                    인증 후 비밀번호를 재설정할 수 있습니다.<br>
                    아이디를 모르시면 먼저 아이디 찾기를 진행해주세요.
                </p>
            </div>

            <div class="bottom-links">
                <a href="log-in.html" class="bottom-link">
                    <i class="fas fa-sign-in-alt"></i>
                    로그인 페이지로
                </a>
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

        // 탭 전환 기능
        function switchTab(tabId) {
            const tabs = document.querySelectorAll('.tab');
            const tabContents = document.querySelectorAll('.tab-content');
            const tabIndicator = document.getElementById('tabIndicator');

            tabs.forEach(tab => tab.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));

            if (tabId === 'findId') {
                document.getElementById('findIdTab').classList.add('active');
                document.getElementById('findIdContent').classList.add('active');
                tabIndicator.style.left = '0';
            } else {
                document.getElementById('findPwTab').classList.add('active');
                document.getElementById('findPwContent').classList.add('active');
                tabIndicator.style.left = '50%';
            }
        }

        // 토스트 메시지 표시 함수
        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toast-message');

            toastMessage.textContent = message;
            toast.classList.add('show');

            setTimeout(function () {
                toast.classList.remove('show');
            }, 3000);
        }

        // 이메일 유효성 검사 (.com 필수)
        function validateEmail(email) {
            // .com이 포함되어 있는지 확인
            return email.includes('.com') && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }

        // 아이디 찾기 폼 처리
        function handleFindId() {
            const email = document.getElementById('idEmail').value.trim();
            const verificationUI = document.getElementById('idVerificationUI');

            if (!validateEmail(email)) {
                showToast('.com이 포함된 올바른 이메일 형식을 입력해주세요.');
                return false;
            }

            // 이미 인증UI가 표시된 상태라면 다른 동작 필요
            if (verificationUI.classList.contains('show')) {
                // 여기서는 새 인증번호 요청으로 처리
                showToast('인증번호가 재전송되었습니다.');
                startTimer('idVerificationTimer');
                return false;
            }

            // 인증 UI 표시
            verificationUI.classList.add('show');

            // 버튼 텍스트 변경
            document.querySelector('#findIdForm .find-button').textContent = '인증번호 재전송';

            // 타이머 시작
            startTimer('idVerificationTimer');

            showToast('인증번호를 보냈습니다.');

            return false;
        }

        // 비밀번호 찾기 폼 처리
        function handleFindPw() {
            const userId = document.getElementById('pwUserId').value.trim();
            const email = document.getElementById('pwEmail').value.trim();
            const verificationUI = document.getElementById('pwVerificationUI');

            // 아이디가 8자리인지 확인
            if (userId.length !== 8) {
                showToast('아이디는 정확히 8자리로 입력해주세요.');
                return false;
            }

            if (!validateEmail(email)) {
                showToast('.com이 포함된 올바른 이메일 형식을 입력해주세요.');
                return false;
            }

            // 이미 인증UI가 표시된 상태라면 다른 동작 필요
            if (verificationUI.classList.contains('show')) {
                // 여기서는 새 인증번호 요청으로 처리
                showToast('인증번호가 재전송되었습니다.');
                startTimer('pwVerificationTimer');
                return false;
            }

            // 인증 UI 표시
            verificationUI.classList.add('show');

            // 버튼 텍스트 변경
            document.querySelector('#findPwForm .find-button').textContent = '인증번호 재전송';

            // 타이머 시작
            startTimer('pwVerificationTimer');

            showToast('인증번호를 보냈습니다.');

            return false;
        }

        // 타이머 기능
        function startTimer(timerId) {
            let timer = document.getElementById(timerId);
            let time = 180; // 3분

            clearInterval(window[timerId + 'Interval']);

            window[timerId + 'Interval'] = setInterval(function () {
                let minutes = Math.floor(time / 60);
                let seconds = time % 60;

                timer.textContent = minutes.toString().padStart(2, '0') + ':' + seconds.toString().padStart(2, '0');

                if (time <= 0) {
                    clearInterval(window[timerId + 'Interval']);
                    timer.textContent = '00:00';
                    showToast('인증번호가 만료되었습니다. 다시 요청해주세요.');
                }

                time--;
            }, 1000);
        }

        // 인증번호 확인 버튼 이벤트
        document.getElementById('idVerifyButton').addEventListener('click', function () {
            const code = document.getElementById('idVerificationCode').value.trim();

            if (code.length !== 6) {
                showToast('6자리 인증번호를 입력해주세요.');
                return;
            }

            // 여기서는 시뮬레이션을 위해 항상 성공으로 처리
            showToast('인증 성공! 고객님의 아이디는 "user123" 입니다.');

            // 타이머 중지
            clearInterval(window['idVerificationTimerInterval']);

            // 3초 후 로그인 페이지로 리디렉션
            setTimeout(function () {
                window.location.href = 'login.html';
            }, 3000);
        });

        document.getElementById('pwVerifyButton').addEventListener('click', function () {
            const code = document.getElementById('pwVerificationCode').value.trim();

            if (code.length !== 6) {
                showToast('6자리 인증번호를 입력해주세요.');
                return;
            }

            // 여기서는 시뮬레이션을 위해 항상 성공으로 처리
            showToast('인증 성공! 비밀번호 재설정 페이지로 이동합니다.');

            // 타이머 중지
            clearInterval(window['pwVerificationTimerInterval']);

            // 3초 후 비밀번호 재설정 페이지로 리디렉션 (실제로는 이 페이지가 필요합니다)
            setTimeout(function () {
                // 여기서는 다시 로그인 페이지로 리디렉션
                window.location.href = 'login.html';
            }, 3000);
        });

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