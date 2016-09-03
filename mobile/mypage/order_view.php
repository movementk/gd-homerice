<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="sub mypage">
    <section class="order-view">
        <div class="container">
            <h3>주문상세정보</h3>
            <div class="order-info">
                <p class="product-img">
                    <a href="#">
                        <img src="/mobile/assets/images/mypage/product_img.gif" alt="상품이미지">
                    </a>
                </p>
                <div class="details">
                    <h4>홈파티 메뉴 A (10인분)</h4>
                    <p class="menu-name">홈파티메뉴 A(10인분) 1개 (+0원)</p>
                    <dl class="count-dl">
                        <dt>수량추가</dt>
                        <dd>1인분추가 1개 (+29,000원)</dd>
                    </dl>
                    <hr>
                    <dl class="inline-dl">
                        <dt>상품가</dt>
                        <dd>299,000원</dd>
                        <dt>포인트</dt>
                        <dd>2,990원</dd>
                        <dt>수량</dt>
                        <dd>2</dd>
                        <dt>결제가</dt>
                        <dd class="color-bold">328,900원</dd>
                        <dt>상태</dt>
                        <dd class="color-bold">배송완료</dd>
                    </dl>
                </div>
            </div>
            <p class="total">
                총 상품금액 <span><b>348,800</b>원</span>
            </p>
            <section class="amount-info">
                <h5>결제정보</h5>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 80px;">
                            <col style="width: 220px;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>주문번호</th>
                                <td>26584254-584523554</td>
                            </tr>
                            <tr>
                                <th>주문일자</th>
                                <td>2016-08-12 23:51:59</td>
                            </tr>
                            <tr>
                                <th>이름</th>
                                <td>김유림</td>
                            </tr>
                            <tr>
                                <th>상태</th>
                                <td>배송완료</td>
                            </tr>
                            <tr>
                                <th>총 상품금액</th>
                                <td>299,000</td>
                            </tr>
                            <tr>
                                <th>포인트</th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>총 결제금액</th>
                                <td>328,900</td>
                            </tr>
                            <tr>
                                <th>결제수단</th>
                                <td>카드결제</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="amount-info">
                <h5>배송지 정보</h5>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 80px;">
                            <col style="width: 220px;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>수령인</th>
                                <td>김유림</td>
                            </tr>
                            <tr>
                                <th>전화번호</th>
                                <td>010-3256-0000</td>
                            </tr>
                            <tr>
                                <th>휴대폰</th>
                                <td>010-3256-0000</td>
                            </tr>
                            <tr>
                                <th>배송지</th>
                                <td>461832 서울시 강남구 잠원동 458 - 8</td>
                            </tr>
                            <tr>
                                <th>배송메모</th>
                                <td>빠른배송해주세요~~~ </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-xs btn-default">거래내역인쇄</a>
                    <a href="#" class="btn btn-xs btn-red">목록</a>
                </p>
            </div>
        </div>
    </section>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
