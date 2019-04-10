<?php
    
    require_once'db.php';
    
    if (isset($_GET['idBorne']))
    {
        $idB = $_GET['idBorne'];
        
        $req ='DELETE FROM bornes WHERE idBornes = '.$idB.'';
        
        $statement = getPdo()->prepare($req);
        $statement->execute();
        
        echo "Bien vu l'aveugle !";

    }
    else
    {
        echo "Ratééééééééééééééééé !";
    }
    
