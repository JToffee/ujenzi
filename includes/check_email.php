
<?php

  ini_set("display_errors",1);
  ini_set ("display_startup_errors",1);
  error_reporting ("E_ALL");

  require_once 'config.php';

  if(!empty($_POST["emailid"])) {
  	$email= $_POST["emailid"];
  	if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {

  		echo "error : You did not enter a valid email.";
  	}
  }
  	else {

  $stmt = $conn -> prepare ("SELECT email FROM ujenzi WHERE email = ":email" ");
    $stmt-> bindParam (":email",$email);
    $stmt -> execute();
    $result = $stmt -> fetchAll (PDO :: FETCH_OBJ);
    $cnt = 1;

      if ($result.rowCount() > 0)  {

         echo "<span style='color:red'> Email already exists .</span>";
         //echo "<script>$('#submit').prop('disabled',true);</script>";
        } else{

        	echo "<span style='color:green'> Email available for Registration .</span>";
        //  echo "<script>$('#submit').prop('disabled',false);</script>";

        }


    }



?>
