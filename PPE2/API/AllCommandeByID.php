<?php
    include_once "db.php";
    include_once "db_utils.php";
    
    if (isset($_GET['idCommande']))
    {
        header('Content-type: application/json');
        $results = getAllCommandeById($_GET['idCommande']);
        $json = json_encode($results);
    }
    
    echo $json;
