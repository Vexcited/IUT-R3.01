<?php

class ReactionController {
  private $reactionModel;

  function __construct () {
    $this->reactionModel = new Reaction();
  }

  public function create () {
    $postId = $_GET['postId'];
    $content = $_GET['reaction'];

    if (isset($_SESSION['user'])) {
      $userId = $_SESSION['user']['id'];
      $this->reactionModel->create($postId, $userId, $content);
    }

    header("Content-Type: application/json");
    echo json_encode(['status' => 'ok']);
  }

  public function read () {
    $postId = $_GET['postId'];
    $reactions = $this->reactionModel->findAll($postId);

    header("Content-Type: application/json");
    echo json_encode($reactions);
  }
}