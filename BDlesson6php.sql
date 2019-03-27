-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: lesson6php
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `buyers`
--

DROP TABLE IF EXISTS `buyers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `buyers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `pass` varchar(32) DEFAULT NULL,
  `firstname` varchar(25) DEFAULT NULL,
  `laststname` varchar(50) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `adress` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buyers`
--

LOCK TABLES `buyers` WRITE;
/*!40000 ALTER TABLE `buyers` DISABLE KEYS */;
/*!40000 ALTER TABLE `buyers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_buyers` int(11) NOT NULL,
  `id_goods` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `dates` datetime DEFAULT NULL,
  `session_id` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (2,1,2,1,'2019-03-27 14:53:43',NULL),(3,1,2,1,'2019-03-27 14:56:21',NULL),(4,1,2,1,'2019-03-27 15:02:25',NULL),(5,1,2,1,'2019-03-27 15:06:45',NULL),(6,1,3,1,'2019-03-27 16:05:47','bu8ekomsd5o4g77jbcgnvt7v2s0136c3');
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_buyers` int(11) NOT NULL,
  `id_goods` int(11) NOT NULL,
  `count` int(11) DEFAULT NULL,
  `delivery` varchar(255) DEFAULT NULL,
  `dates` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otziv`
--

DROP TABLE IF EXISTS `otziv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `otziv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_otziv` date DEFAULT NULL,
  `text_otziv` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otziv`
--

LOCK TABLES `otziv` WRITE;
/*!40000 ALTER TABLE `otziv` DISABLE KEYS */;
INSERT INTO `otziv` VALUES (1,'Пробный','2019-03-19','Пробный отзыв'),(2,'Пробный','2019-03-19','Пробный отзыв'),(4,'Второй','2019-03-19','пробный');
/*!40000 ALTER TABLE `otziv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tovar`
--

DROP TABLE IF EXISTS `tovar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tovar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tovar`
--

LOCK TABLES `tovar` WRITE;
/*!40000 ALTER TABLE `tovar` DISABLE KEYS */;
INSERT INTO `tovar` VALUES (1,'Бутсы Adidas Nemeziz 18.1 FG DB2082 ','buts.jpg','Фантастические бутсы с уникальной тейпинговой системой - Adidas Nemeziz 18.1 FG. Дизайн Nemeziz был рожден благодаря спортивному тейпированию. Адидас Немезис способствуют скоростной игре на натуральном газоне. Эластичный материал Agility Bandage не сковывает движения, при этом надежно фиксирует зону щиколотки. Шипы Torsion Ribs обеспечивают надежное сцепление с игровой поверхностью. Компрессионная поддержка Nemeziz обеспечивает полный комфорт для молниеносных маневров. Улучши качество игры - закажи новые бутсы Adidas Nemeziz на FootballStore.ru',1000),(2,'Спортивный костюм детский Nike Barcelona 894401-691','kostum.jpg','Ткань Nike Dry отводит влагу и обеспечивает комфорт. Эластичный пояс на шнурке обеспечивает плотную удобную посадку. Молнии на штанинах позволяют удобно переодеваться. Рукава реглан не сковывают движений. Карманы на молнии на куртке и брюках позволяют надежно хранить мелкие вещи. Минималистичные швы не натирают кожу. Эмблема ФК «Барселона» на куртке и брюках демонстрирует твою любовь к клубу.',7690),(3,'Перчатки тренировочные Nike Barcelona Academy Hyperwarm GS0379-451','perchatki.jpg','Технология Dri-FIT отводит влагу от кожи, обеспечивая комфорт. Силиконовые зоны на пальцах и ладонях улучшают сцепление с мячом. Эластичные манжеты для надежной посадки. Удлиненное запястье обеспечивает дополнительную защиту и тепло. На перчатках нанесены принт Bar?a и эмблема команды.',1900),(4,'Куртка Nike Barcelona 2018/19','kurtka.jpg','Ткань рипстоп защищает от дождя и ветра. Наполнитель из утиного пуха для легкости и тепла. Двусторонняя молния позволяет регулировать вентиляцию. Карманы для рук на молнии позволяют надежно хранить мелочи. Удлиненная сзади нижняя кромка создает многослойный вид и обеспечивает дополнительную защиту.',12290),(5,'Футболка хлопковая Adidas Real Madrid 2018/19','futbolka.jpg','Новая хлопковая футболка Real Madrid 2018/19 от немецкой компании Adidas. Модель трансформировалась из спортивной игровой футболки “королевского клуба” в уличную версию для повседневной жизни. Свободный крой футболки сочетает в себе современность и лаконичность, а специальная ткань Climalite отводит излишки влаги и поддерживает комфорт на протяжении всего времени. Футболка станет отличным вариантом для повседневной жизни и активного отдыха.',1990);
/*!40000 ALTER TABLE `tovar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(20) DEFAULT NULL,
  `e-mail_user` varchar(50) DEFAULT NULL,
  `pass_user` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@mail.ru','e0167039a54b09d0d4386e5980e8ba4b');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'lesson6php'
--

--
-- Dumping routines for database 'lesson6php'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-27 16:09:50
