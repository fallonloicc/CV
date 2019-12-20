<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Credentials: true");
    header('Content-Type: application/json');

    include_once 'dbclass.php';
    include_once 'user.php';

    $database = new Database();
    $db = $database->getConnection();

    // prepare product object
    $user = new User($db);

    $data = json_decode(file_get_contents("php://input"));
    echo $data ->email;
    // query to read single record
    $query = "SELECT * FROM user WHERE email = :email";
    
    // prepare query statement
    $stmt = $db->prepare( $query );

    $user->email = htmlspecialchars(strip_tags($user->email));
    $user->email = $data->email;
    
    // bind id of product to be updated
    $stmt->bindParam(":email", $user->email);
    // execute query
    if($stmt->execute()){
        
        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
         
        // set values to object properties
        $user->id = $row['id'];
        $user->firstname = $row['firstname'];
        $user->lastname = $row['lastname'];
        $user->email = $row['email'];
        $user->pwd = $row['pwd'];
        $user->adresse = $row['adresse'];
        $user->date_creation = $row['date_creation'];
        $user->current_token = $row['current_token'];


        if($user->pwd == $data->password){
            $token = createToken($user->email);
            $arr = array(
                "token" => $token
            );
            echo json_encode($arr);
        }else{

        }
    }

    function createToken($email)
    {
        global $user;
        global $db;

        $token = bin2hex(random_bytes(32)); 
        $query = "UPDATE user SET current_token = :current_token WHERE email = :email";
        
        $stmt = $db->prepare( $query );
        $stmt->bindParam(":current_token", $token);
        $stmt->bindParam(":email", $email);

        if($stmt->execute()){
            return $token;
        }

    }
      
?>