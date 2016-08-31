<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub" tabindex="-1">
        <!-- sub content -->
        <section class="mypage order-view">
            <div class="container">
                <h2>주문상세정보</h2>
                <article class="order-infomation">
                    <div class="table-wrap">
                        <table class="table table-bordered order-info">
                            <colgroup>
                                <col style="width: 70px;">
                                <col style="width: 550px;">
                                <col style="width: 80px;">
                                <col style="width: 130px;">
                                <col style="width: 130px;">
                                <col style="width: 130px;">
                                <col style="width: 80px;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th colspan="2">상품명</th>
                                    <th>수량</th>
                                    <th>상품금액</th>
                                    <th>적립포인트</th>
                                    <th>결제금액</th>
                                    <th>배송비</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="basket-img">
                                           <a href="#"><img src="/assets/images/mypage/basket_img.gif" alt="주문 상품 이미지"></a>
                                        </p>
                                    </td>
                                    <td>
                                        <h4>홈파티 메뉴 A (10인분)</h4>
                                        <p class="party-menu">홈파티 메뉴A (10인분)  1개 (+0원)</p>
                                        <dl class="inline-dl">
                                            <dt>수량추가 </dt>
                                            <dd>1인분 추가 1개 (+29,900원)</dd>
                                        </dl>
                                    </td>
                                    <td>2</td>
                                    <td>299,000</td>
                                    <td>2,990</td>
                                    <td class="amount">328,900</td>
                                    <td>착불</td>
                                </tr>
                                <tr>
                                    <td colspan="7" class="sum">
                                        <small>총 상품금액</small>328,900
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>
                <article class="pay-info">
                    <h3>결제 정보</h3>
                    <div class="table-wrap">
                        <table class="table table-bordered order-table">
                            <colgroup>
                                <col style="width: 130px;">
                                <col style="width: 1040px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>주문정보</th>
                                    <td>26584254-58423554</td>
                                </tr>
                                <tr>
                                    <th>주문일자</th>
                                    <td>2016-08-12 23:51:48</td>
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
                </article>
                <article class="place-info">
                    <h3>배송지 정보</h3>
                    <div class="table-wrap">
                        <table class="table table-bordered order-table">
                            <colgroup>
                                <col style="width: 130px;">
                                <col style="width: 1040px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>수령인</th>
                                    <td>김유림</td>
                                </tr>
                                <tr>
                                    <th>전화번호</th>
                                    <td>010 - 3256 - 0000</td>
                                </tr>
                                <tr>
                                    <th>휴대폰</th>
                                    <td>010 - 3256 - 0000</td>
                                </tr>
                                <tr>
                                    <th>배송지</th>
                                    <td>461832 서울시 강남구 잠원동 458 - 8</td>
                                </tr>
                                <tr>
                                    <th>배송메모</th>
                                    <td>빠른배송해주세요~~</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-sm btn-default" role="button">거래내역 인쇄</a>
                        <a href="#" class="btn btn-sm btn-red" role="button">목록</a>
                    </p>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
