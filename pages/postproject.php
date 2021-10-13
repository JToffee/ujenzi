<?php
session_start();
ini_set('display_errors',1);
include('../includes/config.php');
 ?><!DOCTYPE html>
<html>
<head>
	<title>Ujenzi Kenya</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="Contractors and members get skilled construction workers and interrior designers.">
	<meta name="keywords" content="construction,contractor,ujenzi,home,interior designer,region,member,rent,house,appartment,construction worker,build">
	<meta name="author" content="Sheila Jerotich">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/proff.css">

	<link rel="stylesheet" type="text/css" href="../slider/auto.css">
	<script src="../slider/auto.js"></script>
</head>
<body>
<div class = "container-fluid">
<header>
<span id="logo"><img src="../logo/logo3.png"></span><span id="brand">UJENZI KENYA</span>
<nav>
	<ul>
		<li><a class="active" href="clientprofile.php">Profile</a></li>
		<li><a href="#">Post job</a></li>
		<li><a href="../includes/logout.php">Sign Out</a></li>
		<li style="border: none;"><a href="#contact">Contact us</a></li>
	</ul>
	<span><?php echo htmlentities($_SESSION['login']);?></span>
</nav>
</header>
