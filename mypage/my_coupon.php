<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub" tabindex="-1">
        <!-- sub content -->
        <section class="mypage my-coupon">
            <div class="container">
                <h2>마이페이지</h2>
                <ul class="mypage-menu">
                    <li><a href="#">주문/배송관리</a></li>
                    <li><a href="#">관심상품</a></li>
                    <li><a href="#">포인트 관리</a></li>
                    <li class="active"><a href="#">쿠폰관리</a></li>
                    <li><a href="#">회원정보수정</a></li>
                </ul>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 70px;">
                            <col style="width: 340px;">
                            <col style="width: 340px;">
                            <col style="width: 210px;">
                            <col style="width: 210px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>쿠폰명</th>
                                <th>적용대상</th>
                                <th>할인금액</th>
                                <th>사용기한</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="#">무료배송 쿠폰</a></td>
                                <td>최소 30,000원 이상 구매시</td>
                                <td>10,000</td>
                                <td>2016-08-01 ~ 2016-08-31</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
