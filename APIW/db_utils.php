<?php

require_once "db.php";

/**
 * Trouve un utilisateur à partir de son token
 *
 * @param [string] $token
 * @return l'identifiant de l'utilisateur ou false
 */

function findUserIdByToken($token)
{
    $pdo = getPdo();
    $req = $pdo->prepare("SELECT id FROM users WHERE current_token = :token");
    $res = $req->execute(array(":token" => $token));
    $ids = $req->fetchAll(PDO::FETCH_ASSOC);
    if (count($ids) == 1) {
        return $ids[0]["id"];
    } else {
        return false;
    }
}

function getAllUser()
{
    $statement = getPdo()->prepare("SELECT * FROM user");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getAllLogement()
{
    $statement = getPdo()->prepare("SELECT * FROM logement");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getAllPost()
{
    $statement = getPdo()->prepare("SELECT * FROM post");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getAllMessage()
{
    $statement = getPdo()->prepare("SELECT * FROM message");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getUserInfoById($id)
{
    $statement = getPdo()->prepare("SELECT * FROM user where current_token = :id");
    $statement->execute(array(":id" => $id));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    if (count($results) == 1) {
        return $results[0];
    }
    return false;
}

function getMessageByUser($token1, $token2)
{
    $req = "SELECT contenue, date FROM message WHERE iduser_post = :token1 AND iduser_get = :token2 ORDER BY date DESC";

    $statement = getPdo()->prepare($req);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}