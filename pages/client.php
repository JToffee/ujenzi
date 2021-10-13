<?php
session_start();
ini_set('display_errors',1);
include('../includes/config.php');
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Ujenzi Kenya</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="Contractors and members get skilled construction workers and interrior designers.">
	<meta name="keywords" content="construction,contractor,ujenzi,home,interior designer,region,member,rent,house,appartment,construction worker,build">
	<meta name="author" content="Sheila Jerotich">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/proff.css">

	<link rel="stylesheet" type="text/css" href="../slider/auto.css">
	<script src="../slider/auto.js"></script>
	<style>
		.row .contractor{
			height: 30vw;
		}
		.row .contractor #p{
			margin-top: 1vw;
		}
		.row .contractor #p span{
			font-weight: bold;
		}
		.worker .proffesion{
			font-size: 1.3em;
		}
		#workers .row {
			height: 18vw;
      margin-left: 0vw;

		}
		footer{
			top: 65vw;
		}
		nav span {
			color: #fff;
			line-height: 5vw;
			margin-left: 20vw;
			opacity: 0.8;
			font-style: italic;
		}
    .row button{
      background-color:#fff;
      width: 18vw;
    	height: 18vw;
    	overflow: hidden;
    	float: left;
    	padding: 0.1vw;
    	margin-left: 1vw;
    	opacity: 0.9;
      border: none;
    }
    .row button .worker p{
    	margin-top: 0vw;
      text-align: center;
      margin-left: 0;
    }
    .row   button .worker img{
    	width: 12vw;
    	height: 12vw;
    	border-radius: 6vw;
    	margin-bottom: 1vw;
    	margin-top: 1vw;
    	margin-left: 1vw;
    }
    .row button .worker .proffesion{
    	font-weight: 10px;
    	font-family: verdana;
    	margin-left: 2vw;
    	color: #848482;
    }
    .row button .worker :hover{
    	opacity: 0.7;
    	background-color:#000;
    }


	</style>

</head>
<body>
<div class = "container-fluid">
<header>
<span id="logo"><img src="../logo/logo3.png"></span><span id="brand">UJENZI KENYA</span>
<nav>
	<ul>
		<li><a class="active" href="clientprofile.php">Profile</a></li>
		<li><a href="postjob.php">Post job</a></li>
		<li><a href="../includes/logout.php">Sign Out</a></li>
		<li style="border: none;"><a href="#contact">Contact us</a></li>
	</ul>
	<span><?php echo htmlentities($_SESSION['login']);?></span>
</nav>
</header>
<section id="p_home">
<section class="col_1" style="height:60vw">
	<img src="../images/images.jpeg">
	<p>Sawe Sheila<br> <br><br>3 star</p>
	<nav>
	<ul>
		<!--<li><a class="active"href="index.html">Post project</a></li>-->
		<li><a href="checkapplications.php">Check applications</a></li>
		<li><a href="client_notifications.php">Notifications</a></li>
		<li><a href="searchprofile.php">Search Profile</a></li>
</nav>
</section>


<section class="col_2">
	<div id="workers">
		<span style="margin-left: 2vw;" class="title"> Get worker</span><span>
      <a href='searchprofile.php' style="float:left; margin-left:3vw;margin-top:0.2vw; padding:1vw 2vw 1vw 2vw; color:#fff; text-decoration:none; background-color:grey ">
    Search</a></span><br><br><br><br><br>
    <!--  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <input type="text" placeholder="search" name="search">
      <button style="float:left; margin-top:1vw;border:none; transform: rotate(30deg); margin-left:1vw;background-color:#fff;" type="submit" name = "searchbtn">
      <img src="../images/download.png" style="width:2.2vw;height:2.2vw;">
    </button></span><br><br><br><br><br>
  </form>-->
  <form method="post" action="../includes/workers.php">
		<div class="row" style="height:18vw;" >
			<button type="submit" name="masons" style="width: 18vw; font-family: verdana; text-transform: capitalize; font-size1.5em;padding-left:0; font-weight:px">
        <div class="worker">
				<p><span class="proffesion">Masons</span></p>
				<img src="../images/img12.jpg">
			</div></button>
      <button type="submit" name="plumbers" style="width: 18vw; font-family: verdana; text-transform: capitalize; font-size1.5em;padding-left:0; font-weight:px">
			<div class="worker">
				<p><span class="proffesion">Plumbers</span></p>
				<img src="../images/img12.jpg">
			</div></button>
      <button type="submit" name="electricians" style="width: 18vw; font-family: verdana; text-transform: capitalize; font-size1.5em;padding-left:0; font-weight:px">
			<div class="worker">
				<p><span class="proffesion">Electricians</span></p>
				<img src="../images/img12.jpg">
			</div></button>
    </div>
    <div class="row">
      <button type="submit" name="painters" style="width: 18vw; font-family: verdana; text-transform: capitalize; font-size1.5em;padding-left:0; font-weight:px">
			<div class="worker">
				<p><span class="proffesion">Painters</span></p>
				<img src="../images/img12.jpg">
			</div></button>
      <button type="submit" name="welders" style="width: 18vw; font-family: verdana; text-transform: capitalize; font-size1.5em;padding-left:0; font-weight:px">
			<div class="worker">
				<p><span class="proffesion">Welders</span></p>
				<img src="../images/img12.jpg">
			</div></button>
      <button type="submit" name="roofer" style="width: 18vw; font-family: verdana; text-transform: capitalize; font-size1.5em;padding-left:0; font-weight:px">
			<div class="worker">
				<p><span class="proffesion">Roofer</span></p>
				<img src="../images/img12.jpg">
			</div></button>
		</div>
