<?php
session_start();
ini_set('display_errors',1);
include('../includes/config.php');
?>;
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
		 nav span {
			color: #fff;
			line-height: 5vw;
			margin-left: 20vw;
			opacity: 0.8;
			font-style: italic;
		}

		#jobs{

			height: 60vw;
			margin-top: 5vw;
			margin-left: 2vw;
			overflow: scroll;
			width: 67vw;


		}
		#jobs input{
			width: 30vw;
			height: 2.8vw;
			border-radius: 2vw;
			text-indent: 0.1%;
			float: left;
		}

		#jobs .row{
			margin-top: 1vw;

		}
		.row .job{
			width: 25vw;
			min-height: 20vw;
			float: left;
			border-right: 1px solid #000;
			padding: 0.1vw;
			margin-left: 2vw;
			font-size: 0.8em;
			opacity: 0.9;
			padding-bottom: 0;

		}
		.job span{
			font-weight: bold;
			font-size: 1.2em;
		}
		.job input{
			margin-top: 0.1vw;
			border: none;

		}
		.job label{
			line-height: 0;
			width: 10vw;

		}
		.job .job_title{
			font-weight: 3px;
			font-size: 1.7em;
			color: #848482;
		}
		.job button{
			background-color: #808000;
			color: #fff ;
			width: 12.5vw;
			font-size: 1em;
			border-radius: 4px;
			height: 3vw;
			font-family: verdana;
			margin-top:1vw;
			font-weight: bold;
			text-transform: capitalize;
		}
		.col_2{
			width: 67vw;
			height: 60vw;
			float: left;
			margin-left: 5vw;
		}
		.col_1{
			width: 26vw;
			height: 60vw;
		}
		footer {
			top: 85vw;
		}
	</style>

</head>
<body>
<div class = "container-fluid">
<header>
<span id="logo"><img src="../logo/logo3.png"></span><span id="brand">UJENZI KENYA</span>
<nav>
	<ul>
		<li><a class="active" href="proffedit.php">Profile</a></li>
		<li><a href="notifications.php">Notifications</a></li>
		<li><a href="../includes/logout.php">Sign Out</a></li>
		<li style="border: none;"><a href="#contact">Contact us</a></li>
	</ul>
	<span><?php echo htmlentities($_SESSION['login']);?></span>
</nav>
</header>
<section id="p_home">
<section class="col_1">
	<img src="../images/images.jpeg">
	<p>Sawe Sheila<br> <br><br>3 star</p>
	<nav>
	<ul>
		<li><a class="active"href="postjob.php">Post job</a></li>
		<li><a href="searchprofile.php">Search profile</a></li>
</nav>
</section>


