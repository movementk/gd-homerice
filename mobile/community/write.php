<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/assets/css/sub.css" rel="stylesheet">
<link href="/mobile/assets/css/community.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="sub community">
    <div class="container">
        <section class="write">
            <h3>Q&amp;A</h3>
            <div class="table-wrap">
                <table class="table table-bordered">
                    <colgroup>
                        <col style="width: 80px;">
                        <col style="width: 220px;">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th><label for="user-name">이름</label></th>
                            <td>
                                <input type="text" class="form-control" id="user-name">
                            </td>
                        </tr>
                        <tr>
                            <th><label for="user-pw">비밀번호</label></th>
                            <td>
                                <input type="text" class="form-control" id="user-pw">
                            </td>
                        </tr>
                        <tr>
                            <th><label for="user-mail">이메일</label></th>
                            <td>
                                <input type="text" class="form-control" id="user-mail">
                            </td>
                        </tr>
                        <tr>
                            <th><label for="subject">제목</label></th>
                            <td>
                                <input type="text" class="form-control" id="subject">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <textarea></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-xs btn-red" role="button">작성완료</a>
                    <a href="#" class="btn btn-xs btn-default" role="button">취소</a>
                </p>
            </div>
        </section>
    </div>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
