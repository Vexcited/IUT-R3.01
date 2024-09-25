<main>
  <h1>Ajouter une recette</h1>

  <form action="/?c=enregistrer" method="POST">
    <input hidden name="type" value="recette">

    <div class="mb-3">
      <label for="titre" class="form-label">Titre de la recette</label>
      <input type="text" class="form-control" name="titre" id="titre" required>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description de la recette</label>
      <textarea type="text" class="form-control" name="description" id="description" required rows="3"></textarea>
    </div>
    <div class="mb-3">
      <label for="auteur" class="form-label">Mail de l'auteur</label>
      <input type="email" class="form-control" name="auteur" id="auteur" placeholder="john.doe@example.com required>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary" id="enregistrer">
        Enregistrer
      </button>
    </div>
  </form>
</main>
