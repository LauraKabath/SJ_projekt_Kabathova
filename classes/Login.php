<?php

namespace log;
require_once('../databaza/db_config.php');

use PDO;
class Login{
    private $conn;

    public function __construct(){
        $this->connect();
    }

    private function connect(){
        $config = DATABASE;

        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        );

        try {
            $this->conn = new PDO('mysql:host='.$config['HOST'].
                ';dbname='.$config['DBNAME'].';port='.$config['PORT'],
                $config['USER_NAME'], $config['PASSWORD'], $options);
        } catch (\PDOException $e){
            die("Chyba pripojenia: ".$e->getMessage());
        }
    }

    public function register($meno, $heslo, $email){
        $query = "INSERT INTO tabuzivatel(meno, heslo, email) VALUES ('".$meno."',''".$heslo."','".$email."')";
        $stmt = $this->conn->prepare($query);

        try {
            $insert = $stmt->execute();
            return $insert;
        } catch (\Exception $exception){
            echo "Chyba pri vkladani".$exception->getMessage();
            $this->conn->rollback();
        }

    }
}