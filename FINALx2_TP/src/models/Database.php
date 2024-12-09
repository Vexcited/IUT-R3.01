<?php

class Database {
  private $host = "db";
  private $dbname = "pupillenetwork";
  private $username = "root";
  private $password = "root";
  private $conn;

  public function getConnection () {
    $this->conn = null;

    try {
      $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $exception) {
      echo "Erreur de connexion : " . $exception->getMessage();
    }

    return $this->conn;
  }
}
