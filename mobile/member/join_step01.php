<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/member.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="sub member">
    <section class="join-step01">
        <div class="container">
            <h3>회원가입</h3>
            <div class="step">
                <ul class="step-menu">
                    <li class="active">
                        <a href="#">step1 약관동의</a>
                    </li>
                    <li>
                        <a href="#">step2 정보입력</a>
                    </li>
                    <li>
                        <a href="#">step3 가입완료</a>
                    </li>
                </ul>
            </div>
            <div class="section-content">
                <form>
                    <h4>이용약관</h4>
                    <div class="terms">
                        이용약관 내용
                    </div>
                    <h4>개인정보취급방침</h4>
                    <div class="terms">
                        개인정보취급방침 내용
                    </div>
                    <p class="check"><input type="checkbox">GD홈라이스 이용약관에 동의합니다.</p>
                    <p class="check"><input type="checkbox">GD홈라이스의 개인정보 수집, 이용에 관한 사항에 동의합니다.</p>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-xs btn-red" role="button">다음</a>
                            <a href="#" class="btn btn-xs btn-default" role="button">취소</a>
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
