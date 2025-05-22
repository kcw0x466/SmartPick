<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 장바구니</title>
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

            /* 장바구니 페이지 기존 변수 */
            --text-light: #767676;
            --radius: 8px;
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
            background-color: var(--gray-light);
            color: var(--text);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header styles - Sticky (메인 홈페이지 스타일) */
        header {
            padding: 15px 0;
            border-bottom: 1px solid var(--border-color);
            background-color: var(--header-bg);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: var(--transition);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        /* 이하는 기존 장바구니 페이지 스타일 유지 */

        /* Checkout Progress */
        .checkout-progress {
            margin: 30px 0;
            display: flex;
            justify-content: center;
        }

        .progress-step {
            display: flex;
            align-items: center;
            color: var(--gray-dark);
        }

        .step-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: var(--gray);
            color: var(--text);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 10px;
        }

        .progress-step.active {
            color: var(--primary);
        }

        .progress-step.active .step-number {
            background-color: var(--primary);
            color: white;
        }

        .progress-line {
            width: 80px;
            height: 2px;
            background-color: var(--gray);
            margin: 0 15px;
        }

        /* Main Content */
        .main-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            margin-bottom: 50px;
        }

        /* Cart Items */
        .cart-section {
            background-color: var(--white);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 25px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--gray);
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .item-count {
            font-size: 14px;
            color: var(--primary);
            font-weight: 600;
        }

        .selection-controls {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .select-all {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 14px;
        }

        .select-all input {
            width: 16px;
            height: 16px;
        }

        .delete-selected {
            font-size: 13px;
            color: var(--text-light);
            border: none;
            background: none;
            cursor: pointer;
        }

        .delete-selected:hover {
            color: var(--primary);
        }

        .cart-items {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .cart-item {
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--gray);
        }

        .item-checkbox {
            display: flex;
            align-items: center;
        }

        .item-checkbox input {
            width: 18px;
            height: 18px;
        }

        .item-info {
            display: flex;
            gap: 20px;
        }

        .item-image {
            width: 100px;
            height: 100px;
            background-color: var(--gray-light);
            border-radius: 6px;
            overflow: hidden;
        }

        .item-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .item-details {
            flex: 1;
        }

        .item-name {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .item-option {
            font-size: 13px;
            color: var(--text-light);
            margin-bottom: 10px;
        }

        .item-spec {
            font-size: 13px;
            color: var(--text-light);
            margin-bottom: 10px;
        }

        .stock-status {
            display: inline-block;
            font-size: 12px;
            padding: 2px 8px;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .in-stock {
            color: #28a745;
            background-color: #e3f9e7;
        }

        .low-stock {
            color: #ffc107;
            background-color: #fff8e6;
        }

        .item-actions {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }

        .save-for-later,
        .remove-item {
            background: none;
            border: none;
            font-size: 13px;
            color: var(--text-light);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .save-for-later:hover,
        .remove-item:hover {
            color: var(--primary);
        }

        .item-price {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 10px;
        }

        .price-details {
            text-align: right;
        }

        .current-price {
            font-weight: 600;
            font-size: 16px;
        }

        .original-price {
            font-size: 13px;
            color: var(--text-light);
            text-decoration: line-through;
        }

        .discount-rate {
            font-size: 12px;
            color: var(--primary);
            font-weight: 600;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
            border: 1px solid var(--gray);
            border-radius: 4px;
            overflow: hidden;
        }

        .quantity-button {
            width: 28px;
            height: 28px;
            border: none;
            background-color: var(--gray-light);
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quantity-button:hover {
            background-color: var(--gray);
        }

        .quantity-input {
            width: 40px;
            height: 28px;
            border: none;
            text-align: center;
            font-size: 14px;
        }

        .quantity-input:focus {
            outline: none;
        }

        .continue-shopping {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 20px;
            color: var(--text);
            text-decoration: none;
            font-size: 14px;
        }

        .continue-shopping:hover {
            color: var(--primary);
        }

        /* Order Summary */
        .summary-section {
            background-color: var(--white);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 25px;
            height: fit-content;
            position: sticky;
            top: 80px;
        }

        .summary-section .section-title {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--gray);
        }

        .summary-items {
            margin-bottom: 25px;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            font-size: 14px;
        }

        .summary-label {
            color: var(--text-light);
        }

        .summary-value {
            font-weight: 500;
        }

        .summary-total {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .summary-points {
            font-size: 13px;
            color: var(--text-light);
            margin-bottom: 5px;
            text-align: right;
        }

        .points-value {
            color: var(--primary);
            font-weight: 500;
        }

        .expected-delivery {
            margin: 15px 0;
            padding: 12px;
            background-color: var(--gray-light);
            border-radius: 6px;
            font-size: 13px;
        }

        .delivery-date {
            font-weight: 600;
        }

        .checkout-button {
            width: 100%;
            padding: 15px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            margin-bottom: 15px;
        }

        .checkout-button:hover {
            background-color: var(--primary-dark);
        }

        .payment-methods {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
        }

        .payment-icon {
            width: 40px;
            height: 25px;
            object-fit: contain;
            opacity: 0.7;
        }

        .coupon-section {
            margin: 20px 0;
            padding-top: 20px;
            border-top: 1px solid var(--gray);
        }

        .coupon-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .coupon-form {
            display: flex;
            gap: 8px;
        }

        .coupon-input {
            flex: 1;
            padding: 10px;
            border: 1px solid var(--gray);
            border-radius: 4px;
            font-size: 14px;
        }

        .coupon-input:focus {
            outline: none;
            border-color: var(--primary);
        }

        .coupon-button {
            padding: 8px 15px;
            background-color: var(--gray-light);
            border: 1px solid var(--gray);
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }

        .coupon-button:hover {
            background-color: var(--gray);
        }

        .security-info {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            margin-top: 15px;
            font-size: 12px;
            color: var(--text-light);
        }

        /* Recommendations */
        .recommendations {
            margin: 40px 0;
        }

        .recommendations-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .recommendation-items {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
        }

        .recommendation-item {
            background-color: var(--white);
            border-radius: var(--radius);
            overflow: hidden;
            transition: var(--transition);
        }

        .recommendation-item:hover {
            box-shadow: var(--shadow);
            transform: translateY(-5px);
        }

        .recommendation-image {
            height: 180px;
            background-color: var(--gray-light);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .recommendation-image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .recommendation-details {
            padding: 15px;
        }

        .recommendation-name {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .recommendation-price {
            font-size: 16px;
            font-weight: 600;
            color: var(--primary);
        }

        /* Toast Notification */
        .toast {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--dark);
            color: white;
            padding: 12px 25px;
            border-radius: 4px;
            font-size: 14px;
            z-index: 1000;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .toast.show {
            opacity: 1;
            transform: translateY(0);
        }

        .undo-link {
            color: var(--primary-light);
            text-decoration: underline;
            cursor: pointer;
            margin-left: 10px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .main-content {
                grid-template-columns: 1fr;
            }

            .summary-section {
                position: static;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .search-container {
                display: none;
            }

            .checkout-progress {
                overflow-x: auto;
                padding-bottom: 10px;
            }

            .progress-line {
                width: 40px;
            }

            .cart-item {
                grid-template-columns: 1fr;
            }

            .item-checkbox {
                position: absolute;
                top: 10px;
                left: 10px;
                z-index: 10;
            }

            .item-price {
                align-items: flex-start;
                margin-top: 10px;
            }

            .recommendation-items {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>

<body>
    <!-- Toast notification -->
    <div class="toast" id="toast">
        <i class="fas fa-check-circle"></i>
        <span>상품이 삭제되었습니다.</span>
        <span class="undo-link">실행 취소</span>
    </div>

    <!-- Header section - Sticky (수정된 부분) -->
    <header id="header">
        <div class="container">
            <div class="header-content">
                <div class="logo" onclick="window.location.href='mainpage.html'">
                    <div class="logo-box">스마<br>트픽</div>
                    <span>스마트픽</span>
                </div>
                <div class="search-container">
                    <input type="text" class="search-bar" id="searchBar" name="query" placeholder="찾으시는 상품을 검색해보세요"
                        readonly>
                    <button type="button" class="search-icon" id="searchIcon">
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
            </div>
        </div>
    </header>

    <div class="container">
        <!-- Checkout Progress -->
        <div class="checkout-progress">
            <div class="progress-step active">
                <div class="step-number">1</div>
                <span>장바구니</span>
            </div>
            <div class="progress-line"></div>
            <div class="progress-step">
                <div class="step-number">2</div>
                <span>배송 정보</span>
            </div>
            <div class="progress-line"></div>
            <div class="progress-step">
                <div class="step-number">3</div>
                <span>결제</span>
            </div>
            <div class="progress-line"></div>
            <div class="progress-step">
                <div class="step-number">4</div>
                <span>주문 완료</span>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Cart Items -->
            <div class="cart-section">
                <div class="section-header">
                    <h2 class="section-title">
                        장바구니
                        <span class="item-count">총 3개</span>
                    </h2>
                    <div class="selection-controls">
                        <label class="select-all">
                            <input type="checkbox" checked id="selectAll">
                            <span>전체 선택</span>
                        </label>
                        <button class="delete-selected">선택 삭제</button>
                    </div>
                </div>

                <div class="cart-items">
                    <!-- Item 1 -->
                    <div class="cart-item">
                        <div class="item-checkbox">
                            <input type="checkbox" checked>
                        </div>
                        <div class="item-info">
                            <div class="item-image">
                                <img src="/api/placeholder/100/100" alt="Product">
                            </div>
                            <div class="item-details">
                                <div class="item-name">스마트픽 울트라북 X15</div>
                                <div class="item-option">옵션: 스페이스 그레이, 512GB SSD</div>
                                <div class="item-spec">Intel Core i7, 16GB RAM, Win11 Home</div>
                                <span class="stock-status in-stock">재고 있음 (5개)</span>
                                <div class="item-actions">
                                    <button class="save-for-later">
                                        <i class="far fa-bookmark"></i>
                                        나중에 구매
                                    </button>
                                    <button class="remove-item" onclick="showToast()">
                                        <i class="far fa-trash-alt"></i>
                                        삭제
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="item-price">
                            <div class="price-details">
                                <div class="current-price">1,290,000원</div>
                                <div class="original-price">1,490,000원</div>
                                <div class="discount-rate">13% 할인</div>
                            </div>
                            <div class="quantity-selector">
                                <button class="quantity-button" onclick="decreaseQuantity(this)">-</button>
                                <input type="text" class="quantity-input" value="1" min="1" max="5">
                                <button class="quantity-button" onclick="increaseQuantity(this)">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="cart-item">
                        <div class="item-checkbox">
                            <input type="checkbox" checked>
                        </div>
                        <div class="item-info">
                            <div class="item-image">
                                <img src="/api/placeholder/100/100" alt="Product">
                            </div>
                            <div class="item-details">
                                <div class="item-name">프리미엄 노트북 파우치</div>
                                <div class="item-option">옵션: 블랙, 15인치</div>
                                <div class="item-spec">방수 소재, 충격 보호, 수납 포켓 3개</div>
                                <span class="stock-status in-stock">재고 있음 (12개)</span>
                                <div class="item-actions">
                                    <button class="save-for-later">
                                        <i class="far fa-bookmark"></i>
                                        나중에 구매
                                    </button>
                                    <button class="remove-item" onclick="showToast()">
                                        <i class="far fa-trash-alt"></i>
                                        삭제
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="item-price">
                            <div class="price-details">
                                <div class="current-price">39,000원</div>
                            </div>
                            <div class="quantity-selector">
                                <button class="quantity-button" onclick="decreaseQuantity(this)">-</button>
                                <input type="text" class="quantity-input" value="1" min="1">
                                <button class="quantity-button" onclick="increaseQuantity(this)">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="cart-item">
                        <div class="item-checkbox">
                            <input type="checkbox" checked>
                        </div>
                        <div class="item-info">
                            <div class="item-image">
                                <img src="/api/placeholder/100/100" alt="Product">
                            </div>
                            <div class="item-details">
                                <div class="item-name">무선 블루투스 마우스</div>
                                <div class="item-option">옵션: 그레이</div>
                                <div class="item-spec">무선, 블루투스 5.0, 충전식 배터리</div>
                                <span class="stock-status low-stock">재고 부족 (2개)</span>
                                <div class="item-actions">
                                    <button class="save-for-later">
                                        <i class="far fa-bookmark"></i>
                                        나중에 구매
                                    </button>
                                    <button class="remove-item" onclick="showToast()">
                                        <i class="far fa-trash-alt"></i>
                                        삭제
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="item-price">
                            <div class="price-details">
                                <div class="current-price">29,000원</div>
                                <div class="original-price">35,000원</div>
                                <div class="discount-rate">17% 할인</div>
                            </div>
                            <div class="quantity-selector">
                                <button class="quantity-button" onclick="decreaseQuantity(this)">-</button>
                                <input type="text" class="quantity-input" value="1" min="1" max="2">
                                <button class="quantity-button" onclick="increaseQuantity(this)">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#" class="continue-shopping">
                    <i class="fas fa-arrow-left"></i>
                    쇼핑 계속하기
                </a>
            </div>

            <!-- Order Summary -->
            <div class="summary-section">
                <h2 class="section-title">주문 요약</h2>

                <div class="summary-items">
                    <div class="summary-item">
                        <span class="summary-label">상품 금액</span>
                        <span class="summary-value">1,358,000원</span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label">상품 할인</span>
                        <span class="summary-value">-206,000원</span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label">배송비</span>
                        <span class="summary-value">무료</span>
                    </div>
                </div>

                <div class="summary-total">
                    <div class="summary-item">
                        <span class="summary-label">총 결제 금액</span>
                        <span class="summary-value">1,152,000원</span>
                    </div>
                </div>

                <div class="summary-points">
                    구매 시 <span class="points-value">11,520P</span> 적립 예정
                </div>

                <div class="expected-delivery">
                    <i class="fas fa-truck"></i>
                    <span class="delivery-date">3월 8일 화요일</span> 도착 예정
                </div>

                <div class="coupon-section">
                    <div class="coupon-title">쿠폰 적용</div>
                    <div class="coupon-form">
                        <input type="text" class="coupon-input" placeholder="쿠폰 코드 입력">
                        <button class="coupon-button">적용</button>
                    </div>
                </div>

                <button class="checkout-button" onclick="window.location.href='delivery-information.html'">결제하기</button>

                <div class="payment-methods">
                    <img src="/api/placeholder/40/25?text=카드" class="payment-icon" alt="Credit Card">
                    <img src="/api/placeholder/40/25?text=네이버" class="payment-icon" alt="Naver Pay">
                    <img src="/api/placeholder/40/25?text=카카오" class="payment-icon" alt="Kakao Pay">
                    <img src="/api/placeholder/40/25?text=페이" class="payment-icon" alt="Pay">
                </div>

                <div class="security-info">
                    <i class="fas fa-lock"></i>
                    안전한 결제를 위해 SSL 암호화 및 보안 인증을 사용합니다.
                </div>
            </div>
        </div>

        <!-- Recommendations -->
        <div class="recommendations">
            <h3 class="recommendations-title">함께 구매하면 좋은 상품</h3>
            <div class="recommendation-items">
                <div class="recommendation-item">
                    <div class="recommendation-image">
                        <img src="/api/placeholder/180/180" alt="Recommendation">
                    </div>
                    <div class="recommendation-details">
                        <div class="recommendation-name">노트북 받침대 스탠드</div>
                        <div class="recommendation-price">28,000원</div>
                    </div>
                </div>
                <div class="recommendation-item">
                    <div class="recommendation-image">
                        <img src="/api/placeholder/180/180" alt="Recommendation">
                    </div>
                    <div class="recommendation-details">
                        <div class="recommendation-name">USB-C 멀티포트 어댑터</div>
                        <div class="recommendation-price">45,000원</div>
                    </div>
                </div>
                <div class="recommendation-item">
                    <div class="recommendation-image">
                        <img src="/api/placeholder/180/180" alt="Recommendation">
                    </div>
                    <div class="recommendation-details">
                        <div class="recommendation-name">외장 SSD 1TB</div>
                        <div class="recommendation-price">149,000원</div>
                    </div>
                </div>
                <div class="recommendation-item">
                    <div class="recommendation-image">
                        <img src="/api/placeholder/180/180" alt="Recommendation">
                    </div>
                    <div class="recommendation-details">
                        <div class="recommendation-name">노트북 키보드 보호필름</div>
                        <div class="recommendation-price">12,000원</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // DOM이 로드되면 실행
        document.addEventListener('DOMContentLoaded', function () {
            // 테마 관련 초기화
            initTheme();

            // 스크롤 이벤트 리스너
            window.addEventListener('scroll', handleScroll);

            // 로고 클릭 시 메인페이지로 이동
            document.querySelector('.logo').addEventListener('click', function () {
                window.location.href = 'mainpage.html';
            });

            // 쇼핑 계속하기 클릭 시 메인페이지로 이동
            document.querySelector('.continue-shopping').addEventListener('click', function (e) {
                e.preventDefault();
                window.location.href = 'mainpage.html';
            });

            // Select All Checkbox
            document.getElementById('selectAll').addEventListener('change', function () {
                const checkboxes = document.querySelectorAll('.item-checkbox input');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = this.checked;
                });
                updateTotalPrice(); // 선택된 항목에 따라 가격 업데이트
            });

            // 개별 체크박스 변경 이벤트
            const checkboxes = document.querySelectorAll('.item-checkbox input');
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    updateSelectAllStatus();
                    updateTotalPrice();
                });
            });

            // 선택 삭제 버튼 클릭 이벤트
            document.querySelector('.delete-selected').addEventListener('click', function () {
                deleteSelectedItems();
            });

            // 쿠폰 적용 버튼 클릭 이벤트
            document.querySelector('.coupon-button').addEventListener('click', function () {
                applyCoupon();
            });

            // 초기 가격 계산
            updateTotalPrice();

            // 추천 상품 데이터 설정 및 렌더링
            setupRecommendedProducts();

            // 검색창 클릭 이벤트 - 검색 페이지로 이동
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

            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        // Quantity Controls
        function decreaseQuantity(button) {
            const input = button.nextElementSibling;
            let value = parseInt(input.value);
            if (value > 1) {
                input.value = value - 1;
                // 상품 수량 변경 시 가격 업데이트
                updateTotalPrice();
            }
        }

        function increaseQuantity(button) {
            const input = button.previousElementSibling;
            let value = parseInt(input.value);
            const max = input.getAttribute('max');
            if (!max || value < parseInt(max)) {
                input.value = value + 1;
                // 상품 수량 변경 시 가격 업데이트
                updateTotalPrice();
            }
        }

        // 선택된 상품들의 총 가격 업데이트
        function updateTotalPrice() {
            let totalOriginalPrice = 0;
            let totalDiscountPrice = 0;

            const selectedItems = document.querySelectorAll('.item-checkbox input:checked');

            selectedItems.forEach(checkbox => {
                const cartItem = checkbox.closest('.cart-item');
                const currentPrice = parseInt(cartItem.querySelector('.current-price').textContent.replace(/[^0-9]/g, ''));
                const originalPriceElement = cartItem.querySelector('.original-price');
                const quantity = parseInt(cartItem.querySelector('.quantity-input').value);

                totalDiscountPrice += currentPrice * quantity;

                if (originalPriceElement) {
                    const originalPrice = parseInt(originalPriceElement.textContent.replace(/[^0-9]/g, ''));
                    totalOriginalPrice += originalPrice * quantity;
                } else {
                    totalOriginalPrice += currentPrice * quantity;
                }
            });

            const discount = totalOriginalPrice - totalDiscountPrice;

            // 주문 요약 정보 업데이트
            document.querySelector('.summary-item:nth-child(1) .summary-value').textContent = totalOriginalPrice.toLocaleString() + '원';
            document.querySelector('.summary-item:nth-child(2) .summary-value').textContent = '-' + discount.toLocaleString() + '원';
            document.querySelector('.summary-total .summary-value').textContent = totalDiscountPrice.toLocaleString() + '원';

            // 포인트 적립 정보 업데이트 (1% 적립 가정)
            const points = Math.floor(totalDiscountPrice * 0.01);
            document.querySelector('.points-value').textContent = points.toLocaleString() + 'P';

            // 선택된 상품 개수 업데이트
            document.querySelector('.item-count').textContent = `총 ${selectedItems.length}개`;
        }

        // 개별 체크박스 상태에 따라 전체 선택 체크박스 상태 업데이트
        function updateSelectAllStatus() {
            const checkboxes = document.querySelectorAll('.item-checkbox input');
            const selectAllCheckbox = document.getElementById('selectAll');

            const allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);
            selectAllCheckbox.checked = allChecked;
        }

        // 선택된 상품 삭제
        function deleteSelectedItems() {
            const selectedItems = document.querySelectorAll('.item-checkbox input:checked');

            if (selectedItems.length === 0) {
                alert('삭제할 상품을 선택해주세요.');
                return;
            }

            selectedItems.forEach(checkbox => {
                const cartItem = checkbox.closest('.cart-item');
                cartItem.remove();
            });

            // 장바구니에 남은 상품이 없는 경우
            const remainingItems = document.querySelectorAll('.cart-item');
            if (remainingItems.length === 0) {
                document.querySelector('.cart-items').innerHTML = '<p>장바구니가 비어 있습니다.</p>';
            }

            // 가격 업데이트
            updateTotalPrice();

            // 토스트 메시지 표시
            showToast();
        }

        // 쿠폰 적용
        function applyCoupon() {
            const couponInput = document.querySelector('.coupon-input');
            const couponCode = couponInput.value.trim();

            if (!couponCode) {
                alert('쿠폰 코드를 입력해주세요.');
                return;
            }

            // 쿠폰 코드 검증 및 할인 적용 (실제로는 서버를 통해 검증)
            const coupons = {
                'WELCOME10': 10,  // 10% 할인
                'SALE20': 20,     // 20% 할인
                'SPRING25': 25    // 25% 할인
            };

            if (coupons[couponCode]) {
                // 현재 총 금액에서 쿠폰 할인 적용
                const currentTotal = parseInt(document.querySelector('.summary-total .summary-value').textContent.replace(/[^0-9]/g, ''));
                const discount = Math.floor(currentTotal * (coupons[couponCode] / 100));
                const newTotal = currentTotal - discount;

                // 할인 정보 업데이트 (기존 할인 + 쿠폰 할인)
                const currentDiscount = parseInt(document.querySelector('.summary-item:nth-child(2) .summary-value').textContent.replace(/[^0-9]/g, ''));
                const totalDiscount = currentDiscount + discount;

                document.querySelector('.summary-item:nth-child(2) .summary-value').textContent = '-' + totalDiscount.toLocaleString() + '원';
                document.querySelector('.summary-total .summary-value').textContent = newTotal.toLocaleString() + '원';

                // 쿠폰 적용 표시
                if (!document.querySelector('.coupon-applied')) {
                    const couponApplied = document.createElement('div');
                    couponApplied.className = 'summary-item coupon-applied';
                    couponApplied.innerHTML = `
                <span class="summary-label">쿠폰 할인 (${couponCode})</span>
                <span class="summary-value">-${discount.toLocaleString()}원</span>
            `;
                    document.querySelector('.summary-items').appendChild(couponApplied);
                } else {
                    document.querySelector('.coupon-applied .summary-value').textContent = '-' + discount.toLocaleString() + '원';
                }

                // 포인트 적립 정보 업데이트 (1% 적립 가정)
                const points = Math.floor(newTotal * 0.01);
                document.querySelector('.points-value').textContent = points.toLocaleString() + 'P';

                // 쿠폰 입력창 초기화 및 비활성화
                couponInput.value = '';
                couponInput.disabled = true;
                document.querySelector('.coupon-button').textContent = '적용됨';
                document.querySelector('.coupon-button').disabled = true;

                alert(`쿠폰 '${couponCode}'이(가) 성공적으로 적용되었습니다. ${coupons[couponCode]}% 할인이 적용되었습니다.`);
            } else {
                alert('유효하지 않은 쿠폰 코드입니다.');
            }
        }

        // Toast notification
        function showToast() {
            const toast = document.querySelector('.toast');
            toast.classList.add('show');

            setTimeout(function () {
                toast.classList.remove('show');
            }, 5000);
        }

        // Undo action
        document.querySelector('.undo-link').addEventListener('click', function () {
            const toast = document.querySelector('.toast');
            toast.classList.remove('show');
            // 실제로는 여기서 삭제된 항목을 다시 복원하는 로직이 필요합니다
        });

        // 추천 상품 설정
        function setupRecommendedProducts() {
            // 추천 상품 데이터 (할인 정보 포함)
            const recommendedProducts = [
                {
                    name: '노트북 받침대 스탠드',
                    originalPrice: 35000,
                    discountPrice: 28000,
                    discountRate: 20,
                    image: '/api/placeholder/180/180',
                    url: 'discountproducts.html?product=stand'
                },
                {
                    name: 'USB-C 멀티포트 어댑터',
                    originalPrice: 60000,
                    discountPrice: 45000,
                    discountRate: 25,
                    image: '/api/placeholder/180/180',
                    url: 'discountproducts.html?product=adapter'
                },
                {
                    name: '외장 SSD 1TB',
                    originalPrice: 180000,
                    discountPrice: 149000,
                    discountRate: 17,
                    image: '/api/placeholder/180/180',
                    url: 'discountproducts.html?product=ssd'
                },
                {
                    name: '노트북 키보드 보호필름',
                    originalPrice: 15000,
                    discountPrice: 12000,
                    discountRate: 20,
                    image: '/api/placeholder/180/180',
                    url: 'discountproducts.html?product=keyboardfilm'
                }
            ];

            // 추천 상품 렌더링
            const recommendationItems = document.querySelector('.recommendation-items');
            recommendationItems.innerHTML = '';

            recommendedProducts.forEach(product => {
                const item = document.createElement('div');
                item.className = 'recommendation-item';
                item.innerHTML = `
            <a href="${product.url}" class="recommendation-link">
                <div class="recommendation-image">
                    <img src="${product.image}" alt="${product.name}">
                    <div class="discount-badge">-${product.discountRate}%</div>
                </div>
                <div class="recommendation-details">
                    <div class="recommendation-name">${product.name}</div>
                    <div class="recommendation-price">
                        <span class="current-price">${product.discountPrice.toLocaleString()}원</span>
                        <span class="original-price">${product.originalPrice.toLocaleString()}원</span>
                    </div>
                </div>
            </a>
        `;
                recommendationItems.appendChild(item);
            });

            // 추천 상품 할인 배지 스타일 추가
            const style = document.createElement('style');
            style.textContent = `
        .recommendation-image {
            position: relative;
        }
        .discount-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--primary);
            color: white;
            padding: 5px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }
        .recommendation-link {
            text-decoration: none;
            color: var(--text);
            display: block;
        }
        .recommendation-price {
            display: flex;
            flex-direction: column;
        }
        .recommendation-price .original-price {
            color: var(--text-light);
            text-decoration: line-through;
            font-size: 13px;
        }
    `;
            document.head.appendChild(style);
        }
    </script>
</body>

</html>