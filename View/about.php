<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>A propos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="../index.php">
							<img src="../images/icons/logo.png" alt="IMG-LOGO" data-logofixed="../images/icons/logo2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="../index.php">Home</a>
								</li>

								<li>
									<a href="menu.php">Menu</a>
								</li>

								<li>
									<a href="gallery.php">Gallerie</a>
								</li>

								<li>
									<a href="about.php">A propos</a>
								</li>

								<li>
									<a href="contact.php">Contact</a>
								</li>

								<?php
														if (isset($_SESSION['identifiant'])) {
															?> <li >
																<a href="../Traitement/session_destroy.php">Déconnexion</a>
															</li>

															<li >
																<a href="reservation.php">Réserver</a>
															</li>

															<li>
																<a href="compte.php">Mon compte</a>
															</li>
														<?php }
														else {
														?>
															<li >
																<a href="connexion.php" class="txt19">Connexion</a>
															</li>

															<li >
																<a href="inscription.php" class="txt19">S'inscrire</a>
															</li>
													<?php	}

								?>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="../index.php" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="menu.php" class="txt19">Menu</a>
			</li>

			<li class="t-center m-b-13">
				<a href="gallery.php" class="txt19">Gallerie</a>
			</li>

			<li class="t-center m-b-13">
				<a href="about.php" class="txt19">A propos</a>
			</li>

			<li class="t-center m-b-33">
				<a href="contact.php" class="txt19">Contact</a>
			</li>

			<?php
									if (isset($_SESSION['identifiant'])) {
										?> <li class="t-center m-b-13">
											<a href="../Traitement/session_destroy.php" class="txt19">Déconnexion</a>
										</li>

										<li class="t-center m-b-13">
											<a href="reservation.php" class="txt19">Réserver</a>
										</li>

										<li class="t-center m-b-13">
											<a href="compte.php" class="txt19">Mon compte</a>
										</li>
									<?php }
									else {
									?>
										<li class="t-center m-b-13">
											<a href="connexion.php" class="txt19">Connexion</a>
										</li>

										<li class="t-center m-b-13">
											<a href="inscription.php" class="txt19">S'inscrire</a>
										</li>
								<?php	}

			?>
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->
			<h4 class="txt20 m-b-33">
				Gallerie
			</h4>

			<!-- Gallery -->
			<div class="wrap-gallery-sidebar flex-w">
				<a class="item-gallery-sidebar wrap-pic-w" href="../images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
					<img src="../images/photo-gallery-01.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="../images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
					<img src="../images/photo-gallery-02.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="../images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
					<img src="../images/photo-gallery-03.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="../images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
					<img src="../images/photo-gallery-05.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="../images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
					<img src="../images/photo-gallery-06.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="../images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
					<img src="../images/photo-gallery-07.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="../images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
					<img src="../images/photo-gallery-09.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="../images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
					<img src="../images/photo-gallery-10.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="../images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
					<img src="../images/photo-gallery-11.jpg" alt="GALLERY">
				</a>
			</div>
		</div>
	</aside>


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(../images/bg-title-page-03.jpg);">
		<h2 class="tit6 t-center">
			A propos de nous
		</h2>
	</section>


	<!-- Our Story -->
	<section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
		<span class="tit2 t-center">
			Restaurant Multiculturel
		</span>

		<h3 class="tit3 t-center m-b-35 m-t-5">
			Notre Histoire
		</h3>

		<p class="t-center size32 m-l-r-auto">
			Le restaurant Errazorr a été créé en 1995 par Mr. Errazorr. Il a commencé par un restaurant français, puis il a décidé de se lancer dans les cuisines étrangères. Différents chefs de différents pays sont venus pour pouvoir cuisiner les spécialités de leurs pays.
		</p>
	</section>

	<!-- Delicious & Romantic-->
	<section class="bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<!-- Delicious -->
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-delicious t-center">
						<span class="tit2 t-center">
							De Délicieuses
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							Recettes
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							Nos plats sont préparés par des chefs spécialisés.
						</p>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="../images/our-story-01.jpg" alt="IMG-OUR">
					</div>
				</div>
			</div>


			<!-- Romantic -->
			<div class="row p-t-170">
				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="../images/our-story-02.jpg" alt="IMG-OUR">
					</div>
				</div>

				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-romantic t-center">
						<span class="tit2 t-center">
							Un restaurant
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							Romantique
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
						Notre restaurant est choisi pour son charme et son ambiance. Parfait pour un dîner en amoureux.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Chef -->
	<section class="section-chef bgwhite p-t-115 p-b-95">
		<div class="container t-center">
			<span class="tit2 t-center">
				Rencontrez nos
			</span>

			<h3 class="tit5 t-center m-b-50 m-t-5">
				Chefs
			</h3>

			<div class="row">
				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="../images/avatar-02.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Peter Hart
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								Chef
							</span>

							<p class="t-center">
								Specialisé dans les plats Français et Italiens.
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="../images/avatar-03.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Hiro Tanaka
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								Chef
							</span>

							<p class="t-center">
								Spécialisée dans les plats asiatiques.
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="../images/avatar-05.jpg" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="#" class="txt34 dis-block p-b-6">
								Harry Harford
							</a>

							<span class="dis-block t-center txt35 p-b-25">
								Chef
							</span>

							<p class="t-center">
								Spécialisé dans la cuisine Américaine.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-80">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Contactez nous
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							20 rue du bosquet, 95560, Baillet-en-France
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							0987654321
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							errazorr@gmail.com
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-md-4 p-t-80 p-l-100">
					<!-- - -->
					<h4 class="txt13 m-b-32">
						Horaires d'ouverture
					</h4>

					<ul>
						<li class="txt14">
							Du lundi au samedi
						</li>

						<li class="txt14">
							10:00 - 23:00
						</li>
					</ul>
					<ul>
						<li class="txt14">
							Dimanche
						</li>

						<li class="txt14">
							10:00 - 21:00
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-md-4 p-t-80">
					<!-- - -->
					<h4 class="txt13 m-b-38">
						Gallerie
					</h4>

					<!-- Gallery footer -->
					<div class="wrap-gallery-footer flex-w">
						<a class="item-gallery-footer wrap-pic-w" href="../images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-01.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="../images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-02.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="../images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-03.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="../images/photo-gallery-04.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-04.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="../images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-05.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="../images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-06.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="../images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-07.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="../images/photo-gallery-08.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-08.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="../images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-09.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="../images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-10.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="../images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-11.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="../images/photo-gallery-12.jpg" data-lightbox="gallery-footer">
							<img src="../images/photo-gallery-12.jpg" alt="GALLERY">
						</a>
					</div>
				</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">


					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2020 Tous droits réservés  |  Ce modèle a été fait par Nathan</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="../js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>
