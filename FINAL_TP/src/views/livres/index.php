<main>
  <h1>Livres</h1>

  <div class="row">
    <?php foreach ($livres as $livre) : ?>
      <div class="col-4 p-2">
        <div class="card livre" data-id="<?= $livre['id'] ?>">
          <div class="card-body">
            <h2 class="card-title">
              <?= $livre['titre'] ?>
            </h2>
            <p class="card-text">
              <?= $livre['categorie'] ?>
            </p>

            <p>
              Rédigé par <?= $livre['auteur'] ?> en <?= $livre['annee_publication'] ?>
            </p>

            <p>
              ISBN: <?= $livre['isbn'] ?>
            </p>

            <button type="button" class="delete-button btn btn-danger" data-id="<?= $livre['id'] ?>">
              Supprimer
            </button>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <a href="/?action=accueil" class="btn btn-primary">Retour à l'accueil</a>
</main>

<script src="/Views/front.js"></script>