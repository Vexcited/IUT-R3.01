<?php

// connexion à la bdd
require_once 'Models/connectDb.php';

require_once 'Views/header.php';

$route = $_GET['c'] ?? 'home';

switch ($route) {
  case 'home':
    require_once 'Controllers/homeController.php';
    break;
  case 'contact':
    require_once 'Controllers/contactController.php';
    break;
  default: ?>
    <h1>Erreur 404</h1>
    <p>La page demandée n'existe pas.</p>
  <?php break;
}

require_once 'Views/footer.php';
