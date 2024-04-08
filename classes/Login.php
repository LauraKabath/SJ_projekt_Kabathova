<?php

namespace log;
require_once(__ROOT__.'/classes/Database.php');

class Login extends \Database {
    protected $connection;

    public function __construct(){
        $this->connect();
        // Pouzitie gettera na ziskanie spojenia
        $this->connection = $this->getConnection();
    }

    public function register($meno, $heslo, $email){
        $query = "INSERT INTO tabuzivatel(meno, heslo, email) VALUES ('".$meno."',''".$heslo."','".$email."')";
        $stmt = $this->connection->prepare($query);

        try {
            $insert = $stmt->execute();
            return $insert;
        } catch (\Exception $exception){
            echo "Chyba pri vkladani".$exception->getMessage();
            $this->connection->rollback();
        }

    }
}