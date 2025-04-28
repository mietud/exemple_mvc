<?php
class UserModel{
    private $pdo;

    public function __construct(){
        $configDb = require  __DIR__."/../../config/database.php";
       
        $host = $configDb['host'];
        $db = $configDb['dbname'];
        $user = $configDb['user'];
        $pass = $configDb['pass'];

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit;
        }
    }

    public function allUsers(){
        $stmt = $this->pdo->query("SELECT * FROM users");
        $listUser = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $listUser;
    }
    
    public function show($id){
        return [
            'id' => 2,
            "name" => "Peter",
            "email" => "peter@exemple.com",
        ];
    } 

}