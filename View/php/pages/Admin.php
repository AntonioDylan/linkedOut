<?php
    include '../template/Header.php';
?>
<body>
    <?php
        include $_SERVER['DOCUMENT_ROOT'].'/linkedOut/View/php/template/NavBar.php';
        include $_SERVER['DOCUMENT_ROOT'].'/linkedOut/View/php/template/LeftMenu.php';
        include $_SERVER['DOCUMENT_ROOT'].'/linkedOut/Controller/GetUserInfos.php';
    
        var_dump(getUsersInfos());

        //echo getUsersInfos();
    ?>
</body>

