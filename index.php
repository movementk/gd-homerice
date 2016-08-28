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

        <div class="introduce">
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
                        <p>GD홈라이스의<br> 매장을 소개합니다<br>GD홈라이스의</p>
                        <a href="#">
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
                        <p>GD홈라이스의<br> 매장을 소개합니다<br>GD홈라이스의</p>
                        <a href="#">
                            <span><img src="/assets/images/main/aroow_w.png" alt="버튼 이미지"></span>
                        </a>
                    </div>
                    <span class="arrow"></span>
                    <div class="line"></div>
                </div>
                <div class="homerice">
                    <h3>GD Homerice</h3>
                    <hr>
                    <p>GD홈라이스의<br> 매장을 소개합니다</p>
                    <a href="#">
                        <span><img src="/assets/images/main/aroow_b.png" alt="버튼 이미지"></span>
                    </a>
                </div>
            </div>
        </div>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/sub/main_menu.php'); ?>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script>
        $('.visual ul').bxSlider({
            auto: false
        });
    </script>
    <!--<script>
        (function($) {
            $(document).on('mouseenter focusin', '#gnb .container', function() {
                $('#gnb').addClass('opened');
            });
            $(document).on('mouseleave', '#gnb .container', function() {
                $('#gnb').removeClass('opened');
            });
        })(jQuery);
    </script>-->
</body>
</html>
