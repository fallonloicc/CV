<?php
session_start();
include('header.php');
include('params/db.php');

$id = $_GET['id'];
$type =$_GET['type'];

if ($type == "1") {
	$req ='SELECT * FROM bornes WHERE idBornes LIKE '.$id.';';
}
if ($type == "2") {
	$req ='SELECT * FROM consommables WHERE idConsosommables LIKE '.$id.';';
}
$oui = $bdd->query($req);
$requete = $oui->fetch();
?>

<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
	<div class="flex-w flex-sb">
		<div class="w-size13 p-t-30 respon5">
			<div class="wrap-slick3 flex-sb flex-w">
				<div class="wrap-slick3-dots"></div>

				<div class="wrap-pic-w">
					<img src="<?php echo $requete->image; ?>" alt="IMG-PRODUCT">
				</div>
			</div>
		</div>

		<div class="w-size14 p-t-30 respon5">
			<h4 class="product-detail-name m-text16 p-b-13">
				<?php echo $requete->libelle; ?>
			</h4>

			<span class="m-text17">
				<?php echo $requete->prix."€"; ?>
			</span>

			<!--  -->
			<div class="p-t-33 p-b-60">
				<div class="flex-r-m flex-w p-t-10">
					<div class="w-size16 flex-m flex-w">

						<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
							<!-- Button -->
							<button id="ajoutbtn" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Ajouter au panier
							</button>
						</div>
					</div>
				</div>
			</div>

			<!--  -->
			<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
				<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
					Description
					<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
					<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
				</h5>

				<div class="dropdown-content dis-none p-t-15 p-b-23">
					<p class="s-text8">
						Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
					</p>
				</div>
			</div>

			<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
				<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
					Additional information
					<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
					<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
				</h5>

				<div class="dropdown-content dis-none p-t-15 p-b-23">
					<p class="s-text8">
						Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
					</p>
				</div>
			</div>

			<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
				<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
					Reviews (0)
					<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
					<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
				</h5>

				<div class="dropdown-content dis-none p-t-15 p-b-23">
					<p class="s-text8">
						Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php') ?>

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
<script>

	$("#ajoutbtn").click(function(){
		var qte = $("#ajoutval").val();
		var go = "cart.php?action=ajout&l=<?php echo $requete->libelle ?>&q=1&p=<?php echo $requete->prix?>&date1=<?php echo $_GET['date1'] ?>&date2=<?php echo $_GET['date2']?>";
		document.location.href= go;
	});
</script>
</body>
</html>
