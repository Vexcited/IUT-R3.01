CREATE TABLE recipes(
  id INT NOT NULL PRIMARY KEY,
  nom VARCHAR(50) NOT NULL,
  mail VARCHAR(50) NOT NULL
);

INSERT INTO recipes(id, nom, mail) VALUES
(0, 'Mikkel RINGAUD', 'mikkel.almonteringaud@literate.ink'),
(1, 'Yann RENARD', 'yann.renard@literate.ink');
