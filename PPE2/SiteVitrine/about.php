<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<?php
	include('header.php');
?>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
		<h2 class="l-text2 t-center">
			A propos
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="images/banner-13.jpg" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Notre Histoire
					</h3>

					<p class="p-b-28">
						Phasellus egestas nisi nisi, lobortis ultricies risus semper nec. Vestibulum pharetra ac ante ut pellentesque. Curabitur fringilla dolor quis lorem accumsan, vitae molestie urna dapibus. Pellentesque porta est ac neque bibendum viverra. Vivamus lobortis magna ut interdum laoreet. Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula. Vivamus tristique vulputate ultricies. Sed vitae ultrices orci.
					</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<h3><span class="dec-tec">“</span>Tu ne prends pas une photographie, tu la créée.<span class="dec-tec">”<br>
							<span class="s-text7">
								- ADAM WARLOCK.
							</span>
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
		<script src="js/main.js"></script>

	</body>
	</html>
