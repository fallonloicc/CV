<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
	<link rel="stylesheet" type="text/css" href="css/util-index.css">
	<link rel="stylesheet" type="text/css" href="css/main-index.css">
	<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form id="theform" name="formulaire" action="index.php" method="POST" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Nom requis">
						<span class="label-input100">Nom</span>
						<input class="input100" type="text" name="nom" placeholder="Entrez nom">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Prénom requis">
						<span class="label-input100">Prénom</span>
						<input class="input100" type="text" name="prenom" placeholder="Entrez prénom">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email requis">
						<span class="label-input100">E-mail</span>
						<input class="input100" type="email" name="email" placeholder="Entrez votre email">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Mot de passe requis">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" id="passwd" type="Password" name="passwd" placeholder="Entrez un mot de passe" value="">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Confirmation requise">
						<span class="label-input100">Confirmation mot de passe</span>
						<input class="input100" id="passwd2" type="Password" name="confpasswd" placeholder="Confirmez votre mot de passe" value="">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Numéro de téléphone requis">
						<span class="label-input100">Téléphone</span>
						<input class="input100" id="number" type="number" name="tel" placeholder="Entrez votre numéro de téléphone">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Code postal requis">
						<span class="label-input100">Code Postal</span>
						<input class="input100" type="text" name="cp" placeholder="Entrez votre code postal">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Ville requise">
						<span class="label-input100">Ville</span>
						<input class="input100" type="text" name="ville" placeholder="Entrez votre ville">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Adresse requise">
						<span class="label-input100">Adresse</span>
						<input class="input100" type="text" name="adresse" placeholder="Entrez votre adresse">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 m-b-26">
						<span class="label-input100">Siret</span>
						<input class="input100" type="text" name="siret" placeholder="Entrez un siret">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div>
							<a href="formlogin.php" class="txt1">
								Connectez-vous ici.
							</a>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" name="sub" value="INSCRIPTION" onclick="checkForm()">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script type="text/javascript">
		function checkForm(){
			if(document.getElementById('passwd').value=="" || document.getElementById('passwd2').value ==""){

			}else{
				if(document.getElementById('passwd').value != document.getElementById('passwd2').value){
					alert("Login ou Password incorrect");
					return false;
				}else
				{
					return;
				}
			}
		$("#number").keypress(function() {
			if(this.value.length != 9) {
				this.value=[];
			};
		});
		}

	</script>
</body>
</html>
