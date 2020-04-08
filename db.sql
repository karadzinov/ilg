-- MySQL dump 10.13  Distrib 5.5.52, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: olimpik
-- ------------------------------------------------------
-- Server version	5.5.52-0+deb8u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_index` (`parent_id`),
  KEY `categories_lft_index` (`lft`),
  KEY `categories_rgt_index` (`rgt`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (39,'sistemi-za-suva-gradba','Системи за сува градба','<p>orem Ipsum не е случајно избран и сложен текст, спротивно од верувањата. Неговите корени потекнуваат во дела на класичната Латинска книжевност од 45-та година пред новата ера, што го прави стар преку 2000 години. Richard McClintock, професор по Латински на колеџот Hampden-Sydney во Вирџинија побарал дефиниција за малку чудните зборови \"consectetur\" од пасусите на Lorem Ipsum и додека ги анализирал деловите во класичната книжевност открил автентичен извор. Lorem Ipsum доаѓа од поглавијата 1.10.32 и 1.10.33 од книгата \"de Finibus Bonorum et Malorum\" (Крајностите на доброто и злото) кои ги напишал Cicerо во 45-та година пред новата ера. Книгата говори за теоријата на етиката, која била многу популарна во текот на ренесансата. Првата реченица на Lorem Ipsum моделот \"Lorem ipsum dolor sit amet..\", доаѓа од реченицата во поглавјето 1.10.32.</p>\r\n','sistemi-za-suva-gradba-1.jpg','prevzemi-ponuda5433.pdf','Превземи понуда',NULL,1,6,0,NULL,NULL),(40,'pregradni-idovi','Преградни ѕидови','','pregradni-idovi-1.jpg','tehnicki-karak9198.pdf','Tehnicki karak',39,2,3,1,NULL,NULL),(41,'pvts-vinilni-podni-oblogi','ПВЦ - Винилни подни облоги','','pvts-vinilni-podni-oblogi.jpg','','',NULL,7,156,0,NULL,NULL),(42,'khomogeni-vinilni-podni-oblogi','Хомогени винилни подни облоги','','khomogeni-vinilni-podni-oblogi-1.jpg','','',41,8,21,1,NULL,NULL),(51,'spushteni-plafoni','Спуштени плафони','','spushteni-plafoni-1.jpg','','',39,4,5,1,NULL,NULL),(52,'kolektsija-pearlazzo-pur','Колекција Pearlazzo PUR','','kolektsija-pearlazzo-pur-1.jpg','2887.pdf','',42,9,10,2,NULL,NULL),(53,'kolektsija-prestige-pur-0','Колекција Prestige PUR','','','','',42,11,12,2,NULL,NULL),(54,'kolektsija-classic-mystique-pur-0','Колекција Classic Mystique PUR','','','','',42,13,14,2,NULL,NULL),(55,'enterierni-vrati','Ентериерни врати','','enterierni-vrati-1.jpg','imeto-na-fajlot.txt','Името на фајлот',NULL,157,162,0,NULL,NULL),(56,'trisloen-parket-0','Трислоен паркет','','','','',NULL,163,174,0,NULL,NULL),(57,'kheterogeni-vinilni-podni-oblogi','Хетерогени винилни подни облоги','','kheterogeni-vinilni-podni-oblogi-1.jpg','','',41,22,37,1,NULL,NULL),(58,'optegnati-plafoni','Оптегнати плафони','','','','',NULL,175,180,0,NULL,NULL),(59,'kolektsija-moment-0','Колекција Moment','','','','',56,164,171,1,NULL,NULL),(61,'kolektsija-vision-0','Колекција Vision','','','','',56,172,173,1,NULL,NULL),(62,'kolektsija-mystique-pur-0','Колекција Mystique PUR','','','','',42,15,16,2,NULL,NULL),(63,'kolektsija-2000-pur-0','Колекција 2000 PUR','','','','',42,17,18,2,NULL,NULL),(64,'kolektsija-xl-pu-0','Колекција XL PU','','','','',42,19,20,2,NULL,NULL),(65,'kolektsija-expona-flow-pur-0','Колекција Expona Flow PUR','','','','',57,23,24,2,NULL,NULL),(66,'kolektsija-forest-fx-pur-0','Колекција Forest fx PUR','','','','',57,25,26,2,NULL,NULL),(67,'kolektsija-secura-pur-0','Колекција Secura PUR','','','','',57,27,28,2,NULL,NULL),(68,'kolektsija-designatex-pur-0','Колекција Designatex PUR','','','','',57,29,30,2,NULL,NULL),(69,'kolektsija-acoustix-forest-fx-pur-0','Колекција Acoustix Forest fx PUR','','','','',57,31,32,2,NULL,NULL),(70,'kolektsija-acoustix-gallery-fx-pur-0','Колекција Acoustix Gallery fx PUR','','','','',57,33,34,2,NULL,NULL),(71,'kolektsija-harmony-fx-0','Колекција Harmony fx','','','','',57,35,36,2,NULL,NULL),(72,'luxury-vinyl-tiles-lvt-luksuzni-vinilni-plochi','Luxury Vinyl Tiles - LVT - Луксузни винилни плочи','','luxury-vinyl-tiles-lvt-luksuzni-vinilni-plochi-1.jpg','nekoj-fajl.txt','',41,38,69,1,NULL,NULL),(73,'kolektsija-affinity255-pur-0','Колекција Affinity255 PUR','','','','',72,39,40,2,NULL,NULL),(74,'kolektsija-expona-commercial-wood-pur-0','Колекција Expona Commercial Wood PUR','','','','',72,41,42,2,NULL,NULL),(75,'kolektsija-expona-commercial-stone-and-effect-pur-0','Колекција Expona Commercial Stone and Effect PUR','','','','',72,43,44,2,NULL,NULL),(76,'kolektsija-camaro-loc-pu-0','Колекција Camaro Loc PU','','','','',72,45,46,2,NULL,NULL),(77,'kolektsija-expona-design-wood-pur-0','Колекција Expona Design Wood PUR','','','','',72,47,48,2,NULL,NULL),(78,'kolektsija-expona-design-stone-and-effect-pur-0','Колекција Expona Design Stone and Effect PUR','','','','',72,49,50,2,NULL,NULL),(79,'kolektsija-expona-control-wood-pur-0','Колекција Expona Control Wood PUR','','','','',72,51,52,2,NULL,NULL),(80,'kolektsija-expona-control-stone-pur-0','Колекција Expona Control Stone PUR','','','','',72,53,54,2,NULL,NULL),(81,'kolektsija-colonia-wood-pur-0','Колекција Colonia Wood PUR','','','','',72,55,56,2,NULL,NULL),(82,'kolektsija-colonia-stone-pur-0','Колекција Colonia Stone PUR','','','','',72,57,58,2,NULL,NULL),(83,'kolektsija-camaro-wood-pur-0','Колекција Camaro Wood PUR','','','','',72,59,60,2,NULL,NULL),(84,'kolektsija-camaro-stone-and-design-pur-0','Колекција Camaro Stone and Design PUR','','','','',72,61,62,2,NULL,NULL),(85,'kolektsija-bevel-line-wood-pur-0','Колекција Bevel Line Wood PUR','','','','',72,63,64,2,NULL,NULL),(86,'kolektsija-bevel-line-stone-pur-0','Колекција Bevel Line Stone PUR','','','','',72,65,66,2,NULL,NULL),(87,'vinyl-loc-underlay-0','Vinyl LOC Underlay','','','','',72,67,68,2,NULL,NULL),(88,'sigurnosni-vinilni-podni-oblogi-safety-vinyl-flooring','Сигурносни винилни подни облоги - Safety vinyl flooring','','sigurnosni-vinilni-podni-oblogi-safety-vinyl-flooring-1.jpg','','',41,70,105,1,NULL,NULL),(89,'kolektsija-polysafe-verona-pur-0','Колекција Polysafe Verona PUR','','','','',88,71,72,2,NULL,NULL),(90,'kolektsija-polysafe-arena-pur-0','Колекција Polysafe Arena PUR','','','','',88,73,74,2,NULL,NULL),(91,'kolektsija-polysafe-modena-pur-0','Колекција Polysafe Modena PUR','','','','',88,75,76,2,NULL,NULL),(92,'kolektsija-polysafe-wood-fx-pur-0','Колекција Polysafe Wood FX PUR','','','','',88,77,78,2,NULL,NULL),(93,'kolektsija-polysafe-mosaic-pur-0','Колекција Polysafe Mosaic PUR','','','','',88,79,80,2,NULL,NULL),(94,'kolektsija-polysafe-corona-pur-0','Колекција Polysafe Corona PUR','','','','',88,81,82,2,NULL,NULL),(95,'interior-doors-inter-amber-0','INTERIOR DOORS INTER-AMBER','','','','',55,158,159,1,NULL,NULL),(96,'interior-doors-arco-0','INTERIOR DOORS ARCO','','','','',55,160,161,1,NULL,NULL),(97,'standard-stretched-ceilings-0','Standard stretched ceilings  ','','','','',58,176,177,1,NULL,NULL),(98,'wall2wall','Wall2Wall ','','','','',58,178,179,1,NULL,NULL),(99,'kolektsija-expona-control-wood-pur-1','Колекција Expona Control Wood PUR','','','','',88,83,84,2,NULL,NULL),(100,'kolektsija-expona-control-stone-pur-1','Колекција Expona Control Stone PUR','','','','',88,85,86,2,NULL,NULL),(101,'kolektsija-polysafe-astral-pur-0','Колекција Polysafe Astral PUR','','','','',88,87,88,2,NULL,NULL),(102,'kolektsija-polysafe-vogue-ultra-pur-0','Колекција Polysafe Vogue Ultra PUR','','','','',88,89,90,2,NULL,NULL),(103,'kolektsija-polysafe-standard-pur-0','Колекција Polysafe Standard PUR','','','','',88,91,92,2,NULL,NULL),(104,'kolektsija-polysafe-hydro-0','Колекција Polysafe Hydro','','','','',88,93,94,2,NULL,NULL),(105,'kolektsija-polysafe-hydro-evolve-0','Колекција Polysafe Hydro Evolve','','','','',88,95,96,2,NULL,NULL),(106,'kolektsija-polysafe-wood-fx-acoustix-pur-0','Колекција Polysafe Wood FX Acoustix PUR','','','','',88,97,98,2,NULL,NULL),(107,'kolektsija-polysafe-ecomax-0','Колекција Polysafe Ecomax','','','','',88,99,100,2,NULL,NULL),(108,'kolektsija-polysafe-apex-0','Колекција Polysafe Apex','','','','',88,101,102,2,NULL,NULL),(109,'kolektsija-polysafe-ultima-0','Колекција Polysafe Ultima','','','','',88,103,104,2,NULL,NULL),(110,'akustichni-vinilni-podni-oblogi-1','Акустични винилни подни облоги','<p>Нешто</p>\r\n','IMG_6539.JPG','','',41,106,119,1,NULL,NULL),(111,'kolektsija-secura-pur-1','Колекција Secura PUR','','','','',110,107,108,2,NULL,NULL),(112,'kolektsija-designatex-pur-1','Колекција Designatex PUR','','','','',110,109,110,2,NULL,NULL),(113,'kolektsija-acoustifoam-0','Колекција Acoustifoam','','','','',110,111,112,2,NULL,NULL),(114,'kolektsija-acoustix-forest-fx-pur-1','Колекција Acoustix Forest fx PUR','','','','',110,113,114,2,NULL,NULL),(115,'kolektsija-acoustix-gallery-fx-pur-1','Колекција Acoustix Gallery fx PUR','','','','',110,115,116,2,NULL,NULL),(116,'kolektsija-harmony-fx-1','Колекција Harmony fx','','','','',110,117,118,2,NULL,NULL),(117,'loose-lay-samolezhechki-vinilni-plochi-0','Loose Lay - Самолежечки винилни плочи','','','','',41,120,131,1,NULL,NULL),(118,'kolektsija-expona-simplay-wood-pur-0','Колекција Expona SimpLay Wood PUR','','','','',117,121,122,2,NULL,NULL),(119,'kolektsija-expona-simplay-stone-effect-pur-0','Колекција Expona SimpLay Stone Effect PUR','','','','',117,123,124,2,NULL,NULL),(120,'kolektsija-camaro-loc-pu-1','Колекција Camaro Loc PU','','','','',117,125,126,2,NULL,NULL),(121,'kolektsija-secura-pur-2','Колекција Secura PUR','','','','',117,127,128,2,NULL,NULL),(122,'kolektsija-designatex-pur-2','Колекција Designatex PUR','','','','',117,129,130,2,NULL,NULL),(123,'esd-vinilni-podni-oblogi-za-elektrostatichka-kontrola-0','ESD - Винилни подни облоги за електростатичка контрола','','','','',41,132,141,1,NULL,NULL),(124,'sd-0','SD','','','','',123,133,134,2,NULL,NULL),(125,'finesse-sd-0','Finesse SD','','','','',123,135,136,2,NULL,NULL),(126,'ohmega-ec-0','OHMega EC','','','','',123,137,138,2,NULL,NULL),(127,'ec-0','EC','','','','',123,139,140,2,NULL,NULL),(128,'sport-67-sportski-podni-oblogi-0','Sport 67 - Спортски подни облоги','','','','',41,142,143,1,NULL,NULL),(129,'wall-cladding-vinilni-oblogi-za-idovi-0','Wall Cladding - Винилни облоги за ѕидови','','','','',41,144,149,1,NULL,NULL),(130,'kolektsija-polyclad-pro-pu-0','Колекција Polyclad Pro PU','','','','',129,145,146,2,NULL,NULL),(131,'kolektsija-polyclad-plus-pu-0','Колекција Polyclad Plus PU','','','','',129,147,148,2,NULL,NULL),(132,'synthetic-rubber-veshtachka-guma-0','Synthetic rubber - Вештачка гума ','','','','',41,150,155,1,NULL,NULL),(133,'kolektsija-saarfloor-diamant-0','Колекција SaarFloor Diamant','','','','',132,151,152,2,NULL,NULL),(134,'kolektsija-saarfloor-noppe-stud-tile-0','Колекција SaarFloor Noppe Stud Tile','','','','',132,153,154,2,NULL,NULL),(135,'plivachki-tsementni-koshulitsi','Пливачки цементни кошулици','','','','',NULL,181,182,0,NULL,NULL),(137,'svrzani-brzosushechki-tsementni-koshulitsi','Сврзани брзосушечки цементни кошулици','','','','',NULL,183,184,0,NULL,NULL),(139,'1-strip-0','1 Strip','','','','',59,165,166,2,NULL,NULL),(140,'2-strips-0','2 Strips','','','','',59,167,168,2,NULL,NULL),(141,'3-strips-0','3 Strips','','','','',59,169,170,2,NULL,NULL),(142,'fiberglass-tapeti-0','Fiberglass тапети','','','','',NULL,185,186,0,NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL,
  `capital` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `citizenship` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_code` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `currency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency_sub_unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `iso_3166_2` char(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `iso_3166_3` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `region_code` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sub_region_code` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `eea` tinyint(1) NOT NULL DEFAULT '0',
  `calling_code` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flag` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `countries_id_index` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (4,'Kabul','Afghan','004','afghani','AFN','pul','؋','Islamic Republic of Afghanistan','AF','AFG','Afghanistan','142','034',0,'93','AF.png'),(8,'Tirana','Albanian','008','lek','ALL','(qindar (pl. qindarka))','Lek','Republic of Albania','AL','ALB','Albania','150','039',0,'355','AL.png'),(10,'Antartica','of Antartica','010','','','','','Antarctica','AQ','ATA','Antarctica','','',0,'672','AQ.png'),(12,'Algiers','Algerian','012','Algerian dinar','DZD','centime','DZD','People’s Democratic Republic of Algeria','DZ','DZA','Algeria','002','015',0,'213','DZ.png'),(16,'Pago Pago','American Samoan','016','US dollar','USD','cent','$','Territory of American','AS','ASM','American Samoa','009','061',0,'1','AS.png'),(20,'Andorra la Vella','Andorran','020','euro','EUR','cent','€','Principality of Andorra','AD','AND','Andorra','150','039',0,'376','AD.png'),(24,'Luanda','Angolan','024','kwanza','AOA','cêntimo','Kz','Republic of Angola','AO','AGO','Angola','002','017',0,'244','AO.png'),(28,'St John’s','of Antigua and Barbuda','028','East Caribbean dollar','XCD','cent','$','Antigua and Barbuda','AG','ATG','Antigua and Barbuda','019','029',0,'1','AG.png'),(31,'Baku','Azerbaijani','031','Azerbaijani manat','AZN','kepik (inv.)','ман','Republic of Azerbaijan','AZ','AZE','Azerbaijan','142','145',0,'994','AZ.png'),(32,'Buenos Aires','Argentinian','032','Argentine peso','ARS','centavo','$','Argentine Republic','AR','ARG','Argentina','019','005',0,'54','AR.png'),(36,'Canberra','Australian','036','Australian dollar','AUD','cent','$','Commonwealth of Australia','AU','AUS','Australia','009','053',0,'61','AU.png'),(40,'Vienna','Austrian','040','euro','EUR','cent','€','Republic of Austria','AT','AUT','Austria','150','155',1,'43','AT.png'),(44,'Nassau','Bahamian','044','Bahamian dollar','BSD','cent','$','Commonwealth of the Bahamas','BS','BHS','Bahamas','019','029',0,'1','BS.png'),(48,'Manama','Bahraini','048','Bahraini dinar','BHD','fils (inv.)','BHD','Kingdom of Bahrain','BH','BHR','Bahrain','142','145',0,'973','BH.png'),(50,'Dhaka','Bangladeshi','050','taka (inv.)','BDT','poisha (inv.)','BDT','People’s Republic of Bangladesh','BD','BGD','Bangladesh','142','034',0,'880','BD.png'),(51,'Yerevan','Armenian','051','dram (inv.)','AMD','luma','AMD','Republic of Armenia','AM','ARM','Armenia','142','145',0,'374','AM.png'),(52,'Bridgetown','Barbadian','052','Barbados dollar','BBD','cent','$','Barbados','BB','BRB','Barbados','019','029',0,'1','BB.png'),(56,'Brussels','Belgian','056','euro','EUR','cent','€','Kingdom of Belgium','BE','BEL','Belgium','150','155',1,'32','BE.png'),(60,'Hamilton','Bermudian','060','Bermuda dollar','BMD','cent','$','Bermuda','BM','BMU','Bermuda','019','021',0,'1','BM.png'),(64,'Thimphu','Bhutanese','064','ngultrum (inv.)','BTN','chhetrum (inv.)','BTN','Kingdom of Bhutan','BT','BTN','Bhutan','142','034',0,'975','BT.png'),(68,'Sucre (BO1)','Bolivian','068','boliviano','BOB','centavo','$b','Plurinational State of Bolivia','BO','BOL','Bolivia, Plurinational State of','019','005',0,'591','BO.png'),(70,'Sarajevo','of Bosnia and Herzegovina','070','convertible mark','BAM','fening','KM','Bosnia and Herzegovina','BA','BIH','Bosnia and Herzegovina','150','039',0,'387','BA.png'),(72,'Gaborone','Botswanan','072','pula (inv.)','BWP','thebe (inv.)','P','Republic of Botswana','BW','BWA','Botswana','002','018',0,'267','BW.png'),(74,'Bouvet island','of Bouvet island','074','','','','kr','Bouvet Island','BV','BVT','Bouvet Island','','',0,'47','BV.png'),(76,'Brasilia','Brazilian','076','real (pl. reais)','BRL','centavo','R$','Federative Republic of Brazil','BR','BRA','Brazil','019','005',0,'55','BR.png'),(84,'Belmopan','Belizean','084','Belize dollar','BZD','cent','BZ$','Belize','BZ','BLZ','Belize','019','013',0,'501','BZ.png'),(86,'Diego Garcia','Changosian','086','US dollar','USD','cent','$','British Indian Ocean Territory','IO','IOT','British Indian Ocean Territory','','',0,'246','IO.png'),(90,'Honiara','Solomon Islander','090','Solomon Islands dollar','SBD','cent','$','Solomon Islands','SB','SLB','Solomon Islands','009','054',0,'677','SB.png'),(92,'Road Town','British Virgin Islander;','092','US dollar','USD','cent','$','British Virgin Islands','VG','VGB','Virgin Islands, British','019','029',0,'1','VG.png'),(96,'Bandar Seri Begawan','Bruneian','096','Brunei dollar','BND','sen (inv.)','$','Brunei Darussalam','BN','BRN','Brunei Darussalam','142','035',0,'673','BN.png'),(100,'Sofia','Bulgarian','100','lev (pl. leva)','BGN','stotinka','лв','Republic of Bulgaria','BG','BGR','Bulgaria','150','151',1,'359','BG.png'),(104,'Yangon','Burmese','104','kyat','MMK','pya','K','Union of Myanmar/','MM','MMR','Myanmar','142','035',0,'95','MM.png'),(108,'Bujumbura','Burundian','108','Burundi franc','BIF','centime','BIF','Republic of Burundi','BI','BDI','Burundi','002','014',0,'257','BI.png'),(112,'Minsk','Belarusian','112','Belarusian rouble','BYR','kopek','p.','Republic of Belarus','BY','BLR','Belarus','150','151',0,'375','BY.png'),(116,'Phnom Penh','Cambodian','116','riel','KHR','sen (inv.)','៛','Kingdom of Cambodia','KH','KHM','Cambodia','142','035',0,'855','KH.png'),(120,'Yaoundé','Cameroonian','120','CFA franc (BEAC)','XAF','centime','FCF','Republic of Cameroon','CM','CMR','Cameroon','002','017',0,'237','CM.png'),(124,'Ottawa','Canadian','124','Canadian dollar','CAD','cent','$','Canada','CA','CAN','Canada','019','021',0,'1','CA.png'),(132,'Praia','Cape Verdean','132','Cape Verde escudo','CVE','centavo','CVE','Republic of Cape Verde','CV','CPV','Cape Verde','002','011',0,'238','CV.png'),(136,'George Town','Caymanian','136','Cayman Islands dollar','KYD','cent','$','Cayman Islands','KY','CYM','Cayman Islands','019','029',0,'1','KY.png'),(140,'Bangui','Central African','140','CFA franc (BEAC)','XAF','centime','FCF','Central African Republic','CF','CAF','Central African Republic','002','017',0,'236','CF.png'),(144,'Colombo','Sri Lankan','144','Sri Lankan rupee','LKR','cent','₨','Democratic Socialist Republic of Sri Lanka','LK','LKA','Sri Lanka','142','034',0,'94','LK.png'),(148,'N’Djamena','Chadian','148','CFA franc (BEAC)','XAF','centime','XAF','Republic of Chad','TD','TCD','Chad','002','017',0,'235','TD.png'),(152,'Santiago','Chilean','152','Chilean peso','CLP','centavo','CLP','Republic of Chile','CL','CHL','Chile','019','005',0,'56','CL.png'),(156,'Beijing','Chinese','156','renminbi-yuan (inv.)','CNY','jiao (10)','¥','People’s Republic of China','CN','CHN','China','142','030',0,'86','CN.png'),(158,'Taipei','Taiwanese','158','new Taiwan dollar','TWD','fen (inv.)','NT$','Republic of China, Taiwan (TW1)','TW','TWN','Taiwan, Province of China','142','030',0,'886','TW.png'),(162,'Flying Fish Cove','Christmas Islander','162','Australian dollar','AUD','cent','$','Christmas Island Territory','CX','CXR','Christmas Island','','',0,'61','CX.png'),(166,'Bantam','Cocos Islander','166','Australian dollar','AUD','cent','$','Territory of Cocos (Keeling) Islands','CC','CCK','Cocos (Keeling) Islands','','',0,'61','CC.png'),(170,'Santa Fe de Bogotá','Colombian','170','Colombian peso','COP','centavo','$','Republic of Colombia','CO','COL','Colombia','019','005',0,'57','CO.png'),(174,'Moroni','Comorian','174','Comorian franc','KMF','','KMF','Union of the Comoros','KM','COM','Comoros','002','014',0,'269','KM.png'),(175,'Mamoudzou','Mahorais','175','euro','EUR','cent','€','Departmental Collectivity of Mayotte','YT','MYT','Mayotte','002','014',0,'262','YT.png'),(178,'Brazzaville','Congolese','178','CFA franc (BEAC)','XAF','centime','FCF','Republic of the Congo','CG','COG','Congo','002','017',0,'242','CG.png'),(180,'Kinshasa','Congolese','180','Congolese franc','CDF','centime','CDF','Democratic Republic of the Congo','CD','COD','Congo, the Democratic Republic of the','002','017',0,'243','CD.png'),(184,'Avarua','Cook Islander','184','New Zealand dollar','NZD','cent','$','Cook Islands','CK','COK','Cook Islands','009','061',0,'682','CK.png'),(188,'San José','Costa Rican','188','Costa Rican colón (pl. colones)','CRC','céntimo','₡','Republic of Costa Rica','CR','CRI','Costa Rica','019','013',0,'506','CR.png'),(191,'Zagreb','Croatian','191','kuna (inv.)','HRK','lipa (inv.)','kn','Republic of Croatia','HR','HRV','Croatia','150','039',1,'385','HR.png'),(192,'Havana','Cuban','192','Cuban peso','CUP','centavo','₱','Republic of Cuba','CU','CUB','Cuba','019','029',0,'53','CU.png'),(196,'Nicosia','Cypriot','196','euro','EUR','cent','CYP','Republic of Cyprus','CY','CYP','Cyprus','142','145',1,'357','CY.png'),(203,'Prague','Czech','203','Czech koruna (pl. koruny)','CZK','halér','Kč','Czech Republic','CZ','CZE','Czech Republic','150','151',1,'420','CZ.png'),(204,'Porto Novo (BJ1)','Beninese','204','CFA franc (BCEAO)','XOF','centime','XOF','Republic of Benin','BJ','BEN','Benin','002','011',0,'229','BJ.png'),(208,'Copenhagen','Danish','208','Danish krone','DKK','øre (inv.)','kr','Kingdom of Denmark','DK','DNK','Denmark','150','154',1,'45','DK.png'),(212,'Roseau','Dominican','212','East Caribbean dollar','XCD','cent','$','Commonwealth of Dominica','DM','DMA','Dominica','019','029',0,'1','DM.png'),(214,'Santo Domingo','Dominican','214','Dominican peso','DOP','centavo','RD$','Dominican Republic','DO','DOM','Dominican Republic','019','029',0,'1','DO.png'),(218,'Quito','Ecuadorian','218','US dollar','USD','cent','$','Republic of Ecuador','EC','ECU','Ecuador','019','005',0,'593','EC.png'),(222,'San Salvador','Salvadoran','222','Salvadorian colón (pl. colones)','SVC','centavo','$','Republic of El Salvador','SV','SLV','El Salvador','019','013',0,'503','SV.png'),(226,'Malabo','Equatorial Guinean','226','CFA franc (BEAC)','XAF','centime','FCF','Republic of Equatorial Guinea','GQ','GNQ','Equatorial Guinea','002','017',0,'240','GQ.png'),(231,'Addis Ababa','Ethiopian','231','birr (inv.)','ETB','cent','ETB','Federal Democratic Republic of Ethiopia','ET','ETH','Ethiopia','002','014',0,'251','ET.png'),(232,'Asmara','Eritrean','232','nakfa','ERN','cent','Nfk','State of Eritrea','ER','ERI','Eritrea','002','014',0,'291','ER.png'),(233,'Tallinn','Estonian','233','euro','EUR','cent','kr','Republic of Estonia','EE','EST','Estonia','150','154',1,'372','EE.png'),(234,'Tórshavn','Faeroese','234','Danish krone','DKK','øre (inv.)','kr','Faeroe Islands','FO','FRO','Faroe Islands','150','154',0,'298','FO.png'),(238,'Stanley','Falkland Islander','238','Falkland Islands pound','FKP','new penny','£','Falkland Islands','FK','FLK','Falkland Islands (Malvinas)','019','005',0,'500','FK.png'),(239,'King Edward Point (Grytviken)','of South Georgia and the South Sandwich Islands','239','','','','£','South Georgia and the South Sandwich Islands','GS','SGS','South Georgia and the South Sandwich Islands','','',0,'44','GS.png'),(242,'Suva','Fijian','242','Fiji dollar','FJD','cent','$','Republic of Fiji','FJ','FJI','Fiji','009','054',0,'679','FJ.png'),(246,'Helsinki','Finnish','246','euro','EUR','cent','€','Republic of Finland','FI','FIN','Finland','150','154',1,'358','FI.png'),(248,'Mariehamn','Åland Islander','248','euro','EUR','cent',NULL,'Åland Islands','AX','ALA','Åland Islands','150','154',0,'358',NULL),(250,'Paris','French','250','euro','EUR','cent','€','French Republic','FR','FRA','France','150','155',1,'33','FR.png'),(254,'Cayenne','Guianese','254','euro','EUR','cent','€','French Guiana','GF','GUF','French Guiana','019','005',0,'594','GF.png'),(258,'Papeete','Polynesian','258','CFP franc','XPF','centime','XPF','French Polynesia','PF','PYF','French Polynesia','009','061',0,'689','PF.png'),(260,'Port-aux-Francais','of French Southern and Antarctic Lands','260','euro','EUR','cent','€','French Southern and Antarctic Lands','TF','ATF','French Southern Territories','','',0,'33','TF.png'),(262,'Djibouti','Djiboutian','262','Djibouti franc','DJF','','DJF','Republic of Djibouti','DJ','DJI','Djibouti','002','014',0,'253','DJ.png'),(266,'Libreville','Gabonese','266','CFA franc (BEAC)','XAF','centime','FCF','Gabonese Republic','GA','GAB','Gabon','002','017',0,'241','GA.png'),(268,'Tbilisi','Georgian','268','lari','GEL','tetri (inv.)','GEL','Georgia','GE','GEO','Georgia','142','145',0,'995','GE.png'),(270,'Banjul','Gambian','270','dalasi (inv.)','GMD','butut','D','Republic of the Gambia','GM','GMB','Gambia','002','011',0,'220','GM.png'),(275,NULL,'Palestinian','275',NULL,NULL,NULL,'₪',NULL,'PS','PSE','Palestinian Territory, Occupied','142','145',0,'970','PS.png'),(276,'Berlin','German','276','euro','EUR','cent','€','Federal Republic of Germany','DE','DEU','Germany','150','155',1,'49','DE.png'),(288,'Accra','Ghanaian','288','Ghana cedi','GHS','pesewa','¢','Republic of Ghana','GH','GHA','Ghana','002','011',0,'233','GH.png'),(292,'Gibraltar','Gibraltarian','292','Gibraltar pound','GIP','penny','£','Gibraltar','GI','GIB','Gibraltar','150','039',0,'350','GI.png'),(296,'Tarawa','Kiribatian','296','Australian dollar','AUD','cent','$','Republic of Kiribati','KI','KIR','Kiribati','009','057',0,'686','KI.png'),(300,'Athens','Greek','300','euro','EUR','cent','€','Hellenic Republic','GR','GRC','Greece','150','039',1,'30','GR.png'),(304,'Nuuk','Greenlander','304','Danish krone','DKK','øre (inv.)','kr','Greenland','GL','GRL','Greenland','019','021',0,'299','GL.png'),(308,'St George’s','Grenadian','308','East Caribbean dollar','XCD','cent','$','Grenada','GD','GRD','Grenada','019','029',0,'1','GD.png'),(312,'Basse Terre','Guadeloupean','312','euro','EUR ','cent','€','Guadeloupe','GP','GLP','Guadeloupe','019','029',0,'590','GP.png'),(316,'Agaña (Hagåtña)','Guamanian','316','US dollar','USD','cent','$','Territory of Guam','GU','GUM','Guam','009','057',0,'1','GU.png'),(320,'Guatemala City','Guatemalan','320','quetzal (pl. quetzales)','GTQ','centavo','Q','Republic of Guatemala','GT','GTM','Guatemala','019','013',0,'502','GT.png'),(324,'Conakry','Guinean','324','Guinean franc','GNF','','GNF','Republic of Guinea','GN','GIN','Guinea','002','011',0,'224','GN.png'),(328,'Georgetown','Guyanese','328','Guyana dollar','GYD','cent','$','Cooperative Republic of Guyana','GY','GUY','Guyana','019','005',0,'592','GY.png'),(332,'Port-au-Prince','Haitian','332','gourde','HTG','centime','G','Republic of Haiti','HT','HTI','Haiti','019','029',0,'509','HT.png'),(334,'Territory of Heard Island and McDonald Islands','of Territory of Heard Island and McDonald Islands','334','','','','$','Territory of Heard Island and McDonald Islands','HM','HMD','Heard Island and McDonald Islands','','',0,'61','HM.png'),(336,'Vatican City','of the Holy See/of the Vatican','336','euro','EUR','cent','€','the Holy See/ Vatican City State','VA','VAT','Holy See (Vatican City State)','150','039',0,'39','VA.png'),(340,'Tegucigalpa','Honduran','340','lempira','HNL','centavo','L','Republic of Honduras','HN','HND','Honduras','019','013',0,'504','HN.png'),(344,'(HK3)','Hong Kong Chinese','344','Hong Kong dollar','HKD','cent','$','Hong Kong Special Administrative Region of the People’s Republic of China (HK2)','HK','HKG','Hong Kong','142','030',0,'852','HK.png'),(348,'Budapest','Hungarian','348','forint (inv.)','HUF','(fillér (inv.))','Ft','Republic of Hungary','HU','HUN','Hungary','150','151',1,'36','HU.png'),(352,'Reykjavik','Icelander','352','króna (pl. krónur)','ISK','','kr','Republic of Iceland','IS','ISL','Iceland','150','154',1,'354','IS.png'),(356,'New Delhi','Indian','356','Indian rupee','INR','paisa','₹','Republic of India','IN','IND','India','142','034',0,'91','IN.png'),(360,'Jakarta','Indonesian','360','Indonesian rupiah (inv.)','IDR','sen (inv.)','Rp','Republic of Indonesia','ID','IDN','Indonesia','142','035',0,'62','ID.png'),(364,'Tehran','Iranian','364','Iranian rial','IRR','(dinar) (IR1)','﷼','Islamic Republic of Iran','IR','IRN','Iran, Islamic Republic of','142','034',0,'98','IR.png'),(368,'Baghdad','Iraqi','368','Iraqi dinar','IQD','fils (inv.)','IQD','Republic of Iraq','IQ','IRQ','Iraq','142','145',0,'964','IQ.png'),(372,'Dublin','Irish','372','euro','EUR','cent','€','Ireland (IE1)','IE','IRL','Ireland','150','154',1,'353','IE.png'),(376,'(IL1)','Israeli','376','shekel','ILS','agora','₪','State of Israel','IL','ISR','Israel','142','145',0,'972','IL.png'),(380,'Rome','Italian','380','euro','EUR','cent','€','Italian Republic','IT','ITA','Italy','150','039',1,'39','IT.png'),(384,'Yamoussoukro (CI1)','Ivorian','384','CFA franc (BCEAO)','XOF','centime','XOF','Republic of Côte d’Ivoire','CI','CIV','Côte d\'Ivoire','002','011',0,'225','CI.png'),(388,'Kingston','Jamaican','388','Jamaica dollar','JMD','cent','$','Jamaica','JM','JAM','Jamaica','019','029',0,'1','JM.png'),(392,'Tokyo','Japanese','392','yen (inv.)','JPY','(sen (inv.)) (JP1)','¥','Japan','JP','JPN','Japan','142','030',0,'81','JP.png'),(398,'Astana','Kazakh','398','tenge (inv.)','KZT','tiyn','лв','Republic of Kazakhstan','KZ','KAZ','Kazakhstan','142','143',0,'7','KZ.png'),(400,'Amman','Jordanian','400','Jordanian dinar','JOD','100 qirsh','JOD','Hashemite Kingdom of Jordan','JO','JOR','Jordan','142','145',0,'962','JO.png'),(404,'Nairobi','Kenyan','404','Kenyan shilling','KES','cent','KES','Republic of Kenya','KE','KEN','Kenya','002','014',0,'254','KE.png'),(408,'Pyongyang','North Korean','408','North Korean won (inv.)','KPW','chun (inv.)','₩','Democratic People’s Republic of Korea','KP','PRK','Korea, Democratic People\'s Republic of','142','030',0,'850','KP.png'),(410,'Seoul','South Korean','410','South Korean won (inv.)','KRW','(chun (inv.))','₩','Republic of Korea','KR','KOR','Korea, Republic of','142','030',0,'82','KR.png'),(414,'Kuwait City','Kuwaiti','414','Kuwaiti dinar','KWD','fils (inv.)','KWD','State of Kuwait','KW','KWT','Kuwait','142','145',0,'965','KW.png'),(417,'Bishkek','Kyrgyz','417','som','KGS','tyiyn','лв','Kyrgyz Republic','KG','KGZ','Kyrgyzstan','142','143',0,'996','KG.png'),(418,'Vientiane','Lao','418','kip (inv.)','LAK','(at (inv.))','₭','Lao People’s Democratic Republic','LA','LAO','Lao People\'s Democratic Republic','142','035',0,'856','LA.png'),(422,'Beirut','Lebanese','422','Lebanese pound','LBP','(piastre)','£','Lebanese Republic','LB','LBN','Lebanon','142','145',0,'961','LB.png'),(426,'Maseru','Basotho','426','loti (pl. maloti)','LSL','sente','L','Kingdom of Lesotho','LS','LSO','Lesotho','002','018',0,'266','LS.png'),(428,'Riga','Latvian','428','euro','EUR','cent','Ls','Republic of Latvia','LV','LVA','Latvia','150','154',1,'371','LV.png'),(430,'Monrovia','Liberian','430','Liberian dollar','LRD','cent','$','Republic of Liberia','LR','LBR','Liberia','002','011',0,'231','LR.png'),(434,'Tripoli','Libyan','434','Libyan dinar','LYD','dirham','LYD','Socialist People’s Libyan Arab Jamahiriya','LY','LBY','Libya','002','015',0,'218','LY.png'),(438,'Vaduz','Liechtensteiner','438','Swiss franc','CHF','centime','CHF','Principality of Liechtenstein','LI','LIE','Liechtenstein','150','155',1,'423','LI.png'),(440,'Vilnius','Lithuanian','440','euro','EUR','cent','Lt','Republic of Lithuania','LT','LTU','Lithuania','150','154',1,'370','LT.png'),(442,'Luxembourg','Luxembourger','442','euro','EUR','cent','€','Grand Duchy of Luxembourg','LU','LUX','Luxembourg','150','155',1,'352','LU.png'),(446,'Macao (MO3)','Macanese','446','pataca','MOP','avo','MOP','Macao Special Administrative Region of the People’s Republic of China (MO2)','MO','MAC','Macao','142','030',0,'853','MO.png'),(450,'Antananarivo','Malagasy','450','ariary','MGA','iraimbilanja (inv.)','MGA','Republic of Madagascar','MG','MDG','Madagascar','002','014',0,'261','MG.png'),(454,'Lilongwe','Malawian','454','Malawian kwacha (inv.)','MWK','tambala (inv.)','MK','Republic of Malawi','MW','MWI','Malawi','002','014',0,'265','MW.png'),(458,'Kuala Lumpur (MY1)','Malaysian','458','ringgit (inv.)','MYR','sen (inv.)','RM','Malaysia','MY','MYS','Malaysia','142','035',0,'60','MY.png'),(462,'Malé','Maldivian','462','rufiyaa','MVR','laari (inv.)','Rf','Republic of Maldives','MV','MDV','Maldives','142','034',0,'960','MV.png'),(466,'Bamako','Malian','466','CFA franc (BCEAO)','XOF','centime','XOF','Republic of Mali','ML','MLI','Mali','002','011',0,'223','ML.png'),(470,'Valletta','Maltese','470','euro','EUR','cent','MTL','Republic of Malta','MT','MLT','Malta','150','039',1,'356','MT.png'),(474,'Fort-de-France','Martinican','474','euro','EUR','cent','€','Martinique','MQ','MTQ','Martinique','019','029',0,'596','MQ.png'),(478,'Nouakchott','Mauritanian','478','ouguiya','MRO','khoum','UM','Islamic Republic of Mauritania','MR','MRT','Mauritania','002','011',0,'222','MR.png'),(480,'Port Louis','Mauritian','480','Mauritian rupee','MUR','cent','₨','Republic of Mauritius','MU','MUS','Mauritius','002','014',0,'230','MU.png'),(484,'Mexico City','Mexican','484','Mexican peso','MXN','centavo','$','United Mexican States','MX','MEX','Mexico','019','013',0,'52','MX.png'),(492,'Monaco','Monegasque','492','euro','EUR','cent','€','Principality of Monaco','MC','MCO','Monaco','150','155',0,'377','MC.png'),(496,'Ulan Bator','Mongolian','496','tugrik','MNT','möngö (inv.)','₮','Mongolia','MN','MNG','Mongolia','142','030',0,'976','MN.png'),(498,'Chisinau','Moldovan','498','Moldovan leu (pl. lei)','MDL','ban','MDL','Republic of Moldova','MD','MDA','Moldova, Republic of','150','151',0,'373','MD.png'),(499,'Podgorica','Montenegrin','499','euro','EUR','cent',NULL,'Montenegro','ME','MNE','Montenegro','150','039',0,'382',NULL),(500,'Plymouth (MS2)','Montserratian','500','East Caribbean dollar','XCD','cent','$','Montserrat','MS','MSR','Montserrat','019','029',0,'1','MS.png'),(504,'Rabat','Moroccan','504','Moroccan dirham','MAD','centime','MAD','Kingdom of Morocco','MA','MAR','Morocco','002','015',0,'212','MA.png'),(508,'Maputo','Mozambican','508','metical','MZN','centavo','MT','Republic of Mozambique','MZ','MOZ','Mozambique','002','014',0,'258','MZ.png'),(512,'Muscat','Omani','512','Omani rial','OMR','baiza','﷼','Sultanate of Oman','OM','OMN','Oman','142','145',0,'968','OM.png'),(516,'Windhoek','Namibian','516','Namibian dollar','NAD','cent','$','Republic of Namibia','NA','NAM','Namibia','002','018',0,'264','NA.png'),(520,'Yaren','Nauruan','520','Australian dollar','AUD','cent','$','Republic of Nauru','NR','NRU','Nauru','009','057',0,'674','NR.png'),(524,'Kathmandu','Nepalese','524','Nepalese rupee','NPR','paisa (inv.)','₨','Nepal','NP','NPL','Nepal','142','034',0,'977','NP.png'),(528,'Amsterdam (NL2)','Dutch','528','euro','EUR','cent','€','Kingdom of the Netherlands','NL','NLD','Netherlands','150','155',1,'31','NL.png'),(531,'Willemstad','Curaçaoan','531','Netherlands Antillean guilder (CW1)','ANG','cent',NULL,'Curaçao','CW','CUW','Curaçao','019','029',0,'599',NULL),(533,'Oranjestad','Aruban','533','Aruban guilder','AWG','cent','ƒ','Aruba','AW','ABW','Aruba','019','029',0,'297','AW.png'),(534,'Philipsburg','Sint Maartener','534','Netherlands Antillean guilder (SX1)','ANG','cent',NULL,'Sint Maarten','SX','SXM','Sint Maarten (Dutch part)','019','029',0,'721',NULL),(535,NULL,'of Bonaire, Sint Eustatius and Saba','535','US dollar','USD','cent',NULL,NULL,'BQ','BES','Bonaire, Sint Eustatius and Saba','019','029',0,'599',NULL),(540,'Nouméa','New Caledonian','540','CFP franc','XPF','centime','XPF','New Caledonia','NC','NCL','New Caledonia','009','054',0,'687','NC.png'),(548,'Port Vila','Vanuatuan','548','vatu (inv.)','VUV','','Vt','Republic of Vanuatu','VU','VUT','Vanuatu','009','054',0,'678','VU.png'),(554,'Wellington','New Zealander','554','New Zealand dollar','NZD','cent','$','New Zealand','NZ','NZL','New Zealand','009','053',0,'64','NZ.png'),(558,'Managua','Nicaraguan','558','córdoba oro','NIO','centavo','C$','Republic of Nicaragua','NI','NIC','Nicaragua','019','013',0,'505','NI.png'),(562,'Niamey','Nigerien','562','CFA franc (BCEAO)','XOF','centime','XOF','Republic of Niger','NE','NER','Niger','002','011',0,'227','NE.png'),(566,'Abuja','Nigerian','566','naira (inv.)','NGN','kobo (inv.)','₦','Federal Republic of Nigeria','NG','NGA','Nigeria','002','011',0,'234','NG.png'),(570,'Alofi','Niuean','570','New Zealand dollar','NZD','cent','$','Niue','NU','NIU','Niue','009','061',0,'683','NU.png'),(574,'Kingston','Norfolk Islander','574','Australian dollar','AUD','cent','$','Territory of Norfolk Island','NF','NFK','Norfolk Island','009','053',0,'672','NF.png'),(578,'Oslo','Norwegian','578','Norwegian krone (pl. kroner)','NOK','øre (inv.)','kr','Kingdom of Norway','NO','NOR','Norway','150','154',1,'47','NO.png'),(580,'Saipan','Northern Mariana Islander','580','US dollar','USD','cent','$','Commonwealth of the Northern Mariana Islands','MP','MNP','Northern Mariana Islands','009','057',0,'1','MP.png'),(581,'United States Minor Outlying Islands','of United States Minor Outlying Islands','581','US dollar','USD','cent','$','United States Minor Outlying Islands','UM','UMI','United States Minor Outlying Islands','','',0,'1','UM.png'),(583,'Palikir','Micronesian','583','US dollar','USD','cent','$','Federated States of Micronesia','FM','FSM','Micronesia, Federated States of','009','057',0,'691','FM.png'),(584,'Majuro','Marshallese','584','US dollar','USD','cent','$','Republic of the Marshall Islands','MH','MHL','Marshall Islands','009','057',0,'692','MH.png'),(585,'Melekeok','Palauan','585','US dollar','USD','cent','$','Republic of Palau','PW','PLW','Palau','009','057',0,'680','PW.png'),(586,'Islamabad','Pakistani','586','Pakistani rupee','PKR','paisa','₨','Islamic Republic of Pakistan','PK','PAK','Pakistan','142','034',0,'92','PK.png'),(591,'Panama City','Panamanian','591','balboa','PAB','centésimo','B/.','Republic of Panama','PA','PAN','Panama','019','013',0,'507','PA.png'),(598,'Port Moresby','Papua New Guinean','598','kina (inv.)','PGK','toea (inv.)','PGK','Independent State of Papua New Guinea','PG','PNG','Papua New Guinea','009','054',0,'675','PG.png'),(600,'Asunción','Paraguayan','600','guaraní','PYG','céntimo','Gs','Republic of Paraguay','PY','PRY','Paraguay','019','005',0,'595','PY.png'),(604,'Lima','Peruvian','604','new sol','PEN','céntimo','S/.','Republic of Peru','PE','PER','Peru','019','005',0,'51','PE.png'),(608,'Manila','Filipino','608','Philippine peso','PHP','centavo','Php','Republic of the Philippines','PH','PHL','Philippines','142','035',0,'63','PH.png'),(612,'Adamstown','Pitcairner','612','New Zealand dollar','NZD','cent','$','Pitcairn Islands','PN','PCN','Pitcairn','009','061',0,'649','PN.png'),(616,'Warsaw','Polish','616','zloty','PLN','grosz (pl. groszy)','zł','Republic of Poland','PL','POL','Poland','150','151',1,'48','PL.png'),(620,'Lisbon','Portuguese','620','euro','EUR','cent','€','Portuguese Republic','PT','PRT','Portugal','150','039',1,'351','PT.png'),(624,'Bissau','Guinea-Bissau national','624','CFA franc (BCEAO)','XOF','centime','XOF','Republic of Guinea-Bissau','GW','GNB','Guinea-Bissau','002','011',0,'245','GW.png'),(626,'Dili','East Timorese','626','US dollar','USD','cent','$','Democratic Republic of East Timor','TL','TLS','Timor-Leste','142','035',0,'670','TL.png'),(630,'San Juan','Puerto Rican','630','US dollar','USD','cent','$','Commonwealth of Puerto Rico','PR','PRI','Puerto Rico','019','029',0,'1','PR.png'),(634,'Doha','Qatari','634','Qatari riyal','QAR','dirham','﷼','State of Qatar','QA','QAT','Qatar','142','145',0,'974','QA.png'),(638,'Saint-Denis','Reunionese','638','euro','EUR','cent','€','Réunion','RE','REU','Réunion','002','014',0,'262','RE.png'),(642,'Bucharest','Romanian','642','Romanian leu (pl. lei)','RON','ban (pl. bani)','lei','Romania','RO','ROU','Romania','150','151',1,'40','RO.png'),(643,'Moscow','Russian','643','Russian rouble','RUB','kopek','руб','Russian Federation','RU','RUS','Russian Federation','150','151',0,'7','RU.png'),(646,'Kigali','Rwandan; Rwandese','646','Rwandese franc','RWF','centime','RWF','Republic of Rwanda','RW','RWA','Rwanda','002','014',0,'250','RW.png'),(652,'Gustavia','of Saint Barthélemy','652','euro','EUR','cent',NULL,'Collectivity of Saint Barthélemy','BL','BLM','Saint Barthélemy','019','029',0,'590',NULL),(654,'Jamestown','Saint Helenian','654','Saint Helena pound','SHP','penny','£','Saint Helena, Ascension and Tristan da Cunha','SH','SHN','Saint Helena, Ascension and Tristan da Cunha','002','011',0,'290','SH.png'),(659,'Basseterre','Kittsian; Nevisian','659','East Caribbean dollar','XCD','cent','$','Federation of Saint Kitts and Nevis','KN','KNA','Saint Kitts and Nevis','019','029',0,'1','KN.png'),(660,'The Valley','Anguillan','660','East Caribbean dollar','XCD','cent','$','Anguilla','AI','AIA','Anguilla','019','029',0,'1','AI.png'),(662,'Castries','Saint Lucian','662','East Caribbean dollar','XCD','cent','$','Saint Lucia','LC','LCA','Saint Lucia','019','029',0,'1','LC.png'),(663,'Marigot','of Saint Martin','663','euro','EUR','cent',NULL,'Collectivity of Saint Martin','MF','MAF','Saint Martin (French part)','019','029',0,'590',NULL),(666,'Saint-Pierre','St-Pierrais; Miquelonnais','666','euro','EUR','cent','€','Territorial Collectivity of Saint Pierre and Miquelon','PM','SPM','Saint Pierre and Miquelon','019','021',0,'508','PM.png'),(670,'Kingstown','Vincentian','670','East Caribbean dollar','XCD','cent','$','Saint Vincent and the Grenadines','VC','VCT','Saint Vincent and the Grenadines','019','029',0,'1','VC.png'),(674,'San Marino','San Marinese','674','euro','EUR ','cent','€','Republic of San Marino','SM','SMR','San Marino','150','039',0,'378','SM.png'),(678,'São Tomé','São Toméan','678','dobra','STD','centavo','Db','Democratic Republic of São Tomé and Príncipe','ST','STP','Sao Tome and Principe','002','017',0,'239','ST.png'),(682,'Riyadh','Saudi Arabian','682','riyal','SAR','halala','﷼','Kingdom of Saudi Arabia','SA','SAU','Saudi Arabia','142','145',0,'966','SA.png'),(686,'Dakar','Senegalese','686','CFA franc (BCEAO)','XOF','centime','XOF','Republic of Senegal','SN','SEN','Senegal','002','011',0,'221','SN.png'),(688,'Belgrade','Serb','688','Serbian dinar','RSD','para (inv.)',NULL,'Republic of Serbia','RS','SRB','Serbia','150','039',0,'381',NULL),(690,'Victoria','Seychellois','690','Seychelles rupee','SCR','cent','₨','Republic of Seychelles','SC','SYC','Seychelles','002','014',0,'248','SC.png'),(694,'Freetown','Sierra Leonean','694','leone','SLL','cent','Le','Republic of Sierra Leone','SL','SLE','Sierra Leone','002','011',0,'232','SL.png'),(702,'Singapore','Singaporean','702','Singapore dollar','SGD','cent','$','Republic of Singapore','SG','SGP','Singapore','142','035',0,'65','SG.png'),(703,'Bratislava','Slovak','703','euro','EUR','cent','Sk','Slovak Republic','SK','SVK','Slovakia','150','151',1,'421','SK.png'),(704,'Hanoi','Vietnamese','704','dong','VND','(10 hào','₫','Socialist Republic of Vietnam','VN','VNM','Viet Nam','142','035',0,'84','VN.png'),(705,'Ljubljana','Slovene','705','euro','EUR','cent','€','Republic of Slovenia','SI','SVN','Slovenia','150','039',1,'386','SI.png'),(706,'Mogadishu','Somali','706','Somali shilling','SOS','cent','S','Somali Republic','SO','SOM','Somalia','002','014',0,'252','SO.png'),(710,'Pretoria (ZA1)','South African','710','rand','ZAR','cent','R','Republic of South Africa','ZA','ZAF','South Africa','002','018',0,'27','ZA.png'),(716,'Harare','Zimbabwean','716','Zimbabwe dollar (ZW1)','ZWL','cent','Z$','Republic of Zimbabwe','ZW','ZWE','Zimbabwe','002','014',0,'263','ZW.png'),(724,'Madrid','Spaniard','724','euro','EUR','cent','€','Kingdom of Spain','ES','ESP','Spain','150','039',1,'34','ES.png'),(728,'Juba','South Sudanese','728','South Sudanese pound','SSP','piaster',NULL,'Republic of South Sudan','SS','SSD','South Sudan','002','015',0,'211',NULL),(729,'Khartoum','Sudanese','729','Sudanese pound','SDG','piastre',NULL,'Republic of the Sudan','SD','SDN','Sudan','002','015',0,'249',NULL),(732,'Al aaiun','Sahrawi','732','Moroccan dirham','MAD','centime','MAD','Western Sahara','EH','ESH','Western Sahara','002','015',0,'212','EH.png'),(740,'Paramaribo','Surinamese','740','Surinamese dollar','SRD','cent','$','Republic of Suriname','SR','SUR','Suriname','019','005',0,'597','SR.png'),(744,'Longyearbyen','of Svalbard','744','Norwegian krone (pl. kroner)','NOK','øre (inv.)','kr','Svalbard and Jan Mayen','SJ','SJM','Svalbard and Jan Mayen','150','154',0,'47','SJ.png'),(748,'Mbabane','Swazi','748','lilangeni','SZL','cent','SZL','Kingdom of Swaziland','SZ','SWZ','Swaziland','002','018',0,'268','SZ.png'),(752,'Stockholm','Swedish','752','krona (pl. kronor)','SEK','öre (inv.)','kr','Kingdom of Sweden','SE','SWE','Sweden','150','154',1,'46','SE.png'),(756,'Berne','Swiss','756','Swiss franc','CHF','centime','CHF','Swiss Confederation','CH','CHE','Switzerland','150','155',1,'41','CH.png'),(760,'Damascus','Syrian','760','Syrian pound','SYP','piastre','£','Syrian Arab Republic','SY','SYR','Syrian Arab Republic','142','145',0,'963','SY.png'),(762,'Dushanbe','Tajik','762','somoni','TJS','diram','TJS','Republic of Tajikistan','TJ','TJK','Tajikistan','142','143',0,'992','TJ.png'),(764,'Bangkok','Thai','764','baht (inv.)','THB','satang (inv.)','฿','Kingdom of Thailand','TH','THA','Thailand','142','035',0,'66','TH.png'),(768,'Lomé','Togolese','768','CFA franc (BCEAO)','XOF','centime','XOF','Togolese Republic','TG','TGO','Togo','002','011',0,'228','TG.png'),(772,'(TK2)','Tokelauan','772','New Zealand dollar','NZD','cent','$','Tokelau','TK','TKL','Tokelau','009','061',0,'690','TK.png'),(776,'Nuku’alofa','Tongan','776','pa’anga (inv.)','TOP','seniti (inv.)','T$','Kingdom of Tonga','TO','TON','Tonga','009','061',0,'676','TO.png'),(780,'Port of Spain','Trinidadian; Tobagonian','780','Trinidad and Tobago dollar','TTD','cent','TT$','Republic of Trinidad and Tobago','TT','TTO','Trinidad and Tobago','019','029',0,'1','TT.png'),(784,'Abu Dhabi','Emirian','784','UAE dirham','AED','fils (inv.)','AED','United Arab Emirates','AE','ARE','United Arab Emirates','142','145',0,'971','AE.png'),(788,'Tunis','Tunisian','788','Tunisian dinar','TND','millime','TND','Republic of Tunisia','TN','TUN','Tunisia','002','015',0,'216','TN.png'),(792,'Ankara','Turk','792','Turkish lira (inv.)','TRY','kurus (inv.)','₺','Republic of Turkey','TR','TUR','Turkey','142','145',0,'90','TR.png'),(795,'Ashgabat','Turkmen','795','Turkmen manat (inv.)','TMT','tenge (inv.)','m','Turkmenistan','TM','TKM','Turkmenistan','142','143',0,'993','TM.png'),(796,'Cockburn Town','Turks and Caicos Islander','796','US dollar','USD','cent','$','Turks and Caicos Islands','TC','TCA','Turks and Caicos Islands','019','029',0,'1','TC.png'),(798,'Funafuti','Tuvaluan','798','Australian dollar','AUD','cent','$','Tuvalu','TV','TUV','Tuvalu','009','061',0,'688','TV.png'),(800,'Kampala','Ugandan','800','Uganda shilling','UGX','cent','UGX','Republic of Uganda','UG','UGA','Uganda','002','014',0,'256','UG.png'),(804,'Kiev','Ukrainian','804','hryvnia','UAH','kopiyka','₴','Ukraine','UA','UKR','Ukraine','150','151',0,'380','UA.png'),(807,'Skopje','of Macedonia','807','denar (pl. denars)','MKD','deni (inv.)','ден','Macedonia','MK','MKD','Macedonia','150','039',0,'389','MK.png'),(818,'Cairo','Egyptian','818','Egyptian pound','EGP','piastre','£','Arab Republic of Egypt','EG','EGY','Egypt','002','015',0,'20','EG.png'),(826,'London','British','826','pound sterling','GBP','penny (pl. pence)','£','United Kingdom of Great Britain and Northern Ireland','GB','GBR','United Kingdom','150','154',1,'44','GB.png'),(831,'St Peter Port','of Guernsey','831','Guernsey pound (GG2)','GGP (GG2)','penny (pl. pence)',NULL,'Bailiwick of Guernsey','GG','GGY','Guernsey','150','154',0,'44',NULL),(832,'St Helier','of Jersey','832','Jersey pound (JE2)','JEP (JE2)','penny (pl. pence)',NULL,'Bailiwick of Jersey','JE','JEY','Jersey','150','154',0,'44',NULL),(833,'Douglas','Manxman; Manxwoman','833','Manx pound (IM2)','IMP (IM2)','penny (pl. pence)',NULL,'Isle of Man','IM','IMN','Isle of Man','150','154',0,'44',NULL),(834,'Dodoma (TZ1)','Tanzanian','834','Tanzanian shilling','TZS','cent','TZS','United Republic of Tanzania','TZ','TZA','Tanzania, United Republic of','002','014',0,'255','TZ.png'),(840,'Washington DC','American','840','US dollar','USD','cent','$','United States of America','US','USA','United States','019','021',0,'1','US.png'),(850,'Charlotte Amalie','US Virgin Islander','850','US dollar','USD','cent','$','United States Virgin Islands','VI','VIR','Virgin Islands, U.S.','019','029',0,'1','VI.png'),(854,'Ouagadougou','Burkinabe','854','CFA franc (BCEAO)','XOF','centime','XOF','Burkina Faso','BF','BFA','Burkina Faso','002','011',0,'226','BF.png'),(858,'Montevideo','Uruguayan','858','Uruguayan peso','UYU','centésimo','$U','Eastern Republic of Uruguay','UY','URY','Uruguay','019','005',0,'598','UY.png'),(860,'Tashkent','Uzbek','860','sum (inv.)','UZS','tiyin (inv.)','лв','Republic of Uzbekistan','UZ','UZB','Uzbekistan','142','143',0,'998','UZ.png'),(862,'Caracas','Venezuelan','862','bolívar fuerte (pl. bolívares fuertes)','VEF','céntimo','Bs','Bolivarian Republic of Venezuela','VE','VEN','Venezuela, Bolivarian Republic of','019','005',0,'58','VE.png'),(876,'Mata-Utu','Wallisian; Futunan; Wallis and Futuna Islander','876','CFP franc','XPF','centime','XPF','Wallis and Futuna','WF','WLF','Wallis and Futuna','009','061',0,'681','WF.png'),(882,'Apia','Samoan','882','tala (inv.)','WST','sene (inv.)','WS$','Independent State of Samoa','WS','WSM','Samoa','009','061',0,'685','WS.png'),(887,'San’a','Yemenite','887','Yemeni rial','YER','fils (inv.)','﷼','Republic of Yemen','YE','YEM','Yemen','142','145',0,'967','YE.png'),(894,'Lusaka','Zambian','894','Zambian kwacha (inv.)','ZMW','ngwee (inv.)','ZK','Republic of Zambia','ZM','ZMB','Zambia','002','014',0,'260','ZM.png');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_02_02_123533_add_roles_to_users_table',2),('2016_02_04_135007_create_sessions_table',2),('2016_02_24_150406_add_image_colum_to_users_table',2),('2016_02_24_153517_create_images_fields',3),('2016_03_01_141800_setup_countries_table',4),('2016_03_01_141801_charify_countries_table',4),('2016_03_03_105439_sourcepartners',5),('2016_03_09_134014_region_table',6),('2016_03_09_135926_create_regions_table',7),('2016_03_10_103026_create_categories_table',8),('2016_03_16_103426_create_blog_table',9),('2016_03_16_150921_create_worlkflow_table',10),('2016_08_20_142311_staticpage',11),('2016_08_20_173038_create_table_slider',12),('2016_08_21_144011_table_services',13),('2016_08_21_150147_ref_table_crate',14),('2016_09_03_151843_create_table_settings',15),('2016_09_13_122507_crate_table_sliders',16);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagemedium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagethumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(10) unsigned NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `workflow_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (64,'INTERIOR DOORS INTER-AMBER','interior-doors-inter-amber','interior-doors-inter-amber.jpg','interior-doors-inter-amber.jpg','interior-doors-inter-amber.jpg',95,'<p><strong>DOOR LEAF STRUCTURE</strong></p>\r\n\r\n<ul>\r\n	<li>rebated system or the DUO non-rebated system</li>\r\n	<li>wooden rail and stile set topped with two flush HDF boards, covered with ECO TOP, HIGH TOP surface, core made of honeycomb-like stabilizing layer</li>\r\n	<li>door leaf: vertical wood grain, panels: vertical wood grain (pattern A, B), panels: horizontal wood grain (pattern C, D, E, F)</li>\r\n</ul>\r\n\r\n<p><strong>GLAZING</strong></p>\r\n\r\n<ul>\r\n	<li>standard: white matt glass, 4 mm thick, for door leaves in the colours of: white, bright aralia, dark aralia, oak, bavaria beech, common walnut, British oak, maple, nut, dark oak, dark acacia, Palermo walnut, Salinas oak, white pine, Scandinavian oak; brown matt glass, 4 mm thick - Chestnut, southern oak, dark ash</li>\r\n	<li>for safety reasons, we recommend to use tempered glass - VERSION AS4, BS2, 03SD</li>\r\n</ul>\r\n\r\n<p><strong>STANDARD EQUIPMENT</strong></p>\r\n\r\n<p>REBATED SYSTEM</p>\r\n\r\n<ul>\r\n	<li>single-point mortise lock, spacing: 72 mm, key-operated (WK), for cylinder (WB) or for<br />\r\n	bathroom lock (WC)</li>\r\n	<li>hinges: screw-in pivot type (“60”, “70”, “80” – 2 units; “90” – 3 units)</li>\r\n</ul>\r\n\r\n<p>NON-REBATED SYSTEM</p>\r\n\r\n<ul>\r\n	<li>magnetic mortise lock (colour: chrome - satin), key-operated WK, for bathroom lock WC - spacing: 90 mm; for cylinder WB - spacing: 85 mm</li>\r\n	<li>hidden non-rebated hinges (DUO non-rebated system) (“60”, “70”, “80”, “90” - 2 units)</li>\r\n</ul>\r\n\r\n<p><strong>DOOR LEAF DIMENSIONS</strong></p>\r\n\r\n<ul>\r\n	<li>the single leaf type: “60”; “70”; “80”; “90”</li>\r\n	<li>the double leaf type: “60”+”60”; “60”+”70”; “60”+“80”; “60”+“90”; “70”+“70”; “70”+“80”; “70”+“90”; “80”+“80”; “80”+“90”; “90”+“90”</li>\r\n</ul>\r\n\r\n<p></p>\r\n',41,1,'2016-09-02 06:11:03','2016-09-13 16:12:58'),(65,'OAK PLANK SELECT','oak-plank-select','oak-plank-select.jpg','oak-plank-select.jpg','oak-plank-select.jpg',139,'<p>Character: Natural colors, prominent grain without harsh color variations. It features minor knots. Flame pattern is permitted only in traces. Tint differences may occur between the parquet stripes. <br />\r\nKnot: Knots, up to a diameter of 3 mm are permitted, except for black ones and those in groups. <br />\r\nSapwood: Fundamentally, it is not permitted, but healthy tangential sapwood, up to 3-4 mm in width and 20-30 cm in length, is permissible.</p>\r\n',41,1,'2016-09-02 06:18:51','2016-09-02 06:18:51'),(66,'OAK PLANK NATUR','oak-plank-natur','oak-plank-natur.jpg','oak-plank-natur.jpg','oak-plank-natur.jpg',139,'<p>Character: Course texture and prominent grain having rather dynamic colors but without harsh color variations, with bigger knots. Flame pattern permitted, in a minor degree. Major tint differences may occur between the parquet stripes. <br />\r\nKnot: Up to 4-5 knots having a diameter of 20-25 mm are permitted per stripes, except for black knots. Cracked knots are permitted when corrected by filling. Fallen-out knots are permitted, up to 25 mm in diameter, when corrected by filling. <br />\r\nSapwood: Fundamentally, it is not permitted, but healthy tangential sapwood, up to 4-5 mm in width and 50 cm in length, is permissible.</p>\r\n',41,1,'2016-09-02 06:19:35','2016-09-02 06:19:35'),(67,'OAK PLANK NORDIC','oak-plank-nordic','oak-plank-nordic.jpg','oak-plank-nordic.jpg','oak-plank-nordic.jpg',139,'<h3>Character: Course texture and prominent grain having wide color variations and minor knots. Flame pattern is permitted. There are tint differences between the parquet stripes. <br />\r\nKnot: Up to 2-3 knots having a diameter of 10-15 mm are permitted per stripes, except for black knots. Cracked knots are permitted when corrected by filling. <br />\r\nSapwood: Healthy sapwood is permitted up to the third of the slat width, even from both sides.</h3>\r\n',41,1,'2016-09-02 06:20:25','2016-09-02 06:20:25'),(68,'OAK PLANK RUSTIC','oak-plank-rustic','oak-plank-rustic.jpg','oak-plank-rustic.jpg','oak-plank-rustic.jpg',139,'<h3>Character: It is characterized by the sapwood and the knots, as well as its prominent textural and color variations. Flame pattern is permitted. <br />\r\nKnot: 5 – 6 healthy and dark knots – even grouped ones – are permitted in each stripe, up to a diameter of 25 – 30 mm. Fallen-out knots are permitted, up to 30 mm in diameter when corrected by filling. <br />\r\nSapwood: Healthy sapwood is permitted up to the third of the slat width, even from both sides.</h3>\r\n',41,1,'2016-09-02 06:22:02','2016-09-02 06:24:58'),(71,'Mineral','mineral','mineral.jpg','mineral.jpg','mineral.jpg',52,'<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9704</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9704</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>43.2</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 2502-B</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:19:39','2016-09-09 06:19:39'),(72,'Chalk Burst','chalk-burst','chalk-burst.jpg','chalk-burst.jpg','chalk-burst.jpg',52,'<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9703</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9703</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>63.5</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 1502-Y</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:25:34','2016-09-09 06:25:34'),(73,'Sailcloth','sailcloth','sailcloth.jpg','sailcloth.jpg','sailcloth.jpg',52,'<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9719</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9719</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>50.5</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 2002-Y50R</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:26:25','2016-09-09 06:26:25'),(76,'Toasted Almond','toasted-almond','toasted-almond.jpg','toasted-almond.jpg','toasted-almond.jpg',52,'<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9716</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9716</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>50.6</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 2005-Y30R</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:29:30','2016-09-09 06:29:30'),(77,'Caramel','caramel','caramel.jpg','caramel.jpg','caramel.jpg',52,'<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9723</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9723</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>39.3</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 3010-Y20R</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:31:05','2016-09-09 06:31:05'),(78,'Sandcastle','sandcastle','sandcastle.jpg','sandcastle.jpg','sandcastle.jpg',52,'<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9712</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9712</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>46.6</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 2010-Y40R</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:31:30','2016-09-09 06:31:30'),(79,'Truffle','truffle','truffle.jpg','truffle.jpg','truffle.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9713</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9713</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>32.2</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 3020-Y40R</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:35:17','2016-09-09 06:35:17'),(81,'Raincloud','raincloud','raincloud.jpg','raincloud.jpg','raincloud.jpg',52,'<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9718</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9718</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>34.2</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 3502-G</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:41:41','2016-09-09 06:41:41'),(82,'Wild Flax','wild-flax','wild-flax.jpg','wild-flax.jpg','wild-flax.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9701</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9701</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>56.3</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 2010-G90Y</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:42:58','2016-09-09 06:42:58'),(83,'Lemon Ice','lemon-ice','lemon-ice.jpg','lemon-ice.jpg','lemon-ice.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9702</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9702</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>54.5</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 1515-Y10R</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:44:04','2016-09-09 06:44:04'),(84,'Sunrise','sunrise','sunrise.jpg','sunrise.jpg','sunrise.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9721</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>3580</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>47.6</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 2040-Y10R</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:48:25','2016-09-09 06:48:25'),(85,'Wholemeal','wholemeal','wholemeal.jpg','wholemeal.jpg','wholemeal.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9724</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9724</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>30.8</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 4005-Y20R</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:49:07','2016-09-09 06:49:07'),(86,'Alpine Meadow','alpine-meadow','alpine-meadow.jpg','alpine-meadow.jpg','alpine-meadow.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9708</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9708</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>40.0</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 3020-G30Y</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:50:03','2016-09-09 06:50:03'),(87,'Seafoam','seafoam','seafoam.jpg','seafoam.jpg','seafoam.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9710</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9710</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>43.2</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 2020-B10G</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:50:54','2016-09-09 06:50:54'),(88,'Mint Crisp','mint-crisp','mint-crisp.jpg','mint-crisp.jpg','mint-crisp.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9706</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9706</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>44.5</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 2020-B50G</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:52:52','2016-09-09 06:52:52'),(89,'Satin Jade','satin-jade','satin-jade.jpg','satin-jade.jpg','satin-jade.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9707</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9707</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>20.8</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 5020-B70G</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:53:15','2016-09-09 06:53:15'),(90,'Lilac Bloom','lilac-bloom','lilac-bloom.jpg','lilac-bloom.jpg','lilac-bloom.jpg',52,'<h1>Lilac Bloom</h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9715</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9715</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>30.2</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 3020-R70B</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:53:46','2016-09-09 06:53:46'),(91,'Purple Crush','purple-crush','purple-crush.jpg','purple-crush.jpg','purple-crush.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9722</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9722</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>14.2</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 5030-R70B</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:54:43','2016-09-09 06:54:43'),(92,'Dark Berry','dark-berry','dark-berry.jpg','dark-berry.jpg','dark-berry.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9725</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9725</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>12.4</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 4040-R</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:55:10','2016-09-09 06:55:10'),(93,'Autumn Fire','autumn-fire','autumn-fire.jpg','autumn-fire.jpg','autumn-fire.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9717</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9717</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>24.1</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 2060-Y60R</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 06:58:14','2016-09-09 06:58:14'),(94,'Skylight','skylight','skylight.jpg','skylight.jpg','skylight.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9709</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9709</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>43.1</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 2010-R90B</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 07:00:02','2016-09-09 07:00:02'),(95,'Atlantic Mist','atlantic-mist','atlantic-mist.jpg','atlantic-mist.jpg','atlantic-mist.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9711</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9711</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>25.7</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 3030-R90B</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 07:02:47','2016-09-09 07:02:47'),(96,'Ocean Ripple','ocean-ripple','ocean-ripple.jpg','ocean-ripple.jpg','ocean-ripple.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9720</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>9720</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>13.1</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 5030-B</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 07:08:19','2016-09-09 07:08:19'),(97,'Charcoal','charcoal','charcoal.jpg','charcoal.jpg','charcoal.jpg',52,'<h1></h1>\r\n\r\n<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td></td>\r\n			<td>Code</td>\r\n			<td>9705</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Weld Rod</td>\r\n			<td>4900</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Gauge</td>\r\n			<td>2mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>Roll Size</td>\r\n			<td>2m x 20m</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>LRV</td>\r\n			<td>9.8</td>\r\n		</tr>\r\n		<tr>\r\n			<td></td>\r\n			<td>NCS</td>\r\n			<td>S 7502-B</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n',41,1,'2016-09-09 07:08:54','2016-09-09 07:08:54'),(98,'DPS','dps','dps.jpg','dps.jpg','dps.jpg',97,'<p><img alt=\"\" src=\"/imagescke/upload/images/DSC00173.JPG\" />  <img alt=\"\" src=\"/imagescke/upload/images/DSC00529.JPG\" />   <img alt=\"\" src=\"/imagescke/upload/images/DSC01015.JPG\" style=\"height:1200px; width:900px\" /> </p>\r\n\r\n<p> <img alt=\"\" src=\"/imagescke/upload/images/Snog%20Store_News.jpg\" style=\"height:178px; width:200px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/imagescke/upload/images/UPC-1.jpg\" /></p>\r\n',41,1,'2016-09-09 07:26:19','2016-09-09 07:28:53'),(100,'Streched ceilings','streched-ceilings','streched-ceilings.jpg','streched-ceilings.jpg','streched-ceilings.jpg',58,'<p><img alt=\"\" src=\"/imagescke/upload/images/1.jpg\" style=\"height:720px; width:960px\" /><img alt=\"\" src=\"/imagescke/upload/images/2.jpg\" style=\"height:720px; width:960px\" /><img alt=\"\" src=\"/imagescke/upload/images/3.jpg\" style=\"height:720px; width:960px\" /></p>\r\n',41,1,'2016-09-09 08:02:40','2016-09-09 08:02:40');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `referenti`
