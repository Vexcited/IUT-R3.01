Instructions pour l'examen :

Durée : 2 heures

L'examen comporte plusieurs étapes. Vous devez respecter la structure MVC. L'application doit être fonctionnelle et répondre aux exigences spécifiées.

Utiliser comme base, le dossier bibliotek (dans le fichier compressé bibliotek.zip) fourni dans le Moodle.

Partie 1 : Conception de la base de données

Créez une base de données MySQL appelée bibliotek. Elle doit comporter une table livres avec les colonnes suivantes :

id (int, clé primaire, auto-incrément)
titre (varchar, 255)
auteur (varchar, 255)
categorie (varchar, 100)
annee_publication (int)
isbn (varchar, 13)
Exécute le script SQL (livres.sql) pour insérer les livres de base dans la table livres.

Partie 2 : Modèle

Créez un fichier Livre.php dans le dossier models. Ce fichier contient la classe Livre qui interagit avec la base de données pour :

Ajouter un livre.
Lister tous les livres.
Supprimer un livre.
Variables de la classe :

private PDO $pdo; // contiendra un objet PDO, qui permet l’accès à la base de données

Méthodes de la classe :


__construct()
Se connecte à la base de données bibliothèque et stocke la connexion dans la variable $pdo (appelée par $this->pdo)


ajouterLivre($titre, $auteur, $categorie, $annee_publication, $isbn)
Insère un nouveau livre dans la base de données.

obtenirLivres()
Retourne tous les livres de la base de données.


supprimerLivre($id)
Supprime un livre de la base de données en fonction de son id.

Partie 3 : Contrôleur

Créez un fichier LivreController.php dans le dossier controllers. Ce fichier contient la classe LivreController avec les méthodes suivantes :

ajouter() : vérifie si les données du formulaire ont été soumises, puis appelle la méthode ajouterLivre() du modèle.
index() : récupère tous les livres via obtenirLivres() et les passe à la vue.
supprimer($id) : appelle la méthode supprimerLivre() du modèle et revient à la vue index des livres
Partie 4 : Vue

Créez une vue index.php dans le dossier views/livres. Cette vue doit lister tous les livres disponibles dans la bibliothèque sous forme de cards Bootstrap avec les boutons pour les supprimer.

Créer une vue new.php dans le dossier views/livres. Cette vue doit afficher un formulaire pour ajouter un nouveau livre (avec les champs : titre, auteur, catégorie, année de publication, ISBN).

Compléter le fichier index.php à la racine du projet, ajouter ce qui est nécessaire afin de gérer et d’ajouter les routes suivantes :

?action=accueil : affiche la page d’accueil
?action=index : affiche la liste des livres
?action=ajouter : affiche le formulaire d’ajout de livre
?action=supprimer : supprime un livre
Partie 5 : JavaScript

Ajoutez du JavaScript pour améliorer l'interaction utilisateur :

Lors de la soumission du formulaire (submit) : vérifier que la données ISBN fait exactement 13 caractères, sinon afficher un message d’erreur.
Lors du clic sur le bouton supprimer d’un livre, demander la confirmation par une boite de dialogue (confirm()), si l’on ne confirme pas, le livre de doit pas être supprimé.
Pour cela créer un fichier front.js dans le dossier views.

Partie 6 : Finalisation et déploiement local

Testez l'application en local (via localhost).

Assurez-vous que l'ajout, l’affichage et la suppression fonctionnent correctement.
