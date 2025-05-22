<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 인기 상품 모음</title>
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
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
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
            overflow: hidden;
            position: relative;
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

        /* 카테고리 태그 */
        .category-tag {
            position: absolute;
            top: 15px;
            left: 15px;
            padding: 4px 10px;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            font-size: 12px;
            border-radius: 4px;
            z-index: 10;
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
            <span>인기 상품 모음</span>
        </div>

        <!-- 페이지 타이틀 -->
        <div class="page-title-container">
            <div>
                <h1 class="page-title">가장 인기있는 상품</h1>
                <p class="page-description">스마트픽에서 가장 인기 있는 상품들을 모아서 보여드립니다.</p>
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
                <span class="filter-label">가격대</span>
                <div class="filter-chip active">전체</div>
                <div class="filter-chip">50만원 이하</div>
                <div class="filter-chip">50-100만원</div>
                <div class="filter-chip">100-200만원</div>
                <div class="filter-chip">200만원 이상</div>
            </div>

            <div class="filter-row">
                <span class="filter-label">브랜드</span>
                <div class="filter-chip active">전체</div>
                <div class="filter-chip">삼성</div>
                <div class="filter-chip">LG</div>
                <div class="filter-chip">애플</div>
                <div class="filter-chip">소니</div>
                <div class="filter-chip">에이수스</div>
            </div>

            <div class="sort-dropdown">
                <span class="sort-label">정렬</span>
                <select class="sort-select" id="sortSelect">
                    <option value="popularity">인기순</option>
                    <option value="latest">최신순</option>
                    <option value="lowPrice">가격 낮은순</option>
                    <option value="highPrice">가격 높은순</option>
                    <option value="reviews">리뷰 많은순</option>
                    <option value="rating">평점 높은순</option>
                </select>
            </div>
        </div>

        <!-- 상품 그리드 -->
        <div class="product-grid">
            <!-- 제품 1 -->
            <div class="product-card">
                <div class="category-tag">TV</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="product1"
                        data-product-name="LG 올레드 evo C3 OLED TV" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=product1'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('product1', 'LG 올레드 evo C3 OLED TV', 'tv')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="LG 올레드 evo C3 OLED TV">
                </div>
                <div class="product-details">
                    <h3 class="product-title">LG 올레드 evo C3 OLED TV 65인치</h3>
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
                        <span class="review-count">(178)</span>
                    </div>
                    <div class="product-price">
                        <span>2,350,000원</span>
                        <span class="original-price">2,750,000원</span>
                        <span class="discount-badge">15%</span>
                    </div>
                    <!-- 재고 상태 표시 -->
                    <div class="stock-status in-stock">재고 있음</div>
                </div>
                <button class="cart-button" onclick="addToCart('product1', 'LG 올레드 evo C3 OLED TV')"
                    aria-label="장바구니에 추가">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <!-- 제품 2 -->
            <div class="product-card">
                <div class="category-tag">노트북</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="product2"
                        data-product-name="삼성 갤럭시북 Pro 360" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=product2'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('product2', '삼성 갤럭시북 Pro 360', 'laptop')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="삼성 갤럭시북 Pro 360">
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
                        <span class="original-price">1,650,000원</span>
                        <span class="discount-badge">12%</span>
                    </div>
                    <!-- 재고 상태 표시 -->
                    <div class="stock-status in-stock">재고 있음</div>
                </div>
                <button class="cart-button" onclick="addToCart('product2', '삼성 갤럭시북 Pro 360')" aria-label="장바구니에 추가">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <!-- 제품 3 -->
            <div class="product-card">
                <div class="category-tag">컴퓨터</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="product3"
                        data-product-name="삼성 데스크탑" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=product3'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('product3', '삼성  데스크탑', 'smartphone')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="삼성 데스크탑">
                </div>
                <div class="product-details">
                    <h3 class="product-title">삼성 데스크탑</h3>
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
                        <span class="review-count">(218)</span>
                    </div>
                    <div class="product-price">
                        <span>1,590,000원</span>
                    </div>
                    <!-- 재고 상태 표시 -->
                    <div class="stock-status in-stock">재고 있음</div>
                </div>
                <button class="cart-button" onclick="addToCart('product3', '삼성 갤럭시 S25 울트라')" aria-label="장바구니에 추가">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <!-- 제품 4 -->
            <div class="product-card">
                <div class="category-tag">냉장고</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="product4"
                        data-product-name="삼성 비스포크 냉장고" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=product4'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('product4', '삼성 비스포크 냉장고', 'refrigerator')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="삼성 비스포크 냉장고">
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
                <button class="cart-button" onclick="addToCart('product4', '삼성 비스포크 냉장고')" aria-label="장바구니에 추가">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <!-- 제품 5 -->
            <div class="product-card">
                <div class="category-tag">세탁기</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="product5"
                        data-product-name="LG 트롬 세탁기 21kg" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=product5'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('product5', 'LG 트롬 세탁기 21kg', 'washer')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="LG 트롬 세탁기 21kg">
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
                <button class="cart-button" onclick="addToCart('product5', 'LG 트롬 세탁기 21kg')" aria-label="장바구니에 추가">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <!-- 제품 6 -->
            <div class="product-card">
                <div class="category-tag">노트북</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="product6"
                        data-product-name="LG 그램 17인치 노트북" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=product6'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('product6', 'LG 그램 17인치 노트북', 'laptop')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="LG 그램 17인치 노트북">
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
                        <span class="original-price">1,799,000원</span>
                        <span class="discount-badge">11%</span>
                    </div>
                    <!-- 재고 상태 표시 -->
                    <div class="stock-status low-stock">재고 임박 (5개 남음)</div>
                </div>
                <button class="cart-button" onclick="addToCart('product6', 'LG 그램 17인치 노트북')" aria-label="장바구니에 추가">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <!-- 제품 7 -->
            <div class="product-card">
                <div class="category-tag">TV</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="product7"
                        data-product-name="LG OLED TV 65인치" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=product7'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('product7', 'LG OLED TV 65인치', 'tv')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="LG OLED TV 65인치">
                </div>
                <div class="product-details">
                    <h3 class="product-title">LG OLED TV 65인치</h3>
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
                        <span class="review-count">(135)</span>
                    </div>
                    <div class="product-price">
                        <span>2,190,000원</span>
                        <span class="original-price">2,490,000원</span>
                        <span class="discount-badge">12%</span>
                    </div>
                    <!-- 재고 상태 표시 -->
                    <div class="stock-status out-of-stock">품절</div>
                </div>
                <button class="cart-button disabled" disabled aria-label="품절">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- 제품 8 -->
            <div class="product-card">
                <div class="category-tag">노트북</div>
                <div class="product-quick-actions">
                    <button class="quick-action-btn wishlist-toggle" data-product-id="product8"
                        data-product-name="애플 맥북 프로 M2" aria-label="위시리스트에 추가">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="quick-action-btn" onclick="window.location.href='product_details.html?id=product8'"
                        aria-label="상품 상세보기">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="quick-action-btn" onclick="addToCompare('product8', '애플 맥북 프로 M2', 'laptop')"
                        aria-label="상품 비교하기">
                        <i class="fas fa-exchange-alt"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="/api/placeholder/400/320" alt="애플 맥북 프로 M2">
                </div>
                <div class="product-details">
                    <h3 class="product-title">애플 맥북 프로 M2</h3>
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
                        <span class="review-count">(203)</span>
                    </div>
                    <div class="product-price">
                        <span>2,350,000원</span>
                    </div>
                    <!-- 재고 상태 표시 -->
                    <div class="stock-status out-of-stock">품절</div>
                </div>
                <button class="cart-button disabled" disabled aria-label="품절">
                    <i class="fas fa-times"></i>
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

            // 페이지네이션 설정
            setupPagination();

            setupWishlistToggleButtons();
            const searchInput = document.querySelector('.search-bar');
            if (searchInput) {
                searchInput.addEventListener('focus', function () {
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
            // 각 필터 섹션 내의 칩들을 독립적으로 토글
            document.querySelectorAll('.filter-row').forEach(row => {
                const chips = row.querySelectorAll('.filter-chip');

                chips.forEach(chip => {
                    chip.addEventListener('click', function () {
                        // 같은 행의 다른 칩들을 비활성화
                        chips.forEach(c => c.classList.remove('active'));
                        // 현재 칩 활성화
                        this.classList.add('active');
                        // 필터 적용
                        applyFilters();
                    });
                });
            });

            // 정렬 선택 이벤트
            document.getElementById('sortSelect').addEventListener('change', function () {
                // 여기에 정렬 로직 추가
                applyFilters();
            });
        }

        // 필터 적용 함수
        function applyFilters() {
            // .filter-row 요소들을 순서대로 가져옵니다.
            const rows = document.querySelectorAll('.filter-section .filter-row');
            const categoryFilter = rows[0].querySelector('.filter-chip.active').textContent;
            const priceFilter = rows[1].querySelector('.filter-chip.active').textContent;
            const brandFilter = rows[2].querySelector('.filter-chip.active').textContent;

            console.log('선택된 필터:', categoryFilter, priceFilter, brandFilter);

            const productCards = document.querySelectorAll('.product-card');
            let visibleCount = 0;

            productCards.forEach(card => {
                let showCard = true;

                // 카테고리
                if (categoryFilter !== '전체') {
                    const cardCategory = card.querySelector('.category-tag').textContent;
                    if (cardCategory !== categoryFilter) showCard = false;
                }
                // 가격
                if (showCard && priceFilter !== '전체') {
                    const price = parseInt(card.querySelector('.product-price span').textContent.replace(/[^0-9]/g, ''));
                    if (
                        (priceFilter === '50만원 이하' && price > 500000) ||
                        (priceFilter === '50-100만원' && (price <= 500000 || price > 1000000)) ||
                        (priceFilter === '100-200만원' && (price <= 1000000 || price > 2000000)) ||
                        (priceFilter === '200만원 이상' && price <= 2000000)
                    ) showCard = false;
                }
                // 브랜드
                if (showCard && brandFilter !== '전체') {
                    const title = card.querySelector('.product-title').textContent.toLowerCase();
                    if (!title.includes(brandFilter.toLowerCase())) showCard = false;
                }

                card.style.display = showCard ? '' : 'none';
                if (showCard) visibleCount++;
            });

            // 없을 때 메시지 처리 (생략)
            console.log('보이는 상품 수:', visibleCount);
        }


        // "상품 없음" 메시지 제거 함수
        function removeNoProductsMessage() {
            const noProductsMsg = document.getElementById('no-products-message');
            if (noProductsMsg) {
                noProductsMsg.remove();
            }
        }

        // 페이지네이션 설정 함수
        function setupPagination() {
            // 페이지 버튼 클릭 이벤트 설정
            const pageButtons = document.querySelectorAll('.pagination .page-button:not(.arrow)');
            pageButtons.forEach(button => {
                if (button.textContent !== '...') {
                    // 페이지 번호를 dataset에 추가
                    button.dataset.page = button.textContent;

                    button.addEventListener('click', function () {
                        // 현재 활성화된 페이지 버튼 비활성화
                        document.querySelector('.pagination .page-button.active').classList.remove('active');

                        // 클릭한 버튼 활성화
                        this.classList.add('active');

                        // 페이지 1이 아니면 상품 그리드 비우기 (2-9페이지는 상품 없음)
                        const pageNumber = parseInt(this.dataset.page);
                        const productGrid = document.querySelector('.product-grid');

                        removeNoProductsMessage();

                        if (pageNumber === 1) {
                            // 1페이지는 원래 상품 유지하고 필터 적용
                            productGrid.style.display = 'grid';

                            // 모든 상품 카드 표시 (필터 초기화)
                            document.querySelectorAll('.product-card').forEach(card => {
                                card.style.display = '';
                            });

                            // 필터 초기화 (모든 "전체" 필터 선택)
                            document.querySelectorAll('.filter-row').forEach(row => {
                                const allChip = row.querySelector('.filter-chip:first-child');
                                row.querySelectorAll('.filter-chip').forEach(chip => {
                                    chip.classList.remove('active');
                                });
                                allChip.classList.add('active');
                            });

                            // 필터 적용
                            applyFilters();
                        } else {
                            // 2-9페이지는 상품 그리드 숨기기
                            const allCards = document.querySelectorAll('.product-card');
                            allCards.forEach(card => {
                                card.style.display = 'none';
                            });

                            // "다른 페이지에는 상품이 없습니다" 메시지 표시
                            const message = document.createElement('div');
                            message.id = 'no-products-message';
                            message.style.gridColumn = '1 / -1';
                            message.style.textAlign = 'center';
                            message.style.padding = '40px 0';
                            message.style.width = '100%';
                            message.innerHTML = `
                        <i class="fas fa-info-circle" style="font-size: 48px; color: var(--gray); margin-bottom: 15px;"></i>
                        <p style="font-size: 18px; color: var(--text);">${pageNumber}페이지에는 상품이 없습니다.</p>
                    `;
                            productGrid.appendChild(message);
                        }

                        // 페이지 상단으로 스크롤
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                    });
                }
            });

            // 화살표 버튼 설정
            const arrowButtons = document.querySelectorAll('.pagination .page-button.arrow');
            if (arrowButtons.length === 2) {
                // 이전 페이지 버튼
                arrowButtons[0].addEventListener('click', function () {
                    const activeButton = document.querySelector('.pagination .page-button.active');
                    const prevButton = activeButton.previousElementSibling;

                    if (prevButton && !prevButton.classList.contains('arrow')) {
                        prevButton.click();
                    }
                });

                // 다음 페이지 버튼
                arrowButtons[1].addEventListener('click', function () {
                    const activeButton = document.querySelector('.pagination .page-button.active');
                    const nextButton = activeButton.nextElementSibling;

                    if (nextButton && !nextButton.classList.contains('arrow')) {
                        nextButton.click();
                    }
                });
            }
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

        // 상품 비교 기능
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
    </script>
</body>

</html>