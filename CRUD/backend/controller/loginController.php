<?php

include __DIR__ . "/../db/database.php";

class LoginController{
    private $coon;

    public function __construct(){
        $dbase = new Database();
        $this->coon = $dbase->connect();
    }

    public function CheckLogin($name, $password){
        $sql = "SELECT * FROM users WHERE name = :name and password = :password";
        $db = $this->coon->prepare($sql);
        $db->bindParam(":name", $name);
        $db->bindParam(":password", $password);
        $db->execute();
        $user = $db->fetchAll(PDO::FETCH_ASSOC);
        
        if($user){
            session_start();
            $_SESSION["user_id"] = $user[0]["id"];
            return true;
        }else{
            return false;
        }
    }
}