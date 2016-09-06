<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <div class="visual">
            <ul>
                <li><a href="#" class="first"></a></li>
                <li><a href="#" class="second"></a></li>
                <li><a href="#" class="third"></a></li>
            </ul>
        </div>

        <div id="introduce">
            <div class="container">
                <div class="store">
                    <h3>Store</h3>
                    <hr>
                    <p>GD홈라이스의<br> 매장을 소개합니다</p>
                    <a href="#">
                        <span><img src="/assets/images/main/aroow_b.png" alt="버튼 이미지"></span>
                    </a>
                </div>
                <div class="home-party">
                    <div class="info">
                        <h3>Home Party</h3>
                        <hr>
                        <p>생일, 모임, 돌잔치, 캠핑 등<br>스페셜 푸드가 필요한날엔<br>홈파티 메뉴로 즐겨보세요</p>
                        <a href="/menu/party_menu.php">
                            <span><img src="/assets/images/main/aroow_w.png" alt="버튼 이미지"></span>
                        </a>
                    </div>
                    <span class="arrow"></span>
                    <div class="line"></div>
                </div>
                <div class="single-dish">
                    <div class="info">
                        <h3>Single Dish</h3>
                        <hr>
                        <p>야유회, 운동회, 세미나 등 간편한<br>푸드가 필요한 날엔<br>단품 메뉴로 즐겨보세요</p>
                        <a href="/menu/single_menu.php">
                            <span><img src="/assets/images/main/aroow_w.png" alt="버튼 이미지"></span>
                        </a>
                    </div>
                    <span class="arrow"></span>
                    <div class="line"></div>
                </div>
                <div class="homerice">
                    <h3>GD Homerice</h3>
                    <hr>
                    <p>홈파티 전문브랜드<br>‘GD홈라이스’는 늘 정성을 다해<br>음식을 준비하겠습니다</p>
                    <a href="#">
                        <span><img src="/assets/images/main/aroow_b.png" alt="버튼 이미지"></span>
                    </a>
                </div>
            </div>
        </div>
        <div id="main-menu">
            <section class="party-menu">
                <div class="container">
                    <h4>Home Party</h4>
                    <h3>고품격 요리 홈파티 메뉴</h3>
                    <p>생일, 모임, 돌잔치, 캠핑 등 스페셜 푸드가 필요한 날엔 홈파티 메뉴로 즐겨보세요</p>
                    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/sub/party_menu.php'); ?>
                </div>
            </section>
            <section class="single-menu">
                <div class="container">
                    <h4>Single Dish</h4>
                    <h3>간편하게 즐기는 단품메뉴</h3>
                    <p>야유회, 운동회, 세미나 등 간편한 푸드가 필요한 날엔 단품메뉴로 즐겨보세요</p>
                    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/sub/single_menu.php'); ?>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/quick.js"></script>
    <script>
        $('.visual ul').bxSlider({
            auto: true
        });
    </script>
</body>
</html>
