


	<!DOCTYPE html>
	<html class="load-full-screen">

	<!-- Mirrored from limpidthemesdemo.com/Themeforest/html/cruise-demo/light/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Feb 2019 12:39:20 GMT -->
	<head>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="LimpidThemes">

		<title>Sky Airlines || </title>
		<!--STYLESHEET-->
		<!--=================================================-->

		<!--Open Sans Font [ OPTIONAL ]-->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


		<!--Bootstrap Stylesheet [ REQUIRED ]-->




		<!--=================================================-->






		<!--Bootstrap Select [ OPTIONAL ]-->
		<link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">




		<!--Chosen [ OPTIONAL ]-->
		<link href="plugins/chosen/chosen.min.css" rel="stylesheet">




		<!--Select2 [ OPTIONAL ]-->
		<link href="plugins/select2/css/select2.min.css" rel="stylesheet">




		<!-- STYLES -->
		<link href="assets/css/animate.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-select.min.css" rel="stylesheet">
			<link href="assets/css/style4.css" rel="stylesheet" media="screen">

		<link href="assets/css/owl.carousel.css" rel="stylesheet">
		<link href="assets/css/owl-carousel-theme.css" rel="stylesheet">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/flexslider.css" rel="stylesheet" media="screen">
		<link href="assets/css/style.css" rel="stylesheet" media="screen">
		<!-- LIGHT -->
		<link rel="stylesheet" type="text/css" href="assets/css/dummy.html" id="select-style">
		<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

		<link href="assets/css/light.css" rel="stylesheet" media="screen">

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600' rel='stylesheet' type='text/css'>

	</head>
	<body class="load-full-screen">

	
		<!-- END: PRELOADER -->

		<!-- BEGIN: COLOR SWITCHER -->

		<!-- END: COLOR SWITCHER -->

		<!-- BEGIN: SITE-WRAPPER -->
		<div class="site-wrapper">
			<div class="row header-top">
				<div class="container clear-padding">
					<div class="navbar-contact">
						<div class="col-md-7 col-sm-6 clear-padding">
							<a href="#" class="transition-effect"><i class="fa fa-phone"></i> (+91) 1234567890</a>
							<a href="#" class="transition-effect"><i class="fa fa-envelope-o"></i> support@email.com</a>
						</div>
						<div class="col-md-5 col-sm-6 clear-padding search-box">
							<div class="col-md-6 col-xs-5 clear-padding">
								<form >
									<div class="input-group">
									</div>
								</form>
							</div>
							<?php
							include 'konek.php';
							$username = $_SESSION['username'];
							$ambildata = mysqli_query($conn, "SELECT * FROM penumpang WHERE username = '$username' ");
							while ($data_user = mysqli_fetch_array($ambildata)) 
							{
								?>
								<div class="col-md-6 col-xs-7 clear-padding user-logged">
									<a href="#" class="transition-effect">
										Hi. <?php echo $data_user['username']; ?>
									</a>
									<?php 
								}
								?>
								<a href="logout.php" class="transition-effect">
									<i class="fa fa-sign-out"></i>Keluar
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="clearfix"></div>
			<div class="row light-menu">
				<div class="container clear-padding">
					<!-- BEGIN: HEADER -->
					<div class="navbar-wrapper">
						<div class="navbar navbar-default" role="navigation">
							<!-- BEGIN: NAV-CONTAINER -->
							<div class="nav-container">
								<div class="navbar-header">
									<!-- BEGIN: TOGGLE BUTTON (RESPONSIVE)-->
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>

									<!-- BEGIN: LOGO -->
									<a class="navbar-brand logo"  href="index.html"></a>

					<img src="assets/images/1809403231_d1a07679-33ff-4f26-812b-678bd704fda6.png" style="height: 50px; width: 70px;"  href="index.html"></a>

								</div>

								<!-- BEGIN: NAVIGATION -->       
								<div class="navbar-collapse collapse">
									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a class="" href="index-3.php" ><i class="fa fa-home"></i> HOME </a>

										</li>

									
										<li class="dropdown mega">
											<a  href="about-us.php"><i class="fa fa-file"></i> TENTANG </i></a>
											
											<div class="clearfix"></div>
										</li>
										
											
										<li class="dropdown mega">
											<a class="" href="contact-us.php" ><i class="fa fa-ship"></i> KONTAK </i></a>
											
										
									</ul>
								</div>
								<!-- END: NAVIGATION -->
							</div>
							<!--END: NAV-CONTAINER -->
						</div>
					</div>
					<!-- END: HEADER -->
				</div>
			</div>