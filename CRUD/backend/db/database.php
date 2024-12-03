<?php

class Database
{
    private $server = "localhost";
    private $dbname= "voucher142";
    private $user= "root";
    private $password= "";

    public function connect(){
        try {
            $conn = new PDO(
                "mysql:host=".$this->server . ";dbname=". $this->dbname,
                $this->user,
                $this->password
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (\Exception $th) {
            echo "erro". $th->getMessage();
        }
    }
}
