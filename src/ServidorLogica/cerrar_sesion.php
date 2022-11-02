<?php
    session_start();
    session_destroy();
    header("location: ../ux/index.php");
?>
