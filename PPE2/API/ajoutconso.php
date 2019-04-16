<?php
    include_once "db.php";
    include_once "utils.php";
    
    
    if(isset($_GET['prix'])&& isset($_GET['libelle'])&& isset($_GET['stock']))
    {
        $prix = $_GET['prix'];
        $libelle = $_GET['libelle'];
        $stock = $_GET['stock'];
        $desc = $_GET['desc'];
        
        $req ='INSERT INTO consommables (libelle, stock, description, prix) VALUES ("'.$libelle.'","'.$stock.'", "", "'.$prix.'")';
        
        $statement = getPdo()->prepare($req);
        $statement->execute();
        
        
        echo "Ajout réussi";
        exit();
    }
    else
    {
        echo "Raté chef !";
    }