CREATE TABLE recettes(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(100) NOT NULL,
  description TEXT NOT NULL,
  auteur VARCHAR(100) NOT NULL,
  date_creation DATETIME NOT NULL
);

CREATE TABLE contacts(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(100) NOT NULL,
  description TEXT NOT NULL,
  auteur VARCHAR(100) NOT NULL,
  date_creation DATETIME NOT NULL
);

