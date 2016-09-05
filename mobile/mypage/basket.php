<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="sub mypage">
    <section class="order-view payment basket">
        <div class="container">
            <h3>주문결제</h3>
            <form>
                <div class="order-info">
                    <input type="checkbox" class="check">
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
                            <dt>배송비</dt>
                            <dd>착불</dd>
                            <dt>수량</dt>
                            <dd>2</dd>
                            <dt>결제가</dt>
                            <dd class="color-bold">328,900원</dd>
                        </dl>
                    </div>
                </div>

                <div class="btn-area btn-option">
                    <p>
                        <a href="#" class="btn btn-lg btn-gray" role="button" data-toggle="modal" data-target="#myModal">옵션변경</a>
                    </p>
                </div>
                <div class="order-info">
                    <input type="checkbox" class="check">
                    <p class="product-img">
                        <a href="#">
                            <img src="/mobile/assets/images/mypage/product_img01.gif" alt="상품이미지">
                        </a>
                    </p>
                    <div class="details">
                        <h4>일식 단품 (1인분)</h4>
                        <p class="menu-name">일식 단품 (1인분) 1개 (+0원)</p>
                        <hr>
                        <dl class="inline-dl">
                            <dt>상품가</dt>
                            <dd>19,000원</dd>
                            <dt>포인트</dt>
                            <dd>190원</dd>
                            <dt>배송비</dt>
                            <dd>착불</dd>
                            <dt>수량</dt>
                            <dd>1</dd>
                            <dt>결제가</dt>
                            <dd class="color-bold">19,900원</dd>
                        </dl>
                    </div>
                </div>
                <div class="btn-area btn-option">
                    <p>
                        <a href="#" class="btn btn-lg btn-gray" role="button" data-toggle="modal" data-target="#myModal">옵션변경</a>
                    </p>
                </div>
                <p class="total">
                    총 상품금액 <span><b>348,800</b>원</span>
                </p>

                <div class="btn-area total-btn">
                    <p>
                        <a href="#" class="btn btn-xs btn-default" role="button">선택삭제</a>
                        <a href="#" class="btn btn-xs btn-default btn-position" role="button">비우기</a>
                        <a href="#" class="btn btn-xs btn-red" role="button">주문하기</a>
                    </p>
                </div>
            </form>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">추가옵션</h4>
                        <p>
                            수량추가
                            <select>
                                <option value="">선택</option>
                                <option value="">선택01</option>
                                <option value="">선택02</option>
                            </select>
                        </p>
                    </div>
                    <div class="modal-body">
                        <dl>
                            <dt>홈파티 메뉴A (10인분) (+0원)</dt>
                            <dd class="addition">
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-minus" role="button"></a>
                                        <span>1</span>
                                        <a href="#" class="btn btn-plus" role="button"></a>
                                    </p>
                                </div>
                                <div class="del">
                                    <p>
                                        <a href="javascript:;" class="btn btn-del" role="button"></a>
                                    </p>
                                </div>
                            </dd>
                            <dt>수량추가 : 1인분 추가 (+29,900원)</dt>
                            <dd class="addition">
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-minus" role="button"></a>
                                        <span>1</span>
                                        <a href="#" class="btn btn-plus" role="button"></a>
                                    </p>
                                </div>
                                <div class="del">
                                    <p>
                                        <a href="javascript:;" class="btn btn-del" role="button"></a>
                                    </p>
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div class="modal-footer">
                        <p class="amount"><b>결제금액 <i>328,900</i></b>원</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
