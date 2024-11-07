<main>
  <h1>Recettes</h1>

  <div class="row">
    <?php foreach ($recipes as $recipe) : ?>
      <div class="col-4 p-2">
        <div class="card recipe" data-id="<?= $recipe['id'] ?>">
          <img src="/upload/<?= $recipe['image'] ?? "no-image.jpg" ?>" alt="<?= $recipe['titre'] ?>" class="card-img-top">
          <div class="card-body">
            <h2 class="card-title">
              <?= $recipe['titre'] ?>
            </h2>
            <p class="card-text">
              <?= $recipe['description'] ?>
            </p>
            Auteur : <a href="mailto:<?= $recipe['auteur'] ?>"><?= $recipe['auteur'] ?></a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <a href="/" class="btn btn-primary">Retour à l'accueil</a>
</main>

<script src="/Views/recipes.js"></script>