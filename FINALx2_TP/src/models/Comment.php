<?php

class Comment {
  private $conn;

  function __construct () {
    $database = new Database();
    $this->conn = $database->getConnection();
  }

  public function create ($postId, $userId, $content) {
    $query = "INSERT INTO comments (utilisateur_id, post_id, contenu) VALUES (:user_id, :post_id, :content)";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':user_id', $userId);
    $stmt->bindParam(':post_id', $postId);
    $stmt->bindParam(':content', $content);
    $stmt->execute();
  }

  public function findAll ($postId) {
    $query = "SELECT c.id, c.contenu, u.nom as nom_utilisateur, c.date_commentaire, c.utilisateur_id FROM comments c JOIN users u ON u.id = c.utilisateur_id WHERE c.post_id = :post_id ORDER BY c.date_commentaire DESC";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':post_id', $postId);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function search ($searchQuery) {
    $query = "SELECT c.id, c.contenu, u.nom as nom_utilisateur, c.date_commentaire FROM comments c JOIN users u ON u.id = c.utilisateur_id WHERE c.contenu LIKE :search_query ORDER BY c.date_commentaire DESC";
    $stmt = $this->conn->prepare($query);
    $stmt->bindValue(':search_query', "%$searchQuery%");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}