<?php

class CommentController {
  private $commentModel;

  function __construct () {
    $this->commentModel = new Comment();
  }

  public function create () {
    $postId = $_POST['postId'];
    $content = $_POST['content'];

    if (isset($_SESSION['user'])) {
      $userId = $_SESSION['user']['id'];
      $this->commentModel->create($postId, $userId, $content);
    }

    header("Content-Type: application/json");
    echo json_encode(['status' => 'ok']);
  }

  public function read () {
    $postId = $_GET['postId'];
    $comments = $this->commentModel->findAll($postId);

    header("Content-Type: application/json");
    echo json_encode($comments);
  }
}