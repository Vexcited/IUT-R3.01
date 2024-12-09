<?php

class User {
  private $conn;

  function __construct () {
    $database = new Database();
    $this->conn = $database->getConnection();
  }

  public function create ($name, $email, $password) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    $query = "INSERT INTO users (nom, email, password) VALUES (:name, :email, :password)";
    
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->execute();
  }

  public function find ($email) {
    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    return $stmt->fetch();
  }

  public function search ($searchQuery) {
    $query = "SELECT u.id, u.date_inscription, u.nom FROM users u WHERE nom LIKE :search_query";
    $stmt = $this->conn->prepare($query);
    $stmt->bindValue(':search_query', "%$searchQuery%");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}