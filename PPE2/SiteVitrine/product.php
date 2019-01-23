<?php
session_start();
include('header.php');
?>

	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
		<h2 class="l-text2 t-center">
			Produits
		</h2>
		<p class="m-text13 t-center">
			Bornes & co
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Catégories
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="product.php" class="s-text13">
									All
								</a>
							</li>

							<li class="p-t-4">
								<a href="product.php?conso=1" class="s-text13">
									Bornes
								</a>
							</li>

							<li class="p-t-4">
								<a href="product.php?conso=2" class="s-text13">
									Consommables
								</a>
							</li>
						</ul>

						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Cherchez vos produits...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">

					<!-- Product -->
					<div class="row">

						<?php
							error_reporting(0);
							include('params/db.php');
							$conso = $_GET['conso'];

		            $req ='SELECT * FROM bornes';
		            $oui = $bdd->query($req);


								if ($conso !=2)
								{

			            while($requete = $oui->fetch())
			            {
			              echo '
															<div class="col-sm-12 col-md-6 col-lg-4 p-b-50" class="borne">
																<!-- Block2 -->
																<div class="block2">
																	<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
																		<img src="'.$requete->image.'" alt="IMG-PRODUCT">

																		<div class="block2-overlay trans-0-4">
																			<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
																				<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
																				<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
																			</a>

																			<div class="block2-btn-addcart w-size1 trans-0-4">
																				<!-- Button -->
																				<a href="cart.php?action=ajout&amp;l='.$requete->libelle.'&amp;q=1&amp;p='.$requete->prix.'"><input type="button" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" value="Ajouter"></a>
																				<a href="product-detail.php?id='.$requete->idBornes.'&type=1"><input type="button" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" value="Description"></a>
																			</div>
																		</div>
																	</div>

																	<div class="block2-txt p-t-20">
																		<div class="block2-name dis-block s-text3 p-b-5">
																			'.$requete->libelle.'
																		</div>

																		<span class="block2-price m-text6 p-r-5">
																			'.$requete->prix.'€
																		</span>
																	</div>
																</div>
															</div>
															';
								   }
							 	}
								 ?>
						 <!-- </span>
						 <span id="conso"> -->

							 <?php

							if ($conso !=1)
							{

								$req ='SELECT * FROM consommables';
	 	            $oui = $bdd->query($req);

	 	            while($requete = $oui->fetch())
	 	            {
	 	              echo '
	 													<div class="col-sm-12 col-md-6 col-lg-4 p-b-50" class="conso">
	 														<!-- Block2 -->
	 														<div class="block2">
	 															<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
	 																<img src="'.$requete->image.'" alt="IMG-PRODUCT">

	 																<div class="block2-overlay trans-0-4">
	 																	<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
	 																		<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
	 																		<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
	 																	</a>

	 																	<div class="block2-btn-addcart w-size1 trans-0-4">
	 																		<!-- Button -->
	 																		<a href="cart.php?action=ajout&amp;l='.$requete->libelle.'&amp;q=1&amp;p='.$requete->prix.'"><input type="button" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" value="Ajouter"></a>
																			<a href="product-detail.php?id='.$requete->idConsosommables.'&type=2"><input type="button" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" value="Description"></a>
	 																	</div>
	 																</div>
	 															</div>

	 															<div class="block2-txt p-t-20">
	 																<div class="block2-name dis-block s-text3 p-b-5">
	 																	'.$requete->libelle.'
	 																</div>

	 																<span class="block2-price m-text6 p-r-5">
	 																	'.$requete->prix.'€
	 																</span>
	 															</div>
	 														</div>
	 													</div>
	 													';
	 						   }
							 }
						   ?>
						 <!-- </span> -->
					</div>
				</div>
			</div>
		</div>
		</section>


		<!-- Footer -->
		<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
			<div class="flex-w p-b-90">
				<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
					<h4 class="s-text12 p-b-30">
						Nous Contacter
					</h4>

					<div>
						<p class="s-text7 w-size27">
							25 Boulevard Faidherbe - 06 10 82 53 81
						</p>

						<div class="flex-m p-t-30">
							<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
							<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
						</div>
					</div>
				</div>

				<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
					<h4 class="s-text12 p-b-30">
						Catégories
					</h4>

					<ul>
						<li class="p-b-9">
							<a href="product.php" class="s-text7">
								All
							</a>
						</li>

						<li class="p-b-9">
							<a href="product.php?conso=1" class="s-text7">
								Bornes
							</a>
						</li>

						<li class="p-b-9">
							<a href="product.php?conso=2" class="s-text7">
								Consommables
							</a>
						</li>
					</ul>
				</div>

				<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
					<h4 class="s-text12 p-b-30">
						Liens
					</h4>

					<ul>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								A propos
							</a>
						</li>

						<li class="p-b-9">
							<a href="#" class="s-text7">
								Contactez-nous
							</a>
						</li>
					</ul>
				</div>

				<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
					<h4 class="s-text12 p-b-30">
						Aide
					</h4>

					<ul>
						<li class="p-b-9">
							<a href="#" class="s-text7">
								Besoin d'aide ?
							</a>
						</li>

						<li class="p-b-9">
							<a href="#" class="s-text7">
								Un problème ?
							</a>
						</li>
					</ul>
				</div>

				<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
					<h4 class="s-text12 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="effect1 w-size9">
							<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
							<span class="effect1-line"></span>
						</div>

						<div class="w-size2 p-t-20">
							<!-- Button -->
							<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
								Subscribe
							</button>
						</div>

					</form>
				</div>
			</div>

			<div class="t-center p-l-15 p-r-15">
				<a href="#">
					<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
				</a>

				<a href="#">
					<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
				</a>

				<a href="#">
					<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
				</a>

				<a href="#">
					<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
				</a>

				<a href="#">
					<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
				</a>

				<div class="t-center s-text8 p-t-20">
					Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
				</div>
			</div>
		</footer>



		<!-- Back to top -->
		<div class="btn-back-to-top bg0-hov" id="myBtn">
			<span class="symbol-btn-back-to-top">
				<i class="fa fa-angle-double-up" aria-hidden="true"></i>
			</span>
		</div>

		<!-- Container Selection -->
		<div id="dropDownSelect1"></div>
		<div id="dropDownSelect2"></div>



		<!--===============================================================================================-->
		<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
		<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
		<script type="text/javascript">
			$(".selection-1").select2({
				minimumResultsForSearch: 20,
				dropdownParent: $('#dropDownSelect1')
			});

			$(".selection-2").select2({
				minimumResultsForSearch: 20,
				dropdownParent: $('#dropDownSelect2')
			});
		</script>
		<!--===============================================================================================-->
		<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
		<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
		<script type="text/javascript" src="js/slick-custom.js"></script>
		<!--===============================================================================================-->
		<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
		<script type="text/javascript">
			$('.block2-btn-addcart').each(function(){
				var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
				$(this).on('click', function(){
					swal(nameProduct, "is added to cart !", "success");
				});
			});

			$('.block2-btn-addwishlist').each(function(){
				var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
				$(this).on('click', function(){
					swal(nameProduct, "is added to wishlist !", "success");
				});
			});
		</script>

		<!--===============================================================================================-->
		<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
		<script type="text/javascript">
		/*[ No ui ]
		===========================================================*/
		var filterBar = document.getElementById('filter-bar');

		noUiSlider.create(filterBar, {
			start: [ 50, 200 ],
			connect: true,
			range: {
				'min': 50,
				'max': 200
			}
		});

		var skipValues = [
		document.getElementById('value-lower'),
		document.getElementById('value-upper')
		];

		filterBar.noUiSlider.on('update', function( values, handle ) {
			skipValues[handle].innerHTML = Math.round(values[handle]) ;
		});
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
