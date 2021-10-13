<!DOCTYPE html>
<html>
<head>
	<title>Ujenzi Kenya Sign in</title>
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
	<link rel="stylesheet" type="text/css" href="../slider/auto.css">
	<script src="../slider/auto.js"></script>

	<style>
	#form{
		padding-bottom: 0;
		position: absolute;
		width: 90vw;
		top: 20vw;
		left: 5vw;
		height: 50vw;
	}
	#form span{
		font-family: verdana;
		font-size: 2em;
		font-weight: 2px;
		margin-bottom: 5vw;
	}

	#form .form-group{
		margin: 5vw;
	}
	#form .form-control{
		width: 40vw;
		height: 3vw;
	}
	label{
		float: left;
		width: 10vw;
		line-height: 3.5vw;
	}
	footer{
		top: 60vw;
	}
</style>

</head>
<body >
<div class = "container-fluid">
	<header>
	<span id="logo"><img src="../logo/logo3.png"></span><span id="brand">UJENZI KENYA</span>
	<nav>
		<ul>
			<li><a class="active" href="index.php">Home</a></li>
			<li><a href="index.php">Sign Up</a></li>
			<li style="border: none;"><a href="#contact">Contact us</a></li>
		</ul>
	</nav>
	</header>

<form role="form" id="form" method="post" action="../includes/login.php">
	<span>Please fill the form to sign in</span><br>
	<div class="form-group">
		<label for="email">E-mail</label>
		<input type="email" class="form-control" name="email" placeholder="Enter email or mobile number" required="required">
	</div><br>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password" placeholder="Enter password" required="required">
	</div><br>
	<!--<div class="form-group" style="margin-top: 4vw;">
	<label style="margin-left: 11vw; ">Remember me</label><input class="form-control" style="width: 5vw;border-radius: 1.5vw;"
	 				type="checkbox" >
	</div>--><br>
	<div class="form-group" style="margin-left: 15.5vw;margin-top: 3vw;">
	<button type="submit" class="btn" name="login" style="font-family: sans-serif;font-size: 1.2em;color: #fff; width: 20vw;height: 3.5vw;
			border-radius: 1vw;background-color: #CC6600">Sign In</button>
	</div>
</form>
<?php include '../includes/footer.php'; ?>
</div>
</body>
</html>
