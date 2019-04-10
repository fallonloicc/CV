<?php
   
    include('db.php');
    
    
    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    
    
    $log = $_GET['login'];
    $mdp = md5($_GET['mdp']);
    
    if (!isset($log) && !isset($mdp))
    {
        $req ='SELECT * FROM clients WHERE email="'.$log.'"';
        $oui = $bdd->query($req);
        $requete = $oui->fetch();
    
        if ($requete->email == $log && $requete->passwd == $mdp)
        {
            echo "Vous êtes connecté !";
            
            $code = generateRandomString();
            
            $req = 'UPDATE clients SET validation ='.$code.' WHERE email='.$log.';';
            
            include('genere_json.php');
        }
        else
            echo "Veuillez vérifier vos identifiants";
    }
    else
        header('HTTP/1.1 401 Unauthorized', true, 401);
    