<?php
session_start();
ini_set('display_errors',1);
include('../includes/config.php');

$sql = 'SELECT * FROM user WHERE email = ? ';
$stmt = $conn->prepare($sql);
$stmt-> execute(array($_SESSION['login']));
$row = $stmt->fetch();
$work  = $row['proffesion'];
$loc  = $row['town'];
$login  = $row['email'];
$phone2  = $row['mobileno'];
if(isset($_POST['update'])){

	$proff =  clean($_POST['proff']);
	$location = clean($_POST['location']);
	$email = clean($_POST['email']);
	$phone = clean($_POST['mobile']);

	$sql = "SELECT email,mobileno FROM user WHERE email = :email OR mobileno = :phone ";
	$stmt = $conn->prepare($sql);
			$stmt->bindParam(':email', $email, PDO::PARAM_STR);
			$stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
			$stmt->execute();
			$result = $stmt->fetch();
			$mail = $result ['email'];
			$count = $stmt->rowCount();

if(count == 1 && $mail !== $email){
	echo "Email or phone number already exists";
}
else
{
	$sql = 'UPDATE user SET proffesion = :proff,town = :town, email = :email, mobileno = :phone WHERE email = :login';
	$query = $conn->prepare($sql);
		$query ->execute(array(":proff"=> $proff,":town"=>$location,":email"=>$email,":phone"=>$phone,":login"=>$_SESSION['login']));
		$_SESSION['login'] = $email;
		echo "<script>alert('Your profile has been updated')</script>";
		header("Location: proff.php");
}

		}
	function clean($userInput){

			$userInput = trim ($userInput);
			$userInput = stripslashes ( $userInput);
			$userInput = htmlspecialchars ( $userInput );

			return $userInput;
	}
?>
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
			  height: 44vw;
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
				font-size: 0.7em;
			}
			#ppic input{
				width: 15vw;
				margin: 0;
				height: 3.5vw;
        border: none;
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
				top: 59vw;
			}
      nav span {
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
	<span id="logo"><img src="../logo/logo3.png"></span><span id="brand">UJENZI KENYA</span>
	<nav>
	<ul>
			<li><a class="active" href="proff.php">Home</a></li>
			<li><a href="../includes/logout.php">Sign Out</a></li>
			<li><a href="workerprofile.php">Profile</a></li>
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
			<form method="post" onsubmit="return checkValue()" name ="p_update" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div class="form-group">
				<label><b>Proffesion :</b></label>
				<input type = "text" name = "proff" id="proff" placeholder = "<?php echo $row['proffesion'] ;?>"
								value = "" required>
				</div>
				<div class="form-group">
				<label><b>Location :</b></label>
				<input type = "text" name = "location" id="location" placeholder="<?php echo $row['town'] ;?>" value = "" required>
				</div>
				<div class="form-group">
				<label><b>Email :</b></label>
				<input type = "email" name = "email" id="email" placeholder="<?php echo $row['email'] ;?>" value = "" required>
				</div>
				<div class="form-group">
				<label><b>Mobile Number :</b></label>
				<input type="text" name = "mobile" id="mobile" placeholder="<?php echo $row['mobileno'] ;?>" value = "" required>
				</div>
        <div class="form-group">
          <button style="width: 15vw;height: 4vw;margin-left:13vw;margin-top:3vw;background-color: #DAA520; font-family:
    			tahoma;font-size: 0.8em;padding: 1vw;" type="submit" name="update">Update</button>
				</div>
			</form>
		</div>
	</section>
<?php include "../includes/footer.php" ?>
<script type="text/javascript">
	function checkValue(){
		var proff = document.forms ["p_update"]["proff"].value;
		if (proff.value == ""){
			proff.value = "<?php echo $work ;?>";
		}
		var location = document.forms ["p_update"]["location"].value;
		if (location.value== ""){
			location.value = "<?php echo $loc ;?>";
		}
		var email = document.forms ["p_update"]["email"].value;
		if (email.value == ""){
			email.value = "<?php echo  $login ;?>";
		}
		var mobile = document.forms ["p_update"]["mobile"] .value;
		if (mobile.value.length == ""){
			mobile.value = "<?php echo $phone2;?>";
		}
	}

</script>
</body>
</html>
