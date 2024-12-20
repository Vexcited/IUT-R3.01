<main>
  <h1>Formulaire de contact</h1>

  <form action="/?c=enregistrer_contact" method="POST">
    <div class="mb-3">
      <label for="titre" class="form-label">Nom</label>
      <input type="text" class="form-control" name="titre" id="titre" placeholder="John DOE" required>
    </div>
    <div class="mb-3">
      <label for="auteur" class="form-label">Votre mail</label>
      <input type="email" class="form-control" name="auteur" id="auteur" placeholder="john.doe@example.com" required>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea type="text" class="form-control" name="description" id="description" placeholder="Bonjour, ..." required rows="3"></textarea>
    </div>

    <div class="mb-3">
      <label for="receiveCopy" class="form-label">Recevoir une copie</label>
      <input type="checkbox" name="receiveCopy" id="receiveCopy">
    </div>

    <div class="mb-3">
      <button type="submit" class="btn btn-primary" id="enregistrer">
        Enregistrer
      </button>
    </div>
  </form>
</main>
