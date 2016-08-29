<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/menu.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main class="sub menu party-menu" tabindex="-1">
       <div class="sub-visual">
           <div class="contanier">
               <h2>
                   <small>생일, 모임, 돌잔치, 캠핑 등 스페셜 푸드가 필요할때,</small>
                   고품격 요리 홈파티 메뉴
               </h2>
               <p>DG Home Rice Food Delivery Service</p>
           </div>
       </div>

        <!-- sub content -->
        <section class="menu-info">
            <div class="container">
                <div class="section-header">
                    <h3>파티메뉴</h3>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/index.php">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="active">파티메뉴</li>
                    </ol>
                    <hr>
                </div>
                <?php require_once($_SERVER['DOCUMENT_ROOT'].'/sub/list_party.php'); ?>
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
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
