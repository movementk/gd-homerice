<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub" tabindex="-1">
       <div class="sub-visual">
           <div class="contanier">
               <h2>
                   <small>신개념 맞춤요리 배달 서비스 GD홈라이스</small>
                   회사소개
               </h2>
               <p>DG Home Rice Food Delivery Service</p>
           </div>
       </div>

        <!-- sub content -->
        <div class="container">

            <div style="margin: 30px 0;">
                <ul class="nav nav-pills nav-justified" role="tablist">
                    <li role="presentation" class="active"><a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">공지사항</a></li>
                    <li role="presentation"><a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">Q&amp;A</a></li>
                    <li role="presentation"><a href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">사용후기</a></li>
                    <li role="presentation"><a href="#tab-4" aria-controls="tab-4" role="tab" data-toggle="tab">갤러리</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab-1">nav-tab-1</div>
                    <div role="tabpanel" class="tab-pane" id="tab-2">nav-tab-2</div>
                    <div role="tabpanel" class="tab-pane" id="tab-3">nav-tab-3</div>
                    <div role="tabpanel" class="tab-pane" id="tab-4">nav-tab-4</div>
                </div>
            </div>

            <div class="table-wrap" style="margin: 30px 0;">
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
                            <th>subject</th>
                            <th>subject</th>
                            <th>subject</th>
                            <th>subject</th>
                            <th>subject</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>content</td>
                            <td>content</td>
                            <td>content</td>
                            <td>content</td>
                            <td>content</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div style="margin: 30px 0;">
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-sm btn-default" role="button">비우기</a>
                        <a href="#" class="btn btn-sm btn-red" role="button">주문하기</a>
                    </p>
                    <p style="margin: 30px 0;">
                        <a href="#" class="btn btn-icon btn-red" role="button">구매하기</a>
                        <a href="#" class="btn btn-icon btn-charcoal" role="button">구매하기</a>
                        <a href="#" class="btn btn-icon btn-gray" role="button">위시리스트</a>
                    </p>
                </div>
            </div>

            <div style="margin: 30px 0;">
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
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
