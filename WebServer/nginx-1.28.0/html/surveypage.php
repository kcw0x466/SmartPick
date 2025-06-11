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
      <div class="survey-header">
        <h1 class="survey-title">나에게 맞는 상품 찾기</h1>
        <p class="survey-description">몇 가지 질문에 답하시면 고객님께 딱 맞는 상품을 추천해 드립니다.</p>
      </div>

      <div class="progress-container">
        <div class="progress-bar">
          <div class="progress-fill" id="progressFill"></div>
        </div>
        <div class="progress-text" id="progressText">0 / 0 완료</div>
      </div>

      <div class="survey-form" id="surveyForm">
        <!-- 공통 문항 -->
        <div class="question-container active" data-step="1" data-product="all">
          <h2 class="question-title">1. 어떤 제품에 가장 관심이 있으신가요?</h2>
          <div class="options-container">
            <div class="option-item" data-product="pc">PC</div>
            <div class="option-item" data-product="laptop">노트북</div>
            <div class="option-item" data-product="tv">TV</div>
            <div class="option-item" data-product="washer">세탁기</div>
          </div>
        </div>

        <!-- PC 질문 -->
        <div class="question-container" data-step="2" data-product="pc">
          <h2 class="question-title">주요 사용 목적은?</h2>
          <div class="options-container">
            <div class="option-item">문서작업 및 인터넷</div>
            <div class="option-item">영상 시청 및 인기 온라인 게임</div>
            <div class="option-item">고사양 게임</div>
            <div class="option-item">영상 편집 / 3D 작업</div>
            <div class="option-item">AI / 데이터 분석 / 가상화 / 서버 등</div>
          </div>
        </div>

        <div class="question-container" data-step="3" data-product="pc">
          <h2 class="question-title">예산은 어느 정도?</h2>
          <div class="slider-container">
            <input type="range" min="10" max="300" value="100" class="slider" id="budgetSliderPc">
            <div class="slider-value" id="budgetValuePc">100만원</div>
          </div>
        </div>

        <div class="question-container" data-step="4" data-product="pc">
          <h2 class="question-title">파일 저장 공간이 얼마나 필요하신가요?</h2>
          <div class="options-container">
            <div class="option-item">256GB 이하</div>
            <div class="option-item">512GB</div>
            <div class="option-item">1TB</div>
            <div class="option-item">2TB</div>
            <div class="option-item">4TB 이상</div>
          </div>
        </div>

        <!-- 노트북 질문 -->
        <div class="question-container" data-step="2" data-product="laptop">
          <h2 class="question-title">주요 사용 목적은?</h2>
          <div class="options-container">
            <div class="option-item">문서작업 및 인터넷</div>
            <div class="option-item">영상 시청 및 인기 온라인 게임</div>
            <div class="option-item">고사양 게임</div>
            <div class="option-item">영상 편집 / 3D / 그래픽 작업</div>
            <div class="option-item">AI / 데이터 분석 등</div>
          </div>
        </div>

        <div class="question-container" data-step="3" data-product="laptop">
          <h2 class="question-title">예산은 어느 정도?</h2>
          <div class="slider-container">
            <input type="range" min="10" max="300" value="100" class="slider" id="budgetSliderLaptop">
            <div class="slider-value" id="budgetValueLaptop">100만원</div>
          </div>
        </div>

        <div class="question-container" data-step="4" data-product="laptop">
          <h2 class="question-title">화면 크기 선호?</h2>
          <div class="options-container">
            <div class="option-item">작은 화면</div>
            <div class="option-item">보통 화면</div>
            <div class="option-item">넓은 화면</div>
          </div>
        </div>

        <div class="question-container" data-step="5" data-product="laptop">
          <h2 class="question-title">화면 크기 선호?</h2>
          <div class="options-container">
            <div class="option-item">상관없음</div>
            <div class="option-item">보통</div>
            <div class="option-item">그렇다</div>
            <div class="option-item">매우 그렇다</div>
          </div>
        </div>

        <div class="question-container" data-step="6" data-product="laptop">
          <h2 class="question-title">화면 크기 선호?</h2>
          <div class="options-container">
            <div class="option-item">작은 화면</div>
            <div class="option-item">보통 화면</div>
            <div class="option-item">넓은 화면</div>
          </div>
        </div>

        <!-- TV 질문 -->
        <div class="question-container" data-step="2" data-product="tv">
          <h2 class="question-title">TV 사이즈는?</h2>
          <div class="options-container">
            <div class="option-item">모니터급</div>
            <div class="option-item">작은 거실용</div>
            <div class="option-item">일반 거실용</div>
            <div class="option-item">회의실용</div>
          </div>
        </div>

        <!-- 세탁기 질문 -->
        <div class="question-container" data-step="2" data-product="washer">
          <h2 class="question-title">필요한 용량은?</h2>
          <div class="slider-container">
            <input type="range" min="5" max="25" value="10" class="slider" id="kgSlider">
            <div class="slider-value" id="kgValue">10kg</div>
          </div>
        </div>

        <div class="nav-buttons-container">
          <button class="survey-button prev" onclick="goToPrev()">← 이전</button>
          <button class="survey-button next" onclick="goToNext()">다음 →</button>
        </div>
      </div>
    </div>
        
    </div>

    <script>
        let currentIndex = 0;
        let selectedProduct = null;

        const allQuestions = [...document.querySelectorAll(".question-container")];
        const progressText = document.getElementById("progressText");
        const progressFill = document.getElementById("progressFill");

        const showStep = (index) => {
            const visible = allQuestions.filter(q => {
                const p = q.dataset.product;
                return p === "all" || p === selectedProduct;
            });
            if (index < 0 || index >= visible.length) return;

            allQuestions.forEach(q => q.classList.remove("active"));
            visible[index].classList.add("active");
            currentIndex = index;
            progressText.textContent = `${index + 1} / ${visible.length} 완료`;
            progressFill.style.width = `${((index + 1) / visible.length) * 100}%`;
        };

        const goToNext = () => showStep(currentIndex + 1);
        const goToPrev = () => showStep(currentIndex - 1);

        // 선택 항목에 .selected 토글
        document.querySelectorAll(".option-item").forEach(item => {
            item.addEventListener("click", () => {
                const container = item.closest(".options-container");
                if (container) {
                container.querySelectorAll(".option-item").forEach(i => i.classList.remove("selected"));
                }
                item.classList.add("selected");

                // 제품 선택일 경우 selectedProduct 설정만 (자동 넘기기 X)
                const product = item.dataset.product;
                if (product) {
                selectedProduct = product;
                }
            });
        });

        const updateSlider = (id, labelId, unit) => {
            const slider = document.getElementById(id);
            const label = document.getElementById(labelId);
            if (slider && label) {
                slider.addEventListener("input", () => {
                    label.textContent = slider.value + unit;
                });
            }
        };

        updateSlider("budgetSliderPc", "budgetValuePc", "만원");
        updateSlider("budgetSliderLaptop", "budgetValueLaptop", "만원");
        updateSlider("kgSlider", "kgValue", "kg");

        showStep(0);

    </script>
</body>

</html>