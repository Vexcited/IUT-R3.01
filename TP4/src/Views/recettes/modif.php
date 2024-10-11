<main>
  <h1>Modifier la recette: <?= $recipe['titre'] ?></h1>
  
  <form action="/?c=enregistrer_recette&id=<?= $recipe['id'] ?>" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="titre" class="form-label">Titre de la recette *</label>
      <input type="text" class="form-control" name="titre" value="<?= $recipe['titre'] ?>" id="titre" required>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description de la recette *</label>
      <textarea type="text" class="form-control" name="description" id="description" required rows="3"><?= $recipe['description'] ?></textarea>
    </div>
    <div class="mb-3">
      <label for="auteur" class="form-label">Mail de l'auteur *</label>
      <input type="email" class="form-control" name="auteur" value="<?= $recipe['auteur'] ?>" id="auteur" placeholder="john.doe@example.com" required>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image de la recette <br> (pour la modifier, merci de choisir la nouvelle image)</label>
      <input type="file" class="form-control mb-2" name="image" id="image">
      <img src="/upload/<?= $recipe['image'] ?? "no-image.jpg" ?>" alt="<?= $recipe['titre'] ?>" class="rounded w-25 mx-auto img-fluid">
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary" id="enregistrer">
        Modifier
      </button>
    </div>
  </form>
</main>