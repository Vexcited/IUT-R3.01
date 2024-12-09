<?php

class SearchController {
  private $userModel;
  private $postModel;
  private $commentModel;

  function __construct () {
    $this->userModel = new User();
    $this->postModel = new Post();
    $this->commentModel = new Comment();
  }

  public function search () {
    $search = $_GET['query'];

    $posts = $this->postModel->search($search);
    $users = $this->userModel->search($search);
    $comments = $this->commentModel->search($search);

    header("Content-Type: application/json");
    echo json_encode([
      'posts' => $posts,
      'users' => $users,
      'comments' => $comments
    ]);
  }
}