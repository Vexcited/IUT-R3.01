<?php

require_once 'Controllers/RecetteController.php';
require_once 'Controllers/ContactController.php';

require_once 'Models/connectDb.php';

require_once 'Views/header.php';

$route = $_GET['c'] ?? 'home';

switch ($route) {
  case 'home':
    require_once 'Controllers/homeController.php';
    break;
  case 'ajout':
    $controller = new RecetteController($pdo);
    $controller->ajouter();
    break;
  case 'lister':
    $controller = new RecetteController($pdo);
    $controller->lister();
    break;
  case 'contact':
    $controller = new ContactController($pdo);
    $controller->ajouter();
    break;
  case 'detail':
    $controller = new RecetteController($pdo);
    $controller->detail($_GET['id']);
    break;
  case 'modif':
    $controller = new RecetteController($pdo);
    $controller->modifier($_GET['id']);
    break;
  case 'enregistrer_recette':
    $controller = new RecetteController($pdo);
    $controller->enregistrer();
    break;
  case 'enregistrer_contact':
    $controller = new ContactController($pdo);
    $controller->enregistrer();
    break;
  default: ?>
    <h1>Erreur 404</h1>
    <p>La page demandée n'existe pas.</p>
  <?php break;
}

require_once 'Views/footer.php';
