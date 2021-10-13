<?php
session_start();
ini_set('display_errors',1);
include('../includes/config.php');
?>;
<!DOCTYPE html>
<html>
<head>
	<title>MyProfile</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="Contractors and members get skilled construction workers and interrior designers.">
	<meta name="keywords" content="construction,contractor,ujenzi,home,interior designer,region,member,rent,house,appartment,construction worker,build">
	<meta name="author" content="Sheila Jerotich">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
     <link rel="stylesheet" type="text/css" href="../css/workerprofile.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
		<style>
			#profile {
			  position: absolute;
			  top: 15vw;
				left: 0;
				width: 100vw;
				height: 50vw;
				overflow: hidden;
			}
			#ppic {
			  width: 40vw;
			  height: 42vw;
				margin-left: 0;
			  background-color: #FF8040;
			  float: left;
			  color: inherit;
			}
			#pinfo {
			  width: 50vw;
			  margin-left: 5vw;
			  margin-top: 10vw;
			  float: left
			}

			#profile .form-group{
				padding: 2.5vw;
			}
			#profile input{
				width: 25vw;
				height: 3vw;
				margin: 1vw;
				text-indent: 10%;
				border: none;
				font-size: 1em;
			}
			#ppic input{
				width: 15vw;
				margin: 0;
				height: 3.5vw;
			}
			#profile label{
				float: left;
				width: 12vw;
				line-height: 5vw;
				font-weight: normal;
				font-size: 0.7em;
				color: #808000;
				font-style: italic;
			}
			#profile img {
			  width: 17vw;
			  height: 17vw;
			  margin-top: 5vw;
			  margin-left: 6.5vw;
			  margin-bottom: 3vw;
			}
			footer{
				top: 57vw;
			} nav span {
				color: #fff;
				line-height: 5vw;
				margin-left: 20vw;
				opacity: 0.8;
				font-style: italic;
			}
		</style>
</head>
<body>
	<header>
		<?php
			ini_set('display_errors',1);
			ini_set('display_startup_errors',1);
			error_reporting(E_ALL);
			$query = 'SELECT * FROM user WHERE email = ? ';
			$query = $conn->prepare($query);
			$query-> execute(array($_SESSION['login']));
			$row = $query->fetch();

		 ?>
	<span id="logo"><img src="../logo/logo3.png"></span><span id="brand">UJENZI KENYA</span>
	<nav>
		<ul>
			<li><a class="active" href="client.php">Home</a></li>
			<li><a href="../includes/logout.php">Sign Out</a></li>
			<li><a href="clentedit.php">Edit Profile</a></li>
			<li style="border: none;"><a href="#contact">Contact us</a></li>
		</ul>
		<span><?php echo htmlentities($_SESSION['login']);?></span>
	</nav>
	</header>
	<section id="profile">
		<div id= "ppic">
			<form>
			<img src="../images/bw.jpg">
			<input style= "margin-left:2vw;" type = text name = "fname" value = "<?php echo $row['firstname'] ;?>">
			<input type = text name = "lname" value = "<?php echo $row['lastname'] ;?>" >
		</form>
		</div>
		<div id="pinfo">
			<form>
				<div class="form-group">
				<label><b>Location :</b></label>
				<input type = "text" name = "Location" value = "<?php echo $row['town'] ;?>" >
				</div>
				<div class="form-group">
				<label><b>Email :</b></label>
				<input type = "email" name = "email" value = "<?php echo $row['email'] ;?>">
				</div>
				<div class="form-group">
				<label><b>Mobile Number :</b></label>
				<input type="text" name = "mobile" value = "<?php echo $row['mobileno'] ;?>">
				</div>
			</form>
		</div>
	</section>

<?php include "../includes/footer.php" ?>
</body>
</html>
