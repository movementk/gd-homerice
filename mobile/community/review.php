<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/community.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="sub community">
    <div class="container">
        <section class="review">
            <h3>Q&amp;A</h3>
            <div class="search-area">
                <form>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="title">제목</option>
                            <option value="content">내용</option>
                            <option value="username">작성자</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="search-keyword" class="sr-only">검색어</label>
                        <input id="search-keyword" type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </form>
            </div>
            <div class="table-wrap">
                <table class="table table-bordered">
                    <colgroup>
                        <col style="width: 170px;">
                        <col style="width: 65px;">
                        <col style="width: 75px;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>제목</th>
                            <th>작성자</th>
                            <th>작성일</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="subject">
                                <a href="#">구성 문의합니다</a>
                            </td>
                            <td>김주희</td>
                            <td>2016-08-20</td>
                        </tr>
                        <tr>
                            <td class="subject">
                                <a href="#">가격 문의합니다</a>
                            </td>
                            <td>안진희</td>
                            <td>2016-08-20</td>
                        </tr>
                        <tr>
                            <td class="subject">
                                <a href="#">맞춤구매하고 싶은데요....</a>
                            </td>
                            <td>김아람</td>
                            <td>2016-08-20</td>
                        </tr>
                        <tr>
                            <td class="reply">
                                <p>
                                    <img src="/mobile/assets/images/community/re.png" alt="답변">
                                </p>
                                <a href="#">안녕하세요~ 홈라이스입니다.</a>
                            </td>
                            <td>홈라이스</td>
                            <td>2016-08-20</td>
                        </tr>
                        <tr>
                            <td class="subject">
                                <a href="#">배송 문의</a>
                            </td>
                            <td>신아영</td>
                            <td>2016-08-20</td>
                        </tr>
                        <tr>
                            <td class="reply">
                                <p>
                                    <img src="/mobile/assets/images/community/re.png" alt="답변">
                                </p>
                                <a href="#">안녕하세요~ 홈라이스입니다.</a>
                            </td>
                            <td>홈라이스</td>
                            <td>2016-08-20</td>
                        </tr>
                        <tr>
                            <td class="subject">
                                <a href="#">구성 문의합니다.</a>
                            </td>
                            <td>김주희</td>
                            <td>2016-08-20</td>
                        </tr>
                        <tr>
                            <td class="subject">
                                <a href="#">가격 문의합니다</a>
                            </td>
                            <td>안진희</td>
                            <td>2016-08-20</td>
                        </tr>
                        <tr>
                            <td class="subject">
                                <a href="#">맞춤구매하고 싶은데요....</a>
                            </td>
                            <td>김아람</td>
                            <td>2016-08-20</td>
                        </tr>
                        <tr>
                            <td class="subject">
                                <a href="#">구성 문의합니다.</a>
                            </td>
                            <td>김주희</td>
                            <td>2016-08-20</td>
                        </tr>
                        <tr>
                            <td class="subject">
                                <a href="#">가격 문의합니다</a>
                            </td>
                            <td>안진희</td>
                            <td>2016-08-20</td>
                        </tr>
                        <tr>
                            <td class="subject">
                                <a href="#">맞춤구매하고 싶은데요....</a>
                            </td>
                            <td>김아람</td>
                            <td>2016-08-20</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-xs btn-red" role="button">글쓰기</a>
                </p>
            </div>
            <nav class="paging" aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&lt;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&gt;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    </div>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
