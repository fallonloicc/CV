<?php
    include_once "db.php";
    include_once "db_utils.php";
    
    
    header('Content-type: application/json');
    $results = getAllCommande();
    $json = json_encode($results);
    
    echo $json;