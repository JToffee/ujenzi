<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once ( 'config.php' );
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = "";
    $email = "";
    $message = "";

try{
      $stmt = $conn->prepare ("INSERT INTO contact_form_info(name, email,message) VALUES (:name,:email,:message)");
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':message',$message);

            $name = clean($_POST['name']);
            $email = clean($_POST['email']);
            $message = clean($_POST['message']);
            $stmt ->execute();

          echo "<br>We have received your message ".$name.". We will get back to you within 24 hours";

    }
    catch (PDOException $e)
        {
          echo "Error: ". $e->getMessage();
        }

    }
    function clean ($userInput) {
      $userInput = trim ($userInput);
      $userInput = stripslashes ($userInput);
      $userInput = htmlspecialchars($userInput);

      return $userInput;
    }
    $conn = null;


    /*  if (!$result = $conn -> query ($sql)) {

          die (' There was an error running the query ['. $conn -> error. ']');
        }
        else {
          echo " Thank you ! we will contact you asap";
        }
      }
        else {
          echo "Please fill name and email";
        }


    /*  $receipient = "ujenzi@gmail.com";
      $headers = ' MIME-Version: 1.0 '."\r\n".'Content-type: text/html; charset = utf-8'."\r\n".'From: '.$email."\r\n";

      if(mail($receipient,$email,$message,$headers)){
          echo "<p> Thank you for contacting us, $name. You will et a reply within 24 hours</p>";
        }
        else {
          echo "<p> We are sorry but the mail didn't go through</p>";
        }
*/

// else {
  // echo "<p>Something went wrong</p>";
//}

 ?>
