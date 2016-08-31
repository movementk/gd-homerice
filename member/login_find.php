<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub community" tabindex="-1">
        <!-- sub content -->
        <section class="member-info login-find">
            <div class="container">
                <h2>회원정보 찾기</h2>
                <div class="section-content">
                    <h3>회원정보 찾기</h3>
                    <div class="find">
                        <form>
                            <p class="find-txt">
                                회원가입 시 등록하신 이메일 주소를 입력해 주세요.<br>
                                해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.
                            </p>
                            <label for="email" class="sr-only">비밀번호</label>
                            <input type="email" class="form-control" id="email" placeholder="E-MAIL 주소를 입력해주세요">
                            <div class="captcha">
                                <div>captcha</div>
                                <input type="text" class="form-control" id="captcha">
                                <p class="font-dotum">자동등록방지 숫자를 순서대로입력하세요.</p>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-sm btn-red" role="button">확인</a>
                                    <a href="#" class="btn btn-sm btn-default" role="button">취소</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
