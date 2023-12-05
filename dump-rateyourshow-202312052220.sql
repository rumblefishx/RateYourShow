-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: rateyourshow
-- ------------------------------------------------------
-- Server version	11.2.2-MariaDB-1:11.2.2+maria~ubu2204

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
-- Table structure for table `tshow`
--

DROP TABLE IF EXISTS `tshow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tshow` (
  `showid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `cover` varchar(1200) DEFAULT NULL,
  `Type` varchar(30) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  PRIMARY KEY (`showid`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tshow`
--

LOCK TABLES `tshow` WRITE;
/*!40000 ALTER TABLE `tshow` DISABLE KEYS */;
INSERT INTO `tshow` VALUES (14,'Breaking Bad','https://m.media-amazon.com/images/M/MV5BYTU3NWI5OGMtZmZhNy00MjVmLTk1YzAtZjA3ZDA3NzcyNDUxXkEyXkFqcGdeQXVyODY5Njk4Njc@._V1_SX300.jpg','series',5),(15,'Mr. Robot','https://m.media-amazon.com/images/M/MV5BM2QyNDIzOGMtNThhNS00NmUwLWI0ZjUtZjdkN2I1OTRjZWQ3XkEyXkFqcGdeQXVyNzQ1ODk3MTQ@._V1_SX300.jpg','series',7),(16,'Game of Thrones','https://m.media-amazon.com/images/M/MV5BN2IzYzBiOTQtNGZmMi00NDI5LTgxMzMtN2EzZjA1NjhlOGMxXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_SX300.jpg','series',8),(17,'The Big Bang Theory','https://m.media-amazon.com/images/M/MV5BY2FmZTY5YTktOWRlYy00NmIyLWE0ZmQtZDg2YjlmMzczZDZiXkEyXkFqcGdeQXVyNjg4NzAyOTA@._V1_SX300.jpg','series',9),(18,'Prison Break','https://m.media-amazon.com/images/M/MV5BMTg3NTkwNzAxOF5BMl5BanBnXkFtZTcwMjM1NjI5MQ@@._V1_SX300.jpg','series',8),(19,'The Handmaid\'s Tale','https://m.media-amazon.com/images/M/MV5BN2M0NTdiMGYtNmFjZi00MjIxLWI3OTUtNTdmZDRlOTNiYWU0XkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_SX300.jpg','series',10),(20,'White Collar','https://m.media-amazon.com/images/M/MV5BNDI5MDgyMTYzNF5BMl5BanBnXkFtZTcwMjAwNzk1Mw@@._V1_SX300.jpg','series',7),(21,'Lie to Me','https://m.media-amazon.com/images/M/MV5BMTc2MjA4MTM2OV5BMl5BanBnXkFtZTcwMTYzMzA1Mg@@._V1_SX300.jpg','series',4),(22,'Servant','https://m.media-amazon.com/images/M/MV5BNDNiOWE4Y2YtMDZiOS00OGFlLWIyN2QtYjA0MmFlOWY0NDRkXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg','series',9),(23,'The Matrix','https://m.media-amazon.com/images/M/MV5BNzQzOTk3OTAtNDQ0Zi00ZTVkLWI0MTEtMDllZjNkYzNjNTc4L2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SX300.jpg','movie',10),(24,'Her','https://m.media-amazon.com/images/M/MV5BMjA1Nzk0OTM2OF5BMl5BanBnXkFtZTgwNjU2NjEwMDE@._V1_SX300.jpg','movie',9),(25,'Titanic','https://m.media-amazon.com/images/M/MV5BMDdmZGU3NDQtY2E5My00ZTliLWIzOTUtMTY4ZGI1YjdiNjk3XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_SX300.jpg','movie',9),(26,'Split','https://m.media-amazon.com/images/M/MV5BZTJiNGM2NjItNDRiYy00ZjY0LTgwNTItZDBmZGRlODQ4YThkL2ltYWdlXkEyXkFqcGdeQXVyMjY5ODI4NDk@._V1_SX300.jpg','movie',9),(27,'Bird Box','https://m.media-amazon.com/images/M/MV5BMjAzMTI1MjMyN15BMl5BanBnXkFtZTgwNzU5MTE2NjM@._V1_SX300.jpg','movie',7),(28,'Fast & Furious','https://m.media-amazon.com/images/M/MV5BYjQ1ZTMxNzgtZDcxOC00NWY5LTk3ZjAtYzRhMDhlNDZlOWEzXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX300.jpg','movie',7),(29,'The Lord of the Rings: The Fellowship of the Ring','https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_SX300.jpg','movie',10),(30,'Star Wars: Episode II - Attack of the Clones','https://m.media-amazon.com/images/M/MV5BMDAzM2M0Y2UtZjRmZi00MzVlLTg4MjEtOTE3NzU5ZDVlMTU5XkEyXkFqcGdeQXVyNDUyOTg3Njg@._V1_SX300.jpg','movie',5),(31,'Mission: Impossible','https://m.media-amazon.com/images/M/MV5BOTFhMWY3ZTctNTJlOC00Y2UwLThmOGUtMWU4NDI1Yzg4ODRkXkEyXkFqcGdeQXVyMTUzMDUzNTI3._V1_SX300.jpg','movie',10);
/*!40000 ALTER TABLE `tshow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tuser`
--

DROP TABLE IF EXISTS `tuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tuser` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `access_level` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tuser`
--

LOCK TABLES `tuser` WRITE;
/*!40000 ALTER TABLE `tuser` DISABLE KEYS */;
INSERT INTO `tuser` VALUES (1,'Rumblefish','cleiton.ribeiro.dev@gmail.com','$2y$10$QC7SjDJPvpRs4rCi4lAHvOjQEnxCQFqtIlPPzwFlhzfSyJE4Ri7FK',0),(2,'Avatar','avatar@gmail.com','$2y$10$2cdzlVS3CuVciEpXPo/x2.gIurB.xWvIeYuV/YPFWFIZJSUrSEU4C',0),(3,'','','',0),(4,'eita','eta@gmail.com','$2y$10$8K/W3A1r/XZPaHozu9ClMOFVAY8Y3rxlY61bSO2UIj7QXn2DtlyHm',0),(5,'dsadsad','adsdadsa@gmail.com','$2y$10$PsQfSeyW5uX6/CR7igMJ1u1GZmFN71/lPYrLUIgEiVg9vVvCOpKhK',0);
/*!40000 ALTER TABLE `tuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tuserrating`
--

DROP TABLE IF EXISTS `tuserrating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tuserrating` (
  `ratingId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned DEFAULT NULL,
  `showid` int(10) unsigned DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `score` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`ratingId`),
  KEY `userid` (`userid`),
  KEY `showid` (`showid`),
  CONSTRAINT `tuserrating_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `tuser` (`userid`),
  CONSTRAINT `tuserrating_ibfk_2` FOREIGN KEY (`showid`) REFERENCES `tshow` (`showid`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tuserrating`
--

LOCK TABLES `tuserrating` WRITE;
/*!40000 ALTER TABLE `tuserrating` DISABLE KEYS */;
INSERT INTO `tuserrating` VALUES (20,1,14,'Awesome Show','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',5),(21,1,15,'Deep','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',7),(22,1,16,'A must watch','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',8),(23,1,17,'Funniest TV Show','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',9),(24,1,18,'Thriling','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',8),(25,1,19,'Emotional','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',10),(26,1,20,'Well Written','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',7),(27,1,21,'Disapointing','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',4),(28,1,22,'Intrigging','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',9),(29,1,23,'Masterpiece','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',10),(30,1,24,'One of the bests','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',9),(31,1,25,'Classical','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',9),(32,1,26,'A Big Experience','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',9),(33,1,27,'Sandra Bullocks Highlight','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',7),(34,1,28,'A great start','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',7),(35,1,29,'Iconic','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',10),(36,1,30,'Disapointing','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',5),(37,1,31,'My favorite','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',10),(38,1,23,'Welcome to the revolution','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',9);
/*!40000 ALTER TABLE `tuserrating` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'IGNORE_SPACE,STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`%`*/ /*!50003 TRIGGER updateMovieScore AFTER INSERT ON tuserrating 
FOR EACH ROW
BEGIN
    DECLARE totalscore INT DEFAULT 0;
   
    SELECT (sum(t.score)/count(*)) INTO totalscore FROM tuserrating t WHERE t.showid = NEW.showid;

    UPDATE tshow SET rating = totalscore WHERE showid = NEW.showid;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Dumping routines for database 'rateyourshow'
--
/*!50003 DROP PROCEDURE IF EXISTS `InsertReview` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'IGNORE_SPACE,STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`%` PROCEDURE `InsertReview`(
	IN Title VARCHAR(50),
	IN Cover VARCHAR(1200),
	IN ShowType VARCHAR(30),	
	IN Review TEXT,
	IN ReviewTitle VARCHAR(30),
	IN Score TinyInt,
	IN Nick Varchar(15),
	OUT ResultOp TinyInt
)
BEGIN

	DECLARE EXIT HANDLER FOR SQLEXCEPTION
    begin
	    show ERRORS;
        SET ResultOp = 1;
        ROLLBACK; 
    END;
   
	/* CHECK IF THE SHOW ALREADY EXISTS , OTHERWISE INSERT THE SHOW. 
	RETURN ID FOR BOTH CASES. */
	
	Set @showid = 0;	
	Set @userId = 0;
	
	SELECT tshow.showid into @showid from tshow where tshow.title like Title;
	SELECT tuser.userid into @userId from tuser where tuser.nickname  like Nick;
	
	start transaction;

	IF @showid = 0 THEN 
		INSERT INTO tshow(
			tshow.title,
			tshow.cover,
			tshow.Type) 
		VALUES(
			Title,
			Cover,
			ShowType
		);
		set @showid = last_insert_id(); 
	end if;

	INSERT INTO tuserrating(
		tuserrating.showid,
		tuserrating.title,
		tuserrating.review,
		tuserrating.score,
		tuserrating.userid) 
	values(@showid,
			ReviewTitle,
			Review,
			Score,
			@userId);
	
	SET ResultOp = 0;
	commit;
	SHOW ERRORS;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `InsertUser` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'IGNORE_SPACE,STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`%` PROCEDURE `InsertUser`(
    IN inputNick VARCHAR(15),
    IN inputEmail VARCHAR(30),
    IN inputPass VARCHAR(128),
    OUT procResult INT
)
BEGIN
    DECLARE email_found INT;
    DECLARE nick_found INT;
    
    -- Check if the email is already registered
    SELECT COUNT(*) INTO email_found FROM tuser WHERE email = inputEmail;
    
    -- Check if the nickname is already registered
    SELECT COUNT(*) INTO nick_found FROM tuser WHERE nickname = inputNick;
    
    IF email_found > 0 THEN
        SET procResult = 1; -- Email is already registered
    ELSEIF nick_found > 0 THEN
        SET procResult = 2; -- Nickname is already registered
    ELSE
        -- Insert the user into the tuser table
        INSERT INTO tuser (nickname, email, password, access_level)
        VALUES (inputNick, inputEmail, inputPass, 0);
        SET procResult = 0; -- Success
    END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-05 22:20:05
