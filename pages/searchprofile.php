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
      .sidebar{
        width: 25vw;
        top: 0;
        height: 65vw;
        position: absolute;
      }
      #pinfo{
        margin-top: 15vw;
        margin-left: 3vw;
      }
      #user{
        margin-top: 3vw;
        margin-left: 3vw;
        height:9vw;
        border: solid 1px grey;
        padding:0.5vw;
        width:35vw;
      }
      #user .form-group{
        float: left;

			}
			#user input{
				width: 25vw;
				height: 3vw;
				font-size: 1em;
        border: none;
        text-indent: 10%
			}
      footer{
        top: 70vw;
      }
    </style>
</head>
<body>
  <div class="sidebar" style="background-color:#FF8040;"></div>
  <div style="width:50vw; position:absolute; top:0; left:25vw; overflow:scroll; padding-bottom: 5vw;">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <input type="text" placeholder="search" name="search" style="float:left; margin-top:6vw; width:30vw;height: 3.5vw;text-indent: 15%
            ; margin-left:8vw; border-radius:3vw; border:solid 1.5px grey;">
    <button style="float:left; margin-top:6.5vw;border:none; transform: rotate(30deg); margin-left:1vw;background-color:#fff;" type="submit" name = "searchbtn">
      <img src="../images/download.png" style="width:2.2vw;height:2.2vw;">
    </button>
  </form>
  <div id="pinfo">
  <?php

  if(isset($_POST['searchbtn'])){

    $search = clean($_POST['search']);

    $sql = " SELECT * FROM user WHERE firstname LIKE ? OR lastname LIKE ? OR town LIKE ? OR proffesion LIKE ? ";
    //WHERE firstname LIKE ? OR lastname LIKE ? OR town LIKE ? OR proffesion LIKE ? ";
    $query = $conn -> prepare($sql);
      $query -> execute(array($search,$search,$search,$search));
		//	$row = $query -> fetch();
    $count = $query -> rowCount();

 		$emails = array();

    if ($count>0) {

	      while ($row = $query -> fetch()) {
					$emails[] = $row['email'];
					$_SESSION["user"] = $row['email'];
	      //  $email = $_SESSION['user'];
						//$_SESSION['user'] = $emails[$i];
		        echo ' <div id = "user">
		          <form>
		            <div class="form-group">
		              <input style= "float:left; width:15vw; margin-right:0;" type = "text" name = "fname" value = "'.$row['firstname'].'">
		      			  <input type = "text" name = "lname" style="float:left; width:15vw; margin-left:0; text-indent: 0;" value = "'.$row['lastname'].'" >
		            </div>
		    				<div class="form-group">
		    				<input type = "text" name = "proff" value = "'.$row['proffesion'].'" >
		    				</div>
		    				<div class="form-group">
		    				<input type = "text" name = "Location" value = "'.$row['town'].'" >
		    				</div>
		            <a href ="user_profile.php">View</a>
		    			</form>
		        </div>';
					}
			//$_SESSION['user'] = $emails;
    }
    else {
      echo '<p style="margin-top:15vw; margin-left: 10vw; font-size:1em; color:grey; font-style: italic;">No match found</p>';
    }
  }
  function clean($userInput){

      $userInput = trim ($userInput);
      $userInput = stripslashes ( $userInput);
      $userInput = htmlspecialchars ( $userInput );

      return $userInput;
  }
   ?>
  </div>
</div>
  <div class="sidebar" style="background-color:#3D3C3A;right:0;" ></div>
  <?php include "../includes/footer.php" ?>
</body>
</html>