<section class="col_2">
	<section id="jobs" style="position: absolute;top: 0vw;">
		<span style="margin-left: 2vw;" class="title"> Jobs</span><span><br><br><br><br><br>
		<div class="row">

			<?php

					$sql = "SELECT * FROM job";
					$stmt = $conn-> prepare($sql);
						$stmt-> execute();
						$count = $stmt ->rowCount();

						if ($count > 0) {
							while ($row = $stmt -> fetch()) {
								echo '
								<div class="job">
								<form method="post" action="'.$_SERVER["PHP_SELF"].'">
									<input class="job_title" style="margin-left:0vw; margin-bottom:2vw;" value="'.$row['category'].'" ><br>
									<label for= "des">Description:</label><input type="text" name="des" value="'.$row['description'].'"><br>
										<label for="loc	">Location:</label><input type="text" name= "loc" value="'.$row['location'].'"><br>
										<label for =" pay">Payment in KSH:</label><input type = "text" name ="pay" value="'.$row['payment'].'"><br>
										<input type = "hidden" name ="cemail" value ="'.$row['clientemail'].'">
										<input type = "hidden"name = "jid" value ="'.$row['JobID'].'">
									<button type="submit" name="apply">Apply</button>
									</form>
								</div>
							';
							}
						}	else {
						echo "no Jobs yet";
					}
					if (isset ($_POST['apply'])) {
						$cemail = $_POST ['cemail'];
						$id = $_POST ['jid'];
						$id = strval($id);

							$sql = "INSERT INTO applications (JobID,workeremail,clientemail) VALUES (?,?,?)";
							$query = $conn->prepare($sql);
								$query -> execute (array($id,$_SESSION['login'],$cemail));

								echo "<script>alert('Application Sent')</script>";
					
					}
		 ?>
							<!--<div class="job">
									<span class="job_title">Plumbing</span>
									<p>
										<span>Description</span> : 35 storey building. Modern Mallconsequat Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.<br>
										<span>Location</span>: Ngong <br>
									</p>
									<button >APPLY</button>
								</div>
								<div class="job">
									<span class="job_title">Plumbing</span>
									<p>
										<span>Description</span> : 35 storey building. Modern Mallconsequat Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.<br>
										<span>Location</span>: Ngong <br>
									</p>
									<button >APPLY</button>
								</div>
								<div class="job">
									<span class="job_title">Plumbing</span>
									<p>
										<span>Description</span> : 35 storey building. Modern Mallconsequat Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.<br>
										<span>Location</span>: Ngong <br>
									</p>
									<button >APPLY</button>
								</div>-->

		</div>
	</section>
	</section>
</section>
<!--
	<div id="projects">
	<span class="title"> Projects</span><span><input type="text" placeholder="search" name="search"></span><br><br>
		<div class="row">
			<div class="project">
				<span id="p_title">The Pinnacle</span>
				<p>
					<img src="../images/img12.jpg">
					<span>Description</span> : 35 storey building. Modern Mall
					consequat.<br>
					<span>Location</span>: Ngong <br>
					<span>Jobs:</span> Painter, Brick Layer<br>
					<button >APPLY</button>

				</p>
			</div>
			<div class="project">
				<span id="p_title">The Pinnacle</span>
				<p>
					<img src="../images/img12.jpg">
					<span>Description</span> : 35 storey building. Modern Mall
					consequat.<br>
					<span>Location</span>: Ngong <br>
					<span>Jobs:</span> Painter, Brick Layer<br>
					<button >APPLY</button>

				</p>
			</div>
		</div>
		<div class="row">
			<div class="project">
				<span id="p_title">The Pinnacle</span>
				<p>
					<img src="../images/img12.jpg">
					<span>Description</span> : 35 storey building. Modern Mall
					consequat.<br>
					<span>Location</span>: Ngong <br>
					<span>Jobs:</span> Painter, Brick Layer<br>
					<button >APPLY</button>

				</p>
			</div>
			<div class="project">
				<span id="p_title">The Pinnacle</span>
				<p>
					<img src="../images/img12.jpg">
					<span>Description</span> : 35 storey building. Modern Mall
					consequat.<br>
					<span>Location</span>: Ngong <br>
					<span>Jobs:</span> Painter, Brick Layer<br>
					<button >APPLY</button>

				</p>
			</div>

		</div>
	</div>

<section id="contractors">
		<span style="margin-left: 2vw;" class="title"> Contractors</span><span><input type="text" placeholder="search" name="search"></span><br><br><br><br><br>
		<div class="row">
			<div class="contractor">
					<p><span class="c_name">Ditman</span></p>
					<img src="../images/img1.jpg">
			</div>
			<div class="contractor">
					<p><span class="c_name">Zhakhem</span></p>
					<img src="../images/img1.jpg">
			</div>
			<div class="contractor">
					<p><span class="c_name">Caterpillar</span></p>
					<img src="../images/img1.jpg">
			</div>
			<div class="contractor">
					<p><span class="c_name">Patel Singh</span></p>
					<img src="../images/img1.jpg">
			</div>
		</div>

	</section>
-->

<?php include "../includes/footer.php";?>
</div>
</body>
</html>
