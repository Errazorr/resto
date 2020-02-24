<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Menu</title>
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
						<a href="../index.html">
							<img src="../images/icons/logo.png" alt="IMG-LOGO" data-logofixed="../images/icons/logo2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="../index.html">Home</a>
								</li>

								<li>
									<a href="menu.html">Menu</a>
								</li>

								<li>
									<a href="gallery.html">Gallerie</a>
								</li>

								<li>
									<a href="about.html">A propos</a>
								</li>

								<li>
									<a href="contact.html">Contact</a>
								</li>

								<?php
														if (isset($_SESSION['identifiant'])) {
															echo '<li>
																<a href="../index.html">Déconnexion</a>
															</li>

															<li>
																<a href="inscription.html<li class="t-center m-b-13">">Données</a>
															</li>';
														}

														else {
															echo '<li>
																<a href="View/connexion.html">Connexion</a>
															</li>

															<li>
																<a href="View/inscription.html">S\'inscrire</a>
															</li>';
														}

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
				<a href="../index.html" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="menu.html" class="txt19">Menu</a>
			</li>

			<li class="t-center m-b-13">
				<a href="gallery.html" class="txt19">Gallerie</a>
			</li>

			<li class="t-center m-b-13">
				<a href="about.html" class="txt19">A propos</a>
			</li>

			<li class="t-center m-b-13">
				<a href="contact.html" class="txt19">Contact</a>
			</li>

			<?php
									if (isset($_SESSION['identifiant'])) {
										echo '<li class="t-center m-b-13">
											<a href="../index.html">Déconnexion</a>
										</li>

										<li class="t-center m-b-13">
											<a href="inscription.html">Données</a>
										</li>';
									}

									else {
										echo '<li class="t-center m-b-13">
											<a href="View/connexion.html" class="txt19">Connexion</a>
										</li>

										<li class="t-center m-b-13">
											<a href="View/inscription.html" class="txt19">S\'inscrire</a>
										</li>';
									}

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
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(../images/bg-title-page-01.jpg);">
		<h2 class="tit6 t-center">
			Notre Menu
		</h2>
	</section>


	<!-- Main menu -->
	<section class="section-mainmenu p-t-110 p-b-70 bg1-pattern">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Entrées
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Salade de betterave
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									9,99€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Millefueille d'aubergines au chèvre
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									8,99€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Velouté de tomates
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									9,99€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Galettes de crabe
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									11,99€
								</div>
							</div>
						</div>
					</div>

					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Boissons/Alcools
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Eau
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									1,00€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Coca-Cola
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									3,50€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Ice Tea
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									3,50€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Jus de pomme
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									2,50€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Vin rouge
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									15,00€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Bière
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									2,50€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Jack Daniels
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									25,00€
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-10 col-lg-6 p-l-35 p-l-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Plats
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Magret de canard, sauce à l'orange
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									19,99€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Steak haché et frites
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									14,99€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Echine de porc braisée
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									17,99€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Tartare de boeuf
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									14,99€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Plateau de fruits de mer
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									19,99€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Assiette végétarienne
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									14,99€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Escalope de volaille, sauce forestière
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									17,99€
								</div>
							</div>
						</div>
					</div>

					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Desserts
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Mousse au chocolat
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									8,99€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Ile flottante
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									9,99€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Salade de fruits
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									7,99€
								</div>
							</div>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a href="#" class="name-item-mainmenu txt21">
									Tiramisu
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									8,99€
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Lunch -->
	<section class="section-lunch bgwhite">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(../images/header-menu-01.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Menu complets
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="../images/lunch-01.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Menu Japonais
							</a>

							<span class="txt23">
								Bol de Ramen ou Sushis et Makis en plat, Boisson au choix (sauf alcool), Dessert au choix
							</span>

							<span class="txt22 m-t-20">
								19,99€
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="../images/lunch-03.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Menu Italien
							</a>

							<span class="txt23">
								Salade Caesar en entrée, Pizza ou Tagliatelles ou Plateau de fruits de mer en plat, Boisson au choix (sauf alcool), Dessert au choix
							</span>

							<span class="txt22 m-t-20">
								29,99€
							</span>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="../images/lunch-02.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Menu Américain
							</a>

							<span class="txt23">
								Burger au choix ou Hot-Dog en plat, Boisson au choix (sauf alcool), Dessert au choix
							</span>

							<span class="txt22 m-t-20">
								9,99€
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="../images/lunch-04.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Menu Français
							</a>

							<span class="txt23">
								Fois gras ou salade composée en entrée, Steak haché et frites ou Blanquette de veau ou Emincé de poulet à la moutarde en plat, Boisson au choix (sauf alcool), Dessert au choix
							</span>

							<span class="txt22 m-t-20">
								12,99€
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Dinner -->
	<section class="section-dinner bgwhite">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(../images/header-menu-02.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Diner
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="../images/dinner-01.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Raclette
							</a>

							<span class="txt23">
								Fromage nature ou au poivre, plateau de charcuterie, pommes de terre
							</span>

							<span class="txt22 m-t-20">
								14,99€
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="../images/dinner-03.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Pizza
							</a>

							<span class="txt23">
								4 fromages, Reine, Regina, Calzone, 3 jambons, Végétarienne (2 taille normale ou 1 taille familiale)
							</span>

							<span class="txt22 m-t-20">
								14,99€
							</span>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="../images/dinner-02.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Fondue
							</a>

							<span class="txt23">
								Savoyarde ou Bourguigonne
							</span>

							<span class="txt22 m-t-20">
								9,99€
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="../images/dinner-04.jpg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								Paella
							</a>

							<span class="txt23">
								Ris, Crevettes, Poulet, Huitres, Poivrons
							</span>

							<span class="txt22 m-t-20">
								17,99€
							</span>
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
	<script src="../js/main.js"></script>

</body>
</html>
