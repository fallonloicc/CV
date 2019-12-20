<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once '../dbclass.php';
 
// instantiate product object
include_once '../user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
$user->id = isset($_GET['id']) ? $_GET['id'] : die();

$stmt = $user->readAmi();
$num = $stmt->rowCount();


    if($num>0){
 
        // products array
        $user_arr=array();
        $user_arr["user"]=array();
     
        // retrieve our table contents
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            // extract row
            // this will make $row['name'] to
            // just $name only
            extract($row);
     
            $user_item=array(
                "id" => $id,
                "firstname" => $firstname,
                "lastname" => $lastname,
                "email" => $email,
                "password" => $password,
                "adresse" => $adresse,
                "date creation" => $date_creation,
                "current token" => $current_token
            );
     
            array_push($user_arr["user"], $user_item);
        }
     
        // set response code - 200 OK
        http_response_code(200);
     
        // show products data in json format
        echo json_encode($user_arr);
    }else{
        // set response code - 404 Not found
        http_response_code(404);
     
        // tell the user no products found
        echo json_encode(
            array("message" => "No products found.")
        );
    }