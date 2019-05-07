<?php

    require_once "db.php";

    function getAllDuel()
    {
        $statement = getPdo()->prepare("SELECT * FROM duel");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    function getDuelByCode($code)
    {
        $req = <<<EOD
        SELECT * FROM duel
        WHERE player1 = :code
        OR player2 = :code
    EOD;

        $statement = getPdo()->prepare($req);
        $statement->execute(array(":code" => $code));
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }