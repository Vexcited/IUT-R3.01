<?php
  require_once __DIR__  . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . 'LivreController.php';
  $controller = new LivreController();
  
  $viewsDirectory = __DIR__  . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR;
  $route = $_GET['action'] ?? 'accueil';

  switch ($route) {
    case 'accueil':
      require_once $viewsDirectory . 'header.php';
      require_once $viewsDirectory . 'accueil.php';
      break;

    case 'index':
      require_once $viewsDirectory . 'header.php';
      $controller->index();
      break;

    case 'ajouter':
      require_once $viewsDirectory . 'header.php';
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->ajouterLivre();
      }
      else {
        require_once $viewsDirectory . 'livres' . DIRECTORY_SEPARATOR . 'new.php';
      }

      break;

    case 'supprimer':
      $controller->supprimerLivre();
      header('Location: /?action=index');
      break;
  }

  require_once $viewsDirectory . 'footer.php';
    