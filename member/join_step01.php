<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub community" tabindex="-1">
        <!-- sub content -->
        <section class="member-info step-1">
            <div class="container">
                <h2>회원가입</h2>
                <ul class="step-list">
                    <li class="active">
                        <a href="#">STEP1 약관동의</a>
                    </li>
                    <li>
                        <a href="#">STEP2 약관동의</a>
                    </li>
                    <li>
                        <a href="#">STEP3 약관동의</a>
                    </li>
                </ul>
                <div class="section-content">
                    <form>
                        <div class="terms">
                            <div class="service-terms">
                                <h3>이용약관</h3>
                                <div>
                                    이용약관
                                </div>
                                <input type="checkbox" class="check">
                                <p>GD홈라이스 이용약관에 동의합니다.</p>
                            </div>
                            <div class="privacy">
                                <h3>개인정보취급방침</h3>
                                <div>
                                    개인정보취급방침
                                </div>
                                <input type="checkbox" class="check">
                                <p>GD홈라이스의 개인정보 수집, 이용에 관한 사항에 동의합니다.</p>
                            </div>
                        </div>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-red" role="button">다음</a>
                                <a href="#" class="btn btn-default" role="button">취소</a>
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
