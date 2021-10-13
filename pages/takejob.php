<?php
session_start();
ini_set('display_errors',1);
include('../includes/config.php');

if(isset($_POST['confirm'])){
  $sql = "SELECT * FROM getworker";
  $query = $conn -> prepare($sql);
  $query ->execute();
  $row = $query -> fetch();

  //$id = $row['jobID'];

  $sql = "INSERT INTO jobtaken (JobID,category,location,payment,clientemail,workeremail) VALUES (?,?,?,?,?,?)";
  $stmt =$conn -> prepare($sql);
    $stmt -> execute (array($row['JobID'],$row['category'],$row['location'],$row['payment'],$row['clientemail'],$row['email']));

    echo "alert(Confirmation submitted)";
}
?>
