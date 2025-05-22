<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 마이페이지</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary: #e93170;
            --primary-dark: #d42665;
            --primary-light: #ff6b9e;
            --secondary: #f8f9fa;
            --dark: #343a40;
            --light: #ffffff;
            --gray: #e5e5e5;
            --gray-dark: #ababab;
            --text: #212529;
            --success: #28a745;
            --warning: #ffc107;
            --danger: #dc3545;
            --info: #17a2b8;
            --border-radius: 10px;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
            --body-bg: #ffffff;
            --card-bg: #ffffff;
            --header-bg: #ffffff;
            --border-color: #e0e0e0;
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
            --light: #343a40;
            --gray: #495057;
            --gray-dark: #ababab;
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
            background-color: var(--body-bg);
            color: var(--text);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Header styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: var(--header-bg);
            position: sticky;
            top: 0;
            z-index: 1000;
            max-width: 1280px;
            margin: 0 auto;
            width: 100%;
            padding: 15px 20px;
            border-bottom: 1px solid var(--border-color);
            transition: var(--transition);
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
        }

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
            text-decoration: none;
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

        /* Main layout */
        .main-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 40px 20px;
            width: 100%;
            display: flex;
            gap: 30px;
            flex-grow: 1;
        }

        /* Sidebar navigation */
        .sidebar {
            width: 250px;
            flex-shrink: 0;
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
        }

        .user-profile {
            padding: 30px 20px;
            text-align: center;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
        }

        .user-name {
            font-size: 18px;
            font-weight: 600;
            margin-top: 15px;
        }

        .user-email {
            font-size: 14px;
            opacity: 0.9;
            margin-top: 5px;
        }

        .user-profile-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: var(--light);
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            border: 3px solid rgba(255, 255, 255, 0.3);
        }

        .user-profile-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: var(--text);
            text-decoration: none;
            transition: var(--transition);
            border-left: 3px solid transparent;
        }

        .menu-item.active {
            background-color: rgba(233, 49, 112, 0.1);
            color: var(--primary);
            border-left-color: var(--primary);
            font-weight: 500;
        }

        .menu-item:hover {
            background-color: var(--secondary);
        }

        .menu-item i {
            margin-right: 15px;
            font-size: 18px;
            width: 20px;
            text-align: center;
        }

        /* Content area */
        .content-area {
            flex-grow: 1;
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 40px;
            transition: var(--transition);
        }

        .content-header {
            margin-bottom: 30px;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 20px;
        }

        .content-title {
            font-size: 24px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 10px;
        }

        .content-subtitle {
            color: var(--gray-dark);
            font-size: 15px;
        }

        /* Profile form layout */
        .profile-form {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .profile-photo-section {
            width: 180px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: var(--secondary);
            position: relative;
            overflow: hidden;
            border: 1px solid var(--border-color);
        }

        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .photo-upload-btn {
            background-color: var(--secondary);
            color: var(--text);
            border: 1px solid var(--border-color);
            border-radius: 50px;
            padding: 8px 15px;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .photo-upload-btn:hover {
            background-color: var(--gray);
        }

        .profile-info-section {
            flex: 1;
            min-width: 300px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 15px;
            color: var(--text);
        }

        .required-mark::after {
            content: '*';
            color: var(--primary);
            margin-left: 5px;
        }

        .form-input {
            width: 100%;
            padding: 12px 15px 12px 40px;
            border: 2px solid var(--border-color);
            border-radius: var(--border-radius);
            font-size: 15px;
            transition: var(--transition);
            outline: none;
            background-color: var(--body-bg);
            color: var(--text);
        }

        .form-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(233, 49, 112, 0.2);
        }

        .form-icon {
            position: absolute;
            left: 15px;
            top: 40px;
            color: var(--text);
            opacity: 0.6;
            transition: var(--transition);
        }

        .form-input:focus+.form-icon {
            color: var(--primary);
            opacity: 1;
        }

        .helper-text {
            margin-top: 5px;
            font-size: 13px;
            color: var(--gray-dark);
        }

        /* Button styles */
        .button-group {
            margin-top: 30px;
            display: flex;
            gap: 15px;
        }

        .save-button {
            padding: 12px 30px;
            background: linear-gradient(to right, var(--primary), var(--primary-dark));
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .save-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(233, 49, 112, 0.3);
        }

        .cancel-button {
            padding: 12px 30px;
            background-color: var(--secondary);
            color: var(--text);
            border: 1px solid var(--border-color);
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .cancel-button:hover {
            background-color: var(--gray);
        }

        /* Toast notification */
        .toast {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%) translateY(100px);
            background-color: var(--dark);
            color: var(--light);
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

        /* Order history styles */
        .order-list {
            margin-top: 20px;
        }

        .order-item {
            background-color: var(--secondary);
            border-radius: var(--border-radius);
            margin-bottom: 20px;
            overflow: hidden;
            border: 1px solid var(--border-color);
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            padding: 15px 20px;
            background-color: var(--gray);
            border-bottom: 1px solid var(--border-color);
        }

        .order-number {
            font-weight: 500;
            color: var(--text);
        }

        .order-date {
            color: var(--gray-dark);
        }

        .order-status {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
        }

        .status-complete {
            background-color: rgba(40, 167, 69, 0.2);
            color: var(--success);
        }

        .status-shipping {
            background-color: rgba(255, 193, 7, 0.2);
            color: var(--warning);
        }

        .status-processing {
            background-color: rgba(233, 49, 112, 0.2);
            color: var(--primary);
        }

        .order-content {
            padding: 20px;
        }

        .order-product {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px dashed var(--border-color);
        }

        .order-product:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .product-image {
            width: 80px;
            height: 80px;
            border-radius: var(--border-radius);
            overflow: hidden;
            margin-right: 15px;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-info {
            flex-grow: 1;
        }

        .product-name {
            font-weight: 500;
            margin-bottom: 5px;
            color: var(--text);
        }

        .product-meta {
            display: flex;
            justify-content: space-between;
            color: var(--gray-dark);
            font-size: 14px;
        }

        .order-footer {
            background-color: var(--secondary);
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid var(--border-color);
        }

        .order-total {
            font-weight: 600;
            color: var(--text);
        }

        .order-total-price {
            color: var(--primary);
            font-size: 18px;
            font-weight: 700;
        }

        .order-actions {
            display: flex;
            gap: 10px;
        }

        .order-btn {
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
        }

        .order-btn-detail {
            background-color: var(--light);
            color: var(--text);
            border: 1px solid var(--border-color);
        }

        .order-btn-track {
            background-color: var(--primary);
            color: white;
            border: none;
        }

        .order-btn:hover {
            transform: translateY(-2px);
        }

        /* Wishlist styles */
        .wishlist-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .wishlist-item {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            border: 1px solid var(--border-color);
        }

        .wishlist-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .wishlist-image {
            height: 200px;
            overflow: hidden;
        }

        .wishlist-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .wishlist-item:hover .wishlist-image img {
            transform: scale(1.05);
        }

        .wishlist-content {
            padding: 15px;
        }

        .wishlist-title {
            font-weight: 500;
            margin-bottom: 10px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 42px;
            color: var(--text);
        }

        .wishlist-price {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 10px;
        }

        .current-price {
            font-weight: 700;
            color: var(--primary);
            font-size: 16px;
        }

        .original-price {
            text-decoration: line-through;
            color: var(--gray-dark);
            font-size: 14px;
        }

        .discount-rate {
            background-color: rgba(233, 49, 112, 0.2);
            color: var(--primary);
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }

        .wishlist-actions {
            display: flex;
            gap: 8px;
        }

        .wishlist-btn {
            flex: 1;
            padding: 8px 0;
            text-align: center;
            border-radius: 5px;
            font-size: 13px;
            cursor: pointer;
            transition: var(--transition);
        }

        .add-cart-btn {
            background-color: var(--primary);
            color: white;
            border: none;
        }

        .remove-btn {
            background-color: var(--card-bg);
            color: var(--text);
            border: 1px solid var(--border-color);
        }

        .wishlist-btn:hover {
            transform: translateY(-2px);
        }

        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 50px 0;
            color: var(--gray-dark);
        }

        .empty-icon {
            font-size: 48px;
            margin-bottom: 20px;
            opacity: 0.5;
        }

        .empty-title {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 10px;
            color: var(--text);
        }

        .empty-description {
            margin-bottom: 20px;
            color: var(--gray-dark);
        }

        .empty-action {
            display: inline-block;
            padding: 10px 20px;
            background-color: var(--primary);
            color: white;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }

        .empty-action:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(233, 49, 112, 0.3);
        }

        /* 배송 조회 스타일 */
        .tracking-container {
            margin-top: 20px;
        }

        .tracking-form {
            display: flex;
            margin-bottom: 30px;
            gap: 10px;
        }

        .tracking-input {
            flex: 1;
            padding: 12px 15px;
            border: 2px solid var(--border-color);
            border-radius: var(--border-radius);
            font-size: 15px;
            outline: none;
            background-color: var(--body-bg);
            color: var(--text);
        }

        .tracking-button {
            padding: 12px 25px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .tracking-button:hover {
            background-color: var(--primary-dark);
        }

        .tracking-result {
            background-color: var(--secondary);
            border-radius: var(--border-radius);
            padding: 20px;
            margin-bottom: 30px;
            border: 1px solid var(--border-color);
        }

        .tracking-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border-color);
        }

        .tracking-info {
            flex: 1;
        }

        .tracking-company {
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--text);
        }

        .tracking-number {
            color: var(--gray-dark);
            font-size: 14px;
        }

        .tracking-status {
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            background-color: rgba(23, 162, 184, 0.2);
            color: var(--info);
        }

        .tracking-steps {
            position: relative;
            padding-left: 30px;
        }

        .tracking-steps::before {
            content: '';
            position: absolute;
            top: 0;
            left: 10px;
            width: 2px;
            height: 100%;
            background-color: var(--border-color);
            z-index: 0;
        }

        .tracking-step {
            position: relative;
            padding-bottom: 25px;
            padding-left: 20px;
        }

        .tracking-step:last-child {
            padding-bottom: 0;
        }

        .tracking-step::before {
            content: '';
            position: absolute;
            top: 0;
            left: -30px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: var(--border-color);
            z-index: 1;
        }

        .tracking-step.active::before {
            background-color: var(--primary);
        }

        .tracking-step-date {
            font-size: 13px;
            color: var(--gray-dark);
            margin-bottom: 5px;
        }

        .tracking-step-location {
            font-weight: 500;
            margin-bottom: 5px;
            color: var(--text);
        }

        .tracking-step-desc {
            font-size: 14px;
            color: var(--gray-dark);
        }

        /* 최근 본 상품 스타일 */
        .recent-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .recent-count {
            color: var(--gray-dark);
            font-size: 14px;
        }

        .recent-clear {
            color: var(--primary);
            font-size: 14px;
            text-decoration: none;
            cursor: pointer;
        }

        .recent-clear:hover {
            text-decoration: underline;
        }

        .recent-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 15px;
        }

        .recent-item {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid var(--border-color);
        }

        .recent-item:hover {
            transform: translateY(-3px);
        }

        .recent-image {
            height: 120px;
            overflow: hidden;
        }

        .recent-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .recent-item:hover .recent-image img {
            transform: scale(1.05);
        }

        .recent-content {
            padding: 12px;
        }

        .recent-title {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 38px;
            color: var(--text);
        }

        .recent-price {
            color: var(--primary);
            font-weight: 700;
            font-size: 15px;
        }

        .recent-time {
            font-size: 12px;
            color: var(--gray-dark);
            margin-top: 5px;
        }

        /* 쿠폰함 스타일 */
        .coupon-actions {
            display: flex;
            margin-bottom: 20px;
        }

        .coupon-tabs {
            display: flex;
            border-bottom: 2px solid var(--border-color);
            margin-bottom: 20px;
        }

        .coupon-tab {
            padding: 10px 20px;
            cursor: pointer;
            font-weight: 500;
            color: var(--text);
            position: relative;
        }

        .coupon-tab.active {
            color: var(--primary);
        }

        .coupon-tab.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--primary);
        }

        .coupon-register {
            display: flex;
            margin-left: auto;
            margin-bottom: 20px;
        }

        .coupon-input {
            padding: 10px 15px;
            border: 2px solid var(--border-color);
            border-radius: var(--border-radius) 0 0 var(--border-radius);
            font-size: 14px;
            outline: none;
            background-color: var(--body-bg);
            color: var(--text);
            width: 200px;
        }

        .coupon-submit {
            padding: 10px 20px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
        }

        .coupon-submit:hover {
            background-color: var(--primary-dark);
        }

        .coupon-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .coupon-item {
            background-color: var(--secondary);
            border-radius: var(--border-radius);
            overflow: hidden;
            position: relative;
            border: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
        }

        .coupon-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 20px;
            width: 20px;
            height: 10px;
            background-color: var(--body-bg);
            border-radius: 0 0 10px 10px;
        }

        .coupon-item::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 20px;
            width: 20px;
            height: 10px;
            background-color: var(--body-bg);
            border-radius: 10px 10px 0 0;
        }

        .coupon-header {
            background-color: var(--primary);
            color: white;
            padding: 15px;
            position: relative;
        }

        .coupon-title {
            font-weight: 700;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .coupon-period {
            font-size: 13px;
            opacity: 0.8;
        }

        .coupon-content {
            padding: 15px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .coupon-amount {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .coupon-desc {
            font-size: 14px;
            color: var(--gray-dark);
            margin-bottom: 10px;
            flex-grow: 1;
        }

        .coupon-condition {
            font-size: 13px;
            color: var(--text);
            padding-top: 10px;
            border-top: 1px dashed var(--border-color);
        }

        .coupon-expired {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 20px;
            font-weight: 700;
            transform: rotate(-15deg);
        }

        /* Content tabs for mobile */
        .content-tabs {
            display: none;
        }

        @media screen and (max-width: 768px) {
            .main-container {
                flex-direction: column;
                padding: 20px;
            }

            .sidebar {
                width: 100%;
            }

            .content-tabs {
                display: flex;
                overflow-x: auto;
                margin-bottom: 20px;
                padding-bottom: 5px;
            }

            .tab-item {
                padding: 10px 20px;
                white-space: nowrap;
                border-bottom: 2px solid transparent;
                cursor: pointer;
                color: var(--text);
            }

            .tab-item.active {
                border-bottom-color: var(--primary);
                color: var(--primary);
                font-weight: 500;
            }

            .content-area {
                padding: 20px;
            }

            .profile-form {
                flex-direction: column;
            }

            .profile-photo-section {
                width: 100%;
            }

            .recent-grid,
            .wishlist-grid,
            .coupon-list {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (max-width: 480px) {

            .recent-grid,
            .wishlist-grid,
            .coupon-list {
                grid-template-columns: 1fr;
            }

            .order-header {
                flex-direction: column;
                gap: 10px;
            }
        }

        .recent-cart-btn {
            margin-top: 8px;
            padding: 6px 0;
            width: 100%;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 13px;
            cursor: pointer;
            transition: var(--transition);
        }

        .recent-cart-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        /* 모달 스타일 */
        .modal {
            display: none;
            position: fixed;
            z-index: 1100;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: var(--card-bg);
            margin: 50px auto;
            width: 90%;
            max-width: 800px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            position: relative;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-header {
            padding: 20px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            background-color: var(--card-bg);
            z-index: 1;
        }

        .close-modal {
            color: var(--text);
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .modal-body {
            padding: 20px;
        }

        /* 주문 상세 스타일 */
        .order-detail-header {
            margin-bottom: 25px;
        }

        .order-id-status {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .order-info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            padding: 15px;
            background-color: var(--secondary);
        }

        .order-info-item {
            margin-bottom: 10px;
        }

        /* 주문 상품 섹션 */
        .order-products-section {
            margin-bottom: 25px;
        }

        .order-products-section h3,
        .order-amount-section h3,
        .shipping-payment-section h3 {
            font-size: 16px;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--border-color);
        }

        .order-product-item {
            display: flex;
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            padding: 15px;
            margin-bottom: 10px;
        }

        .product-options {
            font-size: 13px;
            color: var(--text);
            opacity: 0.7;
            margin-bottom: 10px;
        }

        .product-price-qty {
            display: flex;
            justify-content: space-between;
        }

        /* 주문 금액 정보 */
        .order-amount-section {
            margin-bottom: 25px;
        }

        .amount-table {
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            overflow: hidden;
        }

        .amount-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 15px;
            border-bottom: 1px solid var(--border-color);
        }

        .amount-row:last-child {
            border-bottom: none;
        }

        .amount-row.total {
            background-color: var(--primary-light);
            font-weight: 600;
        }

        .amount-row.total .amount-value {
            color: var(--primary);
        }

        /* 배송 및 결제 정보 */
        .info-sections {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .info-section {
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            padding: 15px;
        }

        .info-section h4 {
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--border-color);
        }

        .info-row {
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .info-sections {
                grid-template-columns: 1fr;
            }

            .order-id-status {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .modal-content {
                margin: 30px auto;
                width: 95%;
            }
        }
    </style>
</head>

<body>
    <!-- Toast notification -->
    <div class="toast" id="toast">
        <i class="fas fa-check-circle"></i>
        <span id="toast-message">변경사항이 저장되었습니다.</span>
    </div>

    <!-- Header section -->
    <header>
        <a href="mainpage.html" class="logo">
            <div class="logo">
                <div class="logo-box">스마<br>트픽</div>
                <span>스마트픽</span>
            </div>
        </a>

        <div class="nav-buttons">
            <a href="mainpage.html" class="nav-button">
                <i class="fas fa-home"></i>
                홈
            </a>
            <a href="cart.html" class="nav-button">
                <i class="fas fa-shopping-cart"></i>
                장바구니
            </a>
            <button class="theme-toggle" id="themeToggle" aria-label="테마 변경">
                <i class="fas fa-sun"></i>
            </button>
        </div>
    </header>

    <!-- Main content container -->
    <div class="main-container">
        <!-- Sidebar navigation -->
        <div class="sidebar">
            <div class="user-profile">
                <div class="user-profile-img">
                    <img src="/api/placeholder/150/150" alt="Profile">
                </div>
                <div class="user-name">홍길동</div>
                <div class="user-email">user@example.com</div>
            </div>

            <div class="sidebar-menu">
                <a href="#" class="menu-item active" data-tab="profile">
                    <i class="fas fa-user"></i>
                    개인정보
                </a>
                <a href="#" class="menu-item" data-tab="orders">
                    <i class="fas fa-shopping-bag"></i>
                    주문내역
                </a>
                <a href="#" class="menu-item" data-tab="tracking">
                    <i class="fas fa-truck"></i>
                    배송조회
                </a>
                <a href="#" class="menu-item" data-tab="wishlist">
                    <i class="fas fa-heart"></i>
                    찜 목록
                </a>
                <a href="#" class="menu-item" data-tab="recent">
                    <i class="fas fa-clock"></i>
                    최근 본 상품
                </a>
                <a href="#" class="menu-item" data-tab="coupons">
                    <i class="fas fa-ticket-alt"></i>
                    쿠폰함
                </a>
            </div>
        </div>

        <!-- Mobile tabs -->
        <div class="content-tabs">
            <div class="tab-item active" data-tab="profile">개인정보</div>
            <div class="tab-item" data-tab="orders">주문내역</div>
            <div class="tab-item" data-tab="tracking">배송조회</div>
            <div class="tab-item" data-tab="wishlist">찜 목록</div>
            <div class="tab-item" data-tab="recent">최근 본 상품</div>
            <div class="tab-item" data-tab="coupons">쿠폰함</div>
        </div>

        <!-- Content area -->
        <div class="content-area">
            <!-- Profile tab -->
            <div class="content-tab active" id="profile-tab">
                <div class="content-header">
                    <h1 class="content-title">개인정보 관리</h1>
                    <p class="content-subtitle">개인 정보를 관리하고 업데이트하세요.</p>
                </div>

                <form id="profileForm" onsubmit="return saveProfile()">
                    <div class="profile-form">
                        <div class="profile-photo-section">
                            <div class="profile-photo">
                                <img src="/api/placeholder/150/150" alt="Profile" id="profileImage">
                            </div>
                            <label for="photoUpload" class="photo-upload-btn">
                                <i class="fas fa-camera"></i>
                                사진 변경
                            </label>
                            <input type="file" id="photoUpload" accept="image/*" style="display: none;"
                                onchange="previewImage(this)">
                        </div>

                        <div class="profile-info-section">
                            <div class="form-group">
                                <label for="userName" class="form-label required-mark">이름</label>
                                <input type="text" id="userName" class="form-input" value="홍길동" required>
                                <i class="fas fa-user form-icon"></i>
                            </div>

                            <div class="form-group">
                                <label for="userEmail" class="form-label required-mark">이메일</label>
                                <input type="email" id="userEmail" class="form-input" value="user@example.com" required>
                                <i class="fas fa-envelope form-icon"></i>
                            </div>

                            <div class="form-group">
                                <label for="userPhone" class="form-label required-mark">전화번호</label>
                                <input type="tel" id="userPhone" class="form-input" value="010-1234-5678" required>
                                <i class="fas fa-phone form-icon"></i>
                                <div class="helper-text">'-' 없이 숫자만 입력하세요. 예) 01012345678</div>
                            </div>

                            <div class="form-group">
                                <label for="userBirth" class="form-label">생년월일</label>
                                <input type="date" id="userBirth" class="form-input" value="1990-01-01">
                                <i class="fas fa-calendar form-icon"></i>
                            </div>

                            <div class="form-group">
                                <label for="userAddress" class="form-label">주소</label>
                                <input type="text" id="userAddress" class="form-input" value="서울특별시 강남구 테헤란로 123">
                                <i class="fas fa-map-marker-alt form-icon"></i>
                            </div>

                            <div class="button-group">
                                <button type="submit" class="save-button">저장</button>
                                <button type="button" class="cancel-button" onclick="resetForm()">취소</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Orders tab -->
            <!-- Orders tab -->
            <div class="content-tab" id="orders-tab" style="display: none;">
                <div class="content-header">
                    <h1 class="content-title">주문 내역</h1>
                    <p class="content-subtitle">지난 주문 내역과 배송 현황을 확인하세요.</p>
                </div>

                <div class="order-list">
                    <!-- 첫번째 주문 -->
                    <div class="order-item">
                        <div class="order-header">
                            <div class="order-number">주문번호: ORD-2023120101</div>
                            <div class="order-date">2023-12-01</div>
                            <div class="order-status status-complete">배송 완료</div>
                        </div>
                        <div class="order-content">
                            <div class="order-product">
                                <div class="product-image">
                                    <img src="/api/placeholder/80/80" alt="Product">
                                </div>
                                <div class="product-info">
                                    <div class="product-name">삼성 갤럭시북 Pro 360</div>
                                    <div class="product-meta">
                                        <div class="product-quantity">수량: 1개</div>
                                        <div class="product-price">1,450,000원</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-footer">
                            <div class="order-total">
                                총 결제금액: <span class="order-total-price">1,450,000원</span>
                            </div>
                            <div class="order-actions">
                                <button class="order-btn order-btn-detail" data-order-id="ORD-2023120101">주문 상세</button>
                            </div>
                        </div>
                    </div>

                    <!-- 두번째 주문 -->
                    <div class="order-item">
                        <div class="order-header">
                            <div class="order-number">주문번호: ORD-2023112501</div>
                            <div class="order-date">2023-11-25</div>
                            <div class="order-status status-shipping">배송 중</div>
                        </div>
                        <div class="order-content">
                            <div class="order-product">
                                <div class="product-image">
                                    <img src="/api/placeholder/80/80" alt="Product">
                                </div>
                                <div class="product-info">
                                    <div class="product-name">LG OLED TV 65인치</div>
                                    <div class="product-meta">
                                        <div class="product-quantity">수량: 1개</div>
                                        <div class="product-price">2,190,000원</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-footer">
                            <div class="order-total">
                                총 결제금액: <span class="order-total-price">2,190,000원</span>
                            </div>
                            <div class="order-actions">
                                <button class="order-btn order-btn-detail" data-order-id="ORD-2023112501">주문 상세</button>
                            </div>
                        </div>
                    </div>

                    <!-- 세번째 주문 -->
                    <div class="order-item">
                        <div class="order-header">
                            <div class="order-number">주문번호: ORD-2023111501</div>
                            <div class="order-date">2023-11-15</div>
                            <div class="order-status status-processing">처리 중</div>
                        </div>
                        <div class="order-content">
                            <div class="order-product">
                                <div class="product-image">
                                    <img src="/api/placeholder/80/80" alt="Product">
                                </div>
                                <div class="product-info">
                                    <div class="product-name">애플 맥북 프로 M2</div>
                                    <div class="product-meta">
                                        <div class="product-quantity">수량: 1개</div>
                                        <div class="product-price">2,350,000원</div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-product">
                                <div class="product-image">
                                    <img src="/api/placeholder/80/80" alt="Product">
                                </div>
                                <div class="product-info">
                                    <div class="product-name">애플 에어팟 프로 2</div>
                                    <div class="product-meta">
                                        <div class="product-quantity">수량: 1개</div>
                                        <div class="product-price">359,000원</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-footer">
                            <div class="order-total">
                                총 결제금액: <span class="order-total-price">2,709,000원</span>
                            </div>
                            <div class="order-actions">
                                <button class="order-btn order-btn-detail" data-order-id="ORD-2023111501">주문 상세</button>
                                <button class="order-btn order-btn-track">주문 취소</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 주문 상세 모달 - 여기에 추가 -->
                <div id="orderDetailModal" class="modal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2>주문 상세 정보</h2>
                            <span class="close-modal">&times;</span>
                        </div>
                        <div class="modal-body">
                            <div class="order-detail-header">
                                <div class="order-id-status">
                                    <h3>주문번호: <span id="modalOrderId">ORD-2023120101</span></h3>
                                    <div class="order-status status-processing" id="modalOrderStatus">상품 준비중</div>
                                </div>

                                <div class="order-info-grid">
                                    <div class="order-info-item">
                                        <div class="info-label">주문일자</div>
                                        <div class="info-value" id="modalOrderDate">2023-12-01</div>
                                    </div>
                                    <div class="order-info-item">
                                        <div class="info-label">결제 방법</div>
                                        <div class="info-value" id="modalPaymentMethod">신용카드</div>
                                    </div>
                                    <div class="order-info-item">
                                        <div class="info-label">결제 상태</div>
                                        <div class="info-value" id="modalPaymentStatus">결제 완료</div>
                                    </div>
                                    <div class="order-info-item">
                                        <div class="info-label">예상 배송일</div>
                                        <div class="info-value" id="modalEstDeliveryDate">2023-12-05</div>
                                    </div>
                                </div>
                            </div>

                            <!-- 주문 상품 -->
                            <div class="order-products-section">
                                <h3>주문 상품</h3>
                                <div class="order-product-item">
                                    <div class="product-image">
                                        <img src="/api/placeholder/80/80" alt="제품 이미지">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-name">삼성 갤럭시북 Pro 360</div>
                                        <div class="product-options">색상: 미스틱 실버 / 메모리: 16GB</div>
                                        <div class="product-price-qty">
                                            <span class="qty">수량: 1개</span>
                                            <span class="price">1,450,000원</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 주문 금액 정보 -->
                            <div class="order-amount-section">
                                <h3>주문 금액 정보</h3>
                                <div class="amount-table">
                                    <div class="amount-row">
                                        <div class="amount-label">상품 금액</div>
                                        <div class="amount-value">1,450,000원</div>
                                    </div>
                                    <div class="amount-row">
                                        <div class="amount-label">할인 금액</div>
                                        <div class="amount-value">0원</div>
                                    </div>
                                    <div class="amount-row">
                                        <div class="amount-label">배송비</div>
                                        <div class="amount-value">0원</div>
                                    </div>
                                    <div class="amount-row total">
                                        <div class="amount-label">총 결제 금액</div>
                                        <div class="amount-value">1,450,000원</div>
                                    </div>
                                </div>
                            </div>

                            <!-- 배송 정보 및 결제 정보 -->
                            <div class="shipping-payment-section">
                                <h3>배송 정보 및 결제 정보</h3>
                                <div class="info-sections">
                                    <div class="info-section">
                                        <h4>배송 정보</h4>
                                        <div class="info-row">
                                            <div class="info-label">받는 사람</div>
                                            <div class="info-value">홍길동</div>
                                        </div>
                                        <div class="info-row">
                                            <div class="info-label">연락처</div>
                                            <div class="info-value">010-1234-5678</div>
                                        </div>
                                        <div class="info-row">
                                            <div class="info-label">배송 주소</div>
                                            <div class="info-value">서울특별시 강남구 테헤란로 123, 456동 789호</div>
                                        </div>
                                        <div class="info-row">
                                            <div class="info-label">배송 요청사항</div>
                                            <div class="info-value">부재시 경비실에 맡겨주세요.</div>
                                        </div>
                                    </div>
                                    <div class="info-section">
                                        <h4>결제 정보</h4>
                                        <div class="info-row">
                                            <div class="info-label">결제 방법</div>
                                            <div class="info-value">신용카드</div>
                                        </div>
                                        <div class="info-row">
                                            <div class="info-label">카드사</div>
                                            <div class="info-value">삼성카드</div>
                                        </div>
                                        <div class="info-row">
                                            <div class="info-label">결제 금액</div>
                                            <div class="info-value">1,450,000원</div>
                                        </div>
                                        <div class="info-row">
                                            <div class="info-label">결제일자</div>
                                            <div class="info-value">2023-12-01 14:30:25</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 배송 조회 탭 -->
            <div class="content-tab" id="tracking-tab" style="display: none;">
                <div class="content-header">
                    <h1 class="content-title">배송 조회</h1>
                    <p class="content-subtitle">주문한 상품의 배송 현황을 실시간으로 확인하세요.</p>
                </div>

                <div class="tracking-container">
                    <div class="tracking-form">
                        <input type="text" class="tracking-input" placeholder="운송장 번호를 입력하세요">
                        <button class="tracking-button">조회하기</button>
                    </div>

                    <div class="tracking-result">
                        <div class="tracking-header">
                            <div class="tracking-info">
                                <div class="tracking-company">CJ대한통운</div>
                                <div class="tracking-number">운송장 번호: 123456789012</div>
                            </div>
                            <div class="tracking-status">배송 중</div>
                        </div>

                        <div class="tracking-steps">
                            <div class="tracking-step active">
                                <div class="tracking-step-date">2023-12-01 18:30</div>
                                <div class="tracking-step-location">경기 김포 물류센터</div>
                                <div class="tracking-step-desc">집화 완료</div>
                            </div>
                            <div class="tracking-step active">
                                <div class="tracking-step-date">2023-12-02 09:15</div>
                                <div class="tracking-step-location">경기 김포 물류센터</div>
                                <div class="tracking-step-desc">출고 완료</div>
                            </div>
                            <div class="tracking-step active">
                                <div class="tracking-step-date">2023-12-02 14:20</div>
                                <div class="tracking-step-location">서울 강남 배송점</div>
                                <div class="tracking-step-desc">배송지 도착</div>
                            </div>
                            <div class="tracking-step">
                                <div class="tracking-step-date">-</div>
                                <div class="tracking-step-location">서울 강남구</div>
                                <div class="tracking-step-desc">배송 예정</div>
                            </div>
                            <div class="tracking-step">
                                <div class="tracking-step-date">-</div>
                                <div class="tracking-step-location">수령지</div>
                                <div class="tracking-step-desc">배송 완료</div>
                            </div>
                        </div>
                    </div>

                    <div class="tracking-result">
                        <div class="tracking-header">
                            <div class="tracking-info">
                                <div class="tracking-company">우체국 택배</div>
                                <div class="tracking-number">운송장 번호: 987654321098</div>
                            </div>
                            <div class="tracking-status">배송 완료</div>
                        </div>

                        <div class="tracking-steps">
                            <div class="tracking-step active">
                                <div class="tracking-step-date">2023-11-25 14:10</div>
                                <div class="tracking-step-location">인천 공항 물류센터</div>
                                <div class="tracking-step-desc">집화 완료</div>
                            </div>
                            <div class="tracking-step active">
                                <div class="tracking-step-date">2023-11-25 17:45</div>
                                <div class="tracking-step-location">인천 공항 물류센터</div>
                                <div class="tracking-step-desc">출고 완료</div>
                            </div>
                            <div class="tracking-step active">
                                <div class="tracking-step-date">2023-11-26 10:30</div>
                                <div class="tracking-step-location">서울 강남 우체국</div>
                                <div class="tracking-step-desc">배송지 도착</div>
                            </div>
                            <div class="tracking-step active">
                                <div class="tracking-step-date">2023-11-26 13:20</div>
                                <div class="tracking-step-location">서울 강남구</div>
                                <div class="tracking-step-desc">배송 출발</div>
                            </div>
                            <div class="tracking-step active">
                                <div class="tracking-step-date">2023-11-26 16:45</div>
                                <div class="tracking-step-location">수령지</div>
                                <div class="tracking-step-desc">배송 완료</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wishlist tab -->
            <div class="content-tab" id="wishlist-tab" style="display: none;">
                <div class="content-header">
                    <h1 class="content-title">찜 목록</h1>
                    <p class="content-subtitle">관심있는 상품을 모아두고 쉽게 구매하세요.</p>
                </div>

                <div class="wishlist-grid">
                    <div class="wishlist-item">
                        <div class="wishlist-image">
                            <img src="/api/placeholder/220/200" alt="Product">
                        </div>
                        <div class="wishlist-content">
                            <h3 class="wishlist-title">삼성 갤럭시 S25 울트라</h3>
                            <div class="wishlist-price">
                                <span class="current-price">1,590,000원</span>
                                <span class="original-price">1,790,000원</span>
                                <span class="discount-rate">11%</span>
                            </div>
                            <div class="wishlist-actions">
                                <button class="wishlist-btn add-cart-btn"
                                    onclick="location.href='cart.html'">장바구니</button>
                                <button class="wishlist-btn remove-btn">삭제</button>
                            </div>
                        </div>
                    </div>

                    <div class="wishlist-item">
                        <div class="wishlist-image">
                            <img src="/api/placeholder/220/200" alt="Product">
                        </div>
                        <div class="wishlist-content">
                            <h3 class="wishlist-title">LG 그램 17인치 노트북</h3>
                            <div class="wishlist-price">
                                <span class="current-price">1,599,000원</span>
                                <span class="original-price">1,799,000원</span>
                                <span class="discount-rate">11%</span>
                            </div>
                            <div class="wishlist-actions">
                                <button class="wishlist-btn add-cart-btn"
                                    onclick="location.href='cart.html'">장바구니</button>
                                <button class="wishlist-btn remove-btn">삭제</button>
                            </div>
                        </div>
                    </div>

                    <div class="wishlist-item">
                        <div class="wishlist-image">
                            <img src="/api/placeholder/220/200" alt="Product">
                        </div>
                        <div class="wishlist-content">
                            <h3 class="wishlist-title">애플 에어팟 맥스</h3>
                            <div class="wishlist-price">
                                <span class="current-price">699,000원</span>
                            </div>
                            <div class="wishlist-actions">
                                <button class="wishlist-btn add-cart-btn"
                                    onclick="location.href='cart.html'">장바구니</button>
                                <button class="wishlist-btn remove-btn">삭제</button>
                            </div>
                        </div>
                    </div>

                    <div class="wishlist-item">
                        <div class="wishlist-image">
                            <img src="/api/placeholder/220/200" alt="Product">
                        </div>
                        <div class="wishlist-content">
                            <h3 class="wishlist-title">LG OLED TV 65인치</h3>
                            <div class="wishlist-price">
                                <span class="current-price">2,190,000원</span>
                                <span class="original-price">2,490,000원</span>
                                <span class="discount-rate">12%</span>
                            </div>
                            <div class="wishlist-actions">
                                <button class="wishlist-btn add-cart-btn"
                                    onclick="location.href='cart.html'">장바구니</button>
                                <button class="wishlist-btn remove-btn">삭제</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 최근 본 상품 탭 -->
            <div class="content-tab" id="recent-tab" style="display: none;">
                <div class="content-header">
                    <h1 class="content-title">최근 본 상품</h1>
                    <p class="content-subtitle">최근에 둘러본 상품들을 확인하세요.</p>
                </div>

                <div class="recent-header">
                    <div class="recent-count">총 8개의 상품</div>
                    <div class="recent-clear">전체 삭제</div>
                </div>

                <div class="recent-grid">
                    <div class="recent-item">
                        <div class="recent-image">
                            <img src="/api/placeholder/180/120" alt="Product">
                        </div>
                        <div class="recent-content">
                            <h3 class="recent-title">삼성 갤럭시북 Pro 360</h3>
                            <div class="recent-price">1,450,000원</div>
                            <div class="recent-time">오늘 12:30</div>
                            <button class="recent-cart-btn" onclick="location.href='cart.html'">장바구니</button>
                        </div>
                    </div>

                    <div class="recent-item">
                        <div class="recent-image">
                            <img src="/api/placeholder/180/120" alt="Product">
                        </div>
                        <div class="recent-content">
                            <h3 class="recent-title">애플 맥북 프로 M2</h3>
                            <div class="recent-price">2,350,000원</div>
                            <div class="recent-time">오늘 11:15</div>
                            <button class="recent-cart-btn" onclick="location.href='cart.html'">장바구니</button>
                        </div>
                    </div>

                    <div class="recent-item">
                        <div class="recent-image">
                            <img src="/api/placeholder/180/120" alt="Product">
                        </div>
                        <div class="recent-content">
                            <h3 class="recent-title">애플 에어팟 프로 2</h3>
                            <div class="recent-price">359,000원</div>
                            <div class="recent-time">오늘 10:45</div>
                            <button class="recent-cart-btn" onclick="location.href='cart.html'">장바구니</button>
                        </div>
                    </div>

                    <div class="recent-item">
                        <div class="recent-image">
                            <img src="/api/placeholder/180/120" alt="Product">
                        </div>
                        <div class="recent-content">
                            <h3 class="recent-title">LG OLED TV 65인치</h3>
                            <div class="recent-price">2,190,000원</div>
                            <div class="recent-time">어제 18:20</div>
                            <button class="recent-cart-btn" onclick="location.href='cart.html'">장바구니</button>
                        </div>
                    </div>

                    <div class="recent-item">
                        <div class="recent-image">
                            <img src="/api/placeholder/180/120" alt="Product">
                        </div>
                        <div class="recent-content">
                            <h3 class="recent-title">삼성 갤럭시 S25 울트라</h3>
                            <div class="recent-price">1,590,000원</div>
                            <div class="recent-time">어제 17:10</div>
                            <button class="recent-cart-btn" onclick="location.href='cart.html'">장바구니</button>
                        </div>
                    </div>

                    <div class="recent-item">
                        <div class="recent-image">
                            <img src="/api/placeholder/180/120" alt="Product">
                        </div>
                        <div class="recent-content">
                            <h3 class="recent-title">LG 그램 17인치노트북</h3>
                            <div class="recent-price">1,599,000원</div>
                            <div class="recent-time">어제 16:30</div>
                            <button class="recent-cart-btn" onclick="location.href='cart.html'">장바구니</button>
                        </div>
                    </div>

                    <div class="recent-item">
                        <div class="recent-image">
                            <img src="/api/placeholder/180/120" alt="Product">
                        </div>
                        <div class="recent-content">
                            <h3 class="recent-title">애플 에어팟 맥스</h3>
                            <div class="recent-price">699,000원</div>
                            <div class="recent-time">어제 15:15</div>
                            <button class="recent-cart-btn" onclick="location.href='cart.html'">장바구니</button>
                        </div>
                    </div>

                    <div class="recent-item">
                        <div class="recent-image">
                            <img src="/api/placeholder/180/120" alt="Product">
                        </div>
                        <div class="recent-content">
                            <h3 class="recent-title">소니 WH-1000XM5</h3>
                            <div class="recent-price">429,000원</div>
                            <div class="recent-time">2일 전</div>
                            <button class="recent-cart-btn" onclick="location.href='cart.html'">장바구니</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 쿠폰함 탭 -->
            <div class="content-tab" id="coupons-tab" style="display: none;">
                <div class="content-header">
                    <h1 class="content-title">쿠폰함</h1>
                    <p class="content-subtitle">사용 가능한 쿠폰과 만료된 쿠폰을 확인하세요.</p>
                </div>

                <div class="coupon-tabs">
                    <div class="coupon-tab active" data-coupon-tab="available">사용 가능한 쿠폰 (4)</div>
                    <div class="coupon-tab" data-coupon-tab="used">사용 완료 (2)</div>
                    <div class="coupon-tab" data-coupon-tab="expired">만료됨 (1)</div>
                </div>

                <div class="coupon-register">
                    <input type="text" class="coupon-input" placeholder="쿠폰 코드 입력">
                    <button class="coupon-submit">등록하기</button>
                </div>

                <!-- 사용 가능한 쿠폰 목록 -->
                <div class="coupon-list" id="available-coupons">
                    <div class="coupon-item">
                        <div class="coupon-header">
                            <div class="coupon-title">신규 회원 웰컴 쿠폰</div>
                            <div class="coupon-period">2023.12.15까지</div>
                        </div>
                        <div class="coupon-content">
                            <div class="coupon-amount">10,000원 할인</div>
                            <div class="coupon-desc">첫 구매 시 사용 가능한 신규 회원 전용 할인 쿠폰입니다.</div>
                            <div class="coupon-condition">50,000원 이상 구매 시 사용 가능</div>
                        </div>
                    </div>

                    <div class="coupon-item">
                        <div class="coupon-header">
                            <div class="coupon-title">컴퓨터 카테고리 할인</div>
                            <div class="coupon-period">2023.12.31까지</div>
                        </div>
                        <div class="coupon-content">
                            <div class="coupon-amount">5% 할인</div>
                            <div class="coupon-desc">컴퓨터 카테고리 상품 구매 시 사용 가능한 할인 쿠폰입니다.</div>
                            <div class="coupon-condition">최대 50,000원 할인</div>
                        </div>
                    </div>

                    <div class="coupon-item">
                        <div class="coupon-header">
                            <div class="coupon-title">무료 배송 쿠폰</div>
                            <div class="coupon-period">2024.01.15까지</div>
                        </div>
                        <div class="coupon-content">
                            <div class="coupon-amount">무료 배송</div>
                            <div class="coupon-desc">모든 상품 구매 시 배송비를 무료로 적용해드립니다.</div>
                            <div class="coupon-condition">제주/도서산간 지역 제외</div>
                        </div>
                    </div>

                    <div class="coupon-item">
                        <div class="coupon-header">
                            <div class="coupon-title">생일 축하 쿠폰</div>
                            <div class="coupon-period">2024.01.31까지</div>
                        </div>
                        <div class="coupon-content">
                            <div class="coupon-amount">15% 할인</div>
                            <div class="coupon-desc">생일을 맞이한 회원님을 위한 특별 할인 쿠폰입니다.</div>
                            <div class="coupon-condition">최대 30,000원 할인, 1회 사용 가능</div>
                        </div>
                    </div>
                </div>

                <!-- 사용 완료 쿠폰 목록 (기본적으로 숨김) -->
                <div class="coupon-list" id="used-coupons" style="display: none;">
                    <div class="coupon-item">
                        <div class="coupon-header">
                            <div class="coupon-title">BLACK FRIDAY 할인</div>
                            <div class="coupon-period">사용 완료</div>
                        </div>
                        <div class="coupon-content">
                            <div class="coupon-amount">20% 할인</div>
                            <div class="coupon-desc">블랙 프라이데이 기간 동안 사용 가능한 특별 할인 쿠폰입니다.</div>
                            <div class="coupon-condition">2023.11.24 사용 완료</div>
                        </div>
                    </div>

                    <div class="coupon-item">
                        <div class="coupon-header">
                            <div class="coupon-title">여름 휴가 시즌 쿠폰</div>
                            <div class="coupon-period">사용 완료</div>
                        </div>
                        <div class="coupon-content">
                            <div class="coupon-amount">15,000원 할인</div>
                            <div class="coupon-desc">여름 휴가 시즌을 맞아 준비한 특별 할인 쿠폰입니다.</div>
                            <div class="coupon-condition">2023.08.15 사용 완료</div>
                        </div>
                    </div>
                </div>

                <!-- 만료된 쿠폰 목록 (기본적으로 숨김) -->
                <div class="coupon-list" id="expired-coupons" style="display: none;">
                    <div class="coupon-item">
                        <div class="coupon-expired">기간 만료</div>
                        <div class="coupon-header">
                            <div class="coupon-title">추석 명절 할인 쿠폰</div>
                            <div class="coupon-period">2023.09.30 만료</div>
                        </div>
                        <div class="coupon-content">
                            <div class="coupon-amount">10% 할인</div>
                            <div class="coupon-desc">추석 명절을 맞이하여 모든 상품에 사용 가능한 할인 쿠폰입니다.</div>
                            <div class="coupon-condition">최대 30,000원 할인</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // DOM이 로드되면 실행
        document.addEventListener('DOMContentLoaded', function () {
            // 테마 초기화 호출
            initTheme();

            // 기존 코드들...
            setupTabNavigation();
            setupCouponTabs();
            setupOrderDetailModal();
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

        // 프로필 이미지 미리보기
        function previewImage(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    document.getElementById('profileImage').src = e.target.result;
                }

                reader.readAsDataURL(input.files[0]);
                showToast('프로필 사진이 변경되었습니다. 저장 버튼을 눌러 완료하세요.');
            }
        }

        // 폼 저장 처리
        function saveProfile() {
            // 여기에 폼 데이터 서버 전송 로직 추가

            // 전화번호 형식 검사
            const phoneInput = document.getElementById('userPhone');
            const phoneRegex = /^(01[016789])[0-9]{7,8}$|^01[016789]-[0-9]{3,4}-[0-9]{4}$/;

            if (!phoneRegex.test(phoneInput.value.replace(/-/g, ''))) {
                showToast('유효한 전화번호 형식이 아닙니다.');
                phoneInput.focus();
                return false;
            }

            showToast('프로필 정보가 성공적으로 저장되었습니다.');
            return false; // 실제 폼 전송 방지
        }

        // 폼 초기화
        function resetForm() {
            document.getElementById('profileForm').reset();
            showToast('변경사항이 취소되었습니다.');
        }

        // 토스트 메시지 표시
        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toast-message');

            toastMessage.textContent = message;
            toast.classList.add('show');

            setTimeout(function () {
                toast.classList.remove('show');
            }, 3000);
        }

        // 탭 전환 기능 설정
        function setupTabNavigation() {
            const menuItems = document.querySelectorAll('.menu-item, .tab-item');
            const contentTabs = document.querySelectorAll('.content-tab');

            menuItems.forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();

                    const tabId = this.getAttribute('data-tab');

                    // 모든 탭 및 메뉴 비활성화
                    menuItems.forEach(menuItem => menuItem.classList.remove('active'));
                    contentTabs.forEach(tab => tab.style.display = 'none');

                    // 클릭한 탭 및 메뉴 활성화
                    document.querySelectorAll(`[data-tab="${tabId}"]`).forEach(el => {
                        el.classList.add('active');
                    });
                    document.getElementById(`${tabId}-tab`).style.display = 'block';
                });
            });
        }

        // 쿠폰 탭 기능 설정
        function setupCouponTabs() {
            const couponTabs = document.querySelectorAll('.coupon-tab');
            const couponLists = document.querySelectorAll('.coupon-list');

            couponTabs.forEach(tab => {
                tab.addEventListener('click', function () {
                    const tabId = this.getAttribute('data-coupon-tab');

                    // 모든 쿠폰 탭 및 목록 비활성화
                    couponTabs.forEach(couponTab => couponTab.classList.remove('active'));
                    couponLists.forEach(list => list.style.display = 'none');

                    // 클릭한 쿠폰 탭 및 목록 활성화
                    this.classList.add('active');
                    document.getElementById(`${tabId}-coupons`).style.display = 'grid';
                });
            });
        }

        // 입력 필드 포커스/블러 효과
        const inputFields = document.querySelectorAll('.form-input');
        inputFields.forEach(field => {
            field.addEventListener('focus', function () {
                this.parentElement.classList.add('focused');
            });

            field.addEventListener('blur', function () {
                if (this.value === '') {
                    this.parentElement.classList.remove('focused');
                }
            });
        });
        // 주문 상세 모달 관련 기능
        function setupOrderDetailModal() {
            // 주문 상세 버튼 이벤트 설정
            const orderDetailButtons = document.querySelectorAll('.order-btn-detail');
            const modal = document.getElementById('orderDetailModal');
            const closeModal = document.querySelector('.close-modal');

            // 각 버튼에 클릭 이벤트 추가
            orderDetailButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const orderId = this.getAttribute('data-order-id');
                    showOrderDetail(orderId);
                });
            });

            // 모달 닫기 버튼
            if (closeModal) {
                closeModal.addEventListener('click', function () {
                    modal.style.display = 'none';
                });
            }

            // 모달 외부 클릭 시 닫기
            window.addEventListener('click', function (event) {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });
        }
        // 주문 상세 정보 표시
        function showOrderDetail(orderId) {
            const modal = document.getElementById('orderDetailModal');
            const modalOrderId = document.getElementById('modalOrderId');

            // 주문 ID 표시
            if (modalOrderId) {
                modalOrderId.textContent = orderId;
            }

            // 여기에서 주문 ID에 따라 다른 데이터 표시 가능
            // 실제 구현에서는 서버에서 주문 데이터를 가져와 표시

            // 모달 표시
            modal.style.display = 'block';
        }
    </script>
</body>

</html>