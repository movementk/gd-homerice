<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="sub mypage">
    <section class="order-view payment">
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
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-xs btn-default" role="button">선택삭제</a>
                    </p>
                </div>
                <section class="common-section">
                    <h5>주문하시는 분</h5>
                    <div class="table-wrap join-form">
                        <table class="table table-bordered">
                            <colgroup>
                                <col style="width: 90px;">
                                <col style="width: 210px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>이름</th>
                                    <td class="user-name">김유림</td>
                                </tr>
                                <tr>
                                    <th><label for="addr">주소</label></th>
                                    <td class="addr">
                                        <input type="text" id="addr" class="form-control">
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-xs btn-default">주소검색</a>
                                            </p>
                                        </div>
                                        <label for="addr-1" class="sr-only">기본주소</label>
                                        <input type="text" id="addr-1" class="form-control">
                                        <label for="addr-2" class="sr-only">상세주소</label>
                                        <input type="text" id="addr-2" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="call">전화번호</label></th>
                                    <td class="call">
                                        <input type="text" id="call" class="form-control"> -
                                        <label for="call-1" class="sr-only">전화번호-2</label>
                                        <input type="text" id="call-1" class="form-control"> -
                                        <label for="call-2" class="sr-only">전화번호-3</label>
                                        <input type="text" id="call-2" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="phone">휴대폰</label></th>
                                    <td class="call">
                                        <input type="text" id="phone" class="form-control"> -
                                        <label for="phone-1" class="sr-only">휴대폰-2</label>
                                        <input type="text" id="phone-1" class="form-control"> -
                                        <label for="phone-2" class="sr-only">휴대폰-3</label>
                                        <input type="text" id="phone-2" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="email">이메일</label></th>
                                    <td class="email">
                                        <input type="email" id="email" class="form-control"> @
                                        <label for="email-1" class="sr-only">도메인</label>
                                        <input type="text" id="email-1" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th>희망배송일</th>
                                    <td class="hope-date">
                                        <input type="date" class="form-control" id="hope-date">
                                        <label for="hope-date" class="sr-only">희망배송일</label>
                                        <p>이후로 배송 바랍니다</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>배송지점선택</th>
                                    <td class="branch">
                                        <input type="radio" id="gyeonggi">
                                        <label for="gyeonggi">안산점</label>
                                        <input type="radio" id="seoul">
                                        <label for="seoul">강남점</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <section class="common-section">
                    <h5>받으시는 분</h5>
                    <div class="table-wrap join-form">
                        <table class="table table-bordered">
                            <colgroup>
                                <col style="width: 90px;">
                                <col style="width: 210px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th>배송지 선택</th>
                                    <td class="delivery">
                                        <input type="radio" id="same">
                                        <label for="same">주문자와 동일</label>
                                        <input type="radio" id="new">
                                        <label for="new">신규배송지</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="map-name">배송지명</label></th>
                                    <td class="map-name">
                                        <input type="text" id="map-name" class="form-control">
                                        <p>
                                            <input type="checkbox" class="check">
                                            기본 배송지로 설정
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="user-name-1">이름</label></th>
                                    <td class="user-name padding-width">
                                        <input type="text" id="user-name-1" class="form-control" placeholder="김유림">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="addr">주소</label></th>
                                    <td class="addr">
                                        <input type="text" id="addr" class="form-control">
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-xs btn-default">주소검색</a>
                                            </p>
                                        </div>
                                        <label for="address-1" class="sr-only">기본주소</label>
                                        <input type="text" id="address-1" class="form-control">
                                        <label for="address-2" class="sr-only">상세주소</label>
                                        <input type="text" id="address-2" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="call-01">전화번호</label></th>
                                    <td class="call">
                                        <input type="text" id="call-01" class="form-control"> -
                                        <label for="call-02" class="sr-only">전화번호-2</label>
                                        <input type="text" id="call-02" class="form-control"> -
                                        <label for="call-03" class="sr-only">전화번호-3</label>
                                        <input type="text" id="call-03" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="phone-01">휴대폰</label></th>
                                    <td class="call">
                                        <input type="text" id="phone-01" class="form-control"> -
                                        <label for="phone-02" class="sr-only">휴대폰-2</label>
                                        <input type="text" id="phone-02" class="form-control"> -
                                        <label for="phone-03" class="sr-only">휴대폰-3</label>
                                        <input type="text" id="phone-03" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="order-content">전하실말씀</label></th>
                                    <td class="order-content">
                                        <textarea id="order-content"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </form>
        </div>
    </section>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
