-- MySQL dump 10.13  Distrib 5.6.29, for Linux (x86_64)
--
-- Host: localhost    Database: shadowsocks
-- ------------------------------------------------------
-- Server version	5.6.29-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activate`
--

DROP TABLE IF EXISTS `activate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activate_code` varchar(128) NOT NULL,
  `uid` int(11) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `email` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activate`
--

LOCK TABLES `activate` WRITE;
/*!40000 ALTER TABLE `activate` DISABLE KEYS */;
INSERT INTO `activate` VALUES (1,'M5ZGEwYzhmY2Y0MGE0YjQ2ND',2,'d5aaron','d5aaron@163.com',0),(2,'EwYzhmY2Y0MGE0YjQ2NDY2Mz',2,'d5aaron','d5aaron@163.com',0),(3,'ODM5ZGEwYzhmY2Y0MGE0YjQ2',2,'d5aaron','d5aaron@163.com',0),(4,'mMjNlNzU3M2Q4ZGY4MDczMGV',3,'lihuaigang','jingshenbing5211@163.com',0),(5,'wYzhmY2Y0MGE0YjQ2NDY2MzQ',2,'d5aaron','d5aaron@163.com',0),(6,'zhmY2Y0MGE0YjQ2NDY2MzQwN',2,'d5aaron','d5aaron@163.com',0),(7,'ZGEwYzhmY2Y0MGE0YjQ2NDY2',2,'d5aaron','d5aaron@163.com',0),(8,'ZGEwYzhmY2Y0MGE0YjQ2NDY2',2,'d5aaron','d5aaron@163.com',0),(9,'3ODM5ZGEwYzhmY2Y0MGE0YjQ',2,'d5aaron','d5aaron@163.com',0),(10,'DM5ZGEwYzhmY2Y0MGE0YjQ2N',2,'d5aaron','d5aaron@163.com',0),(11,'zhmY2Y0MGE0YjQ2NDY2MzQwN',2,'d5aaron','d5aaron@163.com',0),(12,'zhmY2Y0MGE0YjQ2NDY2MzQwN',2,'d5aaron','d5aaron@163.com',0),(13,'ODM5ZGEwYzhmY2Y0MGE0YjQ2',2,'d5aaron','d5aaron@163.com',0),(14,'5ZGEwYzhmY2Y0MGE0YjQ2NDY',2,'d5aaron','d5aaron@163.com',0),(15,'DA3ODM5ZGEwYzhmY2Y0MGE0Y',2,'d5aaron','d5aaron@163.com',1),(16,'M5ZGEwYzhmY2Y0MGE0YjQ2ND',2,'d5aaron','d5aaron@163.com',0),(17,'DM5ZGEwYzhmY2Y0MGE0YjQ2N',2,'d5aaron','d5aaron@163.com',0),(18,'zhmY2Y0MGE0YjQ2NDY2MzQwN',2,'d5aaron','d5aaron@163.com',0),(19,'wYzhmY2Y0MGE0YjQ2NDY2MzQ',2,'d5aaron','d5aaron@163.com',0),(20,'M5ZGEwYzhmY2Y0MGE0YjQ2ND',2,'d5aaron','d5aaron@163.com',0),(21,'YzhmY2Y0MGE0YjQ2NDY2MzQw',2,'d5aaron','d5aaron@163.com',0),(22,'A3ODM5ZGEwYzhmY2Y0MGE0Yj',2,'d5aaron','d5aaron@163.com',0),(23,'wYzhmY2Y0MGE0YjQ2NDY2MzQ',2,'d5aaron','d5aaron@163.com',0),(24,'DA3ODM5ZGEwYzhmY2Y0MGE0Y',2,'d5aaron','d5aaron@163.com',0),(25,'M5ZGEwYzhmY2Y0MGE0YjQ2ND',2,'d5aaron','d5aaron@163.com',0),(26,'zhmY2Y0MGE0YjQ2NDY2MzQwN',2,'d5aaron','d5aaron@163.com',0),(27,'YzhmY2Y0MGE0YjQ2NDY2MzQw',2,'d5aaron','d5aaron@163.com',0),(28,'DM5ZGEwYzhmY2Y0MGE0YjQ2N',2,'d5aaron','d5aaron@163.com',0),(29,'zhmY2Y0MGE0YjQ2NDY2MzQwN',2,'d5aaron','d5aaron@163.com',0),(30,'M5ZGEwYzhmY2Y0MGE0YjQ2ND',2,'d5aaron','d5aaron@163.com',0),(31,'5ZGEwYzhmY2Y0MGE0YjQ2NDY',2,'d5aaron','d5aaron@163.com',0),(32,'EwYzhmY2Y0MGE0YjQ2NDY2Mz',2,'d5aaron','d5aaron@163.com',0),(33,'ODM5ZGEwYzhmY2Y0MGE0YjQ2',2,'d5aaron','d5aaron@163.com',0),(34,'ZGEwYzhmY2Y0MGE0YjQ2NDY2',2,'d5aaron','d5aaron@163.com',0),(35,'zhmY2Y0MGE0YjQ2NDY2MzQwN',2,'d5aaron','d5aaron@163.com',0),(36,'ODM5ZGEwYzhmY2Y0MGE0YjQ2',2,'d5aaron','d5aaron@163.com',0),(37,'A3ODM5ZGEwYzhmY2Y0MGE0Yj',2,'d5aaron','d5aaron@163.com',0),(38,'DM5ZGEwYzhmY2Y0MGE0YjQ2N',2,'d5aaron','d5aaron@163.com',0),(39,'DM5ZGEwYzhmY2Y0MGE0YjQ2N',2,'d5aaron','d5aaron@163.com',0),(40,'EwYzhmY2Y0MGE0YjQ2NDY2Mz',2,'d5aaron','d5aaron@163.com',0),(41,'DM5ZGEwYzhmY2Y0MGE0YjQ2N',2,'d5aaron','d5aaron@163.com',0),(42,'DM5ZGEwYzhmY2Y0MGE0YjQ2N',2,'d5aaron','d5aaron@163.com',0),(43,'zhmY2Y0MGE0YjQ2NDY2MzQwN',2,'d5aaron','d5aaron@163.com',0),(44,'M5ZGEwYzhmY2Y0MGE0YjQ2ND',2,'d5aaron','d5aaron@163.com',0),(45,'M5ZGEwYzhmY2Y0MGE0YjQ2ND',2,'d5aaron','d5aaron@163.com',0),(46,'YzhmY2Y0MGE0YjQ2NDY2MzQw',2,'d5aaron','d5aaron@163.com',0),(47,'EwYzhmY2Y0MGE0YjQ2NDY2Mz',2,'d5aaron','d5aaron@163.com',0),(48,'A3ODM5ZGEwYzhmY2Y0MGE0Yj',2,'d5aaron','d5aaron@163.com',0),(49,'YzhmY2Y0MGE0YjQ2NDY2MzQw',2,'d5aaron','d5aaron@163.com',0),(50,'5ZGEwYzhmY2Y0MGE0YjQ2NDY',2,'d5aaron','d5aaron@163.com',0),(51,'EwYzhmY2Y0MGE0YjQ2NDY2Mz',2,'d5aaron','d5aaron@163.com',0),(52,'ZGEwYzhmY2Y0MGE0YjQ2NDY2',2,'d5aaron','d5aaron@163.com',0),(53,'zhmY2Y0MGE0YjQ2NDY2MzQwN',2,'d5aaron','d5aaron@163.com',0),(54,'zhmY2Y0MGE0YjQ2NDY2MzQwN',2,'d5aaron','d5aaron@163.com',0),(55,'3ODM5ZGEwYzhmY2Y0MGE0YjQ',2,'d5aaron','d5aaron@163.com',0),(56,'A3ODM5ZGEwYzhmY2Y0MGE0Yj',2,'d5aaron','d5aaron@163.com',0),(57,'3ODM5ZGEwYzhmY2Y0MGE0YjQ',2,'d5aaron','d5aaron@163.com',0),(58,'A3ODM5ZGEwYzhmY2Y0MGE0Yj',2,'d5aaron','d5aaron@163.com',0),(59,'3ODM5ZGEwYzhmY2Y0MGE0YjQ',2,'d5aaron','d5aaron@163.com',0),(60,'GEwYzhmY2Y0MGE0YjQ2NDY2M',2,'d5aaron','d5aaron@163.com',1),(61,'5ZGEwYzhmY2Y0MGE0YjQ2NDY',2,'d5aaron','d5aaron@163.com',0),(62,'DA3ODM5ZGEwYzhmY2Y0MGE0Y',2,'d5aaron','d5aaron@163.com',0),(63,'M5ZGEwYzhmY2Y0MGE0YjQ2ND',2,'d5aaron','d5aaron@163.com',0),(64,'GEwYzhmY2Y0MGE0YjQ2NDY2M',2,'d5aaron','d5aaron@163.com',0),(65,'M5ZGEwYzhmY2Y0MGE0YjQ2ND',2,'d5aaron','d5aaron@163.com',0),(66,'zhmY2Y0MGE0YjQ2NDY2MzQwN',2,'d5aaron','d5aaron@163.com',0),(67,'ZGEwYzhmY2Y0MGE0YjQ2NDY2',2,'d5aaron','d5aaron@163.com',0),(68,'ODM5ZGEwYzhmY2Y0MGE0YjQ2',2,'d5aaron','d5aaron@163.com',0),(69,'wYzhmY2Y0MGE0YjQ2NDY2MzQ',2,'d5aaron','d5aaron@163.com',0),(70,'M5ZGEwYzhmY2Y0MGE0YjQ2ND',2,'d5aaron','d5aaron@163.com',0),(71,'GEwYzhmY2Y0MGE0YjQ2NDY2M',2,'d5aaron','d5aaron@163.com',0),(72,'ZGEwYzhmY2Y0MGE0YjQ2NDY2',2,'d5aaron','d5aaron@163.com',0),(73,'ODM5ZGEwYzhmY2Y0MGE0YjQ2',2,'d5aaron','d5aaron@163.com',0),(74,'DA3ODM5ZGEwYzhmY2Y0MGE0Y',2,'d5aaron','d5aaron@163.com',0),(75,'A3ODM5ZGEwYzhmY2Y0MGE0Yj',2,'d5aaron','d5aaron@163.com',0),(76,'ODM5ZGEwYzhmY2Y0MGE0YjQ2',2,'d5aaron','d5aaron@163.com',0),(77,'A3ODM5ZGEwYzhmY2Y0MGE0Yj',2,'d5aaron','d5aaron@163.com',0),(78,'wYzhmY2Y0MGE0YjQ2NDY2MzQ',2,'d5aaron','d5aaron@163.com',0),(79,'YzhmY2Y0MGE0YjQ2NDY2MzQw',2,'d5aaron','d5aaron@163.com',0),(80,'M5ZGEwYzhmY2Y0MGE0YjQ2ND',2,'d5aaron','d5aaron@163.com',0),(81,'5ZGEwYzhmY2Y0MGE0YjQ2NDY',2,'d5aaron','d5aaron@163.com',0),(82,'ZGEwYzhmY2Y0MGE0YjQ2NDY2',2,'d5aaron','d5aaron@163.com',0),(83,'DA3ODM5ZGEwYzhmY2Y0MGE0Y',2,'d5aaron','d5aaron@163.com',0),(84,'ODM5ZGEwYzhmY2Y0MGE0YjQ2',2,'d5aaron','d5aaron@163.com',0),(85,'GEwYzhmY2Y0MGE0YjQ2NDY2M',2,'d5aaron','d5aaron@163.com',0),(86,'ZGEwYzhmY2Y0MGE0YjQ2NDY2',2,'d5aaron','d5aaron@163.com',0),(87,'5ZGEwYzhmY2Y0MGE0YjQ2NDY',2,'d5aaron','d5aaron@163.com',0),(88,'GEwYzhmY2Y0MGE0YjQ2NDY2M',2,'d5aaron','d5aaron@163.com',0);
/*!40000 ALTER TABLE `activate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invite_code`
--

DROP TABLE IF EXISTS `invite_code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invite_code` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `code` varchar(32) NOT NULL,
  `user` int(32) NOT NULL,
  `used` tinyint(1) DEFAULT '0',
  `owner` int(11) DEFAULT '1',
  `user_name` varchar(128) DEFAULT NULL,
  `period` int(11) NOT NULL,
  `transfer` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invite_code`
--

LOCK TABLES `invite_code` WRITE;
/*!40000 ALTER TABLE `invite_code` DISABLE KEYS */;
INSERT INTO `invite_code` VALUES (1,'DZROGM1MmQ1ZjYyMDU2ODRhNDcz',1,0,1,'d5aaron',1209600,2147483648),(2,'DZRM2QwOGU5NTkzOTdhZGYzNGIx',1,0,1,NULL,1209600,2147483648),(3,'LCSNDcxMThkYWViYzViMTYyNjkw',1,0,1,'lihuaigang',1209600,2147483648),(4,'LCSZDNiYjAwMmFjZDhkN2RkMDk1',1,0,1,NULL,1209600,2147483648),(5,'LCSOTkwZTQ0MWYwZmI2ZjNmYWQ3',1,0,1,NULL,1209600,2147483648),(6,'LCSZjdhYmMxOGZjYjQzOTc1MDY1',1,0,1,NULL,1209600,2147483648),(7,'LCSGVjY2E1ZWQzZDZiODA3OWUyZ',1,0,1,NULL,1209600,2147483648),(8,'LCSOWUzYmIxMmQyMDNmNDVhOTEy',1,0,1,NULL,1209600,2147483648),(9,'LCSlNDFlZTdiMDgzMzU4ODM5OWI',1,0,1,NULL,1209600,2147483648),(10,'LCSjRjNTE3M2MyY2UxN2ZkOGZjZ',1,0,1,NULL,1209600,2147483648),(11,'LCSQ0YmE4ZjA5MzZjMjBiZDc5MT',1,0,1,NULL,1209600,2147483648),(12,'LCS4OTcwNWFlNmQ3NDNiZjFlODQ',1,0,1,NULL,1209600,2147483648),(13,'LCSWQ1YjZkYjgzYmU3OGVmYjBkM',1,0,1,NULL,1209600,2147483648),(14,'LCSN2ZlYWY3N2E5N2ZjMzhmMzQy',1,0,1,NULL,1209600,2147483648),(15,'LCSMjI0NWUyYWY0MzFmYjdiNjcy',1,0,1,NULL,1209600,2147483648),(16,'LCSmJhZTQwYTU3NzkyOGI3NmQyZ',1,0,1,NULL,1209600,2147483648),(17,'LCShNGE3NzYyMTQ1MGFhODRmZWU',1,0,1,NULL,1209600,2147483648),(18,'LCSMDI2NWM3MTJjNDlkNTFhMThh',1,0,1,NULL,1209600,2147483648),(19,'LCSU2NTk3MmRjZTY4ZGFkNGQ1Mm',1,0,1,NULL,1209600,2147483648),(20,'LCSzE1MGRlY2JkODliMGY1NDQyY',1,1,1,'d7aaron',1209600,2147483648),(21,'LCSOGQ0N2Q0MTJiY2JlZWNlM2Q5',1,0,1,NULL,1209600,2147483648),(22,'LCSE4YTMzMDYwN2Q3Njc5NmIzNW',1,1,1,'d8aaron',1209600,2147483648),(23,'TST3MTA4NWFhYjA1MjQ0YTRmYjh',1,1,1,'d7aaron',1209600,2147483648),(24,'TSTzk4OTJhOTg5MTgzZGUzMmU5N',1,0,1,'',1209600,2147483648),(25,'TSTiN2VhYzdhYzg3MjIwOTM0MmU',1,1,1,'d7aaron',1209600,2147483648),(26,'TST1ZWMyOGM1MmQ1ZjYyMDU2ODR',1,0,1,NULL,1209600,2147483648),(27,'TSTZTEyNDM1YTcyNGE4ZjMwZmRk',1,1,1,'d9aaron',1209600,2147483648);
/*!40000 ALTER TABLE `invite_code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options` (
  `option_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(64) NOT NULL,
  `option_value` longtext NOT NULL,
  `display_name` varchar(128) NOT NULL,
  PRIMARY KEY (`option_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` VALUES (1,'invite_only','true','邀请注册'),(2,'default_transfer','5368709120','默认流量(Byte)'),(3,'default_invite_number','1','默认邀请数量'),(4,'check_min','20','签到下限(MB)'),(5,'check_max','70','签到上限(MB)'),(6,'version','1.1','程序版本'),(7,'mail_protocol','smtp','邮件引擎'),(8,'mail_mailpath','/usr/sbin/sendmail','Sendmail路径'),(9,'mail_smtp_host','smtp.googlemail.com','SMTP服务器'),(10,'mail_smtp_user','freelandsocks@gmail.com','SMTP用户名'),(11,'mail_smtp_pass','aaron195226','SMTP密码'),(12,'mail_smtp_port','465','SMTP端口'),(13,'mail_smtp_crypto','ssl','SMTP加密方法'),(14,'mail_sender_address','freelandsocks@gmail.com','发件邮箱'),(15,'mail_sender_name','Freeland管理员','发件人姓名'),(16,'mail_sg_user','api_user','SendGrid API User'),(17,'mail_sg_pass','api_key','SendGrid API Key');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss_admin`
--

DROP TABLE IF EXISTS `ss_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ss_admin` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(128) NOT NULL,
  `email` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss_admin`
--

LOCK TABLES `ss_admin` WRITE;
/*!40000 ALTER TABLE `ss_admin` DISABLE KEYS */;
INSERT INTO `ss_admin` VALUES (1,'admin','gitchinapnr@163.com','583c36a5707409c41026f24dd7df3b63');
/*!40000 ALTER TABLE `ss_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss_node`
--

DROP TABLE IF EXISTS `ss_node`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ss_node` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `node_name` varchar(128) NOT NULL,
  `node_type` int(3) NOT NULL,
  `node_server` varchar(128) NOT NULL,
  `node_info` varchar(128) NOT NULL,
  `node_status` varchar(128) NOT NULL,
  `node_order` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss_node`
--

LOCK TABLES `ss_node` WRITE;
/*!40000 ALTER TABLE `ss_node` DISABLE KEYS */;
INSERT INTO `ss_node` VALUES (2,'VPS-1',0,'45.78.10.110','美国高速SS','可用',2),(3,'VPS-2(VIP)',0,'23.105.205.75','LA 高速VPN(推荐)','可用',0);
/*!40000 ALTER TABLE `ss_node` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(128) NOT NULL,
  `email` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `plan` varchar(2) NOT NULL,
  `passwd` varchar(16) NOT NULL,
  `t` int(11) NOT NULL DEFAULT '0',
  `u` bigint(20) NOT NULL,
  `d` bigint(20) NOT NULL,
  `transfer_enable` bigint(20) NOT NULL,
  `port` int(11) NOT NULL,
  `switch` tinyint(4) NOT NULL DEFAULT '1',
  `enable` tinyint(4) NOT NULL DEFAULT '1',
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `last_get_gift_time` int(11) NOT NULL DEFAULT '0',
  `last_check_in_time` int(11) NOT NULL DEFAULT '0',
  `last_rest_pass_time` int(11) NOT NULL DEFAULT '0',
  `reg_date` datetime NOT NULL,
  `invite_num` int(8) NOT NULL,
  `money` decimal(12,2) NOT NULL,
  `expire_date` int(11) NOT NULL,
  `history_transfer` bigint(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','d5aaron@163.com','583c36a5707409c41026f24dd7df3b63','A','00000000',1460434177,4185,0,5368709120,14000,1,1,7,0,0,0,'2015-01-01 00:00:00',0,0.00,0,0),(2,'d5aaron','d5aaron@163.com','583c36a5707409c41026f24dd7df3b63','A','146711',1460435364,3283034,28062037,55008296960,14006,1,1,7,0,1460171837,0,'2016-04-07 20:33:23',1,0.00,0,0),(3,'lihuaigang','jingshenbing5211@163.com','6c88da1cc6d9bfbb95c4fcfceddca262','A','889376',1462240223,472169,11403600,5446303744,14012,1,1,7,0,1460099215,0,'2016-04-08 15:05:51',1,0.00,0,0),(11,'d10aaron','d5aaron@163.com','3dbe00a167653a1aaee01d93e77e730e','A','668103',0,0,0,2147483648,14015,0,0,7,0,0,0,'2016-05-03 13:01:21',1,0.00,1463461281,0),(12,'d9aaron','d5aaron@163.com','3dbe00a167653a1aaee01d93e77e730e','A','140264',0,0,0,2147483648,14016,0,0,7,0,0,0,'2016-05-03 13:02:39',1,0.00,1463461359,0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-03 13:37:29
