<?php

class RecetteController {
  /** @var PDO */
  private $pdo;

  function __construct($pdo) {
    $this->pdo = $pdo;
  }

  function ajouter() {
    require_once 'Views/recettes/ajout.php';
  }
  
  function enregistrer() {
    if (!isset($_POST['titre']) || !isset($_POST['description']) || !isset($_POST['auteur'])) {
      echo "La recette n'a pas été correctement envoyée";
      return;
    }

    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $auteur = $_POST['auteur'];

    $image = $_FILES['image'] ?? null;

    if (isset($_GET['id'])) {
      $query = $this->pdo->prepare('UPDATE recettes SET titre = :titre, description = :description, auteur = :auteur WHERE id = :id');
      $query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    }
    else {
      $query = $this->pdo->prepare('INSERT INTO recettes (titre, description, auteur, date_creation) VALUES (:titre, :description, :auteur, NOW())');
    }
  
    $query->bindValue(':titre', $titre, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':auteur', $auteur, PDO::PARAM_STR);
    $ok = $query->execute();

    if ($ok) {
      if ($image) {
        $id = $_GET['id'] ?? $this->pdo->lastInsertId();
        $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
        $filename = $id . '.' . $extension;
        move_uploaded_file($image['tmp_name'], 'upload/' . $filename);

        $query = $this->pdo->prepare('UPDATE recettes SET image = :image WHERE id = :id');
        $query->bindValue(':image', $filename, PDO::PARAM_STR);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
      }

      require_once 'Views/enregistrer.php';
    }
    else echo "Erreur lors de l'enregistrement";
  }

  function modifier($id) {
    $query = $this->pdo->prepare("SELECT * FROM recettes WHERE id = :id");
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    $recipe = $query->fetch(PDO::FETCH_ASSOC);
    require_once 'Views/recettes/modif.php';
  }

  function lister() {
    $query = $this->pdo->prepare("SELECT * FROM recettes");
    $query->execute();

    $recipes = $query->fetchAll(PDO::FETCH_ASSOC);
    require_once 'Views/recettes/liste.php';
  }

  function detail($id) {
    $query = $this->pdo->prepare("SELECT * FROM recettes WHERE id = :id");
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    $recipe = $query->fetch(PDO::FETCH_ASSOC);
    require_once 'Views/recettes/detail.php';
  }
}