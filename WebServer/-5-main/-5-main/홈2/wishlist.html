<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트픽 - 위시리스트</title>
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

        /* 페이지 제목 */
        .page-title-container {
            text-align: center;
            margin: 40px 0 30px;
            position: relative;
        }

        .page-title {
            font-size: 28px;
            font-weight: 700;
            display: inline-block;
            position: relative;
            padding-bottom: 10px;
        }

        .page-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--primary);
            border-radius: 3px;
        }

        /* 위시리스트 컨테이너 */
        .wishlist-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* 위시리스트 상태 메시지 */
        .wishlist-status {
            text-align: center;
            padding: 40px 0;
            color: var(--dark);
            font-size: 18px;
        }

        .empty-wishlist-container {
            text-align: center;
            padding: 50px 0;
        }

        .empty-wishlist-icon {
            font-size: 60px;
            color: var(--gray);
            margin-bottom: 20px;
        }

        .empty-wishlist-text {
            font-size: 18px;
            color: var(--dark);
            margin-bottom: 30px;
        }

        .shop-now-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-size: 16px;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .shop-now-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
        }

        /* 위시리스트 테이블 */
        .wishlist-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
            box-shadow: var(--shadow);
            border-radius: var(--border-radius);
            overflow: hidden;
        }

        .wishlist-table thead {
            background-color: var(--secondary);
        }

        .wishlist-table th,
        .wishlist-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid var(--border-color);
        }

        .wishlist-table th {
            font-weight: 600;
            color: var(--dark);
        }

        .wishlist-table tbody tr {
            background-color: var(--card-bg);
            transition: var(--transition);
        }

        .wishlist-table tbody tr:hover {
            background-color: var(--gray-light);
        }

        /* 상품 정보 스타일 */
        .product-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .product-image-small {
            width: 80px;
            height: 80px;
            border-radius: var(--border-radius);
            object-fit: cover;
            background-color: var(--gray);
        }

        .product-name {
            font-weight: 500;
            margin-bottom: 5px;
        }

        .product-category {
            font-size: 14px;
            color: var(--dark);
            opacity: 0.7;
        }

        /* 가격 스타일 */
        .product-price {
            font-weight: 700;
            color: var(--primary);
        }

        /* 재고 상태 스타일 */
        .stock-badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 500;
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

        /* 액션 버튼 스타일 */
        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            background-color: var(--secondary);
            color: var(--dark);
        }

        .action-btn:hover {
            transform: translateY(-3px);
        }

        .cart-btn:hover {
            background-color: var(--success);
            color: white;
        }

        .remove-btn:hover {
            background-color: var(--danger);
            color: white;
        }

        .view-btn:hover {
            background-color: var(--primary);
            color: white;
        }

        /* 선택 상품 관리 버튼 */
        .selection-actions {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .select-all-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .select-all {
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .action-group {
            display: flex;
            gap: 15px;
        }

        .bulk-action-btn {
            background-color: var(--secondary);
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--dark);
        }

        .bulk-action-btn:hover {
            background-color: var(--gray);
            transform: translateY(-2px);
        }

        .remove-selected {
            color: var(--danger);
        }

        .remove-selected:hover {
            background-color: var(--danger);
            color: white;
        }

        .cart-selected {
            color: var(--success);
        }

        .cart-selected:hover {
            background-color: var(--success);
            color: white;
        }

        /* 토스트 알림 */
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

        /* 반응형 디자인 */
        @media (max-width: 768px) {
            .product-category {
                display: none;
            }

            .wishlist-table th:nth-child(3),
            .wishlist-table td:nth-child(3) {
                display: none;
            }

            .selection-actions {
                flex-direction: column;
                gap: 15px;
            }

            .action-group {
                justify-content: center;
            }
        }

        @media (max-width: 576px) {

            .wishlist-table th:nth-child(4),
            .wishlist-table td:nth-child(4) {
                display: none;
            }

            .product-info {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }

            .product-image-small {
                width: 60px;
                height: 60px;
            }

            .action-buttons {
                flex-direction: column;
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
        <a href="mainpage.html" class="logo">
            <div class="logo">
                <div class="logo-box">스마<br>트픽</div>
                <span>스마트픽</span>
            </div>
        </a>
        <div class="search-container">
            <form id="searchForm" action="search_results.html" method="get">
                <input type="text" class="search-bar" id="searchInput" name="query" placeholder="찾으시는 상품을 검색해보세요">
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

    <!-- 페이지 제목 -->
    <div class="page-title-container">
        <h1 class="page-title">나의 위시리스트</h1>
    </div>

    <!-- 위시리스트 컨테이너 -->
    <div class="wishlist-container">
        <!-- 위시리스트가 비어있을 때 표시할 내용 -->
        <div id="emptyWishlist" class="empty-wishlist-container" style="display: none;">
            <div class="empty-wishlist-icon">
                <i class="fas fa-heart-broken"></i>
            </div>
            <p class="empty-wishlist-text">위시리스트가 비어있습니다.</p>
            <button class="shop-now-btn" onclick="window.location.href='mainpage.html'">
                <i class="fas fa-shopping-bag"></i>
                쇼핑하러 가기
            </button>
        </div>

        <!-- 위시리스트 컨텐츠 -->
        <div id="wishlistContent">
            <!-- 위시리스트 관리 버튼 -->
            <div class="selection-actions">
                <div class="select-all-container">
                    <input type="checkbox" id="selectAll" class="select-all">
                    <label for="selectAll">전체 선택</label>
                </div>

                <div class="action-group">
                    <button id="addSelectedToCart" class="bulk-action-btn cart-selected">
                        <i class="fas fa-shopping-cart"></i>
                        선택 상품 장바구니에 추가
                    </button>
                    <button id="removeSelected" class="bulk-action-btn remove-selected">
                        <i class="fas fa-trash-alt"></i>
                        선택 상품 삭제
                    </button>
                </div>
            </div>

            <!-- 위시리스트 테이블 -->
            <table class="wishlist-table">
                <thead>
                    <tr>
                        <th width="5%"></th>
                        <th width="40%">상품정보</th>
                        <th width="15%">카테고리</th>
                        <th width="15%">가격</th>
                        <th width="15%">재고상태</th>
                        <th width="10%">액션</th>
                    </tr>
                </thead>
                <tbody id="wishlistItems">
                    <!-- JavaScript로 동적 생성 -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // DOM이 로드되면 실행
        document.addEventListener('DOMContentLoaded', function () {
            // 테마 설정 초기화
            initTheme();

            // 스크롤 이벤트 리스너
            window.addEventListener('scroll', handleScroll);

            // 위시리스트 로드
            loadWishlist();

            // 전체 선택 이벤트
            document.getElementById('selectAll').addEventListener('change', function () {
                const checkboxes = document.querySelectorAll('.item-checkbox');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = this.checked;
                });
            });

            // 선택 상품 장바구니 추가 이벤트
            document.getElementById('addSelectedToCart').addEventListener('click', function () {
                const selectedItems = getSelectedItems();
                if (selectedItems.length === 0) {
                    showToast('선택된 상품이 없습니다.');
                    return;
                }

                addSelectedToCart(selectedItems);
            });

            // 선택 상품 삭제 이벤트
            document.getElementById('removeSelected').addEventListener('click', function () {
                const selectedItems = getSelectedItems();
                if (selectedItems.length === 0) {
                    showToast('선택된 상품이 없습니다.');
                    return;
                }

                removeSelectedFromWishlist(selectedItems);
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

        // 위시리스트 로드
        function loadWishlist() {
            const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
            const wishlistItems = document.getElementById('wishlistItems');
            const emptyWishlist = document.getElementById('emptyWishlist');
            const wishlistContent = document.getElementById('wishlistContent');

            // 위시리스트가 비어있는 경우
            if (wishlist.length === 0) {
                emptyWishlist.style.display = 'block';
                wishlistContent.style.display = 'none';
                return;
            }

            // 위시리스트가 있는 경우
            emptyWishlist.style.display = 'none';
            wishlistContent.style.display = 'block';

            // 위시리스트 아이템 생성
            wishlistItems.innerHTML = '';

            // 각 위시리스트 아이템 목록에 추가
            wishlist.forEach((item, index) => {
                // 상품 정보 가져오기 (실제로는 API 또는 다른 데이터 소스에서 가져와야 함)
                // 더미 데이터로 재고 및 가격 정보 생성
                let stockStatus = Math.random() < 0.7 ? 'in-stock' : (Math.random() < 0.5 ? 'low-stock' : 'out-of-stock');
                let stockText = stockStatus === 'in-stock' ? '재고 있음' : (stockStatus === 'low-stock' ? '재고 임박' : '품절');
                let price = Math.floor(Math.random() * 1000000) + 100000;
                let category = getRandomCategory();

                // 행 생성
                const row = document.createElement('tr');
                row.setAttribute('data-product-id', item.id);

                row.innerHTML = `
                    <td>
                        <input type="checkbox" class="item-checkbox" data-product-id="${item.id}">
                    </td>
                    <td>
                        <div class="product-info">
                            <img src="/api/placeholder/80/80" alt="${item.name}" class="product-image-small">
                            <div>
                                <div class="product-name">${item.name}</div>
                                <div class="product-category">${category}</div>
                            </div>
                        </div>
                    </td>
                    <td>${category}</td>
                    <td class="product-price">${formatPrice(price)}원</td>
                    <td><span class="stock-badge ${stockStatus}">${stockText}</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="action-btn view-btn" onclick="viewProduct('${item.id}')" aria-label="상품 보기">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="action-btn cart-btn ${stockStatus === 'out-of-stock' ? 'disabled' : ''}" 
                                ${stockStatus === 'out-of-stock' ? 'disabled' : `onclick="addToCart('${item.id}', '${item.name}')"`} 
                                aria-label="장바구니에 추가">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button class="action-btn remove-btn" onclick="removeFromWishlist('${item.id}')" aria-label="위시리스트에서 제거">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </td>
                `;

                wishlistItems.appendChild(row);
            });
        }

        // 선택된 아이템 가져오기
        function getSelectedItems() {
            const checkboxes = document.querySelectorAll('.item-checkbox:checked');
            return Array.from(checkboxes).map(checkbox => checkbox.dataset.productId);
        }

        // 상품 보기
        function viewProduct(productId) {
            window.location.href = `product_details.html?id=${productId}`;
        }

        // 장바구니에 추가
        function addToCart(productId, productName) {
            // 장바구니 정보를 로컬 스토리지에서 가져오기
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

            // 알림 표시
            showToast(`${productName}이(가) 장바구니에 추가되었습니다.`);
        }

        // 선택된 상품 장바구니에 추가
        function addSelectedToCart(selectedItems) {
            // 장바구니 정보를 로컬 스토리지에서 가져오기
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

            let addedCount = 0;

            selectedItems.forEach(productId => {
                // 위시리스트에서 상품 정보 찾기
                const wishlistItem = wishlist.find(item => item.id === productId);
                if (!wishlistItem) return;

                // 이미 장바구니에 있는지 확인
                const existingProduct = cart.find(item => item.id === productId);

                if (existingProduct) {
                    // 이미 있으면 수량 증가
                    existingProduct.quantity += 1;
                } else {
                    // 없으면 새로 추가
                    cart.push({
                        id: productId,
                        name: wishlistItem.name,
                        quantity: 1
                    });
                }

                addedCount++;
            });

            // 장바구니 정보 저장
            localStorage.setItem('cart', JSON.stringify(cart));

            // 알림 표시
            if (addedCount > 0) {
                showToast(`${addedCount}개의 상품이 장바구니에 추가되었습니다.`);
            }
        }

        // 위시리스트에서 제거
        function removeFromWishlist(productId) {
            // 위시리스트 정보를 로컬 스토리지에서 가져오기
            let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

            // 제거할 상품 찾기
            const index = wishlist.findIndex(item => item.id === productId);
            if (index === -1) return;

            const removedItem = wishlist[index];

            // 위시리스트에서 제거
            wishlist.splice(index, 1);

            // 위시리스트 정보 저장
            localStorage.setItem('wishlist', JSON.stringify(wishlist));

            // DOM에서 해당 행 제거
            const row = document.querySelector(`tr[data-product-id="${productId}"]`);
            if (row) {
                row.remove();
            }

            // 알림 표시
            showToast(`${removedItem.name}이(가) 위시리스트에서 제거되었습니다.`);

            // 위시리스트가 비어있는지 확인
            if (wishlist.length === 0) {
                document.getElementById('emptyWishlist').style.display = 'block';
                document.getElementById('wishlistContent').style.display = 'none';
            }

            // 위시리스트 카운터 업데이트 (메인 페이지의 위시리스트 버튼 카운터)
            updateWishlistCounter();
        }

        // 선택된 상품 위시리스트에서 제거
        function removeSelectedFromWishlist(selectedItems) {
            if (selectedItems.length === 0) return;

            // 위시리스트 정보를 로컬 스토리지에서 가져오기
            let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

            // 제거할 상품들 필터링
            wishlist = wishlist.filter(item => !selectedItems.includes(item.id));

            // 위시리스트 정보 저장
            localStorage.setItem('wishlist', JSON.stringify(wishlist));

            // DOM에서 해당 행들 제거
            selectedItems.forEach(productId => {
                const row = document.querySelector(`tr[data-product-id="${productId}"]`);
                if (row) {
                    row.remove();
                }
            });

            // 알림 표시
            showToast(`${selectedItems.length}개의 상품이 위시리스트에서 제거되었습니다.`);

            // 위시리스트가 비어있는지 확인
            if (wishlist.length === 0) {
                document.getElementById('emptyWishlist').style.display = 'block';
                document.getElementById('wishlistContent').style.display = 'none';
            }

            // 위시리스트 카운터 업데이트 (메인 페이지의 위시리스트 버튼 카운터)
            updateWishlistCounter();

            // 전체 선택 체크박스 해제
            document.getElementById('selectAll').checked = false;
        }

        // 위시리스트 카운터 업데이트
        function updateWishlistCounter() {
            const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
            const counter = document.getElementById('wishlistCounter');

            if (counter) {
                counter.textContent = wishlist.length;
            }
        }

        // 포맷된 가격 표시
        function formatPrice(price) {
            return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        // 랜덤 카테고리 생성 (더미 데이터용)
        function getRandomCategory() {
            const categories = [
                '노트북', '냉장고', '세탁기', 'TV', '스마트폰',
                '태블릿', '헤드폰', '스피커', '가전제품', '주방가전'
            ];
            return categories[Math.floor(Math.random() * categories.length)];
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
        document.getElementById('searchInput').addEventListener('click', function () {
            window.location.href = 'search_results.html';
        });
        const searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                // 기본 폼 제출 대신 강제 이동
                e.preventDefault();
                window.location.href = 'search_results.html?query=' + encodeURIComponent(this.value);
            }
        });
    </script>
</body>

</html>