<?php

class Livre {
  private PDO $pdo;

  public function __construct() {
    try {
      $host = getenv("DB_HOST");
      $dbname = getenv("DB_DATABASE");
      $username = getenv("DB_USERNAME");
      $password = getenv("DB_PASSWORD");
      $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    }
    catch (PDOException $e) {
      echo 'Erreur : ' . $e->getMessage();
      die();
    }
  }

  public function ajouterLivre(
    string $titre,
    string $auteur,
    string $categorie,
    string $annee_publication,
    string $isbn
  ): bool {
    $sql = $this->pdo->prepare("INSERT INTO livres (titre, auteur, categorie, annee_publication, isbn) VALUES (:titre, :auteur, :categorie, :annee_publication, :isbn)");
    $sql->execute([
      'titre' => $titre,
      'auteur' => $auteur,
      'categorie' => $categorie,
      'annee_publication' => $annee_publication,
      'isbn' => $isbn
    ]);

    // pour vérifier si c'est ok, on regarde si le nombre de lignes affectées est supérieur à 0.
    $ok = $sql->rowCount() > 0;
    
    return $ok;
  }

  public function obtenirLivres(): array {
    $sql = $this->pdo->query("SELECT * FROM livres");
    return $sql->fetchAll(PDO::FETCH_ASSOC);
  }

  public function supprimerLivre(int $id): void {
    $sql = $this->pdo->prepare("DELETE FROM livres WHERE id = :id");
    $sql->execute(['id' => $id]);
  }
}
