CREATE TABLE recettes(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(100) NOT NULL,
  description TEXT NOT NULL,
  auteur VARCHAR(100) NOT NULL,
  date_creation DATETIME NOT NULL,
  image VARCHAR(100) NULL
);

-- or as an update of table
-- ALTER TABLE recettes ADD COLUMN image VARCHAR(100) NULL;

CREATE TABLE contacts(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(100) NOT NULL,
  description TEXT NOT NULL,
  auteur VARCHAR(100) NOT NULL,
  date_creation DATETIME NOT NULL
);

CREATE TABLE users (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  identifiant VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  mail VARCHAR(100) NOT NULL,
  create_time DATE NOT NULL,
  isAdmin TINYINT(1) NOT NULL
);

INSERT INTO recettes (titre, description, auteur, date_creation) VALUES
  ('Treipaïs', "Le « Treipaïs » est une spécialité pâtissière du Limousin créé par un groupement de pâtissiers locaux. Il est composé de trois textures et de trois parfums : un fond de feuilletine, une mousse aux châtaignes, une mousse au chocolat noir, un biscuit à la noisette et un glaçage au chocolat, surmonté d'un « marron » glacé et de deux feuilles vertes en pâte d'amandes.", 'contact@lacozina.fr', NOW()),
  ('Confit de canard', "La viande est cuite pendant au moins 2 h dans la graisse chaude,entre 70 et 85 C, puis mise en bocaux et recouverte de graisse, de telle sorteque l'air ne puisse pas entrer en contact avec elle et la détériorer.", 'contact@lacozina.fr', NOW()),
  ('Soupe au pistou', "La soupe au pistou (sopa au písto, soupo au pístou) est une soupe aux légumes d'été, avec des pâtes, servie avec du pistou, un mélange d'ail, d'huile d'olive et de basilic haché. Le terme pistou désigne, en provençal, le pilon du mortier qui sert à faire la préparation, et non pas le basilic qui se dit baseli.", 'contact@lacozina.fr', NOW()),
  ('Tapenade', "La tapenade (tapenada, tapenado) est une recette de cuisine provençale, mise au point en 1880 par un chef-cuisinier de Marseille. Elle est principalement constituée d'olives broyées, d'anchois, de thon mariné, d'herbes et de câpres (tapena en occitan, d'où son nom).", 'contact@lacozina.fr', NOW());

-- when you want to upgrade the admin status of a specific user
-- UPDATE users SET isAdmin = 1 WHERE identifiant = 'admin';
