<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 컴퓨터</title>
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
            font-family: 'Noto Sans KR', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
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
            cursor: pointer;
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

        /* 스크롤 상단 버튼 */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            transition: all 0.3s;
            z-index: 90;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .scroll-top.show {
            opacity: 1;
        }

        .scroll-top:hover {
            transform: translateY(-5px);
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

        /* 상품 별점 스타일 */
        .product-rating {
            display: flex;
            align-items: center;
            gap: 5px;
            margin: 5px 0;
        }

        .stars {
            color: #ffbb00;
        }

        .rating-value {
            font-weight: bold;
            font-size: 13px;
        }

        .review-count {
            font-size: 12px;
            color: var(--gray-dark);
        }

        /* 재고 상태 배지 */
        .stock-status {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            margin-top: 8px;
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

        /* 로딩 표시 */
        .loading-indicator {
            display: none;
            justify-content: center;
            align-items: center;
            height: 200px;
        }

        .loading-indicator.show {
            display: flex;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid var(--gray);
            border-top: 4px solid var(--primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* 빈 상태 표시 */
        .empty-state {
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 50px;
            text-align: center;
            background-color: var(--white);
            border-radius: var(--border-radius);
            margin: 30px 0;
        }

        .empty-state.show {
            display: flex;
        }

        .empty-state i {
            font-size: 50px;
            color: var(--gray);
            margin-bottom: 20px;
        }

        .empty-state h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .empty-state p {
            color: var(--gray-dark);
            margin-bottom: 20px;
        }

        .empty-state button {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
        }

        .empty-state button:hover {
            background-color: var(--primary-dark);
        }
    </style>
</head>

<body>
    <!-- Toast notification -->
    <div class="toast" id="toast">
        <i class="fas fa-check-circle"></i>
        <span id="toast-message">장바구니에 추가되었습니다.</span>
    </div>

    <?php 
        include 'header.php'; 
    ?>

    <div class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="mainpage.php">홈</a>
            <span class="breadcrumb-separator">></span>
            <span>노트북</span>
        </div>

        <!-- 카테고리 탭 메뉴 -->
        <div class="category-tabs">
            <div class="tab">전체</div>
            <div class="tab active">노트북</div>
        </div>
    </div>

    <div class="container">
        <!-- 로딩 표시 -->
        <div class="loading-indicator" id="loadingIndicator">
            <div class="spinner"></div>
        </div>

        <!-- 빈 상태 표시 -->
        <div class="empty-state" id="emptyState">
            <i class="fas fa-desktop"></i>
            <h3>검색 결과가 없습니다</h3>
            <p>다른 검색어나 필터를 사용해 보세요.</p>
            <button onclick="resetFilters()">필터 초기화</button>
        </div>

        <!-- Product Grid -->
        <div class="product-grid" id="productGrid">
            <?php
                require_once 'DBconnect/mongo_connect.php';
                $query = new MongoDB\Driver\Query([], [
                    'projection' => ['name' => 1, 'price' => 1, 'stock' => 1], // 필요한 필드만 가져오기
                ]);
                
                $cursor = $mongoManager->executeQuery("$mongoDBName.products_laptop", $query);
                
                foreach ($cursor as $doc) {
                    $doc = (array) $doc;
                    $id = (string)$doc['_id'];
                    $name = $doc['name'] ?? '이름 없음';
                    $price = number_format($doc['price'] ?? 0);
                    $stock = $doc['stock'] ?? 0;
                    $inStock = ($stock > 0) ? '재고 있음' : '재고 없음';
                
                    echo <<<HTML
                    <div class="product-card">
                        <div class="product-quick-actions">
                            <button class="quick-action-btn wishlist-toggle" data-product-id="$id" data-product-name="$name">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="quick-action-btn" onclick="window.location.href='product_details.php?category=products_laptop&id=$id'" aria-label="상품 상세보기">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="product-image">
                            <img src="/static/img/laptop/$id.png" alt="$name">
                        </div>
                        <div class="product-info">
                            <div class="product-name">$name</div>
                            <div class="product-price">{$price}원</div>
                            <div class="stock-status in-stock">$inStock</div>
                            <div class="quick-actions">
                                <button class="cart-button" onclick="">
                                    <i class="fas fa-shopping-cart"></i> 장바구니 추가
                                </button>
                            </div>
                        </div>
                    </div>
                HTML;
                }
            ?>            
        </div>
    </div>

    <!-- 맨 위로 버튼 -->
    <button class="scroll-top" id="scrollTop">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // DOM이 로드되면 실행
        document.addEventListener('DOMContentLoaded', function () {
            // 테마 관련 초기화
            initTheme();

            // 스크롤 이벤트 리스너
            window.addEventListener('scroll', handleScroll);

            // 위시리스트 토글 버튼 이벤트 설정
            setupWishlistToggleButtons();

            // 정렬 드롭다운 설정
            setupSortDropdown();

            // 필터 칩 설정
            setupFilterChips();

            setupPagination();

            // 페이지네이션 설정
            setupPagination();

            // 스크롤 위로 버튼 설정
            document.getElementById('scrollTop').addEventListener('click', function () {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
            const searchBar = document.getElementById('searchBar');
            const searchIcon = document.getElementById('searchIcon');

            // 검색창 클릭 시 이벤트
            searchBar.addEventListener('click', function () {
                window.location.href = 'search_results.html';
            });

            // 검색 아이콘 클릭 시 이벤트
            searchIcon.addEventListener('click', function () {
                window.location.href = 'search_results.html';
            });
            // 최근 본 상품 위젯 클릭 이벤트
            const recentProductsWidget = document.getElementById('recentProductsWidget');

            recentProductsWidget.addEventListener('click', function () {
                window.location.href = 'recent_products.html';
            });

            // CSS 수정을 JavaScript로 추가
            recentProductsWidget.style.cursor = 'pointer';
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

                showToast(newTheme === 'dark' ? '다크 모드로 변경되었습니다.' : '라이트 모드로 변경되었습니다.');
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

        // 위시리스트 버튼 설정
        function setupWishlistToggleButtons() {
            const wishlistButtons = document.querySelectorAll('.wishlist-toggle');
            const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

            wishlistButtons.forEach(button => {
                const productId = button.dataset.productId;

                // 이미 위시리스트에 있으면 활성화 상태로 표시
                if (wishlist.some(item => item.id === productId)) {
                    button.classList.add('active');
                    button.querySelector('i').classList.remove('far');
                    button.querySelector('i').classList.add('fas');
                }

                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    toggleWishlist(button.dataset.productId, button.dataset.productName);

                    // 버튼 상태 토글
                    button.classList.toggle('active');

                    // 아이콘 변경
                    if (button.classList.contains('active')) {
                        button.querySelector('i').classList.remove('far');
                        button.querySelector('i').classList.add('fas');
                    } else {
                        button.querySelector('i').classList.remove('fas');
                        button.querySelector('i').classList.add('far');
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
        }

        // 카테고리 탭 클릭 이벤트
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function () {
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                // 필터링 로직 추가 가능
            });
        });

        // 필터 옵션 클릭 이벤트
        document.querySelectorAll('.option:not(.more)').forEach(option => {
            option.addEventListener('click', function () {
                document.querySelectorAll('.option:not(.more)').forEach(o => {
                    if (o !== this) o.classList.remove('active');
                });
                this.classList.toggle('active');
                // 필터링 로직 추가 가능
                applyFilters(this.textContent.trim());
            });
        });

        // 정렬 드롭다운 설정
        function setupSortDropdown() {
            // 정렬 드롭다운 토글
            document.getElementById('sortButton').addEventListener('click', function (e) {
                e.stopPropagation();
                document.getElementById('sortMenu').classList.toggle('show');
            });

            // 외부 클릭 시 드롭다운 닫기
            window.addEventListener('click', function (event) {
                if (!event.target.matches('.sort-button') && !event.target.matches('.sort-button *')) {
                    const dropdown = document.getElementById('sortMenu');
                    if (dropdown.classList.contains('show')) {
                        dropdown.classList.remove('show');
                    }
                }
            });

            // 정렬 옵션 선택
            document.querySelectorAll('.sort-option').forEach(option => {
                option.addEventListener('click', function () {
                    document.querySelectorAll('.sort-option').forEach(opt => {
                        opt.classList.remove('active');
                    });
                    this.classList.add('active');

                    const sortText = this.textContent.trim();
                    document.getElementById('sortButton').innerHTML = `${sortText} <i class="fas fa-chevron-down"></i>`;
                    document.getElementById('sortMenu').classList.remove('show');

                    // 정렬 적용 시 토스트 메시지
                    showToast(`${sortText}으로 정렬하였습니다.`);

                    // 여기서 정렬 로직 구현 가능
                });
            });
        }

        // 필터 칩 설정
        function setupFilterChips() {
            document.querySelectorAll('.filter-chip').forEach(chip => {
                chip.addEventListener('click', function () {
                    document.querySelectorAll('.filter-chip').forEach(c => {
                        c.classList.remove('active');
                    });
                    this.classList.add('active');

                    // 필터 적용 시 토스트 메시지
                    showToast(`${this.textContent.trim()} 필터를 적용하였습니다.`);

                    // 여기서 필터링 로직 구현 가능
                    applyFilters(this.textContent.trim());
                });
            });
        }

        // 필터 초기화
        function resetFilters() {
            document.querySelectorAll('.filter-chip').forEach(chip => {
                chip.classList.remove('active');
            });

            document.querySelector('.filter-chip:first-child').classList.add('active');

            // 빈 상태 숨기기
            document.getElementById('emptyState').classList.remove('show');
            // 제품 그리드 표시
            document.getElementById('productGrid').style.display = 'grid';

            // 필터 초기화 후 토스트 표시
            showToast('필터가 초기화되었습니다.');
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

            // 장바구니 정보 저장
            localStorage.setItem('cart', JSON.stringify(cart));
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

        // 검색 폼 제출 처리
        document.getElementById('searchForm').addEventListener('submit', function (e) {
            e.preventDefault(); // 기본 제출 동작 방지

            const searchInput = this.querySelector('.search-bar');
            const query = searchInput.value.trim();

            if (query) {
                // 실제로는 검색 결과 페이지로 이동
                window.location.href = `search_result.html?query=${encodeURIComponent(query)}`;
            } else {
                showToast('검색어를 입력해주세요.');
            }
        });
        // 장바구니에 상품 추가
        function addToCart(productId, productName) {
            // 장바구니 정보를 로컬 스토리지에 저장
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // 이미 장바구니에 있는지 확인
            const existingProduct = cart.find(item => item.id === productId);

            if (existingProduct) {
                // 이미 있으면 수량 증가
                existingProduct.quantity += 1;
                showToast(`${productName} 수량이 증가되었습니다. (${existingProduct.quantity}개)`);
            } else {
                // 없으면 새로 추가
                cart.push({
                    id: productId,
                    name: productName,
                    quantity: 1,
                    addedAt: new Date().toISOString()
                });
                showToast(`${productName}이(가) 장바구니에 추가되었습니다.`);
            }

            // 장바구니 정보 저장
            localStorage.setItem('cart', JSON.stringify(cart));
        }
        // 페이지네이션 설정
        function setupPagination() {
            const pageButtons = document.querySelectorAll('.page-button:not(.arrow)');
            const productCards = document.querySelectorAll('#productGrid .product-card');
            const productsPerPage = 8; // 페이지당 상품 수

            // 초기 페이지 설정
            showProductsForPage(1, productCards, productsPerPage);

            // 페이지 버튼 클릭 이벤트
            pageButtons.forEach(button => {
                button.addEventListener('click', function () {
                    pageButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    const pageNum = parseInt(this.textContent);
                    showProductsForPage(pageNum, productCards, productsPerPage);
                });
            });

            // 이전/다음 페이지 버튼
            const prevButton = document.querySelector('.page-button.arrow:first-child');
            const nextButton = document.querySelector('.page-button.arrow:last-child');

            prevButton.addEventListener('click', function () {
                const activePage = document.querySelector('.page-button.active');
                const currentPage = parseInt(activePage.textContent);
                if (currentPage > 1) {
                    const pageButtons = Array.from(document.querySelectorAll('.page-button:not(.arrow)'));
                    const prevPageButton = pageButtons.find(btn => parseInt(btn.textContent) === currentPage - 1);
                    if (prevPageButton) {
                        prevPageButton.click();
                    }
                }
            });

            nextButton.addEventListener('click', function () {
                const activePage = document.querySelector('.page-button.active');
                const currentPage = parseInt(activePage.textContent);
                if (currentPage < 9) { // 9를 페이지 최대 수로 업데이트
                    const pageButtons = Array.from(document.querySelectorAll('.page-button:not(.arrow)'));
                    const nextPageButton = pageButtons.find(btn => parseInt(btn.textContent) === currentPage + 1);
                    if (nextPageButton) {
                        nextPageButton.click();
                    }
                }
            });
        }

        // 특정 페이지의 상품만 표시
        function showProductsForPage(pageNum, productCards, productsPerPage) {
            const startIndex = (pageNum - 1) * productsPerPage;
            const endIndex = startIndex + productsPerPage;

            productCards.forEach((card, index) => {
                if (index >= startIndex && index < endIndex) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });

            // 페이지 상단으로 스크롤
            window.scrollTo({
                top: document.querySelector('#productGrid').offsetTop - 100,
                behavior: 'smooth'
            });
        }
        // 필터 옵션 클릭 시 호출되는 함수
        function applyFilters(filter) {
            const cards = document.querySelectorAll('.product-card');
            cards.forEach(card => {
                const specs = card.querySelector('.product-specs').textContent;
                // 문자열에서 숫자만 뽑아서 정수로
                const priceText = card.querySelector('.product-price').textContent;
                const price = parseInt(priceText.replace(/[^0-9]/g, ''), 10);

                let show = true;
                switch (filter) {
                    case '100만원 이하':
                        show = price <= 1000000;
                        break;
                    case '100-150만원':
                        show = price > 1000000 && price <= 1500000;
                        break;
                    case '150만원 이상':
                        show = price > 1500000;
                        break;
                    case '인텔':
                        show = specs.includes('Intel');
                        break;
                    case 'AMD':
                        show = specs.includes('AMD');
                        break;
                    case '게이밍':
                        show = specs.toLowerCase().includes('게이밍') || specs.toLowerCase().includes('gaming');
                        break;
                    case '사무용':
                        // 예: 스펙에 '사무' 키워드가 없으면 브랜드별 조건 등 추가 가능
                        show = specs.toLowerCase().includes('office') || specs.toLowerCase().includes('사무');
                        break;
                    default:
                        show = true; // '전체' 등
                }

                card.style.display = show ? '' : 'none';
            });

            // 빈 결과일 때 메시지 띄우기
            const emptyState = document.getElementById('emptyState');
            const anyVisible = Array.from(document.querySelectorAll('.product-card'))
                .some(c => c.style.display !== 'none');
            emptyState.classList.toggle('show', !anyVisible);
        }

    </script>
</body>

</html>