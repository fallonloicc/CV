<?php
	include('header.php');
 ?>

	<div class="wrap-slick1">
		<div class="slick1">
			<div class="item-slick1 item1-slick1" style="background-image: url(images/master-slide-01.jpg);">
				<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
						ChopTaPhoto
					</h2>

					<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="fadeInDown">
						Nos Belles Bornes
					</span>

					<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
						<!-- Button -->
						<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
							Achète
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">
					Nos Produits
				</h3>
			</div>

			<!-- Tab01 -->
			<div class="tab01">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Bornes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#sale" role="tab">Consommables</a>
					</li>
<!-- 					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#top-rate" role="tab">Top Rate</a>
					</li> -->
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-35">
					<!-- - -->
					<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
						<div class="row">
							<?php

									$req ='SELECT * FROM bornes';
									$oui = $bdd->query($req);
									$i = 0;

									while($requete = $oui->fetch())
									{
										if ($i <= 3)
										{
												echo '
												<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
												<!-- Block2 --> <div class="block2">

												<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
												<img src="'.$requete->image.'" alt="IMG-PRODUCT">
												<div class="block2-overlay trans-0-4">
												<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
												</a> </div> </div> <div class="block2-txt p-t-20">
												<div class="block2-name dis-block s-text3 p-b-5"> '.$requete->libelle.' </div>
												</div>
												</div>
												</div>

												';
												$i++;
											}
										}

										?>
						</div>
					</div>

					<!--  -->
					<div class="tab-pane fade" id="sale" role="tabpanel">
						<div class="row">

							<?php

									$req ='SELECT * FROM consommables';
									$oui = $bdd->query($req);

									$i = 0;

									while($requete = $oui->fetch())
									{
										if ($i <=3)
										{


										echo '
										<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
										<!-- Block2 --> <div class="block2">

										<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="'.$requete->image.'" alt="IMG-PRODUCT">
										<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a> </div> </div> <div class="block2-txt p-t-20">
										<div class="block2-name dis-block s-text3 p-b-5"> '.$requete->libelle.' </div>
										</div>
										</div>
										</div>

										';

										$i++;
									}
								}

										?>


						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Banner video -->
	<section class="parallax0 parallax100" style="background-image: url(images/bg-video-01.jpg);">
		<div class="overlay0 p-t-190 p-b-200">
			<div class="flex-col-c-m p-l-15 p-r-15">

				<span class="btn-play s-text4 hov5 cs-pointer p-t-25 m-text9 p-t-45 fs-20-sm" data-toggle="modal" data-target="#modal-video-01">
					<i class="fa fa-play" aria-hidden="true"></i>
					Play Video
				</span>

			</div>
		</div>
	</section>

	<!-- Blog -->
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Nos Fournisseurs
				</h3>
			</div>

			<div class="row">
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<div class="block3-img dis-block hov-img-zoom">
							<img src="images/blog-01.jpg" alt="IMG-BLOG">
						</div>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="https://store.canon.fr/" class="m-text11">
									Canon
								</a>
							</h4>

							<p class="s-text8 p-t-16">
								Nous fournis en appareil photos, parce que Canon c'est bon.
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<div class="block3-img dis-block hov-img-zoom">
							<img src="images/blog-02.jpg" alt="IMG-BLOG">
						</div>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="https://www.clairefontaine.com/" class="m-text11">
									Clairefontaine
								</a>
							</h4>

							<p class="s-text8 p-t-16">
								Clairefontaine c'est vraiment du bon papier.
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<div class="block3-img dis-block hov-img-zoom">
							<img src="images/blog-03.jpg" alt="IMG-BLOG">
						</div>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="https://www.epson.fr/" class="m-text11">
									Epson
								</a>
							</h4>

							<p class="s-text8 p-t-16">
								Nous fournis en bonne imprimante. Elles impriment mieux que les autres.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <?php include('footer.php') ?>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/xxnP0KJ-RWg?ecver=2"	 width="640" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
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
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
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
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
