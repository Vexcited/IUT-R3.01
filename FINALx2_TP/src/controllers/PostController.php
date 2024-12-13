<?php

class PostController {
  private $postModel;

  function __construct () {
    $this->postModel = new Post();
  }

  public function index () {
    $posts = $this->postModel->findAll();
    require_once 'views/posts.php';
  }

  public function create () {
    $title = $_POST['title'];
    $content = $_POST['content'];

    if (isset($_SESSION['user'])) {
      $userId = $_SESSION['user']['id'];
      $this->postModel->create($title, $content, $userId);
    }

    header('Location: /');
  }

  public function remove () {
    $postId = $_GET['id'];
    if (isset($_SESSION['user'])) {
      $userId = $_SESSION['user']['id'];
      $this->postModel->remove($postId, $userId);
    }

    header('Location: /');
  }

  public function modify () {
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user'])) {
      $postId = $_POST['id'];
      $postTitle = $_POST['title'];
      $postContent = $_POST['content'];
      $userId = $_SESSION['user']['id'];

      $this->postModel->modify($postId, $postTitle, $postContent, $userId);
    }

    header("Content-Type: application/json");
    echo json_encode(['status' => 'ok']);
  }
}
