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
		top: 185vw;
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
			<li><a href="#h_signup">Sign Up</a></li>
			<li style="border: none;"><a href="#contact">Contact us</a></li>
		</ul>
	</nav>
	</header>
<section id="form">
   <form action="sign_up.php" role="sign_up" id="sign_up">
    <span>Fill the form below to sign up with Ujenzi.</span>
    <br>
	    <fieldset>
			<legend> Company</legend><br>
			<div class="form-group">
			<label for="companyname"><b>Company Name</b></label>
			<input type="text" placeholder="Arie"  name="c_name" required="required">
			</div>
			<div class="form-group">
			<label for="Registration"><b>NCA Registration Number</b></label>
			<input type="text" placeholder="36654305" name="reg_no" required>
			</div>

	    </fieldset>

    	<fieldset>
	          <legend>Location</legend>
	          <div class="form-group">
	          <label for="country"><b>Country</b></label>
	          <input type="text" placeholder="Kenya" name="country" required>
	          </div>
	          <div class="form-group">
	          <label for="county"><b>County</b></label>
	          <input type="text" placeholder="Nairobi" name="county" required>
	          </div>
	          <div class="form-group">
	          <label for="Region"><b>Town</b></label>
	          <input type="text" placeholder="westlands" name="region" required>
	          </div>
	           <div class="form-group">
	          <label for="physical address"><b>Physical address</b></label>
	          <input type="text" placeholder="Moi Avenue" name="p_add" required>
	          </div>
        </fieldset><br>

  	    <fieldset>
	          <legend>Contacts</legend>
	          <div class="form-group">
	          <label for="email"><b>Email address 1</b></label>
	          <input type="text" placeholder="ariebello@yahoo.com" name="email" required>
	          </div>
	           <div class="form-group">
	          <label for="email"><b>Email address 2</b></label>
	          <input type="text" placeholder="ariebello@yahoo.com" name="email2">
	          </div>
	          <div class="form-group">
	          <label for="phone"><b>Telephone Number 1</b></label>
	          <input type="text" placeholder="enter telephone" name="tel_No" required>
	          </div>
	          <div class="form-group">
	          <label for="phone"><b>Telephone Number 2</b></label>
	          <input type="text" placeholder="0708023074" name="tel_2" required>
	          </div>

	    </fieldset><br>

	    <fieldset>
	          <legend>Account Details</legend>
	          <div class="form-group">
	          <label for="password"><b>Password</b></label><br>
	          <input type="password" placeholder="Enter Password" name="pwd" min-length = "8" required>
	          </div>
	          <div class="form-group">
	          <label for="pwd-repeat"><b>Repeat Password</b></label>
	          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
	          </div>
   		</fieldset>

	    <div>
			<p style="margin-left:5vw;margin-top:3vw;">By creating an account you agree to our <a href="#" style="text-decoration: none;">Terms & Privacy policies</a></p><br>

			<div class="form-group">
			<button style="width: 15vw;height: 4vw;margin-left:5vw;background-color: #DAA520; font-family: tahoma;font-size: 0.8em;padding: 1vw;" type="submit" class="signupbtn" href="login.html">Sign Up</button>
			<button  style="width: 15vw;height: 4vw;background-color: #E55B3C; font-family: tahoma;font-size: 0.8em;padding: 1vw;margin-left: 5vw;" type="button" class="cancelbtn">Cancel</button>
	    	</div>
	    </div>
</form>
</section>
<?php include('../includes/footer.php');?>
</div>
</body>
</html>
