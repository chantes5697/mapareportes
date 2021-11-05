-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for comidacallejera
CREATE DATABASE IF NOT EXISTS `comidacallejera` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `comidacallejera`;

-- Dumping structure for table comidacallejera.puestos
CREATE TABLE IF NOT EXISTS `puestos` (
  `idpuesto` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` text NOT NULL,
  `comida` int(11) DEFAULT NULL,
  `dias` int(11) DEFAULT NULL,
  `periodo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpuesto`),
  KEY `FK_puestos_comidas` (`comida`),
  KEY `FK_puestos_dias` (`dias`),
  KEY `FK_puestos_periodos` (`periodo`),
  CONSTRAINT `FK_puestos_comidas` FOREIGN KEY (`comida`) REFERENCES `comidas` (`idcomida`),
  CONSTRAINT `FK_puestos_dias` FOREIGN KEY (`dias`) REFERENCES `dias` (`iddia`),
  CONSTRAINT `FK_puestos_periodos` FOREIGN KEY (`periodo`) REFERENCES `periodos` (`idperiodo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table comidacallejera.comidas
CREATE TABLE IF NOT EXISTS `comidas` (
  `idcomida` int(11) NOT NULL AUTO_INCREMENT,
  `comida` text NOT NULL,
  PRIMARY KEY (`idcomida`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table comidacallejera.dias
CREATE TABLE IF NOT EXISTS `dias` (
  `iddia` int(11) NOT NULL AUTO_INCREMENT,
  `dias` text DEFAULT NULL,
  PRIMARY KEY (`iddia`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table comidacallejera.periodos
CREATE TABLE IF NOT EXISTS `periodos` (
  `idperiodo` int(11) NOT NULL AUTO_INCREMENT,
  `periodo` text DEFAULT NULL,
  PRIMARY KEY (`idperiodo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.



/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
