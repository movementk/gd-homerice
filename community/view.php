<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub community" tabindex="-1">
        <!-- sub content -->
        <section class="news-info view">
            <div class="container">
                <h3>커뮤니티</h3>
                <div class="news">
                    <ul class="news-list">
                        <li><a href="#">공지사항</a></li>
                        <li><a href="#">Q&amp;A</a></li>
                        <li class="active"><a href="/community/review.php">사용후기</a></li>
                        <li><a href="#">갤러리</a></li>
                    </ul>
                </div>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width:870px;">
                            <col style="width:100px;">
                            <col style="width:100px;">
                            <col style="width:100px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>후기 남깁니다~~~</th>
                                <th >
                                    <p>
                                        <img src="/assets/images/community/stra_img.png" alt="평점 1점">
                                        <img src="/assets/images/community/stra_img.png" alt="평점 2점">
                                        <img src="/assets/images/community/stra_img.png" alt="평점 3점">
                                        <img src="/assets/images/community/stra_img.png" alt="평점 4점">
                                        <img src="/assets/images/community/stra_img.png" alt="평점 5점">
                                    </p>
                                </th>
                                <th>김유림</th>
                                <th>2016-08-01</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4">
                                    <div class="concon">
                                        좋아요 맛있어요~ 다음에도 구매할게요~~~~<br>
                                        감사합니다~~~~
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-red" role="button">목록</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
