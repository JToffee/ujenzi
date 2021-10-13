<?php
session_start();
ini_set('display_errors',1);
include('../includes/config.php');
?>
<!DOCTYPE html>
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
	<style>
  #notifications {

    position: absolute;
    top: 18vw;
    margin:0;
    margin-left: 5vw;
    height:50vw;
    overflow: scroll;
    width: 95vw;
  }
  #notifications input{
    border: none;

  }
  #notifications .row{
    height: auto;
    padding: 2vw;
  }
  #notifications #user{
    float: left;
    min-height: 8vw;
		width: 20vw;
		margin-bottom: 1vw;

  }

  #notifications #message{
    float: left;
    padding-left: 3vw;
    border-left: solid 0.3px grey;
    min-height: 8vw;
		width: 60vw;
		margin-bottom: 1vw;

  }
  #notifications button{
    margin-top: 0.5vw;
    width: 8vw;
  }
  #notifications span{
    float: left;
    font-size: 0.8em;
    color: grey;
  }
	nav span {
		color: #fff;
		line-height: 5vw;
		margin-left: 20vw;
		opacity: 0.8;
		font-style: italic;
	}
  footer{
    top: 70vw;
  }
	</style>

</head>
<body>
<div class = "container-fluid">
<header>
<span id="logo"><img src="../logo/logo3.png"></span><span id="brand">UJENZI KENYA</span>
<nav>
	<ul>
		<li><a class="active" href="client.php">Home</a></li>
		<li><a class="active" href="workerprofile.php">Profile</a></li>
		<li><a href="../includes/logout.php">Sign Out</a></li>
		<li style="border: none;"><a href="#contact">Contact us</a></li>
	</ul>
	<span><?php echo htmlentities($_SESSION['login']);?></span>
</nav>
</header>
<section id="notifications">
  <div class ="row">
    <?php
      $sql = " SELECT * FROM applications WHERE clientemail = ? ";
      $query = $conn->prepare($sql);
        $query -> execute(array($_SESSION['login']));
        $count = $query->rowCount();
        if ($count>0) {

            while ($row = $query -> fetch()) {
              $id = $row ['JobID'];
              $_SESSION["user"] = $row ['workeremail'];
						//	$_SESSION ['JID'] = $row['jobID'];
              $stmt = $conn-> prepare("SELECT * FROM user WHERE email = ?");
                $stmt -> execute(array($row['workeremail']));
                $result = $stmt ->fetch();
								$wemail = $row['workeremail'];
              $stmt1 = $conn -> prepare("SELECT * FROM job WHERE JobID = ? ");
                $stmt1 -> execute(array($id));
                $job = $stmt1 -> fetch() ;
              echo '<form method="post" action = "'.$_SERVER["PHP_SELF"].'">
							<div id="user" style = "">
                <input type = "text" name = "fname" value="'.$result['firstname'].'" style="width:5vw;">
                <input type = "text" name = "lname" value="'.$result['lastname'].'" style="width:5vw;"><br>
                <input type="text" name="phone" value="'.$result['mobileno'].'">
                <a href = "user_profile.php" style="color: orange; font-size:0.8em; text-decoration: none;"> View </a>

              </div>
              </form>

              <div id="message">
							<form method = "post" action = "'.$_SERVER["PHP_SELF"].'">
              <span>Category</span>  <input type = "text" name = "details"  value = "'.$job['category'].'">
              <span>Description</span><input type = "text" name = "details"  value = "'.$job['description'].'">
              <span>Location</span><input type = "text" name = "details"  value = "'.$job['location'].'">
              <span>Payment</span><input type = "text" name = "details"  value = "'.$job['payment'].'"><br><br>
							  <input type = "hidden" name = "jid"  value = "'.$job['JobID'].'">
              <button type="submit" name="accept"> Accept </button> <button name="reject" type = "submit"> Reject </button><br><br>

                </form>
								</div>';
            }

						if(isset($_POST['accept'])){
						//$wemail = $_POST ['cemail'];
							$id = $_POST ['jid'];

							/*$stmt0 = $conn->prepare("SELECT workeremail, JobID WHERE workeremail = ? AND JobID = ?");
								$stmt0 -> $conn ->execute( array($id,$_SESSION['login']));
								$stmt0 -> fetch();

							$count = $stmt0-> rowCount();
							if ($count<1){*/
								$sql = "INSERT INTO confirmedjob (JobID,workeremail,clientemail) VALUES (?,?,?)";
								$query = $conn->prepare($sql);
									$query -> execute (array($id,$wemail ,$_SESSION['login']));

						}
					}else {
        echo '<p style="margin-top:5vw; margin-left: 10vw; font-size:1em; color:grey; font-style: italic;">No notifications yet</p>';
      }
     ?>
  </div>

</section>
<?php include "../includes/footer.php"; ?>
</body>
</html>
