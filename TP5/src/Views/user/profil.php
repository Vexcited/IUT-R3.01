<main>
  <h1>Profil de l'utilisateur <?= $_SESSION['user']['identifiant'] ?></h1>

  <!-- two cols -->
  <div class="row">
    <div class="col-6">
      <img src="/upload/profil.png" alt="<?= $_SESSION['user']['identifiant'] ?>" class="img-fluid">
    </div>
    <div class="col-6">
      <p><b>Identifiant :</b> <span id="profil-id" contenteditable="true"><?= $_SESSION['user']['identifiant'] ?></span</p>
      <p><b>Email :</b> <span id="profil-mail" contenteditable="true"><?= $_SESSION['user']['mail'] ?></span</p>
    </div>

    <hr class="mt-5">
    
    <div class="mt-4">
      <button type="button" class="btn btn-primary d-none" data-bs-toggle="modal" id="bouton_modifier_profil">
        Modifier le profil
      </button>
      <a href="/" class="btn btn-primary">
        Retour à l'accueil
      </a>
    </div>
</main>

<script src="/Views/users.js"></script>
