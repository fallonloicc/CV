<?php
  include('db.php');

  $choix = $_POST['choix'];
  $nombre = $_POST['nombre'];

<<<<<<< HEAD
  $req ='SELECT stock FROM consommables WHERE idConsosommables LIKE "'.$choix.'"';
  $obj = $bdd->query($req);

  $sort = $obj->fetch();
  $yep = $nombre + $sort->stock;

  echo $yep;
  if ( $yep >= 0)
  {
    $requete = 'UPDATE consommables SET stock ="'.$yep.'" WHERE idConsosommables ="'.$choix.'"';
    $objet = $bdd->query($requete);
  }
  else
  {
    $requete = 'UPDATE consommables SET stock ="0" WHERE idConsosommables ="'.$choix.'"';
    $objet = $bdd->query($requete);
  }

  ?>
  <script>
  					setTimeout(function()
  					{
  					document.location.href="/PPE2/PPE2/test.php";
  					},1250);
  </script>
=======
  $req ='SELECT stock FROM consommables WHERE idConsosommables LIKE '.$choix.'';
  $oui = $bdd->query($req);

  $non = $oui->fetch();
  $yep = $non->stock + $nombre;
  echo $yep;

 ?>
>>>>>>> Loïck
