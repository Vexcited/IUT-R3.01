<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <title>La Cosina</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a
          class="nav-link"
          href="/"
        >
          <i class="bi bi-house"></i>
        </a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          href="/?c=lister"
        >
          Recettes
        </a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          href="/?c=contact"
        >
          <i class="bi bi-envelope"></i> Contact
        </a>
      </li>

      <?php if (isset($_SESSION["user"])) { ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Bienvenue <?= $_SESSION["user"]["identifiant"] ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/?c=profile">Mon profil</a></li>
            <li><a class="dropdown-item" href="/?c=ajout">Ajouter une recette</a></li>
          </ul>
        </li>
      <?php } ?>
    </ul>

    <ul class="navbar-nav ms-auto">
      <?php if (isset($_SESSION["user"])) { ?>
        <li class="nav-item">
          <a
            class="nav-link"
            href="/?c=deconnexion"
          >
            <i class="bi bi-box-arrow-right"></i> Déconnexion
          </a>
        </li>
      <?php } else { ?>
        <li class="nav-item">
          <a
            class="nav-link"
            href="/?c=inscription"
          >
            <i class="bi bi-person-plus"></i> Inscription
          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            href="/?c=connexion"
          >
            <i class="bi bi-box-arrow-in-right"></i> Connexion
          </a>
        </li>
      <?php } ?>
  </nav>
  <div class="container w-75 m-auto">