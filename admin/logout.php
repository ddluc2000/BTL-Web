<?php 
    include('config/db.php');
    session_destroy(); 
    header('location:'.SITEURL);
?>