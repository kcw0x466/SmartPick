<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 할인 상품 모음</title>
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
            --primary-dark: #2e6ad1;
            --primary-light: #213547;
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

        /* Breadcrumb */
        .breadcrumb {
            display: flex;
            padding: 15px 0;
            font-size: 13px;
            color: var(--text);
        }

        .breadcrumb a {
            color: var(--text);
            text-decoration: none;
        }

        .breadcrumb a:hover {
            color: var(--primary);
        }

        .breadcrumb-separator {
            margin: 0 8px;
        }

        /* 페이지 타이틀 */
        .page-title-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 20px 0 30px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 700;
            position: relative;
            padding-left: 15px;
        }

        .page-title:before {
            content: '';
            position: absolute;
            left: 0;
            top: 8px;
            width: 5px;
            height: 25px;
            background-color: var(--primary);
            border-radius: 3px;
        }

        .page-description {
            color: var(--dark);
            margin-top: 5px;
            font-size: 14px;
        }

        /* 특가 타이머 스타일 */
        .sale-timer-container {
            background-color: var(--primary-light);
            border-radius: var(--border-radius);
            padding: 20px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: var(--shadow);
        }

        .timer-text {
            font-size: 20px;
            font-weight: 600;
            color: var(--primary);
        }

        .timer-description {
            font-size: 14px;
            margin: 5px 0;
            color: var(--text);
        }

        .timer-countdown {
            display: flex;
            gap: 15px;
        }

        .timer-unit {
            background-color: var(--card-bg);
            border-radius: 8px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 70px;
            box-shadow: var(--shadow);
        }

        .timer-number {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .timer-label {
            font-size: 12px;
            color: var(--text);
        }

        /* 필터 옵션 */
        .filter-section {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: var(--shadow);
        }

        .filter-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .filter-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 15px;
        }

        .filter-label {
            font-size: 14px;
            font-weight: 500;
            margin-right: 10px;
            min-width: 80px;
        }

        .filter-chip {
            padding: 6px 15px;
            background-color: var(--secondary);
            border-radius: 20px;
            font-size: 13px;
            cursor: pointer;
            transition: var(--transition);
        }

        .filter-chip:hover,
        .filter-chip.active {
            background-color: var(--primary-light);
            color: var(--primary);
        }

        .sort-dropdown {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 15px;
        }

        .sort-label {
            font-size: 14px;
        }

        .sort-select {
            padding: 8px 15px;
            border-radius: 20px;
            border: 1px solid var(--gray);
            background-color: var(--secondary);
            font-size: 13px;
            outline: none;
            cursor: pointer;
            color: var(--text);
            transition: var(--transition);
        }

        .sort-select:focus {
            border-color: var(--primary);
        }

        /* 제품 그리드 */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .product-card {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid var(--border-color);
            height: 370px;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            height: 200px;
            background-color: var(--gray-light);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
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

        .product-quick-actions {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            opacity: 0;
            transform: translateX(10px);
            transition: var(--transition);
            z-index: 10;
        }

        .product-card:hover .product-quick-actions {
            opacity: 1;
            transform: translateX(0);
        }

        .quick-action-btn {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            font-size: 16px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }

        .quick-action-btn:hover {
            background-color: var(--primary);
            color: var(--white);
            transform: scale(1.1);
        }

        .quick-action-btn.active {
            background-color: var(--primary);
            color: var(--white);
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
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .original-price {
            font-size: 14px;
            color: var(--dark);
            opacity: 0.6;
            text-decoration: line-through;
        }

        .discount-badge {
            background-color: var(--primary-light);
            color: var(--primary);
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }

        /* 할인율 뱃지 */
        .discount-tag {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: var(--primary);
            color: white;
            font-weight: bold;
            font-size: 16px;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            z-index: 10;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* 별점 리뷰 스타일 */
        .product-rating {
            display: flex;
            align-items: center;
            margin: 10px 0;
            gap: 5px;
        }

        .stars {
            display: flex;
            color: #ffc107;
        }

        .review-count {
            font-size: 12px;
            color: var(--dark);
            opacity: 0.7;
        }

        /* 재고 상태 배지 스타일 */
        .stock-status {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
            margin-top: 5px;
        }

        .in-stock {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success);
        }

        .low-stock {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--warning);
        }

        .out-of-stock {
            background-color: rgba(220, 53, 69, 0.1);
            color: var(--danger);
        }

        .cart-button {
            position: absolute;
            bottom: 15px;
            right: 15px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary);
            color: white;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            font-size: 16px;
        }

        .cart-button:hover {
            transform: scale(1.15);
            background-color: var(--primary-dark);
        }

        .cart-button.disabled {
            background-color: var(--gray);
            cursor: not-allowed;
        }

        /* 카테고리 태그 */
        .category-tag {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 4px 10px;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            font-size: 12px;
            border-radius: 4px;
            z-index: 9;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin: 40px 0;
        }

        .page-button {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 5px;
            background-color: var(--secondary);
            color: var(--text);
            cursor: pointer;
            transition: var(--transition);
            border: none;
        }

        .page-button:hover {
            background-color: var(--gray);
        }

        .page-button.active {
            background-color: var(--primary);
            color: white;
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

        /* Scroll to top button */
        .scroll-top {
            position: fixed;
            bottom: 90px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--primary);
            color: white;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            opacity: 0;
            z-index: 900;
            box-shadow: var(--shadow);
        }

        .scroll-top.show {
            opacity: 1;
        }

        .scroll-top:hover {
            transform: translateY(-5px);
            background-color: var(--primary-dark);
        }

        /* 위시리스트 버튼 */
        .wishlist-button {
            position: fixed;
            bottom: 150px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--primary-light);
            color: var(--primary);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            z-index: 900;
            box-shadow: var(--shadow);
        }

        .wishlist-button:hover {
            transform: translateY(-5px);
            background-color: var(--primary-light);
        }

        .wishlist-counter {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: var(--primary);
            color: white;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
        }

        /* 반응형 디자인 */
        @media (max-width: 1024px) {
            .product-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .timer-countdown {
                flex-wrap: wrap;
                gap: 10px;
            }

            .timer-unit {
                min-width: 60px;
            }

            .nav-buttons {
                gap: 5px;
            }

            .nav-button {
                padding: 10px 15px;
                font-size: 13px;
            }
        }

        @media (max-width: 480px) {
            .product-grid {
                grid-template-columns: 1fr;
            }

            .header {
                flex-wrap: wrap;
            }

            .search-container {
                order: 3;
                margin: 10px 0 0;
                max-width: 100%;
            }

            .sale-timer-container {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
        }
    </style>
</head>

<body>
    <!-- Toast notification -->
    <div class="toast" id="toast">
        <i class="fas fa-check-circle"></i>
        <span id="toast-message">상품이 장바구니에 추가되었습니다.</span>
    </div>

    <!-- Header section - Sticky -->
    <header id="header">
        <div class="logo" onclick="window.location.href='mainpage.html'">
            <div class="logo-box">스마<br>트픽</div>
            <span>스마트픽</span>
        </div>
        <div class="search-container">
            <form id="searchForm" action="search_result.html" method="get">
                <input type="text" class="search-bar" name="query" placeholder="찾으시는 상품을 검색해보세요">
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

    <div class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="mainpage.html">홈</a>
            <span class="breadcrumb-separator">></span>
            <span>할인 상품 모음</span>
        </div>

        <!-- 페이지 타이틀 -->
        <div class="page-title-container">
            <div>
                <h1 class="page-title">지금 할인 중인 상품</h1>
                <p class="page-description">스마트픽에서 특별 할인 중인 상품들을 만나보세요.</p>
            </div>
        </div>

        <!-- 타임 세일 타이머 -->
        <div class="sale-timer-container">
            <div class="timer-info">
                <h3 class="timer-text">특별 타임 세일</h3>
                <p class="timer-description">시간 한정 특가! 놓치지 마세요!</p>
            </div>
            <div class="timer-countdown" id="countdown">
                <div class="timer-unit">
                    <span class="timer-number" id="hours">23</span>
                    <span class="timer-label">시간</span>
                </div>
                <div class="timer-unit">
                    <span class="timer-number" id="minutes">45</span>
                    <span class="timer-label">분</span>
                </div>
                <div class="timer-unit">
                    <span class="timer-number" id="seconds">59</span>
                    <span class="timer-label">초</span>
                </div>
            </div>
        </div>

        <!-- 필터 섹션 -->
        <div class="filter-section">
            <h3 class="filter-title">필터</h3>
            <div class="filter-row">
                <span class="filter-label">카테고리</span>
                <div class="filter-chip active">전체</div>
                <div class="filter-chip">TV</div>
                <div class="filter-chip">노트북</div>
                <div class="filter-chip">세탁기</div>
                <div class="filter-chip">냉장고</div>
                <div class="filter-chip">컴퓨터</div>
            </div>

            <div class="filter-row">
                <span class="filter-label">할인율</span>
                <div class="filter-chip active">전체</div>
                <div class="filter-chip">10% 이상</div>
                <div class="filter-chip">20% 이상</div>
                <div class="filter-chip">30% 이상</div>
                <div class="filter-chip">40% 이상</div>
            </div>

            <div class="filter-row">
                <span class="filter-label">가격대</span>
                <div class="filter-chip active">전체</div>
                <div class="filter-chip">50만원 이하</div>
                <div class="filter-chip">50-100만원</div>
                <div class="filter-chip">100-200만원</div>
                <div class="filter-chip">200만원 이상</div>
            </div>

            <div class="sort-dropdown">
                <span class="sort-label">정렬</span>
                <select class="sort-select" id="sortSelect">
                    <option value="discountRate">할인율 높은순</option>
                    <option value="popularity">인기순</option>
                    <option value="latest">최신순</option>
                    <option value="lowPrice">가격 낮은순</option>
                    <option value="highPrice">가격 높은순</option>
                </select>
            </div>
        </div>

        <!-- 상품 그리드 -->
        <div class="product-grid">
            <!-- 제품 1 -->
            <div class="product-card">
                <div class="discount-tag">40%</div>
                <div class="category-tag">TV</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="d1"
                        data-product-name="소니 브라비아 XR OLED A80L" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=d1'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('d1', '소니 브라비아 XR OLED A80L', 'tv')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="소니 브라비아 XR OLED A80L">
                </div>
                <div class="product-details">
                    <h3 class="product-title">소니 브라비아 XR OLED A80L</h3>
                    <!-- 별점 리뷰 -->
                    <div class="product-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-value">4.6</span>
                        <span class="review-count">(82)</span>
                    </div>
                    <div class="product-price">
                        <span>1,980,000원</span>
                        <span class="original-price">3,300,000원</span>
                        <span class="discount-badge">40%</span>
                    </div>
                    <!-- 재고 상태 표시 -->
                    <div class="stock-status in-stock">재고 있음</div>
                </div>
                <button class="cart-button" onclick="addToCart('d1', '소니 브라비아 XR OLED A80L')" aria-label="장바구니에 추가">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <!-- 제품 2 -->
            <div class="product-card">
                <div class="discount-tag">35%</div>
                <div class="category-tag">노트북</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="d2"
                        data-product-name="삼성 갤럭시북3 프로" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=d2'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('d2', '삼성 갤럭시북3 프로', 'laptop')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="삼성 갤럭시북3 프로">
                </div>
                <div class="product-details">
                    <h3 class="product-title">삼성 갤럭시북3 프로</h3>
                    <!-- 별점 리뷰 -->
                    <div class="product-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-value">4.8</span>
                        <span class="review-count">(126)</span>
                    </div>
                    <div class="product-price">
                        <span>1,170,000원</span>
                        <span class="original-price">1,800,000원</span>
                        <span class="discount-badge">35%</span>
                    </div>
                    <!-- 재고 상태 표시 -->
                    <div class="stock-status low-stock">재고 임박 (2개 남음)</div>
                </div>
                <button class="cart-button" onclick="addToCart('d2', '삼성 갤럭시북3 프로')" aria-label="장바구니에 추가">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <!-- 제품 3 -->
            <div class="product-card">
                <div class="discount-tag">30%</div>
                <div class="category-tag">세탁기</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="d3"
                        data-product-name="LG 트롬 세탁기 24kg" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=d3'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('d3', 'LG 트롬 세탁기 24kg', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="LG 트롬 세탁기 24kg">
                </div>
                <div class="product-details">
                    <h3 class="product-title">LG 트롬 세탁기 24kg</h3>
                    <!-- 별점 리뷰 -->
                    <div class="product-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-value">4.7</span>
                        <span class="review-count">(93)</span>
                    </div>
                    <div class="product-price">
                        <span>1,050,000원</span>
                        <span class="original-price">1,500,000원</span>
                        <span class="discount-badge">30%</span>
                    </div>
                    <!-- 재고 상태 표시 -->
                    <div class="stock-status in-stock">재고 있음</div>
                </div>
                <button class="cart-button" onclick="addToCart('d3', 'LG 트롬 세탁기 24kg')" aria-label="장바구니에 추가">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <!-- 제품 4 -->
            <div class="product-card">
                <div class="discount-tag">25%</div>
                <div class="category-tag">냉장고</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="d4"
                        data-product-name="삼성 비스포크 냉장고 4도어" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=d4'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('d4', '삼성 비스포크 냉장고 4도어', 'refrigerator')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="삼성 비스포크 냉장고 4도어">
                </div>
                <div class="product-details">
                    <h3 class="product-title">삼성 비스포크 냉장고 4도어</h3>
                    <!-- 별점 리뷰 -->
                    <div class="product-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-value">4.9</span>
                        <span class="review-count">(152)</span>
                    </div>
                    <div class="product-price">
                        <span>2,250,000원</span>
                        <span class="original-price">3,000,000원</span>
                        <span class="discount-badge">25%</span>
                    </div>
                    <!-- 재고 상태 표시 -->
                    <div class="stock-status in-stock">재고 있음</div>
                </div>
                <button class="cart-button" onclick="addToCart('d4', '삼성 비스포크 냉장고 4도어')" aria-label="장바구니에 추가">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <!-- 제품 5 -->
            <div class="product-card">
                <div class="discount-tag">35%</div>
                <div class="category-tag">TV</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="d5"
                        data-product-name="LG OLED TV C2 65인치" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=d5'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('d5', 'LG OLED TV C2 65인치', 'tv')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="LG OLED TV C2 65인치">
                </div>
                <div class="product-details">
                    <h3 class="product-title">LG OLED TV C2 65인치</h3>
                    <!-- 별점 리뷰 -->
                    <div class="product-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <span class="rating-value">4.1</span>
                        <span class="review-count">(76)</span>
                    </div>
                    <div class="product-price">
                        <span>1,690,000원</span>
                        <span class="original-price">2,600,000원</span>
                        <span class="discount-badge">35%</span>
                    </div>
                    <!-- 재고 상태 표시 -->
                    <div class="stock-status low-stock">재고 임박 (1개 남음)</div>
                </div>
                <button class="cart-button" onclick="addToCart('d5', 'LG OLED TV C2 65인치')" aria-label="장바구니에 추가">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <!-- 제품 6 -->
            <div class="product-card">
                <div class="discount-tag">45%</div>
                <div class="category-tag">컴퓨터</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="d6"
                        data-product-name="LG전자 슬림형 i5 일반 데스크탑" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=d6'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('d6', 'LG전자 슬림형 i5 일반 데스크탑', 'smartphone')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="LG전자 슬림형 i5 일반 데스크탑">
                </div>
                <div class="product-details">
                    <h3 class="product-title">LG전자 슬림형 i5 일반 데스크탑</h3>
                    <!-- 별점 리뷰 -->
                    <div class="product-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-value">4.6</span>
                        <span class="review-count">(211)</span>
                    </div>
                    <div class="product-price">
                        <span>550,000원</span>
                        <span class="original-price">1,000,000원</span>
                        <span class="discount-badge">45%</span>
                    </div>
                    <!-- 재고 상태 표시 -->
                    <div class="stock-status out-of-stock">품절</div>
                </div>
                <button class="cart-button disabled" disabled aria-label="품절">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- 제품 7 -->
            <div class="product-card">
                <div class="discount-tag">20%</div>
                <div class="category-tag">노트북</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="d7"
                        data-product-name="에이수스 ROG 게이밍 노트북" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=d7'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('d7', '에이수스 ROG 게이밍 노트북', 'laptop')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="에이수스 ROG 게이밍 노트북">
                </div>
                <div class="product-details">
                    <h3 class="product-title">에이수스 ROG 게이밍 노트북</h3>
                    <!-- 별점 리뷰 -->
                    <div class="product-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <span class="rating-value">3.5</span>
                        <span class="review-count">(64)</span>
                    </div>
                    <div class="product-price">
                        <span>1,600,000원</span>
                        <span class="original-price">2,000,000원</span>
                        <span class="discount-badge">20%</span>
                    </div>
                    <!-- 재고 상태 표시 -->
                    <div class="stock-status in-stock">재고 있음</div>
                </div>
                <button class="cart-button" onclick="addToCart('d7', '에이수스 ROG 게이밍 노트북')" aria-label="장바구니에 추가">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <!-- 제품 8 -->
            <div class="product-card">
                <div class="discount-tag">15%</div>
                <div class="category-tag">컴퓨터</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="d8"
                        data-product-name="삼성전자 올인원 i7 게이밍 데스크탑" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=d8'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('d8', '삼성전자 올인원 i7 게이밍 데스크탑', 'smartphone')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="삼성전자 올인원 i7 게이밍 데스크탑">
                </div>
                <div class="product-details">
                    <h3 class="product-title">삼성전자 올인원 i7 게이밍 데스크탑</h3>
                    <!-- 별점 리뷰 -->
                    <div class="product-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-value">4.9</span>
                        <span class="review-count">(300+)</span>
                    </div>
                    <div class="product-price">
                        <span>1,350,000원</span>
                        <span class="original-price">1,590,000원</span>
                        <span class="discount-badge">15%</span>
                    </div>
                    <!-- 재고 상태 표시 -->
                    <div class="stock-status in-stock">재고 있음</div>
                </div>
                <button class="cart-button" onclick="addToCart('d8', '애플 아이폰 14 Pro')" aria-label="장바구니에 추가">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <!-- 페이지네이션 -->
        <div class="pagination">
            <button class="page-button arrow"><i class="fas fa-chevron-left"></i></button>
            <button class="page-button active">1</button>
            <button class="page-button">2</button>
            <button class="page-button">3</button>
            <button class="page-button">4</button>
            <button class="page-button">5</button>
            <button class="page-button">6</button>
            <button class="page-button">7</button>
            <button class="page-button">8</button>
            <button class="page-button">9</button>
            <button class="page-button">10</button>
            <button class="page-button arrow"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>

    <!-- 위시리스트 버튼 -->
    <button class="wishlist-button" id="wishlistButton" onclick="window.location.href='wishlist.html'"
        aria-label="위시리스트 보기">
        <i class="fas fa-heart"></i>
        <span class="wishlist-counter" id="wishlistCounter">0</span>
    </button>

    <!-- Scroll to top button -->
    <button class="scroll-top" id="scrollTop" aria-label="페이지 맨 위로 이동">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // DOM이 로드되면 실행
        document.addEventListener('DOMContentLoaded', function () {
            // 테마 관련 초기화
            initTheme();

            // 위시리스트 관련 초기화
            initWishlist();

            // 스크롤 이벤트 리스너
            window.addEventListener('scroll', handleScroll);

            // 필터 칩 토글 이벤트 설정
            setupFilterChips();

            // 타이머 시작
            startCountdown();

            // 페이지네이션 설정
            setupPagination();

            // 검색창 클릭 이벤트 설정
            setupSearchBar();
        });

        // 검색창 설정 함수
        function setupSearchBar() {
            const searchForm = document.getElementById('searchForm');
            if (searchForm) {
                // 폼 제출 이벤트 무시하고 직접 검색 페이지로 이동
                searchForm.addEventListener('submit', function (e) {
                    e.preventDefault();
                    window.location.href = 'search_results.html';
                });

                // 검색창과 검색 아이콘 클릭 시 이벤트
                const searchBar = document.querySelector('.search-bar');
                const searchIcon = document.querySelector('.search-icon');

                if (searchBar) {
                    // 검색창에 readonly 속성 추가
                    searchBar.setAttribute('readonly', true);
                    searchBar.style.cursor = 'pointer';

                    searchBar.addEventListener('click', function () {
                        window.location.href = 'search_results.html';
                    });
                }

                if (searchIcon) {
                    searchIcon.addEventListener('click', function (e) {
                        e.preventDefault();
                        window.location.href = 'search_results.html';
                    });
                }
            }
        }

        // 페이지네이션 설정
        function setupPagination() {
            // 첫 페이지만 상품을 표시
            showPage(1);

            // 페이지 버튼 이벤트 설정
            const pageButtons = document.querySelectorAll('.pagination .page-button');
            pageButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // 화살표 버튼 처리
                    if (this.classList.contains('arrow')) {
                        const activePage = document.querySelector('.pagination .page-button.active');
                        if (!activePage) return;

                        const pageNumber = parseInt(activePage.textContent);

                        if (this.querySelector('.fa-chevron-left')) {
                            // 이전 페이지로 (1페이지보다 작아지지 않도록)
                            if (pageNumber > 1) {
                                changePage(pageNumber - 1);
                            }
                        } else {
                            // 다음 페이지로 (10페이지를 넘지 않도록)
                            if (pageNumber < 10) {
                                changePage(pageNumber + 1);
                            }
                        }
                        return;
                    }

                    // 숫자 버튼 처리
                    const pageNumber = parseInt(this.textContent);
                    if (!isNaN(pageNumber)) {
                        changePage(pageNumber);
                    }
                });
            });
        }

        // 페이지 변경 함수
        function changePage(pageNumber) {
            // 현재 활성화된 버튼에서 active 클래스 제거
            const currentActive = document.querySelector('.pagination .page-button.active');
            if (currentActive) {
                currentActive.classList.remove('active');
            }

            // 새 페이지 버튼에 active 클래스 추가
            const newActiveButton = document.querySelector(`.pagination .page-button:not(.arrow):nth-child(${pageNumber + 1})`);
            if (newActiveButton) {
                newActiveButton.classList.add('active');
            }

            // 해당 페이지 상품 표시
            showPage(pageNumber);

            // 페이지 상단으로 스크롤
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // 특정 페이지의 상품만 표시하는 함수
        function showPage(pageNumber) {
            // 현재는 1페이지만 상품이 있고 다른 페이지는 없음
            const productCards = document.querySelectorAll('.product-grid .product-card');

            // 모든 페이지에서 상품 숨기기
            productCards.forEach(card => {
                card.style.display = 'none';
            });

            // 1페이지일 때만 상품 표시
            if (pageNumber === 1) {
                productCards.forEach(card => {
                    card.style.display = '';
                });

                // 만약 필터가 적용된 상태라면 필터 적용
                if (window.activeFilters) {
                    applyFilters(window.activeFilters);
                }
            }

            // 1페이지가 아닌 경우, "준비 중" 메시지를 표시할 수 있음
            if (pageNumber !== 1) {
                const productGrid = document.querySelector('.product-grid');

                // 기존 "준비 중" 메시지가 있으면 제거
                const existingMessage = document.getElementById('no-products-message');
                if (existingMessage) {
                    existingMessage.remove();
                }

                // 필터 결과 없음 메시지가 있다면 제거
                const noResultsMessage = document.getElementById('no-results-message');
                if (noResultsMessage) {
                    noResultsMessage.remove();
                }

                // "준비 중" 메시지 추가
                const noProductsMessage = document.createElement('div');
                noProductsMessage.id = 'no-products-message';
                noProductsMessage.style.gridColumn = '1 / -1'; // 전체 그리드 영역 차지
                noProductsMessage.style.textAlign = 'center';
                noProductsMessage.style.padding = '50px 0';
                noProductsMessage.style.color = 'var(--dark)';
                noProductsMessage.style.fontSize = '18px';
                noProductsMessage.innerHTML = `
            <i class="fas fa-info-circle" style="font-size: 48px; margin-bottom: 20px; color: var(--primary);"></i>
            <p>${pageNumber}페이지 상품 준비 중입니다.</p>
            <p>곧 새로운 할인 상품이 추가될 예정입니다.</p>
        `;

                productGrid.appendChild(noProductsMessage);
            }
        }

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

        // 스크롤 이벤트 처리
        function handleScroll() {
            const header = document.getElementById('header');
            const scrollTop = document.getElementById('scrollTop');

            if (window.scrollY > 50) {
                header.classList.add('scrolled');
                scrollTop.classList.add('show');
            } else {
                header.classList.remove('scrolled');
                scrollTop.classList.remove('show');
            }
        }

        // 위시리스트 초기화
        function initWishlist() {
            updateWishlistCounter();

            // 스크롤 위로 버튼 클릭 이벤트
            document.getElementById('scrollTop').addEventListener('click', function () {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // 위시리스트 버튼 설정
            setupWishlistToggleButtons();
        }

        // 위시리스트 버튼 설정
        function setupWishlistToggleButtons() {
            const wishlistButtons = document.querySelectorAll('.wishlist-toggle');
            const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

            wishlistButtons.forEach(button => {
                const productId = button.dataset.productId;

                // 이미 위시리스트에 있으면 활성화 상태로 표시
                if (wishlist.some(item => item.id === productId)) {
                    button.classList.add('active');
                    button.innerHTML = '<i class="fas fa-heart"></i>';
                }
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation(); // 이벤트 버블링 방지
                    toggleWishlist(button.dataset.productId, button.dataset.productName);

                    // 버튼 상태 토글
                    button.classList.toggle('active');
                    if (button.classList.contains('active')) {
                        button.innerHTML = '<i class="fas fa-heart"></i>';
                    } else {
                        button.innerHTML = '<i class="far fa-heart"></i>';
                    }
                });
            });
        }

        // 위시리스트에 추가/제거 토글
        function toggleWishlist(productId, productName) {
            let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
            const exists = wishlist.findIndex(item => item.id === productId);

            if (exists !== -1) {
                // 제거
                wishlist.splice(exists, 1);
                showToast(`${productName}이(가) 위시리스트에서 제거되었습니다.`);
            } else {
                // 추가
                wishlist.push({
                    id: productId,
                    name: productName,
                    addedAt: new Date().toISOString()
                });
                showToast(`${productName}이(가) 위시리스트에 추가되었습니다.`);
            }

            localStorage.setItem('wishlist', JSON.stringify(wishlist));
            updateWishlistCounter();
        }

        // 위시리스트 카운터 업데이트
        function updateWishlistCounter() {
            const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
            const counter = document.getElementById('wishlistCounter');

            if (counter) {
                counter.textContent = wishlist.length;
            }
        }

        // 필터 칩 설정
        function setupFilterChips() {
            // 모든 상품과 전역 필터 상태 저장
            const allProducts = document.querySelectorAll('.product-card');
            window.activeFilters = {
                category: '전체',
                discount: '전체',
                price: '전체'
            };

            // 각 필터 섹션 내의 칩들을 독립적으로 토글
            document.querySelectorAll('.filter-row').forEach((row, index) => {
                const chips = row.querySelectorAll('.filter-chip');
                const filterType = index === 0 ? 'category' : index === 1 ? 'discount' : 'price';

                chips.forEach(chip => {
                    chip.addEventListener('click', function () {
                        // 같은 행의 다른 칩들을 비활성화
                        chips.forEach(c => c.classList.remove('active'));

                        // 현재 칩 활성화
                        this.classList.add('active');

                        // 활성화된 필터 값 업데이트
                        window.activeFilters[filterType] = this.textContent.trim();

                        // 필터 적용
                        applyFilters(window.activeFilters);
                    });
                });
            });

            // 정렬 선택 이벤트
            document.getElementById('sortSelect').addEventListener('change', function () {
                sortProducts(this.value);
            });
        }

        // 필터 적용 함수
        function applyFilters(filters) {
            const productCards = document.querySelectorAll('.product-grid .product-card');
            const productGrid = document.querySelector('.product-grid');

            // 필터 결과 없음 메시지가 있다면 제거
            const noResultsMessage = document.getElementById('no-results-message');
            if (noResultsMessage) {
                noResultsMessage.remove();
            }

            // 준비 중 메시지가 있다면 제거
            const noProductsMessage = document.getElementById('no-products-message');
            if (noProductsMessage) {
                noProductsMessage.remove();
            }

            let visibleCount = 0;

            productCards.forEach(product => {
                // 초기 상태는 보이게 설정
                let shouldShow = true;

                // 카테고리 필터 적용
                if (filters.category !== '전체') {
                    const productCategory = product.querySelector('.category-tag').textContent;
                    if (productCategory !== filters.category) {
                        shouldShow = false;
                    }
                }

                // 할인율 필터 적용
                if (filters.discount !== '전체' && shouldShow) {
                    const discountTag = product.querySelector('.discount-tag').textContent;
                    const discountPercent = parseInt(discountTag.replace('%', ''));

                    if (filters.discount === '10% 이상' && discountPercent < 10) shouldShow = false;
                    else if (filters.discount === '20% 이상' && discountPercent < 20) shouldShow = false;
                    else if (filters.discount === '30% 이상' && discountPercent < 30) shouldShow = false;
                    else if (filters.discount === '40% 이상' && discountPercent < 40) shouldShow = false;
                }

                // 가격대 필터 적용
                if (filters.price !== '전체' && shouldShow) {
                    const priceText = product.querySelector('.product-price span').textContent;
                    const price = parseInt(priceText.replace(/[^0-9]/g, ''));

                    if (filters.price === '50만원 이하' && price > 500000) shouldShow = false;
                    else if (filters.price === '50-100만원' && (price <= 500000 || price > 1000000)) shouldShow = false;
                    else if (filters.price === '100-200만원' && (price <= 1000000 || price > 2000000)) shouldShow = false;
                    else if (filters.price === '200만원 이상' && price <= 2000000) shouldShow = false;
                }

                // 필터 결과에 따라 상품 표시/숨김
                product.style.display = shouldShow ? '' : 'none';

                if (shouldShow) {
                    visibleCount++;
                }
            });

            // 필터 결과가 없는 경우 메시지 표시
            if (visibleCount === 0) {
                const message = document.createElement('div');
                message.id = 'no-results-message';
                message.style.gridColumn = '1 / -1';
                message.style.textAlign = 'center';
                message.style.padding = '50px 0';
                message.style.color = 'var(--dark)';
                message.style.fontSize = '18px';
                message.innerHTML = `
            <i class="fas fa-exclamation-circle" style="font-size: 48px; margin-bottom: 20px; color: var(--primary);"></i>
            <p>조건에 맞는 상품이 없습니다.</p>
            <p>다른 필터를 선택해보세요.</p>
            <button id="resetFiltersBtn" style="margin-top: 20px; padding: 10px 20px; background-color: var(--primary); color: white; border: none; border-radius: 5px; cursor: pointer;">필터 초기화</button>
        `;
                productGrid.appendChild(message);

                // 필터 초기화 버튼 이벤트
                document.getElementById('resetFiltersBtn').addEventListener('click', function () {
                    resetFilters();
                });
            }

            // 필터 적용 알림
            showToast('필터가 적용되었습니다.');
        }

        // 필터 초기화 함수
        function resetFilters() {
            // 모든 필터 칩의 active 상태 제거
            document.querySelectorAll('.filter-row').forEach((row, index) => {
                const chips = row.querySelectorAll('.filter-chip');
                // 첫 번째 칩(전체)만 활성화
                chips.forEach((chip, chipIndex) => {
                    chip.classList.remove('active');
                    if (chipIndex === 0) {
                        chip.classList.add('active');
                    }
                });
            });

            // 전역 필터 상태 초기화
            window.activeFilters = {
                category: '전체',
                discount: '전체',
                price: '전체'
            };

            // 모든 상품 표시
            const productCards = document.querySelectorAll('.product-grid .product-card');
            productCards.forEach(card => {
                card.style.display = '';
            });

            // 필터 결과 없음 메시지 제거
            const noResultsMessage = document.getElementById('no-results-message');
            if (noResultsMessage) {
                noResultsMessage.remove();
            }

            // 초기화 알림
            showToast('필터가 초기화되었습니다.');
        }

        // 상품 정렬 함수
        function sortProducts(sortType) {
            const productGrid = document.querySelector('.product-grid');
            const products = Array.from(document.querySelectorAll('.product-grid .product-card:not([style*="display: none"])'));

            products.sort((a, b) => {
                if (sortType === 'discountRate') {
                    // 할인율 높은순
                    const discountA = parseInt(a.querySelector('.discount-tag').textContent);
                    const discountB = parseInt(b.querySelector('.discount-tag').textContent);
                    return discountB - discountA;
                } else if (sortType === 'lowPrice') {
                    // 가격 낮은순
                    const priceA = parseInt(a.querySelector('.product-price span').textContent.replace(/[^0-9]/g, ''));
                    const priceB = parseInt(b.querySelector('.product-price span').textContent.replace(/[^0-9]/g, ''));
                    return priceA - priceB;
                } else if (sortType === 'highPrice') {
                    // 가격 높은순
                    const priceA = parseInt(a.querySelector('.product-price span').textContent.replace(/[^0-9]/g, ''));
                    const priceB = parseInt(b.querySelector('.product-price span').textContent.replace(/[^0-9]/g, ''));
                    return priceB - priceA;
                } else if (sortType === 'popularity') {
                    // 인기순 (리뷰 수 기준)
                    const reviewCountA = a.querySelector('.review-count').textContent;
                    const reviewCountB = b.querySelector('.review-count').textContent;
                    const numA = parseInt(reviewCountA.replace(/[^0-9]/g, '')) || 0;
                    const numB = parseInt(reviewCountB.replace(/[^0-9]/g, '')) || 0;
                    return numB - numA;
                } else if (sortType === 'latest') {
                    // 최신순 (실제로는 무작위 정렬)
                    return Math.random() - 0.5;
                }

                // 기본은 할인율 높은순
                return 0;
            });

            // 정렬된 상품을 다시 그리드에 추가
            products.forEach(product => {
                productGrid.appendChild(product);
            });

            // 정렬 적용 알림
            showToast('정렬이 적용되었습니다.');
        }

        // 타이머 카운트다운 시작
        function startCountdown() {
            // 현재 시간부터 24시간 후로 종료 시간 설정
            const now = new Date();
            const endTime = new Date(now.getTime() + 24 * 60 * 60 * 1000);

            function updateTimer() {
                const currentTime = new Date();
                const diff = endTime - currentTime;

                if (diff <= 0) {
                    // 타이머 종료
                    document.getElementById('hours').textContent = '00';
                    document.getElementById('minutes').textContent = '00';
                    document.getElementById('seconds').textContent = '00';
                    return;
                }

                // 시, 분, 초 계산
                const hours = Math.floor(diff / (1000 * 60 * 60));
                const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((diff % (1000 * 60)) / 1000);

                // 타이머 업데이트
                document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
                document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
                document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');

                // 1초마다 업데이트
                setTimeout(updateTimer, 1000);
            }

            // 타이머 시작
            updateTimer();
        }

        // 장바구니에 상품 추가
        function addToCart(productId, productName) {
            // 장바구니 정보를 로컬 스토리지에 저장
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // 이미 장바구니에 있는지 확인
            const existingProduct = cart.find(item => item.id === productId);

            if (existingProduct) {
                // 이미 있으면 수량 증가
                existingProduct.quantity += 1;
            } else {
                // 없으면 새로 추가
                cart.push({
                    id: productId,
                    name: productName,
                    quantity: 1
                });
            }

            // 장바구니 정보 저장
            localStorage.setItem('cart', JSON.stringify(cart));

            // 토스트 메시지 표시
            showToast(`${productName}이(가) 장바구니에 추가되었습니다.`);
        }

        // 상품 비교 기능
        function addToCompare(productId, productName, category) {
            // 비교 목록을 로컬 스토리지에 저장
            let compareList = JSON.parse(localStorage.getItem('compareList')) || [];

            // 같은 카테고리 제품만 비교 가능
            const sameCategory = compareList.filter(item => item.category === category);

            // 최대 3개까지만 비교 가능
            if (sameCategory.length >= 3) {
                showToast(`최대 3개의 ${category} 제품만 비교할 수 있습니다.`);
                return;
            }

            // 이미 비교 목록에 있는지 확인
            const exists = compareList.findIndex(item => item.id === productId);

            if (exists !== -1) {
                showToast(`${productName}은(는) 이미 비교 목록에 있습니다.`);
                return;
            }

            // 비교 목록에 추가
            compareList.push({
                id: productId,
                name: productName,
                category: category,
                addedAt: new Date().toISOString()
            });

            localStorage.setItem('compareList', JSON.stringify(compareList));
            showToast(`${productName}이(가) 비교 목록에 추가되었습니다.`);
        }

        // 토스트 메시지 표시
        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toast-message');

            toastMessage.textContent = message;
            toast.classList.add('show');

            setTimeout(function () {
                toast.classList.remove('show');
            }, 3000);
        }

        // Pay button click 이벤트(결제 페이지용)
        const payBtn = document.getElementById('payBtn');
        if (payBtn) {
            payBtn.addEventListener('click', function (e) {
                // 기본 이벤트 중지 (매우 중요)
                e.preventDefault();

                // 필수 동의 체크박스 검증
                const termsChecked = document.getElementById('agreeTerms')?.checked || false;
                const privacyChecked = document.getElementById('agreePrivacy')?.checked || false;
                const paymentChecked = document.getElementById('agreePayment')?.checked || false;
                const allAgreed = document.getElementById('agreeAll')?.checked || false;

                console.log("약관 체크 상태:", termsChecked, privacyChecked, paymentChecked, allAgreed);

                // 전체 동의가 체크되어 있거나 또는 필수 약관 3개가 모두 체크되어 있는지 확인
                if (!(allAgreed || (termsChecked && privacyChecked && paymentChecked))) {
                    showToast('모든 필수 약관에 동의해주세요.');

                    // 체크되지 않은 필수 항목 강조 표시
                    const requiredCheckboxes = [
                        { id: 'agreeTerms', elem: document.getElementById('agreeTerms') },
                        { id: 'agreePrivacy', elem: document.getElementById('agreePrivacy') },
                        { id: 'agreePayment', elem: document.getElementById('agreePayment') }
                    ];

                    requiredCheckboxes.forEach(item => {
                        if (item.elem && !item.elem.checked) {
                            // 체크되지 않은 항목의 라벨에 빨간색 표시
                            const label = document.querySelector(`label[for="${item.id}"]`);
                            if (label) {
                                label.style.color = 'var(--danger)';

                                // 3초 후 원래 색상으로 복원
                                setTimeout(() => {
                                    label.style.color = '';
                                }, 3000);
                            }
                        }
                    });

                    // 약관 섹션으로 스크롤
                    const agreementSection = document.querySelector('.agreement-section');
                    if (agreementSection) {
                        agreementSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }

                    // 함수 종료
                    return;
                }

                // 카드결제 선택 시 카드번호 유효성 검사
                if (document.getElementById('creditCard')?.checked) {
                    const cardNumberInput = document.getElementById('cardNumber');
                    if (cardNumberInput) {
                        const cardNumber = cardNumberInput.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');

                        if (cardNumber.length !== 16) {
                            showToast('카드번호는 16자리를 입력해주세요.');

                            // 카드번호 입력 필드로 스크롤 및 포커스
                            cardNumberInput.scrollIntoView({
                                behavior: 'smooth',
                                block: 'center'
                            });
                            cardNumberInput.focus();

                            // 함수 종료
                            return;
                        }
                    }
                }

                // 모든 검증을 통과했으면 결제 진행 (다음 페이지로 이동)
                console.log("모든 검증 통과, 다음 페이지로 이동합니다.");
                window.location.href = 'order-complete.html';
            });
        }
    </script>
</body>

</html>