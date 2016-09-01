<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>GD 홈라이스</title>
        <!-- Bootstrap -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="/mobile/assets/css/default.css" rel="stylesheet">
        <link href="/mobile/assets/css/main.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <nav id="topnav">
            <ul>
                <li>
                    <a href="#">카카오톡 상담</a>
                </li>
                <li>
                    <a href="#">전화문의</a>
                </li>
                <li>
                    <a href="#">PC버전</a>
                </li>
            </ul>
        </nav>
        <header id="header">
            <button type="button" class="btn btn-menu">
                <span class="menu"></span>
                <span class="sr-only">메뉴버튼</span>
            </button>
            <h1><img src="/mobile/assets/images/main/logo.jpg" alt="로고"></h1>
            <button type="button" class="btn btn-search">
                <span class="search"></span>
                <span class="sr-only">검색버튼</span>
            </button>
        </header>
        <main id="content">
            <div class="visual">
                <ul>
                    <li>
                        <a href="#">
                            <img src="/mobile/assets/images/main/bg_visual_1.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/mobile/assets/images/main/bg_visual_1.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/mobile/assets/images/main/bg_visual_1.jpg" class="img-responsive" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <nav class="quick">
                <ul>
                    <li>
                        <a href="#">
                            <figure>
                                <img src="/mobile/assets/images/main/menu_img01.png" alt="">
                                <figcaption>Store Info</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <figure>
                                <img src="/mobile/assets/images/main/menu_img02.png" alt="">
                                <figcaption>Home Party</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <figure>
                                <img src="/mobile/assets/images/main/menu_img03.png" alt="">
                                <figcaption>Single Dish</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <figure>
                                <img src="/mobile/assets/images/main/menu_img04.png" alt="">
                                <figcaption>GD Homerice</figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="call-center">
                <h2>Call Center</h2>
                <hr>
                <dl>
                    <a href="tel:025476400">
                        <dt>강남점</dt>
                        <dd>02.547.6400</dd>
                    </a>
                </dl>
                <dl>
                    <a href="tel:0314871400">
                        <dt>안산점</dt>
                        <dd>031.487.1400</dd>
                    </a>
                </dl>
            </div>
        </main>
        <footer id="footer">
            <div class="policy">
                <ul>
                    <li><a href="#">이용약관</a></li>
                    <li><a href="#">개인정보보호정책</a></li>
                    <li><a href="#">이용안내</a></li>
                    <li><a href="#">매장정보</a></li>
                </ul>
            </div>
            <div class="container">
                <div class="company">
                    <h2>더 파티움 안산</h2>
                    <ul>
                        <li>
                            <dl>
                                <dt>대표</dt>
                                <dd>황수원</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>전화</dt>
                                <dd><a href="tel:0314871400">031-487-1400</a></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>팩스</dt>
                                <dd>031-413-0606</dd>
                            </dl>
                        </li>
                    </ul>
                    <h2>더 그레이스켈리 강남</h2>
                    <ul>
                        <li>
                            <dl>
                                <dt>대표</dt>
                                <dd>황수원</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>전화</dt>
                                <dd><a href="tel:025476400">02-547-6400</a></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>팩스</dt>
                                <dd>031-413-0606</dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/jquery.bxslider.min.js"></script>
        <script>
        $('.visual ul').bxSlider({
            auto: false,
            controls: false
        });
    </script>
    </body>
</html>
