<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'Livre.php';


class LivreController {
  private Livre $livre;

  public function __construct() {
    $this->livre = new Livre();
  }

  public function ajouterLivre(): void {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $categorie = $_POST['categorie'];
    $annee_publication = $_POST['annee_publication'];
    $isbn = $_POST['isbn'];

    if (empty($titre) || empty($auteur) || empty($categorie) || empty($annee_publication) || empty($isbn)) {
      echo 'Veuillez remplir tous les champs';
      return;
    }

    $ok = $this->livre->ajouterLivre($titre, $auteur, $categorie, $annee_publication, $isbn);

    if ($ok) {
      echo "L'ajout s'est effectué avec succès!";
    }
    else {
      echo "Une erreur est survenue lors de l'ajout";
    }
  }

  public function supprimerLivre(): void {
    $id = $_GET['id'];
    $this->livre->supprimerLivre($id);
  }

  public function index(): void {
    $livres = $this->livre->obtenirLivres();
    require_once __DIR__  . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'livres' . DIRECTORY_SEPARATOR . 'index.php';
  }
}