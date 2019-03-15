<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/View/php/template/Header.php';
?>
<link rel="stylesheet" href="../../css/AdminStyle.css">

<body>
    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/View/php/template/NavBar.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/View/php/template/LeftMenu.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/linkedOut/Controller/GetUserInfos.php';
    ?>
    <div class="adminContent">
        <?php echo getUsersInfos(); ?>
    </div>
</body>