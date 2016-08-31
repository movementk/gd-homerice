<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub" tabindex="-1">
        <!-- sub content -->
        <section class="mypage my-point">
            <div class="container">
                <h2>마이페이지</h2>
                <ul class="mypage-menu">
                    <li><a href="#">주문/배송관리</a></li>
                    <li><a href="#">관심상품</a></li>
                    <li class="active"><a href="#">포인트 관리</a></li>
                    <li><a href="#">쿠폰관리</a></li>
                    <li><a href="#">회원정보수정</a></li>
                </ul>
                <p class="point-txt">사용가능 포인트 <i>7,500</i></p>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 70px;">
                            <col style="width: 240px;">
                            <col style="width: 470px;">
                            <col style="width: 130px;">
                            <col style="width: 130px;">
                            <col style="width: 130px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>일시</th>
                                <th>내용</th>
                                <th>만료일</th>
                                <th>지급포인트</th>
                                <th>사용포인트</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2016-08-24 00:02:11</td>
                                <td><a href="#">2016-08-24 첫로그인</a></td>
                                <td>-</td>
                                <td>+ 100</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2016-08-24 00:02:11</td>
                                <td><a href="#">2016-08-24 첫로그인</a></td>
                                <td>-</td>
                                <td>+ 100</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2016-08-24 00:02:11</td>
                                <td><a href="#">2016-08-24 첫로그인</a></td>
                                <td>-</td>
                                <td>+ 100</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>2016-08-24 00:02:11</td>
                                <td><a href="#">2016-08-24 첫로그인</a></td>
                                <td>-</td>
                                <td>+ 100</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>2016-08-24 00:02:11</td>
                                <td><a href="#">2016-08-24 첫로그인</a></td>
                                <td>-</td>
                                <td>+ 100</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>2016-08-24 00:02:11</td>
                                <td><a href="#">2016-08-24 첫로그인</a></td>
                                <td>-</td>
                                <td>+ 100</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>2016-08-24 00:02:11</td>
                                <td><a href="#">2016-08-24 첫로그인</a></td>
                                <td>-</td>
                                <td>+ 100</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>2016-08-24 00:02:11</td>
                                <td><a href="#">2016-08-24 첫로그인</a></td>
                                <td>-</td>
                                <td>+ 100</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>2016-08-24 00:02:11</td>
                                <td><a href="#">2016-08-24 첫로그인</a></td>
                                <td>-</td>
                                <td>+ 100</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>2016-08-24 00:02:11</td>
                                <td><a href="#">2016-08-24 첫로그인</a></td>
                                <td>-</td>
                                <td>+ 100</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav class="paging" aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&lsaquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&rsaquo;</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
