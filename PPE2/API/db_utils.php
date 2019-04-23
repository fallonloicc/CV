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
    $req = $pdo->prepare("select id from users where current_token = :token");
    $res = $req->execute(array(":token" => $token));
    $ids = $req->fetchAll(PDO::FETCH_ASSOC);
    if (count($ids) == 1) {
        return $ids[0]["id"];
    } else {
        return false;
    }
}

function getAllBornes()
{
    $statement = getPdo()->prepare("SELECT * FROM bornes");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getAllClients()
{
    $statement = getPdo()->prepare("SELECT * FROM clients");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getAllConso()
{
    $statement = getPdo()->prepare("SELECT * FROM consommables");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getUserInfoById($id)
{
    $statement = getPdo()->prepare("SELECT * FROM clients where idClient = :id");
    $statement->execute(array(":id" => $id));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    if (count($results) == 1) {
        return $results[0];
    }
    return false;
}

function getPhotosByCode($code)
{
    $req = <<<EOD
    SELECT p.idPhotos, estAime, chemin, date FROM photos p
    INNER JOIN borne_photo AS b ON p.idPhotos = b.idPhotos
    INNER JOIN commande AS c ON c.idCommande = b.idCommande
    where codeEvent = :code
EOD;

    $statement = getPdo()->prepare($req);
    $statement->execute(array(":code" => $code));
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getIsPhotoLikedById($id_photo)
{
    $req = <<<NANI
SELECT estAime
FROM photos
WHERE idPhotos = :id
NANI;

    $statement = getPdo()->prepare($req);
    $statement->execute(array(":id" => $id_photo));

    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result["estAime"];
}

function toggleLikeForPhoto($id_photo)
{
    $isLiked = getIsPhotoLikedById($id_photo);
    $isLiked = $isLiked == 0 ? 1 : 0;

    /*if($isLiked == 0){
    return 1;
    }else{
    return 0;
    }*/

    $req = <<<EOD
UPDATE photos
SET estAime = :isLiked
WHERE idPhotos = :id
EOD;

    $statement = getPdo()->prepare($req);
    $statement->execute(array(":isLiked" => $isLiked, ":id" => $id_photo));
    return $isLiked;
}

function getAllCommandeById($idCommande)
{
    $req = <<<NANI
SELECT co.idCommande, co.dateCommande, co.codeEvent, cl.idClient, cl.nom, cl.prenom, bo.idBornes, bo.prix, bo.libelle
FROM commande co
JOIN commande_client c_b ON co.idCommande = c_b.idCommande
JOIN clients cl ON c_b.idClient = cl.idClient
JOIN bornes_commandes b_c ON b_c.idCommande = co.idCommande
JOIN bornes bo ON b_c.idBornes = bo.idBornes
JOIN consommable_commande c_c ON c_c.idCommande = co.idCommande
JOIN consommables con ON con.idConsosommables = c_c.idConsommables
WHERE co.idCommande = :id
NANI;
    
    $statement = getPdo()->prepare($req);
    $statement->execute(array(":id" => $idCommande));
    return $statement->fetchAll(PDO::FETCH_ASSOC);
    
}

function getAllCommande()
{
    $req = <<<NANI
SELECT idCommande, dateCommande, codeEvent
FROM commande
NANI;
    
    $statement = getPdo()->prepare($req);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}