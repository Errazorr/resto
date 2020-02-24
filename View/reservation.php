<?php
require('../Model/inscription.php')?>
<html lang="en">
<head>
	<title>Réservation</title>
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
									<a href="indexco.php">Home</a>
								</li>

								<li>
									<a href="menuco.php">Menu</a>
								</li>

								<li>
									<a href="#">Réservation</a>
								</li>

								<li>
									<a href="galleryco.php">Gallerie</a>
								</li>

								<li>
									<a href="aboutco.php">A propos</a>
								</li>

								<li>
									<a href="contactco.php">Contact</a>
								</li>

								<li>
									<a href="../index.php">Déconnexion</a>
								</li>

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

			<li class="t-center m-b-13">
				<a href="contact.php" class="txt19">Contact</a>
			</li>

			<li class="t-center m-b-13">
				<a href="../index.php" class="txt19">Déconnexion</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="reservation.php" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Réservation
				</a>
			</li>
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
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(../images/bg-title-page-02.jpg);">
		<h2 class="tit6 t-center">
			Réservation
		</h2>
	</section>


	<!-- Reservation -->
	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Réservation
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							Réserver une table
						</h3>
					</div>

					<form class="wrap-form-reservation size22 m-l-r-auto" action="../Traitement/reservation.php" method="post">
						<div class="row">
							<div class="col-md-4">
								<!-- Date -->
								<span class="txt9">
									Date<br><br>
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text" name="jour">
									<i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
								</div>
							</div>

							<div class="col-md-4">
								<!-- Time -->
								<span class="txt9">
									Heure<br><br>
								</span>

								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
	                <!-- Select2 -->
	                <select class="selection-1" name="heure">
										<?php
										try{
										$bdd= new PDO('mysql:host=localhost;dbname=restoration;charset=utf8','root','');
										}
										catch(Exception $e){
										  die('Erreur:'.$e->getMessage());
										}
										$reponse=$bdd->query('SELECT heures FROM heure');
										$donne=$reponse->fetchall();
										foreach ($donne as $value) {
											echo '<option>'.$value['heures'].'</option>';
										}
										?>
	                </select>
	              </div>
							</div>

							<div class="col-md-4">
								<!-- People -->
	              <span class="txt9">
	                <?php
									$place = new ajout();
									$p = $place->places();
										echo 'Nombre de personnes (places restantes : ' . $p.')';
									?>
	              </span>

	              <div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
	                <!-- Select2 -->
	                <select class="selection-1" name="personnes">
										<?php
										try{
										$bdd= new PDO('mysql:host=localhost;dbname=restoration;charset=utf8','root','');
										}
										catch(Exception $e){
										  die('Erreur:'.$e->getMessage());
										}
										$reponse=$bdd->query('SELECT places FROM place');
										$donne=$reponse->fetchall();
										foreach ($donne as $value) {
											echo '<option>'.$value['places'].'</option>';
										}
										?>
	                </select>
	              </div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<!-- Name -->
								<span class="txt9">
									Nom
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="nom" placeholder="Nom">
								</div>
							</div>

							<div class="col-md-4">
								<!-- Phone -->
								<span class="txt9">
									Téléphone
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="tel" placeholder="Téléphone" maxlength="10" minlength="10">
								</div>
							</div>

							<div class="col-md-4">
								<!-- Email -->
								<span class="txt9">
									Email
								</span>

								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="mail" placeholder="Email">
								</div>
							</div>

						</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
								Réserver
							</button>
						</div>
					</form>
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

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



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
	<script src="../js/main.js"></script>

</body>
</html>
