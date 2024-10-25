<!DOCTYPE html>
<html lang="fr">
<head>
  <title>BiblioTek</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      /* permet de faire le layout header-main-footer */
      display: grid;
      min-height: 100vh;
      grid-auto-rows: auto 1fr auto;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        BiblioTek
      </a>
  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?= $route === 'accueil' ? 'active' : '' ?>" href="/">
              Accueil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $route === 'index' ? 'active' : '' ?>" href="/?action=index">
              Index
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $route === 'ajouter' ? 'active' : '' ?>" href="/?action=ajouter">
              Ajouter
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container mt-3">
