<?php

class User extends Database {
private $conn;

    public function __construct(){
        $this->conn = $this->db_connection();
    }

    public function getUserInfo($id){
        $query = "SELECT * FROM tabuzivatel WHERE uzi_ID = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        try {
            $stmt->execute();
            $userInfo = $stmt->fetch(PDO::FETCH_ASSOC);
            return $userInfo;
        } catch (\Exception $exception){
            echo "Chyba pri vkladani".$exception->getMessage();
            $this->conn->rollback();
        }

    }

    public function updateProfil(){
        return true;
    }

}