<main>
  <h1>Ajouter un livre</h1>

  <form action="/?action=ajouter" method="POST" id="book-form">
    <div class="mb-3">
      <label for="titre" class="form-label">Titre du livre</label>
      <input type="text" class="form-control" name="titre" id="titre" placeholder="Les aventures d'Alina" required>
    </div>
    <div class="mb-3">
      <label for="auteur" class="form-label">Auteur du livre</label>
      <input type="text" class="form-control" name="auteur" id="auteur" placeholder="John DOE" required>
    </div>
    <div class="mb-3">
      <label for="categorie" class="form-label">Categorie du livre</label>
      <input type="text" class="form-control" name="categorie" id="categorie" placeholder="Roman policier" required>
    </div>
    <div class="mb-3">
      <label for="annee_publication" class="form-label">Année de publication du livre</label>
      <input type="number" class="form-control" name="annee_publication" id="annee_publication" placeholder="2016" required>
    </div>
    <div class="mb-3">
      <label for="isbn" class="form-label">ISBN/EAN13 du livre (13 caractères)</label>
      <input type="text" class="form-control" name="isbn" id="isbn" required>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">
        Ajouter
      </button>
    </div>
  </form>
</main>
