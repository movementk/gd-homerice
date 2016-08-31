<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub" tabindex="-1">
        <!-- sub content -->
        <section class="mypage payment">
            <div class="container">
                <form>
                    <h2>주문결제</h2>
                    <div class="table-wrap">
                        <table class="table table-bordered order-info">
                            <colgroup>
                                <col style="width: 54px;">
                                <col style="width: 70px;">
                                <col style="width: 496px;">
                                <col style="width: 80px;">
                                <col style="width: 130px;">
                                <col style="width: 130px;">
                                <col style="width: 130px;">
                                <col style="width: 80px;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th class="check"><input type="checkbox"></th>
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
                                    <td class="check"><input type="checkbox"></td>
                                    <td>
                                        <p class="basket-img">
                                           <a href="#"><img src="/assets/images/mypage/basket_img.gif" alt="주문 상품 이미지"></a>
                                        </p>
                                    </td>
                                    <td>
                                        <h4>홈파티 메뉴 A (10인분)</h4>
                                        <div class="btn-area">
                                            <p>
                                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#option-modal">
                                                    옵션변경
                                                </button>
                                            </p>
                                        </div>

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
                                    <td colspan="8" class="sum">
                                        <small>총 상품금액</small>328,900
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-sm btn-default" role="button">선택삭제</a>
                            </p>
                        </div>
                    </div>
                    <article class="an-orderer">
                        <h3>주문하시는 분</h3>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <colgroup>
                                    <col style="width:130px">
                                    <col style="width:1040px">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th><label for="user-name">이름</label></th>
                                        <td>
                                            <input type="text" class="form-control" id="user-name" placeholder="김유림">
                                        </td>
                                    </tr><tr>
                                        <th><label for="addr">주소</label></th>
                                        <td class="address">
                                            <input type="text" class="form-control" id="addr">
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-default" role="button">주소검색</a>
                                                </p>
                                            </div>
                                            <input type="text" class="form-control" id="addr-2">
                                            <label for="addr-2">기본주소</label>
                                            <input type="text" class="form-control" id="addr-3">
                                            <label for="addr-3">상세주소</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="phone-1">전화번호</label></th>
                                        <td class="call">
                                            <input type="text" class="form-control" id="phone-1"> -
                                            <label for="phone-2" class="sr-only">전화번호-2</label>
                                            <input type="text" class="form-control" id="phone-2"> -
                                            <label for="phone-3" class="sr-only">전화번호-3</label>
                                            <input type="text" class="form-control" id="phone-3">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="cellphone-1">휴대폰</label></th>
                                        <td class="call">
                                            <input type="text" class="form-control" id="cellphone-1"> -
                                            <label for="cellphone-2" class="sr-only">휴대폰-2</label>
                                            <input type="text" class="form-control" id="cellphone-2"> -
                                            <label for="cellphone-3" class="sr-only">휴대폰-3</label>
                                            <input type="text" class="form-control" id="cellphone-3">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="email">이메일</label></th>
                                        <td class="email">
                                            <input type="email" class="form-control" id="email"> @
                                            <label for="domail" class="sr-only">이메일-2</label>
                                            <input type="text" class="form-control" id="domail">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="delivery">희망배송일</label></th>
                                        <td class="delivery">
                                            <input type="text" class="form-control" id="delivery" placeholder="2016-08-25">
                                            <p class="reference">이후로 배송 바랍니다</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>배송지점</th>
                                        <td class="place">
                                            <input type="radio" id="ansan">
                                            <label for="ansan">안산점</label>
                                            <input type="radio" id="gangnam">
                                            <label for="ansan">강남점</label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                    <article class="recipient">
                        <h3>받으시는 분</h3>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <colgroup>
                                    <col style="width:130px">
                                    <col style="width:1040px">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>배송지</th>
                                        <td class="place">
                                            <input type="radio" id="destination">
                                            <label for="destination">주문자와동일</label>
                                            <input type="radio" id="new-destination">
                                            <label for="new-destination">신규배송지</label>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-default" role="button">배송지목록</a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="user-place">배송지명</label></th>
                                        <td class="user-place">
                                            <input type="text" class="form-control" id="user-place">
                                            <input type="checkbox" class="check">
                                            <p class="reference">
                                                기본배송지와 동일
                                            </p>
                                        </td>
                                    </tr><tr>
                                        <th><label for="addr-01">주소</label></th>
                                        <td class="address">
                                            <input type="text" class="form-control" id="addr-01">
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-default" role="button">주소검색</a>
                                                </p>
                                            </div>
                                            <input type="text" class="form-control" id="addr-02">
                                            <label for="addr-02">기본주소</label>
                                            <input type="text" class="form-control" id="addr-03">
                                            <label for="addr-03">상세주소</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="phone-01">전화번호</label></th>
                                        <td class="call">
                                            <input type="text" class="form-control" id="phone-01"> -
                                            <label for="phone-02" class="sr-only">전화번호-2</label>
                                            <input type="text" class="form-control" id="phone-02"> -
                                            <label for="phone-03" class="sr-only">전화번호-3</label>
                                            <input type="text" class="form-control" id="phone-03">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="cellphone-01">휴대폰</label></th>
                                        <td class="call">
                                            <input type="text" class="form-control" id="cellphone-01"> -
                                            <label for="cellphone-02" class="sr-only">휴대폰-2</label>
                                            <input type="text" class="form-control" id="cellphone-02"> -
                                            <label for="cellphone-03" class="sr-only">휴대폰-3</label>
                                            <input type="text" class="form-control" id="cellphone-03">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="text-content">전하실말씀</label></th>
                                        <td class="email">
                                            <textarea id="text-content"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                    <article class="point-coupon">
                        <h3>포인트/쿠폰 할인</h3>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <colgroup>
                                    <col style="width:130px">
                                    <col style="width:1040px">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>쿠폰</th>
                                        <td class="coupon">
                                            <input type="text" class="form-control" id="coupon">
                                            <label for="coupon" class="sr-only">쿠폰금액</label>
                                            <p class="reference">원</p>
                                            <select>
                                                <option value="">선택하세요</option>
                                                <option value="">선택하세요01</option>
                                                <option value="">선택하세요02</option>
                                            </select>
                                            <p class="reference">사용가능 쿠폰 <i>0</i>장/보유쿠폰<i>1</i>장</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>포인트</th>
                                        <td class="point">
                                            <input type="text" class="form-control" id="point">
                                            <label for="point" class="sr-only">쿠폰금액</label>
                                            <p class="reference"> 원</p>
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-default" role="button">전액사용</a>
                                                </p>
                                            </div>
                                            <p class="reference">사용가능 포인트<i>1,000</i>원</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                    <article class="payment-info">
                        <h3>결제정보</h3>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <colgroup>
                                    <col style="width:130px">
                                    <col style="width:1040px">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>최종결제금액</th>
                                        <td class="total">328,000<small>원</small></td>
                                    </tr>
                                    <tr>
                                        <th>포인트</th>
                                        <td>
                                            0원 (지역에 따라 추가되는 도선료 등의 배송비입니다.)
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>결제방법선택</th>
                                        <td>
                                            <input type="radio" id="bank" class="check">
                                            <label for="bank">무통장입금</label>
                                            <input type="radio" id="account" class="check">
                                            <label for="account">실시간 계좌이체</label>
                                            <input type="radio" id="card" class="check">
                                            <label for="card">신용카드</label>
                                            <div class="bank-name">
                                                <label for="bank-name">입금자명</label>
                                                <input type="text" class="form-control" id="bank-name">
                                            </div>
                                            <p class="bank-account">입금은행 국민은행 00000-00-00000 (홈라이스)</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                    <div class="btn-area btn-position">
                        <p>
                            <a href="#" class="btn btn-sm btn-red" role="button">주문하기</a>
                            <a href="#" class="btn btn-sm btn-default" role="button">취소</a>
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
