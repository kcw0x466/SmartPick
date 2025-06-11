<?php
    $isLoggedIn = isset($_SESSION['member_id']);
?>
<!-- Header section - Sticky -->
<header id="header">
    <div class="logo" onclick="window.location.href='mainpage.php'">
        <div class="logo-box">스마<br>트픽</div>
        <span>스마트픽</span>
    </div>
    <div class="search-container">
        <form id="searchForm" action="search_results.php" method="get">
            <input type="text" class="search-bar" id="searchInput" name="query" placeholder="찾으시는 상품을 검색해보세요">
            <button type="submit" class="search-icon">
                <i class="fas fa-search"></i>
            </button>
        </form>
        <div id="autocompleteContainer" class="autocomplete-container"></div>
    </div>
    <div class="nav-buttons">
        <?php if (!$isLoggedIn): ?>
            <!-- 로그인 전 -->
            <button class="nav-button" onclick="window.location.href='/log-in.php'">
                <i class="fas fa-user"></i> 로그인
            </button>
            <button class="nav-button" onclick="window.location.href='join.php'">
                <i class="fas fa-user-plus"></i> 회원가입
            </button>
        <?php else: ?>
            <!-- 로그인 후 -->
            <button class="nav-button" onclick="window.location.href='api/process_logout.php'">
                <i class="fas fa-sign-out-alt"></i> 로그아웃
            </button>
            <button class="nav-button" onclick="window.location.href='mypage.php'">
                <i class="fas fa-user-circle"></i> 마이페이지
            </button>
        <?php endif; ?>
        <button class="nav-button" onclick="window.location.href='cart.php'">
            <i class="fas fa-shopping-cart"></i> 장바구니
        </button>
        <button class="theme-toggle" id="themeToggle" aria-label="테마 변경">
            <i class="fas fa-sun"></i>
        </button>
    </div>
</header>
