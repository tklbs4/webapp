<?php 
    session_start();
    session_destroy();
    header("Location: website_example.php")
?>