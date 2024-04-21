<?php

class Login extends \Database {
    private $conn;

    public function __construct(){
        $this->conn = $this->db_connection();
    }

    public function register($meno, $heslo, $repeatHeslo , $email){

        if ($heslo !== $repeatHeslo){
            echo "Nespravne zadane heslo";
            return false;
        }

        $hashedPassword = password_hash($heslo, PASSWORD_DEFAULT);

        $query = "INSERT INTO tabuzivatel(meno, heslo, email) VALUES (:meno, :heslo, :email)";
        $stmt = $this->conn->prepare($query);


        $stmt->bindParam(':meno', $meno);
        $stmt->bindParam(':heslo', $hashedPassword);
        $stmt->bindParam(':email', $email);

        try {
            $insert = $stmt->execute();
            return $insert;
        } catch (\Exception $exception){
            echo "Chyba pri vkladani".$exception->getMessage();
            $this->conn->rollback();
        }

    }

    public function login($meno, $heslo){
        $query = "SELECT * FROM tabuzivatel WHERE meno = :meno";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':meno', $meno);

        try {
            $stmt->execute();
            $userdata = $stmt->fetch();

            if ($userdata){
                if (password_verify($heslo, $userdata['heslo'])){
                    return true;
                } else {
                    return false;
                }
            } else {
                return "neregistrovany";
            }
        } catch (\Exception $exception){
            echo "Chyba pri prihlasovani".$exception->getMessage();
            $this->conn->rollback();
        }

    }
}