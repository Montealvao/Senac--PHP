<?php

include __DIR__ . "/../db/database.php";

class userController{
    private $coon;

    public function __construct(){
        $dbase = new Database();
        $this->coon = $dbase->connect();
    }

    public function getAlluser(){
        try {
            $sql = "SELECT * FROM users";
            $db = $this->coon->prepare($sql);
            $db->execute();
            $user = $db->fetchAll(PDO::FETCH_ASSOC);
            return $user;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function CreateUser($name,$password){
        try {
            $sql = "INSERT INTO users(name,password) VALUES(:name,:password)";
            $db = $this->coon->prepare($sql);
            $db->bindParam(":name",$name);
            $db->bindParam(":password",$password);
            if($db->execute()){
                return true;
            }else{
                return false;
            }
        } catch (\Throwable $th) {

        }
    }        
}