</form>
	</div>
</section>
<!--

<section id="contractors" style="top: 87vw;">
		<span style="margin-left: 2vw;" class="title"> Contractors</span><span><input type="text" placeholder="search" style="margin-left: 7vw;" name="search"></span><br><br><br><br><br>
		<div class="row">
			<div class="contractor">
					<p><span class="c_name">Ditman</span></p>
					<img src="../images/img1.jpg">
					<p id="p"><span>Description</span> : 35 storey building. Modern Mall
					consequat.<br>
					<span>Location</span>: Ngong <br>
					<button >VIEW</button></p>
			</div>
			<div class="contractor">
					<p><span class="c_name">Zhakhem</span></p>
					<img src="../images/img1.jpg">
					<p id="p"><span>Description</span> : 35 storey building. Modern Mall
					consequat.<br>
					<span>Location</span>: Ngong <br>
					<button >VIEW</button></p>
			</div>
			<div class="contractor">
					<p><span class="c_name">Caterpillar</span></p>
					<img src="../images/img1.jpg">
					<p id="p"><span>Description</span> : 35 storey building. Modern Mall
					consequat.<br>
					<span>Location</span>: Ngong <br>
					<button >VIEW</button></p>
			</div>
			<div class="contractor">
					<p><span class="c_name">Patel Singh</span></p>
					<img src="../images/img1.jpg">
					<p id="p"><span>Description</span> : 35 storey building. Modern Mall
					consequat.<br>
					<span>Location</span>: Ngong <br>
					<button >VIEW</button></p>
			</div>
		</div>

</section>

-->
<!--
<section id="my_projects" style="top: 62vw;">
	<span class="title">My  Projects</span><span><input type="text" placeholder="search" name="search"></span><br><br>
		<div class="row" style="margin-top: 6vw;">
			<div class="project">
				<span id="p_title">The Pinnacle</span>
				<p>
					<img src="../images/img12.jpg">
					<span>Description</span> : 35 storey building. Modern Mall
					consequat.<br>
					<span>Location</span>: Ngong <br>
					<button >OPEN</button>
				</p>
			</div>
			<div class="project">
				<span id="p_title">The Pinnacle</span>
				<p>
					<img src="../images/img12.jpg">
					<span>Description</span> : 35 storey building. Modern Mall
					consequat.<br>
					<span>Location</span>: Ngong <br>
					<button >OPEN</button>
				</p>
			</div>
			<div class="project">
				<span id="p_title">The Pinnacle</span>
				<p>
					<img src="../images/img12.jpg">
					<span>Description</span> : 35 storey building. Modern Mall
					consequat.<br>
					<span>Location</span>: Ngong <br>
					<button >OPEN</button>
				</p>
			</div>
			<div class="project">
				<span id="p_title">The Pinnacle</span>
				<p>
					<img src="../images/img12.jpg">
					<span>Description</span> : 35 storey building. Modern Mall
					consequat.<br>
					<span>Location</span>: Ngong <br>
					<button >OPEN</button>
				</p>
			</div>

		</div>
</section>
-->
<?php include('../includes/footer.php');?>
</div>
</body>
</html>
