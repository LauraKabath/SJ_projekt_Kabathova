<?php

class Minerals extends Database {
    private $conn;

    public function __construct(){
        $this->conn = $this->db_connection();
    }

    private function movePhoto($filename, $tempname){
        $folder = "./upload/".$filename;
        try {
            $this->conn->beginTransaction();
            if (!move_uploaded_file($tempname, $folder)){
                throw new Exception("Súbor sa nepodarilo premiestniť");
            }
            $this->conn->commit();
            return true;
        } catch (\Exception $exception){
            $this->conn->rollback();
            echo "Chyba pri vkladani fotky".$exception->getMessage();
            return false;
        }

    }

    public function addMineral($nazov, $zlozenie, $vzorec, $sustava, $popis, $pouzitie, $naleziska, $filename, $tempname){

        $query = "INSERT INTO tabmineraly(min_nazov, chemzlozenie, vzorec, krysustava, popis, pouzitie, naleziska, fotka) 
        VALUES (:nazov, :zlozenie, :vzorec, :sustava, :popis, :pouzitie, :naleziska, :filename)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nazov', $nazov);
        $stmt->bindParam(':zlozenie', $zlozenie);
        $stmt->bindParam(':vzorec', $vzorec);
        $stmt->bindParam(':sustava', $sustava);
        $stmt->bindParam(':popis', $popis);
        $stmt->bindParam(':pouzitie', $pouzitie);
        $stmt->bindParam(':naleziska', $naleziska);
        $stmt->bindParam(':filename', $filename);
        $this->movePhoto($filename, $tempname);

        try {
            $insert = $stmt->execute();
            return $insert;
        } catch (\Exception $exception){
            echo "Chyba pri vkladani".$exception->getMessage();
            $this->conn->rollback();
        }
    }

    public function selectMineral(){
        $query = "SELECT min_nazov, chemzlozenie, vzorec, krysustava, popis, pouzitie, naleziska, fotka FROM tabmineraly ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $minerals = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $mineralCards = '<div class="row">';

        $count = 0;

        foreach ($minerals as $mineral){
            if ($count % 4 == 0 && $count != 0) {
                $mineralCards .= '</div><div class="row">';
            }

            $mineralCards .= '<div class="col-md-4">';
            $mineralCards .= '<div class="card">';
            $mineralCards .= '<img src="upload/' . $mineral['fotka'] . '" class="card-img-top" alt="MineralFotka">'; //htmlspecialchars($mineral['fotka'])
            $mineralCards .= '<div class="card-body">';
            $mineralCards .= '<h5 class="card-title">' . $mineral['min_nazov'] . '</h5>';
            $mineralCards .= '<p class="card-text"><strong>Chemické zloženie:</strong> ' . $mineral['chemzlozenie'] . '</p>';
            $mineralCards .= '<p class="card-text"><strong>Vzorec:</strong> ' . $mineral['vzorec'] . '</p>';
            $mineralCards .= '<p class="card-text"><strong>Kryštálová sústava:</strong> ' . $mineral['krysustava'] . '</p>';
            $mineralCards .= '<p class="card-text"><strong>Popis:</strong> ' . $mineral['popis'] . '</p>';
            $mineralCards .= '<p class="card-text"><strong>Použitie:</strong> ' . $mineral['pouzitie'] . '</p>';
            $mineralCards .= '<p class="card-text"><strong>Náleziská:</strong> ' . $mineral['naleziska'] . '</p>';
            $mineralCards .= '</div>';
            $mineralCards .= '</div>';
            $mineralCards .= '</div>';

            $count++;
        }
        $mineralCards .= '</div>';

        echo $mineralCards;
    }

    public function isLoggedIn(){
        return isset($_SESSION['user_id']);

    }



}