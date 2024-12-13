<?php
ob_start();
session_start();

require_once 'models/Database.php';
require_once 'models/Date.php';

require_once 'models/User.php';
require_once 'models/Post.php';
require_once 'models/Comment.php';
require_once 'models/Reaction.php';

require_once 'controllers/UserController.php';
require_once 'controllers/PostController.php';
require_once 'controllers/CommentController.php';
require_once 'controllers/ReactionController.php';
require_once 'controllers/SearchController.php';

$route = $_GET['c'] ?? 'posts';
$action = $_GET['a'] ?? 'index';

switch ($route) {
  case 'user':
    $controller = new UserController();
    switch ($action) {
      case 'd-signup':
        $controller->displaySignup();
        break;
      case 'signup':
        $controller->saveSignup();
        break;
      case 'd-login':
        $controller->displayLogin();
        break;
      case 'login':
        $controller->saveLogin();
        break;
      case 'logout':
        $controller->signout();
        break;
      case 'profile':
        $controller->profile();
        break;
      case 'modify':
        $controller->modify();
        break;
    }

    break;
  case 'posts':
    $controller = new PostController();
    switch ($action) {
      case 'index':
        $controller->index();
        break;
      case 'create':
        $controller->create();
        break;
      case 'remove':
        $controller->remove();
        break;
      case 'modify':
        $controller->modify();
        break;
    }
    break;
  case 'comments':
    $controller = new CommentController();
    switch ($action) {
      case 'create':
        $controller->create();
        break;
      case 'read':
        $controller->read();
        break;
    }
    break;
  case 'reactions':
    $controller = new ReactionController();
    switch ($action) {
      case 'create':
        $controller->create();
        break;
      case 'delete':
        $controller->delete();
        break;
      case 'read':
        $controller->read();
        break;
    }
    break;
  case 'search':
    $controller = new SearchController();
    switch ($action) {
      case 'search':
        $controller->search();
        break;
    }
    break;
}

ob_end_flush();
