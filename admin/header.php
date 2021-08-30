<?php
    include("config/db.php");
?>
<!DOCTYPE html>
<html lang="en" style=" overflow-x: hidden !important;">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Administration</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" type="image/ico" href="../icon/logo.ico">
	</head>
	<body>
		<header>
            <div class="head">
                <div class="head_top" id="head_top">
                </div>
                <div class="head_bottom"id="head_bottom" style="box-shadow: black 0px 12px 9px -8px; animation: 0s ease 0s 1 normal none running none;">
                    <div class="head_bottom_left">
                        <a class="logo" href="index.php">
                            <img src="https://vinuni.edu.vn/wp-content/themes/vinuni/assets/images/logo/logo.svg" alt="Logo VinUni" >
                        </a>
                    </div>
                    <div class="head_bottom_right">
                        <ul class="parent">
                            <li class="boder">
                                <a <?php $_SESSION['login']="" ?> href="index.php">Home</a>
                            </li>
                            <li class="boder">
                                <a href="usersManagement.php">Users</a>   
                            </li>
                            <li class="boder">
                                <a href="topicsManagement.php">Topics</a> 
                            </li>
                            <li class="boder">
                                <a href="postsManagement.php">Posts</a> 
                            </li>
                            <li class="boder">
                                <a href="logout.php">Logout</a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        