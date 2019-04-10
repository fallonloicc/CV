<?php
include_once "db.php";
include_once "utils.php";
    
    
    if(isset($_GET['prix'])&& isset($_GET['libelle'])&& isset($_GET['adresseMac'])&& isset($_GET['adresseIp'])&& isset($_GET['urlImage']))
    {
        $prix = $_GET['prix'];
        $libelle = $_GET['libelle'];
        $Mac = $_GET['adresseMac'];
        $Ip = $_GET['adresseIp'];
        $url = $_GET['urlImage'];
        
        $req ='INSERT INTO bornes (prix, libelle, adresseMac, adresseIp, image) VALUES ("'.$prix.'","'.$libelle.'", "'.$Mac.'", "'.$Ip.'", "'.$url.'")';
        
        $statement = getPdo()->prepare($req);
        $statement->execute();

        
        echo "Ajout réussi";
        exit();
    }
    if(isset($_GET['prix'])&& isset($_GET['libelle'])&& isset($_GET['adresseMac'])&& isset($_GET['adresseIp']))
    {
        $prix = $_GET['prix'];
        $libelle = $_GET['libelle'];
        $Mac = $_GET['adresseMac'];
        $Ip = $_GET['adresseIp'];
        
        $req ='INSERT INTO bornes (prix, libelle, adresseMac, adresseIp) VALUES ("'.$prix.'","'.$libelle.'", "'.$Mac.'", "'.$Ip.'")';
        
        $statement = getPdo()->prepare($req);
        $statement->execute();
        
        
        echo "Ajout réussi";
        exit();
    }
    else
    {
        echo "Problème chef";
    }