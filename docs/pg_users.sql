-- --------------------------------------------------------
-- 主機:                           localhost
-- 伺服器版本:                        10.3.37-MariaDB-0ubuntu0.20.04.1 - Ubuntu 20.04
-- 伺服器作業系統:                      debian-linux-gnu
-- HeidiSQL 版本:                  12.2.0.6576
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- 傾印  資料表 ci4.pg_users 結構
CREATE TABLE IF NOT EXISTS `pg_users` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- 正在傾印表格  ci4.pg_users 的資料：~16 rows (近似值)
INSERT INTO `pg_users` (`id`, `name`, `email`, `city`) VALUES
	(1, 'Yogesh singh', 'yogesh@makitweb.com', 'Bhopal'),
	(2, 'Sonarika Bhadoria', 'bsonarika@makitweb.com', 'Indore'),
	(3, 'Sunil singh', 'sunil@makitweb.com', 'Pune'),
	(4, 'Vishal Sahu', 'vishal@makitweb.com', 'Bhopal'),
	(5, 'jitendra singh', 'jitendra@makitweb.com', 'Delhi'),
	(6, 'Shreya joshi', 'shreya@makitweb.com', 'Indore'),
	(7, 'Abhilash namdev', 'abhilash@makitweb.com', 'Pune'),
	(8, 'Ekta patidar', 'ekta@makitweb.com', 'Bhopal'),
	(9, 'Deepak singh', 'deepak@makitweb.com', 'Delhi'),
	(10, 'Rohit Kumar', 'rohit@makitweb.com', 'Bhopal'),
	(11, 'Bhavna Mahajan', 'bhavna@makitweb.com', 'Indore'),
	(12, 'Ajay singh', 'ajay@makitweb.com', 'Delhi'),
	(13, 'Mohit', 'mohit@makitweb.com', 'Pune'),
	(14, 'Akhilesh Sahu', 'akhilesh@makitweb.com', 'Indore'),
	(15, 'Ganesh', 'ganesh@makitweb.com', 'Pune'),
	(16, 'Vijay', 'vijay@makitweb.com', 'Delhi');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
