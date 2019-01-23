<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Index</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<body class="animsition">
	<!-- header fixed -->
	<div class="wrap_header fixed-header2 trans-0-4">
		<!-- Logo -->
		<a href="index.php" class="logo">
			<img src="images/icons/logo.png" alt="IMG-LOGO">
		</a>

		<!-- Menu -->
		<div class="wrap_menu">
			<nav class="menu">
				<ul class="main_menu">
					<li>
						<a href="index.php">Home</a>
					</li>

					<li>
						<a href="product.php">Shop</a>
					</li>

<!-- 					<li class="sale-noti">
						<a href="product.php">Sale</a>
					</li> -->

					<li>
						<a href="about.php">About</a>
					</li>

					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- Header -->
	<header class="header2">
		<!-- Header desktop -->
		<div class="container-menu-header-v2 p-t-26">
			<div class="topbar2">
				<!-- Logo2 -->
				<a href="index.php" class="logo2">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>
				<div class="topbar-child2">
					<span class="topbar-email">
						<a href="account.php"><?php if(isset($_SESSION['email']))
						echo $_SESSION['email'];?>
					</a>
				</span>
				<?php
				if(isset($_SESSION['email'])) echo '<a href="logout.php" class="header-wrapicon1 dis-block m-l-30">Deconnexion</a>';
				else echo '<a href="formlogin.php" class="header-wrapicon1 dis-block m-l-30">Connexion</a>';
				?>
				<span class="linedivide1"></span>

				<div class="header-wrapicon2 m-r-13">
					<a href="cart.php"><img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
					<!-- Header cart noti -->
					<!--<div class="header-cart header-dropdown">
						<div class="header-cart-buttons">
							<div class="header-cart-wrapbtn">
								<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									View Cart
								</a>
							</div>
							<div class="header-cart-wrapbtn">
								<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									Check Out
								</a>
							</div>
						</div>-->
					</div>
				</div>
			</div>
		</div>

		<div class="wrap_header">

			<!-- Menu -->
			<div class="wrap_menu">
				<nav class="menu">
					<ul class="main_menu">
						<li>
							<a href="index.php">Home</a>
						</li>

						<li>
							<a href="product.php">Shop</a>
						</li>

<!-- 							<li class="sale-noti">
								<a href="product.php">Sale</a>
							</li>
						-->
						<li>
							<a href="about.php">About</a>
						</li>

						<li>
							<a href="contact.php">Contact</a>
						</li>
					</ul>
				</nav>
			</div>

			<!-- Header Icon -->
			<div class="header-icons">

			</div>
		</div>
	</div>

	<!-- Header Mobile -->
	<div class="wrap_header_mobile">
		<!-- Logo moblie -->
		<a href="index.php" class="logo-mobile">
			<img src="images/icons/logo.png" alt="IMG-LOGO">
		</a>

		<!-- Button show menu -->
		<div class="btn-show-menu">
			<!-- Header Icon mobile -->
			<div class="header-icons-mobile">

				<span class="linedivide2"></span>

				<div class="header-wrapicon2">
					<a href="panier/panier.php"><img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
<!-- 					<span class="header-icons-noti">0</span> -->
				</div>
			</div>

			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>
	</div>

	<!-- Menu Mobile -->
	<div class="wrap-side-menu" >
		<nav class="side-menu">
			<ul class="main-menu">

				<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
					<div class="topbar-child2-mobile">
						<span class="topbar-email">
							<a href="logout.php"><?php if(isset($_SESSION['email']))
							echo $_SESSION['email'];?></a>
						</span>
						<?php
						if(isset($_SESSION['email'])) echo '<a href="logout.php" class="header-wrapicon1 dis-block m-l-30">Deconnexion</a>';
						else echo '<a href="formlogin.php" class="header-wrapicon1 dis-block m-l-30">Connexion</a>';
						?>
					</div>
				</li>

				<li class="item-topbar-mobile p-l-10">
					<div class="topbar-social-mobile">
						<a href="#" class="topbar-social-item fa fa-facebook"></a>
						<a href="#" class="topbar-social-item fa fa-instagram"></a>
						<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
						<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
						<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
					</div>
				</li>

				<li class="item-menu-mobile">
					<a href="index.php">Home</a>
				</li>

				<li class="item-menu-mobile">
					<a href="product.php">Shop</a>
				</li>

<!-- 					<li class="item-menu-mobile">
						<a href="product.php">Sale</a>
					</li> -->

					<li class="item-menu-mobile">
						<a href="about.php">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
