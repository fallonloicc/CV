<?php
session_start();
include('header.php');
?>
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
    <h2 class="l-text2 t-center">
        Panier
    </h2>
</section>
<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
    <?php
    include_once("panier/fonction_panier.php");
    include("params/db.php");
    $erreur = false;
    $action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
    if($action !== null)
    {
        if(!in_array($action,array('ajout', 'suppression', 'refresh')))
            $erreur=true;
        //récuperation des variables en POST ou GET
        $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
        $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
        $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;
        //Suppression des espaces verticaux
        $l = preg_replace('#\v#', '',$l);
        //On verifie que $p soit un float
        $p = floatval($p);
        //On traite $q qui peut etre un entier simple ou un tableau d'entier
        if (is_array($q)){
            $QteArticle = array();
            $i=0;
            foreach ($q as $contenu){
                $QteArticle[$i++] = intval($contenu);
            }
        }
        else
            $q = intval($q);
    }
    if (!$erreur){
        switch($action){
            Case "ajout":
                ajouterArticle($l,$q,$p);
                break;
            Case "suppression":
                supprimerArticle($l);
                break;
            Case "refresh" :
                for ($i = 0 ; $i < count($QteArticle) ; $i++)
                {
                    modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
                }
                break;
            Default:
                break;
        }
    }
    ?>
    <div class='container'>
        <?php
        if (creationPanier())
        {
            $nbArticles=count($_SESSION['panier']['libelleProduit']);
            if ($nbArticles <= 0)
            {
                echo "<tr class='table-head'><td style='padding-left: 15px;'>Votre panier est vide </td>";
                echo "<a href='product.php'><input type='button' class='flex-c-m bg1 bo-rad-23 hov1 s-text1 trans-0-4' style='padding: 0 15px 0 15px; margin: 5% 0 0 0;' value='Achetez-ici'></a>";
            }
            else
            {
                echo '<div class="container-table-cart pos-relative">';
                echo '<div class="wrap-table-shopping-cart bgwhite">';
                echo '<form method="post" action="cart.php">';
                echo '<table class="table-shopping-cart">';
                echo '<tr class="table-head">';
                echo '<th class="column-1"></th>';
                echo '<th class="column-2">Libellé</th>';
                echo '<th  class="column-2">Quantité</th>';
                echo '<th class="column-3">Prix Unitaire</th>';
                echo '<th class="column-5">Action</th>';
                echo '<th class="column-1"></th>';
                echo '</tr>';
                for ($i=0 ;$i < $nbArticles ; $i++)
                {
                    echo "<tr class='table-row'>";
                    echo "<td class='column-1'></td>";
                    echo "<td class='column-2'>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</td>";
                    echo "<td class='column-3'><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
                    echo "<td class='column-4'>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
                    echo "<td class='column-5'><a href=\"".htmlspecialchars("cart.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\"><i class='fa fa-times'></i></a></td>";
                    echo '<th class="column-1"></th>';
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
                echo "</div>";
                echo "<input type=\"submit\" class='flex-c-m bg1 bo-rad-23 hov1 s-text1 trans-0-4' style='padding: 0 58px 0 58px;  margin: 2% 0 1% 0;' value=\"Rafraichir\"/>";
                echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";
                echo "<a href='product.php'><input type='button' class='flex-c-m bg1 bo-rad-23 hov1 s-text1 trans-0-4' style=' padding: 0 15px 0 15px;' value='Revenir à vos achats'></a>";
                echo '<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">';
                echo '<div class="flex-w flex-sb-m p-t-26 p-b-30">';
                echo "<label for='event-select'><b>Choisir l'évènement prévu :</b></label><select id='event-select'>";
                $req ='SELECT * FROM evenement';
                $oui = $bdd->query($req);
                while($requete = $oui->fetch())
                {
                    echo "<option value='".$requete->libelle."'>".$requete->libelle."</option>";
                }
                echo "</select>";
                echo "<tr><td colspan=\"4\">";
                echo "</td></tr></br>";
                echo '<span class="m-text22 w-size19 w-full-sm"> Total : </span>';
                echo "<span class='m-text22 w-size19 w-full-sm' id='total'>".MontantGlobal()." €</span>";
                echo"<div style='margin: 10% 25% 0 25% ;' id='paypal-button-container'></div>";
            }
            echo "</table>";
            echo "</div>";
        }
        ?>
        </form>
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
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
    // Render the PayPal button
    paypal.Button.render({
// Set your environment
        env: 'sandbox', // sandbox | production
// Specify the style of the button
        style: {
            layout: 'vertical',  // horizontal | vertical
            size:   'responsive',    // medium | large | responsive
            shape:  'rect',      // pill | rect
            color:  'gold'       // gold | blue | silver | white | black
        },
// Specify allowed and disallowed funding sources
//
// Options:
// - paypal.FUNDING.CARD
// - paypal.FUNDING.CREDIT
// - paypal.FUNDING.ELV
        funding: {
            allowed: [
                paypal.FUNDING.CARD,
                paypal.FUNDING.CREDIT
            ],
            disallowed: []
        },
// Enable Pay Now checkout flow (optional)
        commit: true,
// PayPal Client IDs - replace with your own
// Create a PayPal app: https://developer.paypal.com/developer/applications/create
        client: {
            sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
            production: '<insert production client id>'
        },
        payment: function (data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: {
                                total: '<?php echo MontantGlobal(); ?>',
                                currency: 'EUR'
                            }
                        }
                    ]
                }
            });
        },
        onAuthorize: function (data, actions) {
            return actions.payment.execute()
                .then(function () {
                    window.alert('Payment Complete!');
                });
        }
    }, '#paypal-button-container');
</script>

</body>
</html>