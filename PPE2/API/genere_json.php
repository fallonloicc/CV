<?php
    
    include('db.php');
    
    
    $req ='SELECT * FROM bornes';
    $oui = $bdd->query($req);
    $borne = array();
    
        while($requete = $oui->fetch())
        {
            $newborne= array("Libelle:"=> $requete->libelle,"Prix:" =>$requete->prix."€");
            array_push($borne, $newborne);
        }
    
    header('Content-type: application/json');
    
    echo json_encode($borne);