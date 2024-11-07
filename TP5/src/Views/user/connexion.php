<main>
  <h1>Connexion</h1>

  <form action="/?c=connecter" method="POST">
    <div class="mb-3">
      <label for="id" class="form-label">Identifiant/E-mail *</label>
      <input type="text" class="form-control" name="id" id="id" required>
    </div>
    <div class="mb-3">
      <label for="mdp" class="form-label">Mot de passe *</label>
      <input type="password" class="form-control" name="mdp" id="mdp" required>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary" id="connexion">
        Se connecter
      </button>
    </div>
  </form>
</main>
