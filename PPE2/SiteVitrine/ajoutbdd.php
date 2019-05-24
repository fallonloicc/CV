<?php
    
    function genererChaineAleatoire($longueur)
    {
        $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longueurMax = strlen($caracteres);
        $chaineAleatoire = '';
        for ($i = 0; $i < $longueur; $i++) {
            $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
        }
        return $chaineAleatoire;
    }
    
    $date = date("Y-m-d", time());
    $req = "INSERT INTO commande (dateCommande, debutDate, finDate, codeEvent) VALUES ('" . $date . "', '" . $_GET['date1'] . "', '" . $_GET['date2'] . "', '" . genererChaineAleatoire(4) . "')";
    echo $req;
    $oui = $bdd->query($req);
    ?>

    <p onload="f()">Retour sur votre compte</p>

    <script>
        function f() {
            var go = "account.php";
            document.href.location = go;
        }
        
    </script>
