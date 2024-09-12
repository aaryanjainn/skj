<?php
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
// include ASSETS.'/css/slider.scss';

$getInstaPhotos = [];
if (!empty($feed->data))
{
	foreach ($feed->data as $key => $instaData) {
		if ($instaData->media_type != "VIDEO") {
			$getInstaPhotos[] = $instaData;
		}
	}
}
	?>
<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<title>S.K JEWELLERS</title>
	<meta name="description" content>
	<meta name="author" content>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="assets/photos/logo_t.png">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>/vendor/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>/vendor/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>/vendor/revolution/css/navigation.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'>
	<link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>/css/style.min.css" />
	<!-- <link rel="stylesheet" type="text/css" href="<?= ASSETS; ?>/css/slider.css" /> -->
	
	<!--FONTS-->
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400&amp;display=swap'>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css" rel="stylesheet">
    <style>
		#preloader
		{
			background: #000 url(assets/photos/preloader.gif) no-repeat center center;
			background-size: cover;
			height:100vh;
			width:100%;
			position:fixed;
			z-index: 999999999999;
		}
	</style>
	<style>
        body {
            background-color: #F5F5FF;
        }

        .wrapper {
            padding: 70px 0;
            overflow-x: hidden;
        }

        .my-slider {
            padding: 0 70px;
        }

        .slick-initialized .slick-slide {
            /* background-color: #b32532; */
            color: #FFF;
            height: 200px;
            margin: 0 15px 0 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slick-next,
        .slick-prev {
            z-index: 5;
        }

        .slick-next {
            right: 15px;
        }

        .slick-prev {
            left: 15px;
        }

        .slick-next:before,
        .slick-prev:before {
            color: #000;
            font-size: 26px;
        }
		
    </style>
	<style>
		/* Maintain the original styles */
		.main-menu {
			position: relative;
		}

		.main-menu ul {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.menu-item {
			position: relative;
			display: inline-block; /* Aligns the menu items horizontally */
		}

		.menu-item a {
			display: block;
			padding: 10px 15px;
			text-decoration: none;
			color: #333;
		}

		/* New styles for the dropdown */
		.dropdown-menu-custom {
			position: relative; /* Ensure the dropdown menu is positioned correctly */
		}

		.dropdown-content {
			display: none; /* Hidden by default */
			position: absolute; /* Position relative to the parent menu item */
			top: 100%; /* Positions it directly below the parent menu item */
			left: 0;
			background-color: #fff;
			border: 1px solid #ddd;
			list-style: none;
			padding: 0;
			margin: 0;
			min-width: 150px; /* Minimum width of the dropdown */
			z-index: 1000; /* Ensures the dropdown appears on top */
		}

		.dropdown-content li {
			width: 100%;
		}

		.dropdown-content li a {
			padding: 10px 15px;
			display: block;
			color: #333;
			text-decoration: none;
		}

		.dropdown-content li a:hover {
			background-color: #f5f5f5;
		}

		/* Show the dropdown on hover */
		.dropdown-menu-custom:hover .dropdown-content {
			display: block;
		}

	</style>    
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KT7DGN9MT1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KT7DGN9MT1');
</script>

<body class="homepages-1">

	<!--<div class="images-preloader">-->
	<!--	<div id="preloader_1" class="rectangle-bounce">-->
	<!--		<span></span>-->
	<!--		<span></span>-->
	<!--		<span></span>-->
	<!--		<span></span>-->
	<!--		<span></span>-->
	<!--	</div>-->
	<!--</div>-->
	
	<!--<div id="preloader">-->
	<!--</div>-->

	<div>	
		<div class="show-desktop-header header-hp-1 style-header-hp-1" >
			<div id="js-navbar-fixed" class="menu-desktop">
				<div class="container-fluid">
					<div class="menu-desktop-inner">

						<div class="">
							<a href="https://skjewellersjaipur.com"><img src="assets/photos/logo_t_a.png" style="transform: scale(1.5); width:100px;" alt="logo"></a>
						</div>

						<!-- <nav class="main-menu">
							<ul>
								<li class="menu-item"> <a href="#testimonial" class="current">HOME</a></li>
								<li class="menu-item"><a href="#products">PRODUCTS</a></li>
								<li class="menu-item"><a href="#collection">COLLECTION</a></li>
								<li class="menu-item"><a href="#testimonial">CUSTOMERS</a></li>
								<li class="menu-item"><a href="#instagram">INSTA</a>
									<ul>
										<li>INSTAGRAM</li>
										<li>INSTAMART</li>
									</ul>
								</li>
							</ul>
						</nav> -->

						<nav class="main-menu">
							<ul>
								<li class="menu-item"><a href="#testimonial" class="current">HOME</a></li>
								<li class="menu-item"><a href="#products">PRODUCTS</a></li>
								<li class="menu-item"><a href="#collection">COLLECTION</a></li>
								<li class="menu-item"><a href="#testimonial">CUSTOMERS</a></li>
								<li class="menu-item dropdown-menu-custom">
									<a href="#instagram">INSTA &#9662;</a>
									<ul class="submenu dropdown-content">
										<li><a href="">INSTAGRAM</a></li>
										<li><a href="<?= BASE_URL;?>instamart">INSTAMART</a></li>
									</ul>
								</li>
							</ul>
						</nav>

						<div class="header-right">
							<div class="canvas canvas-btn-wrap">
								<a href="<?= BASE_URL;?>login" class="btn btn-secondary">Log-in</a>
								<button class="canvas-images canvas-btn" data-toggle="modal" data-target="#canvasModal">
									<img src="https://freebw.com/templates/novas/images/icons/header-icon-3.png" alt="canvas">
								</button>
							</div>
						</div>
					</div>
					<div class="modal fade" id="searchModal" role="dialog">
						<button class="close" type="button" data-dismiss="modal">
							<i class="zmdi zmdi-close"></i>
						</button>
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<form id="searchModal__form" method="POST">
										<button id="searchModal__submit" type="submit">
											<i class="zmdi zmdi-search"></i>
										</button>
										<input id="searchModal__input" type="text" name="search" placeholder="Search Here ..." />
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="canvasModal" role="dialog">
						<button class="close" type="button" data-dismiss="modal">
							<i class="zmdi zmdi-close"></i>
						</button>
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<div class="canvas-content">
										<h4>Follow us on</h4>
										<span> <a href="https://www.instagram.com/s.k_jewellers_jaipur/"> @s.k_jewellers_jaipur </a></span>
										<div class="row">
											<?php
											$count = 0;
											$limit = 6;

											foreach ($getInstaPhotos as $key => $instaData) {
												$count++;
												if ($count <= 6) {
											?>
													<div class="col-4 p-1">
														<a href="<?= $instaData->permalink; ?>" class="images-inner">
															<!--<div class="overlay"></div>-->
															<img src="<?= $instaData->media_url; ?>" alt="insta">
														</a>
													</div>
											<?php
												}
											}
											?>
										</div>

										<!--  -->
										<div class="contact">
											<h4>Contact us on</h4>
											<div class="contact-inner">
												<i class="fa-solid fa-map"></i>
												<div class="contact-info">
													<span>138, kishanpole bazar, jaipur Jaipur, Rajasthan, India 302001</span>
												</div>
											</div>
											<div class="contact-inner">
												<i class="fa-solid fa-phone"></i>
												<div class="contact-info">
													<span><a href="tel:+918504062109">+ (91)
								8504062109</a>, <a href="tel:+919828048721"> +(91) 9828048721</a></span>
												</div>
											</div>
											<div class="contact-inner">
												<i class="fa-solid fa-envelope"></i>
												<div class="contact-info">
													<span><a href="mailto:skjewellersjaipur@gmail.com" >skjewellersjaipur@gmail.com</a></span>
												</div>
											</div>
											<div class="contact-inner">
												<i class="fa-solid fa-globe"></i>
												<div class="contact-info">
													<span><a href="https://skjewellersjaipur.com" >skjewellersjaipur.com</a></span>
												</div>
											</div>
										</div>

										<!-- Visit us today -->
										<div class="container p-0 pt-3">
											<h4 class="pb-3">Visit us today</h4>
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.38700064793!2d75.81524237497348!3d26.922943159651723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db152dfc2b6b9%3A0xe21cccf796e1bee5!2sS.K%20Jewellers!5e0!3m2!1sen!2sin!4v1692475380797!5m2!1sen!2sin" class="pt-2" style=" width:100%; height:250px; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
										</div>
										<div class="socials">
                    						<a href="https://www.facebook.com/skjewellersjaipur/"><i class="fa-brands fa-facebook-f"></i></a>
                    						<a href="https://wa.me/+918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You."><i class="fa-brands fa-whatsapp"></i></a>
                    						<a href="https://www.instagram.com/s.k_jewellers_jaipur/"><i class="fa-brands fa-instagram"></i></a>
                    						<a href="tel:+918504062109"><i class="fa-solid fa-phone"></i></a>
                    					</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="show-mobile-header" id="js-navbar-mb-fixed" >
			<div class="mobile-top-header p-2 border-bottom border-dark">
				<div class="logo-mobile">
					<a href="https://skjewellersjaipur.com">
						<img src="assets/photos/logo_t.png" style="width: 110px; height: 110px;" alt="logo">
					</a>
				</div>
				<button class="hamburger hamburger--spin hidden-tablet-landscape-up " style="padding-top:35px;" id="toggle-icon">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>

			<div class="au-navbar-mobile navbar-mobile-1">
				<div class="canvas-content">
					<!-- INSTA -->
					<div class="container pb-2 pt-3">
						<h4>Follow us on</h4>
						<span> <a href="https://www.instagram.com/s.k_jewellers_jaipur/"> @s.k_jewellers_jaipur </a></span>
						<div class="row">
							<?php
							$count = 0;
							$limit = 6;

							foreach ($getInstaPhotos as $key => $instaData) {
								$count++;
								if ($count <= 6) {
							?>
									<div class="col-4 pt-4">
										<a href="<?= $instaData->permalink; ?>" class="images-inner">
											<!--<div class="overlay"></div>-->
											<img src="<?= $instaData->media_url; ?>" alt="insta">
										</a>
									</div>
							<?php
								}
							}
							?>
						</div>
					</div>
					<hr>

					<!-- CONTACT US -->
					<div class="container border-bottom pt-2 pb-3">
						<h4>Contact us on</h4>
						<div class="contact-inner pt-3">
							<div class="contact-info">
								<i class="fa-solid fa-map"></i> &nbsp
								<span>138, kishanpole bazar, jaipur Jaipur, Rajasthan, India 302001</span>
							</div>
						</div>
						<div class="contact-inner">
							<div class="contact-info">
								<i class="fa-solid fa-phone"></i> &nbsp
								<span><a href="tel:+918504062109">+ (91)
								8504062109</a>, <a href="tel:+919828048721"> +(91) 9828048721</a></span>
							</div>
						</div>
						<div class="contact-inner">
							<div class="contact-info">
								<i class="fa-solid fa-envelope"></i> &nbsp
								<span><a href="mailto:skjewellersjaipur@gmail.com" >skjewellersjaipur@gmail.com</a></span>
							</div>
						</div>
						<div class="contact-inner">
							<div class="contact-info">
								<i class="fa-solid fa-globe"></i> &nbsp
								<span><a href="https://www.skjewellersjaipur.com" >skjewellersjaipur.com</a></span>
							</div>
						</div>
					</div>

					<!-- Visit us today -->
					<div class="container border-bottom pt-3 pb-2">
						<h4 class="pb-3">Visit us today</h4>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.38700064793!2d75.81524237497348!3d26.922943159651723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db152dfc2b6b9%3A0xe21cccf796e1bee5!2sS.K%20Jewellers!5e0!3m2!1sen!2sin!4v1692475380797!5m2!1sen!2sin" class="pt-2" style=" width: 100%; height:215px; border:2px solid #666; border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>

					<!-- Social Icons -->
					<div class="container socials text-right">
						<a href="https://www.facebook.com/skjewellersjaipur/" style="color: #666; font-size: 17px; padding-right: 14px;"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." style="color: #666; font-size: 17px; padding-right: 14px;"><i class="fa-brands fa-whatsapp"></i></a>
						<a href="https://www.instagram.com/s.k_jewellers_jaipur/" style="color: #666; font-size: 17px; padding-right: 14px;"><i class="fa-brands fa-instagram"></i></a>
						<a href="tel:+918504062109" style="color: #666; font-size: 17px; padding-right: 14px;"><i class="fa-solid fa-phone"></i></a>
					</div>
				</div>
			</div>
		</div>
	
		<div class="social-overlap process-scetion mt100">
			<div class="social-bar">
				<div class="social-icons mb-3 iconpad text-center">
					<a href="https://www.facebook.com/skjewellersjaipur/" class="slider-nav-item"><i class="fab fa-facebook"></i></a>
					<a href="https://wa.me/918504062109?text=Greetings S.K Jewellers, %0aI'm interested in your products. Can you please provide more info? %0aThank You." class="slider-nav-item"><i class="fab fa-whatsapp"></i></a>
					<a href="https://www.instagram.com/s.k_jewellers_jaipur/" target="_blank" class="slider-nav-item"><i class="fab fa-instagram"></i></a>
					<a href="tel:+918504062109" class="slider-nav-item"><i class="fa-solid fa-phone"></i></a>
				</div>
			</div>
		</div>
	</div>