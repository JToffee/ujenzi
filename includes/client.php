<?php
error_reporting(0);
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$id=$_POST['ID'];
$country=$_POST['country'];
$county=$_POST['county'];
$town=$_POST['town'];
$email=$_POST['email'];
$mobile=$_POST['mob_No'];
$telephone = $_POST['tel_No'];
$password=md5($_POST['password']);

$sql="INSERT INTO  client(id,firstname,lastname,dateofbirth,nat_id,country,county,town,email,mobile,telephone,password,reg_date)
      VALUES(:firstname,:lastname,:dateofbirth,:nat_id,:country,:county,:town,:email,:mobile,:telephone,:password)";

$query = $conn->prepare($sql);
$query->bindParam(':firstname',$fname,PDO::PARAM_STR);
$query->bindParam(':lastname',$lname,PDO::PARAM_STR);
$query->bindParam(':dateofbirth',$dob,PDO::PARAM_STR);
$query->bindParam(':nat_id',$id,PDO::PARAM_STR);
$query->bindParam(':country',$country,PDO::PARAM_STR);
$query->bindParam(':county',$county,PDO::PARAM_STR);
$query->bindParam(':town',$town,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam('mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':telephone',$telephone,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $conn->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="You are Scuccessfully registered. Now you can login ";
header('location:thankyou.php');
}
else
{
$_SESSION['msg']="Something went wrong. Please try again.";
header('location:thankyou.php');
}
}
?>

<!--Javascript for check email availabilty-->

<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
