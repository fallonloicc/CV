<?php
    include_once "db.php";
    include_once "utils.php";
    
    
    if(isset($_GET['nom'])&& isset($_GET['prenom'])&& isset($_GET['adresse']) && isset($_GET['email'])&& isset($_GET['tel'])&& isset($_GET['cp'])&& isset($_GET['ville'])&& isset($_GET['siret'])&& isset($_GET['passwd']))
    {
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $email = $_GET['email'];
        $adresse = $_GET['adresse'];
        $tel = $_GET['tel'];
        $cp = $_GET['cp'];
        $ville = $_GET['ville'];
        $siret = $_GET['siret'];
        $passwd = $_GET['passwd'];
        
    
        $req ='INSERT INTO clients (nom, prenom, email, tel, cp, ville, adresse, siret, passwd) VALUES ("'.$nom.'","'.$prenom.'", "'.$email.'", "'.$tel.'", "'.$cp.'", "'.$ville.'","'.$adresse.'", "'.$siret.'", "'.$passwd.'")';
        
        $statement = getPdo()->prepare($req);
        $statement->execute();
        
        echo $req;
        echo "Ajout réussi";
        exit();
    }
    if(isset($_GET['nom'])&& isset($_GET['prenom'])&& isset($_GET['adresse'])&& isset($_GET['email'])&& isset($_GET['tel'])&& isset($_GET['cp'])&& isset($_GET['ville'])&& isset($_GET['passwd']))
    {
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $email = $_GET['email'];
        $adresse = $_GET['adresse'];
        $tel = $_GET['tel'];
        $cp = $_GET['cp'];
        $ville = $_GET['ville'];
        $passwd = $_GET['passwd'];
    
    
        $req ='INSERT INTO clients (nom, prenom, email, tel, cp, ville, adresse, passwd) VALUES ("'.$nom.'","'.$prenom.'", "'.$email.'", "'.$tel.'", "'.$cp.'", "'.$ville.'","'.$adresse.'", "'.$passwd.'")';
    
        $statement = getPdo()->prepare($req);
        $statement->execute();
    
        echo $req;
        echo "Ajout réussi";
        exit();
    }
    else
    {
        echo "Problème chef";
    }