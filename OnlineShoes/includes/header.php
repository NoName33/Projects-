<html>
<head>
	<title><?=$pageTitle?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/styleC.css" type="text/css">
</head>
<body>
	<div class="header">

		<div class="container">

			<br>

			<?php session_start();
			     if(isset($_SESSION['username'])){
				?>
				<a href="logout.php"> Log out </a>
				<?php
			}
	        ?> 
		</div>

	</div>

	<div id="content">