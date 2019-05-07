<?php
    include_once "db.php";
    include_once "db_utils.php";
    
    if (isset($_GET['codeJoueur']))
    {
        header('Content-type: application/json');
        $results = getDuelById($_GET['codeJoueur']);
        $json = json_encode($results);
    }
    
    echo $json;