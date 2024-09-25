<main>
  <h1>Formulaire de contact</h1>

  <form action="/?c=enregistrer" method="POST">
    <input hidden name="type" value="contact">
    
    <div class="mb-3">
      <label for="titre" class="form-label">Nom</label>
      <input type="text" class="form-control" name="titre" id="titre" required>
    </div>
    <div class="mb-3">
      <label for="auteur" class="form-label">Votre mail</label>
      <input type="email" class="form-control" name="auteur" id="auteur" required>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea type="text" class="form-control" name="description" id="description" required rows="3">
      </textarea>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary" id="enregistrer">
        Enregistrer
      </button>
    </div>
  </form>
</main>
