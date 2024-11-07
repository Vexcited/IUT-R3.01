<main>
  <h1>Inscription</h1>

  <form action="/?c=inscrire" method="POST">
    <div class="mb-3">
      <label for="identifiant" class="form-label">Identifiant *</label>
      <input type="text" class="form-control" name="identifiant" id="identifiant" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Adresse mail *</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="john.doe@example.com" required>
    </div>
    <div class="mb-3">
      <label for="mdp" class="form-label">Mot de passe *</label>
      <input type="password" class="form-control" name="mdp" id="mdp" required>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary" id="enregistrer">
        Enregistrer
      </button>
    </div>
  </form>
</main>
