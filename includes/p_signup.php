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
			$gcNo = clean ($_POST ['gcNo']);
			$country = clean ($_POST ['country']);
			$county = clean ($_POST ['county']);
			$town = clean ($_POST ['town']);
			$prof = clean ($_POST ['prof']);
			$ncaNo = clean ($_POST ['ncaNo']);
			$email = clean ($_POST ['email']);
			$phone = clean ($_POST ['phone']);
			$pwd = clean (md5($_POST ['pwd']));
			$pwdCon = clean (md5($_POST ['pwd-repeat']));



			$query = $conn ->prepare ("SELECT natID,gcNo,ncaNo,email,phone FROM worker WHERE natID = :natID OR gcNo = :gcNo OR ncaNo = :ncaNo
																					OR email = :email OR phone = :phone; ");

						$query-> bindParam (":natID",$natID);
						$query-> bindParam (":gcNo",$gcNo);
						$query-> bindParam (":ncaNo",$ncaNo);
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

						$stmt = $conn-> prepare ( " INSERT INTO worker( fname, lname, dob, natID, gcNo, country, county, town, prof, ncaNo, email, phone, pwd)
																				 VALUES( :fname, :lname, :dob, :natID, :gcNo, :country, :county, :town, :prof, :ncaNo, :email, :phone, :pwd)
																		");
										$stmt-> bindParam (":fname",$fname);
										$stmt-> bindParam (":lname",$lname);
										$stmt-> bindParam (":dob",$dob);
										$stmt-> bindParam (":natID",$natID);
										$stmt-> bindParam (":gcNo",$gcNo);
										$stmt-> bindParam (":country",$country);
										$stmt-> bindParam (":county",$county);
										$stmt-> bindParam (":town",$town);
										$stmt-> bindParam (":prof",$prof);
										$stmt-> bindParam (":ncaNo",$ncaNo);
										$stmt-> bindParam (":email",$email);
										$stmt-> bindParam (":phone",$phone);
										$stmt-> bindParam (":pwd",$pwd);

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
