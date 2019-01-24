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
?>

<?php
if (isset($_POST['nom'], $_POST['prenom'], $_POST['passwd'], $_POST['email'], $_POST['tel'], $_POST['cp'], $_POST['ville'], $_POST['adresse'])) {
	$nom = addslashes($_POST['nom']);
	$prenom = addslashes($_POST['prenom']);
	$passwd = md5($_POST['passwd']);
	$email = addslashes($_POST['email']);
	$tel = addslashes($_POST['tel']);
	$cp = addslashes($_POST['cp']);
	$ville = addslashes($_POST['ville']);
	$adresse = addslashes($_POST['adresse']);
	$siret = addslashes($_POST['siret']);
	$photo = $_POST['photo'];
	echo $photo;

	if ($siret != "")
	{
		if ($photo !="") {
			$req = 'INSERT INTO clients (nom, prenom, passwd, email, tel, cp, ville, adresse, siret, photoprofil)
			VALUES ("' . $nom . '", "' . $prenom . '", "' . $passwd . '", "' . $email . '","' . $tel . '","'. $cp.'","'. $ville.'", "'. $adresse.'", "'. $siret.'", "'.$photo.'")';
		}
		else
		{
			$req = 'INSERT INTO clients (nom, prenom, passwd, email, tel, cp, ville, adresse, siret)
			VALUES ("' . $nom . '", "' . $prenom . '", "' . $passwd . '", "' . $email . '","' . $tel . '","'. $cp.'","'. $ville.'", "'. $adresse.'", "'.$siret.'")';
		}

	}
	else
	{
		if ($photo !="")
		{
			$req = 'INSERT INTO clients (nom, prenom, passwd, email, tel, cp, ville, adresse, photoprofil)
			VALUES ("' . $nom . '", "' . $prenom . '", "' . $passwd . '", "' . $email . '","' . $tel . '","'. $cp.'","'. $ville.'", "'. $adresse.'", "'.$photo.'")';
		}
		else
		{
			$req = 'INSERT INTO clients (nom, prenom, passwd, email, tel, cp, ville, adresse)
			VALUES ("' . $nom . '", "' . $prenom . '", "' . $passwd . '", "' . $email . '","' . $tel . '","'. $cp.'","'. $ville.'", "'. $adresse.'")';
		}

	}


	if ($insertUsr = $bdd->query($req)) {
		echo "Inscription faite pour vous";
	}
	else
	{
	}
}
?>
