-- MySQL dump 10.13  Distrib 9.0.1, for macos15.0 (arm64)
--
-- Host: 127.0.0.1    Database: bibliotek
-- ------------------------------------------------------
-- Server version	8.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `livres`
--

DROP TABLE IF EXISTS `livres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `livres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `annee_publication` int NOT NULL,
  `isbn` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `livres`
--

LOCK TABLES `livres` WRITE;
/*!40000 ALTER TABLE `livres` DISABLE KEYS */;
INSERT INTO `livres` VALUES (1,'1984','George Orwell','Science-Fiction',1949,'9780451524935'),(2,'Le Meilleur des mondes','Aldous Huxley','Science-Fiction',1932,'9780099477464'),(3,'Les Misérables','Victor Hugo','Classique',1862,'9782070409180'),(4,'Le Petit Prince','Antoine de Saint-Exupéry','Littérature Jeunesse',1943,'9782070612757'),(5,'Harry Potter à l\'école des sorciers','J.K. Rowling','Fantastique',1997,'9780747532699'),(6,'Le Seigneur des Anneaux','J.R.R. Tolkien','Fantastique',1954,'9780261102385'),(7,'Don Quichotte','Miguel de Cervantes','Classique',1605,'9780142437230'),(8,'L\'Étranger','Albert Camus','Philosophie',1942,'9782070360023'),(9,'Fahrenheit 451','Ray Bradbury','Science-Fiction',1953,'9781451673319'),(10,'La Métamorphose','Franz Kafka','Classique',1915,'9783150093568'),(11,'Moby Dick','Herman Melville','Aventure',1851,'9781503280786'),(12,'Crime et Châtiment','Fiodor Dostoïevski','Classique',1866,'9780140449136'),(13,'Le Nom de la Rose','Umberto Eco','Historique',1980,'9780156001311'),(20,'Frigiel et Fluffy (T1) : Le Retour de l\'Ender Dragon','Frigiel','Roman jeunesse',2016,'9782375540107'),(21,'Frigiel et Fluffy (T5) : L\'ILE PERDUE','Frigiel','Roman jeunesse',2019,'9782302075498');
/*!40000 ALTER TABLE `livres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'bibliotek'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-25 10:29:12
