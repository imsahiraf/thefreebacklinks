<?php include "db.php"?>
<?php
session_start(); 
error_reporting(E_ERROR | E_PARSE);
 $loggedin = isset($_SESSION['loggedin'])?$_SESSION['loggedin']:'';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>FreeBacklink</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link href="css/all-stylesheets.css" rel="stylesheet">
	
	<link href="css/header-center-align.css" rel="stylesheet">
	
	<link rel="shortcut icon" href="images/icons/favicon/favicon.png">
	<link rel="apple-touch-icon" href="images/icons/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon/apple-touch-icon-114x114.png">
</head>

<body>
	
	<header>
	
		<div class="top-nav hidden-sm hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div id="date"></div>
					</div>
					<div class="col-lg-6 col-md-6">
						<ul class="small-nav">
							<li><a href="login.php">LOGIN</a></li>
							<li><a href="register.php">JOIN</a></li>
							<!-- <li><a href="#">ADVERTISEMENT</a></li>
							<li><a href="site-map.php">SITE MAP</a></li>
							<li><a href="contact-us.php">CONTACT</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12 logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>
			</div>
		</div>
	</header>
	<div id="mobile-header">
		<a id="responsive-menu-button" href="#sidr-main"><span class="icon-bar"></span> <span class="icon-bar"></span>
			<span class="icon-bar"></span></a>
	</div>
	<nav id="navigation">
		<div class="navbar yamm navbar-inverse" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse"
								data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span
									class="icon-bar"></span> <span class="icon-bar"></span> <span
									class="icon-bar"></span> </button>
						</div>
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="dropdown yamm-fw">
									<a class="dropdown-link" href="index.php">HOME</a>


								</li>
								<!-- <li class="dropdown yamm-fw">
									<a class="dropdown-link" href="standard-post.php">BLOG</a>

								</li> -->
								<li class="dropdown yamm-fw">
									<a class="dropdown-link" href="about.php">About-Us</a>

									<!-- Fashion Mega Menu Ends -->
								</li>
								
								<?php if(isset($_SESSION['loggedin'])){
								echo '<li class="dropdown yamm-fw">
									<a class="dropdown-link" href="postblog.php">POST BLOG</a>

								</li>';}

								?>
								<li class="dropdown yamm-fw">
									<a class="dropdown-link" href="contact-us.php">Contact-Us</a>

								<li class="visible-xs"><a href="login.php">LOGIN</a></li>
								<li class="visible-xs"><a href="register.php">JOIN</a></li>
								<li class="visible-xs"><a href="#">ADVERTISEMENT</a></li>
								<li class="visible-xs"><a href="contact-us.php">CONTACT</a></li>
							</ul>
							<div class="nav-icon pull-right">
								<input type="search" value="" name="" class="s" placeholder="Search...">
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>