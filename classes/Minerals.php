<?php

class Minerals extends Database {
    private $conn;

    public function __construct(){
        $this->conn = $this->db_connection();
    }

    public function addMineral($nazov, $zlozenie, $vzorec, $sustava, $popis, $pouzitie, $naleziska){

        $query = "INSERT INTO tabmineraly(min_nazov, chemzlozenie, vzorec, krysustava, popis, pouzitie, naleziska) 
        VALUES (:nazov, :zlozenie, :vzorec, :sustava, :popis, :pouzitie, :naleziska)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nazov', $nazov);
        $stmt->bindParam(':zlozenie', $zlozenie);
        $stmt->bindParam(':vzorec', $vzorec);
        $stmt->bindParam(':sustava', $sustava);
        $stmt->bindParam(':popis', $popis);
        $stmt->bindParam(':pouzitie', $pouzitie);
        $stmt->bindParam(':naleziska', $naleziska);

        try {
            $insert = $stmt->execute();
            return $insert;
        } catch (\Exception $exception){
            echo "Chyba pri vkladani".$exception->getMessage();
            $this->conn->rollback();
        }
    }



}