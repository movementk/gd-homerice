<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub community" tabindex="-1">
        <!-- sub content -->
        <section class="news-info review">
            <div class="container">
                <h3>커뮤니티</h3>
                <div class="news">
                    <ul class="news-list">
                        <li><a href="#">공지사항</a></li>
                        <li><a href="#">Q&amp;A</a></li>
                        <li class="active"><a href="/community/review.php">사용후기</a></li>
                        <li><a href="/community/gallery.php">갤러리</a></li>
                    </ul>
                </div>
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width:70px;">
                            <col style="width:800px;">
                            <col style="width:100px;">
                            <col style="width:100px;">
                            <col style="width:100px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>제목</th>
                                <th>평점</th>
                                <th>작성자</th>
                                <th>작성일</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10</td>
                                <td><a href="#">구매후기~~</a></td>
                                <td>
                                    <p>
                                        <img src="/assets/images/community/stra_img.png" alt="평점 1점">
                                        <img src="/assets/images/community/stra_img.png" alt="평점 2점">
                                        <img src="/assets/images/community/stra_img.png" alt="평점 3점">
                                        <img src="/assets/images/community/stra_img.png" alt="평점 4점">
                                        <img src="/assets/images/community/stra_img.png" alt="평점 5점">
                                    </p>
                                </td>
                                <td>김유림</td>
                                <td>2016-08-01</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td><a href="#">좋아요~ 맛있어요 다음에 또주문할게요~</a></td>
                                <td></td>
                                <td>김유림</td>
                                <td>2016-08-01</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><a href="#">생각보다 더 맛있었어요~ 괜찮습니다</a></td>
                                <td></td>
                                <td>김유림</td>
                                <td>2016-08-01</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><a href="#">가격대비 훌륭!!</a></td>
                                <td></td>
                                <td>김유림</td>
                                <td>2016-08-01</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><a href="#">구매후기~~</a></td>
                                <td></td>
                                <td>김유림</td>
                                <td>2016-08-01</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><a href="#">좋아요~ 맛있어요 다음에 또주문할게요~</a></td>
                                <td></td>
                                <td>김유림</td>
                                <td>2016-08-01</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a href="#">생각보다 더 맛있었어요~ 괜찮습니다</a></td>
                                <td></td>
                                <td>김유림</td>
                                <td>2016-08-01</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="#">가격대비 훌륭!!</a></td>
                                <td></td>
                                <td>김유림</td>
                                <td>2016-08-01</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="#">구매후기~~</a></td>
                                <td></td>
                                <td>김유림</td>
                                <td>2016-08-01</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="#">빠른배송 감솨</a></td>
                                <td></td>
                                <td>김유림</td>
                                <td>2016-08-01</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-red" role="button">글쓰기</a>
                        </p>
                    </div>
                    <nav class="paging" aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&lsaquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&rsaquo;</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
