<?php

class UserController {
  private $userModel;

  function __construct () {
    $this->userModel = new User();
  }

  public function displaySignup () {
    require_once 'views/signup.php';
  }

  public function saveSignup () {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $this->userModel->create($name, $email, $password);

    // on redirige l'utilisateur vers la page de connexion
    header('Location: /?c=user&a=d-login');
  }

  public function displayLogin () {
    require_once 'views/login.php';
  }

  public function saveLogin () {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $this->userModel->find($email);

    if ($user && password_verify($password, $user['password'])) {
      $_SESSION['user'] = $user;
      header('Location: /');
    }
    else {
      header('Location: /?c=user&a=d-login');
    }
  }

  public function signout () {
    session_destroy();
    header('Location: /');
  }

  public function profile () {
    $id = $_GET['id'];
    $user = $this->userModel->findById($id);
    
    if ($user) {
      require_once 'views/profile.php';
    }
    else {
      header('Location: /');
    }
  }

  public function modify () {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $userId = $_SESSION['user']['id'];

      $this->userModel->update($name, $email, $userId);
      $_SESSION['user']['nom'] = $name;
      $_SESSION['user']['email'] = $email;
    }

    header('Content-Type: application/json');
    echo json_encode(['status' => 'ok']);
  }
}