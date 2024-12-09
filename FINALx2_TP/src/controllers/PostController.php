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
    $data = json_decode(file_get_contents('php://input'), true);
    
    $postId = $data['id'];
    $postContent = $data['content'];
    $postTitle = $data['title'];

    if (isset($_SESSION['user'])) {
      $userId = $_SESSION['user']['id'];
      $this->postModel->modify($postId, $postTitle, $postContent, $userId);
    }

    header("Content-Type: application/json");
    echo json_encode(['status' => 'ok']);
  }
}
