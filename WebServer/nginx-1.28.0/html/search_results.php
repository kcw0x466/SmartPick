<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 검색 결과</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
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
            --border-radius: 10px;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
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
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background-color: var(--header-bg);
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: var(--transition);
        }

        header.scrolled {
            box-shadow: var(--shadow);
            padding: 10px 20px;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: var(--text);
            font-weight: 700;
            font-size: 20px;
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

        .search-bar {
            flex: 1;
            max-width: 600px;
            margin: 0 20px;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 12px 45px 12px 20px;
            border: 1px solid var(--gray);
            border-radius: 30px;
            font-size: 15px;
            transition: var(--transition);
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(255, 107, 107, 0.2);
        }

        .search-keyword {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            background-color: var(--primary-light);
            color: var(--primary-dark);
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            display: none;
        }

        .search-keyword.show {
            display: inline-block;
        }

        .search-input.with-keyword {
            padding-left: 100px;
        }

        .search-clear {
            position: absolute;
            right: 45px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--gray-dark);
            cursor: pointer;
            font-size: 14px;
            opacity: 0.7;
        }

        .search-clear:hover {
            opacity: 1;
        }

        .search-button {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--gray-dark);
            cursor: pointer;
            font-size: 16px;
        }

        .search-input {
            width: 100%;
            padding: 12px 20px;
            border: 2px solid var(--border-color);
            border-radius: 30px;
            font-size: 16px;
            transition: var(--transition);
            background-color: var(--body-bg);
            color: var(--text);
        }

        .search-bar:focus,
        .search-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(233, 49, 112, 0.2);
            outline: none;
        }

        .search-icon,
        .search-button {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 18px;
            color: var(--dark);
            cursor: pointer;
        }

        .nav-buttons {
            display: flex;
            gap: 15px;
        }

        .nav-button {
            padding: 10px 20px;
            border: none;
            border-radius: 50px;
            background-color: var(--secondary);
            color: var(--text);
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
            transition: var(--transition);
        }

        .nav-button:hover {
            background-color: var(--gray-light);
            transform: translateY(-2px);
        }

        .nav-button i {
            font-size: 16px;
            color: var(--primary);
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

        /* Main Content */
        .main-content {
            display: flex;
            gap: 30px;
            margin-bottom: 50px;
        }

        /* Filter Sidebar */
        .filter-sidebar {
            width: 260px;
            flex-shrink: 0;
        }

        .filter-section {
            background-color: var(--light);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            margin-bottom: 20px;
            overflow: hidden;
        }

        .filter-header {
            padding: 15px 20px;
            border-bottom: 1px solid var(--gray);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .filter-title {
            font-size: 16px;
            font-weight: 600;
        }

        .filter-reset {
            font-size: 12px;
            color: var(--text-light);
            background: none;
            border: none;
            cursor: pointer;
        }

        .filter-reset:hover {
            color: var(--primary);
        }

        .filter-body {
            padding: 15px 20px;
        }

        .filter-group {
            margin-bottom: 20px;
        }

        .filter-group:last-child {
            margin-bottom: 0;
        }

        .filter-group-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }

        .filter-toggle {
            font-size: 12px;
            color: var(--text-light);
        }

        .filter-options {
            max-height: 200px;
            overflow-y: auto;
        }

        .filter-option {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 8px;
        }

        .filter-checkbox {
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        .filter-label {
            font-size: 14px;
            cursor: pointer;
        }

        .filter-count {
            font-size: 12px;
            color: var(--text-light);
            margin-left: auto;
            display: none;
        }

        /* 검색어가 있을 때만 필터 카운트 표시 */
        body.has-search-query .filter-count {
            display: inline-block;
        }

        .price-slider {
            margin: 10px 0 20px;
        }

        .price-range {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .price-input {
            flex: 1;
            padding: 8px;
            border: 1px solid var(--gray);
            border-radius: 4px;
            font-size: 13px;
            width: 100%;
        }

        .price-separator {
            color: var(--text-light);
        }

        .rating-stars {
            color: #f8cc46;
            font-size: 16px;
            margin-right: 5px;
        }

        /* Applied Filters */
        .applied-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .filter-tag {
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 6px 12px;
            background-color: var(--primary-light);
            color: var(--primary-dark);
            border-radius: 20px;
            font-size: 13px;
            cursor: pointer;
        }

        .filter-tag:hover {
            background-color: var(--primary);
            color: white;
        }

        .filter-tag i {
            font-size: 12px;
        }

        /* Product Results */
        .product-results {
            flex: 1;
        }

        .results-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--gray);
        }

        .results-info {
            font-size: 16px;
            font-weight: 500;
        }

        .results-count {
            font-weight: 600;
            color: var(--primary);
        }

        .results-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .sort-select {
            padding: 8px 12px;
            border: 1px solid var(--gray);
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }

        .sort-select:focus {
            outline: none;
            border-color: var(--primary);
        }

        .view-toggle {
            display: flex;
            gap: 5px;
        }

        .view-button {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--gray-light);
            border: 1px solid var(--gray);
            border-radius: 4px;
            cursor: pointer;
            transition: var(--transition);
        }

        .view-button.active {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .product-list .product-grid {
            grid-template-columns: 1fr;
        }

        .product-card {
            background-color: var(--light);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            height: 180px;
            background-color: var(--gray-light);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
        }

        .product-image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: var(--transition);
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .product-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: var(--primary);
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
        }

        .product-discount {
            background-color: #ff9f43;
        }

        .product-new {
            background-color: #55c57a;
        }

        .product-stock {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(255, 255, 255, 0.9);
            color: var(--primary);
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
        }

        .product-quick-actions {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            padding: 30px 10px 10px;
            display: flex;
            justify-content: center;
            gap: 10px;
            opacity: 0;
            transform: translateY(100%);
            transition: var(--transition);
        }

        .product-card:hover .product-quick-actions {
            opacity: 1;
            transform: translateY(0);
        }

        .quick-action-button {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: white;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            font-size: 14px;
            color: var(--text);
        }

        .quick-action-button:hover {
            background-color: var(--primary);
            color: white;
        }

        .product-info {
            padding: 15px;
        }

        .product-category {
            font-size: 12px;
            color: var(--text-light);
            margin-bottom: 5px;
        }

        .product-name {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 10px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 46px;
        }

        .product-specs {
            font-size: 13px;
            color: var(--text-light);
            margin-bottom: 10px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 42px;
        }

        .product-rating {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .rating {
            display: flex;
            color: #f8cc46;
            font-size: 14px;
        }

        .rating-count {
            font-size: 13px;
            color: var(--text-light);
            margin-left: 5px;
        }

        .product-price {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .current-price {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary-dark);
        }

        .original-price {
            font-size: 14px;
            color: var(--text-light);
            text-decoration: line-through;
        }

        .discount-percent {
            font-size: 14px;
            color: var(--primary);
            font-weight: 600;
        }

        .product-actions {
            display: flex;
            gap: 10px;
        }

        .action-button {
            flex: 1;
            padding: 8px 0;
            border: none;
            border-radius: 4px;
            font-size: 13px;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .cart-button {
            background-color: var(--primary);
            color: white;
        }

        .cart-button:hover {
            background-color: var(--primary-dark);
        }

        .wishlist-button {
            background-color: var(--secondary);
            color: var(--text);
            border: 1px solid var(--gray);
        }

        .wishlist-button:hover {
            background-color: var(--gray-light);
        }

        /* List View */
        .product-list .product-card {
            display: grid;
            grid-template-columns: 200px 1fr auto;
            height: 200px;
        }

        .product-list .product-image {
            height: 100%;
        }

        .product-list .product-quick-actions {
            opacity: 1;
            transform: translateY(0);
            background: none;
            top: 50px;
            bottom: auto;
            left: auto;
            right: 10px;
            width: 32px;
            flex-direction: column;
            padding: 0;
        }

        .product-list .product-info {
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .product-list .product-name,
        .product-list .product-specs {
            -webkit-line-clamp: 1;
            height: auto;
            margin-bottom: 15px;
        }

        .product-list .product-actions {
            margin-top: auto;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .page-button {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 5px;
            border-radius: 18px;
            border: 1px solid var(--gray);
            background-color: var(--light);
            color: var(--text);
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
        }

        .page-button:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        .page-button.active {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .page-button.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Quick View Modal */
        .quick-view-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .quick-view-modal.show {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background-color: white;
            border-radius: var(--radius);
            overflow: hidden;
            width: 900px;
            max-width: 90%;
            max-height: 90vh;
            display: flex;
            flex-direction: column;
            animation: modalIn 0.3s forwards;
        }

        @keyframes modalIn {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-header {
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--gray);
        }

        .modal-title {
            font-size: 18px;
            font-weight: 600;
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: var(--text-light);
        }

        .modal-close:hover {
            color: var(--primary);
        }

        .modal-body {
            padding: 20px;
            overflow-y: auto;
        }

        .modal-footer {
            padding: 15px 20px;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            border-top: 1px solid var(--gray);
        }

        /* Toast notification */
        .toast {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--dark);
            color: white;
            padding: 15px 25px;
            border-radius: var(--radius);
            font-size: 14px;
            z-index: 1000;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .toast.show {
            opacity: 1;
            transform: translateY(0);
        }

        .toast i {
            font-size: 18px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .main-content {
                flex-direction: column;
            }

            .filter-sidebar {
                width: 100%;
            }

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .product-list .product-card {
                grid-template-columns: 150px 1fr;
                height: auto;
            }

            .product-list .product-quick-actions {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .search-bar {
                margin: 0 10px;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }

            .results-actions {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .product-list .product-card {
                grid-template-columns: 120px 1fr;
            }

            .pagination {
                flex-wrap: wrap;
            }
        }

        @media (max-width: 576px) {
            .brand span {
                display: none;
            }

            .product-list .product-card {
                grid-template-columns: 1fr;
            }

            .product-list .product-image {
                height: 180px;
            }
        }

        /* 필터 미선택 시 결과 전체 숨기기 */
        .product-results.no-filters .results-header,
        .product-results.no-filters .product-grid,
        .product-results.no-filters .pagination {
            display: none;
        }

        /* 필터 내 검색창 스타일 */
        .filter-search {
            display: flex;
            margin-bottom: 15px;
            position: relative;
        }

        .filter-search-input {
            width: 100%;
            padding: 8px 30px 8px 10px;
            border: 1px solid var(--gray);
            border-radius: 4px;
            font-size: 13px;
        }

        .filter-search-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(255, 107, 107, 0.2);
        }

        .filter-search-button {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            background: none;
            border: none;
            padding: 0 10px;
            color: var(--gray-dark);
            cursor: pointer;
        }

        .filter-search-button:hover {
            color: var(--primary);
        }

        /* 검색 결과 없음 메시지 */
        .no-products {
            text-align: center;
            padding: 30px;
            color: var(--text-light);
            font-size: 14px;
        }
    </style>
</head>

<body>
    <!-- Toast notification -->
    <div class="toast" id="toast">
        <i class="fas fa-check-circle"></i>
        <span id="toast-message">장바구니에 추가되었습니다.</span>
    </div>

    <!-- Header -->
    <header>
        <div class="logo" onclick="window.location.href='mainpage.html'">
            <div class="logo-box">스마<br>트픽</div>
            <span>스마트픽</span>
        </div>
        <div class="search-bar">
            <span class="search-keyword"><!-- 비어있음 --></span>
            <input type="text" class="search-input" placeholder="찾으시는 상품을 검색해보세요" value="">
            <button class="search-clear" id="searchClear" style="display: none;">
                <i class="fas fa-times"></i>
            </button>
            <button class="search-button" id="searchButton">
                <i class="fas fa-search"></i>
            </button>
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
            <a href="#">홈</a>
            <span class="breadcrumb-separator">></span>
            <a href="#">검색</a>

        </div>

        <!-- Applied Filters -->
        <div class="applied-filters">



            <!-- Main Content -->
            <div class="main-content">
                <!-- Filter Sidebar -->
                <div class="filter-sidebar">
                    <div class="filter-section">
                        <div class="filter-header">
                            <h3 class="filter-title">필터</h3>
                            <button class="filter-reset">초기화</button>
                        </div>
                        <div class="filter-body">
                            <!-- Price Range Filter -->
                            <div class="filter-group">
                                <div class="filter-group-title">
                                    <span>상품 검색</span>
                                    <span class="filter-toggle"><i class="fas fa-chevron-up"></i></span>
                                </div>
                                <div class="filter-options">
                                    <div class="filter-search">
                                        <input type="text" id="productSearch" class="filter-search-input"
                                            placeholder="상품명 입력">
                                        <button id="productSearchBtn" class="filter-search-button">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="filter-group-title">
                                    <span>가격대</span>
                                    <span class="filter-toggle"><i class="fas fa-chevron-up"></i></span>
                                </div>
                                <div class="filter-options">
                                    <input type="range" class="price-slider" min="0" max="3000000" step="100000"
                                        value="1500000">
                                    <div class="price-range">
                                        <input type="text" class="price-input" placeholder="최소" value="1,000,000">
                                        <span class="price-separator">~</span>
                                        <input type="text" class="price-input" placeholder="최대" value="1,500,000">
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="price1" class="filter-checkbox">
                                        <label for="price1" class="filter-label">50만원 미만</label>
                                        <span class="filter-count">12</span>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="price2" class="filter-checkbox">
                                        <label for="price2" class="filter-label">50만원-100만원</label>
                                        <span class="filter-count">25</span>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="price3" class="filter-checkbox">
                                        <label for="price3" class="filter-label">100만원-150만원</label>
                                        <span class="filter-count">38</span>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="price4" class="filter-checkbox">
                                        <label for="price4" class="filter-label">150만원-200만원</label>
                                        <span class="filter-count">29</span>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="price5" class="filter-checkbox">
                                        <label for="price5" class="filter-label">200만원 이상</label>
                                        <span class="filter-count">14</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Brand Filter -->
                            <div class="filter-group">
                                <div class="filter-group-title">
                                    <span>브랜드</span>
                                    <span class="filter-toggle"><i class="fas fa-chevron-up"></i></span>
                                </div>
                                <div class="filter-options">
                                    <div class="filter-option">
                                        <input type="checkbox" id="brand1" class="filter-checkbox">
                                        <label for="brand1" class="filter-label">삼성</label>
                                        <span class="filter-count">42</span>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="brand2" class="filter-checkbox">
                                        <label for="brand2" class="filter-label">LG</label>
                                        <span class="filter-count">37</span>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="brand3" class="filter-checkbox">
                                        <label for="brand3" class="filter-label">애플</label>
                                        <span class="filter-count">15</span>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="brand4" class="filter-checkbox">
                                        <label for="brand4" class="filter-label">ASUS</label>
                                        <span class="filter-count">23</span>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="brand5" class="filter-checkbox">
                                        <label for="brand5" class="filter-label">레노버</label>
                                        <span class="filter-count">19</span>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="brand6" class="filter-checkbox">
                                        <label for="brand6" class="filter-label">MSI</label>
                                        <span class="filter-count">12</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rating Filter -->
                            <div class="filter-group">
                                <div class="filter-group-title">
                                    <span>평점</span>
                                    <span class="filter-toggle"><i class="fas fa-chevron-up"></i></span>
                                </div>
                                <div class="filter-options">
                                    <div class="filter-option">
                                        <input type="checkbox" id="rating1" class="filter-checkbox">
                                        <label for="rating1" class="filter-label">
                                            <span class="rating-stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                            4점 이상
                                        </label>
                                        <span class="filter-count">65</span>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="rating2" class="filter-checkbox">
                                        <label for="rating2" class="filter-label">
                                            <span class="rating-stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                            3점 이상
                                        </label>
                                        <span class="filter-count">96</span>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="rating3" class="filter-checkbox">
                                        <label for="rating3" class="filter-label">
                                            <span class="rating-stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </span>
                                            2점 이상
                                        </label>
                                        <span class="filter-count">118</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Release Date Filter -->
                            <div class="filter-group">
                                <div class="filter-group-title">
                                    <span>출시일</span>
                                    <span class="filter-toggle"><i class="fas fa-chevron-up"></i></span>
                                </div>
                                <div class="filter-options">
                                    <div class="filter-option">
                                        <input type="checkbox" id="date1" class="filter-checkbox">
                                        <label for="date1" class="filter-label">최근 1개월</label>
                                        <span class="filter-count">8</span>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="date2" class="filter-checkbox">
                                        <label for="date2" class="filter-label">최근 3개월</label>
                                        <span class="filter-count">23</span>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="date3" class="filter-checkbox">
                                        <label for="date3" class="filter-label">최근 6개월</label>
                                        <span class="filter-count">42</span>
                                    </div>
                                    <div class="filter-option">
                                        <input type="checkbox" id="date4" class="filter-checkbox">
                                        <label for="date4" class="filter-label">최근 1년</label>
                                        <span class="filter-count">78</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Results -->
                <div class="product-results">
                    <div class="results-header">
                        <div class="results-info">
                            <span class="results-count">38개</span> 상품 찾음
                        </div>
                        <div class="results-actions">
                            <select class="sort-select">
                                <option>인기순</option>
                                <option>최신순</option>
                                <option>가격 낮은순</option>
                                <option>가격 높은순</option>
                                <option>평점순</option>
                            </select>
                            <div class="view-toggle">
                                <button class="view-button active" id="gridView">
                                    <i class="fas fa-th"></i>
                                </button>
                                <button class="view-button" id="listView">
                                    <i class="fas fa-list"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Grid -->
                    <div class="product-grid">
                        <!-- Product 1 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="/api/placeholder/180/120" alt="Product">
                                <div class="product-badge">인기</div>
                                <div class="product-stock">재고 5개</div>
                                <div class="product-quick-actions">
                                    <button class="quick-action-button" title="빠른 보기" onclick="showQuickView()">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="quick-action-button" title="비교 추가">
                                        <i class="fas fa-exchange-alt"></i>
                                    </button>
                                    <button class="quick-action-button" title="찜하기">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-category">삼성전자</div>
                                <h3 class="product-name">갤럭시북3 Pro 360 NT950QGK</h3>
                                <div class="product-specs">i7-1360P / 16GB / 512GB / Win11</div>
                                <div class="product-rating">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="rating-count">(78)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">1,359,000원</span>
                                    <span class="original-price">1,699,000원</span>
                                    <span class="discount-percent">20%</span>
                                </div>
                                <div class="product-actions">
                                    <button class="action-button cart-button" onclick="showToast()">
                                        <i class="fas fa-shopping-cart"></i>
                                        장바구니
                                    </button>
                                    <button class="action-button wishlist-button">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="/api/placeholder/180/120" alt="Product">
                                <div class="product-badge product-new">신상품</div>
                                <div class="product-quick-actions">
                                    <button class="quick-action-button" title="빠른 보기" onclick="showQuickView()">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="quick-action-button" title="비교 추가">
                                        <i class="fas fa-exchange-alt"></i>
                                    </button>
                                    <button class="quick-action-button" title="찜하기">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-category">삼성전자</div>
                                <h3 class="product-name">갤럭시북3 Ultra NT960XFG</h3>
                                <div class="product-specs">i7-13700H / 16GB / 1TB / RTX 4050 / Win11</div>
                                <div class="product-rating">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="rating-count">(42)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">1,499,000원</span>
                                </div>
                                <div class="product-actions">
                                    <button class="action-button cart-button" onclick="showToast()">
                                        <i class="fas fa-shopping-cart"></i>
                                        장바구니
                                    </button>
                                    <button class="action-button wishlist-button">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="/api/placeholder/180/120" alt="Product">
                                <div class="product-badge product-discount">특가</div>
                                <div class="product-quick-actions">
                                    <button class="quick-action-button" title="빠른 보기" onclick="showQuickView()">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="quick-action-button" title="비교 추가">
                                        <i class="fas fa-exchange-alt"></i>
                                    </button>
                                    <button class="quick-action-button" title="찜하기">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-category">삼성전자</div>
                                <h3 class="product-name">갤럭시북3 NT750XFG</h3>
                                <div class="product-specs">i5-1335U / 16GB / 256GB / Win11</div>
                                <div class="product-rating">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count">(126)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">1,049,000원</span>
                                    <span class="original-price">1,299,000원</span>
                                    <span class="discount-percent">19%</span>
                                </div>
                                <div class="product-actions">
                                    <button class="action-button cart-button" onclick="showToast()">
                                        <i class="fas fa-shopping-cart"></i>
                                        장바구니
                                    </button>
                                    <button class="action-button wishlist-button">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="/api/placeholder/180/120" alt="Product">
                                <div class="product-quick-actions">
                                    <button class="quick-action-button" title="빠른 보기" onclick="showQuickView()">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="quick-action-button" title="비교 추가">
                                        <i class="fas fa-exchange-alt"></i>
                                    </button>
                                    <button class="quick-action-button" title="찜하기">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-category">삼성전자</div>
                                <h3 class="product-name">갤럭시북3 360 NT730QFG</h3>
                                <div class="product-specs">i5-1340P / 16GB / 512GB / Win11</div>
                                <div class="product-rating">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="rating-count">(87)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">1,199,000원</span>
                                    <span class="original-price">1,399,000원</span>
                                    <span class="discount-percent">14%</span>
                                </div>
                                <div class="product-actions">
                                    <button class="action-button cart-button" onclick="showToast()">
                                        <i class="fas fa-shopping-cart"></i>
                                        장바구니
                                    </button>
                                    <button class="action-button wishlist-button">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="/api/placeholder/180/120" alt="Product">
                                <div class="product-quick-actions">
                                    <button class="quick-action-button" title="빠른 보기" onclick="showQuickView()">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="quick-action-button" title="비교 추가">
                                        <i class="fas fa-exchange-alt"></i>
                                    </button>
                                    <button class="quick-action-button" title="찜하기">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-category">삼성전자</div>
                                <h3 class="product-name">갤럭시북3 Pro NT940XFG</h3>
                                <div class="product-specs">i7-1360P / 16GB / 1TB / Win11</div>
                                <div class="product-rating">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="rating-count">(64)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">1,479,000원</span>
                                    <span class="original-price">1,599,000원</span>
                                    <span class="discount-percent">8%</span>
                                </div>
                                <div class="product-actions">
                                    <button class="action-button cart-button" onclick="showToast()">
                                        <i class="fas fa-shopping-cart"></i>
                                        장바구니
                                    </button>
                                    <button class="action-button wishlist-button">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="/api/placeholder/180/120" alt="Product">
                                <div class="product-badge">인기</div>
                                <div class="product-quick-actions">
                                    <button class="quick-action-button" title="빠른 보기" onclick="showQuickView()">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="quick-action-button" title="비교 추가">
                                        <i class="fas fa-exchange-alt"></i>
                                    </button>
                                    <button class="quick-action-button" title="찜하기">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-category">삼성전자</div>
                                <h3 class="product-name">갤럭시북3 NT750XFT</h3>
                                <div class="product-specs">i5-1335U / 8GB / 256GB / Win11</div>
                                <div class="product-rating">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="rating-count">(103)</span>
                                </div>
                                <div class="product-price">
                                    <span class="current-price">999,000원</span>
                                    <span class="original-price">1,190,000원</span>
                                    <span class="discount-percent">16%</span>
                                </div>
                                <div class="product-actions">
                                    <button class="action-button cart-button" onclick="showToast()">
                                        <i class="fas fa-shopping-cart"></i>
                                        장바구니
                                    </button>
                                    <button class="action-button wishlist-button">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <button class="page-button" disabled>
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="page-button active">1</button>
                        <button class="page-button">2</button>
                        <button class="page-button">3</button>
                        <button class="page-button">4</button>
                        <button class="page-button">5</button>
                        <button class="page-button">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick View Modal -->
        <div class="quick-view-modal" id="quickViewModal">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">갤럭시북3 Pro 360 NT950QGK</h2>
                    <button class="modal-close" id="modalClose">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modal content here -->
                    <p>제품 정보가 여기에 표시됩니다.</p>
                </div>
                <div class="modal-footer">
                    <button class="action-button wishlist-button">
                        <i class="far fa-heart"></i>
                        위시리스트
                    </button>
                    <button class="action-button cart-button" onclick="showToast()">
                        <i class="fas fa-shopping-cart"></i>
                        장바구니 추가
                    </button>
                </div>
            </div>
        </div>

        <script>
            // 카테고리별 상품 데이터
            const productData = {
                '노트북': [
                    {
                        name: '갤럭시북3 Pro 360 NT950QGK',
                        brand: '삼성전자',
                        specs: 'i7-1360P / 16GB / 512GB / Win11',
                        price: '1,359,000원',
                        originalPrice: '1,699,000원',
                        discount: '20%',
                        rating: 4.5,
                        ratingCount: 78
                    },
                    {
                        name: '갤럭시북3 Ultra NT960XFG',
                        brand: '삼성전자',
                        specs: 'i7-13700H / 16GB / 1TB / RTX 4050 / Win11',
                        price: '1,499,000원',
                        rating: 4.0,
                        ratingCount: 42
                    },
                    {
                        name: 'LG 그램 16Z90R',
                        brand: 'LG전자',
                        specs: 'i5-1340P / 16GB / 256GB / Win11',
                        price: '1,249,000원',
                        originalPrice: '1,499,000원',
                        discount: '17%',
                        rating: 4.7,
                        ratingCount: 56
                    }
                ],
                '냉장고': [
                    {
                        name: '비스포크 4도어 냉장고 RF85A92B1AP',
                        brand: '삼성전자',
                        specs: '871L / 4도어 / 프리스탠딩',
                        price: '2,350,000원',
                        originalPrice: '2,800,000원',
                        discount: '16%',
                        rating: 4.6,
                        ratingCount: 92
                    },
                    {
                        name: 'LG 디오스 오브제컬렉션 냉장고',
                        brand: 'LG전자',
                        specs: '907L / 4도어 / 매직스페이스',
                        price: '2,450,000원',
                        originalPrice: '2,990,000원',
                        discount: '18%',
                        rating: 4.8,
                        ratingCount: 103
                    },
                    {
                        name: '클라윈드 일반형냉장고 FR-C141VW',
                        brand: '위니아',
                        specs: '138L / 2도어 / 미니',
                        price: '189,000원',
                        rating: 4.2,
                        ratingCount: 37
                    }
                ],
                '컴퓨터': [
                    {
                        name: '삼성전자 DM500TDA-A58A',
                        brand: '삼성전자',
                        specs: 'i5-13400 / 16GB / 512GB / Win11',
                        price: '879,000원',
                        originalPrice: '999,000원',
                        discount: '12%',
                        rating: 4.3,
                        ratingCount: 45
                    },
                    {
                        name: 'LG전자 퍼포먼스 데스크탑',
                        brand: 'LG전자',
                        specs: 'i7-13700 / 32GB / 1TB / RTX 4060 / Win11',
                        price: '1,590,000원',
                        rating: 4.5,
                        ratingCount: 28
                    }
                ],
                'TV': [
                    {
                        name: 'LG 올레드 에보 OLED65C3',
                        brand: 'LG전자',
                        specs: '65인치 / 4K UHD / 120Hz',
                        price: '2,490,000원',
                        originalPrice: '3,200,000원',
                        discount: '22%',
                        rating: 4.9,
                        ratingCount: 117
                    },
                    {
                        name: '삼성 네오 QLED 4K QN75QN90C',
                        brand: '삼성전자',
                        specs: '75인치 / 4K UHD / 120Hz',
                        price: '3,790,000원',
                        originalPrice: '4,500,000원',
                        discount: '16%',
                        rating: 4.7,
                        ratingCount: 86
                    }
                ],
                '세탁기': [
                    {
                        name: '그랑데 AI 세탁기 WF24T8500KV',
                        brand: '삼성전자',
                        specs: '24kg / 버블 / AI',
                        price: '1,190,000원',
                        originalPrice: '1,500,000원',
                        discount: '21%',
                        rating: 4.7,
                        ratingCount: 73
                    },
                    {
                        name: 'LG 트롬 세탁기 F24VDSD',
                        brand: 'LG전자',
                        specs: '24kg / 인공지능 / 스팀',
                        price: '1,290,000원',
                        originalPrice: '1,590,000원',
                        discount: '19%',
                        rating: 4.8,
                        ratingCount: 92
                    }
                ]
            };

            // 검색어에 따른 페이지 이동 설정
            const categoryPages = {
                '노트북': 'laptop.html',
                '냉장고': 'refrigerator.html',
                '컴퓨터': 'computer.html',
                'tv': 'tv.html',
                'TV': 'tv.html',
                '세탁기': 'washer.html'
            };

            // 상품 카드 HTML 생성 함수
            function createProductCard(product, isNew = false) {
                let badgeHTML = '';
                if (isNew) {
                    badgeHTML = '<div class="product-badge product-new">신상품</div>';
                } else if (product.discount) {
                    badgeHTML = '<div class="product-badge product-discount">특가</div>';
                }

                let originalPriceHTML = '';
                let discountHTML = '';
                if (product.originalPrice && product.discount) {
                    originalPriceHTML = `<span class="original-price">${product.originalPrice}</span>`;
                    discountHTML = `<span class="discount-percent">${product.discount}</span>`;
                }

                // 평점 별 생성
                const fullStars = Math.floor(product.rating);
                const halfStar = product.rating % 1 >= 0.5;
                let ratingHTML = '';

                for (let i = 0; i < 5; i++) {
                    if (i < fullStars) {
                        ratingHTML += '<i class="fas fa-star"></i>';
                    } else if (i === fullStars && halfStar) {
                        ratingHTML += '<i class="fas fa-star-half-alt"></i>';
                    } else {
                        ratingHTML += '<i class="far fa-star"></i>';
                    }
                }

                return `
    <div class="product-card">
        <div class="product-image">
            <img src="/api/placeholder/180/120" alt="${product.name}">
            ${badgeHTML}
            <div class="product-quick-actions">
                <button class="quick-action-button" title="빠른 보기" onclick="showQuickView()">
                    <i class="fas fa-eye"></i>
                </button>
                <button class="quick-action-button" title="비교 추가">
                    <i class="fas fa-exchange-alt"></i>
                </button>
                <button class="quick-action-button" title="찜하기">
                    <i class="far fa-heart"></i>
                </button>
            </div>
        </div>
        <div class="product-info">
            <div class="product-category">${product.brand}</div>
            <h3 class="product-name">${product.name}</h3>
            <div class="product-specs">${product.specs}</div>
            <div class="product-rating">
                <div class="rating">
                    ${ratingHTML}
                </div>
                <span class="rating-count">(${product.ratingCount})</span>
            </div>
            <div class="product-price">
                <span class="current-price">${product.price}</span>
                ${originalPriceHTML}
                ${discountHTML}
            </div>
            <div class="product-actions">
                <button class="action-button cart-button" onclick="showToast()">
                    <i class="fas fa-shopping-cart"></i>
                    장바구니
                </button>
                <button class="action-button wishlist-button">
                    <i class="far fa-heart"></i>
                </button>
            </div>
        </div>
    </div>
    `;
            }

            // 검색 기능 구현
            function handleSearch() {
                const searchInput = document.querySelector('.search-input');
                const searchTerm = searchInput.value.trim();

                if (searchTerm) {
                    // 지정된 키워드인 경우 해당 페이지로 이동
                    if (categoryPages[searchTerm]) {
                        window.location.href = categoryPages[searchTerm];
                    } else {
                        // 일반 검색 결과 페이지로 이동
                        window.location.href = `search.html?query=${encodeURIComponent(searchTerm)}`;
                    }
                }
            }

            // 카테고리별 상품 렌더링 함수
            function renderProductsByCategory(category) {
                const productGrid = document.querySelector('.product-grid');

                if (!productGrid) return;

                // 카테고리가 없거나 'all'인 경우 현재 표시된 상품 유지
                if (!category || category.toLowerCase() === 'all') {
                    return;
                }

                // 특정 카테고리 제품만 표시
                let categoryProducts = [];

                // 카테고리 이름 정규화(대소문자 무시, 앞뒤 공백 제거)
                const normalizedCategory = category.toLowerCase().trim();

                // 카테고리 검색
                for (const cat in productData) {
                    if (cat.toLowerCase() === normalizedCategory) {
                        categoryProducts = productData[cat];
                        break;
                    }
                }

                if (!categoryProducts || categoryProducts.length === 0) {
                    productGrid.innerHTML = '<p class="no-products" style="text-align: center; padding: 30px;">해당 카테고리에 상품이 없습니다.</p>';

                    // 결과 개수 업데이트
                    const resultsCount = document.querySelector('.results-count');
                    if (resultsCount) {
                        resultsCount.textContent = '0개';
                    }

                    return;
                }

                let productsHTML = '';
                categoryProducts.forEach((product, index) => {
                    productsHTML += createProductCard(product, index === 0);
                });

                productGrid.innerHTML = productsHTML;

                // 결과 개수 업데이트
                const resultsCount = document.querySelector('.results-count');
                if (resultsCount) {
                    resultsCount.textContent = `${categoryProducts.length}개`;
                }

                // 필터 적용 해제
                document.querySelectorAll('.filter-checkbox:checked').forEach(checkbox => {
                    checkbox.checked = false;
                });

                // no-filters 클래스 제거
                const resultsContainer = document.querySelector('.product-results');
                if (resultsContainer) {
                    resultsContainer.classList.remove('no-filters');
                }
            }

            // 개선된 상품 필터링 함수
            function filterProducts() {
                const searchTerm = document.getElementById('productSearch').value.trim().toLowerCase();

                if (!searchTerm) {
                    return;
                }

                // 카테고리 검색 시 해당 카테고리 제품 표시
                for (const category in productData) {
                    if (category.toLowerCase().includes(searchTerm)) {
                        renderProductsByCategory(category);
                        return;
                    }
                }

                // 특정 제품명 또는 브랜드 검색
                const productGrid = document.querySelector('.product-grid');
                let matchedProducts = [];

                // 모든 카테고리에서 검색어와 일치하는 제품 찾기
                for (const category in productData) {
                    productData[category].forEach(product => {
                        if (product.name.toLowerCase().includes(searchTerm) ||
                            product.brand.toLowerCase().includes(searchTerm) ||
                            product.specs.toLowerCase().includes(searchTerm)) {
                            matchedProducts.push(product);
                        }
                    });
                }

                if (matchedProducts.length === 0) {
                    productGrid.innerHTML = '<p class="no-products" style="text-align: center; padding: 30px;">검색 결과가 없습니다.</p>';

                    // 결과 개수 업데이트
                    const resultsCount = document.querySelector('.results-count');
                    if (resultsCount) {
                        resultsCount.textContent = '0개';
                    }

                    // no-filters 클래스 제거 (결과가 없어도 결과 영역은 표시)
                    const resultsContainer = document.querySelector('.product-results');
                    if (resultsContainer) {
                        resultsContainer.classList.remove('no-filters');
                    }

                    return;
                }

                let productsHTML = '';
                matchedProducts.forEach(product => {
                    productsHTML += createProductCard(product);
                });

                productGrid.innerHTML = productsHTML;

                // 결과 개수 업데이트
                const resultsCount = document.querySelector('.results-count');
                if (resultsCount) {
                    resultsCount.textContent = `${matchedProducts.length}개`;
                }

                // 필터 체크박스 해제
                document.querySelectorAll('.filter-checkbox:checked').forEach(checkbox => {
                    checkbox.checked = false;
                });

                // no-filters 클래스 제거
                const resultsContainer = document.querySelector('.product-results');
                if (resultsContainer) {
                    resultsContainer.classList.remove('no-filters');
                }
            }

            // 검색 버튼 클릭 이벤트
            document.getElementById('searchButton').addEventListener('click', handleSearch);

            // 검색창 엔터키 이벤트
            document.querySelector('.search-input').addEventListener('keypress', function (e) {
                if (e.key === 'Enter') {
                    handleSearch();
                }
            });

            // Toast Notification
            function showToast() {
                const toast = document.getElementById('toast');
                toast.classList.add('show');

                setTimeout(function () {
                    toast.classList.remove('show');
                }, 3000);
            }

            // Clear Search
            document.getElementById('searchClear').addEventListener('click', function () {
                const input = document.querySelector('.search-input');
                input.value = '';
                input.classList.remove('with-keyword');
                document.querySelector('.search-keyword').classList.remove('show');
                this.style.display = 'none';
            });

            // 검색창에 입력이 있을 때 X 버튼 표시
            document.querySelector('.search-input').addEventListener('input', function () {
                const clearButton = document.getElementById('searchClear');
                if (this.value.trim() !== '') {
                    clearButton.style.display = 'block';
                } else {
                    clearButton.style.display = 'none';
                }
            });

            // Quick View Modal
            function showQuickView() {
                document.getElementById('quickViewModal').classList.add('show');
            }

            document.getElementById('modalClose').addEventListener('click', function () {
                document.getElementById('quickViewModal').classList.remove('show');
            });

            // Grid/List View Toggle
            document.getElementById('gridView').addEventListener('click', function () {
                this.classList.add('active');
                document.getElementById('listView').classList.remove('active');
                document.querySelector('.product-results').classList.remove('product-list');
            });

            document.getElementById('listView').addEventListener('click', function () {
                this.classList.add('active');
                document.getElementById('gridView').classList.remove('active');
                document.querySelector('.product-results').classList.add('product-list');
            });

            // Filter Toggle
            const filterToggles = document.querySelectorAll('.filter-toggle');
            filterToggles.forEach(toggle => {
                toggle.addEventListener('click', function () {
                    const filterOptions = this.parentNode.nextElementSibling;
                    const icon = this.querySelector('i');

                    if (filterOptions.style.display === 'none') {
                        filterOptions.style.display = 'block';
                        icon.classList.remove('fa-chevron-down');
                        icon.classList.add('fa-chevron-up');
                    } else {
                        filterOptions.style.display = 'none';
                        icon.classList.remove('fa-chevron-up');
                        icon.classList.add('fa-chevron-down');
                    }
                });
            });

            // Remove Filter Tag
            const filterTags = document.querySelectorAll('.filter-tag');
            filterTags.forEach(tag => {
                tag.addEventListener('click', function () {
                    this.remove();
                });
            });

            // Format Price Inputs
            const priceInputs = document.querySelectorAll('.price-input');
            priceInputs.forEach(input => {
                input.addEventListener('blur', function () {
                    if (this.value === '') return;

                    let value = this.value.replace(/,/g, '');
                    if (isNaN(value)) {
                        value = 0;
                    }

                    this.value = parseInt(value).toLocaleString();
                });

                input.addEventListener('focus', function () {
                    this.value = this.value.replace(/,/g, '');
                });
            });

            // Price Slider
            const priceSlider = document.querySelector('.price-slider');
            priceSlider.addEventListener('input', function () {
                // Here you would update price ranges based on slider value
                console.log(this.value);
            });

            // Close modal when clicking outside
            window.addEventListener('click', function (event) {
                const modal = document.getElementById('quickViewModal');
                if (event.target === modal) {
                    modal.classList.remove('show');
                }
            });

            document.addEventListener('DOMContentLoaded', function () {
                // URL에서 검색어 매개변수 가져오기
                const urlParams = new URLSearchParams(window.location.search);
                const query = urlParams.get('query');
                initTheme();



                // 필터 체크박스에 이벤트 연결
                document.querySelectorAll('.filter-checkbox').forEach(checkbox => {
                    checkbox.addEventListener('change', applyFilters);
                });



                // 필터 체크박스에 이벤트 연결
                document.querySelectorAll('.filter-checkbox').forEach(checkbox => {
                    checkbox.addEventListener('change', applyFilters);
                });

                if (query) {
                    // 검색창에 검색어 표시
                    document.querySelector('.search-input').value = query;
                    document.querySelector('.search-keyword').textContent = query;
                    document.querySelector('.search-keyword').classList.add('show');
                    document.querySelector('.search-input').classList.add('with-keyword');
                    document.body.classList.add('has-search-query');
                    document.getElementById('searchClear').style.display = 'block';

                    // 검색 결과 제목 업데이트
                    const resultSummary = document.querySelector('.results-info');
                    if (resultSummary) {
                        resultSummary.innerHTML = `<span class="results-count">38개</span> '<span style="color: var(--primary);">${query}</span>'에 대한 검색 결과`;
                    }

                    // 브레드크럼 업데이트
                    const breadcrumbSpan = document.querySelector('.breadcrumb');
                    if (breadcrumbSpan) {
                        breadcrumbSpan.innerHTML = `
                <a href="#">홈</a>
                <span class="breadcrumb-separator">></span>
                <a href="#">검색</a>
                <span class="breadcrumb-separator">></span>
                <span>${query}</span>
            `;
                    }
                } else {
                    // 검색어가 없을 경우 필터 카운트 숨김
                    document.body.classList.remove('has-search-query');
                    showAllProducts();
                }

                // 페이지 초기 설정
                createCategoryPages();

                // 필터 검색 입력란과 버튼 이벤트 연결
                const productSearchInput = document.getElementById('productSearch');
                const productSearchBtn = document.getElementById('productSearchBtn');

                if (productSearchInput && productSearchBtn) {
                    // 검색 버튼 클릭 이벤트
                    productSearchBtn.addEventListener('click', filterProducts);

                    // 엔터키 이벤트
                    productSearchInput.addEventListener('keypress', function (e) {
                        if (e.key === 'Enter') {
                            filterProducts();
                        }
                    });
                }
            });

            // 필터 적용 함수 - 문제 해결 버전
            function applyFilters() {
                // 체크된 필터가 하나라도 있는지
                const anyChecked = document.querySelectorAll('.filter-checkbox:checked').length > 0;

                // 현재 표시된 모든 상품 카드
                const productCards = document.querySelectorAll('.product-card');

                // 필터가 선택되지 않은 경우 모든 상품 표시
                if (!anyChecked) {
                    // showAllProducts 함수를 호출하여 모든 상품 다시 로드
                    showAllProducts();
                    return;
                }

                // 가격 필터 체크
                const checkedPriceFilters = document.querySelectorAll('input[id^="price"]:checked');
                const priceRanges = Array.from(checkedPriceFilters).map(filter => {
                    const label = filter.nextElementSibling.textContent;

                    if (label.includes('미만')) {
                        const max = parseInt(label.replace(/[^0-9]/g, '')) * 10000;
                        return { min: 0, max };
                    } else if (label.includes('이상')) {
                        const min = parseInt(label.replace(/[^0-9]/g, '')) * 10000;
                        return { min, max: Infinity };
                    } else {
                        const [minStr, maxStr] = label.split('-');
                        const min = parseInt(minStr.replace(/[^0-9]/g, '')) * 10000;
                        const max = parseInt(maxStr.replace(/[^0-9]/g, '')) * 10000;
                        return { min, max };
                    }
                });

                // 브랜드 필터 체크
                const checkedBrandFilters = document.querySelectorAll('input[id^="brand"]:checked');
                const brands = Array.from(checkedBrandFilters).map(filter => {
                    return filter.nextElementSibling.textContent.toLowerCase();
                });

                // 평점 필터 체크
                const checkedRatingFilters = document.querySelectorAll('input[id^="rating"]:checked');
                const ratings = Array.from(checkedRatingFilters).map(filter => {
                    const label = filter.nextElementSibling.textContent;
                    const ratingMatch = label.match(/(\d+)점/);
                    return ratingMatch ? parseInt(ratingMatch[1]) : 0;
                });

                // 출시일 필터 체크
                const checkedDateFilters = document.querySelectorAll('input[id^="date"]:checked');
                const datePeriods = Array.from(checkedDateFilters).map(filter => {
                    const label = filter.nextElementSibling.textContent;
                    // 예: "최근 1개월", "최근 3개월" 등
                    const match = label.match(/최근\s+(\d+)개월/);
                    return match ? parseInt(match[1]) : 0;
                });

                let visibleCount = 0;

                // 각 상품에 필터 적용
                productCards.forEach(card => {
                    try {
                        // 가격 체크
                        const priceElement = card.querySelector('.current-price');
                        if (!priceElement) return;

                        const priceStr = priceElement.textContent;
                        const price = parseInt(priceStr.replace(/[^0-9]/g, ''));

                        // 가격 필터 적용
                        let matchesPrice = true;
                        if (priceRanges.length > 0) {
                            matchesPrice = priceRanges.some(range => price >= range.min && price <= range.max);
                        }

                        // 브랜드 체크
                        const brandElement = card.querySelector('.product-category');
                        if (!brandElement) return;

                        const brand = brandElement.textContent.toLowerCase();

                        // 브랜드 필터 적용
                        let matchesBrand = true;
                        if (brands.length > 0) {
                            matchesBrand = brands.some(b => brand.includes(b.toLowerCase()));
                        }

                        // 평점 체크
                        const ratingElement = card.querySelector('.rating');
                        if (!ratingElement) return;

                        // 별 개수로 평점 추정 (꽉 찬 별과 절반 별 계산)
                        const fullStars = card.querySelectorAll('.rating .fas.fa-star').length;
                        const halfStars = card.querySelectorAll('.rating .fas.fa-star-half-alt').length;
                        const rating = fullStars + (halfStars * 0.5);

                        // 평점 필터 적용
                        let matchesRating = true;
                        if (ratings.length > 0) {
                            matchesRating = ratings.some(r => rating >= r);
                        }

                        // 출시일 체크 (더미 데이터이므로 20% 확률로 최근 1개월, 40% 확률로 최근 3개월, 60% 확률로 최근 6개월, 100% 확률로 최근 1년)
                        // 카드마다 일관된 결과를 위해 상품명을 시드로 사용
                        const productName = card.querySelector('.product-name').textContent;
                        const nameSum = [...productName].reduce((sum, char) => sum + char.charCodeAt(0), 0);
                        const random = (nameSum % 100) / 100; // 0~1 사이 값

                        const isWithin1Month = random < 0.2;
                        const isWithin3Months = random < 0.4;
                        const isWithin6Months = random < 0.6;
                        const isWithin1Year = true; // 모두 1년 이내로 가정

                        // 출시일 필터 적용
                        let matchesDate = true;
                        if (datePeriods.length > 0) {
                            matchesDate = false; // 기본값 false로 설정

                            for (const period of datePeriods) {
                                if (period === 1 && isWithin1Month) {
                                    matchesDate = true;
                                    break;
                                } else if (period === 3 && isWithin3Months) {
                                    matchesDate = true;
                                    break;
                                } else if (period === 6 && isWithin6Months) {
                                    matchesDate = true;
                                    break;
                                } else if (period === 12 && isWithin1Year) {
                                    matchesDate = true;
                                    break;
                                }
                            }
                        }

                        // 모든 필터 조건을 만족하는지
                        const matches = matchesPrice && matchesBrand && matchesRating && matchesDate;

                        // 표시 여부 설정
                        card.style.display = matches ? '' : 'none';

                        if (matches) {
                            visibleCount++;
                        }
                    } catch (e) {
                        console.error("필터 적용 중 오류 발생:", e);
                        card.style.display = ''; // 오류 발생 시 기본적으로 표시
                    }
                });

                // 결과 개수 업데이트
                const resultsCount = document.querySelector('.results-count');
                if (resultsCount) {
                    resultsCount.textContent = `${visibleCount}개`;
                }

                // 결과가 없는 경우 메시지 표시
                if (visibleCount === 0) {
                    const productGrid = document.querySelector('.product-grid');
                    if (productGrid && !productGrid.querySelector('.no-products')) {
                        const noResultsElement = document.createElement('p');
                        noResultsElement.className = 'no-products';
                        noResultsElement.style.textAlign = 'center';
                        noResultsElement.style.padding = '30px';
                        noResultsElement.textContent = '선택한 필터 조건에 맞는 상품이 없습니다.';

                        // 기존 내용 삭제 후 메시지 추가
                        productGrid.innerHTML = '';
                        productGrid.appendChild(noResultsElement);
                    }
                } else {
                    // 메시지 제거
                    const noProducts = document.querySelector('.no-products');
                    if (noProducts) {
                        noProducts.remove();
                    }
                }
            }

            // 각 카테고리 페이지를 위한 내용 로드 함수
            function createCategoryPages() {
                // 각 카테고리 페이지를 생성하는 함수
                function createCategoryPage(category, title, description) {
                    const page = document.createElement('div');
                    page.id = `${category}-page`;
                    page.innerHTML = `
            <h1>${title} 카테고리</h1>
            <p>${description}</p>
            <div class="category-products">
                <!-- 여기에 상품 목록이 들어갑니다 -->
            </div>
        `;

                    // 실제 구현에서는 페이지를 서버에 저장하거나 동적으로 생성할 수 있습니다.
                    console.log(`${category} 페이지 생성됨`);
                }

                // 각 카테고리 페이지 생성
                createCategoryPage('notebook', '노트북', '다양한 브랜드의 최신 노트북을 만나보세요.');
                createCategoryPage('refrigerator', '냉장고', '에너지 효율이 높은 다양한 냉장고 제품을 확인하세요.');
                createCategoryPage('computer', '컴퓨터', '고성능 데스크톱 컴퓨터와 부품을 쇼핑하세요.');
                createCategoryPage('tv', 'TV', '선명한 화질의 스마트 TV로 홈엔터테인먼트를 즐기세요.');
                createCategoryPage('washer', '세탁기', '에너지 절약형 세탁기로 세탁을 더 효율적으로 하세요.');
            }

            // URL 쿼리 파라미터 처리 함수
            function handleQueryParameter(query) {
                // 카테고리 페이지로 리다이렉트할지 검사
                for (const [category, url] of Object.entries(categoryPages)) {
                    if (query.toLowerCase() === category.toLowerCase()) {
                        console.log(`리다이렉트: ${url}`);
                        // 실제 구현에서는 실제 URL로 리다이렉트합니다
                        // window.location.href = url;
                        return;
                    }
                }

                // 카테고리가 아닌 일반 검색어인 경우
                console.log(`검색 실행: ${query}`);
                // 여기서 실제 검색 결과를 표시하는 로직을 구현합니다
            }
            // 모든 카테고리의 상품을 함께 표시하는 함수
            function showAllProducts() {
                const productGrid = document.querySelector('.product-grid');
                if (!productGrid) return;

                let allProducts = [];

                // 각 카테고리에서 최대 5개의 상품만 선택
                for (const category in productData) {
                    // 해당 카테고리의 상품 중 최대 5개만 선택
                    const categoryProducts = productData[category].slice(0, 5);

                    // 선택된 상품에 카테고리 정보 추가
                    categoryProducts.forEach(product => {
                        allProducts.push({
                            ...product,
                            category: category
                        });
                    });
                }

                // 상품을 랜덤하게 섞어서 다양한 카테고리가 고르게 표시되도록
                allProducts.sort(() => Math.random() - 0.5);

                let productsHTML = '';
                allProducts.forEach((product, index) => {
                    // 신상품 태그는 5개 제품마다 하나씩 표시
                    const isNew = index % 5 === 0;
                    productsHTML += createProductCard(product, isNew);
                });

                productGrid.innerHTML = productsHTML;

                // 결과 개수 업데이트
                const resultsCount = document.querySelector('.results-count');
                if (resultsCount) {
                    resultsCount.textContent = `${allProducts.length}개`;
                }

                // 필터 초기화
                document.querySelectorAll('.filter-checkbox:checked').forEach(checkbox => {
                    checkbox.checked = false;
                });

                // no-filters 클래스 제거
                const resultsContainer = document.querySelector('.product-results');
                if (resultsContainer) {
                    resultsContainer.classList.remove('no-filters');
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
        </script>
</body>

</html>