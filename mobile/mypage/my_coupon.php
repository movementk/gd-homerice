<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="sub mypage">
    <section class="my-coupon">
        <div class="container">
            <h3>쿠폰관리</h3>
            <div class="table-wrap">
                <table class="table table-bordered">
                    <colgroup>
                        <col style="width: 230px;">
                        <col style="width: 70px;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>쿠폰내역</th>
                            <th>할인금액</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4>무료배송 쿠폰</h4>
                                <p>최소 30,000원 이상 구매시</p>
                                <dl>
                                    <dt>사용기한</dt>
                                    <dd>2016-08-01 ~ 2016-08-31</dd>
                                </dl>
                            </td>
                            <td>10,000</td>
                        </tr>
                        <tr>
                            <td>
                                <h4>회원가입 감사쿠폰</h4>
                                <p>최소 50,000원 이상 구매시</p>
                                <dl>
                                    <dt>사용기한</dt>
                                    <dd>2016-08-01 ~ 2016-08-31</dd>
                                </dl>
                            </td>
                            <td>20,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav class="paging" aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&lt;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&gt;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
