<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 쇼핑의 모든 것</title>
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

        /* Hero Banner Slider */
        .hero-slider {
            position: relative;
            overflow: hidden;
            height: 300px;
            background-color: var(--gray-light);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            margin-bottom: 40px;
        }

        /* 각 .slide 를 flex 항목으로 만듭니다 */
        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;

            /* 기본은 보이지 않음 */
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        /* 플레이스홀더 텍스트 스타일 */
        .banner-placeholder {
            font-size: 36px;
            font-weight: 500;
            color: var(--gray);
            user-select: none;
        }

        .slide.active {
            opacity: 1;
        }

        .slide-content {
            width: 50%;
        }

        .slide-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .slide-description {
            font-size: 16px;
            margin-bottom: 20px;
            color: var(--dark);
            opacity: 0.8;
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
            position: absolute;
            right: 50px;
            bottom: 50px;
        }

        .survey-button:hover {
            background-color: var(--primary-dark);
            transform: scale(1.05);
        }

        .slide-controls {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
        }

        .slide-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: var(--white);
            opacity: 0.5;
            cursor: pointer;
            transition: var(--transition);
        }

        .slide-dot.active {
            opacity: 1;
            transform: scale(1.2);
        }

        .slide-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background-color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0.7;
            transition: var(--transition);
            z-index: 10;
        }

        .slide-arrow:hover {
            opacity: 1;
            transform: translateY(-50%) scale(1.1);
        }

        .slide-arrow.prev {
            left: 15px;
        }

        .slide-arrow.next {
            right: 15px;
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

        /* Recently viewed sidebar */
        .recently-viewed {
            position: fixed;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            width: 60px;
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 15px 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            z-index: 900;
        }

        .recently-viewed-title {
            font-size: 12px;
            font-weight: 500;
            text-align: center;
            margin-bottom: 5px;
        }

        .recently-viewed-item {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--gray);
            overflow: hidden;
            cursor: pointer;
            transition: var(--transition);
            border: 2px solid transparent;
        }

        .recently-viewed-item:hover {
            transform: scale(1.1);
            border-color: var(--primary);
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

        .floating-compare-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--primary);
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 999;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .floating-compare-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.25);
        }

        .compare-counter {
            background-color: white;
            color: var(--primary);
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
        }

        .floating-compare-button button {
            background: none;
            border: none;
            color: white;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            cursor: pointer;
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

            .recently-viewed {
                display: none;
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

            .slide-content {
                width: 100%;
            }

            .slide-title {
                font-size: 24px;
            }

            .survey-button {
                bottom: 20px;
                right: 20px;
            }

            .header {
                flex-wrap: wrap;
            }

            .search-container {
                order: 3;
                margin: 10px 0 0;
                max-width: 100%;
            }

            #recentlyViewed {
                cursor: pointer;
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

    <?php 
        include 'header.php'; 
    ?>

    <!-- Main content section -->
    <div class="main-content">
        <!-- Sidebar with categories -->
        <div class="sidebar">
            <a href="computer.php" class="category-item">
                <div class="category-icon">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="category-name">컴퓨터</div>
            </a>
            <!-- 세탁기 -->
            <a href="washer.php" class="category-item">
                <div class="category-icon">
                    <i class="fas fa-tshirt"></i>
                </div>
                <div class="category-name">세탁기</div>
            </a>

            <!-- TV -->
            <a href="tv.php" class="category-item">
                <div class="category-icon">
                    <i class="fas fa-tv"></i>
                </div>
                <div class="category-name">TV</div>
            </a>

            <!-- 스마트폰 -->
            <a href="laptop.php" class="category-item">
                <div class="category-icon">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="category-name">노트북</div>
            </a>
        </div>

        <!-- Content area -->
        <div class="content-area">
            <!-- 추천 상품 섹션 -->
            <div class="section-header">
                <h2 class="section-title">가장 인기있는 상품</h2>
                <a href="popularproducts.html" class="section-link">더보기 <i class="fas fa-chevron-right"></i></a>
            </div>

            <div class="product-grid">
                <!-- 상품 1 - 재고 있음 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/static/img/laptop/2.png" alt="">
                        <div class="product-quick-actions">
                            <button class="quick-action-btn wishlist-toggle" data-product-id="2"
                                data-product-name="삼성전자 갤럭시북4" aria-label="위시리스트에 추가">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="window.location.href='product_details.php?category=products_laptop&id=2'" aria-label="상품 상세보기">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">삼성전자 갤럭시북4</h3>
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
                            <span>738,000원</span>
                        </div>
                    </div>
                    <button class="cart-button" onclick=""
                        aria-label="장바구니에 추가">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>

                <!-- 상품 2 - 재고 있음 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/static/img/laptop/25.png" alt="">
                        <div class="product-quick-actions">
                            <button class="quick-action-btn wishlist-toggle" data-product-id="2"
                                data-product-name="ASUS 비보북 16" aria-label="위시리스트에 추가">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="window.location.href='product_details.php?category=products_laptop&id=25'" aria-label="상품 상세보기">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">ASUS 비보북 16</h3>
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
                            <span>999,000원</span>
                        </div>
                    </div>
                    <button class="cart-button" onclick=""
                        aria-label="장바구니에 추가">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>

                <!-- 상품 3 - 재고 있음 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/static/img/laptop/32.png" alt="">
                        <div class="product-quick-actions">
                            <button class="quick-action-btn wishlist-toggle" data-product-id="2"
                                data-product-name="LG전자 2024 그램15" aria-label="위시리스트에 추가">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="window.location.href='product_details.php?category=products_laptop&id=32'" aria-label="상품 상세보기">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">LG전자 2024 그램15</h3>
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
                            <span>1,430,000원</span>
                        </div>
                    </div>
                    <button class="cart-button" onclick=""
                        aria-label="장바구니에 추가">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="/static/img/laptop/2.png" alt="">
                        <div class="product-quick-actions">
                            <button class="quick-action-btn wishlist-toggle" data-product-id="2"
                                data-product-name="삼성전자 갤럭시북3 프로" aria-label="위시리스트에 추가">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="window.location.href='product_details.php?category=products_laptop&id=33'" aria-label="상품 상세보기">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">삼성전자 갤럭시북3 프로</h3>
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
                            <span>1,579,000원</span>
                        </div>
                    </div>
                    <button class="cart-button" onclick=""
                        aria-label="장바구니에 추가">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>

            <!-- 신제품 섹션 -->
            <div class="section-header">
                <h2 class="section-title">신제품</h2>
                <a href="newproduct.html" class="section-link">더보기 <i class="fas fa-chevron-right"></i></a>
            </div>

            <div class="product-grid">
                <!-- 상품 1 - 재고 있음 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/static/img/computer/8.png" alt="">
                        <div class="product-quick-actions">
                            <button class="quick-action-btn wishlist-toggle" data-product-id="8"
                                data-product-name="중급 게이밍 PC" aria-label="위시리스트에 추가">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="window.location.href='product_details.php?category=products_PC&id=8'" aria-label="상품 상세보기">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">중급 게이밍 PC</h3>
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
                            <span>1,250,000원</span>
                        </div>
                    </div>
                    <button class="cart-button" onclick=""
                        aria-label="장바구니에 추가">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>

                <!-- 상품 2 - 재고 있음 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/static/img/computer/16.png" alt="">
                        <div class="product-quick-actions">
                            <button class="quick-action-btn wishlist-toggle" data-product-id="16"
                                data-product-name="트위치 방송용 PC" aria-label="위시리스트에 추가">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="window.location.href='product_details.php?category=products_PC&id=16'" aria-label="상품 상세보기">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">트위치 방송용 PC</h3>
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
                            <span>1,850,000원</span>
                        </div>
                    </div>
                    <button class="cart-button" onclick=""
                        aria-label="장바구니에 추가">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>

                <!-- 상품 3 - 재고 있음 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/static/img/tv/3.png" alt="">
                        <div class="product-quick-actions">
                            <button class="quick-action-btn wishlist-toggle" data-product-id="3"
                                data-product-name="삼성전자 SMART M7" aria-label="위시리스트에 추가">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="window.location.href='product_details.php?category=products_TV&id=3'" aria-label="상품 상세보기">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">삼성전자 SMART M7</h3>
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
                            <span>623,140원</span>
                        </div>
                    </div>
                    <button class="cart-button" onclick=""
                        aria-label="장바구니에 추가">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>

                <!-- 상품 4 - 재고 있음 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="/static/img/tv/5.png" alt="">
                        <div class="product-quick-actions">
                            <button class="quick-action-btn wishlist-toggle" data-product-id="5"
                                data-product-name="LG전자 울트라HD" aria-label="위시리스트에 추가">
                                <i class="fas fa-heart"></i>
                            </button>
                            <button class="quick-action-btn"
                                onclick="window.location.href='product_details.php?category=products_TV&id=5'" aria-label="상품 상세보기">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-details">
                        <h3 class="product-title">LG전자 울트라HD</h3>
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
                            <span>1,072,620원</span>
                        </div>
                    </div>
                    <button class="cart-button" onclick=""
                        aria-label="장바구니에 추가">
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>            
        </div>
    </div>

    <!-- Recently viewed sidebar -->
    <div class="recently-viewed" id="recentlyViewed">
        <div class="recently-viewed-title">최근 본 상품</div>
        <div class="recently-viewed-item">
            <img src="/api/placeholder/40/40" alt="Recent item">
        </div>
        <div class="recently-viewed-item">
            <img src="/api/placeholder/40/40" alt="Recent item">
        </div>
        <div class="recently-viewed-item">
            <img src="/api/placeholder/40/40" alt="Recent item">
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

    <!-- 비교하기 버튼 -->
    <div class="floating-compare-button" id="compareButton" style="display: none;">
        <span class="compare-counter" id="compareCounter">0</span>
        <button onclick="goToComparePage()" aria-label="상품 비교하기">
            <i class="fas fa-exchange-alt"></i>
            비교하기
        </button>
    </div>

    <script>
        // DOM이 로드되면 실행
        document.addEventListener('DOMContentLoaded', function () {
            // 테마 관련 초기화
            initTheme();

            // 위시리스트 관련 초기화
            initWishlist();

            // 스크롤 이벤트 리스너
            window.addEventListener('scroll', handleScroll);

            // 슬라이더 초기화
            initSlider();

            // 비교 카운터 업데이트
            updateCompareCounter();

            // 위시리스트 토글 버튼 이벤트 설정
            setupWishlistToggleButtons();

            // 검색 기능 초기화
            initSearch();
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

        // 슬라이더 초기화
        function initSlider() {
            let currentSlide = 0;
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slide-dot');
            const prevBtn = document.querySelector('.slide-arrow.prev');
            const nextBtn = document.querySelector('.slide-arrow.next');

            function showSlide(index) {
                // 현재 슬라이드 숨기기
                slides[currentSlide].classList.remove('active');
                dots[currentSlide].classList.remove('active');

                // 현재 슬라이드 인덱스 업데이트
                currentSlide = (index + slides.length) % slides.length;

                // 새 슬라이드 표시
                slides[currentSlide].classList.add('active');
                dots[currentSlide].classList.add('active');
            }

            // 다음 슬라이드 버튼
            nextBtn.addEventListener('click', function () {
                showSlide(currentSlide + 1);
            });

            // 이전 슬라이드 버튼
            prevBtn.addEventListener('click', function () {
                showSlide(currentSlide - 1);
            });

            // 도트 표시기
            dots.forEach((dot, index) => {
                dot.addEventListener('click', function () {
                    showSlide(index);
                });
            });

            // 자동 슬라이드
            setInterval(function () {
                showSlide(currentSlide + 1);
            }, 5000);
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

            // 비교 카운터 업데이트
            updateCompareCounter();
        }

        // 비교 카운터 업데이트
        function updateCompareCounter() {
            const compareList = JSON.parse(localStorage.getItem('compareList')) || [];
            const compareCounter = document.getElementById('compareCounter');

            if (compareCounter) {
                compareCounter.textContent = compareList.length;

                // 비교 목록이 있으면 비교 버튼 표시
                const compareButton = document.getElementById('compareButton');
                if (compareButton) {
                    compareButton.style.display = compareList.length > 0 ? 'flex' : 'none';
                }
            }
        }

        // 비교 페이지로 이동
        function goToComparePage() {
            const compareList = JSON.parse(localStorage.getItem('compareList')) || [];

            // 최소 2개 이상의 상품이 있어야 비교 가능
            if (compareList.length < 2) {
                showToast('비교하려면 최소 2개 이상의 상품을 선택해야 합니다.');
                return;
            }

            // 비교 페이지로 이동 (상품 ID를 URL 매개변수로 전달)
            const productIds = compareList.map(item => item.id).join(',');
            window.location.href = `product_comparison.html?products=${productIds}`;
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

            /*
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
            */


            /*
            // 검색창 포커스 이벤트
            searchInput.addEventListener('focus', function () {
                const query = this.value.toLowerCase().trim();

                if (query.length > 0) {
                    const filteredSuggestions = searchSuggestions.filter(item =>
                        item.toLowerCase().includes(query)
                    );
                    showSuggestions(filteredSuggestions, query);
                } else if (recentSearches.length > 0) {
                    showRecentSearches();
                }
            });
            */
            const input = document.getElementById('searchInput');
            if (input) {
                input.addEventListener('click', () => {
                    window.location.href = 'search_results.html';
                });
            }

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
            document.getElementById('recentlyViewed').addEventListener('click', function () {
                window.location.href = 'recent_products.html';
            });
        }
    </script>
</body>

</html>