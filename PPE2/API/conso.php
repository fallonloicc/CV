<?php
    
    include('db.php');
    
    $req = 'SELECT validation FROM clients';
    $oui = $bdd->query($req);
    while($requete = $oui->fetch())
    {
        if (!isset($requete->validation))
        {
        
        }
    }
    
    
    $req ='SELECT * FROM consommables';
    $oui = $bdd->query($req);
    $conso = array();
    
    while($requete = $oui->fetch())
    {
        $newborne= array("Libelle:"=> $requete->libelle,"Prix:" =>$requete->prix."€");
        array_push($conso, $newborne);
    }
    
    header('Content-type: application/json');
    
    echo json_encode($conso);