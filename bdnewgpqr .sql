CREATE DATABASE  IF NOT EXISTS `newgpqr` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `newgpqr`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: newgpqr
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `atividade`
--

DROP TABLE IF EXISTS `atividade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `atividade` (
  `id` int NOT NULL AUTO_INCREMENT,
  `job` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_atividade` datetime DEFAULT NULL,
  `data_postagem` date DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  `funcionario` varchar(99) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remessa_atividade` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantidade_documentos` int DEFAULT NULL,
  `quantidade_folhas` int DEFAULT NULL,
  `quantidade_paginas` int DEFAULT NULL,
  `recibo_postagem` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `servico_id` int DEFAULT NULL,
  `status_atividade_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_atividade_servico1` (`servico_id`),
  KEY `fk_atividade_status_atividade1` (`status_atividade_id`),
  CONSTRAINT `fk_atividade_servico1` FOREIGN KEY (`servico_id`) REFERENCES `servico` (`id`),
  CONSTRAINT `fk_atividade_status_atividade1` FOREIGN KEY (`status_atividade_id`) REFERENCES `status_atividade` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atividade`
--

LOCK TABLES `atividade` WRITE;
/*!40000 ALTER TABLE `atividade` DISABLE KEYS */;
INSERT INTO `atividade` VALUES (1,'1234','2023-08-30 11:52:20','2023-08-30','2023-08-30','Cristian','2314',1234,1234,2468,'2',1,10),(2,'3124','2023-08-31 13:48:06','2023-08-31','2023-08-31','Cristian','1234',231,231,462,'1',267,10),(3,'2314','2023-08-31 13:48:06','2023-08-31','2023-08-31','Cristian','3124',123,123,123,'1',257,11),(4,'4312','2023-08-31 13:48:06','2023-08-31','2023-08-31','Cristian','1234',12,12,24,'1',268,10),(5,'4467','2023-08-31 13:48:06','2023-08-31','2023-08-31','Cristian','1234',12,12,12,'1',257,11),(6,'4776','2023-08-31 13:48:06','2023-08-31','2023-08-31','Cristian','1234',12,12,24,'3',324,10),(8,'2321','2023-08-31 13:55:21','2023-08-31','2023-08-31','Cristian','12',12,12,24,'1',2,11),(9,'1333','2023-08-31 13:55:21','2023-08-31','2023-08-31','Cristian','1234',12,12,24,'2',1,11),(10,'2332','2023-08-31 13:55:21','2023-08-31','2023-08-31','Cristian','12',1,1,2,'2',252,11),(11,'1233','2023-08-31 13:55:21','2023-08-31','2023-08-31','Cristian','3',1,1,2,'1',252,9),(12,'2323','2023-08-31 13:55:21','2023-08-31','2023-08-31','Cristian','123',1,1,2,'3',4,9),(13,'1233','2023-08-31 13:55:21','2023-08-31','2023-08-31','Cristian','2',2,2,4,'1',317,9),(14,'3333','2023-08-31 13:55:21','2023-08-31','2023-08-31','Cristian','2',1,1,2,'3',253,9),(15,'1233','2023-08-31 13:55:21','2023-08-31','2023-08-31','Cristian','3333',1,1,2,'2',318,9),(16,'3333','2023-08-31 13:55:21','2023-08-31','2023-08-31','Cristian','33',1,1,2,'1',4,9),(17,'112','2023-08-31 13:55:21','2023-08-31','2023-08-31','Cristian','23',1,1,1,'2',257,11),(18,'123','2023-08-31 13:55:21','2023-08-31','2023-08-31','Cristian','1234',1,1,2,'3',325,9),(19,'13','2023-08-31 13:55:21','2023-08-31','2023-08-31','Cristian','1233',1,1,1,'1',257,11),(21,'1234','2023-09-04 11:34:33','2023-09-04','2023-09-04','Cristian','3124',231,116,232,'1',159,10),(22,'1234','2023-09-04 11:34:33','2023-09-04','2023-09-04','Cristian','1234',12,6,12,'1',159,10),(23,'3214','2023-09-04 11:34:33','2023-09-04','2023-09-04','Cristian','1234',12,6,12,'1',159,10),(24,'2314','2023-09-04 11:34:33','2023-09-04','2023-09-04','Cristian','1234',12,6,12,'1',159,10),(25,'1234','2023-09-04 11:34:33','2023-09-04','2023-09-04','Cristian','1234',12,6,12,'0',159,10),(30,'9999','2023-09-20 13:03:42','2019-09-09','2023-09-20','Cristian','9999',9999,9999,19998,'2',215,13);
/*!40000 ALTER TABLE `atividade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cd`
--

DROP TABLE IF EXISTS `cd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cd` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quantidade` int NOT NULL,
  `ocorrencia` int NOT NULL,
  `descricao` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataAtual` date NOT NULL,
  `funcionario` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `solicitante` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacao` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cd`
--

LOCK TABLES `cd` WRITE;
/*!40000 ALTER TABLE `cd` DISABLE KEYS */;
INSERT INTO `cd` VALUES (6,29,5554,'Backup de aplicações','2023-09-14','Itallo','Fulano da Silveira','SEPLAG','fg@email.com'),(8,2,2221,'Backup de aplicação','2023-09-14','Itallo','Eliza Soares da Silva','SEPLAG','fulano@email.com'),(9,2,9999,'Backup de aplicação','2023-09-14','Itallo','Thiago de Paula Ferreira','SEMAD','fulano@email.com.br'),(10,4,8887,'Backup de aplicação','2023-09-22','Itallo','Fulano da Silva Ciclano','Prodemge','fulano.ciclano@email.com');
/*!40000 ALTER TABLE `cd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conferencia`
--

DROP TABLE IF EXISTS `conferencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `conferencia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_conferencia` datetime DEFAULT NULL,
  `data_cadastro` date NOT NULL,
  `atividade_id` int NOT NULL,
  `status_atividade_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_conferencia_atividade1` (`atividade_id`),
  KEY `fk_conferencia_status_atividade1` (`status_atividade_id`),
  CONSTRAINT `fk_conferencia_atividade1` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_conferencia_status_atividade1` FOREIGN KEY (`status_atividade_id`) REFERENCES `status_atividade` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conferencia`
--

