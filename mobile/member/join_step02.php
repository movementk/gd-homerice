<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/member.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="sub member">
    <section class="join-step02">
        <div class="container">
            <h3>회원가입</h3>
            <div class="step">
                <ul class="step-menu">
                    <li>
                        <a href="#">step1 약관동의</a>
                    </li>
                    <li class="active">
                        <a href="#">step2 정보입력</a>
                    </li>
                    <li>
                        <a href="#">step3 가입완료</a>
                    </li>
                </ul>
            </div>
            <div class="section-content">
                <form>
                    <p class="surely">표시가 있는 항목은 필수 입력 항목 입니다.</p>
                    <div class="table-wrap join-form">
                        <table class="table table-bordered">
                            <colgroup>
                                <col style="width: 90px;">
                                <col style="width: 210px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th class="surely"><label for="user-id">아이디</label></th>
                                    <td class="user-id">
                                        <input type="text" id="user-id" class="form-control">
                                        <div class="btn-area">
                                            <p>
                                                <a href="#" class="btn btn-xs btn-default">중복확인</a>
                                            </p>
                                        </div>
                                        <p class="reference">영문, 숫자, _ 4~16자</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="surely"><label for="user-pw">비밀번호</label></th>
                                    <td>
                                        <input type="password" id="user-pw" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="surely"><label for="pw-confirm">비밀번호확인</label></th>
                                    <td>
                                        <input type="password" id="pw-confirm" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="surely"><label for="user-name">이름</label></th>
                                    <td>
                                        <input type="text" id="user-name" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="surely"><label for="addr">주소</label></th>
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
                                    <th class="surely"><label for="phone">휴대폰</label></th>
                                    <td class="call">
                                        <input type="text" id="phone" class="form-control"> -
                                        <label for="phone-1" class="sr-only">휴대폰-2</label>
                                        <input type="text" id="phone-1" class="form-control"> -
                                        <label for="phone-2" class="sr-only">휴대폰-3</label>
                                        <input type="text" id="phone-2" class="form-control">
                                        <p class="reference">
                                            <input type="checkbox" class="check">
                                            SMS 수신 동의
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="surely"><label for="email">이메일</label></th>
                                    <td class="email">
                                        <input type="email" id="email" class="form-control"> @
                                        <label for="email-1" class="sr-only">도메인</label>
                                        <input type="text" id="email-1" class="form-control">
                                        <p class="reference">
                                            <input type="checkbox" class="check">
                                            이메일 수신 동의
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-xs btn-red">회원가입</a>
                            <a href="#" class="btn btn-xs btn-default">취소</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
