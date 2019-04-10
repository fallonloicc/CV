<?php
include_once "db.php";
include_once "utils.php";
    
    
    if(isset($_POST['prix'])&& isset($_POST['libelle'])&& isset($_POST['stock'])&& isset($_POST['description']))
    {
        $prix = $_POST['prix'];
        $libelle = $_POST['libelle'];
        $stock = $_POST['stock'];
        $desc = $_POST['description'];
        
        $req ='INSERT INTO consommables (prix, libelle, stock, description) VALUES ("'.$prix.'","'.$libelle.'", "'.$stock.'", "'.$desc.'")';
        $oui = $bdd->query($req);
        
    }