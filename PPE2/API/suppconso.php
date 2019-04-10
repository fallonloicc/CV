<?php
    include('db.php');
    
    if (isset($_POST['idConsommables']))
    {
        $idC = $_POST['idConsommables'];
        
        $req ='DELETE FROM consommables WHERE "idConsosommables" = "'.$idB.'" ';
        $oui = $bdd->query($req);
    }
    
