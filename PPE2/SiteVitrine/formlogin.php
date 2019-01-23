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

	<?php
include ('params/db.php');

if(isset($_POST['user'])&& isset($_POST['passwd'])){
	//echo "republique!   check" . "<br>";
	$login = addslashes($_POST['user']);
	$passwd = md5($_POST['passwd']);
	$reqUsr = 'SELECT * FROM clients WHERE email LIKE "'. $login.'"';
	if ($recupUsr = $bdd->query($reqUsr))
	{
		if($usr = $recupUsr->fetch())
		{
			if($usr->passwd == $passwd)
			{
				//echo "BIENVENUE DANS L'AUBERGE ! ";
				$_SESSION['email'] = $usr->email ;
				$_SESSION['nom'] =$usr->nom ;
				$_SESSION['prenom'] = $usr->prenom;
			}
			else
			{
				echo " FAKE PASSWORD !! ";
			}
		}
		else
		{
			echo "mauvais login ou password";
		}
	}
	else
	{
		echo "  erreur dans la requete";
	}
}
else
{
}

if (isset($_POST['nom'], $_POST['prenom'], $_POST['passwd'], $_POST['email'], $_POST['tel'], $_POST['cp'], $_POST['ville'], $_POST['adresse'])) {

			$nom = addslashes($_POST['nom']);
			$prenom = addslashes($_POST['prenom']);
			$passwd = md5($_POST['passwd']);
			$email = addslashes($_POST['email']);
			$tel = addslashes($_POST['tel']);
			$cp = addslashes($_POST['cp']);
			$ville = addslashes($_POST['ville']);
			$adresse = addslashes($_POST['adresse']);

			if ($_POST['siret'] != "")
			{
					$siret = addslashes($_POST['siret']);
					$req = 'INSERT INTO clients (nom, prenom, passwd, email, tel, cp, ville, adresse, siret)
					VALUES ("' . $nom . '", "' . $prenom . '", "' . $passwd . '", "' . $email . '","' . $tel . '","'. $cp.'","'. $ville.'", "'. $adresse.'", "'.$siret.'")';

			}
			else
			{

					$req = 'INSERT INTO clients (nom, prenom, passwd, email, tel, cp, ville, adresse)
					VALUES ("' . $nom . '", "' . $prenom . '", "' . $passwd . '", "' . $email . '","' . $tel . '","'. $cp.'","'. $ville.'", "'. $adresse.'")';

			}
			$insertUsr = $bdd->query($req);
		}
?>


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Connexion.
					</span>
				</div>

				<form class="login100-form validate-form" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Entrez un email valide">
						<span class="label-input100">E-mail</span>
						<input class="input100" type="email" name="user" placeholder="Entrez votre email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Mot de passe requis">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="passwd" placeholder="Entrez mot de passe">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div>
							<a href="Inscription.php" class="txt1">
								Inscrivez-vous ici.
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" name="sub" value="CONNEXION">
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

</body>
</html>