<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 결제하기</title>
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

        /* Checkout Progress */
        .checkout-progress {
            margin: 30px 0;
            display: flex;
            justify-content: center;
        }

        .progress-step {
            display: flex;
            align-items: center;
            color: var(--text-light);
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

        .progress-step.completed .step-number {
            background-color: var(--success);
            color: white;
        }

        .progress-line {
            width: 80px;
            height: 2px;
            background-color: var(--gray);
            margin: 0 15px;
        }

        /* Main Content for Payment Page */
        .main-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            margin-bottom: 50px;
        }

        /* Payment Form Section */
        .payment-section {
            background-color: var(--card-bg);
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
            border-bottom: 1px solid var(--border-color);
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 500;
            color: var(--text);
        }

        .required:after {
            content: ' *';
            color: var(--primary);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 14px;
            transition: var(--transition);
            background-color: var(--body-bg);
            color: var(--text);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(233, 49, 112, 0.2);
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-col {
            flex: 1;
        }

        /* Payment Methods Styling */
        .payment-methods {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .payment-method {
            border: 1px solid var(--border-color);
            border-radius: 8px;
            overflow: hidden;
            transition: var(--transition);
            background-color: var(--card-bg);
        }

        .payment-method:hover {
            border-color: var(--primary-light);
        }

        .payment-method.selected {
            border-color: var(--primary);
            background-color: var(--primary-light);
        }

        .method-header {
            padding: 15px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .method-radio {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .method-icon {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--secondary);
            border-radius: 50%;
            margin-right: 5px;
        }

        .method-icon i {
            font-size: 16px;
            color: var(--primary);
        }

        .method-title {
            font-weight: 600;
            font-size: 15px;
            color: var(--text);
        }

        .method-content {
            padding: 0 15px 15px;
            display: none;
        }

        .method-content.show {
            display: block;
        }

        /* Credit Card Form */
        .card-form {
            margin-top: 10px;
        }

        .card-container {
            width: 100%;
            max-width: 350px;
            height: 200px;
            background: linear-gradient(45deg, #1a1a1a, #444444);
            border-radius: 10px;
            padding: 20px;
            color: white;
            position: relative;
            box-shadow: var(--shadow);
            margin-bottom: 20px;
        }

        [data-theme="dark"] .card-container {
            background: linear-gradient(45deg, #2a2a2a, #545454);
        }

        .card-network {
            position: absolute;
            top: 20px;
            right: 20px;
            height: 40px;
        }

        .card-type {
            font-size: 16px;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 25px;
        }

        .card-number {
            font-size: 20px;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        .card-detail {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }

        .card-detail-label {
            font-size: 10px;
            opacity: 0.8;
            margin-bottom: 5px;
        }

        .card-input {
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 14px;
            transition: var(--transition);
            background-color: var(--body-bg);
            color: var(--text);
        }

        .card-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(233, 49, 112, 0.1);
        }

        .card-number-input {
            width: 100%;
        }

        .card-details-row {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .card-expiry,
        .card-cvc {
            flex: 1;
        }

        /* Discount Section */
        .discount-input {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .apply-btn {
            padding: 12px 20px;
            background-color: var(--secondary);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 500;
            color: var(--text);
        }

        .apply-btn:hover {
            background-color: var(--primary);
            color: white;
        }

        /* Points Information */
        .points-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 15px;
            background-color: var(--secondary);
            border-radius: 8px;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .points-amount {
            font-weight: 600;
            color: var(--text);
        }

        .points-use {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .points-input {
            width: 100px;
            padding: 8px 10px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            text-align: right;
            background-color: var(--body-bg);
            color: var(--text);
        }

        .use-all-btn {
            padding: 8px 10px;
            background-color: var(--secondary);
            border: 1px solid var(--border-color);
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
            transition: var(--transition);
            color: var(--text);
        }

        .use-all-btn:hover {
            background-color: var(--primary);
            color: white;
        }

        /* Agreement Section */
        .agreement-section {
            margin-top: 25px;
        }

        .agreement-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text);
        }

        .agreement-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }

        .agreement-label {
            font-size: 14px;
            cursor: pointer;
            color: var(--text);
        }

        .agreement-required {
            color: var(--primary);
            font-size: 13px;
            margin-left: 5px;
        }

        .agreement-details {
            color: var(--text-light);
            font-size: 12px;
            text-decoration: underline;
            cursor: pointer;
            margin-left: auto;
        }

        .agreement-all {
            padding: 15px;
            background-color: var(--primary-light);
            border-radius: 8px;
            margin-bottom: 15px;
        }

        [data-theme="dark"] .agreement-all {
            background-color: var(--primary-light);
        }

        .agreement-all .agreement-label {
            font-weight: 600;
        }

        /* Order Summary Section */
        .summary-section {
            background-color: var(--card-bg);
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
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
        }

        .edit-cart {
            font-size: 14px;
            color: var(--primary);
            text-decoration: none;
        }

        .summary-items {
            max-height: 250px;
            overflow-y: auto;
            margin-bottom: 20px;
        }

        .summary-item {
            display: flex;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--gray-light);
        }

        .item-image {
            width: 60px;
            height: 60px;
            background-color: var(--gray-light);
            border-radius: 8px;
            overflow: hidden;
            margin-right: 15px;
        }

        .item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .item-details {
            flex: 1;
        }

        .item-name {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 5px;
            color: var(--text);
        }

        .item-option {
            font-size: 12px;
            color: var(--text-light);
            margin-bottom: 5px;
        }

        .item-price {
            font-size: 14px;
            font-weight: 600;
            color: var(--primary);
        }

        .summary-line {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 14px;
        }

        .summary-label {
            color: var(--text-light);
        }

        .summary-value {
            font-weight: 500;
            color: var(--text);
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid var(--border-color);
            font-size: 16px;
        }

        .total-label {
            font-weight: 600;
            color: var(--text);
        }

        .total-value {
            font-weight: 700;
            color: var(--primary);
        }

        /* Shipping Information */
        .shipping-summary {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid var(--border-color);
        }

        .shipping-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text);
        }

        .shipping-info {
            font-size: 14px;
            line-height: 1.5;
            color: var(--text);
        }

        .shipping-info p {
            margin-bottom: 8px;
        }

        .shipping-method {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid var(--border-color);
            font-size: 14px;
        }

        .shipping-method-name {
            font-weight: 600;
            color: var(--text);
            margin-bottom: 5px;
        }

        .shipping-method-detail {
            color: var(--text-light);
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .btn {
            padding: 15px 25px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-outline {
            background-color: var(--secondary);
            color: var(--text);
            border: 1px solid var(--border-color);
        }

        .btn-outline:hover {
            background-color: var(--gray-light);
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            width: 100%;
            justify-content: center;
            font-size: 18px;
            padding: 20px;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
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

            .form-row {
                flex-direction: column;
                gap: 20px;
            }

            .card-container {
                max-width: 100%;
            }
        }

        @media (max-width: 576px) {
            .action-buttons {
                flex-direction: column;
                gap: 15px;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .payment-section,
            .summary-section {
                padding: 15px;
            }
        }
    </style>
</head>

<body>
    <!-- Toast notification -->
    <div class="toast" id="toast">
        <i class="fas fa-check-circle"></i>
        <span>결제 정보가 입력되었습니다.</span>
    </div>

    <!-- Header section - Sticky (메인 홈페이지 스타일) -->
    <header id="header">
        <div class="container">
            <div class="header-content">
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
            </div>
        </div>
    </header>

    <div class="container">
        <!-- Checkout Progress -->
        <div class="checkout-progress">
            <div class="progress-step completed">
                <div class="step-number"><i class="fas fa-check"></i></div>
                <span>장바구니</span>
            </div>
            <div class="progress-line"></div>
            <div class="progress-step completed">
                <div class="step-number"><i class="fas fa-check"></i></div>
                <span>배송 정보</span>
            </div>
            <div class="progress-line"></div>
            <div class="progress-step active">
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
            <!-- Payment Form Section -->
            <div class="payment-section">
                <div class="section-header">
                    <h2 class="section-title">
                        <i class="fas fa-credit-card"></i>
                        결제수단 선택
                    </h2>
                </div>

                <!-- Payment Methods -->
                <div class="payment-methods">
                    <!-- Credit Card Payment -->
                    <div class="payment-method selected" id="creditCardMethod">
                        <div class="method-header" onclick="selectPaymentMethod('creditCard')">
                            <div class="method-radio">
                                <input type="radio" name="paymentMethod" id="creditCard" checked>
                            </div>
                            <div class="method-icon">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <div class="method-title">신용/체크카드</div>
                        </div>
                        <div class="method-content show" id="creditCardContent">
                            <!-- Credit Card Form -->
                            <div class="card-form">
                                <div class="card-container">
                                    <div class="card-type">Credit Card</div>
                                    <div class="card-number">•••• •••• •••• ••••</div>
                                    <div class="card-detail">
                                        <div class="card-holder-info">
                                            <div class="card-detail-label">CARD HOLDER</div>
                                            <div class="card-holder-name">YOUR NAME</div>
                                        </div>
                                        <div class="card-expiry-info">
                                            <div class="card-detail-label">EXPIRES</div>
                                            <div class="card-expiry-date">MM/YY</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="cardNumber" class="form-label required">카드번호</label>
                                    <input type="text" id="cardNumber" class="card-input card-number-input"
                                        placeholder="1234 5678 9012 3456" maxlength="19">
                                </div>

                                <div class="form-group">
                                    <label for="cardHolder" class="form-label required">카드 소유자 이름</label>
                                    <input type="text" id="cardHolder" class="card-input" placeholder="카드에 표시된 이름">
                                </div>

                                <div class="card-details-row">
                                    <div class="card-expiry">
                                        <label for="cardExpiry" class="form-label required">유효기간</label>
                                        <input type="text" id="cardExpiry" class="card-input" placeholder="MM/YY"
                                            maxlength="5">
                                    </div>
                                    <div class="card-cvc">
                                        <label for="cardCVC" class="form-label required">CVC</label>
                                        <input type="text" id="cardCVC" class="card-input" placeholder="123"
                                            maxlength="3">
                                    </div>
                                </div>

                                <div class="form-group" style="margin-top: 15px;">
                                    <label for="cardInstallment" class="form-label">할부 선택</label>
                                    <select id="cardInstallment" class="form-control">
                                        <option value="0">일시불</option>
                                        <option value="2">2개월</option>
                                        <option value="3">3개월</option>
                                        <option value="4">4개월</option>
                                        <option value="5">5개월</option>
                                        <option value="6">6개월</option>
                                        <option value="12">12개월</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Virtual Account Payment -->
                    <div class="payment-method" id="virtualAccountMethod">
                        <div class="method-header" onclick="selectPaymentMethod('virtualAccount')">
                            <div class="method-radio">
                                <input type="radio" name="paymentMethod" id="virtualAccount">
                            </div>
                            <div class="method-icon">
                                <i class="fas fa-university"></i>
                            </div>
                            <div class="method-title">가상계좌</div>
                        </div>
                        <div class="method-content" id="virtualAccountContent">
                            <div class="form-group">
                                <label for="bankSelect" class="form-label required">은행 선택</label>
                                <select id="bankSelect" class="form-control">
                                    <option value="">은행을 선택하세요</option>
                                    <option value="kb">국민은행</option>
                                    <option value="shinhan">신한은행</option>
                                    <option value="woori">우리은행</option>
                                    <option value="hana">하나은행</option>
                                    <option value="nh">농협은행</option>
                                    <option value="ibk">기업은행</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="depositorName" class="form-label required">입금자명</label>
                                <input type="text" id="depositorName" class="form-control" placeholder="입금자명을 입력하세요">
                            </div>
                            <p style="font-size: 13px; color: var(--text-light); margin-top: 10px;">
                                * 주문 후 12시간 이내에 입금해주셔야 합니다.<br>
                                * 입금 확인 후 배송이 시작됩니다.
                            </p>
                        </div>
                    </div>

                    <!-- Mobile Payment -->
                    <div class="payment-method" id="mobilePayMethod">
                        <div class="method-header" onclick="selectPaymentMethod('mobilePay')">
                            <div class="method-radio">
                                <input type="radio" name="paymentMethod" id="mobilePay">
                            </div>
                            <div class="method-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="method-title">휴대폰 결제</div>
                        </div>
                        <div class="method-content" id="mobilePayContent">
                            <div class="form-group">
                                <label for="phoneNumber" class="form-label required">휴대폰 번호</label>
                                <input type="tel" id="phoneNumber" class="form-control" placeholder="'-' 없이 입력해주세요">
                            </div>
                            <div class="form-group">
                                <label for="carrierSelect" class="form-label required">통신사 선택</label>
                                <select id="carrierSelect" class="form-control">
                                    <option value="">통신사를 선택하세요</option>
                                    <option value="skt">SKT</option>
                                    <option value="kt">KT</option>
                                    <option value="lgu">LG U+</option>
                                    <option value="mvno">알뜰폰</option>
                                </select>
                            </div>
                            <p style="font-size: 13px; color: var(--text-light); margin-top: 10px;">
                                * 휴대폰 결제는 월 50만원 한도 내에서 이용 가능합니다.<br>
                                * 휴대폰 요금과 함께 익월에 청구됩니다.
                            </p>
                        </div>
                    </div>

                    <!-- Easy Payment -->
                    <div class="payment-method" id="easyPayMethod">
                        <div class="method-header" onclick="selectPaymentMethod('easyPay')">
                            <div class="method-radio">
                                <input type="radio" name="paymentMethod" id="easyPay">
                            </div>
                            <div class="method-icon">
                                <i class="fas fa-wallet"></i>
                            </div>
                            <div class="method-title">간편결제</div>
                        </div>
                        <div class="method-content" id="easyPayContent">
                            <div style="display: flex; gap: 10px; margin-bottom: 15px;">
                                <button class="apply-btn"
                                    style="flex: 1; display: flex; flex-direction: column; align-items: center; gap: 5px; height: 70px;">
                                    <i class="fas fa-comment" style="font-size: 20px; color: #FEE500;"></i>
                                    카카오페이
                                </button>
                                <button class="apply-btn"
                                    style="flex: 1; display: flex; flex-direction: column; align-items: center; gap: 5px; height: 70px;">
                                    <i class="fas fa-n" style="font-size: 20px; color: #03C75A;"></i>
                                    네이버페이
                                </button>
                                <button class="apply-btn"
                                    style="flex: 1; display: flex; flex-direction: column; align-items: center; gap: 5px; height: 70px;">
                                    <i class="fas fa-won-sign" style="font-size: 20px; color: #4285F4;"></i>
                                    토스페이
                                </button>
                            </div>
                            <p style="font-size: 13px; color: var(--text-light); margin-top: 10px;">
                                * 간편결제 시 해당 서비스의 결제창으로 이동합니다.<br>
                                * 간편결제 진행 시 각 서비스의 이용약관에 동의하게 됩니다.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Discount and Points Section -->
                <div class="section-header" style="margin-top: 30px;">
                    <h2 class="section-title">
                        <i class="fas fa-tags"></i>
                        할인 및 포인트
                    </h2>
                </div>

                <div class="form-group">
                    <label for="couponCode" class="form-label">쿠폰 코드</label>
                    <div class="discount-input">
                        <input type="text" id="couponCode" class="form-control" placeholder="쿠폰 코드를 입력하세요">
                        <button class="apply-btn">적용</button>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">포인트 사용</label>
                    <div class="points-info">
                        <div class="points-amount">보유 포인트: 5,000P</div>
                        <div class="points-use">
                            <input type="text" class="points-input" placeholder="0" id="pointsInput">
                            <button class="use-all-btn" id="useAllBtn">모두 사용</button>
                        </div>
                    </div>
                </div>

                <!-- Agreement Section -->
                <div class="section-header" style="margin-top: 30px;">
                    <h2 class="section-title">
                        <i class="fas fa-check-square"></i>
                        주문 동의
                    </h2>
                </div>

                <div class="agreement-section">
                    <div class="agreement-item agreement-all">
                        <input type="checkbox" id="agreeAll">
                        <label for="agreeAll" class="agreement-label">
                            전체 동의
                        </label>
                    </div>

                    <div class="agreement-item">
                        <input type="checkbox" id="agreeTerms" class="agreement-checkbox">
                        <label for="agreeTerms" class="agreement-label">
                            이용약관 동의
                            <span class="agreement-required">(필수)</span>
                        </label>
                        <span class="agreement-details">보기</span>
                    </div>

                    <div class="agreement-item">
                        <input type="checkbox" id="agreePrivacy" class="agreement-checkbox">
                        <label for="agreePrivacy" class="agreement-label">
                            개인정보 수집 및 이용 동의
                            <span class="agreement-required">(필수)</span>
                        </label>
                        <span class="agreement-details">보기</span>
                    </div>

                    <div class="agreement-item">
                        <input type="checkbox" id="agreePayment" class="agreement-checkbox">
                        <label for="agreePayment" class="agreement-label">
                            전자금융거래 이용약관 동의
                            <span class="agreement-required">(필수)</span>
                        </label>
                        <span class="agreement-details">보기</span>
                    </div>

                    <div class="agreement-item">
                        <input type="checkbox" id="agreeMarketing" class="agreement-checkbox">
                        <label for="agreeMarketing" class="agreement-label">
                            마케팅 정보 수신 동의
                            <span style="font-size:13px; color:var(--text-light)">(선택)</span>
                        </label>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button class="btn btn-outline" onclick="location.href='shipping.html'">
                        <i class="fas fa-chevron-left"></i> 배송정보로 돌아가기
                    </button>
                </div>
            </div>

            <!-- Order Summary Section -->
            <div class="summary-section">
                <h2 class="section-title">
                    주문 요약
                    <a href="cart.html" class="edit-cart">편집</a>
                </h2>

                <div class="summary-items">
                    <!-- Item 1 -->
                    <div class="summary-item">
                        <div class="item-image">
                            <img src="/api/placeholder/60/60" alt="Product">
                        </div>
                        <div class="item-details">
                            <div class="item-name">스마트픽 울트라북 X15</div>
                            <div class="item-option">옵션: 스페이스 그레이, 512GB SSD</div>
                            <div class="item-price">1,290,000원</div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="summary-item">
                        <div class="item-image">
                            <img src="/api/placeholder/60/60" alt="Product">
                        </div>
                        <div class="item-details">
                            <div class="item-name">프리미엄 노트북 파우치</div>
                            <div class="item-option">옵션: 블랙, 15인치</div>
                            <div class="item-price">39,000원</div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="summary-item">
                        <div class="item-image">
                            <img src="/api/placeholder/60/60" alt="Product">
                        </div>
                        <div class="item-details">
                            <div class="item-name">무선 블루투스 마우스</div>
                            <div class="item-option">옵션: 그레이</div>
                            <div class="item-price">29,000원</div>
                        </div>
                    </div>
                </div>

                <div class="summary-line">
                    <div class="summary-label">상품금액</div>
                    <div class="summary-value">1,358,000원</div>
                </div>

                <div class="summary-line">
                    <div class="summary-label">배송비</div>
                    <div class="summary-value">무료</div>
                </div>

                <div class="summary-line">
                    <div class="summary-label">할인금액</div>
                    <div class="summary-value">-206,000원</div>
                </div>

                <div class="summary-line">
                    <div class="summary-label">포인트 사용</div>
                    <div class="summary-value" id="pointsUsed">0원</div>
                </div>

                <div class="summary-total">
                    <div class="total-label">총 결제금액</div>
                    <div class="total-value">1,152,000원</div>
                </div>

                <!-- Shipping Information -->
                <div class="shipping-summary">
                    <div class="shipping-title">배송 정보</div>
                    <div class="shipping-info">
                        <p><strong>홍길동</strong>, 010-1234-5678</p>
                        <p>서울특별시 강남구 테헤란로 123 스마트빌딩 456호</p>
                    </div>

                    <div class="shipping-method">
                        <div class="shipping-method-name">일반 배송</div>
                        <div class="shipping-method-detail">3~5일 소요 예정</div>
                    </div>
                </div>

                <button class="btn btn-primary" id="payBtn">
                    <i class="fas fa-lock"></i> 1,152,000원 결제하기
                </button>
            </div>
        </div>
    </div>

    <script>
        // 전역 함수로 정의
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

        // Toast notification
        function showToast(message) {
            const toast = document.querySelector('.toast');
            const toastMessage = toast.querySelector('span');
            toastMessage.textContent = message || '결제 정보가 입력되었습니다.';

            toast.classList.add('show');

            setTimeout(function () {
                toast.classList.remove('show');
            }, 3000);
        }

        // Payment method selection
        function selectPaymentMethod(method) {
            // Hide all content first
            document.querySelectorAll('.method-content').forEach(content => {
                content.classList.remove('show');
            });

            // Remove selected class from all methods
            document.querySelectorAll('.payment-method').forEach(method => {
                method.classList.remove('selected');
            });

            // Show selected content and add class
            document.getElementById(method + 'Content').classList.add('show');
            document.getElementById(method + 'Method').classList.add('selected');

            // Check the radio button
            document.getElementById(method).checked = true;

            // Show toast notification
            showToast('결제 수단이 변경되었습니다.');
        }

        // DOM이 로드되면 실행
        document.addEventListener('DOMContentLoaded', function () {
            // 테마 관련 초기화
            initTheme();

            // 스크롤 이벤트 리스너
            window.addEventListener('scroll', handleScroll);

            // 1. 로고 클릭 시 메인 페이지로 이동
            const logo = document.querySelector('.logo');
            logo.addEventListener('click', function () {
                window.location.href = 'mainpage.html';
            });

            // 3. 카드번호 16자리 유효성 검증
            const cardNumberInput = document.getElementById('cardNumber');
            cardNumberInput.addEventListener('blur', function () {
                // 공백 제거 후 숫자만 추출
                const cardNumber = this.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');

                // 16자리 체크
                if (cardNumber.length !== 16) {
                    showToast('카드번호는 16자리를 입력해주세요.');
                    this.classList.add('error');
                    // 빨간색 테두리 표시를 위한 CSS 추가
                    this.style.borderColor = 'var(--danger)';
                } else {
                    this.classList.remove('error');
                    this.style.borderColor = 'var(--border-color)';
                }
            });

            // 4. 쿠폰 코드 16자리 유효성 검증 및 적용 기능
            const couponInput = document.getElementById('couponCode');
            const applyBtn = couponInput.nextElementSibling;

            applyBtn.addEventListener('click', function () {
                const couponCode = couponInput.value.trim();

                if (couponCode.length !== 16) {
                    showToast('쿠폰코드는 16자리를 입력해주세요.');
                    couponInput.classList.add('error');
                    couponInput.style.borderColor = 'var(--danger)';
                } else {
                    // 쿠폰 적용 로직 (예시)
                    couponInput.classList.remove('error');
                    couponInput.style.borderColor = 'var(--success)';
                    couponInput.disabled = true; // 적용 후 수정 방지
                    applyBtn.disabled = true;
                    applyBtn.textContent = '적용됨';
                    showToast('쿠폰이 성공적으로 적용되었습니다.');

                    // 쿠폰 할인액 표시 (가상 금액 10,000원 적용)
                    document.querySelector('.summary-line:nth-of-type(3) .summary-value').textContent = '-216,000원';

                    // 총 결제금액 업데이트
                    document.querySelector('.total-value').textContent = '1,142,000원';
                    document.querySelector('#payBtn').innerHTML = '<i class="fas fa-lock"></i> 1,142,000원 결제하기';
                }
            });

            // 검색 폼 제출 처리
            const searchForm = document.getElementById('searchForm');
            searchForm.addEventListener('submit', function (e) {
                e.preventDefault(); // 기본 제출 동작 방지

                const searchInput = this.querySelector('.search-bar');
                const query = searchInput.value.trim();

                if (query) {
                    // 검색 결과 페이지로 이동
                    window.location.href = `search_results.html?query=${encodeURIComponent(query)}`;
                } else {
                    showToast('검색어를 입력해주세요.');
                }
            });

            // Card number formatting
            document.getElementById('cardNumber').addEventListener('input', function (e) {
                const requiredCheckboxes = [
                    document.getElementById('agreeTerms'),
                    document.getElementById('agreePrivacy'),
                    document.getElementById('agreePayment')
                ];
                const allChecked = requiredCheckboxes.every(checkbox => checkbox.checked);
                let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
                let formattedValue = '';

                for (let i = 0; i < value.length; i++) {
                    if (i > 0 && i % 4 === 0) {
                        formattedValue += ' ';
                    }
                    formattedValue += value[i];
                }

                e.target.value = formattedValue;

                // Update card display
                let cardNumber = document.querySelector('.card-number');
                if (formattedValue.length > 0) {
                    // Show first 4 digits and mask the rest
                    let maskedValue = formattedValue.substring(0, 4);
                    if (formattedValue.length > 4) {
                        maskedValue += ' •••• •••• ••••';
                    }
                    cardNumber.textContent = maskedValue;
                } else {
                    cardNumber.textContent = '•••• •••• •••• ••••';
                }

            });

            // Card holder name
            document.getElementById('cardHolder').addEventListener('input', function (e) {
                let value = e.target.value.toUpperCase();
                document.querySelector('.card-holder-name').textContent = value || 'YOUR NAME';
            });

            // Card expiry formatting
            document.getElementById('cardExpiry').addEventListener('input', function (e) {
                let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');

                if (value.length > 2) {
                    value = value.substring(0, 2) + '/' + value.substring(2, 4);
                }

                e.target.value = value;
                document.querySelector('.card-expiry-date').textContent = value || 'MM/YY';
            });

            // Use all points button
            document.getElementById('useAllBtn').addEventListener('click', function () {
                document.getElementById('pointsInput').value = '5,000';
                document.getElementById('pointsUsed').textContent = '-5,000원';

                // Show toast
                showToast('포인트가 적용되었습니다.');
            });

            // Agreement all checkbox
            document.getElementById('agreeAll').addEventListener('change', function () {
                let checked = this.checked;
                document.querySelectorAll('.agreement-checkbox').forEach(checkbox => {
                    checkbox.checked = checked;
                });
            });

            // Individual agreement checkboxes
            document.querySelectorAll('.agreement-checkbox').forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    let allChecked = true;
                    document.querySelectorAll('.agreement-checkbox').forEach(cb => {
                        if (!cb.checked) allChecked = false;
                    });
                    document.getElementById('agreeAll').checked = allChecked;
                });
            });

            // Point input update
            document.getElementById('pointsInput').addEventListener('input', function (e) {
                let value = e.target.value.replace(/[^0-9]/g, '');
                if (value && parseInt(value) > 0) {
                    document.getElementById('pointsUsed').textContent = '-' + Number(value).toLocaleString() + '원';
                } else {
                    document.getElementById('pointsUsed').textContent = '0원';
                }
            });

            // Pay button click
            document.getElementById('payBtn').addEventListener('click', function (e) {
                // 필수 동의 체크박스 검증
                const requiredCheckboxes = [
                    document.getElementById('agreeTerms'),
                    document.getElementById('agreePrivacy'),
                    document.getElementById('agreePayment')
                ];

                // 모든 필수 체크박스가 체크되었는지 확인
                const allChecked = requiredCheckboxes.every(checkbox => checkbox.checked);

                if (!allChecked) {
                    e.preventDefault(); // 페이지 이동 방지
                    showToast('모든 필수 약관에 동의해주세요.');

                    // 체크되지 않은 필수 항목 강조 표시
                    requiredCheckboxes.forEach(checkbox => {
                        if (!checkbox.checked) {
                            // 체크되지 않은 항목의 라벨에 빨간색 표시
                            const label = document.querySelector(`label[for="${checkbox.id}"]`);
                            label.style.color = 'var(--danger)';

                            // 3초 후 원래 색상으로 복원
                            setTimeout(() => {
                                label.style.color = '';
                            }, 3000);
                        }
                    });

                    // 약관 섹션으로 스크롤
                    document.querySelector('.agreement-section').scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });

                    return false; // 함수 종료
                }

                // 카드결제 선택 시 카드번호 유효성 검사
                if (document.getElementById('creditCard').checked) {
                    const cardNumber = document.getElementById('cardNumber').value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');

                    if (cardNumber.length !== 16) {
                        e.preventDefault();
                        showToast('카드번호는 16자리를 입력해주세요.');

                        // 카드번호 입력 필드로 스크롤 및 포커스
                        document.getElementById('cardNumber').scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                        document.getElementById('cardNumber').focus();

                        return false;
                    }
                }

                // 모든 검증을 통과했으면 결제 진행 (다음 페이지로 이동)
                window.location.href = 'order-complete.html';
            });
            const searchBar = document.querySelector('.search-bar');
            if (searchBar) {
                searchBar.style.cursor = 'pointer';  // 클릭 가능 커서 표시
                searchBar.addEventListener('click', () => {
                    window.location.href = 'search_results.html';
                });
            }

        });
    </script>
</body>

</html>