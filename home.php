<?php
	session_start();


	if (isset($_GET['logout']))
	{
		session_destroy();
		unset($_SESSION['username']);
		header("location: home.php");
	}
?>



<DOCTYPE html>
<html>
<head>
	<title>University Review System</title>
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="home1.css">
	<style type="text/css">
	.find_button{
			display: block;
			margin: 50px;
			text-align: center;
			border: 2px solid #2ecc71;
			padding: 14px 40px;
			color: coral;
			border-radius: 24px;
		    text-decoration: none;
	}	
	.find_button:hover{
		background: black;
		cursor: pointer;
	}
	
	</style>

</head>
<body>



	<div class="header">
		<a  class="logo">WELCOME TO UNIVERSITY REVIEW SYSTEM</a>

		<?php	if (isset($_SESSION['logged'])) : ?>

			<div class="header-right">
			    <a class="logout" href="home.php?logout='1'"> <?php echo "" . $_SESSION['username'] ?> </a>
			</div>
		
		<?php else :?>
	
			<div class="header-right">
			    <a class="login" href="login.php"> login </a>
			</div>
		
		<?php endif ?>
	</div>

	<slider>
		<slide>
			<h5><a href="universities.php" class="find_button">Find University</a></h5>
		</slide>
		<slide>
			<h5><a href="universities.php" class="find_button">Find University</a></h5>
		</slide>
		<slide>
			<h5><a href="universities.php" class="find_button">Find University</a></h5>
		</slide>
		<slide>
			<h5><a href="universities.php" class="find_button">Find University</a></h5>
		</slide>
	</slider>		
</body>
</html>