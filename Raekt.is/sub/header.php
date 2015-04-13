<?php
echo'
<!DOCTYPE html>
<html lang="is">
	<head>
		<meta charset="utf-8">
		<title>Raekt.com</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/header_footer.css" rel="stylesheet">
		<link href="css/jumbo.css" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link type="text/css" rel="stylesheet" href="css/styles.css">
		<link href="css/list.css" rel="stylesheet">
		<link href="css/raektir.css" rel="stylesheet">


	</head>
	<body>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src = "http://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src = "js/jquery-1.11.2.min.js"></script>
		<script src = "js/bootstrap.js"></script>
		<script src = "js/jumbo.js"></script>
		<script src="js/wcstodvar.js"></script>
		<script src = "js/button.js"></script>

		';


		if($site_name=="index.php"){echo'<div class ="navbar navbar-default navbar-fixed-top">';}
		else{echo '<div class ="navbar navbar-default navbar-static-top">';}
			echo '<div class="container">
				
				

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.php" class="navbar-brand">Rækt.com</a>
				</div>
				<div class="collapse navbar-collapse navHeaderCollapse">
					
					<ul class="nav navbar-nav navbar-right">
					
						<li';  if($site_name=="index.php"){echo ' class="dropdown active"';} echo '><a href="index.php">Heim</a></li>

						<li';  if($site_name=="samanburdur.php"){echo ' class="dropdown active"';} echo '><a href="samanburdur.php">Samanburdur</a></li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ræktir <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="raekt1.php">World Class</a></li>
								<li><a href="raekt2.php">Hress</a></li>
								<li><a href="raekt3.php">Sporthúsið</a></li>
								<li><a href="raekt4.php">Reebok Fitness</a></li>
								<li><a href="raekt5.php">Hreyfing</a></li>
							</ul>
						</li>
						<li';  if($site_name=="um_okkur.php"){echo ' class="dropdown active"';} echo '><a href="um_okkur.php">Um Okkur</a></li>
					</ul>

				</div>
			</div>
		</div>
		';
		?>