--

DROP TABLE IF EXISTS `referenti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `referenti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagemedium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagethumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `workflow_id` int(11) NOT NULL,
  `lat` double(20,10) NOT NULL,
  `lng` double(20,10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `referenti_user_id_foreign` (`user_id`),
  CONSTRAINT `referenti_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `referenti`
--

LOCK TABLES `referenti` WRITE;
/*!40000 ALTER TABLE `referenti` DISABLE KEYS */;
INSERT INTO `referenti` VALUES (2,'Скопје','skopje','skopje.jpg','skopje.jpg','skopje.jpg',807,'<p>MARQUARDT - Veles</p>\r\n',1,1,41.9973462000,21.4279956000,'2016-08-21 18:18:01','2016-09-07 11:40:03');
/*!40000 ALTER TABLE `referenti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `region` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `iso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
INSERT INTO `regions` VALUES (1,'Africa','af'),(2,'Asia Pacific','as'),(3,'Europe','eu'),(4,'Latin America','la'),(5,'Middle East','me'),(6,'US Canada','us');
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagemedium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagethumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `workflow_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `services_user_id_foreign` (`user_id`),
  CONSTRAINT `services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (6,'Дизајн на ентериер','dizajn-na-enterier','dizajn-na-enterier.jpg','dizajn-na-enterier.jpg','dizajn-na-enterier.jpg','<p>Професионално обучениот кадар на Олимпик </p>\r\n',41,1,'2016-09-09 10:18:16','2016-09-09 10:18:16'),(7,'Монтажа на подни и ѕидни облоги','montazha-na-podni-i-idni-oblogi','montazha-na-podni-i-idni-oblogi.jpg','montazha-na-podni-i-idni-oblogi.jpg','montazha-na-podni-i-idni-oblogi.jpg','<p>Олимпик</p>\r\n',41,1,'2016-09-09 10:23:32','2016-09-09 10:23:32'),(8,'Поставување на цементни кошулици','postavuvanje-na-tsementni-koshulitsi','postavuvanje-na-tsementni-koshulitsi.jpg','postavuvanje-na-tsementni-koshulitsi.jpg','postavuvanje-na-tsementni-koshulitsi.jpg','<p>Олимпик</p>\r\n',41,1,'2016-09-09 10:53:15','2016-09-09 10:53:15'),(9,'Поставување на самонивелирачка олма маса','postavuvanje-na-samonivelirachka-olma-masa','postavuvanje-na-samonivelirachka-olma-masa.jpg','postavuvanje-na-samonivelirachka-olma-masa.jpg','postavuvanje-na-samonivelirachka-olma-masa.jpg','<p>Олимпик</p>\r\n',41,1,'2016-09-09 10:56:25','2016-09-09 10:56:25');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settigs`
--

DROP TABLE IF EXISTS `settigs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settigs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mainurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logomedium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logothumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gplus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flickr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pinterest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `workflow_id` int(11) NOT NULL,
  `lat` double(20,10) NOT NULL,
  `lng` double(20,10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `settigs_user_id_foreign` (`user_id`),
  CONSTRAINT `settigs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settigs`
--

LOCK TABLES `settigs` WRITE;
/*!40000 ALTER TABLE `settigs` DISABLE KEYS */;
INSERT INTO `settigs` VALUES (4,'ОЛИМПИК - INTERIOR EXPERTS','http://olimpik.mk','contact@olimpik.mk','<p>Олимпик e компанија специјализирана за  изведба на завршни работи во градежништвото: изведба на  системи за сува градба, молерисување, машинско малтерисување, поставување на кошулици, фасадни системи, увоз и трговија со подни облоги. Благодарение на 26-годишното искуство се наметнува на македонскиот пазар како компанија специјализрана за изведба на завршни работи во градежништвото, но и како главен увозник и изведувач на подни и ѕидни облоги од теписни, линолеум, тапети, ламинат, трислоен паркет, ПВЦ, ентериерни врати и потребните акцесори за истите производи: лајсни, цколи, патосници и др.<br />\r\nБлагодарение на внимателниот избор на производи нашата компанија е ценет партнер на многу хотели, банки, болници, училишта, административни и резиденцијални објекти и домаќинства. Клучот на успехот се крие во нашата филозофија, а таа е: без разлика дали доставуваме за ресторант или приватен резиденцијален објект, канцеларии или оперска сала, хотел или банка, ние секогаш се стремиме да понудиме разнобразие на бои, дизајни и квалитет кои се вклопуваат и го надополнуваат постојаниот ентериер.<br />\r\nЗадоволството на клиентот од нашите производи и услуги е нашата основна цел. Ние веруваме ја постигнавме истата не само со производите кои ги нудиме, но и со дополнителните услуги кои ја придружуваат секоја продажба. Олимпик располага со висококвалификувани стручњаци, кои ќе Ви понудат исклучително голем избор на изведбени ентериерни решенија, подни и ѕидни облоги, проектирани и изработени од водечките европски производители , и ќе Ви помогнат да изберете дизајн, најсоодветен за Вашиот ентериер, тип на облога, која одговара на Вашите потреби, како и пресметка на потребните количини. Со соодветниот избор на производи и услуги ќе ги оптимизираме и рационализираме цените на производите и услугите и несомнено ќе се вклопиме во Вашиот предвиден буџет за секоја позиција одделно, без да влијаеме  на потребниот квалитет на производите, а со  квалитетната  монтажа  ќе Ви ги пренесеме гаранциите на производите од производителите и гаранциите на монтажа.</p>\r\n','logo.png','logo.png','logo.png','','Бул. Јане Сандански бр. 82 Т.Ц. Бисер А2/9','+38926091085','http://twitter.com/tiggaz','http://facebook.com/karadzinov','','','','','','',1,1,41.9850977000,21.4657372000,'2016-09-07 01:13:10','2016-09-09 07:33:19');
/*!40000 ALTER TABLE `settigs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagemedium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagethumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `workflow_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `slider_user_id_foreign` (`user_id`),
  CONSTRAINT `slider_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider`
--

LOCK TABLES `slider` WRITE;
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` VALUES (11,'PVC','pvc.jpg','pvc.jpg','pvc.jpg','','<p>Vinyl </p>\r\n',41,1,'2016-09-13 16:36:04','2016-09-13 16:36:04'),(12,'Luxury Vinyl Tiles','luxury-vinyl-tiles.jpg','luxury-vinyl-tiles.jpg','luxury-vinyl-tiles.jpg','','<p>LVT</p>\r\n',41,1,'2016-09-13 16:40:32','2016-09-13 16:40:32'),(13,'Expona','expona.jpg','expona.jpg','expona.jpg','','<p>LVT</p>\r\n',41,1,'2016-09-13 16:44:09','2016-09-13 16:44:09');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagemedium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagethumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) DEFAULT NULL,
  `category_id` int(10) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `workflow_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sliders_user_id_foreign` (`user_id`),
  CONSTRAINT `sliders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (18,'','694084496305.jpg','694084496305.jpg','694084496305.jpg','','',64,NULL,41,1,'2016-09-13 16:11:09','2016-09-13 16:11:09'),(19,'','226543971739.jpg','226543971739.jpg','226543971739.jpg','','',64,NULL,41,1,'2016-09-13 16:11:22','2016-09-13 16:11:22');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staticpage`
