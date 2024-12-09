<?php

class Post {
  private $conn;

  function __construct () {
    $database = new Database();
    $this->conn = $database->getConnection();
  }

  public function findAll () {
    $query = "SELECT p.id, p.titre, p.contenu, u.nom as nom_utilisateur, p.date_publication, p.utilisateur_id FROM posts p JOIN users u ON u.id = p.utilisateur_id ORDER BY date_publication DESC";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function create ($titre, $content, $userId) {
    $query = "INSERT INTO posts (titre, contenu, utilisateur_id) VALUES (:titre, :content, :user_id)";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':titre', $titre);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':user_id', $userId);
    $stmt->execute();
  }

  public function remove ($postId, $userId) {
    $query = "DELETE FROM posts WHERE id = :post_id AND utilisateur_id = :user_id";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':post_id', $postId);
    $stmt->bindParam(':user_id', $userId);
    $stmt->execute();
  }

  public function modify ($postId, $postTitle, $postContent, $userId) {
    $query = "UPDATE posts SET titre = :titre, contenu = :content WHERE id = :post_id AND utilisateur_id = :user_id";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':titre', $postTitle);
    $stmt->bindParam(':content', $postContent);
    $stmt->bindParam(':post_id', $postId);
    $stmt->bindParam(':user_id', $userId);
    $stmt->execute();
  }

  public function search ($searchQuery) {
    $query = "SELECT p.id, p.titre, p.contenu, u.nom as nom_utilisateur, p.date_publication, p.utilisateur_id FROM posts p JOIN users u ON u.id = p.utilisateur_id WHERE p.titre LIKE :search_query OR p.contenu LIKE :search_query ORDER BY date_publication DESC";
    $stmt = $this->conn->prepare($query);
    $stmt->bindValue(':search_query', "%$searchQuery%");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}