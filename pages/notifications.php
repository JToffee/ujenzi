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
		<li><a class="active" href="proff.php">Home</a></li>
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
      $sql = " SELECT * FROM getworker WHERE email = ? ";
      $query = $conn->prepare($sql);
        $query -> execute(array($_SESSION['login']));
        $count = $query->rowCount();
        if ($count>0) {

            while ($row = $query -> fetch()) {
						//	$_SESSION ['JID'] = $row['jobID'];
              $stmt = $conn-> prepare("SELECT * FROM user WHERE email = ?");
                $stmt -> execute(array($row['clientemail']));
                $result = $stmt ->fetch();

              echo '<form method="post" action = "'.$_SERVER["PHP_SELF"].'">
							<div id="user" style = "">
                <input type = "text" name = "fname" value="'.$result['firstname'].'" style="width:5vw;">
                <input type = "text" name = "lname" value="'.$result['lastname'].'" style="width:5vw;"><br>
                <input type="text" name="phone" value="'.$result['mobileno'].'">
              </div>
              <div id="message">
                <input type = "text" name = "details"  value = "'.$row['category'].'">
                <input type = "text" name = "details"  value = "'.$row['description'].'">
                <input type = "text" name = "details"  value = "'.$row['location'].'">
                <input type = "text" name = "details"  value = "'.$row['payment'].'">
                <input type = "text" name = "details"  value = "'.$row['jobdate'].'"><br>
								<input type = "hidden" name = "jid"  value = "'.$row['JobID'].'"><br>
                <button type = "submit" name="confirm"> Take Job
                </button>
							</div>
                </form>';
								if(isset($_POST['confirm'])){
							 	 $sql = "SELECT * FROM getworker";
							 	 $query = $conn -> prepare($sql);
							 	 $query ->execute();
							 	 $row = $query -> fetch();


							 	 $id = $_POST['jid'];


							 	 $sql = "INSERT INTO jobtaken (JobID,category,location,payment,clientemail,workeremail) VALUES (?,?,?,?,?,?)";
							 	 $stmt =$conn -> prepare($sql);
							 		 $stmt -> execute (array($id,$row['category'],$row['location'],$row['payment'],$row['clientemail'],$row['email']));

							  }
       }

	 }else {
        echo '<p style="margin-top:5vw; margin-left: 10vw; font-size:1em; color:grey; font-style: italic;">No notifications yet</p>';
      }
     ?>
  </div>

</section>
<?php include "../includes/footer.php"; ?>
