<?php
    
    require_once'db.php';
    
    if (isset($_GET['idClient']))
    {
        $idB = $_GET['idClient'];
        
        $req ='DELETE FROM clients WHERE idClient = '.$idB.';';
        
        $statement = getPdo()->prepare($req);
        $statement->execute();
        
        echo "Bien vu l'aveugle !";
        
    }
    else
    {
        echo "Ratééééééééééééééééé !";
    }
