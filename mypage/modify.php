<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub" tabindex="-1">
        <!-- sub content -->
        <section class="mypage modify">
            <div class="container">
                <h2>마이페이지</h2>
                <ul class="mypage-menu">
                    <li><a href="#">주문/배송관리</a></li>
                    <li><a href="#">관심상품</a></li>
                    <li><a href="#">포인트 관리</a></li>
                    <li><a href="#">쿠폰관리</a></li>
                    <li class="active"><a href="#">회원정보수정</a></li>
                </ul>
                <div class="section-content">
                    <form>
                        <p class="surely">표시가 있는 항목은 필수 입력 항목 입니다.</p>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <colgroup>
                                    <col style="width:130px">
                                    <col style="width:1040px">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th class="surely">아이디</th>
                                        <td>yej555</td>
                                    </tr>
                                    <tr>
                                        <th class="surely"><label for="user-pw">비밀번호</label></th>
                                        <td>
                                            <input type="password" class="form-control" id="user-pw">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="surely"><label for="pw-confirm">비밀번호확인</label></th>
                                        <td>
                                            <input type="password" class="form-control" id="pw-confirm">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="surely">이름</th>
                                        <td>김유림</td>
                                    </tr>
                                    <tr>
                                        <th class="surely"><label for="addr">주소</label></th>
                                        <td class="address">
                                            <input type="text" class="form-control" id="addr">
                                            <div class="btn-area">
                                                <p>
                                                    <a href="#" class="btn btn-default" role="button">주소검색</a>
                                                </p>
                                            </div>
                                            <input type="text" class="form-control" id="addr-2">
                                            <label for="addr-2" class="font-dotum">기본주소</label>
                                            <input type="text" class="form-control" id="addr-3">
                                            <label for="addr-3" class="font-dotum">상세주소</label>
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
                                        <th class="surely"><label for="cellphone-1">휴대폰</label></th>
                                        <td class="call">
                                            <input type="text" class="form-control" id="cellphone-1"> -
                                            <label for="cellphone-2" class="sr-only">휴대폰-2</label>
                                            <input type="text" class="form-control" id="cellphone-2"> -
                                            <label for="cellphone-3" class="sr-only">휴대폰-3</label>
                                            <input type="text" class="form-control" id="cellphone-3">
                                            <input type="checkbox" class="check">
                                            <p class="reference">SMS 수신동의</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="surely"><label for="email">이메일</label></th>
                                        <td class="email">
                                            <input type="email" class="form-control" id="email"> @
                                            <label for="domail" class="sr-only">이메일-2</label>
                                            <input type="text" class="form-control" id="domail">
                                            <input type="checkbox" class="check">
                                            <p class="reference">이메일 수신동의</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="captcha">자동등록방지</label></th>
                                        <td class="captcha">
                                            <div>captcha</div>
                                            <input type="text" class="form-control" id="captcha">
                                            <p class="font-dotum">자동등록방지 숫자를 순서대로입력하세요.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-sm btn-red" role="button">정보수정</a>
                                <a href="#" class="btn btn-sm btn-default" role="button">취소</a>
                                <a href="#" class="btn btn-sm btn-gray" role="button">회원탈퇴</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