--

DROP TABLE IF EXISTS `staticpage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staticpage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagemedium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagethumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `workflow_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `staticpage_user_id_foreign` (`user_id`),
  CONSTRAINT `staticpage_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staticpage`
--

LOCK TABLES `staticpage` WRITE;
/*!40000 ALTER TABLE `staticpage` DISABLE KEYS */;
INSERT INTO `staticpage` VALUES (6,'За нас','za-nas-1','za-nas-1.JPG','za-nas-1.JPG','za-nas-1.JPG','<p>Почнувајќи од 1990-та година, Олимпик ги исполнува соништата на своите клиенти. Од идеја до реализација, Олимпик со својот тим од висококвалификувани професионалци и со своето огромно искуство е специјализиран за:</p>\r\n\r\n<p></p>\r\n\r\n<p>Изведба и монтажа на Knauf и Armstrong системи за сува градба (преградни ѕидови, спуштени плафони, молерисување, машинско малтерисување, фасадни системи, и др.)</p>\r\n\r\n<p></p>\r\n\r\n<p>Ентериерни решенија со комплетна изведба на сите фази (проектирање, 3Д моделирање и изведба)</p>\r\n\r\n<p></p>\r\n\r\n<p>Трговија и изведба на подни облоги од теписони, ПВЦ подови, ламинат, трислоен паркет и др.</p>\r\n\r\n<p></p>\r\n\r\n<p>Ентериерно и екстериерно лед осветлување, трговија и монтажа на декоративни тапети и завеси</p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p>Оlimpik - Our STORY...</p>\r\n\r\n<p></p>\r\n\r\n<p>Олимпик e компанија специјализирана за изведба на завршни работи во градежништвото: изведба на Knauf и Armstrong системи за сува градба, молерисување, машинско малтерисување, поставување на кошулици, фасадни системи, увоз и трговија со подни облоги. Благодарение на долгогодишното искуство, почнувајќи од 1990 година, Олимпик се наметнува на македонскиот пазар како компанија специјализрана за изведба на завршни работи во градежништвото, но и како главен увозник и изведувач на подни и ѕидни облоги од теписони, линолеум, тапети, ламинат, трислоен паркет, ПВЦ и потребни додатоциза истите производи и тоа: лајсни, цокли и др.</p>\r\n\r\n<p></p>\r\n\r\n<p>Благодарение на внимателниот избор на производи, нашата компанија е ценет партнер на многу хотели, банки, болници, училишта, административни и резиденцијални објекти и домаќинства. Клучот на успехот се крие во нашиот принцип, а тој е:  без разлика дали се работи за изведба на позиции во ресторант или приватен резиденцијален објект, канцеларии или оперска сала, хотел или банка, ние секогаш се стремиме да понудиме разнообразност од бои, дизајни и квалитет, кои се во склоп со постоечкиот ентериер.</p>\r\n\r\n<p>Нашата основна цел е задоволни клиенти од нашите производи и услуги. Ние веруваме дека истата е постигната, имајќи ги предвид не само производите кои ги нудиме, туку и дополнителните услуги кои се дел од секоја продажба.</p>\r\n\r\n<p></p>\r\n\r\n<p>Олимпик располага со висококвалитетни стручни кадри, кои ќе Ви понудат исклучително голем избор на изведбени ентериерни решенија, подни и ѕидни облоги, проектирани и изработени од водечки европски производители, а ќе ви помогнат и при изборот на дизајн и тип на облога, најсоодветни за Вашиот ентериер, со точна пресметка на потребните количества. Со соодветниот избор на производи и услуги, ние ги оптимизираме и рационализираме цените на производите и услугите, и на тој начин несомнено ќе се вклопиме во Вашиот предвиден буџет за секоја позиција одделно, без да влијаеме на квалитетот на производите, а со квалитетната монтажа ќе Ви ги пренесеме и гаранциите на производите од  самите производители, како и гаранциите за монтажа.</p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p>ЗОШТО <strong>ОЛИМПИК</strong> Е ЦЕНЕТ ПАРТНЕР НА МНОГУ КОМПАНИИ ВО ЗЕМЈАВА И СТРАНСТВО?</p>\r\n\r\n<p></p>\r\n\r\n<p>- Соработката со Олимпик несомнено ќе ги доведе сите ваши планови до успешен крај и гарантирано ќе ги задоволи и најпрефинетите вкусови.</p>\r\n\r\n<p>- Олимпик располага со млад и динамичен тим, со модерни погледи и способност да реагира брзо во сите ситуации, с&egrave; со цел да се задоволат потребите на клиентот на најдобар можен начин. Индивидуалниот пристап кон секој клиент гарантира најдобри резултати при работењето.</p>\r\n\r\n<p>- Лојалноста и високиот степен на доверба се основните принципи во деловната соработка со партнерот.</p>\r\n\r\n<p>- Нашето долгогодишно искуство и позицијата на пазарот во Македонија н&egrave; прават посакуван партнерна многу реномирани компании, како што се:</p>\r\n\r\n<p>BALTA INDUSTRIES N.V. (Belgium), GRABO PLAST (Hungary), ROMUS (France), PEDROSS (Italy),</p>\r\n\r\n<p>HAMAT (Belgium), NELCA N.V. (Belgium), BEAULIEU REAL N.V. (Belgium), BERRY TUFT (France), OROTEX - OROTUFT N.V. (Belgium), RALUX N.V. (Belgium), IDEAL FLOORCOVERINGS N.V. (Belgium), POLYFLOR (England), VOX (Poland), ASSOCIATED WEAVERS N.V. (Belgium), TAPIBEL N.V. (Belgium) TARKETT (Germany), BALSAN (France), ALPOD (Slovenia),</p>\r\n\r\n<p>ARDEX (Austria) и многу други.</p>\r\n\r\n<p></p>\r\n\r\n<p>ШТО ЗНАЧИ СОРАБОТКАТА СО <strong>ОЛИМПИК</strong>?</p>\r\n\r\n<p></p>\r\n\r\n<p>- Системите за сува градба, како и подните и ѕидни облоги кои Олимпик ги  нуди на своите клиенти, се со докажано потекло и придружени со сертификати за квалитет, кои ќе Ви помогнат да ја изберете потребната употребна класа на производите, соодветна за типот и намената на објектот.</p>\r\n\r\n<p></p>\r\n\r\n<p>- Олимпик располага со монтажни групи составени од висококвалификувани монтери, кои професионално и брзо ќе ги монтираат избраните производи од Ваша страна, без разлика на тоа дали реновирате дома или опремувате хотел, ресторант, канцеларии, болници и слично, Олимпик е секогаш тука да ги исполни сите стандарди за квалитетна монтажа заедно со проектирање на динамиката на монтажа со која ќе ги исполниме предвидените рокови.</p>\r\n',41,1,'2016-09-09 07:43:03','2016-09-09 07:44:38');
/*!40000 ALTER TABLE `staticpage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role` enum('admin','manager','editor','correspondent','contributor') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'editor',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagethumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Мартин Караџинов','martin@myhost.mk','$2y$10$wrRW3dHCUoj.kc1tnKwEeeK8QEBsp5BI9oy/tnyQxzvaw3kYyHbte','GscC3IaglAQhA6AW2f41M1wf2EOBcTT6319uvaUl6ZUotgRpatvBQyYAkjpt','2016-09-28 23:03:57','2016-09-28 21:03:57','admin','120651456493890.jpg','120651456493890.jpg'),(41,'Aleksandar Tasev','aleksandar@olimpik.mk','$2y$10$oFUr5uxXkTi93t2tmkDLmOTzWdSF2YDQBOyBuwM.rgEbRw.IMVnp.','SBVeNeQZNi6T0xxAPnM0ncrj63XD5dH4p9yMP98sRkrgjB1xq6vuLFyayJfd','2016-08-25 10:34:33','2016-08-25 10:34:33','admin','','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workflow`
--

DROP TABLE IF EXISTS `workflow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workflow` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workflow`
--

LOCK TABLES `workflow` WRITE;
/*!40000 ALTER TABLE `workflow` DISABLE KEYS */;
INSERT INTO `workflow` VALUES (1,'Published','colored-palegreen'),(2,'Waiting','colored-orange');
/*!40000 ALTER TABLE `workflow` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-29  2:44:36
