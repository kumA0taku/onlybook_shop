<?php 

    session_start();

    session_destroy();
    header("Location: /onlybook_shop/login/index.php");

?>