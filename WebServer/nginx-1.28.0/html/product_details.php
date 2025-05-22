<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 울트라북 X15 - 제품 상세</title>
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

        /* Breadcrumb */
        .breadcrumb {
            display: flex;
            padding: 15px 0;
            font-size: 13px;
            color: var(--text-light);
        }

        .breadcrumb a {
            color: var(--text-light);
            text-decoration: none;
            transition: var(--transition);
        }

        .breadcrumb a:hover {
            color: var(--primary);
        }

        .breadcrumb-separator {
            margin: 0 8px;
            color: var(--text-light);
        }

        /* Main Content */
        .main-content {
            background-color: var(--card-bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            margin: 20px 0;
            padding: 30px;
        }

        /* Product Section */
        .product-section {
            display: grid;
            grid-template-columns: 3fr 2fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        /* Product Gallery */
        .product-gallery {
            position: relative;
        }

        .main-image {
            width: 100%;
            height: 400px;
            background-color: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            border-radius: var(--radius);
            overflow: hidden;
            position: relative;
        }

        .main-image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: var(--transition);
        }

        .zoom-lens {
            position: absolute;
            border: 1px solid var(--border-color);
            width: 100px;
            height: 100px;
            background-repeat: no-repeat;
            display: none;
            cursor: crosshair;
        }

        .zoom-result {
            position: absolute;
            top: 0;
            right: -300px;
            width: 300px;
            height: 300px;
            border: 1px solid var(--border-color);
            background-repeat: no-repeat;
            display: none;
            z-index: 10;
            background-color: var(--card-bg);
        }

        .image-thumbnails {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            padding-bottom: 10px;
        }

        .thumbnail {
            width: 80px;
            height: 80px;
            border-radius: 4px;
            overflow: hidden;
            cursor: pointer;
            border: 2px solid transparent;
            transition: var(--transition);
            background-color: var(--secondary);
        }

        .thumbnail.active {
            border-color: var(--primary);
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Product Info */
        .product-info {
            display: flex;
            flex-direction: column;
        }

        .product-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--text);
        }

        .product-price {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .original-price {
            font-size: 16px;
            color: var(--text-light);
            text-decoration: line-through;
            font-weight: normal;
        }

        .discount-rate {
            background-color: var(--primary-light);
            color: var(--primary-dark);
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 600;
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .stars {
            color: #f8cc46;
        }

        .rating-count {
            color: var(--primary);
            font-weight: 500;
            cursor: pointer;
        }

        .product-options {
            margin-bottom: 20px;
        }

        .option-label {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--text);
        }

        .option-select {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            font-size: 14px;
            margin-bottom: 15px;
            background-color: var(--body-bg);
            color: var(--text);
        }

        .option-select:focus {
            outline: none;
            border-color: var(--primary);
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .quantity-button {
            width: 36px;
            height: 36px;
            background-color: var(--secondary);
            border: 1px solid var(--border-color);
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 16px;
            color: var(--text);
        }

        .quantity-button:hover {
            background-color: var(--gray);
        }

        .quantity-input {
            width: 60px;
            height: 36px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            text-align: center;
            font-size: 14px;
            background-color: var(--body-bg);
            color: var(--text);
        }

        .quantity-input:focus {
            outline: none;
            border-color: var(--primary);
        }

        .total-price {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            padding: 15px;
            background-color: var(--secondary);
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            color: var(--text);
        }

        .product-actions {
            display: flex;
            gap: 10px;
            margin-top: auto;
        }

        .action-button {
            flex: 1;
            padding: 12px 20px;
            border-radius: 50px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .primary-button {
            background-color: var(--primary);
            color: white;
            border: none;
        }

        .primary-button:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .secondary-button {
            background-color: var(--secondary);
            color: var(--text);
            border: 1px solid var(--border-color);
        }

        .secondary-button:hover {
            background-color: var(--gray-light);
            transform: translateY(-2px);
        }

        /* Sticky Buy Button */
        .sticky-buy {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: var(--card-bg);
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            z-index: 90;
            transform: translateY(100%);
            transition: var(--transition);
            border-top: 1px solid var(--border-color);
        }

        .sticky-buy.show {
            transform: translateY(0);
        }

        .sticky-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sticky-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .sticky-image {
            width: 50px;
            height: 50px;
            border-radius: 4px;
            overflow: hidden;
            background-color: var(--secondary);
        }

        .sticky-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .sticky-details {
            flex: 1;
        }

        .sticky-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 3px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 300px;
            color: var(--text);
        }

        .sticky-price {
            font-size: 16px;
            font-weight: 700;
            color: var(--primary);
        }

        .sticky-buttons {
            display: flex;
            gap: 10px;
        }

        /* Tabs */
        .tabs-container {
            margin-bottom: 40px;
        }

        .tabs-header {
            display: flex;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 20px;
        }

        .tab-button {
            padding: 15px 25px;
            font-size: 16px;
            font-weight: 500;
            color: var(--text-light);
            background: none;
            border: none;
            border-bottom: 2px solid transparent;
            cursor: pointer;
            transition: var(--transition);
        }

        .tab-button:hover {
            color: var(--primary);
        }

        .tab-button.active {
            color: var(--primary);
            border-bottom-color: var(--primary);
        }

        .tab-content {
            display: none;
            padding: 20px 0;
        }

        .tab-content.active {
            display: block;
        }

        /* Product Details */
        .product-details {
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border-color);
            color: var(--text);
        }

        .product-description {
            margin-bottom: 30px;
            line-height: 1.8;
            color: var(--text);
        }

        .spec-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .spec-table tr {
            border-bottom: 1px solid var(--border-color);
        }

        .spec-table th {
            width: 200px;
            padding: 12px 15px;
            text-align: left;
            font-weight: 600;
            background-color: var(--secondary);
            color: var(--text);
        }

        .spec-table td {
            padding: 12px 15px;
            color: var(--text);
        }

        /* Reviews */
        .reviews-summary {
            display: flex;
            align-items: center;
            gap: 40px;
            margin-bottom: 30px;
            padding: 20px;
            background-color: var(--secondary);
            border-radius: var(--radius);
        }

        .avg-rating {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .rating-number {
            font-size: 48px;
            font-weight: 700;
            line-height: 1;
            color: var(--text);
        }

        .rating-stars {
            font-size: 24px;
            color: #f8cc46;
        }

        .rating-count-text {
            font-size: 14px;
            color: var(--text-light);
        }

        .rating-bars {
            flex: 1;
        }

        .rating-bar {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 8px;
        }

        .bar-label {
            width: 40px;
            font-size: 13px;
            color: var(--text-light);
        }

        .bar-container {
            flex: 1;
            height: 8px;
            background-color: var(--gray);
            border-radius: 4px;
            overflow: hidden;
        }

        .bar-fill {
            height: 100%;
            background-color: #f8cc46;
        }

        .bar-percent {
            width: 40px;
            font-size: 13px;
            text-align: right;
            color: var(--text);
        }

        .review-filters {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .filter-button {
            padding: 8px 15px;
            font-size: 13px;
            border: 1px solid var(--border-color);
            border-radius: 20px;
            background-color: var(--body-bg);
            cursor: pointer;
            transition: var(--transition);
            color: var(--text);
        }

        .filter-button:hover,
        .filter-button.active {
            background-color: var(--primary-light);
            border-color: var(--primary);
            color: var(--primary-dark);
        }

        .sort-select {
            padding: 8px 15px;
            font-size: 13px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            background-color: var(--body-bg);
            color: var(--text);
        }

        .sort-select:focus {
            outline: none;
            border-color: var(--primary);
        }

        .review-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .review-item {
            padding: 20px;
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            background-color: var(--body-bg);
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .reviewer-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .reviewer-name {
            font-weight: 600;
            color: var(--text);
        }

        .review-date {
            font-size: 12px;
            color: var(--text-light);
        }

        .review-rating {
            color: #f8cc46;
        }

        .review-content {
            margin-bottom: 15px;
            line-height: 1.6;
            color: var(--text);
        }

        .review-images {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .review-image {
            width: 80px;
            height: 80px;
            border-radius: 4px;
            overflow: hidden;
            cursor: pointer;
            background-color: var(--secondary);
        }

        .review-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .review-helpful {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            color: var(--text-light);
        }

        .helpful-button {
            padding: 5px 10px;
            background-color: var(--secondary);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
            transition: var(--transition);
            color: var(--text);
        }

        .helpful-button:hover {
            background-color: var(--gray);
        }

        .load-more {
            margin-top: 20px;
            padding: 12px 20px;
            background-color: var(--body-bg);
            border: 1px solid var(--border-color);
            border-radius: 50px;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            color: var(--text);
        }

        .load-more:hover {
            background-color: var(--gray-light);
        }

        /* Q&A */
        .qa-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .qa-button {
            padding: 8px 15px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
        }

        .qa-button:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .qa-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .qa-item {
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            overflow: hidden;
            background-color: var(--body-bg);
        }

        .qa-question {
            padding: 15px 20px;
            background-color: var(--secondary);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .question-content {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--text);
        }

        .question-badge {
            font-weight: 700;
            color: var(--primary);
        }

        .question-text {
            font-weight: 500;
            color: var(--text);
        }

        .qa-answer {
            padding: 20px;
            display: none;
            background-color: var(--body-bg);
            border-top: 1px solid var(--border-color);
            color: var(--text);
        }

        .qa-answer.active {
            display: block;
        }

        .answer-badge {
            font-weight: 700;
            color: var(--success);
            margin-right: 10px;
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

        /* Modal */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }

        .modal.show {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            max-width: 80%;
            max-height: 80%;
            position: relative;
        }

        .modal-image {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
        }

        .modal-close {
            position: absolute;
            top: -30px;
            right: 0;
            color: white;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }

        .modal-prev,
        .modal-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            background: rgba(0, 0, 0, 0.5);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 20px;
        }

        .modal-prev {
            left: -60px;
        }

        .modal-next {
            right: -60px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .product-section {
                grid-template-columns: 1fr;
            }

            .main-image {
                height: 300px;
            }

            .sticky-buy {
                display: block;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .search-container {
                display: none;
            }

            .main-image {
                height: 250px;
            }

            .product-title {
                font-size: 20px;
            }

            .product-price {
                font-size: 24px;
            }

            .sticky-title {
                max-width: 200px;
            }

            .modal-prev,
            .modal-next {
                width: 30px;
                height: 30px;
                font-size: 16px;
            }

            .modal-prev {
                left: -40px;
            }

            .modal-next {
                right: -40px;
            }
        }

        @media (max-width: 576px) {
            .main-content {
                padding: 20px 15px;
            }

            .main-image {
                height: 200px;
            }

            .thumbnail {
                width: 60px;
                height: 60px;
            }

            .product-actions {
                flex-direction: column;
            }

            .reviews-summary {
                flex-direction: column;
                gap: 20px;
                align-items: flex-start;
            }

            .avg-rating {
                align-items: flex-start;
            }

            .sticky-info {
                display: none;
            }

            .sticky-buttons {
                width: 100%;
            }

            .modal-content {
                max-width: 90%;
            }

            .modal-prev,
            .modal-next {
                top: auto;
                bottom: -50px;
                transform: none;
            }

            .modal-prev {
                left: 50%;
                transform: translateX(-60px);
            }

            .modal-next {
                right: 50%;
                transform: translateX(60px);
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

    <!-- Image modal -->
    <div class="modal" id="imageModal">
        <div class="modal-content">
            <button class="modal-close" id="modalClose">
                <i class="fas fa-times"></i>
            </button>
            <img src="/api/placeholder/800/600" alt="Product" class="modal-image" id="modalImage">
            <button class="modal-prev" id="modalPrev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="modal-next" id="modalNext">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <!-- Header section - Sticky (메인 홈페이지 스타일) -->
    <header id="header">
        <div class="container">
            <div class="header-content">
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
            </div>
        </div>
    </header>

    <div class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="mainpage.html">홈</a>
            <span class="breadcrumb-separator">></span>
            <a href="computer.html">노트북</a>
            <span class="breadcrumb-separator">></span>
            <a href="ultrabook.html">울트라북</a>
            <span class="breadcrumb-separator">></span>
            <span>스마트픽 울트라북 X15</span>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Product Section -->
            <div class="product-section">
                <!-- Product Gallery -->
                <div class="product-gallery">
                    <div class="main-image" id="mainImage">
                        <img src="/api/placeholder/700/500" alt="Product" id="currentImage">
                        <div class="zoom-lens" id="zoomLens"></div>
                        <div class="zoom-result" id="zoomResult"></div>
                    </div>

                    <div class="image-thumbnails">
                        <div class="thumbnail active" data-img="/api/placeholder/700/500">
                            <img src="/api/placeholder/80/80" alt="Thumbnail 1">
                        </div>
                        <div class="thumbnail" data-img="/api/placeholder/700/500?text=Image+2">
                            <img src="/api/placeholder/80/80?text=2" alt="Thumbnail 2">
                        </div>
                        <div class="thumbnail" data-img="/api/placeholder/700/500?text=Image+3">
                            <img src="/api/placeholder/80/80?text=3" alt="Thumbnail 3">
                        </div>
                        <div class="thumbnail" data-img="/api/placeholder/700/500?text=Image+4">
                            <img src="/api/placeholder/80/80?text=4" alt="Thumbnail 4">
                        </div>
                        <div class="thumbnail" data-img="/api/placeholder/700/500?text=Image+5">
                            <img src="/api/placeholder/80/80?text=5" alt="Thumbnail 5">
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="product-info">
                    <h1 class="product-title">스마트픽 울트라북 X15 노트북 (인텔 코어 i7, 16GB, 512GB)</h1>

                    <div class="product-price">
                        1,290,000원
                        <span class="original-price">1,490,000원</span>
                        <span class="discount-rate">13%</span>
                    </div>

                    <div class="product-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span>4.5</span>
                        <span class="rating-count">(213 리뷰)</span>
                    </div>

                    <div class="product-options">
                        <div class="option-label">색상</div>
                        <select class="option-select" id="colorSelect">
                            <option value="silver">실버</option>
                            <option value="space-gray">스페이스 그레이</option>
                            <option value="white">화이트</option>
                        </select>

                        <div class="option-label">저장 용량</div>
                        <select class="option-select" id="storageSelect">
                            <option value="512">512GB</option>
                            <option value="1">1TB (+200,000원)</option>
                            <option value="2">2TB (+400,000원)</option>
                        </select>

                        <div class="option-label">수량</div>
                        <div class="quantity-selector">
                            <button class="quantity-button" id="decreaseQuantity">-</button>
                            <input type="text" class="quantity-input" id="quantityInput" value="1">
                            <button class="quantity-button" id="increaseQuantity">+</button>
                        </div>
                    </div>

                    <div class="total-price">
                        <span>총 상품 금액</span>
                        <span id="totalPrice">1,290,000원</span>
                    </div>

                    <div class="product-actions">
                        <button class="action-button primary-button" id="buyNowButton">
                            <i class="fas fa-credit-card"></i>
                            바로 구매
                        </button>
                        <button class="action-button secondary-button" id="addToCartButton">
                            <i class="fas fa-shopping-cart"></i>
                            장바구니
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tabs -->
            <div class="tabs-container">
                <div class="tabs-header">
                    <button class="tab-button active" data-tab="details">제품정보</button>
                    <button class="tab-button" data-tab="reviews">리뷰 (213)</button>
                    <button class="tab-button" data-tab="qa">Q&A (48)</button>
                </div>

                <!-- Tab Content: Details -->
                <div class="tab-content active" id="details">
                    <div class="product-details">
                        <h2 class="section-title">제품 상세 정보</h2>

                        <div class="product-description">
                            <p>스마트픽 울트라북 X15는 강력한 성능과 세련된 디자인을 갖춘 프리미엄 노트북입니다. 최신 인텔 코어 i7 프로세서와 16GB 메모리를 탑재하여 멀티태스킹과
                                고사양 작업도 원활하게 수행할 수 있습니다.</p>
                            <p>15.6인치 풀HD IPS 디스플레이는 생생한 색상과 넓은 시야각을 제공하여 영화 감상이나 사진/영상 편집 작업에 최적화되어 있습니다. 초슬림 베젤 디자인으로
                                몰입감 있는 화면을 경험해보세요.</p>
                            <p>1.5kg의 가벼운 무게와 최대 12시간의 배터리 수명으로 외부에서도 걱정 없이 사용할 수 있습니다. 또한 지문 인식 센서와 IR 카메라를 통한 안면 인식
                                기능이 적용되어 보안까지 강화되었습니다.</p>
                        </div>

                        <h3 class="section-title">제품 사양</h3>
                        <table class="spec-table">
                            <tr>
                                <th>프로세서</th>
                                <td>인텔 코어 i7-1165G7 (11세대, 최대 4.7GHz)</td>
                            </tr>
                            <tr>
                                <th>메모리</th>
                                <td>16GB LPDDR4X (최대 32GB)</td>
                            </tr>
                            <tr>
                                <th>저장 장치</th>
                                <td>512GB PCIe NVMe SSD (업그레이드 가능)</td>
                            </tr>
                            <tr>
                                <th>그래픽</th>
                                <td>인텔 Iris Xe 그래픽스</td>
                            </tr>
                            <tr>
                                <th>디스플레이</th>
                                <td>15.6인치 풀HD IPS 디스플레이 (1920 x 1080), 안티글레어</td>
                            </tr>
                            <tr>
                                <th>배터리</th>
                                <td>72Wh 리튬 이온 배터리 (최대 12시간)</td>
                            </tr>
                            <tr>
                                <th>무게</th>
                                <td>1.5kg</td>
                            </tr>
                            <tr>
                                <th>크기 (WxDxH)</th>
                                <td>356.8 x 233.7 x 16.9 mm</td>
                            </tr>
                            <tr>
                                <th>포트</th>
                                <td>Thunderbolt 4 (2개), USB 3.2 Type-A (2개), HDMI, 오디오 잭</td>
                            </tr>
                            <tr>
                                <th>무선 연결</th>
                                <td>Wi-Fi 6 (802.11ax), Bluetooth 5.1</td>
                            </tr>
                            <tr>
                                <th>운영체제</th>
                                <td>Windows 11 Home</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Tab Content: Reviews -->
                <div class="tab-content" id="reviews">
                    <div class="reviews-summary">
                        <div class="avg-rating">
                            <div class="rating-number">4.5</div>
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="rating-count-text">213개 리뷰</div>
                        </div>

                        <div class="rating-bars">
                            <div class="rating-bar">
                                <div class="bar-label">5점</div>
                                <div class="bar-container">
                                    <div class="bar-fill" style="width: 65%"></div>
                                </div>
                                <div class="bar-percent">65%</div>
                            </div>
                            <div class="rating-bar">
                                <div class="bar-label">4점</div>
                                <div class="bar-container">
                                    <div class="bar-fill" style="width: 25%"></div>
                                </div>
                                <div class="bar-percent">25%</div>
                            </div>
                            <div class="rating-bar">
                                <div class="bar-label">3점</div>
                                <div class="bar-container">
                                    <div class="bar-fill" style="width: 7%"></div>
                                </div>
                                <div class="bar-percent">7%</div>
                            </div>
                            <div class="rating-bar">
                                <div class="bar-label">2점</div>
                                <div class="bar-container">
                                    <div class="bar-fill" style="width: 2%"></div>
                                </div>
                                <div class="bar-percent">2%</div>
                            </div>
                            <div class="rating-bar">
                                <div class="bar-label">1점</div>
                                <div class="bar-container">
                                    <div class="bar-fill" style="width: 1%"></div>
                                </div>
                                <div class="bar-percent">1%</div>
                            </div>
                        </div>
                    </div>

                    <div class="review-filters">
                        <div>
                            <button class="filter-button active">전체 리뷰</button>
                            <button class="filter-button">포토 리뷰</button>
                            <button class="filter-button">5점 리뷰</button>
                            <button class="filter-button">1-3점 리뷰</button>
                        </div>

                        <select class="sort-select">
                            <option value="recent">최신순</option>
                            <option value="high">평점 높은순</option>
                            <option value="low">평점 낮은순</option>
                            <option value="helpful">도움 많은순</option>
                        </select>
                    </div>

                    <div class="review-list">
                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="reviewer-name">홍길동</div>
                                    <div class="review-date">2023.08.15</div>
                                </div>
                                <div class="review-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>

                            <div class="review-content">
                                가성비 최고의 노트북입니다! 배터리 수명이 정말 오래 가고 디자인도 세련되어 만족스럽습니다. 가벼워서 들고 다니기도 편하고, 성능도 제가 필요한 작업을 하기에
                                충분합니다. 노트북을 새로 구매하시는 분들께 강력 추천합니다.
                            </div>

                            <div class="review-images">
                                <div class="review-image" data-img="/api/placeholder/800/600?text=Review+1">
                                    <img src="/api/placeholder/80/80?text=Review" alt="Review image">
                                </div>
                                <div class="review-image" data-img="/api/placeholder/800/600?text=Review+2">
                                    <img src="/api/placeholder/80/80?text=Review" alt="Review image">
                                </div>
                            </div>

                            <div class="review-helpful">
                                <span>이 리뷰가 도움이 되었나요?</span>
                                <button class="helpful-button">도움됨 (15)</button>
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="reviewer-name">김철수</div>
                                    <div class="review-date">2023.08.10</div>
                                </div>
                                <div class="review-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>

                            <div class="review-content">
                                전반적으로 만족합니다. 처리 속도가 빠르고 디자인도 마음에 듭니다. 다만 팬 소음이 예상보다 조금 큰 편이라 영상 편집 등 고사양 작업을 할 때는 신경이
                                쓰이네요. 그것 말고는 대체로 만족스러운 제품입니다.
                            </div>

                            <div class="review-helpful">
                                <span>이 리뷰가 도움이 되었나요?</span>
                                <button class="helpful-button">도움됨 (8)</button>
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="reviewer-name">이영희</div>
                                    <div class="review-date">2023.08.05</div>
                                </div>
                                <div class="review-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>

                            <div class="review-content">
                                학교 과제와 가벼운 디자인 작업용으로 구매했습니다. 무게가 가벼워서 들고 다니기 좋고, 배터리도 하루 종일 쓸 수 있어 편리합니다. 키보드 타격감도 좋고
                                터치패드 반응도 훌륭합니다. 다만 스피커 음질이 조금 아쉬운 편이네요.
                            </div>

                            <div class="review-images">
                                <div class="review-image" data-img="/api/placeholder/800/600?text=Review+3">
                                    <img src="/api/placeholder/80/80?text=Review" alt="Review image">
                                </div>
                            </div>

                            <div class="review-helpful">
                                <span>이 리뷰가 도움이 되었나요?</span>
                                <button class="helpful-button">도움됨 (12)</button>
                            </div>
                        </div>
                    </div>

                    <button class="load-more">
                        더 보기
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>

                <!-- Tab Content: Q&A -->
                <div class="tab-content" id="qa">
                    <div class="qa-header">
                        <h2 class="section-title">상품 Q&A</h2>
                        <button class="qa-button">
                            <i class="fas fa-pen"></i>
                            문의하기
                        </button>
                    </div>

                    <div class="qa-list">
                        <div class="qa-item">
                            <div class="qa-question">
                                <div class="question-content">
                                    <span class="question-badge">Q</span>
                                    <span class="question-text">메모리 업그레이드가 가능한가요?</span>
                                </div>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="qa-answer">
                                <span class="answer-badge">A</span>
                                본 제품은 메모리가 메인보드에 직접 납땜되어 있어 추가 업그레이드가 불가능합니다. 구매 시 필요한 메모리 용량을 선택해주세요. 32GB 옵션도 준비되어
                                있습니다.
                            </div>
                        </div>

                        <div class="qa-item">
                            <div class="qa-question">
                                <div class="question-content">
                                    <span class="question-badge">Q</span>
                                    <span class="question-text">외장 그래픽카드 연결이 가능한가요?</span>
                                </div>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="qa-answer">
                                <span class="answer-badge">A</span>
                                네, Thunderbolt 4 포트를 통해 외장 그래픽카드(eGPU) 연결이 가능합니다. 호환되는 eGPU 인클로저와 그래픽카드를 사용하시면 됩니다.
                            </div>
                        </div>

                        <div class="qa-item">
                            <div class="qa-question">
                                <div class="question-content">
                                    <span class="question-badge">Q</span>
                                    <span class="question-text">무상 보증 기간은 얼마인가요?</span>
                                </div>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="qa-answer">
                                <span class="answer-badge">A</span>
                                기본 무상 보증 기간은 구매일로부터 1년입니다. 추가로 스마트픽 케어 서비스를 구매하시면 최대 3년까지 보증 기간 연장이 가능합니다.
                            </div>
                        </div>

                        <div class="qa-item">
                            <div class="qa-question">
                                <div class="question-content">
                                    <span class="question-badge">Q</span>
                                    <span class="question-text">블루라이트 차단 기능이 있나요?</span>
                                </div>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="qa-answer">
                                <span class="answer-badge">A</span>
                                네, 스마트픽 디스플레이 보호 기술이 적용되어 있어 블루라이트를 최대 30%까지 감소시켜줍니다. 또한 Windows 11의 야간 모드 기능을 통해 추가적인
                                블루라이트 감소가 가능합니다.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Buy Button -->
    <div class="sticky-buy" id="stickyBuy">
        <div class="container">
            <div class="sticky-content">
                <div class="sticky-info">
                    <div class="sticky-image">
                        <img src="/api/placeholder/80/80" alt="Product">
                    </div>
                    <div class="sticky-details">
                        <div class="sticky-title">스마트픽 울트라북 X15 노트북 (인텔 코어 i7, 16GB, 512GB)</div>
                        <div class="sticky-price">1,290,000원</div>
                    </div>
                </div>

                <div class="sticky-buttons">
                    <button class="action-button secondary-button" id="stickyCartButton">
                        <i class="fas fa-shopping-cart"></i>
                        장바구니
                    </button>
                    <button class="action-button primary-button" id="stickyBuyButton">
                        <i class="fas fa-credit-card"></i>
                        바로 구매
                    </button>
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

            // URL에서 상품 ID 가져오기
            const urlParams = new URLSearchParams(window.location.search);
            const productId = urlParams.get('id');

            if (productId) {
                // 상품 정보 로드 - 실제 구현에서는 서버에서 데이터 가져오기
                loadProductDetails(productId);
            }

            // Thumbnail switching
            document.querySelectorAll('.thumbnail').forEach(thumbnail => {
                thumbnail.addEventListener('click', function () {
                    // Remove active class from all thumbnails
                    document.querySelectorAll('.thumbnail').forEach(thumb => {
                        thumb.classList.remove('active');
                    });

                    // Add active class to clicked thumbnail
                    this.classList.add('active');

                    // Update main image
                    const imgSrc = this.getAttribute('data-img');
                    document.getElementById('currentImage').src = imgSrc;
                });
            });

            // Tab switching
            document.querySelectorAll('.tab-button').forEach(button => {
                button.addEventListener('click', function () {
                    const tabId = this.getAttribute('data-tab');

                    // Remove active class from all buttons and contents
                    document.querySelectorAll('.tab-button').forEach(btn => {
                        btn.classList.remove('active');
                    });
                    document.querySelectorAll('.tab-content').forEach(content => {
                        content.classList.remove('active');
                    });

                    // Add active class to current button and content
                    this.classList.add('active');
                    document.getElementById(tabId).classList.add('active');
                });
            });

            // Q&A accordion
            document.querySelectorAll('.qa-question').forEach(question => {
                question.addEventListener('click', function () {
                    const answer = this.nextElementSibling;
                    const icon = this.querySelector('i');

                    if (answer.classList.contains('active')) {
                        answer.classList.remove('active');
                        icon.classList.remove('fa-chevron-up');
                        icon.classList.add('fa-chevron-down');
                    } else {
                        answer.classList.add('active');
                        icon.classList.remove('fa-chevron-down');
                        icon.classList.add('fa-chevron-up');
                    }
                });
            });

            // Quantity selector
            document.getElementById('decreaseQuantity').addEventListener('click', function () {
                const input = document.getElementById('quantityInput');
                const value = parseInt(input.value);
                if (value > 1) {
                    input.value = value - 1;
                    updateTotalPrice();
                }
            });

            document.getElementById('increaseQuantity').addEventListener('click', function () {
                const input = document.getElementById('quantityInput');
                const value = parseInt(input.value);
                input.value = value + 1;
                updateTotalPrice();
            });

            document.getElementById('quantityInput').addEventListener('change', function () {
                const value = parseInt(this.value);
                if (isNaN(value) || value < 1) {
                    this.value = 1;
                }
                updateTotalPrice();
            });

            document.getElementById('storageSelect').addEventListener('change', function () {
                updateTotalPrice();
            });

            // Add to cart buttons
            document.getElementById('addToCartButton').addEventListener('click', function () {
                showToast('장바구니에 추가되었습니다.');
            });

            document.getElementById('stickyCartButton').addEventListener('click', function () {
                showToast('장바구니에 추가되었습니다.');
            });

            // Review images modal
            document.querySelectorAll('.review-image, .main-image img').forEach(image => {
                image.addEventListener('click', function () {
                    const modal = document.getElementById('imageModal');
                    const modalImage = document.getElementById('modalImage');
                    const imgSrc = this.getAttribute('data-img') || this.src;

                    modalImage.src = imgSrc;
                    modal.classList.add('show');
                });
            });

            document.getElementById('modalClose').addEventListener('click', function () {
                document.getElementById('imageModal').classList.remove('show');
            });
            document.getElementById('buyNowButton').addEventListener('click', function () {
                window.location.href = 'cart.html';
            });

            document.getElementById('stickyBuyButton').addEventListener('click', function () {
                window.location.href = 'cart.html';
            });

            // Image zoom
            const mainImage = document.getElementById('mainImage');
            const currentImage = document.getElementById('currentImage');
            const zoomLens = document.getElementById('zoomLens');
            const zoomResult = document.getElementById('zoomResult');

            mainImage.addEventListener('mouseenter', function () {
                zoomLens.style.display = 'block';
                zoomResult.style.display = 'block';
            });

            mainImage.addEventListener('mouseleave', function () {
                zoomLens.style.display = 'none';
                zoomResult.style.display = 'none';
            });

            mainImage.addEventListener('mousemove', function (e) {
                const rect = mainImage.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                // Calculate lens position
                const lensWidth = zoomLens.offsetWidth;
                const lensHeight = zoomLens.offsetHeight;

                let lensX = x - lensWidth / 2;
                let lensY = y - lensHeight / 2;

                // Restrict lens position
                lensX = Math.max(0, Math.min(lensX, mainImage.offsetWidth - lensWidth));
                lensY = Math.max(0, Math.min(lensY, mainImage.offsetHeight - lensHeight));

                // Position lens
                zoomLens.style.left = lensX + 'px';
                zoomLens.style.top = lensY + 'px';

                // Calculate background position for result
                const ratio = 3; // Zoom ratio
                const resultX = -lensX * ratio;
                const resultY = -lensY * ratio;

                // Update result
                zoomResult.style.backgroundImage = `url(${currentImage.src})`;
                zoomResult.style.backgroundSize = `${mainImage.offsetWidth * ratio}px ${mainImage.offsetHeight * ratio}px`;
                zoomResult.style.backgroundPosition = `${resultX}px ${resultY}px`;
            });
            const searchBar = document.querySelector('.search-bar');
            if (searchBar) {
                searchBar.style.cursor = 'pointer';  // 클릭 가능 커서 표시
                searchBar.addEventListener('click', () => {
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
            const productSection = document.querySelector('.product-section');
            const stickyBuy = document.getElementById('stickyBuy');

            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            if (productSection && stickyBuy) {
                if (window.scrollY > (productSection.offsetTop + productSection.offsetHeight)) {
                    stickyBuy.classList.add('show');
                } else {
                    stickyBuy.classList.remove('show');
                }
            }
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

        // Update total price
        function updateTotalPrice() {
            const basePrice = 1290000;
            const quantity = parseInt(document.getElementById('quantityInput').value);
            const storage = document.getElementById('storageSelect').value;

            let additionalPrice = 0;
            if (storage === '1') {
                additionalPrice = 200000;
            } else if (storage === '2') {
                additionalPrice = 400000;
            }

            const total = (basePrice + additionalPrice) * quantity;
            document.getElementById('totalPrice').textContent = total.toLocaleString() + '원';
        }

        // Load product details
        function loadProductDetails(productId) {
            // 여기서 상품 ID에 해당하는 정보를 가져와 페이지에 표시하는 로직 구현
            console.log(`상품 ID ${productId}의 상세 정보를 로드합니다.`);
            // ... 데이터 로드 및 페이지 업데이트 로직
        }
    </script>
</body>

</html>