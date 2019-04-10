<?php

function getPdo()
{
    $dsn = "mysql:host=localhost;dbname=efficom_loic";
    $dbh = new PDO($dsn, "loicfallon", "efficom", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    return $dbh;
    
}

