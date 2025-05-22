<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 최근 본 상품</title>
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
            /* 최소 높이 설정 */
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

        /* 자동완성 관련 스타일 */
        .autocomplete-container {
            position: absolute;
            width: 100%;
            top: 100%;
            left: 0;
            background-color: var(--card-bg);
            border-radius: 0 0 10px 10px;
            box-shadow: var(--shadow);
            z-index: 1000;
            max-height: 300px;
            overflow-y: auto;
            display: none;
            border: 1px solid var(--border-color);
            border-top: none;
            margin-top: -2px;
        }

        .suggestion-item,
        .recent-item {
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.2s;
            border-bottom: 1px solid var(--border-color);
        }

        .recent-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .suggestion-item:hover,
        .recent-item:hover,
        .selected {
            background-color: var(--gray-light);
        }

        .suggestion-item strong {
            color: var(--primary);
        }

        .delete-btn {
            color: var(--dark);
            opacity: 0.5;
            padding: 0 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .delete-btn:hover {
            opacity: 1;
            color: var(--danger);
        }

        .recent-header {
            padding: 10px 15px;
            font-size: 12px;
            color: var(--dark);
            opacity: 0.7;
            background-color: var(--gray-light);
            border-bottom: 1px solid var(--border-color);
        }

        .no-result {
            padding: 15px;
            text-align: center;
            color: var(--dark);
            opacity: 0.7;
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

        /* Main content layout */
        .main-content {
            display: flex;
            margin-top: 30px;
            gap: 30px;
        }

        /* Sidebar styles with hover effects */
        .sidebar {
            width: 220px;
            flex-shrink: 0;
        }

        a.category-item {
            text-decoration: none;
            color: inherit;
            display: flex;
            align-items: center;
            gap: 15px;
            background-color: var(--secondary);
            padding: 15px;
            margin-bottom: 15px;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        a.category-item:hover {
            background-color: var(--gray);
            transform: translateX(5px);
        }

        .category-icon {
            width: 40px;
            height: 40px;
            background-color: var(--body-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: var(--primary);
        }

        .category-name {
            font-weight: 500;
        }

        /* Content area */
        .content-area {
            flex-grow: 1;
        }

        /* Section headers */
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 22px;
            font-weight: 700;
            position: relative;
            padding-left: 15px;
        }

        .section-title:before {
            content: '';
            position: absolute;
            left: 0;
            top: 5px;
            width: 5px;
            height: 20px;
            background-color: var(--primary);
            border-radius: 3px;
        }

        .section-link {
            color: var(--primary);
            font-size: 14px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: var(--transition);
        }

        .section-link:hover {
            color: var(--primary-dark);
            transform: translateX(3px);
        }

        /* Product Grid with hover effects */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .product-card {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            border: 1px solid var(--border-color);
            height: 370px;
            /* 별점 및 재고 표시 추가로 높이 조정 */
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            height: 200px;
            background-color: var(--gray);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
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
            cursor: pointer;
            transition: var(--transition);
            border: none;
            color: var(--dark);
            font-size: 16px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
            /* 위시리스트 버튼을 위한 공간 확보 */
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
            /* 스크롤 위로 버튼 위에 배치 */
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

        /* 페이지 특화 스타일 */
        .page-header {
            background-color: var(--secondary);
            padding: 30px;
            border-radius: var(--border-radius);
            margin-bottom: 30px;
            box-shadow: var(--shadow);
        }

        .page-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .page-description {
            font-size: 16px;
            color: var(--dark);
            opacity: 0.8;
        }

        /* 최근 본 상품 필터 */
        .filter-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            background-color: var(--card-bg);
            padding: 15px 20px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .filter-options {
            display: flex;
            gap: 15px;
        }

        .filter-button {
            background-color: var(--secondary);
            border: none;
            border-radius: 20px;
            padding: 8px 15px;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
            color: var(--text);
        }

        .filter-button:hover,
        .filter-button.active {
            background-color: var(--primary);
            color: white;
        }

        .clear-history {
            background-color: var(--secondary);
            border: none;
            border-radius: 20px;
            padding: 8px 15px;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
            color: var(--danger);
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .clear-history:hover {
            background-color: var(--danger);
            color: white;
        }

        /* 상품 보기 날짜 표시 */
        .view-date {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            z-index: 2;
        }

        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 50px 0;
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .empty-icon {
            font-size: 50px;
            color: var(--gray);
            margin-bottom: 20px;
        }

        .empty-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .empty-description {
            font-size: 16px;
            color: var(--dark);
            opacity: 0.8;
            margin-bottom: 20px;
        }

        .browse-button {
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

        .browse-button:hover {
            background-color: var(--primary-dark);
            transform: scale(1.05);
        }

        /* 반응형 디자인 */
        @media (max-width: 1024px) {
            .product-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                margin-bottom: 20px;
            }

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .nav-buttons {
                gap: 5px;
            }

            .nav-button {
                padding: 10px 15px;
                font-size: 13px;
            }

            .filter-container {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }

            .filter-options {
                width: 100%;
                overflow-x: auto;
                padding-bottom: 10px;
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
        </div>
        <div class="search-container">
            <form id="searchForm" action="search_results.html" method="get">
                <input type="text" class="search-bar" id="searchInput" name="query" placeholder="찾으시는 상품을 검색해보세요">
                <button type="submit" class="search-icon">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <!-- 자동완성 컨테이너 -->
            <div id="autocompleteContainer" class="autocomplete-container"></div>
        </div>
        <div class="nav-buttons">
            <button class="nav-button" id="loginButton">
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
        <!-- Sidebar with categories -->
        <div class="sidebar">
            <a href="computer.html" class="category-item">
                <div class="category-icon">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="category-name">컴퓨터</div>
            </a>
            <!-- 세탁기 -->
            <a href="washer.html" class="category-item">
                <div class="category-icon">
                    <i class="fas fa-tshirt"></i>
                </div>
                <div class="category-name">세탁기</div>
            </a>

            <!-- 냉장고 -->
            <a href="refrigerator.html" class="category-item">
                <div class="category-icon">
                    <i class="fas fa-snowflake"></i>
                </div>
                <div class="category-name">냉장고</div>
            </a>

            <!-- TV -->
            <a href="tv.html" class="category-item">
                <div class="category-icon">
                    <i class="fas fa-tv"></i>
                </div>
                <div class="category-name">TV</div>
            </a>

            <!-- 노트북 -->
            <a href="laptop.html" class="category-item">
                <div class="category-icon">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="category-name">노트북</div>
            </a>

            <!-- 마이페이지 -->
            <a href="mypage.html" class="category-item">
                <div class="category-icon">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="category-name">마이페이지</div>
            </a>

            <!-- 최근 본 상품 -->
            <a href="recent_products.html" class="category-item"
                style="background-color: var(--primary-light); color: var(--primary);">
                <div class="category-icon" style="color: white; background-color: var(--primary);">
                    <i class="fas fa-history"></i>
                </div>
                <div class="category-name">최근 본 상품</div>
            </a>
        </div>

        <!-- Content area -->
        <div class="content-area">
            <!-- 페이지 헤더 -->
            <div class="page-header">
                <h1 class="page-title"><i class="fas fa-history"></i> 최근 본 상품</h1>
                <p class="page-description">최근에 살펴본 상품들을 한눈에 확인하고 관리하세요.</p>
            </div>

            <!-- 필터 컨테이너 -->
            <div class="filter-container">
                <div class="filter-options">
                    <button class="filter-button active" data-filter="all">전체 상품</button>
                    <button class="filter-button" data-filter="today">오늘 본 상품</button>
                    <button class="filter-button" data-filter="week">이번 주</button>
                    <button class="filter-button" data-filter="month">이번 달</button>
                    <button class="filter-button" data-filter="category">카테고리별</button>
                </div>
                <button class="clear-history" id="clearHistory">
                    <i class="fas fa-trash-alt"></i>
                    기록 전체 삭제
                </button>
            </div>

            <!-- 상품 그리드 -->
            <div id="recentProductsGrid" class="product-grid">
                <!-- 상품 1 -->
                <div class="product-card" data-date="2025-05-15" data-category="laptop">
                    <div class="view-date">오늘 13:42</div>
                    <div class="product-image">
                        <img src="/api/placeholder/400/320" alt="삼성 갤럭시북 Pro 360">
                        <div class="product-quick-actions">
                            <button class="quick-action-btn wishlist-toggle" data-product-id="product1"
                                data-product-name="삼성 갤럭시북 Pro 360" aria-label="위시리스트에 추가">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="window.location.href='product_details.html?id=product1'" aria-label="상품 상세보기">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="addToCompare('product1', '삼성 갤럭시북 Pro 360', 'laptop')" aria-label="상품 비교하기">
                                <i class="fas fa-exchange-alt"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">삼성 갤럭시북 Pro 360</h3>
                        <!-- 별점 리뷰 -->
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-value">4.5</span>
                            <span class="review-count">(128)</span>
                        </div>
                        <div class="product-price">
                            <span>1,450,000원</span>
                        </div>
                        <!-- 재고 상태 표시 -->
                        <div class="stock-status in-stock">재고 있음</div>
                    </div>
                    <button class="cart-button" onclick="addToCart('product1', '삼성 갤럭시북 Pro 360')"
                        aria-label="장바구니에 추가">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>

                <!-- 상품 2 -->
                <div class="product-card" data-date="2025-05-15" data-category="laptop">
                    <div class="view-date">오늘 11:30</div>
                    <div class="product-image">
                        <img src="/api/placeholder/400/320" alt="LG 그램 17인치 노트북">
                        <div class="product-quick-actions">
                            <button class="quick-action-btn wishlist-toggle" data-product-id="product2"
                                data-product-name="LG 그램 17인치 노트북" aria-label="위시리스트에 추가">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="window.location.href='product_details.html?id=product2'" aria-label="상품 상세보기">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="addToCompare('product2', 'LG 그램 17인치 노트북', 'laptop')" aria-label="상품 비교하기">
                                <i class="fas fa-exchange-alt"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">LG 그램 17인치 노트북</h3>
                        <!-- 별점 리뷰 -->
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="rating-value">4.0</span>
                            <span class="review-count">(95)</span>
                        </div>
                        <div class="product-price">
                            <span>1,599,000원</span>
                        </div>
                        <!-- 재고 상태 표시 -->
                        <div class="stock-status low-stock">재고 임박 (5개 남음)</div>
                    </div>
                    <button class="cart-button" onclick="addToCart('product2', 'LG 그램 17인치 노트북')" aria-label="장바구니에 추가">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>

                <!-- 상품 3 -->
                <div class="product-card" data-date="2025-05-14" data-category="refrigerator">
                    <div class="view-date">어제 18:22</div>
                    <div class="product-image">
                        <img src="/api/placeholder/400/320" alt="삼성 비스포크 냉장고">
                        <div class="product-quick-actions">
                            <button class="quick-action-btn wishlist-toggle" data-product-id="product5"
                                data-product-name="삼성 비스포크 냉장고" aria-label="위시리스트에 추가">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="window.location.href='product_details.html?id=product5'" aria-label="상품 상세보기">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="addToCompare('product5', '삼성 비스포크 냉장고', 'refrigerator')" aria-label="상품 비교하기">
                                <i class="fas fa-exchange-alt"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">삼성 비스포크 냉장고</h3>
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
                            <span class="review-count">(156)</span>
                        </div>
                        <div class="product-price">
                            <span>1,850,000원</span>
                            <span class="original-price">2,150,000원</span>
                            <span class="discount-badge">14%</span>
                        </div>
                        <!-- 재고 상태 표시 -->
                        <div class="stock-status in-stock">재고 있음</div>
                    </div>
                    <button class="cart-button" onclick="addToCart('product5', '삼성 비스포크 냉장고')" aria-label="장바구니에 추가">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>

                <!-- 상품 4 -->
                <div class="product-card" data-date="2025-05-14" data-category="washer">
                    <div class="view-date">어제 16:05</div>
                    <div class="product-image">
                        <img src="/api/placeholder/400/320" alt="LG 트롬 세탁기 21kg">
                        <div class="product-quick-actions">
                            <button class="quick-action-btn wishlist-toggle" data-product-id="product6"
                                data-product-name="LG 트롬 세탁기 21kg" aria-label="위시리스트에 추가">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="window.location.href='product_details.html?id=product6'" aria-label="상품 상세보기">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="addToCompare('product6', 'LG 트롬 세탁기 21kg', 'washer')" aria-label="상품 비교하기">
                                <i class="fas fa-exchange-alt"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">LG 트롬 세탁기 21kg</h3>
                        <!-- 별점 리뷰 -->
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="rating-value">4.2</span>
                            <span class="review-count">(87)</span>
                        </div>
                        <div class="product-price">
                            <span>1,350,000원</span>
                            <span class="original-price">1,550,000원</span>
                            <span class="discount-badge">13%</span>
                        </div>
                        <!-- 재고 상태 표시 -->
                        <div class="stock-status low-stock">재고 임박 (3개 남음)</div>
                    </div>
                    <button class="cart-button" onclick="addToCart('product6', 'LG 트롬 세탁기 21kg')" aria-label="장바구니에 추가">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>

                <!-- 상품 5 -->
                <div class="product-card" data-date="2025-05-10" data-category="audio">
                    <div class="view-date">5일 전</div>
                    <div class="product-image">
                        <img src="/api/placeholder/400/320" alt="소니 블루투스 헤드폰">
                        <div class="product-quick-actions">
                            <button class="quick-action-btn wishlist-toggle" data-product-id="product9"
                                data-product-name="소니 블루투스 헤드폰" aria-label="위시리스트에 추가">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="window.location.href='product_details.html?id=product9'" aria-label="상품 상세보기">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="quick-action-btn" onclick="addToCompare('product9', '소니 블루투스 헤드폰', 'audio')"
                                aria-label="상품 비교하기">
                                <i class="fas fa-exchange-alt"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">소니 블루투스 헤드폰</h3>
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
                            <span class="review-count">(42)</span>
                        </div>
                        <div class="product-price">
                            <span>389,000원</span>
                        </div>
                        <!-- 재고 상태 표시 -->
                        <div class="stock-status in-stock">재고 있음</div>
                    </div>
                    <button class="cart-button" onclick="addToCart('product9', '소니 블루투스 헤드폰')" aria-label="장바구니에 추가">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>

                <!-- 상품 6 -->
                <div class="product-card" data-date="2025-05-08" data-category="tablet">
                    <div class="view-date">7일 전</div>
                    <div class="product-image">
                        <img src="/api/placeholder/400/320" alt="애플 아이패드 프로">
                        <div class="product-quick-actions">
                            <button class="quick-action-btn wishlist-toggle" data-product-id="product10"
                                data-product-name="애플 아이패드 프로" aria-label="위시리스트에 추가">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="window.location.href='product_details.html?id=product10'" aria-label="상품 상세보기">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="quick-action-btn" onclick="addToCompare('product10', '애플 아이패드 프로', 'tablet')"
                                aria-label="상품 비교하기">
                                <i class="fas fa-exchange-alt"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">애플 아이패드 프로</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-value">4.7</span>
                            <span class="review-count">(56)</span>
                        </div>
                        <div class="product-price">
                            <span>1,290,000원</span>
                        </div>
                        <div class="stock-status in-stock">재고 있음</div>
                    </div>
                    <button class="cart-button" onclick="addToCart('product10', '애플 아이패드 프로')" aria-label="장바구니에 추가">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>

            <!-- 비어있는 상태 (처음에는 숨겨져 있음) -->
            <div id="emptyState" class="empty-state" style="display: none;">
                <div class="empty-icon">
                    <i class="fas fa-history"></i>
                </div>
                <h2 class="empty-title">최근 본 상품이 없습니다</h2>
                <p class="empty-description">다양한 상품을 둘러보고 나만의 기록을 만들어보세요.</p>
                <button class="browse-button" onclick="window.location.href='mainpage.html'">
                    <i class="fas fa-shopping-basket"></i>
                    상품 둘러보기
                </button>
            </div>
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

            // 위시리스트 토글 버튼 이벤트 설정
            setupWishlistToggleButtons();

            // 검색 기능 초기화
            initSearch();

            // 최근 본 상품 필터 초기화
            initRecentProductsFilter();

            // 로그인 상태 확인 및 UI 업데이트
            checkLoginStatus();

            const searchInput = document.getElementById('searchInput');
            if (searchInput) {
                searchInput.style.cursor = 'pointer';  // 커서 모양 변경 (선택사항)
                searchInput.addEventListener('click', () => {
                    window.location.href = 'search_results.html';
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
                }

                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    toggleWishlist(button.dataset.productId, button.dataset.productName);

                    // 버튼 상태 토글
                    button.classList.toggle('active');
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

        // 검색 기능 초기화
        function initSearch() {
            const searchInput = document.getElementById('searchInput');
            const searchForm = document.getElementById('searchForm');
            const autocompleteContainer = document.getElementById('autocompleteContainer');

            // 검색 제안 목록 - 실제로는 서버에서 가져오는 데이터
            const searchSuggestions = [
                '삼성 갤럭시북', '애플 맥북', 'LG 그램', '에이수스 게이밍',
                '삼성 비스포크 냉장고', 'LG 트롬 세탁기', '삼성 갤럭시 S25',
                'LG OLED TV', '소니 블루투스 헤드폰', '아이패드 프로'
            ];

            // 최근 검색어 로드
            let recentSearches = JSON.parse(localStorage.getItem('recentSearches')) || [];

            // 검색창 입력 이벤트
            searchInput.addEventListener('input', function () {
                const query = this.value.toLowerCase().trim();

                if (query.length > 0) {
                    // 검색어 필터링 및 표시
                    const filteredSuggestions = searchSuggestions.filter(item =>
                        item.toLowerCase().includes(query)
                    );
                    showSuggestions(filteredSuggestions, query);
                } else if (recentSearches.length > 0) {
                    // 최근 검색어 표시
                    showRecentSearches();
                } else {
                    // 빈 검색어이고 최근 검색어도 없으면 숨기기
                    autocompleteContainer.innerHTML = '';
                    autocompleteContainer.style.display = 'none';
                }
            });


            // 검색 제안 표시 함수
            function showSuggestions(suggestions, query) {
                autocompleteContainer.innerHTML = '';

                if (suggestions.length === 0) {
                    autocompleteContainer.innerHTML = '<div class="no-result">검색 결과가 없습니다</div>';
                    autocompleteContainer.style.display = 'block';
                    return;
                }

                suggestions.forEach(item => {
                    const div = document.createElement('div');
                    div.className = 'suggestion-item';

                    // 검색어 강조 표시
                    const highlightedText = item.replace(
                        new RegExp(query, 'gi'),
                        match => `<strong>${match}</strong>`
                    );

                    div.innerHTML = highlightedText;

                    // 클릭 이벤트
                    div.addEventListener('click', function () {
                        searchInput.value = item;
                        addToRecentSearches(item);
                        searchForm.submit();
                    });

                    autocompleteContainer.appendChild(div);
                });

                autocompleteContainer.style.display = 'block';
            }

            // 최근 검색어 표시 함수
            function showRecentSearches() {
                autocompleteContainer.innerHTML = '';

                const header = document.createElement('div');
                header.className = 'recent-header';
                header.textContent = '최근 검색어';
                autocompleteContainer.appendChild(header);

                // 최대 5개만 표시
                recentSearches.slice(0, 5).forEach(item => {
                    const div = document.createElement('div');
                    div.className = 'recent-item';

                    const itemText = document.createElement('span');
                    itemText.textContent = item;

                    const deleteBtn = document.createElement('span');
                    deleteBtn.className = 'delete-btn';
                    deleteBtn.innerHTML = '×';

                    // 삭제 버튼 클릭 이벤트
                    deleteBtn.addEventListener('click', function (e) {
                        e.stopPropagation();
                        removeFromRecentSearches(item);
                        showRecentSearches();
                    });

                    // 검색어 클릭 이벤트
                    div.addEventListener('click', function () {
                        searchInput.value = item;
                        addToRecentSearches(item); // 최신으로 순서 업데이트
                        searchForm.submit();
                    });

                    div.appendChild(itemText);
                    div.appendChild(deleteBtn);
                    autocompleteContainer.appendChild(div);
                });

                autocompleteContainer.style.display = 'block';
            }

            // 최근 검색어에 추가
            function addToRecentSearches(query) {
                // 이미 있으면 제거
                recentSearches = recentSearches.filter(item => item !== query);

                // 맨 앞에 추가
                recentSearches.unshift(query);

                // 최대 10개로 제한
                if (recentSearches.length > 10) {
                    recentSearches.pop();
                }

                // 저장
                localStorage.setItem('recentSearches', JSON.stringify(recentSearches));
            }

            // 최근 검색어에서 제거
            function removeFromRecentSearches(query) {
                recentSearches = recentSearches.filter(item => item !== query);
                localStorage.setItem('recentSearches', JSON.stringify(recentSearches));
            }

            // 클릭 이벤트 처리 (바깥 영역 클릭 시 닫기)
            document.addEventListener('click', function (e) {
                if (!searchInput.contains(e.target) && !autocompleteContainer.contains(e.target)) {
                    autocompleteContainer.style.display = 'none';
                }
            });

            // 키보드 네비게이션
            searchInput.addEventListener('keydown', function (e) {
                const items = autocompleteContainer.querySelectorAll('.suggestion-item, .recent-item');
                if (items.length === 0 || autocompleteContainer.style.display === 'none') return;

                const current = autocompleteContainer.querySelector('.selected');
                let next;

                if (e.key === 'ArrowDown') {
                    e.preventDefault();
                    if (!current) {
                        next = items[0];
                    } else {
                        const index = Array.from(items).indexOf(current);
                        next = items[index + 1] || items[0];
                    }

                    if (current) current.classList.remove('selected');
                    next.classList.add('selected');
                    searchInput.value = next.textContent.replace('×', '').trim();
                }
                else if (e.key === 'ArrowUp') {
                    e.preventDefault();
                    if (!current) {
                        next = items[items.length - 1];
                    } else {
                        const index = Array.from(items).indexOf(current);
                        next = items[index - 1] || items[items.length - 1];
                    }

                    if (current) current.classList.remove('selected');
                    next.classList.add('selected');
                    searchInput.value = next.textContent.replace('×', '').trim();
                }
                else if (e.key === 'Enter' && current) {
                    e.preventDefault();
                    searchInput.value = current.textContent.replace('×', '').trim();
                    addToRecentSearches(searchInput.value);
                    searchForm.submit();
                }
                else if (e.key === 'Escape') {
                    autocompleteContainer.style.display = 'none';
                }
            });

            // 검색 폼 제출 시 최근 검색어에 추가
            searchForm.addEventListener('submit', function (e) {
                e.preventDefault();

                const query = searchInput.value.trim();
                if (query) {
                    addToRecentSearches(query);
                    window.location.href = `./search_results.html?query=${encodeURIComponent(query)}`;
                }
            });
        }

        // 최근 본 상품 필터 초기화
        function initRecentProductsFilter() {
            const filterButtons = document.querySelectorAll('.filter-button');
            const productCards = document.querySelectorAll('.product-card');
            const productGrid = document.getElementById('recentProductsGrid');
            const emptyState = document.getElementById('emptyState');
            const clearHistoryBtn = document.getElementById('clearHistory');

            // 초기 상태 확인 - 상품이 없으면 빈 상태 표시
            if (productCards.length === 0) {
                productGrid.style.display = 'none';
                emptyState.style.display = 'block';
            }

            // 필터 버튼 이벤트
            filterButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // 활성화 버튼 변경
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    const filter = this.dataset.filter;
                    filterProducts(filter);
                });
            });

            // 기록 삭제 버튼 이벤트
            clearHistoryBtn.addEventListener('click', function () {
                if (confirm('최근 본 상품 기록을 모두 삭제하시겠습니까?')) {
                    // 실제로는 localStorage에서 최근 본 상품 데이터 삭제
                    localStorage.removeItem('recentProducts');

                    // UI 업데이트
                    productGrid.style.display = 'none';
                    emptyState.style.display = 'block';

                    showToast('최근 본 상품 기록이 삭제되었습니다.');
                }
            });

            // 상품 필터링 함수
            function filterProducts(filter) {
                let visibleCount = 0;
                const now = new Date();
                const today = new Date(now.getFullYear(), now.getMonth(), now.getDate()).getTime();
                const weekAgo = today - 7 * 24 * 60 * 60 * 1000;
                const monthAgo = today - 30 * 24 * 60 * 60 * 1000;

                productCards.forEach(card => {
                    const productDate = new Date(card.dataset.date).getTime();
                    const productCategory = card.dataset.category;

                    let visible = false;

                    switch (filter) {
                        case 'all':
                            visible = true;
                            break;
                        case 'today':
                            visible = productDate >= today;
                            break;
                        case 'week':
                            visible = productDate >= weekAgo;
                            break;
                        case 'month':
                            visible = productDate >= monthAgo;
                            break;
                        case 'category':
                            // 카테고리 선택 모달이나 추가 필터링 UI가 필요할 수 있음
                            // 여기서는 간단히 모든 카테고리를 표시
                            visible = true;
                            break;
                    }

                    card.style.display = visible ? 'block' : 'none';
                    if (visible) visibleCount++;
                });

                // 필터링 결과가 없으면 메시지 표시
                if (visibleCount === 0) {
                    productGrid.style.display = 'none';
                    emptyState.style.display = 'block';
                    document.querySelector('.empty-description').textContent =
                        '해당 기간에 본 상품이 없습니다. 다른 기간을 선택해보세요.';
                } else {
                    productGrid.style.display = 'grid';
                    emptyState.style.display = 'none';
                }
            }
        }

        // 로그인 상태 확인 및 UI 업데이트
        function checkLoginStatus() {
            // 실제 구현에서는 세션 또는 토큰 확인을 통해 로그인 상태 파악
            const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';
            const loginButton = document.getElementById('loginButton');

            if (isLoggedIn) {
                // 로그인 상태 UI
                loginButton.innerHTML = '<i class="fas fa-user-circle"></i> 마이페이지';
                loginButton.onclick = function () {
                    window.location.href = 'mypage.html';
                };
            } else {
                // 비로그인 상태 UI (기본)
                loginButton.innerHTML = '<i class="fas fa-user"></i> 로그인';
                loginButton.onclick = function () {
                    window.location.href = 'log-in.html';
                };
            }
        }

        // 비교 목록에 상품 추가
        function addToCompare(productId, productName, productCategory) {
            // 로컬 스토리지에서 현재 비교 목록 가져오기
            let compareList = JSON.parse(localStorage.getItem('compareList')) || [];

            // 이미 목록에 있는지 확인
            if (compareList.some(item => item.id === productId)) {
                showToast(`${productName}은(는) 이미 비교 목록에 있습니다.`);
                return;
            }

            // 최대 3개까지만 허용
            if (compareList.length >= 3) {
                showToast('최대 3개 상품만 비교할 수 있습니다.');
                return;
            }

            // 목록에 추가
            compareList.push({
                id: productId,
                name: productName,
                category: productCategory
            });

            localStorage.setItem('compareList', JSON.stringify(compareList));
            showToast(`${productName}이(가) 비교 목록에 추가되었습니다.`);
        }
    </script>
</body>

</html>