<?php
    
    include_once "db.php";
    
    function add($player1, $player2, $winner)
    {
        $date = date('Y-m-d');
        
        $req = 'INSERT INTO duel(player1, player2, vainqueur, date) VALUES ("'.$player1.'", "'.$player2.'", "'.$winner.'", "'.$date.'")';
    
        $statement = getPdo()->prepare($req);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    if (isset($_GET['p1']) && isset($_GET['p2']) && isset($_GET['win']) )
    {
        header('Content-type: application/json');
        $results = add($_GET['p1'], $_GET['p2'], $_GET['win']);
        $json = json_encode($results);
    }
    echo $json;
