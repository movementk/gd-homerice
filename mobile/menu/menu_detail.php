<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/menu.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="sub menu">
    <div class="container">
        <article class="menu-detail">
            <p class="product-img">
                <img src="/mobile/assets/images/menu/menu_img01.jpg" class="img-responsive" alt="제품 상세 이미지">
            </p>
            <h3>
                <small>총 14가지 요리</small>
                홈파티 메뉴A (10인분)
            </h3>
            <dl>
                <dt>시중가격</dt>
                <dd class="market-amount">400,000원</dd>
                <dt>판매가격</dt>
                <dd class="amount">299,000원</dd>
                <dt>용량</dt>
                <dd>14kg</dd>
                <dt>포인트</dt>
                <dd>0점</dd>
            </dl>
            <hr>
            <h4>추가옵션</h4>
            <p class="option-count">
                수량추가
                <select>
                    <option value="">선택</option>
                    <option value="">선택01</option>
                    <option value="">선택02</option>
                </select>
            </p>
            <hr>
            <dl class="menu-count">
                <dt>홈파티 메뉴A (10인분)</dt>
                <dd>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-minus" role="button"></a>
                            <span>1</span>
                            <a href="#" class="btn btn-plus" role="button"></a>
                        </p>
                    </div>
                </dd>
            </dl>
            <hr>
            <h5><small>총 금액</small> <b>299,000</b>원</h5>
            <div class="btn-area basket-btn">
                <p>
                    <a href="#" class="btn btn-red btn-set" role="button">구매하기</a>
                    <a href="#" class="btn btn-charcoal btn-set" role="button">장바구니 담기</a>
                    <a href="#" class="btn btn-gray btn-set" role="button">위시리스트</a>
                </p>
            </div>
        </article>
        <section class="info product-info">
            <h3>상품정보</h3>
            <p>
                <img src="/mobile/assets/images/menu/menu_detail_00.gif" class="img-responsive" alt="제품 상세정보 출력 영역">
            </p>
        </section>
        <section class="info packing">
            <h3>포장용기</h3>
            <ul class="row">
                <li class="col-xs-6 col-sm-3">
                    <figure>
                        <img src="/mobile/assets/images/menu/menu_detail_01.gif" class="img-responsive" alt="비빔밥 용기">
                        <figcaption>단품 (비빔밥류)주문시</figcaption>
                    </figure>
                </li>
                <li class="col-xs-6 col-sm-3">
                    <figure>
                        <img src="/mobile/assets/images/menu/menu_detail_02.gif" class="img-responsive" alt="홈파티 용기">
                        <figcaption>홈파티 메뉴 주문시</figcaption>
                    </figure>
                </li>
                <li class="col-xs-6 col-sm-3">
                    <figure>
                        <img src="/mobile/assets/images/menu/menu_detail_03.gif" class="img-responsive" alt="단품 용기">
                        <figcaption>단품 (일식, 한식, 양식) 주문시</figcaption>
                    </figure>
                </li>
                <li class="col-xs-6 col-sm-3">
                    <figure>
                        <img src="/mobile/assets/images/menu/menu_detail_04.gif" class="img-responsive" alt="단품 용기">
                        <figcaption>단품 (잔치, 일반 A / B / C ) 주문시</figcaption>
                    </figure>
                </li>
                <li class="col-xs-6 col-sm-3">
                    <figure>
                        <img src="/mobile/assets/images/menu/menu_detail_05.gif" class="img-responsive" alt="국 용기">
                        <figcaption>국, 김치, 소스 등</figcaption>
                    </figure>
                </li>
                <li class="col-xs-6 col-sm-3">
                    <div>
                        +나무젓가락, 일회용 숟가락,<br>
                        물티슈, 생수가 기본으로<br>
                        제공됩니다.
                    </div>
                </li>
            </ul>
        </section>
        <section class="info attention">
            <h3>주의사항</h3>
            <ul>
                <li>상기 메뉴는 계절과 식재료의 신선도에 따라 다소 변경될 수 있습니다.</li>
                <li>
                    GD 홈라이스에서는 신선한 메뉴 배송을 위해 주문을 받은 후에 식자재 사입과 조리가시작됩니다.  그러므로 전 메뉴 주문은 최소 1주일전에 가능한 점 양해 부탁드립니다.
                </li>
                <li>모든상품 배송비용은 별도 입니다.</li>
                <li>배송 가능한 지역과 요금을 확인해 주세요.</li>
                <li>
                    이 외의 자세한 사항은 문의 바랍니다.<br>
                    ( 고객센터 : 강남점  02 - 547- 6400 / 안산점 031- 487 - 1400 )
                </li>
            </ul>
        </section>
        <section class="info review">
            <h3>사용후기</h3>
            <ul class="notice-list">
                <li>
                    <a href="#">구매후기~~</a>
                    <div class="user-info">
                        <p class="user-name">홍길동</p>
                        <p class="date">2016-08-10</p>
                    </div>
                </li>
                <li>
                    <a href="#">좋아요~ 맛있어요 다음에 또주문할게요~</a>
                    <div class="user-info">
                        <p class="user-name">홍길동</p>
                        <p class="date">2016-08-10</p>
                    </div>
                </li>
                <li>
                    <a href="#">생각보다 더 맛있었어요~ 괜찮습니다</a>
                    <div class="user-info">
                        <p class="user-name">홍길동</p>
                        <p class="date">2016-08-10</p>
                    </div>
                </li>
                <li>
                    <a href="#">가격대비 훌륭!!</a>
                    <div class="user-info">
                        <p class="user-name">홍길동</p>
                        <p class="date">2016-08-10</p>
                    </div>
                </li>
                <li>
                    <a href="#">구매후기 ~~~~</a>
                    <div class="user-info">
                        <p class="user-name">홍길동</p>
                        <p class="date">2016-08-10</p>
                    </div>
                </li>
                <li>
                    <a href="#">좋아요~ 맛있어요 다음에 또주문할게요~</a>
                    <div class="user-info">
                        <p class="user-name">홍길동</p>
                        <p class="date">2016-08-10</p>
                    </div>
                </li>
            </ul>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-xs btn-red" role="button">글쓰기</a>
                </p>
            </div>
        </section>
        <section class="info qna">
            <h3>상품문의</h3>
            <ul class="notice-list">
                <li>
                    <a href="#">문의합니다.문의합니다.문의합니다.문의합니다.문의합니다.문의합니다.</a>
                    <div class="user-info">
                        <p class="user-name">홍길동</p>
                        <p class="date">2016-08-10</p>
                    </div>
                </li>
                <li>
                    <a href="#">배송관련문의</a>
                    <div class="user-info">
                        <p class="user-name">홍길동</p>
                        <p class="date">2016-08-10</p>
                    </div>
                </li>
                <li>
                    <a href="#">배송용기관련해서요...</a>
                    <div class="user-info">
                        <p class="user-name">홍길동</p>
                        <p class="date">2016-08-10</p>
                    </div>
                </li>
                <li>
                    <a href="#">문의</a>
                    <div class="user-info">
                        <p class="user-name">홍길동</p>
                        <p class="date">2016-08-10</p>
                    </div>
                </li>
                <li>
                    <a href="#">언제쯤 배송가능한가요?</a>
                    <div class="user-info">
                        <p class="user-name">홍길동</p>
                        <p class="date">2016-08-10</p>
                    </div>
                </li>
                <li>
                    <a href="#">배송관련문의</a>
                    <div class="user-info">
                        <p class="user-name">홍길동</p>
                        <p class="date">2016-08-10</p>
                    </div>
                </li>
            </ul>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-xs btn-red" role="button">글쓰기</a>
                </p>
            </div>
        </section>
        <section class="info delivery">
            <h3>배송정보</h3>
            <div class="seoul">
                <h4>서울지역</h4>
                <ol>
                    <li>
                        오토바이 (기본, 소량) - 홈파티 1SET (2박스 기준)
                        <ul>
                            <li>강남지역 - 10,000원</li>
                            <li>강서지역 - 15,000원</li>
                            <li>강북지역 - 15,000원</li>
                        </ul>
                    </li>
                    <li>
                        다마스 (봉고형, 대량) - 홈파티 2SET ~ 13SET (26박스)
                        <ul>
                            <li>강남지역 - 20,000원</li>
                            <li>강서지역 - 25,000원</li>
                            <li>강북지역 - 25,000원</li>
                        </ul>
                    </li>
                </ol>
            </div>
            <div class="gyeonggi">
                <h4>경기 (안산)지역</h4>
                <ol>
                    <li>
                        오토바이 (기본, 소량) - 홈파티 1SET (2박스 기준)
                        <ul>
                            <li>안산, 시흥지역 - 10,000원~</li>
                            <li>안산시 (수암동, 사사동, 팔곡동, 안산동  - 15,000원~</li>
                            <li>시흥시 (신천리, 화중동) - 15,000원~</li>
                        </ul>
                    </li>
                    <li>
                        다마스 (봉고형, 대량) - 홈파티 2SET ~ 13SET (26박스)
                        <ul>
                            <li>안산, 시흥지역 - 15,000원~</li>
                            <li>안산시 (수암동, 사사동, 팔곡동, 안산동  - 20,000원~</li>
                            <li>시흥시 (신천리, 화중동) - 20,000원~</li>
                        </ul>
                    </li>
                    <li>
                        라보 (트럭형, 대량) - 홈파티 14SET (28박스)
                        <ul>
                            <li>안산, 시흥지역 - 20,000원~</li>
                            <li>안산시 (수암동, 사사동, 팔곡동, 안산동  - 25,000원~</li>
                            <li>시흥시 (신천리, 화중동) - 25,000원~</li>
                        </ul>
                    </li>
                </ol>
            </div>
            <div class="call-center">
                <p>
                    모든 제품은 착불결제이며, 서울 / 경기외 배송지역은<br>
                    고객센터로 문의 바랍니다
                </p>
                <dl>
                    <dt>강남점</dt>
                    <dd><a href="tel:025476400">02. 547. 6400</a></dd>
                    <dt>안산점</dt>
                    <dd><a href="tel:0314871400">031. 487. 1400</a></dd>
                </dl>
            </div>
        </section>
    </div>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
