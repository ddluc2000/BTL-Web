<?php
    session_start();
    define('SITEURL','http://localhost/Demo');
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB_NAME','vinuni');
    define('PORT','3306');
    $conn = mysqli_connect(HOST,USER,PASS,DB_NAME);
    if(!$conn){
        die("Không thể kết nối: ".mysqli_connect_error());
    }
?>