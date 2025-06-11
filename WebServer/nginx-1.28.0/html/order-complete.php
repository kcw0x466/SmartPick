<?php 
    session_start();
    require_once 'DBconnect/mysql_connect.php';
    require_once 'DBconnect/mongo_connect.php';
    use MongoDB\Driver\Query;
    use MongoDB\BSON\ObjectId;

    // 로그인 확인
    if (!isset($_SESSION['member_id'])) {
        echo "<script>alert('로그인이 필요합니다.'); location.href='/log-in.php';</script>";
        exit;
    }

    $isLoggedIn = isset($_SESSION['member_id']);

    $memberId = $_SESSION['member_id'];

    $orderId = $_GET['order_id'];

    // 회원 정보 조회
    $sql = "SELECT name, phone, address FROM member WHERE id = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param('i', $memberId);
    $stmt->execute();
    $result = $stmt->get_result();
    $member = $result->fetch_assoc();
    
    // MySQL 주문 아이템 테이블 데이터 조회
    $sql = "SELECT * FROM order_item WHERE order_id = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param('i', $orderId);
    $stmt->execute();
    $result = $stmt->get_result();

    $cartItems = [];
    while ($row = $result->fetch_assoc()) {
        $cartItems[] = $row;
    }

    $imgPath= array(
        "products_PC" => "/static/img/computer/",
        "products_laptop" => "/static/img/laptop/",
        "products_TV" => "/static/img/tv/",
        "products_WashingMachine" => "/static/img/washer/",
    );

    $productDetails = [];

    foreach ($cartItems as $item) {
        $category = $item['category'];
        $productId = $item['product_id'];
        $quantity = $item['quantity'];

        $filterVariants = [
            ['_id' => (string)$productId],
            ['_id' => (int)$productId]
        ];

        $found = false;
        foreach ($filterVariants as $filter) {
            $options = ['projection' => ['name' => 1, 'price' => 1, 'description' => 1]];
            $query = new Query($filter, $options);
            $cursor = $mongoManager->executeQuery("$mongoDBName.$category", $query);
            $documents = $cursor->toArray();

            // 디버깅용 출력
            // echo "<strong>카테고리:</strong> $category<br>";
            // echo "<strong>상품 ID:</strong> {$productId}<br>";
            // echo "<strong>시도된 필터:</strong> ";
            // print_r($filter);
            // echo "<br>쿼리 결과:<pre>";
            // print_r($documents);
            // echo "</pre><hr>";

            if (!empty($documents)) {
                $product = $documents[0];
                $productDetails[] = [
                    'product_id' => $productId,
                    'category' => $category,
                    'name' => $product->name ?? '이름 없음',
                    'price' => $product->price ?? 0,
                    'description' => $product->description ?? '',
                    'quantity' => $quantity,
                    'image' => $imgPath[$category]. "{$productId}.png"
                ];
                $found = true;
                break;
            }
        }

        if (!$found) {
            echo "<span style='color:red'>[!] 상품 ID {$productId} 를 찾을 수 없음.</span><hr>";
        }
    }
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 주문완료</title>
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
            --success-light: #ebf9ee;
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
            --success-light: #283a2e;
            /* 성공 배경색 유지 */
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

        /* Success Card */
        .success-card {
            background-color: var(--card-bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 40px;
            text-align: center;
            margin-bottom: 30px;
        }

        .success-icon {
            width: 80px;
            height: 80px;
            background-color: var(--success-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
        }

        .success-icon i {
            font-size: 40px;
            color: var(--success);
        }

        .success-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--text);
        }

        .success-message {
            font-size: 16px;
            color: var(--text-light);
            margin-bottom: 25px;
            line-height: 1.6;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .order-number {
            background-color: var(--secondary);
            border-radius: 8px;
            padding: 15px 25px;
            display: inline-block;
            margin-bottom: 25px;
        }

        .order-number-label {
            font-size: 14px;
            color: var(--text-light);
            margin-bottom: 5px;
        }

        .order-number-value {
            font-size: 20px;
            font-weight: 700;
            color: var(--text);
            letter-spacing: 1px;
        }

        .email-notice {
            font-size: 14px;
            color: var(--text-light);
            margin-bottom: 30px;
        }

        /* Track Order Card */
        .track-order-card {
            background-color: var(--primary-light);
            border-radius: var(--radius);
            padding: 25px;
            margin-bottom: 30px;
            text-align: center;
            box-shadow: var(--shadow);
        }

        .track-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: var(--text);
        }

        .track-title i {
            color: var(--primary);
        }

        .estimated-delivery {
            font-size: 15px;
            margin-bottom: 20px;
            color: var(--text);
        }

        .delivery-date {
            font-weight: 600;
        }

        .track-status {
            position: relative;
            display: flex;
            justify-content: space-between;
            margin: 30px 0;
            padding: 0 30px;
        }

        .track-status::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 50px;
            right: 50px;
            height: 3px;
            background-color: var(--gray);
            z-index: 1;
        }

        .status-step {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100px;
        }

        .status-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: var(--gray);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .status-circle i {
            color: white;
            font-size: 14px;
        }

        .status-text {
            font-size: 13px;
            text-align: center;
            color: var(--text-light);
        }

        .status-step.active .status-circle {
            background-color: var(--primary);
        }

        .status-step.active .status-text {
            color: var(--text);
            font-weight: 500;
        }

        .track-button {
            padding: 12px 25px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
        }

        .track-button:hover {
            background-color: var(--primary-dark);
        }

        /* Order Details Card */
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
            color: var(--text);
        }

        .details-card {
            background-color: var(--card-bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 25px;
            margin-bottom: 30px;
        }

        /* Order Items */
        .order-items {
            margin-bottom: 25px;
        }

        .order-item {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .item-image {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            overflow: hidden;
            background-color: var(--secondary);
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
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--text);
        }

        .item-option {
            font-size: 14px;
            color: var(--text-light);
            margin-bottom: 8px;
        }

        .item-price-qty {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }

        .item-quantity {
            color: var(--text-light);
        }

        .item-price {
            font-weight: 600;
            color: var(--primary);
        }

        /* Info Sections */
        .info-section {
            padding: 20px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .info-section:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .info-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text);
        }

        .info-content {
            font-size: 14px;
            line-height: 1.6;
            color: var(--text);
        }

        .info-row {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
        }

        .info-label {
            width: 120px;
            color: var(--text-light);
        }

        .info-value {
            flex: 1;
            color: var(--text);
        }

        .payment-summary {
            margin-top: 20px;
        }

        .payment-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .payment-label {
            color: var(--text-light);
        }

        .payment-value {
            color: var(--text);
        }

        .payment-total {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid var(--border-color);
            font-size: 16px;
            font-weight: 600;
        }

        .total-label {
            color: var(--text);
        }

        .total-value {
            color: var(--primary);
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            flex: 1;
            padding: 15px 25px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
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
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        /* Recommendations */
        .recommendations {
            margin-top: 40px;
        }

        .rec-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
            color: var(--text);
        }

        .rec-products {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .rec-product {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .rec-product:hover {
            transform: translateY(-5px);
        }

        .rec-product-image {
            height: 150px;
            background-color: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .rec-product-image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .rec-product-info {
            padding: 15px;
        }

        .rec-product-name {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            color: var(--text);
        }

        .rec-product-price {
            font-size: 15px;
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

        /* Responsive */
        @media (max-width: 992px) {
            .rec-products {
                grid-template-columns: repeat(3, 1fr);
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

            .success-card {
                padding: 30px 20px;
            }

            .track-status {
                padding: 0 10px;
            }

            .status-step {
                width: 80px;
            }

            .track-status::before {
                left: 30px;
                right: 30px;
            }

            .rec-products {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .success-title {
                font-size: 20px;
            }

            .success-card,
            .details-card {
                padding: 20px 15px;
            }

            .order-number {
                padding: 12px 20px;
                width: 100%;
            }

            .track-status {
                flex-wrap: wrap;
                gap: 20px;
                justify-content: center;
            }

            .track-status::before {
                display: none;
            }

            .action-buttons {
                flex-direction: column;
            }

            .info-row {
                flex-direction: column;
            }

            .info-label {
                width: 100%;
                margin-bottom: 5px;
            }

            .rec-products {
                grid-template-columns: 1fr;
                gap: 15px;
            }
        }
    </style>
</head>

<body>
    <!-- Toast notification -->
    <div class="toast" id="toast">
        <i class="fas fa-check-circle"></i>
        <span>배송 조회가 시작되었습니다.</span>
    </div>

    <!-- Header section - Sticky (메인 홈페이지 스타일) -->
    <!-- Header section - Sticky (수정된 부분) -->
    <header id="header">
        <div class="container">
            <div class="header-content">
                <a href="mainpage.php" class="logo">
                    <div class="logo">
                        <div class="logo-box">스마<br>트픽</div>
                        <span>스마트픽</span>
                    </div>
                </a>

                <div class="search-container">
                    <form id="searchForm" action="search_results.php" method="get">
                        <input type="text" class="search-bar" name="query" placeholder="찾으시는 상품을 검색해보세요">
                        <button type="submit" class="search-icon">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>

                <div class="nav-buttons">
                    <?php if (!$isLoggedIn): ?>
                        <button class="nav-button" onclick="window.location.href='/log-in.php'">
                            <i class="fas fa-user"></i> 로그인
                        </button>
                        <button class="nav-button" onclick="window.location.href='/join.php'">
                            <i class="fas fa-user-plus"></i> 회원가입
                        </button>
                    <?php else: ?>
                        <button class="nav-button" onclick="window.location.href='/api/process_logout.php'">
                            <i class="fas fa-sign-out-alt"></i> 로그아웃
                        </button>
                        <button class="nav-button" onclick="window.location.href='/mypage.php'">
                            <i class="fas fa-user-circle"></i> 마이페이지
                        </button>
                    <?php endif; ?>
                    <button class="nav-button" onclick="window.location.href='/cart.php'">
                        <i class="fas fa-shopping-cart"></i> 장바구니
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
            <div class="progress-step completed">
                <div class="step-number"><i class="fas fa-check"></i></div>
                <span>결제</span>
            </div>
            <div class="progress-line"></div>
            <div class="progress-step active">
                <div class="step-number">4</div>
                <span>주문 완료</span>
            </div>
        </div>

        <!-- Success Message Card -->
        <div class="success-card">
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>
            <h1 class="success-title">주문이 완료되었습니다!</h1>
            <p class="success-message">
                홍길동님의 주문이 성공적으로 접수되었습니다. 주문 처리 상태는 아래 주문번호로 언제든지 확인하실 수 있습니다.
            </p>
            <p class="email-notice">
                주문 확인 이메일이 example@gmail.com으로 발송되었습니다.
            </p>
        </div>

        <!-- Order Tracking Card -->
        <div class="track-order-card">
            <h2 class="track-title">
                <i class="fas fa-shipping-fast"></i>
                배송 정보
            </h2>
            <p class="estimated-delivery">
                예상 배송일: <span class="delivery-date">2025년 3월 16일 - 3월 18일</span>
            </p>

            <div class="track-status">
                <div class="status-step active">
                    <div class="status-circle">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="status-text">주문완료</div>
                </div>
                <div class="status-step">
                    <div class="status-circle">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="status-text">상품준비중</div>
                </div>
                <div class="status-step">
                    <div class="status-circle">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="status-text">배송중</div>
                </div>
                <div class="status-step">
                    <div class="status-circle">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="status-text">배송완료</div>
                </div>
            </div>

            <button class="track-button" onclick="showToast('배송 조회가 시작되었습니다.')">
                <i class="fas fa-search"></i> 배송 조회하기
            </button>
        </div>

        <!-- Order Details -->
        <div class="details-card">
            <div class="section-header">
                <h2 class="section-title">
                    <i class="fas fa-clipboard-list"></i>
                    주문 상세정보
                </h2>
            </div>

            <!-- Order Items -->
            <div class="order-items">
                <?php 
                    $totalPrice = 0;
                    foreach ($productDetails as $product): 
                        $subtotal = $product['price'] * $product['quantity'];
                        $totalPrice += $subtotal;
                ?>
                    <div class="order-item">
                        <div class="item-image">
                            <img src="<?= htmlspecialchars($product['image']) ?>" alt="Product">
                        </div>
                        <div class="item-details">
                            <div class="item-name"><?= htmlspecialchars($product['name']) ?></div>
                            <div class="item-price-qty">
                                <div class="item-quantity">수량: <?= $product['quantity'] ?>개</div>
                                <div class="item-price"><?= number_format($product['price']) ?>원</div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="payment-total">
                    <div class="total-label">총 결제금액</div>
                    <div class="total-value"><?= number_format($totalPrice) ?>원</div>
                </div>
            </div>

            <!-- Shopping Information -->
            <div class="info-section">
                <h3 class="info-title">배송 정보</h3>
                <div class="info-content">
                    <div class="info-row">
                        <div class="info-label">받는 분</div>
                        <div class="info-value"><?= htmlspecialchars($member['name']) ?></div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">연락처</div>
                        <div class="info-value"><?= htmlspecialchars($member['phone']) ?></div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">배송지</div>
                        <div class="info-value"><?= nl2br(htmlspecialchars($member['address'])) ?></div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">배송 방법</div>
                        <div class="info-value">일반 배송 (3~5일 소요 예정)</div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">배송 요청사항</div>
                        <div class="info-value">문 앞에 놓아주세요</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="action-buttons">
            <a href="mainpage.php" class="btn btn-outline">
                <i class="fas fa-home"></i> 홈으로 돌아가기
            </a>
            
            <a href="mainpage.php" class="btn btn-primary">
                <i class="fas fa-shopping-cart"></i> 쇼핑 계속하기
            </a>
        </div>

        <!-- Recommended Products -->

    </div>

    <script>
        // DOM이 로드되면 실행
        document.addEventListener('DOMContentLoaded', function () {
            // 테마 관련 초기화
            initTheme();

            // 스크롤 이벤트 리스너
            window.addEventListener('scroll', handleScroll);

            // 1. 로고 클릭 시 메인 페이지로 이동 기능 추가
            const logo = document.querySelector('.logo');
            logo.addEventListener('click', function () {
                window.location.href = 'mainpage.html';
            });

            // 2. 검색 폼 제출 처리
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

            // 3. 검색창 클릭 시 검색 페이지로 이동 - 이 부분을 폼 이벤트와 별도로 처리
            const searchInput = document.querySelector('.search-bar');
            if (searchInput) {
                searchInput.addEventListener('click', function () {
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
            toastMessage.textContent = message || '알림 메시지';

            toast.classList.add('show');

            setTimeout(function () {
                toast.classList.remove('show');
            }, 3000);
        }
    </script>
</body>

</html>