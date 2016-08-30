<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/member.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub community" tabindex="-1">
        <!-- sub content -->
        <section class="member-info login">
            <div class="container">
                <h2>로그인</h2>
                <div class="member-login">
                    <form>
                        <label for="user-id" class="sr-only">아이디</label>
                        <input type="text" class="form-control" id="user-id" placeholder="아이디를 입력하세요">
                        <label for="user-pw" class="sr-only">비밀번호</label>
                        <input type="password" class="form-control" id="user-pw" placeholder="비밀번호를 입력하세요">
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-red" role="button">로그인</a>
                            </p>
                            <p>
                                <a href="#" class="btn btn-gray" role="button">회원가입</a>
                                <a href="#" class="btn btn-gray" role="button">아이디/비밀번호 찾기</a>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="nonmember-search">
                    <form>
                        <h3>비회원 주문조회</h3>
                        <p>메일로 발송해드린 주문번호 및 주문 시 입력하신 비밀번호를 입력해주세요.</p>
                        <label for="order-num" class="sr-only">주문서번호</label>
                        <input type="text" class="form-control" id="order-num" placeholder="주문서 번호를 입력하세요">
                        <label for="nonmember-pw" class="sr-only">비밀번호</label>
                        <input type="password" class="form-control" id="nonmember-pw" placeholder="비밀번호를 입력하세요">
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-gray" role="button">확인</a>
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
