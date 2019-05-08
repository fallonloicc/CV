<?php
    include_once "db.php";
    
    function getDuelByCode($code)
    {
        $req = 'SELECT * FROM duel WHERE player1 ="'.$code.'" OR player2 ="'.$code.'"';

         $statement = getPdo()->prepare($req);
         $statement->execute();
         return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    if (isset($_GET['codeJoueur']))
    {
        header('Content-type: application/json');
        $results = getDuelById($_GET['codeJoueur']);
        $json = json_encode($results);
    }
    
    echo $json;