<?php
include ('function.php');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$sql = "SELECT * FROM tblusers";
$result = $con->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" />
	<title>Dashboard</title>
</head>
<body>
<header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">DE</span>Digital Marketing</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li class="current"><a href="about.html">ABOUT</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="sherbimet.html">SHERBIMET</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="index.php">Register</a></li>
                    <li><a href="contactus.php">Contact us</a></li>

                </ul>
            </nav>
        </div>
    </header>

	<style>

</style>

<h1 align="center">User Details</h1>

<table id="t01" border = "1" align = "center" style = "line-height:25px;">
<tr>
<th>UserID</th>
<th>FullName</th>
<th>UserName</th>
<th>UserEmail</th>
</tr>