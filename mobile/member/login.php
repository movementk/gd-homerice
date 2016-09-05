<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/member.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="sub member">
    <section class="login">
        <div class="container">
            <h3>로그인</h3>
            <div class="section-content">
                <form>
                    <div class="login-form">
                        <input type="text" class="form-control" id="user-id" placeholder="아이디">
                        <label for="user-id" class="sr-only">아이디</label>
                        <input type="text" class="form-control" id="user-pw" placeholder="패스워드">
                        <label for="user-pw" class="sr-only">패스워드</label>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-lg btn-red">로그인</a>
                                <a href="#" class="btn btn-sm btn-gray">회원가입</a>
                                <a href="#" class="btn btn-sm btn-gray">ID/PW 찾기</a>
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
