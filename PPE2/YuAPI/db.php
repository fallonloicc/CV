<?php

    function getPdo()
    {
        echo "1";
        $dsn = "mysql:host=localhost;dbname=efficom_yugioh";
        echo "2";
        $dbh = new PDO($dsn, "loicfallon", "efficom", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        echo "3"
        return $dbh;
        echo "c'est branché !";
    }
