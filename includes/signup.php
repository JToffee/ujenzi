<?php
//include ("check_email.php");
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once 'config.php';
//if (isset ($_POST [ 'submit'])) {

	if ($_SERVER["REQUEST_METHOD"] === "POST"){


			$fname = clean($_POST['fname']);
			$lname = clean ($_POST ['lname']);
			$dob= clean ($_POST ['dob']);
			$natID= clean ($_POST ['natID']);
			$town = clean ($_POST ['town']);
			$prof = clean ($_POST ['prof']);
			$email = clean ($_POST ['email']);
			$phone = clean ($_POST ['phone']);
			$pwd = clean (md5($_POST ['pwd']));
			$pwdCon = clean (md5($_POST ['pwd-repeat']));
      $role = clean ($_POST ['role']);



			$query = $conn ->prepare ("SELECT nat_id,email,mobileno FROM user WHERE nat_id = :natID OR email = :email OR mobileno = :phone; ");

						$query-> bindParam (":natID",$natID);
						$query-> bindParam (":email",$email);
						$query-> bindParam (":phone",$phone);

						$query-> execute ();

						$query -> setFetchMode (PDO :: FETCH_ASSOC);
						$count = $query-> rowCount();

		 if ($count > 0){
			 echo "<br><br>User already registered";

		 }	else {

				 if($pwd == $pwdCon) {

					try {

						$stmt = $conn-> prepare ( " INSERT INTO user( firstname, lastname, dateofbirth, nat_id, town, proffesion, email, mobileno, pwd,role)
																				 VALUES( :fname, :lname, :dob, :natID, :town, :prof, :email, :phone, :pwd,:role)
																		");
										$stmt-> bindParam (":fname",$fname);
										$stmt-> bindParam (":lname",$lname);
										$stmt-> bindParam (":dob",$dob);
										$stmt-> bindParam (":natID",$natID);
										$stmt-> bindParam (":town",$town);
										$stmt-> bindParam (":prof",$prof);
										$stmt-> bindParam (":email",$email);
										$stmt-> bindParam (":phone",$phone);
										$stmt-> bindParam (":pwd",$pwd);
                    $stmt-> bindParam (":role",$role);

										$stmt ->execute();

							  	   header("Location: ../pages/login.php");

//											echo "<br><br>You are successfully registered.<br><a href ="login.php"
	//													style = "padding:3vw;background-color:333333;color:white; ">Login <a/>";

					} catch (Exception $e) {

						echo "Error: " . $e->getMessage() ;
					}
				}	else {
					Echo "Passwords do not match";
				}
		}
}
	function clean($userInput){

			$userInput = trim ($userInput);
			$userInput = stripslashes ( $userInput);
			$userInput = htmlspecialchars ( $userInput );

			return $userInput;
	}

	$conn = null;



 ?>
