<!DOCTYPE html>
<html lang="en">


<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />


	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="apps/assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="apps/assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>Readify</title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="apps/assets/js/html5shiv.min.js"></script>
	<script src="apps/assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="apps/assets/css/assets.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="apps/assets/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="apps/assets/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="apps/assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="apps/assets/css/color/color-1.css">

</head>

<body id="bg">
	<div class="page-wraper">
		<div id="loading-icon-bx"></div>
		<div class="account-form">
			<div class="account-head" style="background-image:url(apps/assets/images/background/bg2.jpg);">
				<a href="index.php"><img src="apps/assets/images/logo-white-2.png" alt=""></a>
			</div>
			<div class="account-form-inner">
				<div class="account-container">
					<div class="heading-bx left">
						<h2 class="title-head">Login to your <span>Account</span></h2>
						<p>Don't have an account? <a href="register.php">Create one here</a></p>
					</div>
					<form class="contact-bx" action="login_login.php" method="post" autocomplete="off">
						<div class="row placeani">
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<label>Your Email</label>
										<input name="email" type="email" required="" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<label>Your Password</label>
										<input name="password" type="password" class="form-control" required="">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group form-forget">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
										<label class="custom-control-label" for="customControlAutosizing">Remember me</label>
									</div>
									<a href="forgot.php" class="ml-auto">Forgot Password?</a>
								</div>
							</div>
								<?php
								if (isset($msg)) {
									echo '<p class="w-100" style="color:#fff;border:1px solid #fff;padding:10px;text-align:center;text-transform:uppercase;background:green">' . $msg . '</p>';
								}
								if (isset($err)) {
									echo '<p class="w-100" style="color:#fff;border:1px solid #fff;padding:10px;text-align:center;text-transform:uppercase;background:red;">' . $err . '</p>';
								}
								?>
							<div class="col-lg-12 m-b30">
								<button name="submit" type="submit" value="Submit" class="btn button-md">Login</button>
							</div>
							<div class="col-lg-12">
								<h6>Login with Social media</h6>
								<div class="d-flex">
									<a class="btn flex-fill m-r5 facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a>
									<a class="btn flex-fill m-l5 google-plus" href="#"><i class="fa fa-google-plus"></i>Google Plus</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- External JavaScripts -->
	<script src="apps/assets/js/jquery.min.js"></script>
	<script src="apps/assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="apps/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="apps/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="apps/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="apps/assets/vendors/magnific-popup/magnific-popup.js"></script>
	<script src="apps/assets/vendors/counter/waypoints-min.js"></script>
	<script src="apps/assets/vendors/counter/counterup.min.js"></script>
	<script src="apps/assets/vendors/imagesloaded/imagesloaded.js"></script>
	<script src="apps/assets/vendors/masonry/masonry.js"></script>
	<script src="apps/assets/vendors/masonry/filter.js"></script>
	<script src="apps/assets/vendors/owl-carousel/owl.carousel.js"></script>
	<script src="apps/assets/js/functions.js"></script>
	<script src="apps/assets/js/contact.js"></script>
	<script src='apps/assets/vendors/switcher/switcher.js'></script>
</body>

</html>