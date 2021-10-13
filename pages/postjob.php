<?php
session_start();
ini_set('display_errors',1);
include('../includes/config.php');

require_once '../includes/config.php';

if (isset ($_POST [ 'postjob'])) {

	$cat = clean($_POST['category']);
	$des = clean ($_POST ['description']);
	$loc = clean ($_POST ['location']);
	$pay = clean ($_POST ['payment']);
	$mail = $_SESSION['login'];

	$sql = "INSERT INTO job (category,description,location, payment,clientemail) VALUES (:cat,:des,:loc,:pay,:mail)";
	$query = $conn ->prepare ($sql);

			$query-> bindParam (':cat',$cat);
			$query-> bindParam (':des',$des);
			$query-> bindParam (':loc',$loc);
			$query-> bindParam (':pay',$pay);
			$query-> bindParam (':mail',$mail);

			$query-> execute ();

			echo " <script>alert('Job Posted Successfully');</script>";

}
			function clean($userInput){

					$userInput = trim ($userInput);
					$userInput = stripslashes ( $userInput);
					$userInput = htmlspecialchars ( $userInput );

					return $userInput;
			}

			$conn = null;


?>
<!DOCTYPE html>
<html>
<head>
	<title>Ujenzi Kenya Post Job</title>
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
		height: 90vw;
	}
	#form span{
		font-family: verdana;
		font-size: 1.7em;
		font-weight: 2px;
		margin-bottom: 5vw;
	}

	#form fieldset{
		margin-top: 5vw;
		border: none;
		border-top: 2px solid #808000;
	}
	#form fieldset legend{
		margin-left: 10vw;
		font-weight: bold;
		color: #F87217;
	}
	#form .form-group{
		padding: 2.5vw;
	}
	#form input{
		width: 40vw;
		height: 3vw;
		margin: 00.2vw;
		text-indent: 10%;
	}
	label{
		float: left;
		width: 18vw;
		line-height: 3.5vw;
	}
	footer{
		top: 70vw;
	}
</style>

</head>
<body >
<div class = "container-fluid">
	<header>
	<span id="logo"><img src="../logo/logo3.png"></span><span id="brand">UJENZI KENYA</span>
	<nav>
		<ul>
			<li><a class="active" href="client.php">Home</a></li>
			<li><a href="../includes/logout.php">Sign out</a></li>
			<li style="border: none;"><a href="#contact">Contact us</a></li>
		</ul>
	</nav>
	</header>
<section id="form">
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <span>Enter Job Details</span>
    <br>

    	<fieldset>
	          <legend>Details</legend>
	          <div class="form-group">
	          <label for="Category"><b>Category</b></label>
	          <input type="text" placeholder="Plumbing" name="category" required>
	          </div>
	          <div class="form-group">
	          <label for="Description"><b>Description</b></label>
	          <input type="text" placeholder="Broken tap" name="description" required>
	          </div>
	          <div class="form-group">
	          <label for="location"><b>Location</b></label>
	          <input type="text" placeholder="Rongai-tuskys" name="location" required>
	          </div>
	           <div class="form-group">
	          <label for="payment"><b>Payment in KSH</b></label>
	          <input type="number" placeholder="300" name="payment" required>
	          </div>
        </fieldset><br>

			<div class="form-group">
			<button style="width: 15vw;height: 4vw;margin-left:5vw;background-color: #DAA520;
				font-family: tahoma;font-size: 0.8em;padding: 1vw;" type="submit" class="signupbtn"
				name="postjob">Post</button>
			<button  style="width: 15vw;height: 4vw;background-color: #E55B3C; font-family: tahoma;
			font-size: 0.8em;padding: 1vw;margin-left: 5vw;" type="button" class="cancelbtn">Cancel</button>
	    	</div>
	    </div>
</form>
</section>
<?php include('../includes/footer.php');?>
</div>
</body>
</html>
