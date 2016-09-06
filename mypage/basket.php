<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub" tabindex="-1">
        <!-- sub content -->
        <section class="mypage basket">
            <div class="container">
                <h2>장바구니</h2>
                <div class="table-wrap">
                    <form>
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
                                <a href="#" class="btn btn-sm btn-default" role="button">쇼핑계속하기</a>
                                <a href="#" class="btn btn-sm btn-default" role="button">선택삭제</a>
                                <a href="#" class="btn btn-sm btn-default" role="button">비우기</a>
                                <a href="#" class="btn btn-sm btn-red" role="button">주문하기</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal" id="option-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>추가 옵션</h4>
                            <dl>
                                <dt>수량추가</dt>
                                <dd>
                                    <select>
                                        <option value="">선택</option>
                                        <option value="">선택01</option>
                                        <option value="">선택02</option>
                                    </select>
                                </dd>
                            </dl>
                        </div>
                        <div class="modal-body">
                            <dl>
                                <dt>홈파티 메뉴A (10인분) (+0원)</dt>
                                <dd>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-minus" role="button"></a>
                                            <span>1</span>
                                            <a href="#" class="btn btn-plus" role="button"></a>
                                        </p>
                                    </div>
                                    <div class="del">
                                        <p>
                                            <a href="javascript:;" class="btn-del" role="button"></a>
                                        </p>
                                    </div>
                                </dd>
                                <dt>수량추가 : 1인분 추가 (+29,900원)</dt>
                                <dd>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-minus" role="button"></a>
                                            <span>1</span>
                                            <a href="#" class="btn btn-plus" role="button"></a>
                                        </p>
                                    </div>
                                    <div class="del">
                                        <p>
                                            <a href="javascript:;" class="btn-del" role="button"></a>
                                        </p>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="modal-footer">
                            <strong class="amount">결제금액 <i>328,900</i></strong>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-red" role="button">옵션적용</a>
                                    <a href="#" class="btn btn-default" role="button">취소</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script>
        (function($) {
            $('#option-modal').on('show.bs.modal', function (e) {
                console.log($(e.relatedTarget));
                console.log($(e.relatedTarget).offset().top, $(e.relatedTarget).offset().left);
                $('#option-modal .modal-dialog').css('left', $(e.relatedTarget).offset().left);
                $('#option-modal .modal-dialog').css('top', $(e.relatedTarget).offset().top);
            });
        })(jQuery);
    </script>
</body>
</html>
