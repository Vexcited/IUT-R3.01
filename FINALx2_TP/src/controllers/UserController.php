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
}