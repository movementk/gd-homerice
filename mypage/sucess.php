<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub" tabindex="-1">
        <!-- sub content -->
        <section class="mypage sucess">
            <div class="container">
                <h2>주문완료</h2>
                <p class="sucess-txt">고객님의 주문이 정상적으로 완료되었습니다.</p>
                <dl class="inline-dl">
                    <dt>주문번호</dt>
                    <dd>26584254-58423554</dd>
                </dl>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-sm btn-default" role="button">메인으로</a>
                        <a href="#" class="btn btn-sm btn-red" role="button">주문내역확인</a>
                    </p>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
