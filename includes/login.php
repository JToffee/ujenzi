<?php
session_start();
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require 'config.php';

if(isset($_POST['login'])){

    $email = clean ($_POST ['email']);
    $password = clean (md5($_POST ['password']));

    $sql = "SELECT email FROM user WHERE email = :email ";
    $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    //  $stmt->bindParam(':password',$password,PDO::PARAM_STR);
        $stmt->execute();
    //  $query-> setFetchMode (PDO :: FETCH_ASSOC);
    //  $result = $query->fetchAll(PDO::FETCH_ASSOC);
      //$count = $query->rowCount();

        $result = $stmt->fetch();
        $count = $stmt->rowCount();



        if ($count==1 )  {

          $_SESSION['login']=$_POST['email'];

            $stmt = $conn ->prepare("SELECT role FROM user WHERE email = :email ");
              $stmt->bindParam(':email', $email, PDO::PARAM_STR);
              $stmt ->execute();
              $result = $stmt->fetch(PDO::FETCH_ASSOC);
              $role = $result ['role'];


              switch ($role) {
                case 'worker':
                  header("Location: ../pages/proff.php");
                  break;
                case 'client':
                  header("Location:../pages/client.php");
                  break;
                default:
                  header("Location:../pages/index.php");
                  break;

            }
            exit;
      } else{

	         echo "<script>alert('Invalid Details');</script>";
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
