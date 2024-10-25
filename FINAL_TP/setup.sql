CREATE TABLE IF NOT EXISTS livres (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(255) NOT NULL,
  auteur VARCHAR(255) NOT NULL,
  categorie VARCHAR(100) NOT NULL,
  annee_publication INT NOT NULL,
  isbn VARCHAR(13) NOT NULL
);

INSERT INTO livres (titre, auteur, categorie, annee_publication, isbn) VALUES
('1984', 'George Orwell', 'Science-Fiction', 1949, '9780451524935'),
('Le Meilleur des mondes', 'Aldous Huxley', 'Science-Fiction', 1932, '9780099477464'),
('Les Misérables', 'Victor Hugo', 'Classique', 1862, '9782070409180'),
('Le Petit Prince', 'Antoine de Saint-Exupéry', 'Littérature Jeunesse', 1943, '9782070612757'),
('Harry Potter à l\'école des sorciers', 'J.K. Rowling', 'Fantastique', 1997, '9780747532699'),
('Le Seigneur des Anneaux', 'J.R.R. Tolkien', 'Fantastique', 1954, '9780261102385'),
('Don Quichotte', 'Miguel de Cervantes', 'Classique', 1605, '9780142437230'),
('L\'Étranger', 'Albert Camus', 'Philosophie', 1942, '9782070360023'),
('Fahrenheit 451', 'Ray Bradbury', 'Science-Fiction', 1953, '9781451673319'),
('La Métamorphose', 'Franz Kafka', 'Classique', 1915, '9783150093568'),
('Moby Dick', 'Herman Melville', 'Aventure', 1851, '9781503280786'),
('Crime et Châtiment', 'Fiodor Dostoïevski', 'Classique', 1866, '9780140449136'),
('Le Nom de la Rose', 'Umberto Eco', 'Historique', 1980, '9780156001311'),
('Dune', 'Frank Herbert', 'Science-Fiction', 1965, '9780441172719'),
('Les Fleurs du mal', 'Charles Baudelaire', 'Poésie', 1857, '9782070413118');
