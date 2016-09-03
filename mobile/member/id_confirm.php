<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/member.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="sub member">
    <section class="login id-confirm">
        <div class="container">
            <h3>아이디/비밀번호 찾기</h3>
            <div class="section-content">
                <form>
                    <div class="login-form">
                        <p>
                            회원가입 시 등록하신 이메일 주소를 입력해 주세요.<br>
                            해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.
                        </p>
                        <input type="text" class="form-control" id="email" placeholder="E-MAIL 주소를 입력하세요">
                        <label for="email" class="sr-only">이메일</label>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-lg btn-gray">확인</a>
                            </p>
                        </div>
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
