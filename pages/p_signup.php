<!DOCTYPE html>
<html>
<head>
	<title>Ujenzi Kenya Sign up</title>
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
		width: 12vw;
		line-height: 3.5vw;
	}
	footer{
		top: 160vw;
	}
</style>

</head>
<body >
<div class = "container-fluid">
	<header>
	<span id="logo"><img src="../logo/logo3.png"></span><span id="brand">UJENZI KENYA</span>
	<nav>
		<ul>
			<li><a class="active" href="index.html">Home</a></li>
			<li><a href="login.php">Sign in</a></li>
			<li style="border: none;"><a href="#contact">Contact us</a></li>
		</ul>
	</nav>
	</header>
<section id="form">
   <form action = "../includes/signup.php" onsubmit="return validate()" method="post" role="sign_up"name="signup" id="sign_up">
    <span>Fill the form below to sign up with Ujenzi.</span>
    <br>
	    <fieldset>
			<legend>Personal Details</legend><br>
			<div class="form-group">
			<label for="firstname"><b>First Name</b></label>
			<input type="text" placeholder="Arie"  name="fname" required="required">
			</div>
			<div class="form-group">
			<label for="lastname"><b>Last Name</b></label>
			<input type="text" placeholder="Bello" name="lname" required="required">
			</div>
			<div class="form-group">
			<label for="dob"><b>Date of birth</b></label>
			<input type="Date" placeholder="3/5/1999" name="dob" required>
			</div>
			<div class="form-group">
			<label for="ID"><b>ID Number</b></label>
			<input type="number" placeholder="36654305" name="natID" length = "8" required>
			</div>
		<!--	<div class="form-group">
			<label for="good conduct"><b>Certificate of good Conduct Serial Number</b></label><br>
			<input type="text" placeholder="36654305" name="gcNo" required>
		</div> -->

	    </fieldset>

    	<fieldset>
	          <legend>Location</legend>
	      <!--    <div class="form-group">
	          <label for="country"><b>Country</b></label>
	          <input type="text" placeholder="Kenya" name="country" required>
	          </div>
	          <div class="form-group">
	          <label for="county"><b>County</b></label>
	          <input type="text" placeholder="Nakuru" name="county" required>
					</div> -->
	          <div class="form-group">
	          <label for="town"><b>Town</b></label>
	          <input type="text" placeholder="Nairobi" name="town" required>
	          </div>

        </fieldset><br>

        <fieldset>
	          <legend>Work Details</legend>
	          <div class="form-group">
	          <label for="Proffesion"><b>Profession</b></label>
	          <input type="text" placeholder="painter" name="prof" required>
	          </div>
	      <!--    <div class="form-group">
	          <label for="work_no"><b>NCA reg. Number</b></label>
	          <input type="number" placeholder="5677tf" name="ncaNo" required>
					</div> -->
	    </fieldset><br>


	    <fieldset>
	          <legend>Contacts</legend>
	          <div class="form-group">
	          <label for="email"><b>Email address</b></label>
	          <input type="email" placeholder="ariebello@yahoo.com" name="email" required>
	          </div>
	          <div class="form-group">
	          <label for="phone"><b>Phone Number</b></label>
	          <input type="number" placeholder="enter telephone" name="phone" required>
	          </div>

	    </fieldset><br>

	    <fieldset>
	          <legend>Account</legend>
	          <div class="form-group">
	          <label for="password"><b>Password</b></label><br>
	          <input type="password" placeholder="Enter Password" name="pwd" id="pwd" min-length = "8" required>
	          </div>
	          <div class="form-group">
	          <label for="pwd-repeat"><b>Confirm Password</b></label>
	          <input type="password" placeholder="Repeat Password"id="pwd-repeat" name="pwd-repeat" required>
	          </div>
   		</fieldset>
			<input type="hidden" name = "role" value = "worker">

	<!--	<fieldset>
			<legend>Optional</legend><br>
			<div class="form-group">
			<label><b>Recovery Email</b></label>
			 <input type="text" name="email" placeholder="Enter Recovery Email"><br>
			</div>
			<div class="form-group">
			<label><b>Recovery Phone Number</b></label>
			 <input type="text" name="nom" placeholder="Enter Recovery Mobile Number">
			</div>
		</fieldset>-->

	    <div>
			<p style="margin-left:5vw;margin-top:3vw;">By creating an account you agree to our
				<a href="#" style="text-decoration: none;">Terms & Privacy</a></p><br>

			<div class="form-group">
			<button style="width: 15vw;height: 4vw;margin-left:5vw;background-color: #DAA520; font-family:
											tahoma;font-size: 0.8em;padding: 1vw;" type="submit" name="submit" class="signupbtn">Sign Up</button>
			<button  style="width: 15vw;height: 4vw;background-color: #E55B3C; font-family: tahoma;font-size:
											0.8em;padding: 1vw;margin-left: 5vw;" type="button" class="cancelbtn" onclick="window.location.reload();location.href = 'index.php'">Cancel</button>
	    	</div>
	    </div>
</form>
</section>
<script type = "text/javascript">

 <!--Javascript for confirm password-->

		function validate(){

				var a = document.forms ["signup"]["pwd"].value;
				var b = document.forms ["signup"]["pwd-repeat"].value;

			if (a!=b ) {
					alert("	Passwords do not match");
					return false;
		  	}
				else {
					return true;
				}
		 }


 <!--Javascript for check email availabilty-->

	function checkEmail(){
		var a =document.forms ["signup"]["email"] .value;

	}
 </script>
<?php include("../includes/footer.php")?>
</div>
</body>
</html>
