<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub community" tabindex="-1">
        <!-- sub content -->
        <section class="news-info write">
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
                    <form>
                        <table class="table table-bordered">
                            <colgroup>
                                <col style="width:126px;">
                                <col style="width:1044px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th><label for="user-name">이름</label></th>
                                    <td><input type="text" class="form-control" id="user-name"></td>
                                </tr>
                                <tr>
                                    <th><label for="user-pw">비밀번호</label></th>
                                    <td><input type="password" class="form-control" id="user-pw"></td>
                                </tr>
                                <tr>
                                    <th><label for="user-email">이메일</label></th>
                                    <td><input type="email" class="form-control email" id="user-email"></td>
                                </tr>
                                <tr>
                                    <th><label for="subject">제목</label></th>
                                    <td><input type="text" class="form-control subject" id="subject"></td>
                                </tr>
                                <tr>
                                    <th><label for="u-content">내용</label></th>
                                    <td><textarea id="u-content" class="form-control u-content"></textarea></td>
                                </tr>
                                <tr>
                                    <th><label for="file">첨부파일</label></th>
                                    <td><input type="file" class="form-control file" id="file"></td>
                                </tr>
                                <tr>
                                    <th><label for="captcha">자동등록방지</label></th>
                                    <td class="captcha">
                                        <div>captcha</div>
                                        <input type="text" class="form-control" id="captcha">
                                        <p>자동등록방지 숫자를 순서대로입력하세요.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-area">
                            <p>
                                <a href="#" class="btn btn-sm btn-red" role="button">작성완료</a>
                                <a href="#" class="btn btn-sm btn-default" role="button">취소</a>
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
