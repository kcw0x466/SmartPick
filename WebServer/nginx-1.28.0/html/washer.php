<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 세탁기</title>
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
            <span>세탁기</span>
        </div>

        <!-- 카테고리 탭 메뉴 -->
        <div class="category-tabs">
            <div class="tab active">전체</div>
            <div class="tab">세탁기</div>
        </div>

        <!-- 필터 옵션 -->
        <div class="filter-options">
            <div class="option active">전체</div>
            <div class="option">50만원 이하</div>
            <div class="option">50-100만원</div>
            <div class="option">100만원 이상</div>
            <div class="option">삼성</div>
            <div class="option">LG</div>
            <div class="option">드럼식</div>
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
                <div class="filter-chip">50만원 이하</div>
                <div class="filter-chip">50-100만원</div>
                <div class="filter-chip">100만원 이상</div>
                <div class="filter-chip">삼성전자</div>
                <div class="filter-chip">LG전자</div>
                <div class="filter-chip">드럼식</div>
                <div class="filter-chip">통돌이</div>
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
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer1"
                        data-product-name="삼성 그랑데 드럼세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer1'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer1', '삼성 그랑데 드럼세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">10%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성 그랑데 AI 드럼세탁기 WF21T6000KV</div>
                    <div class="product-price">890,000원 <span class="original-price">990,000원</span></div>
                    <div class="product-specs">용량 21kg / 버블테크놀로지 / 에너지효율 1등급</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성 그랑데 AI 드럼세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer2"
                        data-product-name="LG 트롬 드럼세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer2'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer2', 'LG 트롬 드럼세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG 트롬 오브제 드럼세탁기 F24EDE</div>
                    <div class="product-price">1,050,000원</div>
                    <div class="product-specs">용량 24kg / 인공지능DD / 스팀 / 터보워시</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG 트롬 오브제 드럼세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer3"
                        data-product-name="삼성 그랑데 통돌이 세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer3'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer3', '삼성 그랑데 통돌이 세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">15%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성 그랑데 통돌이 세탁기 WA19T7G6DWW</div>
                    <div class="product-price">510,000원 <span class="original-price">600,000원</span></div>
                    <div class="product-specs">용량 19kg / 회오리 세탁 / 초강력 워터샷</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성 그랑데 통돌이 세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer4"
                        data-product-name="LG 통돌이 세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer4'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer4', 'LG 통돌이 세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG 통돌이 세탁기 T17VQ1</div>
                    <div class="product-price">490,000원</div>
                    <div class="product-specs">용량 17kg / 터보샷 / 초강력 온수세탁</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG 통돌이 세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer5"
                        data-product-name="위니아 드럼세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer5'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer5', '위니아 드럼세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">20%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">위니아 클라쎄 드럼세탁기 WWD15TDWK</div>
                    <div class="product-price">399,000원 <span class="original-price">499,000원</span></div>
                    <div class="product-specs">용량 15kg / 스팀케어 / 저소음 모터</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('위니아 클라쎄 드럼세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer6"
                        data-product-name="삼성 그랑데 워시타워">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer6'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer6', '삼성 그랑데 워시타워', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성 그랑데 AI 워시타워 WD23T6500KV</div>
                    <div class="product-price">1,980,000원</div>
                    <div class="product-specs">세탁 23kg / 건조 16kg / AI 컨트롤</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성 그랑데 AI 워시타워가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 7 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer7"
                        data-product-name="LG 트롬 워시타워">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer7'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer7', 'LG 트롬 워시타워', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">5%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG 트롬 오브제 워시타워 W16ET</div>
                    <div class="product-price">2,090,000원 <span class="original-price">2,200,000원</span></div>
                    <div class="product-specs">세탁 21kg / 건조 16kg / 스팀케어 / 알러지케어</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG 트롬 오브제 워시타워가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 8 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer8"
                        data-product-name="하이얼 미니 세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer8'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer8', '하이얼 미니 세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">하이얼 미니 세탁기 HWM30A63</div>
                    <div class="product-price">279,000원</div>
                    <div class="product-specs">용량 3kg / 탈수 기능 / 소형 공간용</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('하이얼 미니 세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product 9 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer1"
                        data-product-name="삼성 그랑데 드럼세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer1'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer1', '삼성 그랑데 드럼세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">10%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성 그랑데 AI 드럼세탁기 WF21T6000KV</div>
                    <div class="product-price">890,000원 <span class="original-price">990,000원</span></div>
                    <div class="product-specs">용량 21kg / 버블테크놀로지 / 에너지효율 1등급</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성 그랑데 AI 드럼세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 10 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer2"
                        data-product-name="LG 트롬 드럼세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer2'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer2', 'LG 트롬 드럼세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG 트롬 오브제 드럼세탁기 F24EDE</div>
                    <div class="product-price">1,050,000원</div>
                    <div class="product-specs">용량 24kg / 인공지능DD / 스팀 / 터보워시</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG 트롬 오브제 드럼세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 11 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer3"
                        data-product-name="삼성 그랑데 통돌이 세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer3'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer3', '삼성 그랑데 통돌이 세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">15%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성 그랑데 통돌이 세탁기 WA19T7G6DWW</div>
                    <div class="product-price">510,000원 <span class="original-price">600,000원</span></div>
                    <div class="product-specs">용량 19kg / 회오리 세탁 / 초강력 워터샷</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성 그랑데 통돌이 세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 12 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer4"
                        data-product-name="LG 통돌이 세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer4'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer4', 'LG 통돌이 세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG 통돌이 세탁기 T17VQ1</div>
                    <div class="product-price">490,000원</div>
                    <div class="product-specs">용량 17kg / 터보샷 / 초강력 온수세탁</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG 통돌이 세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 13 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer5"
                        data-product-name="위니아 드럼세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer5'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer5', '위니아 드럼세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">20%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">위니아 클라쎄 드럼세탁기 WWD15TDWK</div>
                    <div class="product-price">399,000원 <span class="original-price">499,000원</span></div>
                    <div class="product-specs">용량 15kg / 스팀케어 / 저소음 모터</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('위니아 클라쎄 드럼세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 14 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer6"
                        data-product-name="삼성 그랑데 워시타워">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer6'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer6', '삼성 그랑데 워시타워', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성 그랑데 AI 워시타워 WD23T6500KV</div>
                    <div class="product-price">1,980,000원</div>
                    <div class="product-specs">세탁 23kg / 건조 16kg / AI 컨트롤</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성 그랑데 AI 워시타워가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 15 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer7"
                        data-product-name="LG 트롬 워시타워">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer7'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer7', 'LG 트롬 워시타워', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">5%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG 트롬 오브제 워시타워 W16ET</div>
                    <div class="product-price">2,090,000원 <span class="original-price">2,200,000원</span></div>
                    <div class="product-specs">세탁 21kg / 건조 16kg / 스팀케어 / 알러지케어</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG 트롬 오브제 워시타워가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 16 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer8"
                        data-product-name="하이얼 미니 세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer8'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer8', '하이얼 미니 세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">하이얼 미니 세탁기 HWM30A63</div>
                    <div class="product-price">279,000원</div>
                    <div class="product-specs">용량 3kg / 탈수 기능 / 소형 공간용</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('하이얼 미니 세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 17 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer9"
                        data-product-name="삼성 무세제 워시타워">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer9'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer9', '삼성 무세제 워시타워', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">12%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성 비스포크 무세제 워시타워 WD25TE8542BE</div>
                    <div class="product-price">2,250,000원 <span class="original-price">2,560,000원</span></div>
                    <div class="product-specs">세탁 25kg / 건조 15kg / 무세제 세탁 / 에코버블</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성 비스포크 무세제 워시타워가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 18 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer10"
                        data-product-name="삼성 그랑데 건조기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer10'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer10', '삼성 그랑데 건조기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성 그랑데 인버터 건조기 DV17T8520BV</div>
                    <div class="product-price">1,290,000원</div>
                    <div class="product-specs">용량 17kg / 히트펌프 / 에너지효율 1등급</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성 그랑데 인버터 건조기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product 19 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer11"
                        data-product-name="LG 트롬 스팀 건조기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer11'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer11', 'LG 트롬 스팀 건조기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">8%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG 트롬 스팀 건조기 RH16VTA</div>
                    <div class="product-price">1,380,000원 <span class="original-price">1,500,000원</span></div>
                    <div class="product-specs">용량 16kg / 인공지능 건조 / 스팀 주름 케어</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG 트롬 스팀 건조기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 20 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer12"
                        data-product-name="밀레 드럼세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer12'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer12', '밀레 드럼세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">밀레 하이엔드 드럼세탁기 WWI860</div>
                    <div class="product-price">3,490,000원</div>
                    <div class="product-specs">용량 9kg / 파워워시 / TwinDos / 독일 프리미엄</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('밀레 하이엔드 드럼세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 21 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer13"
                        data-product-name="LG 세탁기/건조기 콤보">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer13'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer13', 'LG 세탁기/건조기 콤보', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">25%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG 올인원 세탁건조기 F12WD</div>
                    <div class="product-price">749,000원 <span class="original-price">999,000원</span></div>
                    <div class="product-specs">세탁 12kg / 건조 8kg / 스마트씽큐 / 콤팩트 디자인</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG 올인원 세탁건조기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 22 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer14"
                        data-product-name="동부대우 미니 세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer14'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer14', '동부대우 미니 세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">동부대우 미니 통돌이 세탁기 DWF-35MBWC</div>
                    <div class="product-price">198,000원</div>
                    <div class="product-specs">용량 3.5kg / 3가지 코스 / 소형 원룸용</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('동부대우 미니 통돌이 세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 23 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer15"
                        data-product-name="삼성 비스포크 세탁건조기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer15'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer15', '삼성 비스포크 세탁건조기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">18%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성 비스포크 올인원 세탁건조기 WD20T9500KP</div>
                    <div class="product-price">1,640,000원 <span class="original-price">1,999,000원</span></div>
                    <div class="product-specs">세탁 20kg / 건조 12kg / 초절전 / 맞춤형 패널</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성 비스포크 올인원 세탁건조기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product 24 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer11"
                        data-product-name="LG 트롬 스팀 건조기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer11'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer11', 'LG 트롬 스팀 건조기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">8%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG 트롬 스팀 건조기 RH16VTA</div>
                    <div class="product-price">1,380,000원 <span class="original-price">1,500,000원</span></div>
                    <div class="product-specs">용량 16kg / 인공지능 건조 / 스팀 주름 케어</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG 트롬 스팀 건조기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 25 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer12"
                        data-product-name="밀레 드럼세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer12'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer12', '밀레 드럼세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">밀레 하이엔드 드럼세탁기 WWI860</div>
                    <div class="product-price">3,490,000원</div>
                    <div class="product-specs">용량 9kg / 파워워시 / TwinDos / 독일 프리미엄</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('밀레 하이엔드 드럼세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 26 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer13"
                        data-product-name="LG 세탁기/건조기 콤보">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer13'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer13', 'LG 세탁기/건조기 콤보', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">25%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG 올인원 세탁건조기 F12WD</div>
                    <div class="product-price">749,000원 <span class="original-price">999,000원</span></div>
                    <div class="product-specs">세탁 12kg / 건조 8kg / 스마트씽큐 / 콤팩트 디자인</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG 올인원 세탁건조기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 27 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer14"
                        data-product-name="동부대우 미니 세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer14'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer14', '동부대우 미니 세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">동부대우 미니 통돌이 세탁기 DWF-35MBWC</div>
                    <div class="product-price">198,000원</div>
                    <div class="product-specs">용량 3.5kg / 3가지 코스 / 소형 원룸용</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('동부대우 미니 통돌이 세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 28 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer15"
                        data-product-name="삼성 비스포크 세탁건조기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer15'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer15', '삼성 비스포크 세탁건조기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">18%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성 비스포크 올인원 세탁건조기 WD20T9500KP</div>
                    <div class="product-price">1,640,000원 <span class="original-price">1,999,000원</span></div>
                    <div class="product-specs">세탁 20kg / 건조 12kg / 초절전 / 맞춤형 패널</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성 비스포크 올인원 세탁건조기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product 29 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer11"
                        data-product-name="LG 트롬 스팀 건조기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer11'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer11', 'LG 트롬 스팀 건조기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">8%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG 트롬 스팀 건조기 RH16VTA</div>
                    <div class="product-price">1,380,000원 <span class="original-price">1,500,000원</span></div>
                    <div class="product-specs">용량 16kg / 인공지능 건조 / 스팀 주름 케어</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG 트롬 스팀 건조기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 30 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer12"
                        data-product-name="밀레 드럼세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer12'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer12', '밀레 드럼세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">밀레 하이엔드 드럼세탁기 WWI860</div>
                    <div class="product-price">3,490,000원</div>
                    <div class="product-specs">용량 9kg / 파워워시 / TwinDos / 독일 프리미엄</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('밀레 하이엔드 드럼세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 31 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer13"
                        data-product-name="LG 세탁기/건조기 콤보">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer13'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer13', 'LG 세탁기/건조기 콤보', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">25%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG 올인원 세탁건조기 F12WD</div>
                    <div class="product-price">749,000원 <span class="original-price">999,000원</span></div>
                    <div class="product-specs">세탁 12kg / 건조 8kg / 스마트씽큐 / 콤팩트 디자인</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG 올인원 세탁건조기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 32 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer14"
                        data-product-name="동부대우 미니 세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer14'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer14', '동부대우 미니 세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">동부대우 미니 통돌이 세탁기 DWF-35MBWC</div>
                    <div class="product-price">198,000원</div>
                    <div class="product-specs">용량 3.5kg / 3가지 코스 / 소형 원룸용</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('동부대우 미니 통돌이 세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 33 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer15"
                        data-product-name="삼성 비스포크 세탁건조기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer15'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer15', '삼성 비스포크 세탁건조기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">18%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성 비스포크 올인원 세탁건조기 WD20T9500KP</div>
                    <div class="product-price">1,640,000원 <span class="original-price">1,999,000원</span></div>
                    <div class="product-specs">세탁 20kg / 건조 12kg / 초절전 / 맞춤형 패널</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성 비스포크 올인원 세탁건조기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product 34 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer11"
                        data-product-name="LG 트롬 스팀 건조기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer11'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer11', 'LG 트롬 스팀 건조기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">8%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG 트롬 스팀 건조기 RH16VTA</div>
                    <div class="product-price">1,380,000원 <span class="original-price">1,500,000원</span></div>
                    <div class="product-specs">용량 16kg / 인공지능 건조 / 스팀 주름 케어</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG 트롬 스팀 건조기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 35 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer12"
                        data-product-name="밀레 드럼세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer12'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer12', '밀레 드럼세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">밀레 하이엔드 드럼세탁기 WWI860</div>
                    <div class="product-price">3,490,000원</div>
                    <div class="product-specs">용량 9kg / 파워워시 / TwinDos / 독일 프리미엄</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('밀레 하이엔드 드럼세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 36 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer13"
                        data-product-name="LG 세탁기/건조기 콤보">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer13'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer13', 'LG 세탁기/건조기 콤보', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">25%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">LG 올인원 세탁건조기 F12WD</div>
                    <div class="product-price">749,000원 <span class="original-price">999,000원</span></div>
                    <div class="product-specs">세탁 12kg / 건조 8kg / 스마트씽큐 / 콤팩트 디자인</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('LG 올인원 세탁건조기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 37 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer14"
                        data-product-name="동부대우 미니 세탁기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer14'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer14', '동부대우 미니 세탁기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">동부대우 미니 통돌이 세탁기 DWF-35MBWC</div>
                    <div class="product-price">198,000원</div>
                    <div class="product-specs">용량 3.5kg / 3가지 코스 / 소형 원룸용</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('동부대우 미니 통돌이 세탁기가 장바구니에 추가되었습니다.')">
                            <i class="fas fa-shopping-cart"></i> 장바구니 추가
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 38 -->
            <div class="product-card">
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="washer15"
                        data-product-name="삼성 비스포크 세탁건조기">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=washer15'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('washer15', '삼성 비스포크 세탁건조기', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="discount-badge">18%</div>
                <div class="product-image">
                    <img src="/api/placeholder/180/120" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">삼성 비스포크 올인원 세탁건조기 WD20T9500KP</div>
                    <div class="product-price">1,640,000원 <span class="original-price">1,999,000원</span></div>
                    <div class="product-specs">세탁 20kg / 건조 12kg / 초절전 / 맞춤형 패널</div>
                    <div class="quick-actions">
                        <button class="cart-button" onclick="showToast('삼성 비스포크 올인원 세탁건조기가 장바구니에 추가되었습니다.')">
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

            // 검색창 클릭 시 검색 페이지로 이동
            const searchBar = document.querySelector('.search-bar');
            if (searchBar) {
                searchBar.addEventListener('click', function (e) {
                    // 검색창을 클릭하면 search_results.html로 이동
                    window.location.href = 'search_results.html';

                    // 기본 동작(폼 제출) 방지
                    e.preventDefault();
                });
            }

            // 최근 본 상품 영역 클릭 시 최근 본 상품 페이지로 이동
            const recentProducts = document.querySelector('.recent-products');
            if (recentProducts) {
                recentProducts.addEventListener('click', function () {
                    window.location.href = 'recent_products.html';
                });
            }

            // 카테고리 탭 클릭 이벤트 - 필터링 기능 추가
            const categoryTabs = document.querySelectorAll('.tab');
            if (categoryTabs) {
                categoryTabs.forEach(tab => {
                    tab.addEventListener('click', function () {
                        // 모든 탭에서 active 클래스 제거
                        categoryTabs.forEach(t => t.classList.remove('active'));

                        // 클릭한 탭에 active 클래스 추가
                        this.classList.add('active');

                        // 카테고리 이름 가져오기
                        const categoryName = this.textContent.trim();

                        // 카테고리에 따라 상품 필터링
                        filterProductsByCategory(categoryName);

                        // 페이지 초기화 및 업데이트
                        currentPage = 1;
                        updatePaginationButtons();
                        updateProductDisplay();
                    });
                });
            }

            // 필터 옵션 클릭 이벤트 - 필터링 기능 추가
            const filterOptions = document.querySelectorAll('.option:not(.more)');
            if (filterOptions) {
                filterOptions.forEach(option => {
                    option.addEventListener('click', function () {
                        // 모든 옵션에서 active 클래스 제거 (자신 제외)
                        filterOptions.forEach(o => {
                            if (o !== this) o.classList.remove('active');
                        });

                        // 클릭한 옵션에 active 클래스 토글
                        this.classList.toggle('active');

                        // 필터 이름 가져오기
                        const filterName = this.textContent.trim();

                        // 필터에 따라 상품 필터링
                        filterProductsByOption(filterName);

                        // 페이지 초기화 및 업데이트
                        currentPage = 1;
                        updatePaginationButtons();
                        updateProductDisplay();
                    });
                });
            }

            // 필터 칩 클릭 이벤트 - 필터링 기능 추가
            const filterChips = document.querySelectorAll('.filter-chip');
            if (filterChips) {
                filterChips.forEach(chip => {
                    chip.addEventListener('click', function () {
                        // 모든 칩에서 active 클래스 제거
                        filterChips.forEach(c => c.classList.remove('active'));

                        // 클릭한 칩에 active 클래스 추가
                        this.classList.add('active');

                        // 필터 이름 가져오기
                        const filterName = this.textContent.trim();

                        // 필터에 따라 상품 필터링
                        filterProductsByChip(filterName);

                        // 페이지 초기화 및 업데이트
                        currentPage = 1;
                        updatePaginationButtons();
                        updateProductDisplay();
                    });
                });
            }

            // 초기 필터링 상태 설정
            resetFilters();
        });

        // 스크롤 이벤트 처리
        function handleScroll() {
            const header = document.getElementById('header');

            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

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

                // 정렬 옵션에 따라 상품 정렬
                const sortOption = this.textContent.trim();
                sortProducts(sortOption);

                // 페이지 업데이트
                updateProductDisplay();
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

            // 상품 표시 업데이트 - 여기가 중요!
            updateProductDisplay(); // updateProductVisibility() 대신 이것을 호출

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

        // 필터 상태를 저장하는 객체
        let filterState = {
            category: '전체',
            priceRange: '전체',
            brand: '전체',
            feature: '전체'
        };

        // 모든 필터 초기화 함수
        function resetFilters() {
            filterState = {
                category: '전체',
                priceRange: '전체',
                brand: '전체',
                feature: '전체'
            };

            // 모든 상품 카드의 filtered-out 클래스 제거
            document.querySelectorAll('.product-card').forEach(card => {
                card.classList.remove('filtered-out');
            });

            // 필터링된 상품 목록 초기화
            filteredProducts = Array.from(document.querySelectorAll('.product-card'));

            // 메시지 제거
            const noProductsMessage = document.querySelector('.no-products-message');
            if (noProductsMessage) {
                noProductsMessage.remove();
            }

            // 페이지네이션 표시
            const pagination = document.querySelector('.pagination');
            if (pagination) {
                pagination.style.display = 'flex';
            }

            // 페이지네이션 버튼 업데이트
            const totalPages = Math.max(1, Math.ceil(filteredProducts.length / 8));
            updatePaginationButtonsCount(totalPages);

            // 현재 페이지가 전체 페이지 수보다 크면 조정
            if (currentPage > totalPages) {
                currentPage = totalPages;
            }

            // 상품 표시 업데이트
            updateProductDisplay();
        }

        // 카테고리별 상품 필터링 함수
        function filterProductsByCategory(category) {
            if (category === '전체') {
                // '전체' 카테고리 선택 시 카테고리 필터만 초기화
                filterState.category = '전체';
            } else {
                filterState.category = category;
            }

            applyFilters();
        }

        // 필터 옵션별 상품 필터링 함수
        function filterProductsByOption(option) {
            // 필터 옵션에 따라 상태 업데이트
            if (option === '전체') {
                // '전체' 옵션 선택 시 모든 필터 초기화
                resetFilters();
                return;
            } else if (option === '50만원 이하' || option === '50-100만원' || option === '100만원 이상') {
                filterState.priceRange = option;
            } else if (option === '삼성' || option === 'LG') {
                filterState.brand = option;
            } else if (option === '드럼식') {
                filterState.feature = option;
            } else if (option === '인기순') {
                // 정렬 옵션은 필터와 별개로 처리
                sortProducts('인기순');
                return;
            }

            applyFilters();
        }

        // 필터 칩별 상품 필터링 함수
        function filterProductsByChip(chip) {
            // 필터 칩에 따라 상태 업데이트
            if (chip === '전체') {
                // '전체' 칩 선택 시 모든 필터 초기화
                resetFilters();
                return;
            } else if (chip === '50만원 이하' || chip === '50-100만원' || chip === '100만원 이상') {
                filterState.priceRange = chip;
            } else if (chip === '삼성전자') {
                filterState.brand = '삼성';
            } else if (chip === 'LG전자') {
                filterState.brand = 'LG';
            } else if (chip === '드럼식' || chip === '통돌이') {
                filterState.feature = chip;
            }

            applyFilters();
        }

        // 모든 필터를 적용하는 함수
        function applyFilters() {
            const productCards = document.querySelectorAll('.product-card');

            // 모든 상품 카드의 filtered-out 클래스 제거
            productCards.forEach(card => {
                card.classList.remove('filtered-out');
            });

            // 상품이 필터링 조건을 만족하는지 확인하는 함수
            function meetsFilterCriteria(card) {
                const productName = card.querySelector('.product-name').textContent.toLowerCase();
                const productPrice = parseInt(card.querySelector('.product-price').textContent.replace(/[^0-9]/g, ''));
                const productSpecs = card.querySelector('.product-specs').textContent.toLowerCase();

                // 카테고리 필터 확인
                if (filterState.category !== '전체' && !productName.includes(filterState.category.toLowerCase())) {
                    return false;
                }

                // 가격 범위 필터 확인
                if (filterState.priceRange === '50만원 이하' && productPrice > 500000) {
                    return false;
                } else if (filterState.priceRange === '50-100만원' && (productPrice <= 500000 || productPrice > 1000000)) {
                    return false;
                } else if (filterState.priceRange === '100만원 이상' && productPrice <= 1000000) {
                    return false;
                }

                // 브랜드 필터 확인
                if (filterState.brand === '삼성' && !productName.toLowerCase().includes('삼성')) {
                    return false;
                } else if (filterState.brand === 'LG' && !productName.toLowerCase().includes('lg')) {
                    return false;
                }

                // 특징 필터 확인
                if (filterState.feature === '드럼식' && !productName.toLowerCase().includes('드럼')) {
                    return false;
                } else if (filterState.feature === '통돌이' && !productName.toLowerCase().includes('통돌이')) {
                    return false;
                }

                return true;
            }

            // 각 상품에 필터 적용
            productCards.forEach(card => {
                if (!meetsFilterCriteria(card)) {
                    card.classList.add('filtered-out');
                }
            });

            // 필터링된 상품 목록 업데이트
            updateFilteredProducts();
        }

        // 필터링된 상품 목록 업데이트
        function updateFilteredProducts() {
            // 필터링된 결과에 따라 상품 배열 업데이트
            filteredProducts = Array.from(document.querySelectorAll('.product-card:not(.filtered-out)'));

            // 필터링 결과 처리
            handleFilterResults();
        }

        // 필터링 결과 처리
        function handleFilterResults() {
            const productGrid = document.querySelector('.product-grid');

            // 필터링 결과가 없는 경우 메시지 표시
            if (filteredProducts.length === 0) {
                // 기존 메시지 제거
                const existingMessage = document.querySelector('.no-products-message');
                if (existingMessage) {
                    existingMessage.remove();
                }

                // 새 메시지 추가
                const message = document.createElement('div');
                message.className = 'no-products-message';
                message.textContent = '선택한 필터에 맞는 상품이 없습니다.';
                message.style.gridColumn = '1 / -1';
                message.style.textAlign = 'center';
                message.style.padding = '50px 0';
                message.style.fontSize = '16px';
                message.style.color = 'var(--gray-dark)';

                productGrid.appendChild(message);

                // 페이지네이션 숨기기
                const pagination = document.querySelector('.pagination');
                if (pagination) {
                    pagination.style.display = 'none';
                }
            } else {
                // 메시지 제거
                const noProductsMessage = document.querySelector('.no-products-message');
                if (noProductsMessage) {
                    noProductsMessage.remove();
                }

                // 페이지네이션 표시
                const pagination = document.querySelector('.pagination');
                if (pagination) {
                    pagination.style.display = 'flex';
                }

                // 페이지네이션 버튼 업데이트
                const totalPages = Math.max(1, Math.ceil(filteredProducts.length / 8));
                updatePaginationButtonsCount(totalPages);

                // 현재 페이지가 전체 페이지 수보다 크면 조정
                if (currentPage > totalPages) {
                    currentPage = totalPages;
                    updatePaginationButtons();
                }
            }

            // 상품 표시 업데이트
            updateProductDisplay();
        }

        // 페이지네이션 버튼 개수 업데이트
        function updatePaginationButtonsCount(totalPages) {
            const pagination = document.querySelector('.pagination');
            if (!pagination) return;

            // 기존 페이지 버튼 제거 (화살표 버튼 제외)
            const pageButtons = pagination.querySelectorAll('.page-button:not(.arrow)');
            pageButtons.forEach(button => button.remove());

            // 화살표 버튼 가져오기
            const prevButton = pagination.querySelector('.page-button.arrow:first-child');
            const nextButton = pagination.querySelector('.page-button.arrow:last-child');

            // 페이지 버튼 생성 및 삽입
            for (let i = 1; i <= totalPages; i++) {
                const pageButton = document.createElement('button');
                pageButton.className = 'page-button' + (i === currentPage ? ' active' : '');
                pageButton.textContent = i;
                pageButton.addEventListener('click', function () {
                    changePage(i);
                });

                // 다음 버튼 앞에 삽입
                pagination.insertBefore(pageButton, nextButton);
            }
        }

        // 정렬 함수
        function sortProducts(sortOption) {
            const productGrid = document.querySelector('.product-grid');
            const productCards = Array.from(document.querySelectorAll('.product-card:not(.filtered-out)'));

            if (productCards.length === 0) return;

            // 정렬 로직
            productCards.sort((a, b) => {
                const priceA = parseInt(a.querySelector('.product-price').textContent.replace(/[^0-9]/g, ''));
                const priceB = parseInt(b.querySelector('.product-price').textContent.replace(/[^0-9]/g, ''));

                if (sortOption === '가격 낮은순') {
                    return priceA - priceB;
                } else if (sortOption === '가격 높은순') {
                    return priceB - priceA;
                } else if (sortOption === '인기순') {
                    // 인기순은 기본 정렬로 가정 (제품 ID 순)
                    const idA = a.querySelector('.wishlist-toggle').getAttribute('data-product-id');
                    const idB = b.querySelector('.wishlist-toggle').getAttribute('data-product-id');
                    return idA.localeCompare(idB);
                } else if (sortOption === '최신순') {
                    // 최신순은 역순으로 가정
                    const idA = a.querySelector('.wishlist-toggle').getAttribute('data-product-id');
                    const idB = b.querySelector('.wishlist-toggle').getAttribute('data-product-id');
                    return idB.localeCompare(idA);
                } else if (sortOption === '리뷰 많은순') {
                    // 랜덤 정렬 (리뷰 정보가 없으므로)
                    return Math.random() - 0.5;
                }

                return 0;
            });

            // 정렬된 카드를 그리드에 다시 추가
            productCards.forEach(card => {
                productGrid.appendChild(card);
            });

            // 필터링된 상품 배열 업데이트
            filteredProducts = productCards;
        }

        // 필터링된 상품 목록
        let filteredProducts = [];

        function updateProductDisplay() {
            const productCards = document.querySelectorAll('.product-card');
            const productGrid = document.querySelector('.product-grid');

            // 필터링 결과가 없는 경우는 이미 처리됨
            if (document.querySelector('.no-products-message')) {
                return;
            }

            // 모든 상품 카드 숨기기
            productCards.forEach((card) => {
                card.style.display = 'none';
            });

            // 현재 페이지에 해당하는 필터링된 상품만 표시하기
            const startIndex = (currentPage - 1) * 8;
            const endIndex = Math.min(startIndex + 8, filteredProducts.length);

            for (let i = startIndex; i < endIndex; i++) {
                filteredProducts[i].style.display = 'block';
            }
        }

        // CSS 스타일 추가
        const style = document.createElement('style');
        style.textContent = `
.filtered-out {
    display: none !important;
}

.no-products-message {
    grid-column: 1 / -1;
    text-align: center;
    padding: 50px 0;
    font-size: 16px;
    color: var(--gray-dark);
}
`;
        document.head.appendChild(style);

        // 페이지 로드 시 필터링된 상품 목록 초기화
        document.addEventListener('DOMContentLoaded', function () {
            filteredProducts = Array.from(document.querySelectorAll('.product-card'));
        });
    </script>
</body>

</html>