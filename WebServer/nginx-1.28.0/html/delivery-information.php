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

    // 회원 정보 조회
    $sql = "SELECT name, phone, address FROM member WHERE id = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param('i', $memberId);
    $stmt->execute();
    $result = $stmt->get_result();
    $member = $result->fetch_assoc();
    
    // MySQL 장바구니 데이터 조회
    $sql = "SELECT * FROM cart_item WHERE member_id = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param('i', $memberId);
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
    <title>스마트픽 - 배송정보 입력</title>
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
            text-decoration: none;
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
            text-decoration: none;
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

        /* Main Content for Shipping Page */
        .main-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            margin-bottom: 50px;
        }

        /* Shipping Form Section */
        .shipping-section {
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

        /* Saved Address Styling */
        .saved-address {
            display: flex;
            padding: 15px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            margin-bottom: 15px;
            cursor: pointer;
            transition: var(--transition);
            background-color: var(--card-bg);
        }

        .saved-address:hover {
            border-color: var(--primary-light);
            background-color: var(--primary-light);
        }

        .saved-address.selected {
            border-color: var(--primary);
            background-color: var(--primary-light);
        }

        .address-radio {
            margin-right: 15px;
        }

        .address-info {
            flex: 1;
        }

        .address-name {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .address-detail,
        .address-contact {
            font-size: 13px;
            color: var(--text-light);
            margin-bottom: 3px;
        }

        /* Add New Address Button */
        .new-address-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px;
            background-color: var(--secondary);
            border: 1px dashed var(--border-color);
            border-radius: 8px;
            font-size: 14px;
            color: var(--text);
            cursor: pointer;
            transition: var(--transition);
        }

        .new-address-btn:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        /* Address Search Button */
        .address-btn {
            padding: 12px 20px;
            background-color: var(--secondary);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
            color: var(--text);
        }

        .address-btn:hover {
            background-color: var(--gray);
        }

        /* Shipping Options */
        .shipping-options {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .shipping-option {
            flex: 1;
            padding: 15px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            text-align: center;
            background-color: var(--card-bg);
        }

        .shipping-option:hover {
            border-color: var(--primary-light);
            background-color: var(--primary-light);
        }

        .shipping-option.selected {
            border-color: var(--primary);
            background-color: var(--primary-light);
        }

        .option-title {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .option-desc {
            font-size: 13px;
            color: var(--text-light);
        }

        .option-price {
            font-weight: 600;
            color: var(--primary-dark);
            margin-top: 8px;
        }

        /* Dropdown Styling */
        .dropdown-container {
            position: relative;
        }

        .dropdown-toggle {
            width: 100%;
            padding: 12px 15px;
            background-color: var(--body-bg);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 14px;
            text-align: left;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--text);
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: var(--body-bg);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            box-shadow: var(--shadow);
            margin-top: 5px;
            z-index: 10;
            display: none;
            max-height: 200px;
            overflow-y: auto;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-item {
            padding: 10px 15px;
            font-size: 14px;
            cursor: pointer;
            color: var(--text);
        }

        .dropdown-item:hover {
            background-color: var(--gray-light);
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
        }

        .item-option {
            font-size: 12px;
            color: var(--text-light);
            margin-bottom: 5px;
        }

        .item-price {
            font-size: 14px;
            font-weight: 600;
            color: var(--primary-dark);
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
        }

        .total-value {
            font-weight: 700;
            color: var(--primary-dark);
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
            color: var(--white);
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

            .shipping-options {
                flex-direction: column;
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
        }
    </style>
</head>

<body>
    <!-- Toast notification -->
    <div class="toast" id="toast">
        <i class="fas fa-check-circle"></i>
        <span>주소가 저장되었습니다.</span>
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
            <div class="progress-step active">
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
            <!-- Shipping Form Section -->
            <div class="shipping-section">
                <div class="section-header">
                    <h2 class="section-title">
                        <i class="fas fa-map-marker-alt"></i>
                        배송지 정보
                    </h2>
                </div>

                <!-- Saved Addresses -->
                <div class="saved-address selected">
                    <div class="address-radio">
                        <input type="radio" name="address" id="address1" checked>
                    </div>
                    <div class="address-info">
                        <div class="address-name">우리집 (기본배송지)</div>
                        <div class="address-detail"><?= htmlspecialchars($member['address']) ?></div>
                        <div class="address-contact"><?= htmlspecialchars($member['name']) ?>, <?= htmlspecialchars($member['phone']) ?></div>
                    </div>
                </div>

                <div class="new-address-btn" id="newAddressBtn">
                    <i class="fas fa-plus"></i>
                    새 배송지 추가
                </div>

                <!-- New Address Form (initially hidden) -->
                <div id="newAddressForm" style="display:none; margin-top: 20px;">
                    <div class="form-group">
                        <label for="recipientName" class="form-label required">받는 분</label>
                        <input type="text" id="recipientName" class="form-control" placeholder="받는 분 성함">
                    </div>

                    <div class="form-group">
                        <label for="recipientPhone" class="form-label required">연락처</label>
                        <input type="tel" id="recipientPhone" class="form-control" placeholder="'-' 없이 입력해주세요">
                    </div>

                    <div class="form-group">
                        <label for="zipcode" class="form-label required">우편번호</label>
                        <div class="form-row">
                            <div class="form-col" style="flex: 0.3;">
                                <input type="text" id="zipcode" class="form-control" placeholder="우편번호" readonly>
                            </div>
                            <div class="form-col" style="flex: 0.7;">
                                <button class="address-btn">주소 찾기</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address1" class="form-label required">기본주소</label>
                        <input type="text" id="address1" class="form-control" placeholder="기본주소" readonly>
                    </div>

                    <div class="form-group">
                        <label for="address2" class="form-label required">상세주소</label>
                        <input type="text" id="address2" class="form-control" placeholder="상세주소 입력">
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            <input type="checkbox" id="saveAddress">
                            이 주소를 기본 배송지로 저장
                        </label>
                    </div>
                </div>

                <!-- Delivery Options Section -->
                <div class="section-header" style="margin-top: 30px;">
                    <h2 class="section-title">
                        <i class="fas fa-truck"></i>
                        배송 방법
                    </h2>
                </div>

                <div class="shipping-options">
                    <div class="shipping-option selected">
                        <div class="option-title">일반 배송</div>
                        <div class="option-desc">3~5일 소요 예정</div>
                        <div class="option-price">무료</div>
                    </div>

                    <div class="shipping-option">
                        <div class="option-title">빠른 배송</div>
                        <div class="option-desc">1~2일 소요 예정</div>
                        <div class="option-price">3,000원</div>
                    </div>

                    <div class="shipping-option">
                        <div class="option-title">당일 배송</div>
                        <div class="option-desc">오후 3시 이전 주문 시</div>
                        <div class="option-price">5,000원</div>
                    </div>
                </div>

                <!-- Delivery Request Section -->
                <div class="section-header" style="margin-top: 30px;">
                    <h2 class="section-title">
                        <i class="fas fa-sticky-note"></i>
                        배송 요청사항
                    </h2>
                </div>

                <div class="form-group">
                    <div class="dropdown-container">
                        <button class="dropdown-toggle" id="requestToggle">
                            <span>배송 요청사항을 선택해주세요</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu" id="requestMenu">
                            <div class="dropdown-item">문 앞에 놓아주세요</div>
                            <div class="dropdown-item">경비실에 맡겨주세요</div>
                            <div class="dropdown-item">배송 전 연락 바랍니다</div>
                            <div class="dropdown-item">직접 입력</div>
                        </div>
                    </div>
                </div>

                <div class="form-group" id="customRequestGroup" style="display:none;">
                    <textarea class="form-control" id="customRequest" placeholder="배송 요청사항을 입력해주세요" rows="3"></textarea>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button class="btn btn-outline" onclick="location.href='cart.php'">
                        <i class="fas fa-chevron-left"></i> 장바구니로 돌아가기
                    </button>
                    <button class="btn btn-primary" onclick="location.href='payment.php'">
                        결제 계속하기 <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <!-- Order Summary Section -->
            <div class="summary-section">
            <h2 class="section-title">
                주문 요약
                <a href="cart.php" class="edit-cart">편집</a>
            </h2>

            <div class="summary-items">
                <?php
                $totalPrice = 0;

                foreach ($productDetails as $product):
                    $subtotal = $product['price'] * $product['quantity'];
                    $totalPrice += $subtotal;
                ?>
                <div class="summary-item">
                    <div class="item-image">
                        <img src="<?= $product['image'] ?>" alt="Product">
                    </div>
                    <div class="item-details">
                        <div class="item-name"><?= htmlspecialchars($product['name']) ?></div>
                        <div class="item-price"><?= number_format($product['price']) ?>원</div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="summary-line">
                <div class="summary-label">상품금액</div>
                <div class="summary-value"><?= number_format($totalPrice) ?>원</div>
            </div>

            <div class="summary-line">
                <div class="summary-label">상품 할인</div>
                <div class="summary-value">-0원</div>
            </div>

            <div class="summary-line">
                <div class="summary-label">배송비</div>
                <div class="summary-value">무료</div>
            </div>

            <div class="summary-total">
                <div class="total-label">총 결제금액</div>
                <div class="total-value"><?= number_format($totalPrice) ?>원</div>
            </div>
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
            toastMessage.textContent = message || '주소가 저장되었습니다.';

            toast.classList.add('show');

            setTimeout(function () {
                toast.classList.remove('show');
            }, 3000);
        }
        // DOM이 로드되면 실행
        document.addEventListener('DOMContentLoaded', function () {
            // 테마 관련 초기화
            initTheme();

            // 스크롤 이벤트 리스너
            window.addEventListener('scroll', handleScroll);

            // 새 배송지 폼 토글
            document.getElementById('newAddressBtn').addEventListener('click', function () {
                const form = document.getElementById('newAddressForm');
                if (form.style.display === 'none') {
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                }
            });

            // 배송지 선택
            document.querySelectorAll('.saved-address').forEach(address => {
                address.addEventListener('click', function () {
                    document.querySelectorAll('.saved-address').forEach(addr => {
                        addr.classList.remove('selected');
                    });
                    this.classList.add('selected');
                    const radio = this.querySelector('input[type="radio"]');
                    radio.checked = true;
                });
            });

            // 배송 옵션 선택
            document.querySelectorAll('.shipping-option').forEach(option => {
                option.addEventListener('click', function () {
                    document.querySelectorAll('.shipping-option').forEach(opt => {
                        opt.classList.remove('selected');
                    });
                    this.classList.add('selected');
                });
            });

            // 배송 요청사항 드롭다운
            document.getElementById('requestToggle').addEventListener('click', function () {
                document.getElementById('requestMenu').classList.toggle('show');
            });

            // 외부 클릭 시 드롭다운 닫기
            window.addEventListener('click', function (event) {
                if (!event.target.matches('.dropdown-toggle') && !event.target.matches('.dropdown-toggle *')) {
                    const dropdown = document.getElementById('requestMenu');
                    if (dropdown.classList.contains('show')) {
                        dropdown.classList.remove('show');
                    }
                }
            });

            // 배송 요청사항 선택
            document.querySelectorAll('.dropdown-item').forEach(item => {
                item.addEventListener('click', function () {
                    const text = this.textContent;
                    document.querySelector('.dropdown-toggle span').textContent = text;
                    document.getElementById('requestMenu').classList.remove('show');

                    // "직접 입력"인 경우 커스텀 인풋 표시
                    const customGroup = document.getElementById('customRequestGroup');
                    if (text === '직접 입력') {
                        customGroup.style.display = 'block';
                    } else {
                        customGroup.style.display = 'none';
                    }
                });

            });
            // 검색창 클릭 이벤트 - 검색 페이지로 이동
            const searchBar = document.getElementById('searchBar');
            const searchIcon = document.getElementById('searchIcon');
            // 검색창 클릭 시 이벤트
            if (searchBar) {
                searchBar.addEventListener('click', function () {
                    window.location.href = 'search_results.html';
                });
            }

            // 검색 아이콘 클릭 시 이벤트
            if (searchIcon) {
                searchIcon.addEventListener('click', function () {
                    window.location.href = 'search_results.html';
                });
            }

        });



    </script>
</body>

</html>