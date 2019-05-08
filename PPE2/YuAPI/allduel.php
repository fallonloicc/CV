<?php
    include_once "db.php";
    
    function getAllDuel()
    {
        $statement = getPdo()->prepare("SELECT * FROM duel");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
    header('Content-type: application/json');
    $results = getAllDuel();
    $json = json_encode($results);
    
    echo $json;