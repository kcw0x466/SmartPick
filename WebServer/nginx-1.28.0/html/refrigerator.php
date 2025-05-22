<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 냉장고</title>
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
            color: var(--gray-dark);
        }

        .breadcrumb a {
            color: var(--gray-dark);
            text-decoration: none;
        }

        .breadcrumb a:hover {
            color: var(--primary);
        }

        .breadcrumb-separator {
            margin: 0 8px;
        }

        /* 카테고리 탭 메뉴 */
        .category-tabs {
            display: flex;
            border-bottom: 1px solid var(--primary);
            margin-bottom: 15px;
        }

        .tab {
            padding: 12px 25px;
            cursor: pointer;
            font-size: 15px;
            transition: all 0.2s;
            position: relative;
        }

        .tab.active {
            color: var(--primary);
            font-weight: 500;
        }

        .tab.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--primary);
        }

        /* 필터 옵션 */
        .filter-options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding: 15px 0;
            margin-bottom: 15px;
            align-items: center;
        }

        .option {
            padding: 8px 15px;
            background-color: var(--gray-light);
            border-radius: 20px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .option.active {
            background-color: var(--primary-light);
            color: var(--primary);
            font-weight: 500;
        }

        .option:hover {
            background-color: var(--gray);
        }

        .option.more {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-left: auto;
        }

        /* Filter and Sort Section */
        .filter-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid var(--gray);
            background-color: var(--white);
            position: sticky;
            top: 66px;
            z-index: 90;
        }

        .filter-chips {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .filter-chip {
            padding: 6px 15px;
            background-color: var(--white);
            border: 1px solid var(--gray);
            border-radius: 100px;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .filter-chip:hover,
        .filter-chip.active {
            background-color: var(--primary-light);
            border-color: var(--primary);
            color: var(--primary-dark);
        }

        .sort-dropdown {
            display: flex;
            align-items: center;
            gap: 5px;
            position: relative;
        }

        .sort-button {
            background: none;
            border: none;
            font-size: 13px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .sort-menu {
            position: absolute;
            top: 100%;
            right: 0;
            background-color: var(--white);
            border: 1px solid var(--gray);
            border-radius: 8px;
            box-shadow: var(--shadow);
            width: 150px;
            padding: 10px 0;
            display: none;
        }

        .sort-menu.show {
            display: block;
        }

        .sort-option {
            padding: 8px 15px;
            font-size: 13px;
            cursor: pointer;
        }

        .sort-option:hover {
            background-color: var(--gray-light);
        }

        .sort-option.active {
            color: var(--primary);
            font-weight: 500;
        }

        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .product-card {
            background-color: var(--white);
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        /* 상품 빠른 액션 버튼 */
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
            cursor: pointer;
            transition: var(--transition);
            border: none;
            color: var(--text);
            font-size: 16px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .quick-action-btn:hover,
        .quick-action-btn.active {
            background-color: var(--primary);
            color: var(--white);
            transform: scale(1.1);
        }

        .discount-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: var(--primary);
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }

        .product-image {
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: var(--gray-light);
        }

        .product-image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: all 0.3s;
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 15px;
        }

        .product-name {
            font-size: 15px;
            margin-bottom: 8px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .product-price {
            font-size: 16px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 5px;
        }

        .original-price {
            font-size: 13px;
            color: var(--gray-dark);
            text-decoration: line-through;
            margin-left: 5px;
            font-weight: normal;
        }

        .product-specs {
            font-size: 13px;
            color: var(--gray-dark);
            margin-top: 10px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .quick-actions {
            display: flex;
            margin-top: 15px;
            height: 36px;
            overflow: hidden;
            transition: all 0.3s;
            opacity: 0;
        }

        .product-card:hover .quick-actions {
            opacity: 1;
        }

        .cart-button {
            flex: 1;
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 8px;
            border-radius: 4px;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .cart-button:hover {
            background-color: var(--primary-dark);
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 40px 0;
        }

        .page-button {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 5px;
            border-radius: 50%;
            border: none;
            background-color: var(--white);
            color: var(--text);
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .page-button:hover {
            background-color: var(--gray-light);
        }

        .page-button.active {
            background-color: var(--primary);
            color: white;
        }

        .page-button.arrow {
            color: var(--gray-dark);
        }

        /* Toast notification */
        .toast {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%) translateY(100px);
            background-color: rgba(51, 51, 51, 0.9);
            color: white;
            padding: 12px 25px;
            border-radius: 100px;
            font-size: 14px;
            z-index: 1000;
            opacity: 0;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .toast.show {
            transform: translateX(-50%) translateY(0);
            opacity: 1;
        }

        /* Recent Products Sidebar */
        .recent-products {
            position: fixed;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: var(--shadow);
            padding: 10px;
            width: 70px;
            z-index: 80;
        }

        .recent-title {
            font-size: 12px;
            text-align: center;
            padding-bottom: 10px;
            color: var(--gray-dark);
            border-bottom: 1px solid var(--gray);
        }

        .recent-items {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 10px;
        }

        .recent-item {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            overflow: hidden;
            background-color: var(--gray-light);
        }

        .recent-item img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .product-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .recent-products {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .search-container {
                display: none;
            }

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .container {
                padding: 0 10px;
            }

            .brand span {
                display: none;
            }

            .filter-chips {
                overflow-x: auto;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
                padding-bottom: 5px;
            }

            .sort-dropdown {
                flex-shrink: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Toast notification -->
    <div class="toast" id="toast">
        <i class="fas fa-check-circle"></i>
        <span id="toast-message">장바구니에 추가되었습니다.</span>
    </div>

    <!-- Header section - Sticky -->
    <header id="header">
        <a href="mainpage.html" class="logo">
            <div class="logo">
                <div class="logo-box">스마<br>트픽</div>
                <span>스마트픽</span>
            </div>
        </a>
        <div class="search-container">
            <form id="searchForm" action="search_results.html" method="get">
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
            <span>냉장고</span>
        </div>

        <!-- 카테고리 탭 메뉴 -->
        <div class="category-tabs">
            <div class="tab active">전체</div>
            <div class="tab">냉장고</div>
        </div>

        <!-- 필터 옵션 -->
        <div class="filter-options">
            <div class="option active">전체</div>
            <div class="option">100만원 이하</div>
            <div class="option">100-200만원</div>
            <div class="option">200만원 이상</div>
            <div class="option">삼성</div>
            <div class="option">LG</div>
            <div class="option">대용량</div>
            <div class="option">인기순</div>
            <div class="option more">
                인기순 <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Filter and Sort Section -->
        <div class="filter-section">
            <div class="filter-chips">
                <div class="filter-chip active">전체</div>
                <div class="filter-chip">100만원 이하</div>
                <div class="filter-chip">100-200만원</div>
                <div class="filter-chip">200만원 이상</div>
                <div class="filter-chip">삼성전자</div>
                <div class="filter-chip">LG전자</div>
                <div class="filter-chip">대용량</div>
                <div class="filter-chip">에너지효율</div>
            </div>

            <div class="sort-dropdown">
                <button class="sort-button" id="sortButton">
                    인기순 <i class="fas fa-chevron-down"></i>
                </button>
                <div class="sort-menu" id="sortMenu">
                    <div class="sort-option active">인기순</div>
                    <div class="sort-option">최신순</div>
                    <div class="sort-option">가격 낮은순</div>
                    <div class="sort-option">가격 높은순</div>
                    <div class="sort-option">리뷰 많은순</div>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="product-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge1"
                        data-product-name="삼성전자 비스포크 양문형 냉장고">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge1'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge1', '삼성전자 비스포크 양문형 냉장고', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">15%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성전자 비스포크 양문형 냉장고 RF85A92B1AP</div>
                    <div class="product-price">1,750,000원 <span class="original-price">2,050,000원</span></div>
                    <div class="product-specs">용량 875L / 에너지효율 1등급 / 정수기 / 얼음디스펜서</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성전자 비스포크 양문형 냉장고가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge2"
                        data-product-name="LG전자 오브제컬렉션 양문형 냉장고">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge2'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge2', 'LG전자 오브제컬렉션 양문형 냉장고', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG전자 오브제컬렉션 양문형 냉장고 M870SGS451</div>
                    <div class="product-price">1,890,000원</div>
                    <div class="product-specs">용량 870L / 에너지효율 1등급 / 디스펜서 / 매직스페이스</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG전자 오브제컬렉션 양문형 냉장고가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge3"
                        data-product-name="삼성전자 비스포크 4도어 냉장고">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge3'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge3', '삼성전자 비스포크 4도어 냉장고', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">10%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성전자 비스포크 4도어 냉장고 RF60A91C3AP</div>
                    <div class="product-price">1,450,000원 <span class="original-price">1,600,000원</span></div>
                    <div class="product-specs">용량 602L / 에너지효율 1등급 / 김치보관모드 / 변온실</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성전자 비스포크 4도어 냉장고가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge4"
                        data-product-name="LG전자 디오스 양문형 냉장고">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge4'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge4', 'LG전자 디오스 양문형 냉장고', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG전자 디오스 양문형 냉장고 S831S32</div>
                    <div class="product-price">1,250,000원</div>
                    <div class="product-specs">용량 830L / 에너지효율 2등급 / 도어쿨링 / 스마트진단</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG전자 디오스 양문형 냉장고가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge5"
                        data-product-name="하이얼 프렌치도어 4도어 냉장고">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge5'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge5', '하이얼 프렌치도어 4도어 냉장고', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">20%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">하이얼 프렌치도어 4도어 냉장고 HRF-SN418MFW</div>
                    <div class="product-price">920,000원 <span class="original-price">1,150,000원</span></div>
                    <div class="product-specs">용량 418L / 에너지효율 2등급 / 메탈쿨링 / 3중 냉각</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('하이얼 프렌치도어 4도어 냉장고가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge6"
                        data-product-name="삼성전자 비스포크 김치냉장고">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge6'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge6', '삼성전자 비스포크 김치냉장고', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성전자 비스포크 김치냉장고 RQ58T9483AP</div>
                    <div class="product-price">1,790,000원</div>
                    <div class="product-specs">용량 584L / 에너지효율 1등급 / 8단계 맞춤숙성</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성전자 비스포크 김치냉장고가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 7 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge7"
                        data-product-name="LG전자 오브제컬렉션 컨버터블 냉장고">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge7'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge7', 'LG전자 오브제컬렉션 컨버터블 냉장고', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">8%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG전자 오브제컬렉션 컨버터블 냉장고 M620G</div>
                    <div class="product-price">2,100,000원 <span class="original-price">2,280,000원</span></div>
                    <div class="product-specs">용량 613L / 에너지효율 1등급 / 컨버터블 존 / 무드 라이팅</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG전자 오브제컬렉션 컨버터블 냉장고가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 8 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge8"
                        data-product-name="위니아딤채 클라쎄 냉장고">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge8'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge8', '위니아딤채 클라쎄 냉장고', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">위니아딤채 클라쎄 냉장고 WKR53DSJPR</div>
                    <div class="product-price">980,000원</div>
                    <div class="product-specs">용량 530L / 에너지효율 2등급 / 3룸 독립냉각 / 스탠드형</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('위니아딤채 클라쎄 냉장고가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- 9번째 제품부터 추가된 제품들 -->
            <!-- Product 9 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge9"
                        data-product-name="삼성전자 비스포크 1도어 냉장고">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge9'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge9', '삼성전자 비스포크 1도어 냉장고', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">12%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성전자 비스포크 1도어 냉장고 RZ32T7655AP</div>
                    <div class="product-price">850,000원 <span class="original-price">970,000원</span></div>
                    <div class="product-specs">용량 324L / 에너지효율 1등급 / 변온모드 / 커스텀 패널</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성전자 비스포크 1도어 냉장고가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 10 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge10"
                        data-product-name="LG전자 디오스 오브제 김치냉장고">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge10'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge10', 'LG전자 디오스 오브제 김치냉장고', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG전자 디오스 오브제 김치냉장고 Z451AAA151</div>
                    <div class="product-price">1,590,000원</div>
                    <div class="product-specs">용량 454L / 에너지효율 1등급 / 칸별온도조절 / 변색방지</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG전자 디오스 오브제 김치냉장고가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 11 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge11"
                        data-product-name="삼성전자 소형 냉장고">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge11'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge11', '삼성전자 소형 냉장고', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">15%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성전자 소형 일반냉장고 RT25NARAHS8</div>
                    <div class="product-price">490,000원 <span class="original-price">580,000원</span></div>
                    <div class="product-specs">용량 255L / 에너지효율 2등급 / 일반냉장고 / 소형</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성전자 소형 일반냉장고가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 12 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge12"
                        data-product-name="하이메이드 미니 냉장고">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge12'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge12', '하이메이드 미니 냉장고', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">하이메이드 미니 냉장고 HMR-92H</div>
                    <div class="product-price">185,000원</div>
                    <div class="product-specs">용량 92L / 에너지효율 3등급 / 미니바 / 1인가구용</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('하이메이드 미니 냉장고가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 13 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge13"
                        data-product-name="위니아딤채 스탠드형 김치냉장고">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge13'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge13', '위니아딤채 스탠드형 김치냉장고', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">18%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">위니아딤채 스탠드형 김치냉장고 GDT33DRMGT</div>
                    <div class="product-price">1,280,000원 <span class="original-price">1,560,000원</span></div>
                    <div class="product-specs">용량 330L / 에너지효율 1등급 / 항균탈취 / 발효과학</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('위니아딤채 스탠드형 김치냉장고가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 14 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge14"
                        data-product-name="LG전자 얼음정수기 냉장고">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge14'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge14', 'LG전자 얼음정수기 냉장고', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG전자 디오스 얼음정수기 냉장고 J811NS35</div>
                    <div class="product-price">1,450,000원</div>
                    <div class="product-specs">용량 806L / 에너지효율 1등급 / 정수기능 / 얼음디스펜서</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG전자 디오스 얼음정수기 냉장고가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 15 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge15"
                        data-product-name="삼성전자 패밀리허브 냉장고">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge15'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge15', '삼성전자 패밀리허브 냉장고', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">20%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성전자 패밀리허브 냉장고 RF85T91G1AP</div>
                    <div class="product-price">2,480,000원 <span class="original-price">3,100,000원</span></div>
                    <div class="product-specs">용량 850L / 인공지능 / 스마트허브 / 가족간 메시지 기능</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성전자 패밀리허브 냉장고가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 16 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="fridge16"
                        data-product-name="LG전자 와인셀러">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=fridge16'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('fridge16', 'LG전자 와인셀러', 'fridge')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG전자 오브제 와인셀러 W087B</div>
                    <div class="product-price">990,000원</div>
                    <div class="product-specs">와인 65병 수납 / 정온유지 / 쓰리존 / 진동방지</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG전자 오브제 와인셀러가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
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
            <button class="page-button arrow"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>

    <!-- Recent Products Sidebar -->
    <div class="recent-products">
        <div class="recent-title">최근 본 상품</div>
        <div class="recent-items">
            <div class="recent-item">
                <img src="/api/placeholder/50/50" alt="Recent product">
            </div>
            <div class="recent-item">
                <img src="/api/placeholder/50/50" alt="Recent product">
            </div>
            <div class="recent-item">
                <img src="/api/placeholder/50/50" alt="Recent product">
            </div>
        </div>
    </div>

    <script>
        // 필터 상태를 저장하는 객체
        let filterState = {
            category: '전체',
            priceRange: '전체',
            brand: '전체',
            feature: '전체'
        };

        // 필터링된 상품 목록
        let filteredProducts = [];
        // 테마 토글 기능을 즉시 수행하는 코드
        document.addEventListener('DOMContentLoaded', function () {
            // 기존의 페이지 초기화 코드 유지
            currentPage = 1;
            updatePaginationButtons();
            updateProductDisplay();

            // 테마 토글 버튼에 이벤트 리스너 직접 추가
            const themeToggle = document.getElementById('themeToggle');
            if (themeToggle) {
                themeToggle.addEventListener('click', function () {
                    // 현재 테마 확인
                    const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
                    // 새 테마 설정
                    const newTheme = currentTheme === 'light' ? 'dark' : 'light';

                    // HTML 요소에 테마 속성 적용
                    document.documentElement.setAttribute('data-theme', newTheme);
                    // 로컬 스토리지에 테마 저장
                    localStorage.setItem('theme', newTheme);

                    // 아이콘 변경
                    const themeIcon = themeToggle.querySelector('i');
                    if (themeIcon) {
                        if (newTheme === 'dark') {
                            themeIcon.classList.remove('fa-sun');
                            themeIcon.classList.add('fa-moon');
                        } else {
                            themeIcon.classList.remove('fa-moon');
                            themeIcon.classList.add('fa-sun');
                        }
                    }

                    console.log('테마 변경:', newTheme); // 콘솔 로그로 확인
                });
            } else {
                console.error('테마 토글 버튼을 찾을 수 없습니다.');
            }

            // 저장된 테마 적용
            const savedTheme = localStorage.getItem('theme') || 'light';
            if (savedTheme) {
                document.documentElement.setAttribute('data-theme', savedTheme);

                const themeIcon = themeToggle?.querySelector('i');
                if (themeIcon && savedTheme === 'dark') {
                    themeIcon.classList.remove('fa-sun');
                    themeIcon.classList.add('fa-moon');
                }
            }
            const searchInput = document.querySelector('.search-bar');
            if (searchInput) {
                // 커서 모양 변경(optional)
                searchInput.style.cursor = 'pointer';
                searchInput.addEventListener('click', () => {
                    window.location.href = 'search_results.html';
                });
            }

            document.querySelectorAll('.recent-item').forEach(item => {
                item.style.cursor = 'pointer';
                item.addEventListener('click', () => {
                    window.location.href = 'recent_products.html';
                });
            });

            // 필터 옵션 클릭 이벤트 - 더 간단한 필터링 구현
            document.querySelectorAll('.option, .filter-chip').forEach(element => {
                element.addEventListener('click', function () {
                    // 선택한 필터 텍스트 가져오기
                    const filterText = this.textContent.trim();
                    console.log('선택한 필터:', filterText);

                    // 모든 상품 가져오기
                    const allProducts = document.querySelectorAll('.product-card');

                    // 필터에 따라 상품 표시/숨김 처리
                    allProducts.forEach(product => {
                        const productName = product.querySelector('.product-name').textContent.toLowerCase();
                        const productPrice = parseInt(product.querySelector('.product-price').textContent.replace(/[^0-9]/g, ''));
                        const productSpecs = product.querySelector('.product-specs').textContent.toLowerCase();

                        // 기본적으로 모든 상품 표시
                        product.style.display = 'block';

                        // 필터에 따른 조건 적용
                        if (filterText !== '전체') {
                            if (filterText === '100만원 이하' && productPrice > 1000000) {
                                product.style.display = 'none';
                            }
                            else if (filterText === '100-200만원' && (productPrice <= 1000000 || productPrice > 2000000)) {
                                product.style.display = 'none';
                            }
                            else if (filterText === '200만원 이상' && productPrice <= 2000000) {
                                product.style.display = 'none';
                            }
                            else if (filterText === '삼성전자' && !productName.toLowerCase().includes('삼성')) {
                                product.style.display = 'none';
                            }
                            else if (filterText === 'LG전자' && !productName.toLowerCase().includes('lg')) {
                                product.style.display = 'none';
                            }
                            else if (filterText === '대용량' && !productSpecs.toLowerCase().includes('용량')) {
                                product.style.display = 'none';
                            }
                            else if (filterText === '에너지효율' && !productSpecs.toLowerCase().includes('에너지효율')) {
                                product.style.display = 'none';
                            }
                        }
                    });

                    // 활성화된 필터 표시 업데이트
                    if (this.classList.contains('option')) {
                        // 옵션 필터의 경우
                        document.querySelectorAll('.option').forEach(opt => {
                            opt.classList.remove('active');
                        });
                        this.classList.add('active');
                    } else {
                        // 칩 필터의 경우
                        document.querySelectorAll('.filter-chip').forEach(chip => {
                            chip.classList.remove('active');
                        });
                        this.classList.add('active');
                    }

                    // 페이지네이션 업데이트
                    currentPage = 1;
                    updatePaginationButtons();

                    // 상품을 다시 업데이트
                    updateProductDisplayFiltered();
                });
            });

            // 초기 필터링된 상품 목록 설정
            filteredProducts = Array.from(document.querySelectorAll('.product-card'));
        });

        // 필터링된 상품만 표시하는 업데이트 함수
        function updateProductDisplayFiltered() {
            const productCards = document.querySelectorAll('.product-card');
            const productGrid = document.querySelector('.product-grid');

            // 필터링된 상품만 선택
            const visibleProducts = Array.from(productCards).filter(card =>
                card.style.display !== 'none'
            );

            // 다시 모든 상품 숨기기
            productCards.forEach(card => {
                card.style.display = 'none';
            });

            // 현재 페이지에 해당하는 상품만 표시
            const startIndex = (currentPage - 1) * 8;
            const endIndex = Math.min(startIndex + 8, visibleProducts.length);

            for (let i = startIndex; i < endIndex; i++) {
                visibleProducts[i].style.display = 'block';
            }

            // 검사: 표시된 상품이 없으면 메시지 추가
            if (visibleProducts.length === 0) {
                const existingMessage = document.querySelector('.no-products-message');
                if (!existingMessage) {
                    const message = document.createElement('div');
                    message.className = 'no-products-message';
                    message.textContent = '선택한 필터에 맞는 상품이 없습니다.';
                    message.style.gridColumn = '1 / -1';
                    message.style.textAlign = 'center';
                    message.style.padding = '50px 0';
                    message.style.fontSize = '16px';
                    message.style.color = 'var(--gray-dark)';

                    productGrid.appendChild(message);
                }
            } else {
                const existingMessage = document.querySelector('.no-products-message');
                if (existingMessage) {
                    existingMessage.remove();
                }
            }
        }

        // 스크롤 이벤트 처리
        function handleScroll() {
            const header = document.getElementById('header');

            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        // 카테고리 탭 클릭 이벤트
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function () {
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                // 필터링 로직 추가 가능
            });
        });

        document.getElementById('sortButton').addEventListener('click', function () {
            document.getElementById('sortMenu').classList.toggle('show');
        });

        // Hide dropdown when clicking outside
        window.addEventListener('click', function (event) {
            if (!event.target.matches('.sort-button') && !event.target.matches('.sort-button *')) {
                const dropdown = document.getElementById('sortMenu');
                if (dropdown.classList.contains('show')) {
                    dropdown.classList.remove('show');
                }
            }
        });

        // Sort options
        document.querySelectorAll('.sort-option').forEach(option => {
            option.addEventListener('click', function () {
                document.querySelectorAll('.sort-option').forEach(opt => {
                    opt.classList.remove('active');
                });
                this.classList.add('active');
                document.getElementById('sortButton').innerHTML = this.innerHTML + ' <i class="fas fa-chevron-down"></i>';
                document.getElementById('sortMenu').classList.remove('show');

                // Here you would implement actual sorting logic
            });
        });

        // 위시리스트 토글 버튼
        document.querySelectorAll('.wishlist-toggle').forEach(button => {
            button.addEventListener('click', function () {
                this.classList.toggle('active');
                if (this.classList.contains('active')) {
                    this.innerHTML = '<i class="fas fa-heart"></i>';
                    showToast(`${this.dataset.productName}이(가) 위시리스트에 추가되었습니다.`);
                } else {
                    this.innerHTML = '<i class="far fa-heart"></i>';
                    showToast(`${this.dataset.productName}이(가) 위시리스트에서 제거되었습니다.`);
                }
            });
        });

        // 상품 비교하기 기능
        function addToCompare(productId, productName, category) {
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
                category: category
            });

            localStorage.setItem('compareList', JSON.stringify(compareList));
            showToast(`${productName}이(가) 비교 목록에 추가되었습니다.`);
        }

        // Toast notification
        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toast-message');

            toastMessage.textContent = message;
            toast.classList.add('show');

            setTimeout(function () {
                toast.classList.remove('show');
            }, 3000);
        }

        // 페이지 변경 함수
        function changePage(page) {
            let newPage = currentPage;

            // 이전 또는 다음 버튼
            if (page === 'prev') {
                newPage = Math.max(1, currentPage - 1);
            } else if (page === 'next') {
                newPage = Math.min(9, currentPage + 1); // 최대 9페이지
            } else {
                newPage = page;
            }

            // 현재 페이지와 같으면 아무것도 하지 않음
            if (newPage === currentPage) {
                return;
            }

            // 페이지 변경
            currentPage = newPage;

            // 페이지네이션 버튼 업데이트
            updatePaginationButtons();

            // 필터 적용 상태인지 확인하고 적절한 업데이트 함수 호출
            const activeFilter = document.querySelector('.filter-chip.active, .option.active');
            if (activeFilter && activeFilter.textContent.trim() !== '전체') {
                updateProductDisplayFiltered();
            } else {
                updateProductDisplay();
            }

            // 스크롤 위치 조정
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // 페이지네이션 버튼에 이벤트 리스너 추가
        document.querySelectorAll('.page-button').forEach(button => {
            button.addEventListener('click', function () {
                if (this.classList.contains('arrow')) {
                    // 화살표 버튼인 경우
                    if (this.querySelector('i').classList.contains('fa-chevron-left')) {
                        changePage('prev');
                    } else {
                        changePage('next');
                    }
                } else {
                    // 숫자 버튼인 경우
                    changePage(parseInt(this.textContent));
                }
            });
        });

        // 현재 페이지 변수 초기화
        let currentPage = 1;

        // 페이지네이션 버튼 업데이트 함수
        function updatePaginationButtons() {
            document.querySelectorAll('.page-button').forEach(button => {
                if (!button.classList.contains('arrow')) {
                    button.classList.remove('active');
                    if (parseInt(button.textContent) === currentPage) {
                        button.classList.add('active');
                    }
                }
            });
        }

        // 추가로 필요한 빈 객체 초기화
        const pagesData = {};

        // 상품 표시 업데이트 함수
        function updateProductDisplay() {
            const productCards = document.querySelectorAll('.product-card');
            const productGrid = document.querySelector('.product-grid');

            // 그리드 표시 설정 (항상 표시)
            productGrid.style.display = 'grid';

            // 모든 상품 카드 숨기기
            productCards.forEach((card) => {
                card.style.display = 'none';
            });

            // 현재 페이지에 해당하는 8개의 상품만 표시하기
            const startIndex = (currentPage - 1) * 8;
            const endIndex = startIndex + 8;

            for (let i = startIndex; i < endIndex && i < productCards.length; i++) {
                productCards[i].style.display = 'block';
            }
        }

        // CSS 스타일 추가
        const style = document.createElement('style');
        style.textContent = `
.no-products-message {
    grid-column: 1 / -1;
    text-align: center;
    padding: 50px 0;
    font-size: 16px;
    color: var(--gray-dark);
}
`;
        document.head.appendChild(style);

        // 윈도우 스크롤 이벤트 추가
        window.addEventListener('scroll', handleScroll);
    </script>
</body>

</html>