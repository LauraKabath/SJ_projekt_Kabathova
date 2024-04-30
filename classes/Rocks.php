<?php

class Rocks extends Database {
    private $conn;

    public function __construct(){
        $this->conn = $this->db_connection();
    }

    private function movePhoto($filename, $tempname){
        $folder = "./uploadRock/".$filename;
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

    public function addRock($nazov, $zaradenie, $farba, $zasMineraly, $stavba, $naleziska, $filename, $tempname){
        $query = "INSERT INTO tabhorniny(rock_nazov, zaradenie, farba, zas_min, stavba, naleziska, fotka)
            VALUES(:nazov, :zaradenie, :farba, :zasMineraly, :stavba, :naleziska, :filename)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nazov', $nazov);
        $stmt->bindParam(':zaradenie', $zaradenie);
        $stmt->bindParam(':farba', $farba);
        $stmt->bindParam(':zasMineraly', $zasMineraly);
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

    public function isLoggedIn(){
        return isset($_SESSION['user_id']);
    }

    public function selectRock(){
        $query = "SELECT * FROM tabhorniny";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $rocks = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $rockCards = '<div class="row">';
        $count = 0;

        foreach ($rocks as $rock){
            if ($count % 4 == 0 && $count != 0) {
                $rockCards .= '</div><div class="row">';
            }

            $rockCards .= '<div class="col-md-4">';
            $rockCards .= '<div class="card">';
            $rockCards.= '<img src="uploadRock/' . $rock['fotka'] . '" class="card-img-top" alt="HorninaFotka">';
            $rockCards .= '<div class="card-body">';
            $rockCards.= '<h5 class="card-title">' . $rock['rock_nazov'] . '</h5>';
            $rockCards .= '<p class="card-text"><strong>Skupinové zaradenie:</strong> ' . $rock['zaradenie'] . '</p>';
            $rockCards .= '<p class="card-text"><strong>Farba:</strong> ' . $rock['farba'] . '</p>';
            $rockCards .= '<p class="card-text"><strong>Zastúpenie minerálov v hornine:</strong> ' . $rock['zas_min'] . '</p>';
            $rockCards .= '<p class="card-text"><strong>Stavba:</strong> ' . $rock['stavba'] . '</p>';
            $rockCards .= '<p class="card-text"><strong>Náleziská:</strong> ' . $rock['naleziska'] . '</p>';
            if ($this->isLoggedIn()) $rockCards .= '<a href="update_rock.php?id=' . $rock['rock_ID'] . '" class="link-secondary link-underline-opacity-25 link-underline-opacity-100-hover">Edit</a>';
            $rockCards.= '</div>';
            $rockCards .= '</div>';
            $rockCards .= '</div>';

            $count++;
        }
        $rockCards .= '</div>';

        echo $rockCards;

    }

    public function getRockById($rock_id) {
        $query = "SELECT * FROM tabhorniny WHERE rock_ID = :rock_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':rock_id', $rock_id);

        try {
            $stmt->execute();
            $rock = $stmt->fetch(PDO::FETCH_ASSOC);
            return $rock;
        } catch (PDOException $e) {
            echo "Nastala chyba pri získavaní horniny " . $e->getMessage();
            return false;
        }
    }
}