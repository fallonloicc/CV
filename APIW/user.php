<?php
// https://www.codeofaninja.com/2017/02/create-simple-rest-api-in-php.html
    class User{

        private $conn;

        public $id;
        public $firstname;
        public $lastname;
        public $email;
        public $pwd;
        public $adresse;
        public $date_creation;
        public $current_token;

        public function __construct($conn){
            $this->conn = $conn;
        }
    
        //C
        public function create(){
    
            $query = "INSERT INTO user (firstname, lastname, email, pwd, adresse, date_creation) VALUES ('".$this->firstname."','".$this->lastname."','".$this->email."', '".$this->pwd."', '".$this->adresse."', '".$this->date_creation."')";
            $stmt = $this->conn->prepare( $query );


            if($stmt->execute()){
                return true;
            }else{
                return false;
            }
            

        }
        //R
        public function read(){
            $query = "SELECT * FROM user";
    
            $stmt = $this->conn->prepare($query);
    
            $stmt->execute();
    
            return $stmt;
        }
        //U
        public function update(){

            $query = "UPDATE user SET firstname = :firstname, lastname = :lastname, email = :email, password = :password, adresse = :adresse, date_creation = :date_creation WHERE current_token = :current_token";
            $stmt = $this->conn->prepare($query);

            $this->firstname = htmlspecialchars(strip_tags($this->firstname));
            $this->lastname = htmlspecialchars(strip_tags($this->lastname));
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->password = htmlspecialchars(strip_tags($this->password));
            $this->adresse = htmlspecialchars(strip_tags($this->adresse));

            
            $stmt->bindParam(":firstname", $this->firstname);
            $stmt->bindParam(":lastname", $this->lastname);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":password", $this->password);
            $stmt->bindParam(":adresse", $this->adresse);
            $stmt->bindParam(":current_token", $this->current_token);

            if($stmt->execute()){
                return true;
            }else{
                return false;
            }
         
            
        }
        //D
        public function delete(){

            // delete query
            $query = "DELETE FROM user WHERE id = ?";
        
            // prepare query
            $stmt = $this->conn->prepare($query);
        
            // sanitize
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            // bind id of record to delete
            $stmt->bindParam(1, $this->id);
        
            // execute query
            if($stmt->execute()){
                return true;
            }else{
                return false;
            }
        
            
        }

        function readOne(){
 
            // query to read single record
            $query = "SELECT * FROM user WHERE current_token =:current_token";

            // prepare query statement
            $stmt = $this->conn->prepare( $query );
         
            // bind id of product to be updated
            $stmt->bindParam(":current_token", $this->current_token);
         
            // execute query
            $stmt->execute();
         
            // get retrieved row
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
         
            // set values to object properties
            $this->id = $row['id'];
            $this->firstname = $row['firstname'];
            $this->lastname = $row['lastname'];
            $this->email = $row['email'];
            $this->password = $row['password'];
            $this->adresse = $row['adresse'];
            $this->date_creation = $row['date_creation'];
            $this->current_token = $row['current_token'];
        }

        function readAmi(){

            $query = "SELECT u.* FROM user AS u JOIN relation_user as ua ON u.id = ua.id_ami WHERE ua.id_user =".$this->id;
            echo $query;
            $stmt -> $this->conn->prepare( $query );
            $stmt->execute();

            return $stmt;
        }

        function createToken()
    {
        $token = bin2hex(random_bytes(32)); 
        return $token;
    }
        
    }
?>