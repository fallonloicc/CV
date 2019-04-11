<?php
    include_once "db.php";
    include_once "utils.php";
    
    
    if(isset($_GET['nom'])&& isset($_GET['prenom'])&& isset($_GET['email'])&& isset($_GET['tel'])&& isset($_GET['cp'])&& isset($_GET['ville'])&& isset($_GET['siret'])&& isset($_GET['passwd'])&& isset($_GET['photoprofil']))
    {
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $email = $_GET['email'];
        $tel = $_GET['tel'];
        $cp = $_GET['cp'];
        $ville = $_GET['ville'];
        $siret = $_GET['siret'];
        $passwd = $_GET['passwd'];
        $photoprofil = $_GET['photoprofil'];
        
    
        $req ='INSERT INTO clients (nom, prenom, email, tel, cp, ville, siret, passwd, photoprofil) VALUES ("'.$nom.'","'.$prenom.'", "'.$email.'", "'.$tel.'", "'.$cp.'",, "'.$ville.'", "'.$siret.'", "'.$passwd.'", "'.$photoprofil.'")';
        
        $statement = getPdo()->prepare($req);
        $statement->execute();
        
        
        echo "Ajout réussi";
        exit();
    }
    if(isset($_GET['nom'])&& isset($_GET['prenom'])&& isset($_GET['email'])&& isset($_GET['tel'])&& isset($_GET['cp'])&& isset($_GET['ville'])&& isset($_GET['passwd']))
    {
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $email = $_GET['email'];
        $tel = $_GET['tel'];
        $cp = $_GET['cp'];
        $ville = $_GET['ville'];
        $passwd = $_GET['passwd'];
    
    
        $req ='INSERT INTO clients (nom, prenom, email, tel, cp, ville, passwd) VALUES ("'.$nom.'","'.$prenom.'", "'.$email.'", "'.$tel.'", "'.$cp.'",, "'.$ville.'", "'.$passwd.'")';
    
        $statement = getPdo()->prepare($req);
        $statement->execute();
        
        
        echo "Ajout réussi";
        exit();
    }
    else
    {
        echo "Problème chef";
    }