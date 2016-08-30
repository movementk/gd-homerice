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
                                    <h3>홈파티 메뉴 A (10인분)</h3>

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
                                    <h3>홈파티 메뉴 A (10인분)</h3>

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
                </div>
            </div>

            <div class="modal" id="option-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>One fine body&hellip;</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
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
