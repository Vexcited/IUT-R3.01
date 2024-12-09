<?php

class Reaction {
  private $conn;

  function __construct () {
    $database = new Database();
    $this->conn = $database->getConnection();
  }

  public function create ($postId, $userId, $reaction) {
    // prevent inserting if userId already reacted
    $query = "SELECT * FROM reactions WHERE utilisateur_id = :user_id AND post_id = :post_id AND contenu = :content";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':user_id', $userId);
    $stmt->bindParam(':post_id', $postId);
    $stmt->bindParam(':content', $reaction);
    $stmt->execute();
    
    if ($stmt->fetch()) {
      return;
    }

    $query = "INSERT INTO reactions (utilisateur_id, post_id, contenu) VALUES (:user_id, :post_id, :content)";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':user_id', $userId);
    $stmt->bindParam(':post_id', $postId);
    $stmt->bindParam(':content', $reaction);
    $stmt->execute();
  }

  public function findAll ($postId) {
    $query = "SELECT c.id, c.contenu, u.nom as nom_utilisateur, c.date_reaction, c.utilisateur_id FROM reactions c JOIN users u ON u.id = c.utilisateur_id WHERE c.post_id = :post_id ORDER BY c.date_reaction DESC";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':post_id', $postId);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}