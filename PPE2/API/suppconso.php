<?php
    
    require_once'db.php';
    
    if (isset($_GET['idConso']))
    {
        $idB = $_GET['idConso'];
        
        $req ='DELETE FROM consommables WHERE idConsosommables = '.$idB.';';
        
        $statement = getPdo()->prepare($req);
        $statement->execute();
        
        echo "Bien vu l'aveugle !";
        
    }
    else
    {
        echo "Ratééééééééééééééééé !";
    }
    
