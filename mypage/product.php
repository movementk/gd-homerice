<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub" tabindex="-1">
        <!-- sub content -->
        <section class="mypage product">
            <div class="container">
                <h2>마이페이지</h2>
                <ul class="mypage-menu">
                    <li><a href="#">주문/배송관리</a></li>
                    <li class="active"><a href="#">관심상품</a></li>
                    <li><a href="#">포인트 관리</a></li>
                    <li><a href="#">쿠폰관리</a></li>
                    <li><a href="#">회원정보수정</a></li>
                </ul>
                <form>
                    <div class="table-wrap">
                        <table class="table table-bordered">
                            <colgroup>
                                <col style="width: 50px;">
                                <col style="width: 80px;">
                                <col style="width: 700px;">
                                <col style="width: 130px;">
                                <col style="width: 130px;">
                                <col style="width: 80px;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="check"></th>
                                    <th colspan="2">상품명</th>
                                    <th>상품금액</th>
                                    <th>적립포인트</th>
                                    <th>삭제</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" class="check"></td>
                                    <td>
                                        <p>
                                            <a href="#">
                                                <img src="/assets/images/mypage/basket_img.gif" alt="주문상품 이미지">
                                            </a>
                                        </p>
                                    </td>
                                    <td><a href="#">홈파티 메뉴 A (10인분)</a></td>
                                    <td>299,000</td>
                                    <td>2,990</td>
                                    <td><a href="#">삭제</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-default" role="button">선택삭제</a>
                            <a href="#" class="btn btn-sm btn-default" role="button">장바구니 담기</a>
                            <a href="#" class="btn btn-sm btn-red" role="button">주문하기</a>
                        </p>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
