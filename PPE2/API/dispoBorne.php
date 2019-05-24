<?php
    include_once "db.php";
    include_once "db_utils.php";
    
    if (isset($_GET['dateDebut']) && isset($_GET['dateFin']))
    {
        $date1 = $_GET['dateDebut'];
        $date2 = $_GET['dateFin'];
        
        header('Content-type: application/json');
        $results = getDispoByDate($date1, $date2);
        $json = json_encode($results);
    
    }
    
    echo $json;