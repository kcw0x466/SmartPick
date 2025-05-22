<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 회원가입 (3/3)</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary: #e93170;
            --primary-dark: #d42665;
            --primary-light: #ff6b9e;
            --secondary: #f8f9fa;
            --dark: #343a40;
            --light: #ffffff;
            --gray: #e5e5e5;
            --text: #212529;
            --success: #28a745;
            --warning: #ffc107;
            --danger: #dc3545;
            --border-radius: 10px;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        [data-theme="dark"] {
            --primary: #4287f5;
            --primary-dark: #2e6ad1;
            --primary-light: #213547;
            --secondary: #343a40;
            --dark: #f8f9fa;
            --light: #343a40;
            --gray: #495057;
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
            border-bottom: 1px solid var(--gray);
            transition: background-color 0.3s ease, border-color 0.3s ease;
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

        /* Main Content */
        .main-container {
            max-width: 1280px;
            margin: 0 auto;
            width: 100%;
            padding: 50px 20px;
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
            padding: 50px;
            position: relative;
            overflow: hidden;
            transition: background-color 0.3s ease;
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
            margin-bottom: 40px;
        }

        .page-title {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .page-subtitle {
            font-size: 18px;
            color: var(--dark);
            opacity: 0.8;
            line-height: 1.6;
        }

        /* Progress steps */
        .progress-container {
            display: flex;
            justify-content: space-between;
            margin: 40px 0;
            position: relative;
            padding: 0 50px;
        }

        .progress-container::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 100%;
            height: 4px;
            background-color: var(--gray);
            z-index: 1;
        }

        .progress-bar {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 100%;
            height: 4px;
            background-color: var(--primary);
            z-index: 2;
            transition: width 0.3s ease;
        }

        .step {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--light);
            border: 3px solid var(--gray);
            font-weight: 600;
            font-size: 18px;
            color: var(--dark);
            position: relative;
            z-index: 3;
            transition: var(--transition);
        }

        .step.active {
            background-color: var(--primary);
            border-color: var(--primary);
            color: var(--light);
            transform: scale(1.1);
        }

        .step.completed {
            background-color: var(--primary);
            border-color: var(--primary);
            color: var(--light);
        }

        .step.completed::after {
            content: '✓';
            position: absolute;
            font-size: 20px;
        }

        .step-label {
            position: absolute;
            top: 55px;
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
            font-size: 14px;
            font-weight: 500;
            color: var(--dark);
        }

        .form-group {
            margin-bottom: 30px;
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
            font-size: 16px;
        }

        .required-mark::after {
            content: '*';
            color: var(--primary);
            margin-left: 5px;
        }

        .form-input {
            width: 100%;
            padding: 16px 20px 16px 50px;
            border: 2px solid var(--gray);
            border-radius: 50px;
            font-size: 16px;
            transition: var(--transition);
            outline: none;
            background-color: var(--secondary);
        }

        .form-input:focus {
            border-color: var(--primary);
            background-color: var(--light);
            box-shadow: 0 0 0 3px rgba(233, 49, 112, 0.2);
        }

        .form-icon {
            position: absolute;
            left: 20px;
            top: 47px;
            color: var(--dark);
            opacity: 0.6;
            transition: var(--transition);
            font-size: 18px;
        }

        .form-input:focus+.form-icon {
            color: var(--primary);
            opacity: 1;
        }

        /* Birth date selects */
        .birthdate-container {
            display: flex;
            gap: 15px;
        }

        .select-wrapper {
            position: relative;
            flex: 1;
        }

        .select-label {
            position: absolute;
            top: -10px;
            left: 20px;
            background-color: var(--card-bg);
            padding: 0 8px;
            font-size: 14px;
            color: var(--primary);
            font-weight: 500;
            z-index: 2;
        }

        .custom-select {
            width: 100%;
            padding: 16px 40px 16px 20px;
            border: 2px solid var(--gray);
            border-radius: 50px;
            font-size: 16px;
            transition: var(--transition);
            outline: none;
            background-color: var(--secondary);
            appearance: none;
            cursor: pointer;
        }

        .custom-select:focus {
            border-color: var(--primary);
            background-color: var(--light);
            box-shadow: 0 0 0 3px rgba(233, 49, 112, 0.2);
        }

        .select-icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--dark);
            pointer-events: none;
            transition: var(--transition);
        }

        .custom-select:focus+.select-icon {
            color: var(--primary);
        }

        /* Custom radio buttons for gender */
        .gender-options {
            display: flex;
            gap: 20px;
            margin-top: 15px;
        }

        .gender-option {
            flex: 1;
            position: relative;
            cursor: pointer;
        }

        .gender-option input {
            position: absolute;
            opacity: 0;
            height: 0;
            width: 0;
            cursor: pointer;
        }

        .gender-box {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 16px;
            background-color: var(--secondary);
            border: 2px solid var(--gray);
            border-radius: 50px;
            transition: var(--transition);
            text-align: center;
        }

        .gender-option input:checked~.gender-box {
            border-color: var(--primary);
            background-color: var(--light);
            box-shadow: 0 0 0 3px rgba(233, 49, 112, 0.2);
        }

        .gender-option:hover .gender-box {
            border-color: var(--primary-light);
        }

        .gender-icon {
            font-size: 20px;
            color: var(--dark);
            opacity: 0.7;
            transition: var(--transition);
        }

        .gender-option input:checked~.gender-box .gender-icon {
            color: var(--primary);
            opacity: 1;
        }

        .gender-label {
            font-weight: 500;
            transition: var(--transition);
        }

        .gender-option input:checked~.gender-box .gender-label {
            color: var(--primary);
        }

        .privacy-notice {
            margin-top: 30px;
            padding: 20px;
            background-color: var(--secondary);
            border-radius: var(--border-radius);
            font-size: 14px;
            line-height: 1.6;
        }

        .privacy-notice h3 {
            font-size: 16px;
            margin-bottom: 10px;
            color: var(--primary);
        }

        .button-group {
            display: flex;
            gap: 20px;
            margin-top: 40px;
        }

        .back-button {
            flex: 1;
            padding: 16px;
            background-color: var(--secondary);
            color: var(--dark);
            border: 2px solid var(--gray);
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .back-button:hover {
            background-color: var(--gray);
            transform: translateY(-2px);
        }

        .submit-button {
            flex: 2;
            padding: 16px;
            background: linear-gradient(to right, var(--primary), var(--primary-dark));
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .submit-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(233, 49, 112, 0.3);
        }

        .submit-button:active {
            transform: translateY(-1px);
        }

        .form-helper {
            margin-top: 30px;
            font-size: 15px;
            text-align: center;
            color: var(--dark);
            opacity: 0.8;
            line-height: 1.5;
        }

        /* Toast notification */
        .toast {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%) translateY(100px);
            background-color: var(--dark);
            color: var(--light);
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 16px;
            z-index: 1000;
            opacity: 0;
            transition: all 0.4s ease;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .toast.show {
            transform: translateX(-50%) translateY(0);
            opacity: 1;
        }

        .toast i {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <!-- Toast notification -->
    <div class="toast" id="toast">
        <i class="fas fa-exclamation-circle"></i>
        <span id="toast-message">정보를 확인해주세요.</span>
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
                <h1 class="page-title">회원가입 (3/3)</h1>
                <p class="page-subtitle">마지막 단계입니다. 개인정보를 입력해주세요.</p>
            </div>

            <!-- Progress steps -->
            <div class="progress-container">
                <div class="progress-bar"></div>
                <div class="step completed">
                    <i class="fas fa-check"></i>
                    <span class="step-label">이메일 인증</span>
                </div>
                <div class="step completed">
                    <i class="fas fa-check"></i>
                    <span class="step-label">정보 입력</span>
                </div>
                <div class="step active">3
                    <span class="step-label">개인정보 입력</span>
                </div>
            </div>

            <form id="registerStep3Form" onsubmit="return validateStep3()">
                <div class="form-group">
                    <label for="userName" class="form-label required-mark">이름</label>
                    <input type="text" id="userName" class="form-input" placeholder="실명을 입력하세요" required>
                    <i class="fas fa-user form-icon"></i>
                </div>

                <div class="form-group">
                    <label class="form-label required-mark">생년월일</label>
                    <div class="birthdate-container">
                        <div class="select-wrapper">
                            <span class="select-label">연도</span>
                            <select id="birthYear" class="custom-select" required>
                                <option value="" disabled selected>연도</option>
                                <!-- JavaScript로 옵션 생성 -->
                            </select>
                            <i class="fas fa-chevron-down select-icon"></i>
                        </div>
                        <div class="select-wrapper">
                            <span class="select-label">월</span>
                            <select id="birthMonth" class="custom-select" required>
                                <option value="" disabled selected>월</option>
                                <!-- JavaScript로 옵션 생성 -->
                            </select>
                            <i class="fas fa-chevron-down select-icon"></i>
                        </div>
                        <div class="select-wrapper">
                            <span class="select-label">일</span>
                            <select id="birthDay" class="custom-select" required>
                                <option value="" disabled selected>일</option>
                                <!-- JavaScript로 옵션 생성 -->
                            </select>
                            <i class="fas fa-chevron-down select-icon"></i>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label required-mark">성별</label>
                    <div class="gender-options">
                        <label class="gender-option">
                            <input type="radio" name="gender" value="male" required>
                            <div class="gender-box">
                                <i class="fas fa-mars gender-icon"></i>
                                <span class="gender-label">남성</span>
                            </div>
                        </label>
                        <label class="gender-option">
                            <input type="radio" name="gender" value="female" required>
                            <div class="gender-box">
                                <i class="fas fa-venus gender-icon"></i>
                                <span class="gender-label">여성</span>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="privacy-notice">
                    <h3>개인정보 수집 및 이용 안내</h3>
                    <p>
                        - 수집항목: 이름, 생년월일, 성별<br>
                        - 수집목적: 회원식별 및 맞춤 서비스 제공, 연령 확인<br>
                        - 보유기간: 회원 탈퇴 시까지<br>
                        <br>
                        위 개인정보는 회원가입에 필수적인 항목으로, 동의하지 않을 경우 서비스 이용이 제한됩니다.
                    </p>
                </div>

                <div class="button-group">
                    <button type="button" class="back-button" onclick="goBack()">이전</button>
                    <button type="submit" class="submit-button">가입 완료</button>
                </div>
            </form>

            <p class="form-helper">
                모든 정보는 안전하게 보호되며, 마케팅 목적으로 사용되지 않습니다.
            </p>
        </div>
    </div>

    <script>
        // 생년월일 Select 옵션 생성
        document.addEventListener('DOMContentLoaded', function () {
            // 연도 옵션 생성 (현재 년도부터 100년 전까지)
            const yearSelect = document.getElementById('birthYear');
            const currentYear = new Date().getFullYear();

            for (let year = currentYear; year >= currentYear - 100; year--) {
                const option = document.createElement('option');
                option.value = year;
                option.textContent = year;
                yearSelect.appendChild(option);
            }

            // 월 옵션 생성
            const monthSelect = document.getElementById('birthMonth');
            for (let month = 1; month <= 12; month++) {
                const option = document.createElement('option');
                option.value = month;
                option.textContent = month;
                monthSelect.appendChild(option);
            }

            // 일 옵션 생성 (기본 31일)
            updateDays();

            initTheme();

            // 연도와 월이 변경되면 일 옵션 업데이트
            yearSelect.addEventListener('change', updateDays);
            monthSelect.addEventListener('change', updateDays);
        });

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

        // 선택된 연도와 월에 따라 일 옵션 업데이트
        function updateDays() {
            const yearSelect = document.getElementById('birthYear');
            const monthSelect = document.getElementById('birthMonth');
            const daySelect = document.getElementById('birthDay');

            // 현재 선택된 값 저장
            const currentSelectedDay = daySelect.value;

            // 기존 옵션 제거 (첫 번째 옵션 제외)
            while (daySelect.options.length > 1) {
                daySelect.remove(1);
            }

            // 선택된 월의 일수 계산
            let daysInMonth = 31; // 기본값

            const selectedYear = parseInt(yearSelect.value);
            const selectedMonth = parseInt(monthSelect.value);

            if (!isNaN(selectedYear) && !isNaN(selectedMonth)) {
                daysInMonth = new Date(selectedYear, selectedMonth, 0).getDate();
            }

            // 일 옵션 생성
            for (let day = 1; day <= daysInMonth; day++) {
                const option = document.createElement('option');
                option.value = day;
                option.textContent = day;
                daySelect.appendChild(option);

                // 이전에 선택된 값 복원 (가능한 경우)
                if (day.toString() === currentSelectedDay) {
                    option.selected = true;
                }
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

        // 폼 유효성 검사 및 제출
        function validateStep3() {
            const userName = document.getElementById('userName').value.trim();
            const birthYear = document.getElementById('birthYear').value;
            const birthMonth = document.getElementById('birthMonth').value;
            const birthDay = document.getElementById('birthDay').value;
            const gender = document.querySelector('input[name="gender"]:checked');

            // 이름 유효성 검사
            if (userName === '') {
                showToast('이름을 입력해주세요.');
                return false;
            }

            // 정규식을 사용한 한글 이름 검사 (2~5자 한글)
            const nameRegex = /^[가-힣]{2,5}$/;
            if (!nameRegex.test(userName)) {
                showToast('이름은 2~5자의 한글로 입력해주세요.');
                return false;
            }

            // 생년월일 유효성 검사
            if (!birthYear || !birthMonth || !birthDay) {
                showToast('생년월일을 모두 선택해주세요.');
                return false;
            }

            // 성별 선택 유효성 검사
            if (!gender) {
                showToast('성별을 선택해주세요.');
                return false;
            }

            // 모든 조건을 만족하면 가입 완료
            showToast('회원가입이 완료되었습니다!');

            // 가입 완료 후 로그인 페이지로 이동
            setTimeout(function () {
                window.location.href = 'log-in.html';
            }, 1500);

            return false; // 실제 폼 제출 방지
        }

        // 이전 단계로 이동
        function goBack() {
            window.history.back();
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