<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 맞춤형 상품 추천 설문조사</title>
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
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
            color: var(--text);
            background-color: var(--body-bg);
            overflow-x: hidden;
            transition: background-color 0.3s ease, color 0.3s ease;
            min-height: 100vh;
        }

        /* Header styles - Sticky */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid var(--border-color);
            background-color: var(--header-bg);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: var(--transition);
        }

        header.scrolled {
            box-shadow: var(--shadow);
            padding: 10px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            font-weight: bold;
            font-size: 24px;
            color: var(--primary);
            cursor: pointer;
            transition: var(--transition);
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

        /* Search bar with animation */
        .search-container {
            flex-grow: 1;
            max-width: 600px;
            margin: 0 20px;
            position: relative;
        }

        .search-bar {
            width: 100%;
            padding: 12px 20px;
            border: 2px solid var(--gray);
            border-radius: 30px;
            font-size: 16px;
            transition: var(--transition);
            outline: none;
            background-color: var(--body-bg);
            color: var(--text);
        }

        .search-bar:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(233, 49, 112, 0.2);
        }

        .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--dark);
            cursor: pointer;
            background: none;
            border: none;
        }

        /* Navigation buttons with hover effects */
        .nav-buttons {
            display: flex;
            gap: 15px;
        }

        .nav-button {
            background-color: var(--secondary);
            border: none;
            border-radius: 50px;
            padding: 12px 20px;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 6px;
            color: var(--text);
        }

        .nav-button:hover {
            background-color: var(--gray);
            transform: translateY(-2px);
        }

        .nav-button i {
            font-size: 16px;
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
            margin-left: 10px;
            color: var(--text);
        }

        .theme-toggle:hover {
            background-color: var(--gray);
            transform: rotate(30deg);
        }

        /* Main content */
        .main-content {
            padding: 40px 0;
        }

        /* Survey Container */
        .survey-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 30px;
            margin-bottom: 40px;
        }

        .survey-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .survey-title {
            font-size: 28px;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .survey-description {
            font-size: 16px;
            opacity: 0.8;
            line-height: 1.6;
        }

        /* Progress Bar */
        .progress-container {
            margin: 30px 0;
        }

        .progress-bar {
            width: 100%;
            height: 10px;
            background-color: var(--gray);
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background-color: var(--primary);
            transition: width 0.5s ease;
            width: 0%;
        }

        .progress-text {
            text-align: right;
            font-size: 14px;
            margin-top: 5px;
        }

        /* Survey Form */
        .survey-form {
            margin-top: 20px;
        }

        .question-container {
            display: none;
            margin-bottom: 30px;
            animation: fadeIn 0.5s ease;
        }

        .question-container.active {
            display: block;
        }

        .question-title {
            font-size: 20px;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .options-container {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        /* 선택지 스타일 - 라디오 버튼 */
        .option-item {
            cursor: pointer;
            padding: 15px;
            border-radius: var(--border-radius);
            border: 2px solid var(--border-color);
            transition: var(--transition);
            display: flex;
            align-items: center;
            position: relative;
        }

        .option-item:hover {
            border-color: var(--primary);
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        .option-item.selected {
            border-color: var(--primary);
            background-color: var(--primary-light);
        }

        /* 이미지 옵션 스타일 */
        .image-options {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .image-option {
            cursor: pointer;
            border-radius: var(--border-radius);
            border: 2px solid var(--border-color);
            overflow: hidden;
            transition: var(--transition);
        }

        .image-option:hover {
            border-color: var(--primary);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .image-option.selected {
            border-color: var(--primary);
        }

        .option-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .option-caption {
            padding: 12px;
            text-align: center;
            font-weight: 500;
        }

        /* 슬라이더 옵션 스타일 */
        .slider-container {
            margin: 30px 10px;
        }

        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 10px;
            border-radius: 5px;
            background: var(--gray);
            outline: none;
            margin-bottom: 15px;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: var(--primary);
            cursor: pointer;
            transition: var(--transition);
        }

        .slider::-webkit-slider-thumb:hover {
            transform: scale(1.2);
        }

        .slider-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .slider-value {
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            color: var(--primary);
            margin: 5px 0 15px;
        }

        /* 체크박스 옵션 스타일 */
        .checkbox-option {
            display: flex;
            align-items: center;
            cursor: pointer;
            padding: 12px;
            border-radius: var(--border-radius);
            border: 2px solid var(--border-color);
            transition: var(--transition);
        }

        .checkbox-option:hover {
            border-color: var(--primary);
            transform: translateY(-2px);
        }

        .checkbox-option.selected {
            border-color: var(--primary);
            background-color: var(--primary-light);
        }

        .custom-checkbox {
            width: 20px;
            height: 20px;
            border: 2px solid var(--border-color);
            border-radius: 4px;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .checkbox-option.selected .custom-checkbox {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .checkbox-option.selected .custom-checkbox i {
            display: block;
        }

        .custom-checkbox i {
            color: white;
            font-size: 12px;
            display: none;
        }

        /* 텍스트 입력 스타일 */
        .text-input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid var(--border-color);
            border-radius: var(--border-radius);
            font-size: 16px;
            margin-top: 10px;
            background-color: var(--body-bg);
            color: var(--text);
            transition: var(--transition);
        }

        .text-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(233, 49, 112, 0.2);
            outline: none;
        }

        /* 버튼 스타일 */
        .nav-buttons-container {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }

        .survey-button {
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 12px 25px;
            font-size: 16px;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .survey-button:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .survey-button:disabled {
            background-color: var(--gray);
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .survey-button.prev {
            background-color: var(--secondary);
            color: var(--text);
        }

        .survey-button.prev:hover {
            background-color: var(--gray);
        }

        /* 결과 페이지 스타일 */
        .results-container {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .results-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .results-title {
            font-size: 28px;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .results-description {
            font-size: 16px;
            opacity: 0.8;
            line-height: 1.6;
        }

        .results-image {
            width: 100%;
            max-width: 300px;
            height: auto;
            margin: 0 auto 30px;
            display: block;
            border-radius: 10px;
        }

        .recommended-products {
            margin-top: 40px;
        }

        .recommendation-title {
            font-size: 22px;
            margin-bottom: 20px;
            position: relative;
            padding-left: 15px;
        }

        .recommendation-title:before {
            content: '';
            position: absolute;
            left: 0;
            top: 5px;
            width: 5px;
            height: 20px;
            background-color: var(--primary);
            border-radius: 3px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .product-card {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid var(--border-color);
            position: relative;
            height: 350px;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            height: 180px;
            background-color: var(--gray);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .product-details {
            padding: 15px;
        }

        .product-title {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 8px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .product-price {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary);
        }

        .product-description {
            font-size: 14px;
            margin-top: 8px;
            opacity: 0.8;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .match-percentage {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--primary);
            color: white;
            border-radius: 20px;
            padding: 5px 10px;
            font-size: 12px;
            font-weight: bold;
        }

        .view-details-btn {
            position: absolute;
            bottom: 15px;
            right: 15px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 20px;
            padding: 8px 15px;
            font-size: 12px;
            cursor: pointer;
            transition: var(--transition);
        }

        .view-details-btn:hover {
            background-color: var(--primary-dark);
            transform: scale(1.05);
        }

        .save-results-btn {
            display: block;
            width: fit-content;
            margin: 30px auto 0;
            padding: 12px 30px;
        }

        /* 애니메이션 */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        /* 반응형 디자인 */
        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .image-options {
                grid-template-columns: 1fr;
            }

            .nav-buttons-container {
                flex-direction: column-reverse;
                gap: 15px;
            }

            .survey-button {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .product-grid {
                grid-template-columns: 1fr;
            }

            .survey-container {
                padding: 20px;
            }

            .header {
                flex-wrap: wrap;
            }

            .search-container {
                order: 3;
                margin: 10px 0 0;
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Toast notification -->
    <div class="toast" id="toast">
        <i class="fas fa-check-circle"></i>
        <span id="toast-message">설문조사가 완료되었습니다.</span>
    </div>

    <!-- Header section - Sticky -->
    <header id="header">
        <div class="logo" onclick="window.location.href='mainpage.html'">
            <div class="logo-box">스마<br>트픽</div>
            <span>스마트픽</span>
        </div>
        <div class="search-container">
            <form id="searchForm" action="search_result.html" method="get">
                <input type="text" class="search-bar" id="searchInput" name="query" placeholder="찾으시는 상품을 검색해보세요">
                <button type="submit" class="search-icon">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <div class="nav-buttons">
            <button class="nav-button" onclick="window.location.href='log-in.html'">
                <i class="fas fa-user"></i>
                로그인
            </button>
            <button class="nav-button" onclick="window.location.href='join1.html'">
                <i class="fas fa-user-plus"></i>
                회원가입
            </button>
            <button class="nav-button" onclick="window.location.href='cart.html'">
                <i class="fas fa-shopping-cart"></i>
                장바구니
            </button>
            <button class="theme-toggle" id="themeToggle" aria-label="테마 변경">
                <i class="fas fa-sun"></i>
            </button>
        </div>
    </header>

    <!-- Main content section -->
    <div class="main-content">
        <div class="survey-container">
            <!-- 설문조사 헤더 -->
            <div class="survey-header">
                <h1 class="survey-title">나에게 맞는 상품 찾기</h1>
                <p class="survey-description">몇 가지 질문에 답하시면 고객님께 딱 맞는 상품을 추천해 드립니다.</p>
            </div>

            <!-- 진행 상황 표시 -->
            <div class="progress-container">
                <div class="progress-bar">
                    <div class="progress-fill" id="progressFill"></div>
                </div>
                <div class="progress-text" id="progressText">0/6 완료</div>
            </div>

            <!-- 설문조사 폼 -->
            <div class="survey-form" id="surveyForm">
                <!-- 질문 1: 관심 카테고리 (라디오 버튼) -->
                <div class="question-container active" id="question1">
                    <h3 class="question-title">1. 어떤 제품에 가장 관심이 있으신가요?</h3>
                    <div class="options-container">
                        <div class="option-item" data-value="computer" onclick="selectOption(this, 'question1')">
                            <i class="fas fa-laptop" style="margin-right: 10px;"></i> 컴퓨터 / 노트북
                        </div>
                        <div class="option-item" data-value="smartphone" onclick="selectOption(this, 'question1')">
                            <i class="fas fa-mobile-alt" style="margin-right: 10px;"></i> 스마트폰 / 태블릿
                        </div>
                        <div class="option-item" data-value="home" onclick="selectOption(this, 'question1')">
                            <i class="fas fa-home" style="margin-right: 10px;"></i> 가전제품
                        </div>
                        <div class="option-item" data-value="audio" onclick="selectOption(this, 'question1')">
                            <i class="fas fa-headphones" style="margin-right: 10px;"></i> 오디오 / 이어폰
                        </div>
                    </div>
                </div>

                <!-- 질문 2: 사용 목적 (라디오 버튼) -->
                <div class="question-container" id="question2">
                    <h3 class="question-title">2. 주로 어떤 용도로 사용하실 예정인가요?</h3>
                    <div class="options-container">
                        <div class="option-item" data-value="work" onclick="selectOption(this, 'question2')">
                            <i class="fas fa-briefcase" style="margin-right: 10px;"></i> 업무/학업용
                        </div>
                        <div class="option-item" data-value="entertainment" onclick="selectOption(this, 'question2')">
                            <i class="fas fa-film" style="margin-right: 10px;"></i> 엔터테인먼트/미디어 감상
                        </div>
                        <div class="option-item" data-value="gaming" onclick="selectOption(this, 'question2')">
                            <i class="fas fa-gamepad" style="margin-right: 10px;"></i> 게임
                        </div>
                        <div class="option-item" data-value="daily" onclick="selectOption(this, 'question2')">
                            <i class="fas fa-home" style="margin-right: 10px;"></i> 일상생활/가정용
                        </div>
                    </div>
                </div>

                <!-- 질문 3: 가격대 (슬라이더) -->
                <div class="question-container" id="question3">
                    <h3 class="question-title">3. 생각하고 계신 예산 범위는 어떻게 되나요?</h3>
                    <div class="slider-container">
                        <input type="range" min="10" max="300" value="100" class="slider" id="priceSlider">
                        <div class="slider-value" id="sliderValue">100만원</div>
                        <div class="slider-labels">
                            <span>10만원</span>
                            <span>300만원+</span>
                        </div>
                    </div>
                </div>

                <!-- 질문 4: 중요 특성 (다중 선택) -->
                <div class="question-container" id="question4">
                    <h3 class="question-title">4. 제품 선택 시 가장 중요하게 생각하는 특성을 모두 선택해주세요.</h3>
                    <div class="options-container">
                        <div class="checkbox-option" onclick="toggleCheckbox(this)">
                            <div class="custom-checkbox">
                                <i class="fas fa-check"></i>
                            </div>
                            <span>성능/속도</span>
                        </div>
                        <div class="checkbox-option" onclick="toggleCheckbox(this)">
                            <div class="custom-checkbox">
                                <i class="fas fa-check"></i>
                            </div>
                            <span>디자인/외관</span>
                        </div>
                        <div class="checkbox-option" onclick="toggleCheckbox(this)">
                            <div class="custom-checkbox">
                                <i class="fas fa-check"></i>
                            </div>
                            <span>배터리 수명/전력 효율</span>
                        </div>
                        <div class="checkbox-option" onclick="toggleCheckbox(this)">
                            <div class="custom-checkbox">
                                <i class="fas fa-check"></i>
                            </div>
                            <span>내구성/품질</span>
                        </div>
                        <div class="checkbox-option" onclick="toggleCheckbox(this)">
                            <div class="custom-checkbox">
                                <i class="fas fa-check"></i>
                            </div>
                            <span>가격 대비 가치</span>
                        </div>
                    </div>
                </div>

                <!-- 질문 5: 디자인 선호도 (이미지 선택) -->
                <div class="question-container" id="question5">
                    <h3 class="question-title">5. 어떤 디자인 스타일을 선호하시나요?</h3>
                    <div class="image-options">
                        <div class="image-option" onclick="selectImageOption(this, 'question5')">
                            <img src="/api/placeholder/400/320" alt="모던한 디자인" class="option-image">
                            <div class="option-caption">모던/심플</div>
                        </div>
                        <div class="image-option" onclick="selectImageOption(this, 'question5')">
                            <img src="/api/placeholder/400/320" alt="클래식한 디자인" class="option-image">
                            <div class="option-caption">클래식/고급스러움</div>
                        </div>
                        <div class="image-option" onclick="selectImageOption(this, 'question5')">
                            <img src="/api/placeholder/400/320" alt="컬러풀한 디자인" class="option-image">
                            <div class="option-caption">컬러풀/화려함</div>
                        </div>
                        <div class="image-option" onclick="selectImageOption(this, 'question5')">
                            <img src="/api/placeholder/400/320" alt="미니멀한 디자인" class="option-image">
                            <div class="option-caption">미니멀/실용적</div>
                        </div>
                    </div>
                </div>

                <!-- 질문 6: 추가 의견 (텍스트 입력) -->
                <div class="question-container" id="question6">
                    <h3 class="question-title">6. 추가로 고려하는 사항이 있으신가요? (선택사항)</h3>
                    <textarea class="text-input" id="additionalComment" placeholder="추가적인 요구사항이나 고려사항을 자유롭게 입력해주세요."
                        rows="5"></textarea>
                </div>

                <!-- 버튼 -->
                <div class="nav-buttons-container">
                    <button class="survey-button prev" id="prevButton" onclick="prevQuestion()">
                        <i class="fas fa-arrow-left"></i> 이전
                    </button>
                    <button class="survey-button next" id="nextButton" onclick="nextQuestion()">
                        다음 <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- 결과 페이지 -->
            <div class="results-container" id="resultsContainer">
                <div class="results-header">
                    <h1 class="results-title">맞춤 상품 추천 결과</h1>
                    <p class="results-description">고객님의 선호도와 요구사항을 분석한 결과, 다음과 같은 상품들이 가장 적합할 것으로 예상됩니다.</p>
                </div>

                <div class="recommended-products">
                    <h2 class="recommendation-title">최적 추천 상품</h2>
                    <div class="product-grid">
                        <!-- 추천 상품 1 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="/api/placeholder/400/320" alt="추천 상품 1">
                            </div>
                            <div class="match-percentage">일치도 98%</div>
                            <div class="product-details">
                                <h3 class="product-title">삼성 갤럭시북 Pro 360</h3>
                                <div class="product-price">1,450,000원</div>
                                <p class="product-description">고성능 노트북으로 업무와 엔터테인먼트 모두 완벽하게 지원합니다.</p>
                            </div>
                            <button class="view-details-btn"
                                onclick="window.location.href='product_details.html?id=product1'">자세히 보기</button>
                        </div>

                        <!-- 추천 상품 2 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="/api/placeholder/400/320" alt="추천 상품 2">
                            </div>
                            <div class="match-percentage">일치도 95%</div>
                            <div class="product-details">
                                <h3 class="product-title">LG 그램 17인치 노트북</h3>
                                <div class="product-price">1,599,000원</div>
                                <p class="product-description">초경량 노트북으로 뛰어난 휴대성과 배터리 수명을 제공합니다.</p>
                            </div>
                            <button class="view-details-btn"
                                onclick="window.location.href='product_details.html?id=product2'">자세히 보기</button>
                        </div>

                        <!-- 추천 상품 3 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="/api/placeholder/400/320" alt="추천 상품 3">
                            </div>
                            <div class="match-percentage">일치도 92%</div>
                            <div class="product-details">
                                <h3 class="product-title">애플 맥북 프로 M2</h3>
                                <div class="product-price">2,350,000원</div>
                                <p class="product-description">강력한 성능과 세련된 디자인의 프리미엄 노트북입니다.</p>
                            </div>
                            <button class="view-details-btn"
                                onclick="window.location.href='product_details.html?id=product3'">자세히 보기</button>
                        </div>
                    </div>

                    <h2 class="recommendation-title">대안 추천 상품</h2>
                    <div class="product-grid">
                        <!-- 대안 상품 1 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="/api/placeholder/400/320" alt="대안 상품 1">
                            </div>
                            <div class="match-percentage">일치도 85%</div>
                            <div class="product-details">
                                <h3 class="product-title">에이수스 게이밍 노트북</h3>
                                <div class="product-price">1,250,000원</div>
                                <p class="product-description">게이밍에 최적화된 성능과 냉각 시스템을 갖춘 노트북입니다.</p>
                            </div>
                            <button class="view-details-btn"
                                onclick="window.location.href='product_details.html?id=product4'">자세히 보기</button>
                        </div>

                        <!-- 대안 상품 2 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="/api/placeholder/400/320" alt="대안 상품 2">
                            </div>
                            <div class="match-percentage">일치도 80%</div>
                            <div class="product-details">
                                <h3 class="product-title">MSI 크리에이터 노트북</h3>
                                <div class="product-price">1,850,000원</div>
                                <p class="product-description">크리에이티브 작업에 최적화된 고성능 노트북입니다.</p>
                            </div>
                            <button class="view-details-btn"
                                onclick="window.location.href='product_details.html?id=product5'">자세히 보기</button>
                        </div>

                        <!-- 대안 상품 3 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="/api/placeholder/400/320" alt="대안 상품 3">
                            </div>
                            <div class="match-percentage">일치도 78%</div>
                            <div class="product-details">
                                <h3 class="product-title">레노버 씽크패드 X1</h3>
                                <div class="product-price">1,750,000원</div>
                                <p class="product-description">비즈니스 사용자를 위한 안정적이고 내구성 있는 노트북입니다.</p>
                            </div>
                            <button class="view-details-btn"
                                onclick="window.location.href='product_details.html?id=product6'">자세히 보기</button>
                        </div>
                    </div>
                </div>

                <button class="survey-button save-results-btn" onclick="saveResults()">
                    <i class="fas fa-save"></i> 결과 저장하기
                </button>
            </div>
        </div>
    </div>

    <script>
        // 현재 질문 인덱스
        let currentQuestionIndex = 1;
        const totalQuestions = 6;

        // 사용자 응답 저장 객체
        const userResponses = {};

        // DOM이 로드되면 실행
        document.addEventListener('DOMContentLoaded', function () {
            // 테마 관련 초기화
            initTheme();

            // 슬라이더 이벤트 설정
            const priceSlider = document.getElementById('priceSlider');
            const sliderValue = document.getElementById('sliderValue');

            priceSlider.addEventListener('input', function () {
                sliderValue.textContent = this.value + '만원';
                // 슬라이더 값 저장
                userResponses['budget'] = this.value;
            });

            // 이전 버튼 초기 상태 설정
            updateButtonState();

            // 진행 상황 업데이트
            updateProgress();
            // 검색창 클릭 시 검색 페이지로 이동
            const searchBar = document.getElementById('searchInput');
            if (searchBar) {
                searchBar.style.cursor = 'pointer';
                searchBar.addEventListener('click', function (e) {
                    window.location.href = 'search_results.html';
                    e.preventDefault(); // 폼 제출 방지
                });
            }
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

        // 단일 선택 옵션 선택 처리
        function selectOption(element, questionId) {
            // 같은 질문의 모든 옵션에서 selected 클래스 제거
            const options = document.querySelectorAll(`#${questionId} .option-item`);
            options.forEach(option => option.classList.remove('selected'));

            // 선택한 옵션에 selected 클래스 추가
            element.classList.add('selected');

            // 사용자 응답 저장
            const questionNumber = questionId.replace('question', '');
            const value = element.getAttribute('data-value');
            userResponses[`question${questionNumber}`] = value;

            // 버튼 상태 업데이트
            updateButtonState();
        }

        // 이미지 옵션 선택 처리
        function selectImageOption(element, questionId) {
            // 같은 질문의 모든 이미지 옵션에서 selected 클래스 제거
            const options = document.querySelectorAll(`#${questionId} .image-option`);
            options.forEach(option => option.classList.remove('selected'));

            // 선택한 옵션에 selected 클래스 추가
            element.classList.add('selected');

            // 사용자 응답 저장
            const questionNumber = questionId.replace('question', '');
            const value = element.querySelector('.option-caption').textContent;
            userResponses[`question${questionNumber}`] = value;

            // 버튼 상태 업데이트
            updateButtonState();
        }

        // 체크박스 토글 처리
        function toggleCheckbox(element) {
            // 선택 상태 토글
            element.classList.toggle('selected');

            // 사용자 응답 저장 (다중 선택)
            const selectedFeatures = [];
            const checkboxes = document.querySelectorAll('#question4 .checkbox-option.selected');

            checkboxes.forEach(checkbox => {
                selectedFeatures.push(checkbox.querySelector('span').textContent);
            });

            userResponses['question4'] = selectedFeatures;

            // 버튼 상태 업데이트
            updateButtonState();
        }

        // 다음 질문으로 이동
        function nextQuestion() {
            // 마지막 질문이면 결과 페이지 표시
            if (currentQuestionIndex === totalQuestions) {
                showResults();
                return;
            }

            // 현재 질문 숨기기
            const currentQuestion = document.getElementById(`question${currentQuestionIndex}`);
            currentQuestion.classList.remove('active');

            // 다음 질문 표시
            currentQuestionIndex++;
            const nextQuestion = document.getElementById(`question${currentQuestionIndex}`);
            nextQuestion.classList.add('active');

            // 진행 상황 업데이트
            updateProgress();

            // 버튼 상태 업데이트
            updateButtonState();

            // 페이지 상단으로 스크롤
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // 이전 질문으로 이동
        function prevQuestion() {
            // 첫 번째 질문이면 아무것도 하지 않음
            if (currentQuestionIndex === 1) {
                return;
            }

            // 현재 질문 숨기기
            const currentQuestion = document.getElementById(`question${currentQuestionIndex}`);
            currentQuestion.classList.remove('active');

            // 이전 질문 표시
            currentQuestionIndex--;
            const prevQuestion = document.getElementById(`question${currentQuestionIndex}`);
            prevQuestion.classList.add('active');

            // 진행 상황 업데이트
            updateProgress();

            // 버튼 상태 업데이트
            updateButtonState();

            // 페이지 상단으로 스크롤
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // 진행 상황 업데이트
        function updateProgress() {
            const progressFill = document.getElementById('progressFill');
            const progressText = document.getElementById('progressText');

            const progressPercentage = (currentQuestionIndex / totalQuestions) * 100;
            progressFill.style.width = `${progressPercentage}%`;
            progressText.textContent = `${currentQuestionIndex}/${totalQuestions} 완료`;
        }

        // 버튼 상태 업데이트
        function updateButtonState() {
            const prevButton = document.getElementById('prevButton');
            const nextButton = document.getElementById('nextButton');

            // 이전 버튼은 첫 번째 질문에서 비활성화
            prevButton.disabled = currentQuestionIndex === 1;

            // 다음 버튼 텍스트 변경 (마지막 질문이면 "결과 보기"로 변경)
            if (currentQuestionIndex === totalQuestions) {
                nextButton.innerHTML = '<i class="fas fa-chart-pie"></i> 결과 보기';
            } else {
                nextButton.innerHTML = '다음 <i class="fas fa-arrow-right"></i>';
            }

            // 현재 질문에 응답했는지 확인하여 다음 버튼 활성화/비활성화
            let canProceed = true;

            // 마지막 질문(추가 의견)은 선택 사항이므로 항상 진행 가능
            if (currentQuestionIndex === 6) {
                // 텍스트 영역의 값 저장
                const additionalComment = document.getElementById('additionalComment').value;
                userResponses['question6'] = additionalComment;
                canProceed = true;
            }
            // 질문 4(다중 선택)는 최소 1개 이상 선택해야 함
            else if (currentQuestionIndex === 4) {
                canProceed = userResponses['question4'] && userResponses['question4'].length > 0;
            }
            // 다른 질문들은 응답이 있어야 함
            else {
                canProceed = userResponses[`question${currentQuestionIndex}`] !== undefined;
            }

            nextButton.disabled = !canProceed;
        }

        // 결과 페이지 표시
        function showResults() {
            // 설문 폼 숨기기
            document.getElementById('surveyForm').style.display = 'none';

            // 진행 상황 표시 완료
            const progressFill = document.getElementById('progressFill');
            progressFill.style.width = '100%';

            // 결과 컨테이너 표시
            const resultsContainer = document.getElementById('resultsContainer');
            resultsContainer.style.display = 'block';

            // TODO: 실제 구현에서는 사용자 응답을 기반으로 추천 상품을 계산하여 표시
            console.log('사용자 응답:', userResponses);

            // 페이지 상단으로 스크롤
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // 결과 저장하기
        function saveResults() {
            // TODO: 실제 구현에서는 결과를 저장하거나 이메일로 전송하는 등의 작업 수행
            showToast('추천 결과가 저장되었습니다.');
        }

        // 토스트 알림 표시
        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toast-message');

            toastMessage.textContent = message;
            toast.classList.add('show');

            setTimeout(function () {
                toast.classList.remove('show');
            }, 3000);
        }

        // 텍스트 영역 변경 감지
        document.getElementById('additionalComment').addEventListener('input', function () {
            userResponses['question6'] = this.value;
        });
    </script>
</body>

</html>