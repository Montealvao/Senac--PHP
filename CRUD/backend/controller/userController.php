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

    public function getUserById($id){
        try {
            $sql = "SELECT * FROM users WHERE id = :id";
            $db = $this->coon->prepare($sql);
            $db->bindParam(":id",$id);
            $db->execute();
            $user = $db->fetch(PDO::FETCH_ASSOC);
            if($user){
                return $user;
            }else{
                return false;
            }
        } catch (\Throwable $th) {

        }
    }        

    public function UserUpdate($id, $name,$password){
        try {
            $sql = "UPDATE users SET name = :name, password = :password WHERE id = :id";
            $db = $this->coon->prepare($sql);
            $db->bindParam(":name",$name);
            $db->bindParam(":password",$password);
            $db->bindParam(":id",$id);
            if($db->execute()){
                return true;
            }else{
                return false;
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    } 
    
    public function deleteUser($id){
        try {
            $sql = "DELETE FROM users WHERE id = :id";
            $db = $this->coon->prepare($sql);
            $db->bindParam(":id",$id);
            if($db->execute()){
                return true;
            }else{
                return false;
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    } 

}