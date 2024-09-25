<?php

if (!isset($_POST['titre']) || !isset($_POST['description']) || !isset($_POST['auteur'])) {
  echo "La recette n'a pas été correctement envoyée";
  return;
}

$titre = $_POST['titre'];
$description = $_POST['description'];
$auteur = $_POST['auteur'];
$type = $_POST['type']; // recette ou contact

if ($type == 'recette') {
  $query = $pdo->prepare('INSERT INTO recettes (titre, description, auteur, date_creation) VALUES (:titre, :description, :auteur, NOW())');
}
else if ($type == 'contact') {
  $query = $pdo->prepare('INSERT INTO contacts (titre, description, auteur, date_creation) VALUES (:titre, :description, :auteur, NOW())');
}
else {
  echo "Type de recette inconnu";
  return;
}

$query->bindValue(':titre', $titre, PDO::PARAM_STR);
$query->bindValue(':description', $description, PDO::PARAM_STR);
$query->bindValue(':auteur', $auteur, PDO::PARAM_STR);
$ok = $query->execute();

if ($ok) {
  require_once 'Views/enregistrer.php';
}
else echo "Erreur lors de l'enregistrement";