LOCK TABLES `conferencia` WRITE;
/*!40000 ALTER TABLE `conferencia` DISABLE KEYS */;
INSERT INTO `conferencia` VALUES (1,'CristianConf','2023-08-31 13:48:36','2023-08-31',2,14),(2,'CristianConf','2023-08-31 13:48:37','2023-08-31',3,14),(3,'CristianConf','2023-08-31 13:48:37','2023-08-31',4,14),(4,'CristianConf','2023-08-31 13:48:37','2023-08-31',5,14),(5,'CristianConf','2023-08-31 13:48:37','2023-08-31',6,14);
/*!40000 ALTER TABLE `conferencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contratos`
--

DROP TABLE IF EXISTS `contratos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contratos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `contrato` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maquina` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_mensal` float NOT NULL,
  `parcelas` int NOT NULL,
  `saldo_contratual` float NOT NULL,
  `vencimento` date DEFAULT NULL,
  `valor_total` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contratos`
--

LOCK TABLES `contratos` WRITE;
/*!40000 ALTER TABLE `contratos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contratos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contratos_estagiarios`
--

DROP TABLE IF EXISTS `contratos_estagiarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contratos_estagiarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `funcionario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricula` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicio_contrato` date NOT NULL,
  `fim_contrato` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contratos_estagiarios`
--

LOCK TABLES `contratos_estagiarios` WRITE;
/*!40000 ALTER TABLE `contratos_estagiarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `contratos_estagiarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `controle_cola`
--

DROP TABLE IF EXISTS `controle_cola`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `controle_cola` (
  `id` int NOT NULL AUTO_INCREMENT,
  `funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_operacao` date NOT NULL,
  `operacao` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` int NOT NULL,
  `nota` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controle_cola`
--

LOCK TABLES `controle_cola` WRITE;
/*!40000 ALTER TABLE `controle_cola` DISABLE KEYS */;
INSERT INTO `controle_cola` VALUES (1,'Funcionario','2023-09-21','Entrada',35,'nf 2020202'),(2,'Funcionario','2023-09-22','Saída',27,NULL),(3,'Funcionario','2023-09-21','Saída',4,NULL);
/*!40000 ALTER TABLE `controle_cola` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `demandas`
--

DROP TABLE IF EXISTS `demandas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `demandas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `demanda_resumo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demanda_descricao` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_abertura` datetime DEFAULT NULL,
  `data_termino` datetime DEFAULT NULL,
  `demanda_prioridade` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demanda_tipo` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demanda_responsavel` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demanda_solicitante` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demanda_log` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `reabertura` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `demandas`
--

LOCK TABLES `demandas` WRITE;
/*!40000 ALTER TABLE `demandas` DISABLE KEYS */;
INSERT INTO `demandas` VALUES (1,'novo sistema gim','atualizar o sistema\r\n','Em desenvolvimento','2023-09-12 16:14:26',NULL,'Alto','Criação','testeLaura',NULL,NULL,NULL);
/*!40000 ALTER TABLE `demandas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `digit_conferencia`
--

DROP TABLE IF EXISTS `digit_conferencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `digit_conferencia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_conferencia` datetime NOT NULL,
  `data_cadastro` date NOT NULL,
  `status_digitalizacao` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `digitalizacao_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_digit_conferencia_digitalizacao1` (`digitalizacao_id`),
  CONSTRAINT `fk_digit_conferencia_digitalizacao1` FOREIGN KEY (`digitalizacao_id`) REFERENCES `digitalizacao` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `digit_conferencia`
--

LOCK TABLES `digit_conferencia` WRITE;
/*!40000 ALTER TABLE `digit_conferencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `digit_conferencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `digit_lancamento`
--

DROP TABLE IF EXISTS `digit_lancamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `digit_lancamento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_lancamento` datetime NOT NULL,
  `data_cadastro` date NOT NULL,
  `status_digitalizacao` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `digitalizacao_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_digit_lancamento_digitalizacao1` (`digitalizacao_id`),
  CONSTRAINT `fk_digit_lancamento_digitalizacao1` FOREIGN KEY (`digitalizacao_id`) REFERENCES `digitalizacao` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `digit_lancamento`
--

LOCK TABLES `digit_lancamento` WRITE;
/*!40000 ALTER TABLE `digit_lancamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `digit_lancamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `digit_qualidade`
--

DROP TABLE IF EXISTS `digit_qualidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `digit_qualidade` (
  `id` int NOT NULL AUTO_INCREMENT,
  `funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_qualidade` datetime NOT NULL,
  `data_cadastro` date NOT NULL,
  `status_digitalizacao` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `digitalizacao_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_digit_qualidade_digitalizacao1` (`digitalizacao_id`),
  CONSTRAINT `fk_digit_qualidade_digitalizacao1` FOREIGN KEY (`digitalizacao_id`) REFERENCES `digitalizacao` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `digit_qualidade`
--

LOCK TABLES `digit_qualidade` WRITE;
/*!40000 ALTER TABLE `digit_qualidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `digit_qualidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `digitalizacao`
--

DROP TABLE IF EXISTS `digitalizacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `digitalizacao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data_digitalizacao` datetime NOT NULL,
  `funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_postagem` date NOT NULL,
  `remessa` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade_documentos` int NOT NULL,
  `status_digitalizacao` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `digitalizado` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `servico_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_digit_cadastro_servico1` (`servico_id`),
  CONSTRAINT `fk_digit_cadastro_servico1` FOREIGN KEY (`servico_id`) REFERENCES `servico` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `digitalizacao`
--

LOCK TABLES `digitalizacao` WRITE;
/*!40000 ALTER TABLE `digitalizacao` DISABLE KEYS */;
INSERT INTO `digitalizacao` VALUES (1,'2023-10-26 10:51:41','Funcionario','2023-10-26','2023-10-26','23',3,'Aguardando Cont. Qualidade','Sim',251);
/*!40000 ALTER TABLE `digitalizacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encadernacao`
--

DROP TABLE IF EXISTS `encadernacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `encadernacao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(60) NOT NULL,
  `paginas` int NOT NULL,
  `ocorrencia` varchar(20) NOT NULL,
  `solicitante` varchar(60) DEFAULT NULL,
  `data_cadastro` date NOT NULL,
  `funcionario` varchar(60) NOT NULL,
  `tipo_capa` varchar(45) NOT NULL,
  `copias` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `capas` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encadernacao`
--

LOCK TABLES `encadernacao` WRITE;
/*!40000 ALTER TABLE `encadernacao` DISABLE KEYS */;
INSERT INTO `encadernacao` VALUES (9,'Livro de ocorrências - Gerência de Apoio Logístico',101,'2222','Eliza Soares da Silva','2023-09-14','Itallo','Capa PRODEMGE',3,303,3),(10,'Livro de ocorrências - GAL ',225,'2222','SADF DFG ASEFAEF','2023-09-22','Itallo','Selecione:',2,450,2);
/*!40000 ALTER TABLE `encadernacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `envelopamento`
--

DROP TABLE IF EXISTS `envelopamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `envelopamento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_envelopamento` datetime DEFAULT NULL,
  `data_cadastro` date NOT NULL,
  `atividade_id` int NOT NULL,
  `status_atividade_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_envelopamento_atividade1` (`atividade_id`),
  KEY `fk_envelopamento_status_atividade1` (`status_atividade_id`),
  CONSTRAINT `fk_envelopamento_atividade1` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`),
  CONSTRAINT `fk_envelopamento_status_atividade1` FOREIGN KEY (`status_atividade_id`) REFERENCES `status_atividade` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `envelopamento`
--

LOCK TABLES `envelopamento` WRITE;
/*!40000 ALTER TABLE `envelopamento` DISABLE KEYS */;
INSERT INTO `envelopamento` VALUES (1,'CristianEnv','2023-10-31 13:48:43','2023-08-31',2,6),(2,'Cristian','2023-10-31 13:48:43','2023-08-31',4,6),(3,'CristianEnv','2023-10-31 13:48:43','2023-08-31',6,6),(4,'Cristian','2023-10-20 13:04:14','2023-09-20',30,6);
/*!40000 ALTER TABLE `envelopamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `escala`
--

DROP TABLE IF EXISTS `escala`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `escala` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data_inicial` date NOT NULL,
  `data_final` date NOT NULL,
  `turno` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `impressao` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conferencia` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `envelopamento` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `triagem` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expedicao` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `escala`
--

LOCK TABLES `escala` WRITE;
/*!40000 ALTER TABLE `escala` DISABLE KEYS */;
INSERT INTO `escala` VALUES (1,'2023-10-03','2023-10-10','Tarde','Nome1 / Nome2 / Nome3','Nome1 / Nome2','Nome1 / Nome2 / Nome3','Nome1','Nome1'),(4,'2023-10-31','2023-11-07','Manhã','','','','','');
/*!40000 ALTER TABLE `escala` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etiquetas_pm`
--

DROP TABLE IF EXISTS `etiquetas_pm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `etiquetas_pm` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `concurso` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copias` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `quantidade_etiquetas` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etiquetas_pm`
--

LOCK TABLES `etiquetas_pm` WRITE;
/*!40000 ALTER TABLE `etiquetas_pm` DISABLE KEYS */;
INSERT INTO `etiquetas_pm` VALUES (13,'2023-09-01','2023','Numeração para carteiras',100,2000,20);
/*!40000 ALTER TABLE `etiquetas_pm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expedicao`
--

DROP TABLE IF EXISTS `expedicao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `expedicao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_lancamento` datetime DEFAULT NULL,
  `data_expedicao` date DEFAULT NULL,
  `capas` int DEFAULT NULL,
  `solicitante` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsavel_remessa` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsavel_expedicao` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsavel_coleta` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacao` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `hora` time DEFAULT NULL,
  `atividade_id` int NOT NULL,
  `status_atividade_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_expedicao_status_atividade1` (`status_atividade_id`),
  KEY `fk_expedicao_atividade1` (`atividade_id`),
  CONSTRAINT `fk_expedicao_atividade1` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`),
  CONSTRAINT `fk_expedicao_status_atividade1` FOREIGN KEY (`status_atividade_id`) REFERENCES `status_atividade` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expedicao`
--

LOCK TABLES `expedicao` WRITE;
/*!40000 ALTER TABLE `expedicao` DISABLE KEYS */;
INSERT INTO `expedicao` VALUES (1,'CristianExp','2023-08-31 13:49:04','2022-07-31',NULL,'','','CristianExp','correio','','13:48:58',2,10),(2,'CristianExp','2023-08-31 13:49:04','2022-06-01',NULL,'','','CristianExp','correio','','13:48:58',4,10),(3,'CristianExp','2023-08-31 13:49:04','2023-05-31',NULL,'','','CristianExp','correio','','13:48:58',6,10),(4,'CristianExp','2023-08-31 13:49:04','2023-04-01',NULL,'','','CristianExp','correio','','13:48:58',1,10),(5,'CristianExp','2023-09-04 11:37:06','2023-04-04',NULL,'','','CristianExp','testador','','11:37:00',21,10),(6,'CristianExp','2023-09-04 11:37:06','2023-05-04',NULL,'','','CristianExp','testador','','11:37:00',22,10),(7,'CristianExp','2023-09-04 11:37:06','2023-06-04',NULL,'','','CristianExp','testador','','11:37:00',23,10),(8,'CristianExp','2023-09-04 11:37:06','2023-07-04',NULL,'','','CristianExp','testador','','11:37:00',24,10),(9,'CristianExp','2023-09-04 11:37:06','2023-04-04',NULL,'','','CristianExp','testador','','11:37:00',25,10);
/*!40000 ALTER TABLE `expedicao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario_ferias`
--

DROP TABLE IF EXISTS `funcionario_ferias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionario_ferias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `funcionario_nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd_dias` int NOT NULL,
  `data_inicio` date NOT NULL,
  `data_final` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario_ferias`
--

LOCK TABLES `funcionario_ferias` WRITE;
/*!40000 ALTER TABLE `funcionario_ferias` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionario_ferias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionarios_gim`
--

DROP TABLE IF EXISTS `funcionarios_gim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionarios_gim` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricula` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contatoAlt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telAlt` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turno` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionarios_gim`
--

LOCK TABLES `funcionarios_gim` WRITE;
/*!40000 ALTER TABLE `funcionarios_gim` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionarios_gim` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imp_internas`
--

DROP TABLE IF EXISTS `imp_internas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `imp_internas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(60) NOT NULL,
  `documentos` int NOT NULL,
  `ocorrencia` varchar(20) NOT NULL,
  `solicitante` varchar(60) DEFAULT NULL,
  `data_cadastro` date NOT NULL,
  `funcionario` varchar(45) NOT NULL,
  `copias` int NOT NULL,
  `total` int DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imp_internas`
--

LOCK TABLES `imp_internas` WRITE;
/*!40000 ALTER TABLE `imp_internas` DISABLE KEYS */;
INSERT INTO `imp_internas` VALUES (3,'teste',3,'1234','detran','2023-09-11','Itallo',3,9,NULL),(4,'1234',600,'1234','testando 1234','2023-09-14','Itallo',2,1200,'Frente e Verso'),(5,'teste',13,'1234','detran','2023-09-11','Itallo',2,26,NULL),(6,'teste',14,'1234','detran','2023-09-11','Itallo',2,28,'Somente Frente'),(8,'Livro de ocorrências - GAL ',149,'1110','Fulano de Tal','2023-09-22','Itallo',2,298,'Selecione:');
/*!40000 ALTER TABLE `imp_internas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `impressao`
--

DROP TABLE IF EXISTS `impressao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `impressao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_impressao` datetime DEFAULT NULL,
  `data_cadastro` date NOT NULL,
  `atividade_id` int NOT NULL,
  `status_atividade_id` int NOT NULL,
  `impressora_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_impressao_atividade1` (`atividade_id`),
  KEY `fk_impressao_status_atividade1` (`status_atividade_id`),
  KEY `fk_impressao_impressora_id_idx` (`impressora_id`),
  CONSTRAINT `fk_impressao_atividade1` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`),
  CONSTRAINT `fk_impressao_impressora_id1` FOREIGN KEY (`impressora_id`) REFERENCES `impressora` (`id`),
  CONSTRAINT `fk_impressao_status_atividade1` FOREIGN KEY (`status_atividade_id`) REFERENCES `status_atividade` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impressao`
--

LOCK TABLES `impressao` WRITE;
/*!40000 ALTER TABLE `impressao` DISABLE KEYS */;
INSERT INTO `impressao` VALUES (1,'CristianImp','2023-08-31 13:48:27','2023-08-31',2,4,3),(2,'CristianImp','2023-08-31 13:48:27','2023-08-31',3,4,2),(3,'CristianImp','2023-08-31 13:48:27','2023-08-31',4,4,2),(4,'CristianImp','2023-08-31 13:48:27','2023-08-31',5,4,3),(5,'CristianImp','2023-08-31 13:48:27','2023-08-31',6,4,2),(7,'CristianImp','2023-09-20 13:04:00','2023-09-20',30,4,2);
/*!40000 ALTER TABLE `impressao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `impressao_encadernacao`
--

DROP TABLE IF EXISTS `impressao_encadernacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `impressao_encadernacao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `paginas_imp` int DEFAULT NULL,
  `copias_imp` int DEFAULT NULL,
  `quant_capa` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_capa` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_imp` int DEFAULT NULL,
  `descricao` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocorrencia` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataAtual` date DEFAULT NULL,
  `solicitante` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_imp` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_encar` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impressao_encadernacao`
--

LOCK TABLES `impressao_encadernacao` WRITE;
/*!40000 ALTER TABLE `impressao_encadernacao` DISABLE KEYS */;
INSERT INTO `impressao_encadernacao` VALUES (2,50,4,'4','Capa - Prodemge',200,'Livro de ocorrências - GAL ','2222','2023-09-14','Eliza Soares da Silva','Pagodeiro','Frente e Verso',4),(3,200,5,'0','Capa - Prodemge',1000,'Livro de ocorrências - GAL ','9999','2023-09-22','Fulano Ciclano','Pagodeiro','Frente e Verso',5);
/*!40000 ALTER TABLE `impressao_encadernacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `impressora`
--

DROP TABLE IF EXISTS `impressora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `impressora` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_impressora` varchar(99) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impressora`
--

LOCK TABLES `impressora` WRITE;
/*!40000 ALTER TABLE `impressora` DISABLE KEYS */;
INSERT INTO `impressora` VALUES (1,'Nuvera 1 - Z8PB'),(2,'Nuvera 2 - Z7PK'),(3,'Impressora Matricial'),(4,'Impresso'),(5,'Não Impresso');
/*!40000 ALTER TABLE `impressora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medidores`
--

DROP TABLE IF EXISTS `medidores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medidores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data_cadastro` date NOT NULL,
  `nuv1_medidor1` int NOT NULL,
  `nuv1_medidor2` int NOT NULL,
  `nuv2_medidor1` int NOT NULL,
  `nuv2_medidor2` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medidores`
--

LOCK TABLES `medidores` WRITE;
/*!40000 ALTER TABLE `medidores` DISABLE KEYS */;
INSERT INTO `medidores` VALUES (1,'2023-07-01',1200,200,3000,400),(2,'2023-09-01',150,1100,350,880),(3,'2023-09-19',12035,14620,3322,5577),(4,'2023-09-19',2020,31456,1233,654),(5,'2023-09-19',54345,45345,45645,45645),(6,'2023-09-19',6475,45456,546,456),(7,'2023-09-19',6546,5345,453,456),(8,'2023-09-19',5645,456,456,456),(9,'2023-09-19',5645,456,456,789),(10,'2023-09-19',786,453,45,78),(11,'2023-09-19',546,45,53,78),(12,'2023-09-19',12345,5,456,78),(13,'2023-09-19',78,45,86,67),(14,'2023-09-19',456,56,89,56),(15,'2023-09-19',4545,45,454,45),(16,'2023-09-19',4564,4564,12378,456456);
/*!40000 ALTER TABLE `medidores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `passagem_turno`
--

DROP TABLE IF EXISTS `passagem_turno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `passagem_turno` (
  `id` int NOT NULL AUTO_INCREMENT,
  `funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_cadastro` date NOT NULL,
  `turno` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `etapa` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `assunto` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passagem_turno`
--

LOCK TABLES `passagem_turno` WRITE;
/*!40000 ALTER TABLE `passagem_turno` DISABLE KEYS */;
INSERT INTO `passagem_turno` VALUES (1,'Funcionario','2023-10-03','Manhã','Impressão','assd','adadasda'),(2,'Funcionario','2023-10-04','Tarde','Envelopamento','yry','eyeyerye'),(3,'Funcionario','2023-10-04','Noite','Triagem','tuitkutkt','tkthgjhgjghjghjg'),(4,'Funcionario','2023-10-04','Manhã','Triagem','oilululu','ululuoloulu');
/*!40000 ALTER TABLE `passagem_turno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissoes`
--

DROP TABLE IF EXISTS `permissoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissoes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `matricula` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissao` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissoes`
--

LOCK TABLES `permissoes` WRITE;
/*!40000 ALTER TABLE `permissoes` DISABLE KEYS */;
INSERT INTO `permissoes` VALUES (1,'p811291','Fulano','Administrador'),(2,'p811444','K-pop','Administrador'),(3,'p619551','Pagodeiro','Funcionário'),(4,'p812114','FakeNews','Funcionário'),(5,'p811916','Magali','Funcionário'),(7,'p812157','Wally','Administrador');
/*!40000 ALTER TABLE `permissoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reunioes`
--

DROP TABLE IF EXISTS `reunioes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reunioes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data_reuniao` date NOT NULL,
  `responsavel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tema_abordado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumula` varchar(2500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_reuniao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `horario_reuniao` time NOT NULL,
  `pauta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `participantes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reunioes`
--

LOCK TABLES `reunioes` WRITE;
/*!40000 ALTER TABLE `reunioes` DISABLE KEYS */;
INSERT INTO `reunioes` VALUES (1,'2023-09-15','Responsável asdfa asdfas asdfas','Reunião adfadfadfasdf','substantivo masculino\r\n1.\r\nconjunto das palavras escritas, em livro, folheto, documento etc. (p.opos. a comentários, aditamentos, sumário etc.); redação original de qualquer obra escrita.\r\n\"um t. manuscrito\"\r\n2.\r\ntrecho ou fragmento de obra de um autor.\r\n\"o t. de Graciliano Ramos\"\r\nFeedback\r\nTraduções e mais definições\r\n\r\nTexto – Wikipédia, a enciclopédia livre\r\n\r\nWikipedia\r\nhttps://pt.wikipedia.org › wiki › Texto\r\nOs textos literários são aqueles que, em geral, têm o objetivo de emocionar o leitor, e para isso exploram a linguagem conotativa ou poética. Em geral, ocorre o ...','Local sdasdf','15:00:00','Pauta dfafasdf','Reunião Reunião  Reunião');
/*!40000 ALTER TABLE `reunioes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rotulos_correios`
--

DROP TABLE IF EXISTS `rotulos_correios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rotulos_correios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `especie` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_rotulo` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `funcionario` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_rotulo` date DEFAULT NULL,
  `destino` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cep_inicial` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cep_final` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `servico` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cliente_servico` varchar(99) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ano` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rotulos_correios`
--

LOCK TABLES `rotulos_correios` WRITE;
/*!40000 ALTER TABLE `rotulos_correios` DISABLE KEYS */;
INSERT INTO `rotulos_correios` VALUES (7,'RM',NULL,NULL,NULL,NULL,NULL,NULL,'Teste',NULL,NULL),(8,'LC','RotulosCorreio','Itallo','2023-09-22',NULL,NULL,NULL,'A0DMD11',NULL,NULL),(9,NULL,'RotulosGral','Itallo','2023-09-22','CTC BH MG LOCAL','30.000-000','34.999-999',NULL,NULL,2023);
/*!40000 ALTER TABLE `rotulos_correios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saalm`
--

DROP TABLE IF EXISTS `saalm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `saalm` (
  `id` int NOT NULL AUTO_INCREMENT,
  `copias` int DEFAULT NULL,
  `paginas` int NOT NULL,
  `job` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `capa` int DEFAULT NULL,
  `dataAtual` date NOT NULL,
  `funcionario` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int DEFAULT NULL,
  `total1` int DEFAULT NULL,
  `copias1` int DEFAULT NULL,
  `capa1` int DEFAULT NULL,
  `paginas1` int DEFAULT NULL,
  `total2` int DEFAULT NULL,
  `total3` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saalm`
--

LOCK TABLES `saalm` WRITE;
/*!40000 ALTER TABLE `saalm` DISABLE KEYS */;
INSERT INTO `saalm` VALUES (4,2,10,'2222',2,'2023-09-15','Itallo',20,30,2,2,15,50,4),(5,2,20,'2222',2,'2023-09-20','Itallo',40,90,3,3,30,130,5),(6,3,33,'9999',3,'2023-09-20','Itallo',99,44,2,2,22,143,5);
/*!40000 ALTER TABLE `saalm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sdake05`
--

DROP TABLE IF EXISTS `sdake05`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sdake05` (
  `id` int NOT NULL AUTO_INCREMENT,
  `copias` int DEFAULT NULL,
  `paginas` int NOT NULL,
  `total` int DEFAULT NULL,
  `job` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `capa` int DEFAULT NULL,
  `funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_cadastro` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sdake05`
--

LOCK TABLES `sdake05` WRITE;
/*!40000 ALTER TABLE `sdake05` DISABLE KEYS */;
INSERT INTO `sdake05` VALUES (5,4,4,16,'6666',4,'Itallo','2023-09-06'),(7,3,8888,26664,'8888',3,'Itallo','2023-09-21');
/*!40000 ALTER TABLE `sdake05` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sdake64`
--

DROP TABLE IF EXISTS `sdake64`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sdake64` (
  `id` int NOT NULL AUTO_INCREMENT,
  `copias` int DEFAULT NULL,
  `paginas` int NOT NULL,
  `job` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataAtual` date NOT NULL,
  `funcionario` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int DEFAULT NULL,
  `total1` int DEFAULT NULL,
  `copias1` int DEFAULT NULL,
  `paginas1` int DEFAULT NULL,
  `total2` int DEFAULT NULL,
  `copias2` int DEFAULT NULL,
  `paginas2` int DEFAULT NULL,
  `totaltudo` int DEFAULT NULL,
  `total3` int DEFAULT NULL,
  `copias3` int DEFAULT NULL,
  `paginas3` int DEFAULT NULL,
  `total4` int DEFAULT NULL,
  `copias4` int DEFAULT NULL,
  `paginas4` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sdake64`
--

LOCK TABLES `sdake64` WRITE;
/*!40000 ALTER TABLE `sdake64` DISABLE KEYS */;
INSERT INTO `sdake64` VALUES (2,14,14,'6666','2023-09-06','Itallo',196,1,1,1,4,2,2,226,16,4,4,9,3,3),(3,2,200,'2222','2023-09-14','Itallo',400,100,2,50,200,2,100,900,100,2,50,100,2,50),(4,1,111,'0000','2023-09-21','Itallo',111,444,2,222,999,3,333,6105,1776,4,444,2775,5,555);
/*!40000 ALTER TABLE `sdake64` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sdake75`
--

DROP TABLE IF EXISTS `sdake75`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sdake75` (
  `id` int NOT NULL AUTO_INCREMENT,
  `copias` int DEFAULT NULL,
  `paginas` int NOT NULL,
  `job` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `funcionario` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sdake75`
--

LOCK TABLES `sdake75` WRITE;
/*!40000 ALTER TABLE `sdake75` DISABLE KEYS */;
INSERT INTO `sdake75` VALUES (1,3,150,'3333','2023-09-14','Pagodeiro',450),(3,2,1000,'7765','2023-09-13','Pagodeiro',2000);
/*!40000 ALTER TABLE `sdake75` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sdg1`
--

DROP TABLE IF EXISTS `sdg1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sdg1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `copias` int DEFAULT NULL,
  `paginas` int NOT NULL,
  `job` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `capa` int DEFAULT NULL,
  `dataAtual` date NOT NULL,
  `funcionario` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sdg1`
--

LOCK TABLES `sdg1` WRITE;
/*!40000 ALTER TABLE `sdg1` DISABLE KEYS */;
INSERT INTO `sdg1` VALUES (3,1234,1234,'1234',324,'2023-09-05','Itallo',1522756),(4,1234,2134,'1234',NULL,'2023-09-05','Itallo',2633356),(5,6,6,'6666',NULL,'2023-09-05','Itallo',36),(6,6,6,'6666',NULL,'2023-09-05','Itallo',36),(7,6,6,'6666',6,'2023-09-05','Itallo',36),(8,14,14,'14',14,'2023-09-05','Itallo',196),(10,453,454,'534',453,'2023-09-20','Itallo',205662),(11,45345,4564,'1234',45345,'2023-09-20','Itallo',206954580),(12,45,456,'4564',45,'2023-09-01','Itallo',20520),(13,2,45,'2023',2,'2023-09-14','Itallo',90),(14,3,1222,'2023',3,'2023-09-20','Itallo',3666),(15,2,250,'8889',2,'2023-09-22','Itallo',500);
/*!40000 ALTER TABLE `sdg1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servico`
--

DROP TABLE IF EXISTS `servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servico` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_servico` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao_servico` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cliente_responsavel_servico` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cliente_servico` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correios_servico` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `impressao_servico` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_impressao_servico` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_preparo_servico` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `envelopamento_servico` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `separador_servico` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrega_servico` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_sistema_servico` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao_sistema_servico` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valor_servico` decimal(10,2) DEFAULT NULL,
  `folha_rosto` int DEFAULT NULL,
  `ativo` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Sim',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=333 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servico`
--

LOCK TABLES `servico` WRITE;
/*!40000 ALTER TABLE `servico` DISABLE KEYS */;
INSERT INTO `servico` VALUES (1,'A0DMD11','Multas Diárias','Prefeitura Municipal de São Lourenço','Prefeitura Municipal de São Lourenço','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','A0DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(2,'A0DMD11R','Multas Diárias','Prefeitura Municipal de São Lourenço','Prefeitura Municipal de São Lourenço','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','A0DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(3,'A0DMS11','Multas Semanais','Prefeitura Municipal de São Lourenço','Prefeitura Municipal de São Lourenço','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','A0DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(4,'B1DMD11','Multas Diárias','Prefeitura Municipal de Igarapé','Prefeitura Municipal de Igarapé','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','B1DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(5,'B1DMD11R','Multas Diárias','Prefeitura Municipal de Igarapé','Prefeitura Municipal de Igarapé','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','B1DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(6,'B1DMS11','Multas Semanais','Prefeitura Municipal de Igarapé','Prefeitura Municipal de Igarapé','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','B1DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(7,'CCVHD11','Multas Diárias','Prefeitura Municipal de Confins','Prefeitura Municipal de Confins','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','CCVH','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(8,'CCVHD11R','Multas Diárias','Prefeitura Municipal de Confins','Prefeitura Municipal de Confins','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','CCVH','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(9,'CCVHS11','Multas Semanais','Prefeitura Municipal de Confins','Prefeitura Municipal de Confins','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','CCVH','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(10,'CPDMD11','Multas Diárias','Prefeitura Municipal de Patrocínio','Prefeitura Municipal de Patrocínio','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','CPDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(11,'CPDMD11R','Multas Diárias','Prefeitura Municipal de Patrocínio','Prefeitura Municipal de Patrocínio','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','CPDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(12,'CPDMS11','Multas Semanais','Prefeitura Municipal de Patrocínio','Prefeitura Municipal de Patrocínio','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','CPDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(13,'Demonstrativos Procuradoria','Demonstrativos de Pagamento','PGJ - Procuradoria Geral de Justiça','PGJ - Procuradoria Geral de Justiça','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','Sem Envelopamento','Com Elástico','Cliente','Demonstrativos Procuradoria','Sem descrição',0.19,0,'Não'),(14,'DIVERSOS - CORREIOS','Relatórios','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','Correios','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','Sem codigo','Sem descrição',0.19,0,'Não'),(15,'DIVERSOS - IPSM','Relatórios','IPSM - Instituto de Previdência dos Servidores Militares','IPSM - Instituto de Previdência dos Servidores Militares','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','Sem codigo','Sem descrição',0.19,0,'Não'),(16,'DIVERSOS - PRODEMGE','Relatórios','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Sem Preparo','Sem Envelopamento FV','Sem separado','Cliente','Sem codigo','Sem descrição',0.00,0,'Sim'),(17,'FFAKD001','Relatórios','SEF - Secretaria de Estado da Fazenda - CAMG','SEF - Secretaria de Estado da Fazenda - CAMG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','FFAK','PAGAMENTO DE PESSOAL',0.00,0,'Não'),(18,'FFAKD001 - DAE','DAE','SEPLAG - Secretaria de Estado de Planejamento e Gestão','SEPLAG - Secretaria de Estado de Planejamento e Gestão','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Cliente','FFAK','PAGAMENTO DE PESSOAL',0.00,0,'Não'),(19,'FH01D01','Relatórios','SEF - Secretaria de Estado da Fazenda - CAMG','SEF - Secretaria de Estado da Fazenda - CAMG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','FH01','RECURSOS HUMANOS',0.00,0,'Não'),(20,'FH01E02','Relatórios','SEF - Secretaria de Estado da Fazenda - CAMG','SEF - Secretaria de Estado da Fazenda - CAMG','Não','Papel A4 75g/m2 - Frente','Laser','Colocação de documentos em pastas','Sem Envelopamento F','Sem separado','Cliente','FH01','RECURSOS HUMANOS',0.00,0,'Não'),(21,'FH01E06','Relatórios','SEF - Secretaria de Estado da Fazenda - CAMG','SEF - Secretaria de Estado da Fazenda - CAMG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Colocação de documentos em pastas','Sem Envelopamento FV','Sem separado','Cliente','FH01','RECURSOS HUMANOS',0.00,0,'Não'),(22,'FH01E07','Relatórios','SEF - Secretaria de Estado da Fazenda - CAMG','SEF - Secretaria de Estado da Fazenda - CAMG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Colocação de documentos em pastas','Sem Envelopamento FV','Sem separado','Cliente','FH01','RECURSOS HUMANOS',0.00,0,'Não'),(23,'FH01E25','Relatórios','SEF - Secretaria de Estado da Fazenda - CAMG','SEF - Secretaria de Estado da Fazenda - CAMG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','FH01','RECURSOS HUMANOS',0.00,0,'Não'),(24,'FH01M02','Relatórios','SEF - Secretaria de Estado da Fazenda - CAMG','SEF - Secretaria de Estado da Fazenda - CAMG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','FH01','RECURSOS HUMANOS',0.00,0,'Não'),(25,'FIAJE645','Relatórios','SEF - Secretaria de Estado da Fazenda - CAMG','SCCG - Contadoria - CAMG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','GDRD','GRP MINAS',0.19,0,'Não'),(26,'FIAJE820','Relatórios','SEF - Secretaria de Estado da Fazenda - CAMG','SCCG - Contadoria - CAMG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','GDRD','GRP MINAS',0.19,0,'Não'),(27,'FMDMD11','Multas Diárias','Prefeitura Municipal de Coronel Fabriciano','Prefeitura Municipal de Coronel Fabriciano','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','FMDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(28,'FMDMD11R','Multas Diárias','Prefeitura Municipal de Coronel Fabriciano','Prefeitura Municipal de Coronel Fabriciano','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','FMDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(29,'FMDMS11','Multas Semanais','Prefeitura Municipal de Coronel Fabriciano','Prefeitura Municipal de Coronel Fabriciano','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','FMDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(41,'GDRDEA3','Relatórios','SEF - Secretaria de Estado da Fazenda - CAMG','CAMG - Cidade Administrativa de Minas Gerais','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Sem Preparo','Sem Envelopamento FV','Sem separado','Cliente','GDRD','GRP MINAS',0.00,0,'Não'),(42,'GDRDEVEN','Relatórios','SEF - Secretaria de Estado da Fazenda - CAMG','SEF - Secretaria de Estado da Fazenda - CAMG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Sem Preparo','Sem Envelopamento FV','Sem separado','Cliente','GDRD','GRP MINAS',0.00,0,'Não'),(43,'GDRDM004 - Contadoria','Relatórios','SEF - Secretaria de Estado da Fazenda - CAMG','SCCG - Contadoria - CAMG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Sem Preparo','Sem Envelopamento FV','Sem separado','Cliente','GDRD','GRP MINAS',0.31,0,'Não'),(44,'GDRDM005 - Contadoria','Relatórios','SEF - Secretaria de Estado da Fazenda - CAMG','SCCG - Contadoria - CAMG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Sem Preparo','Sem Envelopamento FV','Sem separado','Cliente','GDRD','GRP MINAS',0.31,0,'Não'),(46,'GDRDX819','Relatórios','SEF - Secretaria de Estado da Fazenda - CAMG','SCCG - Contadoria - CAMG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Sem Preparo','Sem Envelopamento FV','Sem separado','Cliente','GDRD','GRP MINAS',0.00,0,'Não'),(47,'GDRDX847','Relatórios','SEF - Secretaria de Estado da Fazenda - CAMG','SCCG - Contadoria - CAMG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Sem Preparo','Sem Envelopamento FV','Sem separado','Cliente','GDRD','GRP MINAS',0.00,0,'Não'),(48,'GI54MDEM','Demonstrativos de Pagamento','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Cliente','GI54','PAGAMENTO AUXILIO DOENCA',0.00,0,'Não'),(50,'GIAEA02A','Informe de Rendimentos','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Sem separado','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(51,'GIAEA02B','Informe de Rendimentos','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Sem separado','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(52,'GIAEA02C','Informe de Rendimentos','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Sem separado','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(53,'GIAEA03','Informe de Rendimentos','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Sem separado','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(54,'GIAEA03A','Informe de Rendimentos','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Sem separado','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(55,'GIAEA03B','Informe de Rendimentos','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Sem separado','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(56,'GIAEA03C','Informe de Rendimentos','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Sem separado','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(57,'GIAED001 - Cancelamento','Notificação de Pensionista - Cancelamento','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(58,'GIAED001 - Comunicado','Notificação de Pensionista - Comunicado','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(59,'GIAED001 - Deferimento','Notificação de Pensionista - Deferimento','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(60,'GIAED001 - Indeferimento','Notificação de Pensionista - Indeferimento','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(61,'GIAED001 - Novo Benficiário','Notificação de Pensionista - Novo Benefício','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(62,'GIAED001 - Revisão','Notificação de Pensionista - Novo Benefício','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(63,'GIAED001 - Suspensão','Notificação de Pensionista - Suspensão','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(64,'GIAED001 - Term. Situação','Notificação de Pensionista - Term. Situação','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(65,'GIAED01A','Notificações - Aviso Não Recadastramento','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(66,'GIAED02','Notificação de Pensionista','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(67,'GIAED02A','Cartas Recadastramento Passagem Hospital','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(68,'GIAEE01','Comunicação Pensionistas','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(69,'GIAEEVEN - Cliente','Cartas','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Cliente','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(70,'GIAEEVEN - Correios','Cartas','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(71,'GIAEM11','Carta de Recadastramento','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(72,'GIAEM12','Carta de Declaração de Vida e Residência','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(73,'GIAET19C','Contra-Cheques Pensionistas - Capital','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(74,'GIAET19I','Contra-Cheques Pensionistas - Interior','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(75,'GIAIFTDD','DAE Eletrônico','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Cliente','FTDD ','DAE WEB',0.00,0,'Não'),(76,'GPBNEVEN','Relatórios','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','GPBN','Sem descrição',0.00,0,'Não'),(77,'GRALD11','Multas Diárias','DEER - Departamento de Edificações e Estradas de Rodagem do Estado de MG','DEER - Departamento de Edificações e Estradas de Rodagem do Estado de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GRAL','SISTEMA DE INFRAÇÕES',0.98,2,'Sim'),(78,'GRALD11R','Multas Diárias','DEER - Departamento de Edificações e Estradas de Rodagem do Estado de MG','DEER - Departamento de Edificações e Estradas de Rodagem do Estado de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GRAL','SISTEMA DE INFRAÇÕES',0.98,2,'Sim'),(79,'GRALS03','Cartas de Ofício','DEER - Departamento de Edificações e Estradas de Rodagem do Estado de MG','DEER - Departamento de Edificações e Estradas de Rodagem do Estado de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GRAL','SISTEMA DE INFRAÇÕES',0.98,2,'Sim'),(80,'GRALS11','Multas Semanais','DEER - Departamento de Edificações e Estradas de Rodagem do Estado de MG','DEER - Departamento de Edificações e Estradas de Rodagem do Estado de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GRAL','SISTEMA DE INFRAÇÕES',0.98,2,'Sim'),(81,'GXDMD11','Multas Diárias','Prefeitura Municipal de Teófilo Otoni','Prefeitura Municipal de Teófilo Otoni','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GXDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(82,'GXDMD11R','Multas Diárias','Prefeitura Municipal de Teófilo Otoni','Prefeitura Municipal de Teófilo Otoni','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GXDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(83,'GXDMS11','Multas Semanais','Prefeitura Municipal de Teófilo Otoni','Prefeitura Municipal de Teófilo Otoni','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GXDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(84,'HODMD11','Multas Diárias','Prefeitura Municipal de Araguari','Prefeitura Municipal de Araguari','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','HODM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(85,'HODMD11R','Multas Diárias','Prefeitura Municipal de Araguari','Prefeitura Municipal de Araguari','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','HODM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(86,'HODMS11','Multas Semanais','Prefeitura Municipal de Araguari','Prefeitura Municipal de Araguari','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','HODM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(87,'ISHCA001','Comprovante de Rendimentos','SEPLAG - Secretaria de Estado de Planejamento e Gestão','SEPLAG - Secretaria de Estado de Planejamento e Gestão','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','ISHC','ADMINISTRAÇÃO DE PESSOAL',0.00,0,'Não'),(88,'ISHCA002','Comprovante de Rendimentos','SEPLAG - Secretaria de Estado de Planejamento e Gestão','SEPLAG - Secretaria de Estado de Planejamento e Gestão','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','ISHC','ADMINISTRAÇÃO DE PESSOAL',0.00,0,'Não'),(89,'ISHCA022','Relatórios','SEPLAG - Secretaria de Estado de Planejamento e Gestão','SEPLAG - Secretaria de Estado de Planejamento e Gestão','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Sem Preparo','Sem Envelopamento','Sem separado','Cliente','ISHC','ADMINISTRAÇÃO DE PESSOAL',0.00,0,'Não'),(90,'JPHHEVEN','Informe de Rendimentos','Defensoria Pública do Estado de MG','Defensoria Pública do Estado de MG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Cliente','JPHH','RECURSOS HUMANOS - ARTERH',0.83,0,'Não'),(91,'JPHHMDEM','Demonstrativos de Pagamento','Defensoria Pública do Estado de MG','Defensoria Pública do Estado de MG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Cliente','JPHH','RECURSOS HUMANOS - ARTERH',0.83,0,'Não'),(93,'KGDMD11','Multas Diárias','Prefeitura Municipal de Ribeirão das Neves','Prefeitura Municipal de Ribeirão das Neves','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','KGDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(94,'KGDMD11R','Multas Diárias','Prefeitura Municipal de Ribeirão das Neves','Prefeitura Municipal de Ribeirão das Neves','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','KGDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(95,'KGDMS11','Multas Semanais','Prefeitura Municipal de Ribeirão das Neves','Prefeitura Municipal de Ribeirão das Neves','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','KGDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(96,'LOATA07','Relatórios','CBMMG - Corpo de Bombeiros Militar do Estado de MG','CBMMG - Corpo de Bombeiros Militar do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','LOAT','FOLHA DE PAGAMENTO - PMMG',0.19,0,'Não'),(97,'LOATEVEN','Relatórios','CBMMG - Corpo de Bombeiros Militar do Estado de MG','CBMMG - Corpo de Bombeiros Militar do Estado de MG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Sem separado','Cliente','LOAT','FOLHA DE PAGAMENTO - PMMG',0.83,0,'Não'),(98,'LOATINF','Informe de Rendimentos','CBMMG - Corpo de Bombeiros Militar do Estado de MG','CBMMG - Corpo de Bombeiros Militar do Estado de MG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Sem separado','Cliente','LOAT','FOLHA DE PAGAMENTO - PMMG',0.83,0,'Não'),(100,'MGDMD11','Multas Diárias','Prefeitura Municipal de Três Corações','Prefeitura Municipal de Três Corações','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','MGDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(101,'MGDMD11R','Multas Diárias','Prefeitura Municipal de Três Corações','Prefeitura Municipal de Três Corações','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','MGDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(102,'MGDMS11','Multas Semanais','Prefeitura Municipal de Três Corações','Prefeitura Municipal de Três Corações','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','MGDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(103,'MMDMD11','Multas Diárias','Prefeitura Municipal de Timóteo','Prefeitura Municipal de Timóteo','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','MMDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(104,'MMDMD11R','Multas Diárias','Prefeitura Municipal de Timóteo','Prefeitura Municipal de Timóteo','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','MMDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(105,'MMDMS11','Multas Semanais','Prefeitura Municipal de Timóteo','Prefeitura Municipal de Timóteo','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','MMDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(106,'MODMD11','Multas Diárias','Prefeitura Municipal de Montes Claros','Prefeitura Municipal de Montes Claros','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','MODM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(107,'MODMD11R','Multas Diárias','Prefeitura Municipal de Montes Claros','Prefeitura Municipal de Montes Claros','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','MODM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(108,'MODMS11','Multas Semanais','Prefeitura Municipal de Montes Claros','Prefeitura Municipal de Montes Claros','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','MODM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(109,'NADMD11','Multas Diárias','Prefeitura Municipal de Itajubá','Prefeitura Municipal de Itajubá','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NADM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(110,'NADMD11R','Multas Diárias','Prefeitura Municipal de Itajubá','Prefeitura Municipal de Itajubá','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NADM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(111,'NADMS11','Multas Semanais','Prefeitura Municipal de Itajubá','Prefeitura Municipal de Itajubá','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NADM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(112,'NDDMD11','Multas Diárias','Prefeitura Municipal de Sarzedo','Prefeitura Municipal de Sarzedo','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NDDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(113,'NDDMD11R','Multas Diárias','Prefeitura Municipal de Sarzedo','Prefeitura Municipal de Sarzedo','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NDDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(114,'NDDMS11','Multas Semanais','Prefeitura Municipal de Sarzedo','Prefeitura Municipal de Sarzedo','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NDDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(115,'NLDMD11','Multas Diárias','Prefeitura Municipal de Nova Lima','Prefeitura Municipal de Nova Lima','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NLDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(116,'NLDMD11R','Multas Diárias','Prefeitura Municipal de Nova Lima','Prefeitura Municipal de Nova Lima','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NLDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(117,'NLDMS11','Multas Semanais','Prefeitura Municipal de Nova Lima','Prefeitura Municipal de Nova Lima','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NLDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(118,'NUDMD11','Multas Diárias','Prefeitura Municipal de Ibirité','Prefeitura Municipal de Ibirité','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NUDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(119,'NUDMD11R','Multas Diárias','Prefeitura Municipal de Ibirité','Prefeitura Municipal de Ibirité','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NUDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(120,'NYDMD11','Multas Diárias','Prefeitura Municipal de Mantena','Prefeitura Municipal de Mantena','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NYDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(121,'NYDMD11R','Multas Diárias','Prefeitura Municipal de Mantena','Prefeitura Municipal de Mantena','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NYDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(122,'NYDMS11','Multas Semanais','Prefeitura Municipal de Mantena','Prefeitura Municipal de Mantena','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NYDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(123,'P0DMD11','Multas Diárias','Prefeitura Municipal de Ponte Nova','Prefeitura Municipal de Ponte Nova','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','P0DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(124,'P0DMD11R','Multas Diárias','Prefeitura Municipal de Ponte Nova','Prefeitura Municipal de Ponte Nova','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','P0DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(125,'P0DMS11','Multas Semanais','Prefeitura Municipal de Ponte Nova','Prefeitura Municipal de Ponte Nova','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','P0DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(126,'PVDMD11','Multas Diárias','Prefeitura Municipal de Varginha','Prefeitura Municipal de Varginha','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','PVDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(127,'PVDMD11R','Multas Diárias','Prefeitura Municipal de Varginha','Prefeitura Municipal de Varginha','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','PVDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(128,'PVDMS11','Multas Semanais','Prefeitura Municipal de Varginha','Prefeitura Municipal de Varginha','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','PVDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(129,'Q0DMD11','Multas Diárias','Prefeitura Municipal de Pedro Leopoldo','Prefeitura Municipal de Pedro Leopoldo','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','Q0DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(130,'Q0DMS11','Multas Semanais','Prefeitura Municipal de Pedro Leopoldo','Prefeitura Municipal de Pedro Leopoldo','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','Q0DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(132,'SAALM005','Relatórios','IPSM - Instituto de Previdência dos Servidores Militares','IPSM - Instituto de Previdência dos Servidores Militares','Não','Papel A4 75g/m2 - Frente','Laser','Colocação de documentos em pastas','Sem Envelopamento F','Sem separado','Cliente','SAAL','EMPRÉSTIMO FINANCEIRO',0.71,2,'Sim'),(133,'SDAKD09','Relatórios','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SDAK','CADASTRO DE VEÍCULOS',0.19,0,'Não'),(134,'SDAKD11','Multas Diárias','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,2,'Sim'),(135,'SDAKD11R','Multas Diárias','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,2,'Sim'),(136,'SDAKD36G','Notificações de Impedimento','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,4,'Sim'),(137,'SDAKD36M','Notificações de Impedimento','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,4,'Sim'),(138,'SDAKD661','Cartas','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','SIDAM - DIGIT. E ADM. MULTAS',0.47,2,'Não'),(139,'SDAKDL01','Notificação de Veículo Apreendido','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,2,'Sim'),(140,'SDAKDL02','Notificação de Veículo Apreendido','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,0,'Sim'),(141,'SDAKDS15','Cartas do GRAVAME','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,4,'Sim'),(142,'SDAKDWEL','2ª Via de CRLV','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente','Matri','Sem Preparo','Sem Envelopamento','Sem separado','Correios','SDAK','CADASTRO DE VEÍCULOS',0.00,0,'Não'),(143,'SDAKDWEL - Relatórios','Relatórios','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Sem Preparo','Sem Envelopamento','Sem separado','Cliente','SDAK','CADASTRO DE VEÍCULOS',0.00,0,'Não'),(144,'SDAKE53A - Relatórios','Relatórios','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Sem Preparo','Sem Envelopamento FV','Sem separado','Cliente','SDAK','CADASTRO DE VEÍCULOS',0.00,0,'Não'),(145,'SDAKE53I','CRLV','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente','Matri','Insersora','Sem Envelopamento','Sem separado','Correios','SDAK','CADASTRO DE VEÍCULOS',0.00,0,'Não'),(146,'SDAKE53I - Relatórios','Relatórios','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SDAK','CADASTRO DE VEÍCULOS',0.00,0,'Não'),(147,'SDAKE59 - CRLV','CRLV','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Não','Frente','Matri','Sem Preparo','Sem Envelopamento','Sem separado','Cliente','SDAK','CADASTRO DE VEÍCULOS',0.00,0,'Não'),(148,'SDAKERLV - CRLV','CRLV','Polícia Civil do Estado de MG','SEPLAG - Secretaria de Estado de Planejamento e Gestão','Não','Frente','Matri','Sem Preparo','Sem Envelopamento','Sem separado','Cliente','SDAK','CADASTRO DE VEÍCULOS',0.00,0,'Não'),(149,'SDAKERLV - Relatórios - Detran','Relatórios','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SDAK','CADASTRO DE VEÍCULOS',0.00,0,'Não'),(150,'SDAKERLV - Relatórios - Prodemge','Relatórios','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SDAK','CADASTRO DE VEÍCULOS',0.00,0,'Não'),(151,'SDAKERLV - Relatórios - Seplag','Relatórios','Polícia Civil do Estado de MG','SEPLAG - Secretaria de Estado de Planejamento e Gestão','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SDAK','CADASTRO DE VEÍCULOS',0.00,0,'Não'),(152,'SDAKEVEN','Relatórios','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SDAK','CADASTRO DE VEÍCULOS',0.19,0,'Não'),(153,'SDAKGPIT','Cartas','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','SIDAM - DIGIT. E ADM. MULTAS',0.47,0,'Não'),(154,'SDAKM12 - Detran','Relatórios','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Colocação de documentos em pastas','Sem Envelopamento FV','Sem separado','Cliente','SDAK','CADASTRO DE VEÍCULOS',0.83,0,'Não'),(155,'SDAKM12 - Prodemge','Relatórios','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Sem Preparo','Sem Envelopamento','Sem separado','Cliente','SDAK','CADASTRO DE VEÍCULOS',0.31,0,'Não'),(156,'SDAKS03','Cartas de Ofício','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,0,'Não'),(157,'SDAKS11','Multas Semanais','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,2,'Sim'),(158,'SDAKSMP0','Comunicado de Acolhimento de Defesa da Autuaç','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,2,'Não'),(159,'SDG1D017','Cartas Aviso Pendências na Emissão CNH','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','SDG1','RENACH -MA',0.47,4,'Sim'),(160,'SDG1M001','Relatórios','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Colocação de documentos em pastas','Sem Envelopamento FV','Sem separado','Cliente','SDG1','RENACH -MA',0.83,1,'Sim'),(161,'SDG5S1A','Cartas de Ofício','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDG5','SISTEMA CONTROLE REC. A JARI',0.47,0,'Não'),(162,'SDGUE21','Relatórios','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SDAK','MICROF.PRONT.VEÍCULOS MINAS',0.19,0,'Não'),(163,'SKDMD11','Multas Diárias','Prefeitura Municipal de Mateus Leme','Prefeitura Municipal de Mateus Leme','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SKDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(164,'SKDMD11R','Multas Diárias','Prefeitura Municipal de Mateus Leme','Prefeitura Municipal de Mateus Leme','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SKDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(165,'SKDMS11','Multas Semanais','Prefeitura Municipal de Mateus Leme','Prefeitura Municipal de Mateus Leme','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SKDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(166,'SMABE684','Relatórios','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento FV','Sem separado','Cliente','SMB3','ENSINO ASSIST.COL.TIRADENTES',0.19,0,'Sim'),(167,'SMABEE63','Relatórios','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Sem Preparo','Sem Envelopamento FV','Sem separado','Cliente','SMAB','ADMINISTR. REC. HUMANOS',0.31,0,'Sim'),(168,'SMAFE008','Relatórios','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SMAF','ADMINISTRAÇÃO DE ENSINO',0.19,0,'Sim'),(169,'SMAFE009','Etiquetas','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','Impressão de Etiquetas','Laser','Impressão de Etiquetas','Sem Envelopamento','Sem separado','Cliente','SMAF','ADMINISTRAÇÃO DE ENSINO',0.10,0,'Sim'),(170,'SMAFE010','Etiquetas','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','Impressão de Etiquetas','Laser','Impressão de Etiquetas','Sem Envelopamento','Sem separado','Cliente','SMAF','ADMINISTRAÇÃO DE ENSINO',0.10,0,'Sim'),(171,'SMAFE037','Relatórios','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SMAF','ADMINISTRAÇÃO DE ENSINO',0.19,0,'Sim'),(172,'SMAHA002','Comprovante de Rendimentos','IPSM - Instituto de Previdência dos Servidores Militares','IPSM - Instituto de Previdência dos Servidores Militares','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Cliente','SMAH','ASSISTÊNCIA À SAUDE',0.83,0,'Não'),(173,'SMAHAEVE','Informe de Rendimentos','IPSM - Instituto de Previdência dos Servidores Militares','IPSM - Instituto de Previdência dos Servidores Militares','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Sem separado','Cliente','SMAH','ASSISTÊNCIA À SAUDE',0.83,0,'Não'),(174,'SMAHEVEN','Cartas','IPSM - Instituto de Previdência dos Servidores Militares','IPSM - Instituto de Previdência dos Servidores Militares','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Sem separado','Cliente','SMAH','ASSISTÊNCIA À SAUDE',0.83,0,'Não'),(175,'SMAT','Relatórios','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SMAT','FOLHA DE PAGAMENTO - PMMG',0.19,0,'Não'),(176,'SMATA13 - PMMG - Ativos','Comprovante de Rendimentos','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Cliente','SMAT','FOLHA DE PAGAMENTO - PMMG',0.83,0,'Não'),(177,'SMATA13 - PMMG - Inativos','Comprovante de Rendimentos','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Cliente','SMAT','FOLHA DE PAGAMENTO - PMMG',0.83,0,'Não'),(178,'SMATA13 - Teste','Relatórios','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SMAT','FOLHA DE PAGAMENTO - PMMG',0.19,0,'Não'),(179,'SMATEVEN','Relatórios','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SMAT','FOLHA DE PAGAMENTO - PMMG',0.19,0,'Não'),(180,'SMATM13','CD','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','CD','Laser','CD','Sem Envelopamento','Sem separado','Cliente','SMAT','FOLHA DE PAGAMENTO - PMMG',0.00,0,'Sim'),(182,'SMB3E306','Boletins','PMMG - Polícia Militar do Estado de Minas Gerais','Colégio Tiradentes','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Cortado','Sem Envelopamento','Sem separado','Cliente','SMB3','ENSINO ASSIST.COL.TIRADENTES',0.31,0,'Sim'),(183,'SMB3E329','Relatórios','PMMG - Polícia Militar do Estado de Minas Gerais','Colégio Tiradentes','Não','Papel A4 75g/m2 - Frente','Laser','Colocação de documentos em pastas','Sem Envelopamento F','Sem separado','Cliente','SMB3','ENSINO ASSIST.COL.TIRADENTES',0.71,0,'Sim'),(184,'SMB3E341','Relatórios','PMMG - Polícia Militar do Estado de Minas Gerais','Colégio Tiradentes','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Sem Preparo','Sem Envelopamento FV','Sem separado','Cliente','SMB3','ENSINO ASSIST.COL.TIRADENTES',0.31,0,'Sim'),(185,'SMB3E356','Relatórios','PMMG - Polícia Militar do Estado de Minas Gerais','Colégio Tiradentes','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SMB3','ENSINO ASSIST.COL.TIRADENTES',0.19,0,'Sim'),(186,'SS06EPAP','Notificação do Processo Administrativo','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SS06','SISTEMA DE HABILITAÇÃO',0.47,2,'Sim'),(187,'SS06M01','Relatórios','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Colocação de documentos em pastas','Sem Envelopamento F','Sem separado','Cliente','SS06','SISTEMA DE HABILITAÇÃO',0.83,0,'Não'),(188,'SS06M04','Relatórios','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Sem Preparo','Sem Envelopamento FV','Sem separado','Cliente','SS06','SISTEMA DE HABILITAÇÃO',0.31,0,'Não'),(189,'SS06S05 - NÃO USAR','Cartas de Notificação','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SS06','SISTEMA DE HABILITAÇÃO',0.00,0,'Não'),(191,'SS13E015','Relatórios','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SS13','RECURSOS HUMANOS',0.19,2,'Sim'),(192,'SS13E05','Relatórios','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Colocação de documentos em pastas','Sem Envelopamento FV','Sem separado','Cliente','SS13','RECURSOS HUMANOS',0.83,0,'Sim'),(193,'SS13EFRQ','Relatórios','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SS13','RECURSOS HUMANOS',0.19,0,'Não'),(194,'SS13EORG','Relatórios','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SS13','RECURSOS HUMANOS',0.19,0,'Não'),(195,'SS13EORP','Relatórios','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SS13','RECURSOS HUMANOS',0.19,0,'Não'),(196,'TDDMD11','Multas Diárias','Prefeitura Municipal de Andradas','Prefeitura Municipal de Andradas','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','TDDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(197,'TDDMD11R','Multas Diárias','Prefeitura Municipal de Andradas','Prefeitura Municipal de Andradas','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','TDDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(198,'TDDMS11','Multas Semanais','Prefeitura Municipal de Andradas','Prefeitura Municipal de Andradas','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','TDDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(199,'THDMD11','Multas Diárias','Prefeitura Municipal de Matozinhos','Prefeitura Municipal de Matozinhos','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','THDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(200,'THDMD11R','Multas Diárias','Prefeitura Municipal de Matozinhos','Prefeitura Municipal de Matozinhos','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','THDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(201,'THDMS11','Multas Semanais','Prefeitura Municipal de Matozinhos','Prefeitura Municipal de Matozinhos','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','THDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(202,'TYDMD11','Multas Diárias','Prefeitura Municipal de Santa Luzia','Prefeitura Municipal de Santa Luzia','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','TYDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(203,'TYDMD11R','Multas Diárias','Prefeitura Municipal de Santa Luzia','Prefeitura Municipal de Santa Luzia','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','TYDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(204,'TYDMS11','Multas Semanais','Prefeitura Municipal de Santa Luzia','Prefeitura Municipal de Santa Luzia','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','TYDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(205,'VIAIFTDD','DAE Eletrônico','FCS - Fundação Cloves Salgado','FCS - Fundação Clovis Salgado','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Cliente','FTDD ','DAE WEB',0.83,0,'Não'),(206,'WIDMD11','Multas Diárias','Prefeitura Municipal de São José da Lapa','Prefeitura Municipal de São José da Lapa','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','WIDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(207,'WIDMS11','Multas Semanais','Prefeitura Municipal de São José da Lapa','Prefeitura Municipal de São José da Lapa','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','WIDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(208,'YTDMD11','Multas Diárias','Prefeitura Municipal de Tiradentes','Prefeitura Municipal de Tiradentes','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','YTDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(209,'YTDMD11R','Multas Diárias','Prefeitura Municipal de Tiradentes','Prefeitura Municipal de Tiradentes','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','YTDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(210,'YTDMS11','Multas Semanais','Prefeitura Municipal de Tiradentes','Prefeitura Municipal de Tiradentes','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','YTDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(211,'YWDMD11','Multas Diárias','Prefeitura Municipal de Governador Valadares','Prefeitura Municipal de Governador Valadares','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','YWDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(212,'YWDMD11R','Multas Diárias','Prefeitura Municipal de Governador Valadares','Prefeitura Municipal de Governador Valadares','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','YWDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(213,'YWDMS11','Multas Semanais','Prefeitura Municipal de Governador Valadares','Prefeitura Municipal de Governador Valadares','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','YWDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(214,'Z7DMD11','Multas Diárias','Prefeitura Municipal de Frutal','Prefeitura Municipal de Frutal','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','Z7DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(215,'Z7DMS11','Multas Semanais','Prefeitura Municipal de Frutal','Prefeitura Municipal de Frutal','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','Z7DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(216,'SDAKE91M','CRLV','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente','Matri','Insersora','Sem Envelopamento','Sem separado','Correios','SDAK','CADASTRO DE VEÍCULOS',0.00,0,'Não'),(217,'SMAFE001','Relatórios','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SMAF','ADMINISTRAÇÃO DE ENSINO',0.19,0,'Sim'),(218,'CD','CD','Diversos','Diversos','Não','CD','CD','CD','CD','Sem separado','Cliente','CD','CD',0.00,0,'Sim'),(219,'TESTE','TESTE','TESTE','TESTE','Não','TESTE','TESTE','TESTE','TESTE','TESTE','TESTE','TESTE','TESTE',0.00,0,'Sim'),(220,'WJDMD11','Multas Diárias','Prefeitura Municipal de Nanuque','Prefeitura Municipal de Nanuque','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','WJDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(221,'WJDMD11R','Multas Diárias','Prefeitura Municipal de Nanuque','Prefeitura Municipal de Nanuque','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','WJDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(222,'GIAEDCP','Cartas','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','GIAE','PRORROGAÇÃO TERMINO CURATELA',0.00,0,'Não'),(223,'SDAKE64','Relatórios','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SDAK','CADASTRO DE VEÍCULOS',0.19,2,'Sim'),(224,'SMB3E316','Relatórios','PMMG - Polícia Militar do Estado de Minas Gerais','Colégio Tiradentes','Não','Papel A4 75g/m2 - Frente','Laser','Colocação de documentos em pastas','Sem Envelopamento F','Sem separado','Cliente','SMB3','ENSINO ASSIST.COL.TIRADENTES',0.71,0,'Sim'),(225,'GIAIFTDD - Acerto','DAE Eletrônico','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Cliente','FTDD ','DAE WEB',0.00,0,'Não'),(226,'GIAIFTDD - Acordo','DAE Eletrônico','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Cliente','FTDD ','DAE WEB',0.00,0,'Não'),(227,'GIAIFTDD - Cartório','DAE Eletrônico','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Cliente','FTDD ','DAE WEB',0.00,0,'Não'),(228,'GIAIFTDD - CI','DAE Eletrônico','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Cliente','FTDD ','DAE WEB',0.00,0,'Não'),(229,'GIAIFTDD - Predial','DAE Eletrônico','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Cliente','FTDD ','DAE WEB',0.00,0,'Não'),(233,'FRDMD11','Multas Diárias','Prefeitura Municipal de Raposos','Prefeitura Municipal de Raposos','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','FRDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(234,'FRDMD11R','Multas Diárias','Prefeitura Municipal de Raposos','Prefeitura Municipal de Raposos','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','FRDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(235,'FRDMS11','Multas Semanais','Prefeitura Municipal de Raposos','Prefeitura Municipal de Raposos','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','FRDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(236,'Z7DMD11R','Multas Diárias','Prefeitura Municipal de Frutal','Prefeitura Municipal de Frutal','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','Z7DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(237,'IMPRESSÃO INTERNA - FRENTE E VERSO','Serviço Gráfico Interno','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Sem Preparo','Sem Envelopamento FV','Sem separado','Solicitante','IMPINT','Relatórios Diversos',0.00,0,'Sim'),(238,'SDAK01A','Comunicação de Acolhimento de Defesa','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Sem separado','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,2,'Sim'),(239,'SDAK02A','Comunicação de Acolhimento de Advertência','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Sem separado','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,2,'Sim'),(240,'SDAKE05','Relatório de Veículos','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Colocação de documentos em pastas e encaderna','A4','Sem separado','Cliente','SDAK','RELATÓRIO DE VEÍCULOS',0.31,0,'Sim'),(241,'GRAL02A','Comunicado de Deferimento de Advertência','DEER - Departamento de Edificações e Estradas de Rodagem do Estado de MG','DEER - Departamento de Edificações e Estradas de Rodagem do Estado de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GRAL','SISTEMA DE INFRAÇÕES',0.98,2,'Sim'),(242,'IMPRESSÃO INTERNA - FRENTE','Serviço Gráfico Interno','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Solicitante','IMPINT','Relatórios Diversos',0.00,0,'Sim'),(243,'ETIQUETAS PMMG','Etiquetas','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','Impressão de Etiquetas','Laser','Impressão de Etiquetas','Etiqueta','Sem separado','Cliente','SMAF','ADMINISTRAÇÃO DE ENSINO',0.10,0,'Sim'),(244,'SDAKE561','Relatório de Impedimento','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Colocação de documentos em pastas e encaderna','A4','Sem separado','Cliente','SDAK','RELATÓRIO DE VEÍCULOS',0.19,0,'Não'),(245,'SMAFE08B','Relatórios','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SMAF','ADMINISTRAÇÃO DE ENSINO',0.19,0,'Sim'),(246,'SS06S005','Cartas de Notificação','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SS06','SISTEMA DE HABILITAÇÃO',0.47,2,'Sim'),(247,'IMPRESSÃO INTERNA - Etiquetas Patrimônio','Etiquetas','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','Não','Impressão de Etiquetas','Matri','Impressão de Etiquetas','Sem Envelopamento F','Sem separado','Solicitante','IMPINT','Impressão de Etiquetas',0.00,0,'Sim'),(248,'SS13A05','Relatórios','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Colocação de documentos em pastas','Sem Envelopamento F','Sem separado','Cliente','SS13','RECURSOS HUMANOS',0.71,0,'Sim'),(249,'SS13A15','Relatórios','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Colocação de documentos em pastas','Sem Envelopamento F','Sem separado','Cliente','SS13','RECURSOS HUMANOS',0.71,0,'Sim'),(250,'SS13A20','Relatórios','Polícia Civil do Estado de MG','Polícia Civil do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Colocação de documentos em pastas','Sem Envelopamento F','Sem separado','Cliente','SS13','RECURSOS HUMANOS',0.71,0,'Sim'),(251,'A3DMD11','Multas Diárias','Prefeitura Municipal de Sabará','Prefeitura Municipal de Sabará','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','A3DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(252,'A3DMD11R','Multas Diárias','Prefeitura Municipal de Sabará','Prefeitura Municipal de Sabará','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','A3DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(253,'A3DMS11','Multas Semanais','Prefeitura Municipal de Sabará','Prefeitura Municipal de Sabará','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','A3DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(254,'SDSIDA01','Notificação de Veículo Apreendido','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,2,'Sim'),(255,'SDSIDA02','Notificação de Veículo Recuperado','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,2,'Sim'),(256,'SDSIDA03','Notificação de Veículo Apreendido','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,2,'Sim'),(257,'ATA DE ABERTURA E FECHAMENTO - PMMG','ATA','PMMG - Polícia Militar do Estado de Minas Gerais','PMMG - Polícia Militar do Estado de Minas Gerais','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SMAF','ADMINISTRAÇÃO DE ENSINO',0.00,0,'Sim'),(259,'ENCADERNAÇÃO (sem impressão)','Serviço Interno','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','Não','Papel A4 75g/m2','Laser','Encadernação','Encadernação','Sem separado','Solicitante','Sem codigo','Sem descrição',0.00,0,'Sim'),(260,'GRAL01A','Comunicado de Acolhimento de Defesa DEER','DEER - Departamento de Edificações e Estradas de Rodagem do Estado de MG','DEER - Departamento de Edificações e Estradas de Rodagem do Estado de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GRAL','SISTEMA DE INFRAÇÕES',0.98,2,'Sim'),(261,'WJDMS11','Multas Semanais','Prefeitura Municipal de Nanuque','Prefeitura Municipal de Nanuque','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','WJDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(262,'PQDMD11','Multas Diárias','Prefeitura Municipal de Paraisópolis','Prefeitura Municipal de Paraisópolis','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','PQDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(263,'PQDMD11R','Multas Diárias','Prefeitura Municipal de Paraisópolis','Prefeitura Municipal de Paraisópolis','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','PQDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(264,'PQDMS11','Multas Semanais','Prefeitura Municipal de Paraisópolis','Prefeitura Municipal de Paraisópolis','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','PQDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(265,'YSDMD11','Multas Diárias','Prefeitura Municipal de Manhuaçu','Prefeitura Municipal de Manhuaçu','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','YSDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(266,'YSDMD11R','Multas Diárias','Prefeitura Municipal de Manhuaçu','Prefeitura Municipal de Manhuaçu','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','YSDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(267,'A0DM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de São Lourenço','Prefeitura Municipal de São Lourenço','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','A0DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(268,'A3DM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Sabará','Prefeitura Municipal de Sabará','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','A3DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(269,'CCVH02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Confins','Prefeitura Municipal de Confins','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','CCVH','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(270,'FMDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Coronel Fabriciano','Prefeitura Municipal de Coronel Fabriciano','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','FMDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(271,'NADM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Itajubá','Prefeitura Municipal de Itajubá','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NADM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(272,'NDDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Sarzedo','Prefeitura Municipal de Sarzedo','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NDDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(273,'NLDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Nova Lima','Prefeitura Municipal de Nova Lima','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NLDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(274,'NYDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Mantena','Prefeitura Municipal de Mantena','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NYDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(275,'PVDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Varginha','Prefeitura Municipal de Varginha','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','PVDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(276,'WJDM02A\r\n','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Nanuque','Prefeitura Municipal de Nanuque','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','WJDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(277,'YTDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Tiradentes','Prefeitura Municipal de Tiradentes','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','YTDM\r\n','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(278,'YWDM02A\r\n','Comunicado de Deferimento de Advertência\r\n','Prefeitura Municipal de Governador Valadares','Prefeitura Municipal de Governador Valadares','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','YTDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(279,'HODM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Araguari','Prefeitura Municipal de Araguari','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','HODM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(280,'TDDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Andradas','Prefeitura Municipal de Andradas','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','TDDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(281,'ENCADERNAÇÃO E IMPRESSÃO - FRENTE','Serviço Interno','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','Não','Papel A4 75g/m2 - Frente','Laser','Encadernação','Sem Envelopamento F','Sem separado','Solicitante','Sem codigo','Sem descrição',0.00,0,'Sim'),(282,'ENCADERNAÇÃO E IMPRESSÃO - FRENTE E VERSO','Serviço Interno','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','PRODEMGE - Companhia de Tecnologia da Informação do Estado de MG','Não','Papel A4 75g/m2 - Frente e Verso','Laser','Encadernação','Sem Envelopamento FV','Sem separado','Solicitante','Sem codigo','Sem descrição',0.00,0,'Sim'),(283,'THDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Matozinhos','Prefeitura Municipal de Matozinhos','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','THDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(284,'B1DM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Igarapé','Prefeitura Municipal de Igarapé','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','B1DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(285,'SKDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Mateus Leme','Prefeitura Municipal de Mateus Leme','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SKDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(286,'Q0DM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Pedro Leopoldo','Prefeitura Municipal de Pedro Leopoldo','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','Q0DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(288,'Z7DM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Frutal','Prefeitura Municipal de Frutal','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','Z7DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(289,'NUDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Ibirite','Prefeitura Municipal de Ibirite','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NUDM','SIDAM',0.98,2,'Sim'),(290,'PQDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Paraisópolis','Prefeitura Municipal de Paraisópolis','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','PQDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(291,'YSDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Manhuaçu','Prefeitura Municipal de Manhuaçu','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','YSDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(293,'SDAKE75','Relatórios','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Não','Papel A4 75g/m2 - Frente','Laser','Sem Preparo','Sem Envelopamento F','Sem separado','Cliente','SDAK','CADASTRO DE VEÍCULOS',0.19,2,'Sim'),(294,'FRDM02A     ','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Raposos','Prefeitura Municipal de Raposos','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','FRDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(295,'MGDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Três Corações','Prefeitura Municipal de Três Corações','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','MGDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(296,'SDSIDA01R','Notificação de Veículo Apreendido','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,2,'Sim'),(297,'SDSIDA02R','Notificação de Veículo Recuperado','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,2,'Sim'),(298,'SDSIDA03R','Notificação de Veículo Apreendido','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,2,'Sim'),(299,'CCVH01A','Comunicação de Acolhimento de Defesa','Prefeitura Municipal de Confins','Prefeitura Municipal de Confins','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','CCVH','CADASTRO DE VEÍCULOS',0.98,2,'Sim'),(300,'Q0DM01A','Comunicação de Acolhimento de Defesa','Prefeitura Municipal de Pedro Leopoldo','Prefeitura Municipal de Pedro Leopoldo','Sim','Papel A4 75g/m2','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','Q0DM','CADASTRO DE VEÍCULOS',0.98,2,'Sim'),(301,'HODM01A','Comunicação de Acolhimento de Defesa','Prefeitura Municipal de Araguari','Prefeitura Municipal de Araguari','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','HODM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(302,'WIDMD11R','Multas Diárias','Prefeitura Municipal de São José da Lapa','Prefeitura Municipal de São José da Lapa','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','WIDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(303,'AFDMD11','Multas Diárias','Prefeitura Municipal de Ouro Branco','Prefeitura Municipal de Ouro Branco','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','AFDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(304,'SS06S04','Aviso de CNH a vencer','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','SS06','SISTEMA DE HABILITAÇÃO',0.00,2,'Não'),(305,'MMDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Timóteo','Prefeitura Municipal de Timóteo','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','MMDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(306,'SDAK03A','Comunicação de Aplicação de Advertência','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Sem separado','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,2,'Não'),(307,'GIAED001','Notificação de Pensionista - Cancelamento','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A5','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(308,'SDAKX98J','2ª Via de CRLV','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente','Matri','Sem Preparo','Sem Envelopamento','Sem separado','Correios','SDAK','CADASTRO DE VEÍCULOS',0.00,0,'Não'),(309,'SDAKE93','Cartas de Débito','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','SDAK','CADASTRO DE VEÍCULOS',0.47,0,'Não'),(310,'AFDMD11R','Multas Diárias','Prefeitura Municipal de Ouro Branco','Prefeitura Municipal de Ouro Branco','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','AFDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(311,'GPIT','Cartas de Ofício','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GPIT','Sem descrição',0.47,0,'Não'),(312,'SDAKE98J','2ª Via de CRLV','Polícia Civil do Estado de MG','DETRAN - Departamento de Trânsito de MG','Sim','Frente','Matri','Sem Preparo','Sem Envelopamento','Sem separado','Correios','SDAK','CADASTRO DE VEÍCULOS',0.00,0,'Não'),(313,'NLDM01A','Comunicação de Acolhimento de Defesa','Prefeitura Municipal de Nova Lima','Prefeitura Municipal de Nova Lima','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NLDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(314,'NYDM01A','Comunicação de Acolhimento de Defesa','Prefeitura Municipal de Mantena','Prefeitura Municipal de Mantena','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NYDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(315,'NXDMD11','Multas Diárias','Prefeitura Municipal de Santa Rita do Sapucaí','Prefeitura Municipal de Santa Rita do Sapucaí','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NXDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(316,'NXDMD11R','Multas Diárias','Prefeitura Municipal de Santa Rita do Sapucaí','Prefeitura Municipal de Santa Rita do Sapucaí','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NXDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(317,'AFDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Ouro Branco','Prefeitura Municipal de Ouro Branco','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','AFDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(318,'B1DM01A','Comunicação de Acolhimento de Defesa','Prefeitura Municipal de Igarapé','Prefeitura Municipal de Igarapé','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','B1DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(319,'NDDM01A','Comunicação de Acolhimento de Defesa','Prefeitura Municipal de Sarzedo','Prefeitura Municipal de Sarzedo','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NDDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(320,'ISHCMCAR','Carta de Recadastramento de Aposentados','SEPLAG - Secretaria de Estado de Planejamento e Gestão','SEPLAG - Secretaria de Estado de Planejamento e Gestão','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','ISHC','ADMINISTRAÇÃO DE PESSOAL',0.00,0,'Não'),(321,'ISHCMCAP','Carta Servidores Lei 100/2007','SEPLAG - Secretaria de Estado de Planejamento e Gestão','SEPLAG - Secretaria de Estado de Planejamento e Gestão','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','ISHC','ADMINISTRAÇÃO DE PESSOAL',0.00,0,'Não'),(322,'GIAEE13','Comunicado Pensionistas IPSEMG','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','IPSEMG - Instituto Previd. Servidores do Estado de Minas Gerais','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','GIAE','BENEFICIOS-CONCESSÃO DE PENSÃO',0.00,0,'Não'),(323,'AHDMD11','Multas Diárias','Prefeitura Municipal de Viçosa','Prefeitura Municipal de Viçosa','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','AHDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(324,'AHDMD11R','Multas Diárias','Prefeitura Municipal de Viçosa','Prefeitura Municipal de Viçosa','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','AHDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(325,'AHDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Viçosa','Prefeitura Municipal de Viçosa','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','AHDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(326,'NXDM02A','Comunicado de Deferimento de Advertência','Prefeitura Municipal de Santa Rita do Sapucaí','Prefeitura Municipal de Santa Rita do Sapucaí','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','NXDM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim'),(332,'U0DMD11RR','Multas Diárias','Prefeitura     de Fulano     de Tal','Prefeitura de Fulano de Tal','Sim','Papel A4 75g/m2 - Frente e Verso','Laser','Envelopamento com serrilhadora','A4','Com Elástico','Correios','U0DM','SIDAM - DIGIT. E ADM. MULTAS',0.98,2,'Sim');
/*!40000 ALTER TABLE `servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicos_anulados`
--

DROP TABLE IF EXISTS `servicos_anulados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicos_anulados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_cadastro` date NOT NULL,
  `etapa` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacao` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `atividade_id` int NOT NULL,
  `status_atividade_id` int NOT NULL,
  `status_anterior` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_servicos_anulados_atividade1` (`atividade_id`) /*!80000 INVISIBLE */,
  KEY `fk_servicos_anulados_status_atividade1` (`status_atividade_id`),
  CONSTRAINT `fk_servicos_anulados_atividade1` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_servicos_anulados_status_atividade1` FOREIGN KEY (`status_atividade_id`) REFERENCES `status_atividade` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicos_anulados`
--

LOCK TABLES `servicos_anulados` WRITE;
/*!40000 ALTER TABLE `servicos_anulados` DISABLE KEYS */;
INSERT INTO `servicos_anulados` VALUES (4,'CristianErro','2023-08-29','Envelopamento','uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm uiuikjkjmnm',6,15,7),(5,'CristianErro','2023-09-29','Impressão','uiughgfhftrer',10,17,9),(6,'CristianErro','2023-08-30','Envelopamento','tytyrrterere',5,15,17),(7,'CristianErro','2023-08-30','Conferência','tytytytuiuiukjmnnnbbdgg',12,17,13),(8,'CristianErro','2023-09-20','Triagem','dfgdgffg',30,16,15);
/*!40000 ALTER TABLE `servicos_anulados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smafe008`
--

DROP TABLE IF EXISTS `smafe008`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `smafe008` (
  `id` int NOT NULL AUTO_INCREMENT,
  `copias` int DEFAULT NULL,
  `paginas` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `concurso` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referencia` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `funcionario` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copias1` int DEFAULT NULL,
  `paginas1` int DEFAULT NULL,
  `total1` int DEFAULT NULL,
  `totaltudo` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smafe008`
--

LOCK TABLES `smafe008` WRITE;
/*!40000 ALTER TABLE `smafe008` DISABLE KEYS */;
INSERT INTO `smafe008` VALUES (2,9,9,81,'1234','6666','2023-09','2023-09-13','Itallo',10,10,100,181),(5,2,2000,4000,'9999','9999','2023-01','2023-09-20','Itallo',3,3000,9000,13000),(6,11,111,1221,'1111','1111','2023-08','2023-09-20','Itallo',2,2222,4444,5665);
/*!40000 ALTER TABLE `smafe008` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smafe008b`
--

DROP TABLE IF EXISTS `smafe008b`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `smafe008b` (
  `id` int NOT NULL AUTO_INCREMENT,
  `copias` int DEFAULT NULL,
  `paginas` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `concurso` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referencia` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `funcionario` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smafe008b`
--

LOCK TABLES `smafe008b` WRITE;
/*!40000 ALTER TABLE `smafe008b` DISABLE KEYS */;
INSERT INTO `smafe008b` VALUES (15,6,2,12,'1223','1222','2023-05','2023-09-12','Itallo');
/*!40000 ALTER TABLE `smafe008b` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smafe009010`
--

DROP TABLE IF EXISTS `smafe009010`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `smafe009010` (
  `id` int NOT NULL AUTO_INCREMENT,
  `servico` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referencia` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `concurso` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantidade_etiquetas` int DEFAULT NULL,
  `job` int DEFAULT NULL,
  `funcionario` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smafe009010`
--

LOCK TABLES `smafe009010` WRITE;
/*!40000 ALTER TABLE `smafe009010` DISABLE KEYS */;
INSERT INTO `smafe009010` VALUES (16,'SMAFE010','2023-05','2023-07-01','8888',2000,1111,'Itallo','Etiquetas para Concursos'),(17,'SMAFE009','2023-06','2023-07-01','5555',1500,4444,'Itallo','Etiquetas para Envelope de Prova'),(18,'SMAFE009','2023-10','2023-08-30','1234',1230,2222,'Itallo','Etiquetas para Envelope de Prova'),(19,'SMAFE010','2023-01','2023-02-28','9999',999,9999,'Itallo','Etiquetas para Concursos');
/*!40000 ALTER TABLE `smafe009010` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smb3e316`
--

DROP TABLE IF EXISTS `smb3e316`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `smb3e316` (
  `id` int NOT NULL AUTO_INCREMENT,
  `copias` int DEFAULT NULL,
  `paginas` int NOT NULL,
  `job` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `capa` int DEFAULT NULL,
  `dataAtual` date NOT NULL,
  `funcionario` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int DEFAULT NULL,
  `unidade` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smb3e316`
--

LOCK TABLES `smb3e316` WRITE;
/*!40000 ALTER TABLE `smb3e316` DISABLE KEYS */;
INSERT INTO `smb3e316` VALUES (1,2,25,'2222',2,'2023-09-19','Itallo',50,'CTPM/DEEAS'),(2,3,45,'2222',3,'2023-09-19','Itallo',135,'CTPM Montes Claros/EM11RPM/11 RPM');
/*!40000 ALTER TABLE `smb3e316` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smb3e316_cidades`
--

DROP TABLE IF EXISTS `smb3e316_cidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `smb3e316_cidades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codig_cidade` int DEFAULT NULL,
  `nome_cidade` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smb3e316_cidades`
--

LOCK TABLES `smb3e316_cidades` WRITE;
/*!40000 ALTER TABLE `smb3e316_cidades` DISABLE KEYS */;
INSERT INTO `smb3e316_cidades` VALUES (1,2157,'CTPM/DEEAS'),(2,9964,'CTPM-Araguari/53 BPM/9 RPM'),(3,9854,'CTPM-Curvelo/EM14RPM/14 RPM'),(5,2191,'CTPM Avel Camargos-Contagem/CTPM/DEEAS'),(6,2181,'CTPM-Diamantina/14 RPM'),(7,9780,'CTPM-Divinópolis/EM7RPM/7 RPM'),(8,9991,'CTPM-Itabira/26 BPM/12 RPM'),(9,9833,'CTPM Avel Camargos-Contagem/CTPM/DEEAS'),(10,2191,'CTPM-Barbacena/EM13RPM/13 RPM'),(11,5486,'CTPM Betim/CTPM/DEEAS'),(12,2199,'CTPM-Ipatinga/EM12RPM/12 RPM'),(13,2185,'CTPM-Gov. Valadares/EM8RPM/8 RPM'),(14,9665,'Professores/CTPM-Uberlândia/EM9RPM/9 RPM'),(15,3561,'J M Vasconcelos-Contagem/CTPM/DEEAS'),(16,2187,'CTPM Bom Despacho/7 BPM/7 RPM'),(17,2193,'CTPM Montes Claros/EM11RPM/11 RPM'),(18,2174,'CTPM Gameleira-BH/CTPM/DEEAS'),(19,9990,'CTPM-Ubá/21 BPM/4 RPM'),(20,4243,'CTPM-Teófilo Otoni/EM15RPM/ 15 RPM'),(21,9855,'CTPM-São João Del Rei/38 BPM/ 13 RPM'),(22,9666,'CTPM-Pouso Alegre/EM17RPM/17 RPM'),(23,2179,'CTPM-Juiz de Fora/EM4RPM/4 RPM'),(24,2189,'CTPM-Lavras/EM6RPM/6 RPM'),(25,2195,'CTPM-Manhuaçu/11 BPM/12 RPM'),(26,2177,'CTPM Minas Caixa-BH'),(27,2183,'CTPM-Uberaba/EM5RPM/5 RPM'),(28,9856,'CTPM-Sete Lagoas/EM19RPM/ 19 RPM'),(29,2201,'CTPM-Patos de Minas/EM10RPM/ 10 RPM'),(30,6865,'CTPM-Vespasiano/CTPM Arg Madeira/DEEAS'),(31,2197,'CTPM-Passos/12 BPM/ 18 RPM'),(32,2175,'CTPM NS Vitórias-BH/CTPM/DEEAS');
/*!40000 ALTER TABLE `smb3e316_cidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss13a05`
--

DROP TABLE IF EXISTS `ss13a05`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ss13a05` (
  `id` int NOT NULL AUTO_INCREMENT,
  `copias` int DEFAULT NULL,
  `capas` int DEFAULT NULL,
  `paginas` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `job` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referencia` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `funcionario` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss13a05`
--

LOCK TABLES `ss13a05` WRITE;
/*!40000 ALTER TABLE `ss13a05` DISABLE KEYS */;
INSERT INTO `ss13a05` VALUES (1,3,3,100,300,'8888','2023-09','2023-09-30','Pagodeiro');
/*!40000 ALTER TABLE `ss13a05` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss13a15`
--

DROP TABLE IF EXISTS `ss13a15`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ss13a15` (
  `id` int NOT NULL AUTO_INCREMENT,
  `copias` int DEFAULT NULL,
  `capas` int DEFAULT NULL,
  `paginas` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `job` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referencia` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `funcionario` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss13a15`
--

LOCK TABLES `ss13a15` WRITE;
/*!40000 ALTER TABLE `ss13a15` DISABLE KEYS */;
INSERT INTO `ss13a15` VALUES (5,4,4,150,600,'7777','2023-06','2023-09-14','Itallo');
/*!40000 ALTER TABLE `ss13a15` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss13a20`
--

DROP TABLE IF EXISTS `ss13a20`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ss13a20` (
  `id` int NOT NULL AUTO_INCREMENT,
  `copias` int DEFAULT NULL,
  `capas` int DEFAULT NULL,
  `paginas` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `job` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referencia` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `funcionario` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss13a20`
--

LOCK TABLES `ss13a20` WRITE;
/*!40000 ALTER TABLE `ss13a20` DISABLE KEYS */;
INSERT INTO `ss13a20` VALUES (6,3,3,150,450,'3333','2023-06','2023-09-21','Itallo');
/*!40000 ALTER TABLE `ss13a20` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss13e015`
--

DROP TABLE IF EXISTS `ss13e015`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ss13e015` (
  `id` int NOT NULL AUTO_INCREMENT,
  `copias` int DEFAULT NULL,
  `paginas` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `job` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referencia` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `funcionario` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss13e015`
--

LOCK TABLES `ss13e015` WRITE;
/*!40000 ALTER TABLE `ss13e015` DISABLE KEYS */;
INSERT INTO `ss13e015` VALUES (9,12,12,144,'1111','2023-11','2023-09-11','Itallo'),(10,3,11,33,'1111','2023-09','2023-09-14','Itallo'),(11,2,200,400,'2222','2023-07','2023-09-21','Itallo');
/*!40000 ALTER TABLE `ss13e015` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss13e05`
--

DROP TABLE IF EXISTS `ss13e05`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ss13e05` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data_cadastro` date NOT NULL,
  `job` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `funcionario` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `copias` int DEFAULT NULL,
  `paginas` int NOT NULL,
  `capas` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `copias1` int DEFAULT NULL,
  `capas1` int DEFAULT NULL,
  `paginas1` int DEFAULT NULL,
  `total1` int DEFAULT NULL,
  `copias2` int DEFAULT NULL,
  `paginas2` int DEFAULT NULL,
  `capas2` int DEFAULT NULL,
  `total2` int DEFAULT NULL,
  `copias3` int DEFAULT NULL,
  `paginas3` int DEFAULT NULL,
  `capas3` int DEFAULT NULL,
  `total3` int DEFAULT NULL,
  `totalsoma` int DEFAULT NULL,
  `totalcapas` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss13e05`
--

LOCK TABLES `ss13e05` WRITE;
/*!40000 ALTER TABLE `ss13e05` DISABLE KEYS */;
INSERT INTO `ss13e05` VALUES (4,'2023-09-06','6666','Itallo',6,6,6,36,6,6,6,36,6,6,6,36,6,6,6,36,144,NULL);
/*!40000 ALTER TABLE `ss13e05` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_atividade`
--

DROP TABLE IF EXISTS `status_atividade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status_atividade` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status_atual` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_atividade`
--

LOCK TABLES `status_atividade` WRITE;
/*!40000 ALTER TABLE `status_atividade` DISABLE KEYS */;
INSERT INTO `status_atividade` VALUES (1,'Aguardando Confirmação'),(2,'Confirmado'),(3,'Aguardando Impressão'),(4,'Impresso'),(5,'Aguardando Envelopamento'),(6,'Envelopado'),(7,'Aguardando Triagem'),(8,'Triado'),(9,'Aguardando Expedição'),(10,'Expedido'),(11,'Aguardando Liberação'),(12,'Liberado'),(13,'Aguardando Conferência'),(14,'Conferido'),(15,'Serviço Abortado'),(16,'Serv. Devolvido Interno'),(17,'Serv. Devolvido Cliente');
/*!40000 ALTER TABLE `status_atividade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `triagem`
--

DROP TABLE IF EXISTS `triagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `triagem` (
  `id` int NOT NULL AUTO_INCREMENT,
  `funcionario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_triagem` datetime DEFAULT NULL,
  `data_cadastro` date NOT NULL,
  `atividade_id` int NOT NULL,
  `status_atividade_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_triagem_status_atividade` (`status_atividade_id`),
  KEY `fk_triagem_atividade1` (`atividade_id`),
  CONSTRAINT `fk_triagem_atividade1` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`),
  CONSTRAINT `fk_triagem_status_atividade` FOREIGN KEY (`status_atividade_id`) REFERENCES `status_atividade` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `triagem`
--

LOCK TABLES `triagem` WRITE;
/*!40000 ALTER TABLE `triagem` DISABLE KEYS */;
INSERT INTO `triagem` VALUES (1,'CristianTri','2023-08-31 13:48:50','2023-08-31',2,8),(2,'CristianTri','2023-08-31 13:48:51','2023-08-31',3,8),(3,'CristianTri','2023-08-31 13:48:51','2023-08-31',4,8),(4,'CristianTri','2023-08-31 13:48:51','2023-08-31',5,8),(5,'CristianTri','2023-08-31 13:48:51','2023-08-31',6,8),(6,'CristianTri','2023-09-04 11:36:18','2023-09-04',21,8),(7,'CristianTri','2023-10-04 11:36:18','2023-09-04',22,8),(8,'CristianTri','2023-10-04 11:36:18','2023-09-04',23,8),(9,'CristianTri','2023-10-04 11:36:18','2023-09-04',24,8),(10,'CristianTri','2023-09-04 11:36:18','2023-09-04',25,8),(12,'CristianTri','2023-09-04 11:36:18','2023-09-04',8,8),(13,'CristianTri','2023-09-04 11:36:18','2023-09-04',9,8),(14,'Cristian','2023-10-04 11:36:18','2023-09-04',10,8),(15,'Cristian','2023-10-04 11:36:18','2023-09-04',11,8),(16,'CristianTri','2023-09-04 11:36:18','2023-09-04',12,8),(17,'CristianTri','2023-09-04 11:36:18','2023-09-04',13,8),(18,'CristianTri','2023-09-04 11:36:18','2023-09-04',14,8),(19,'Func','2023-10-04 11:36:18','2023-09-04',15,8),(20,'Func','2023-10-04 11:36:18','2023-09-04',16,8),(21,'CristianTri','2023-09-04 11:36:18','2023-09-04',17,8),(22,'CristianTri','2023-09-04 11:36:18','2023-09-04',18,8),(23,'CristianTri','2023-09-04 11:36:18','2023-09-04',19,8),(24,'CristianTri','2023-09-20 13:04:23','2023-09-20',30,8);
/*!40000 ALTER TABLE `triagem` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-20 13:39:25
