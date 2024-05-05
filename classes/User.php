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

    public function updateProfil($id, $meno, $email){
        $query = "UPDATE tabuzivatel SET meno = :meno, email = :email WHERE uzi_ID = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':meno', $meno);
        $stmt->bindParam(':email', $email);

        try {
            $update = $stmt->execute();
            return $update;
        } catch (\Exception $exception){
            echo "Chyba pri updatovani".$exception->getMessage();
            $this->conn->rollback();
        }
    }

    public function changePassword($id, $oldPassword, $newPassword, $repeatedNew){
        if ($newPassword != $repeatedNew){
            echo "Hesla sa nezhoduju";
            return false;
        }

        if (!$this->verifyOldPassword($id, $oldPassword)){
            echo "Nespravne zadane povodne heslo";
            return false;
        }

        $hashedNew = password_hash($newPassword, PASSWORD_BCRYPT);

        $query = "UPDATE tabuzivatel SET heslo = :newPassword WHERE uzi_ID = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':newPassword', $hashedNew);

        try {
            $change = $stmt->execute();
            return $change;
        } catch (\Exception $exception){
            echo "Chyba pri zmene hesla".$exception->getMessage();
            $this->conn->rollback();
        }

    }

    private function verifyOldPassword($id, $oldPassword){
        $query = "SELECT * FROM tabuzivatel WHERE uzi_ID = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        try {
            $stmt->execute();
            $userdata = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($oldPassword, $userdata['heslo'])){
                return true;
            } else {
                return false;
            }
        } catch (\Exception $exception){
            echo "Chyba pri overovani stareho hesla".$exception->getMessage();
            $this->conn->rollback();
        }
    }

}