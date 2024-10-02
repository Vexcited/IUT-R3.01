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

    $query = $this->pdo->prepare('INSERT INTO recettes (titre, description, auteur, date_creation) VALUES (:titre, :description, :auteur, NOW())');
  
    $query->bindValue(':titre', $titre, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':auteur', $auteur, PDO::PARAM_STR);
    $ok = $query->execute();

    if ($ok) {
      require_once 'Views/enregistrer.php';
    }
    else echo "Erreur lors de l'enregistrement";
  }

  function lister() {
    $query = $this->pdo->prepare("SELECT * FROM recettes");
    $query->execute();

    $recipes = $query->fetchAll(PDO::FETCH_ASSOC);
    require_once 'Views/recettes/liste.php';
  }
}