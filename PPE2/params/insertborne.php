<?php
  include('db.php');

  if (isset($_POST['prix'], $_POST['libelle'], $_POST['mac'], $_POST['ip']))
  {
    $prix = $_POST['prix'];
    $libelle = $_POST['libelle'];
    $mac = $_POST['mac'];
    $ip = $_POST['ip'];
    $requete = 'INSERT INTO `bornes` ( `prix`, `libelle`, `adresseMac`, `adresseIP`) VALUES ( '.$prix.' , "'.$libelle.'", "'.$mac.'", "'.$ip.'")';

    $bdd->query($requete);
  }

?>

<script>
					setTimeout(function()
					{
					document.location.href="/PPE2/PPE2/test.php";
					},1250);
</script>
