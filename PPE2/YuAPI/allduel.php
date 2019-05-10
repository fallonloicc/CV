<?php
    include_once "db.php";
    
    function getAllDuel()
    {
        $statement = getPdo()->prepare("SELECT * FROM duel ORDER BY date DESC");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
