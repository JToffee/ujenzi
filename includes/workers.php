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
        position: absolute;
        top: 0;
        height: 65vw;
      }
      #pinfo{
        margin-top: 5vw;
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
  <div id="pinfo">
  <?php

  if(isset($_POST['masons'])){
  //  $search = clean($_POST['search']);
    $sql = " SELECT * FROM user WHERE proffesion = 'Mason' ";

  }
    elseif (isset($_POST['plumbers'])) {
          $sql = " SELECT * FROM user WHERE proffesion = 'plumber' ";
    }
    elseif (isset($_POST['electricians'])) {
          $sql = " SELECT * FROM user WHERE proffesion = 'electrician' ";
    }  elseif (isset($_POST['painters'])) {
          $sql = " SELECT * FROM user WHERE proffesion = 'painter' ";
      }  elseif (isset($_POST['welders'])) {
              $sql = " SELECT * FROM user WHERE proffesion = 'welder' ";
        }  elseif (isset($_POST['roofer'])) {
                $sql = " SELECT * FROM user WHERE proffesion = 'roofer' ";
          }
    $query = $conn -> prepare($sql);
      $query -> execute();
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
		            <a href ="../pages/user_profile.php"  style=";margin-top:0.2vw; padding:1vw 2.9vw 1vw 3vw; color:#fff; text-decoration:none; background-color:olive ">View</a><br><br>
								<a href ="../pages/getworker.php" style="padding:1vw 1vw 1vw 1vw; color:#fff; text-decoration:none; background-color:grey ">Get worker</a>
		    			</form>
		        </div>';
					}
			//$_SESSION['user'] = $emails;
    }
    else {
      echo '<p style="margin-top:15vw; margin-left: 10vw; font-size:1em; color:grey; font-style: italic;">No match found</p>';
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
