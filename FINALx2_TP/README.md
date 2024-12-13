# TP final (noté)

Nous utilisons Docker (avec Compose) pour lancer l'application.

Pour ce faire, il suffit de lancer la commande suivante :

```bash
docker compose up --build
```

Vous devrez ensuite vous connecter à la base de données (`MySQL`, sur le port `3306`) pour utiliser le script SQL disponible à [`setup.sql`](./setup.sql). Ce script va créer les tables nécéssaires au bon fonctionnement du site web.

Une fois cela fait, vous pouvez accéder à l'application, accessible à l'adresse suivante : [http://localhost](http://localhost).
