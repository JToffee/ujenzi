<?php
session_start();
ini_set('display_errors',1);
include('../includes/config.php');

if(isset($_POST['accept'])){
$wemail = $_POST ['cemail'];
  $id = $_POST ['jid'];


    $sql = "INSERT INTO confirmedjob (JobID,workeremail,clientemail) VALUES (?,?,?)";
    $query = $conn->prepare($sql);
      $query -> execute (array($id,$wemail,$_SESSION['login']));


}


?>
