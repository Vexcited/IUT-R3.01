<?php

class UserController {
  /** @var PDO */
  private $pdo;

  function __construct($pdo) {
    $this->pdo = $pdo;
  }

  function inscription() {
    require_once 'Views/user/inscription.php';
  }
  
  function enregistrer() {
    if (!isset($_POST['identifiant']) || !isset($_POST['email']) || !isset($_POST['mdp'])) {
      echo "La demande d'inscription n'a pas été correctement envoyée";
      return;
    }

    $identifiant = $_POST['identifiant'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $query = $this->pdo->prepare('INSERT INTO users (identifiant, password, mail, create_time, isAdmin) VALUES (:identifiant, :password, :mail, NOW(), 0)');
  
    $query->bindValue(':identifiant', $identifiant, PDO::PARAM_STR);
    $query->bindValue(':password', password_hash($mdp, PASSWORD_DEFAULT), PDO::PARAM_STR);
    $query->bindValue(':mail', $email, PDO::PARAM_STR);
    $ok = $query->execute();

    if ($ok) {
      require_once 'Views/user/enregistrement.php';
    }
    else echo "Erreur lors de l'enregistrement";
  }
  
  function connexion() {
    require_once 'Views/user/connexion.php';
  }

  function verifieConnexion() {
    if (!isset($_POST['id']) || !isset($_POST['mdp'])) {
      echo "La demande de connexion n'a pas été correctement envoyée";
      return;
    }

    $id = $_POST['id'];
    $mdp = $_POST['mdp'];

    $query = $this->pdo->prepare('SELECT * FROM users WHERE identifiant = :id OR mail = :id');
    // retourne à / sans utiliser header() car headers already sent
    $query->bindValue(':id', $id, PDO::PARAM_STR);
    $query->execute();

    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($mdp, $user['password'])) {
      $_SESSION['user'] = $user;
      echo "<script>window.location.href = '/';</script>";
    }
    else {
      echo "Identifiant ou mot de passe incorrect";
    }
  }

  function deconnexion() {
    session_destroy();
    echo "<script>window.location.href = '/';</script>";
  }

  function profil() {
    require_once 'Views/user/profil.php';
  }
}