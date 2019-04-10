<?php

function getPdo()
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=efficom_loic', "loicfallon", "efficom");
        //$bdd = new PDO('mysql:host=localhost;dbname=loicgregloick', "root", "");
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $bdd;
    }
    catch(PDOException $e)
    {
        echo "Impossible de se connecter";
        die();
    }
}
