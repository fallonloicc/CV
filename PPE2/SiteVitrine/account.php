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
        Compte
    </h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-38">
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-b-30">
                <div class="hov-img-zoom">
                    <img src="<?php include('params/db.php');

                    $req ='SELECT * FROM clients WHERE email ="'.$_SESSION["email"].'"';
                    $oui = $bdd->query($req);

                    while($requete = $oui->fetch())
                    {
                        echo $requete->photoprofil;
                    }
                    ?>" alt="IMG-ABOUT">
                </div>
            </div>

            <div class="col-md-8 p-b-30">
                <h3 class="m-text26 p-t-15 p-b-16">
                    Vos informations personnelles :
                </h3>

                <?php

                    include('params/db.php');

                    $req ='SELECT * FROM clients WHERE email ="'.$_SESSION["email"].'"';
                    $oui = $bdd->query($req);

                    while($requete = $oui->fetch())
                    {
                        echo "<p class=\'p-b-28\'><u>Prénom :</u> ".$requete->prenom."</p></br>
                              <p class=\'p-b-28\'><u>Nom :</u> ".$requete->nom."</p></br>
                              <p class=\'p-b-28\'><u>Tel :</u> ".$requete->tel."</p></br>
                              <p class=\'p-b-28\'><u>Adresse :</u> ".$requete->adresse."</p></br>
                              <p class=\'p-b-28\'><u>Ville :</u> ".$requete->ville."</p></br>
                              <p class=\'p-b-28\'><u>Code postal :</u> ".$requete->cp."</p></br>";
                    }

                ?>



                <h3 class="m-text26 p-t-15 p-b-16">
                    Vos commandes :
                </h3>

                <p class=\'p-b-28\'>Vous n'avez aucunes commandes !</p></br>

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