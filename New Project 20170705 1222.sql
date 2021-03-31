-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.13-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema kependudukan
--

CREATE DATABASE IF NOT EXISTS kependudukan;
USE kependudukan;

--
-- Temporary table structure for view `v_akte`
--
DROP TABLE IF EXISTS `v_akte`;
DROP VIEW IF EXISTS `v_akte`;
CREATE TABLE `v_akte` (
  `Id_Penduduk` int(10) unsigned,
  `Nama` varchar(45),
  `Alamat` varchar(45),
  `Agama` varchar(45),
  `Jenis_Kelamin` varchar(45),
  `Satatus_Kawin` varchar(45),
  `Kecamatan` varchar(45),
  `Desa` varchar(45),
  `Dusun` varchar(45),
  `Pendidikan` varchar(45),
  `Pekerjaan` varchar(45),
  `No_Hp` varchar(45),
  `Anak_Ke` varchar(45),
  `Nama_Ayah` varchar(45),
  `Nama_Ibu` varchar(45),
  `Tempat_Lahir` varchar(45),
  `Tanggal_Lahir` date,
  `Id_Akte` int(10) unsigned,
  `Ya_Ket_Dokter` varchar(45),
  `Ya_Kk` varchar(45),
  `Ya_Ktp` varchar(45),
  `Ya_Buku_Nikah` varchar(45),
  `Ya_Ktp_Saksi` varchar(45),
  `Tgl_Buat` date,
  `Status` varchar(45),
  `Tgl_Update` date
);

--
-- Temporary table structure for view `v_kk`
--
DROP TABLE IF EXISTS `v_kk`;
DROP VIEW IF EXISTS `v_kk`;
CREATE TABLE `v_kk` (
  `Id_Penduduk` int(10) unsigned,
  `Nama` varchar(45),
  `Alamat` varchar(45),
  `Agama` varchar(45),
  `Jenis_Kelamin` varchar(45),
  `Satatus_Kawin` varchar(45),
  `Kecamatan` varchar(45),
  `Desa` varchar(45),
  `Dusun` varchar(45),
  `Pendidikan` varchar(45),
  `Pekerjaan` varchar(45),
  `No_Hp` varchar(45),
  `Anak_Ke` varchar(45),
  `Nama_Ayah` varchar(45),
  `Nama_Ibu` varchar(45),
  `Tempat_Lahir` varchar(45),
  `Tanggal_Lahir` date,
  `Id_Kk` int(10) unsigned,
  `Tgl_Buat` date,
  `Ya_Daftar` varchar(45),
  `Ya_Kk` varchar(45),
  `Ya_Nikah` varchar(45),
  `Ya_Ktp` varchar(45),
  `Ya_Dokter` varchar(45),
  `Ya_Ktp_Saksi` varchar(45),
  `Hub_Keluarga` varchar(45),
  `Status` varchar(45),
  `Tgl_Update` date
);

--
-- Temporary table structure for view `v_ktp`
--
DROP TABLE IF EXISTS `v_ktp`;
DROP VIEW IF EXISTS `v_ktp`;
CREATE TABLE `v_ktp` (
  `Id_Penduduk` int(10) unsigned,
  `Nama` varchar(45),
  `Alamat` varchar(45),
  `Agama` varchar(45),
  `Jenis_Kelamin` varchar(45),
  `Satatus_Kawin` varchar(45),
  `Kecamatan` varchar(45),
  `Desa` varchar(45),
  `Dusun` varchar(45),
  `Pendidikan` varchar(45),
  `Pekerjaan` varchar(45),
  `No_Hp` varchar(45),
  `Anak_Ke` varchar(45),
  `Nama_Ayah` varchar(45),
  `Nama_Ibu` varchar(45),
  `Tempat_Lahir` varchar(45),
  `Tanggal_Lahir` date,
  `NOKTP` int(10) unsigned,
  `Ya_Usia` varchar(45),
  `Ya_Kk` varchar(45),
  `Tgl_Buat` date,
  `Status` varchar(45),
  `Tgl_Update` date
);

--
-- Definition of table `akte_lahir`
--

DROP TABLE IF EXISTS `akte_lahir`;
CREATE TABLE `akte_lahir` (
  `Id_Akte` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Id_Penduduk` int(10) unsigned NOT NULL,
  `Ya_Ket_Dokter` varchar(45) NOT NULL,
  `Ya_Kk` varchar(45) NOT NULL,
  `Ya_Ktp` varchar(45) NOT NULL,
  `Ya_Buku_Nikah` varchar(45) NOT NULL,
  `Ya_Ktp_Saksi` varchar(45) NOT NULL,
  `Tgl_Buat` date NOT NULL,
  `Status` varchar(45) NOT NULL,
  `Tgl_Update` date NOT NULL,
  PRIMARY KEY (`Id_Akte`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akte_lahir`
--

/*!40000 ALTER TABLE `akte_lahir` DISABLE KEYS */;
INSERT INTO `akte_lahir` (`Id_Akte`,`Id_Penduduk`,`Ya_Ket_Dokter`,`Ya_Kk`,`Ya_Ktp`,`Ya_Buku_Nikah`,`Ya_Ktp_Saksi`,`Tgl_Buat`,`Status`,`Tgl_Update`) VALUES 
 (1,2,'Y','Y','Y','N','N','2017-05-11','Proses','0000-00-00'),
 (2,3,'Y','Y','Y','Y','Y','2017-07-02','Sudah diserahkan','0000-00-00');
/*!40000 ALTER TABLE `akte_lahir` ENABLE KEYS */;


--
-- Definition of table `daemons`
--

DROP TABLE IF EXISTS `daemons`;
CREATE TABLE `daemons` (
  `Start` text NOT NULL,
  `Info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daemons`
--

/*!40000 ALTER TABLE `daemons` DISABLE KEYS */;
/*!40000 ALTER TABLE `daemons` ENABLE KEYS */;


--
-- Definition of table `gammu`
--

DROP TABLE IF EXISTS `gammu`;
CREATE TABLE `gammu` (
  `Version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gammu`
--

/*!40000 ALTER TABLE `gammu` DISABLE KEYS */;
INSERT INTO `gammu` (`Version`) VALUES 
 (13);
/*!40000 ALTER TABLE `gammu` ENABLE KEYS */;


--
-- Definition of table `inbox`
--

DROP TABLE IF EXISTS `inbox`;
CREATE TABLE `inbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inbox`
--

/*!40000 ALTER TABLE `inbox` DISABLE KEYS */;
INSERT INTO `inbox` (`UpdatedInDB`,`ReceivingDateTime`,`Text`,`SenderNumber`,`Coding`,`UDH`,`SMSCNumber`,`Class`,`TextDecoded`,`ID`,`RecipientID`,`Processed`) VALUES 
 ('2017-01-19 09:21:54','2016-12-05 20:21:54','004D00610073002000670069006D0061006E006100200065007800630065006C002000620073002000640069006B006900720069006D003F0020','+6285755127381','Default_No_Compression','','+62816124',-1,'Mas gimana excel bs dikirim? ',18,'smssateway','false'),
 ('2017-01-19 09:21:54','2016-12-05 20:46:17','005300750064006100680020006D00610073002E002E002000730061006D00650061006E0020006200750061007400200073007500620064006F006D00610069006E006E00790061002000620065006C0075006D00200061006B00740069006600200074006100640069002C00200074006500720075007300200069006E00690020007500640061006800200061006B007500200062006500740075006C0069006E002C00200069006E006900200061006B007500200063006F00620061002000720065006700690073007400720061007300690020004E00640061006B00200062006900730061002C0020006D0061007300690068002000650072006F0072002E002E00200034003000340020006E006F007400200066006F0075006E0064002E00200043006F00620061002000730061','+6281330034153','Default_No_Compression','050003CA0201','+6281100000',-1,'Sudah mas.. samean buat subdomainnya belum aktif tadi, terus ini udah aku betulin, ini aku coba registrasi Ndak bisa, masih eror.. 404 not found. Coba sa',19,'smssateway','false'),
 ('2017-01-19 09:21:54','2016-12-05 20:46:18','006D00650061006E002000750070006C006F006100640020006C006100670069002E0020004200650073006F006B002000700061006700690020006B0069007400610020006B006500730061006E0061002C0020006B006900740061002000740075006E006A0075006B006B0061006E0020006B0061006C006F0020007500640068002000730065006C00650073006100690020002E0020005400610070006900200073006500620065006C0075006D006E00790061002000730061006D00650061006E0020006600690078006B0061006E002000640075006C0075002E0020004A0061006400690020006B0069007400610020006B006500730061006E0061002000750064006100680020006200690073006100200064006900200063006F00620061002E','+6281330034153','Default_No_Compression','050003CA0202','+6281100000',-1,'mean upload lagi. Besok pagi kita kesana, kita tunjukkan kalo udh selesai . Tapi sebelumnya samean fixkan dulu. Jadi kita kesana udah bisa di coba.',20,'smssateway','false'),
 ('2017-01-19 09:21:54','2016-12-06 06:19:30','00680074007400700073003A002F002F00640061007A007A006C0065002E006A00610067006F0061006E0068006F007300740069006E0067002E0063006F006D003A0032003000380033000A000A0075007300650072006E0061006D0065003A002000640069007300700065006E00640075000A00500061007300730077006F00720064003A0020007600360079004D006600710031003000560032','+6281330034153','Default_No_Compression','','+6281100000',-1,'https://dazzle.jagoanhosting.com:2083\n\nusername: dispendu\nPassword: v6yMfq10V2',21,'smssateway','false'),
 ('2017-01-19 09:21:55','2016-12-06 06:19:59','0043006F006C006C00650063007400200053004D0053002000540065006C006B006F006D00730065006C003A0020006E006F006D006F00720020002B003600320038003100330033003000300033003400310035003300200067006100670061006C0020006D0065006E0067006900720069006D00200053004D00530020006B006500200041006E00640061002E0020004A0069006B00610020006200650072006B0065006E0061006E0020006D0065006D0062006100790061007200200062006900610079006100200053004D00530020005200700020003100370035002C002000620061006C006100730020005900450053002000640061006E0020004E004F0020006A0069006B006100200074006900640061006B002E00200049006E0066006F003A0020004300530020003100330033002F003100380038','88331','Default_No_Compression','','+6281100000',-1,'Collect SMS Telkomsel: nomor +6281330034153 gagal mengirim SMS ke Anda. Jika berkenan membayar biaya SMS Rp 175, balas YES dan NO jika tidak. Info: CS 133/188',22,'smssateway','false'),
 ('2017-01-19 09:21:55','2016-12-06 08:35:59','00440061007000610074006B0061006E002000700061006B00650074002000730075007000650072002000680065006D00610074002000430046004300200052007000200032003000720062002000730062006C006D002000330031002000440065007300200032003000310036002000680061006E00790061002000750074006B0020006B0061006D00750020006D0065006D006200650072002000540065006C006B006F006D00730065006C00200043006F006D006D0075006E0069007400790021002000530026004B0020006200650072006C0061006B0075002E00200048007500620020002A003200330032002A0034002A00320023002000640061006E002000640061007000610074006B0061006E002000620065006E0065006600690074006E007900610021','TELKOMSEL','Default_No_Compression','','+6281100000',-1,'Dapatkan paket super hemat CFC Rp 20rb sblm 31 Des 2016 hanya utk kamu member Telkomsel Community! S&K berlaku. Hub *232*4*2# dan dapatkan benefitnya!',23,'smssateway','false'),
 ('2017-05-12 06:54:49','2017-05-12 06:54:46','00500065006D00620075006100740061006E0020004B00540050002000610074006100730020006E0061006D00610020005200690073006B0069006100770061007400690020004600720061006E007300690073006B0061002000540065006C00610068002000730065006C0065007300610069002C002000730069006C00610068006B0061006E0020006D0065006E00670061006D00620069006C0020006400690020006B0061006E0074006F0072002000640065007300610020006C0065006E0067006B006F006E0067','+6282234957339','Default_No_Compression','','+6281100000',-1,'Pembuatan KTP atas nama Riskiawati Fransiska Telah selesai, silahkan mengambil di kantor desa lengkong',27,'rizki','false');
/*!40000 ALTER TABLE `inbox` ENABLE KEYS */;


--
-- Definition of trigger `inbox_timestamp`
--

DROP TRIGGER /*!50030 IF EXISTS */ `inbox_timestamp`;

DELIMITER $$

CREATE DEFINER = `root`@`localhost` TRIGGER `inbox_timestamp` BEFORE INSERT ON `inbox` FOR EACH ROW BEGIN
    IF NEW.ReceivingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.ReceivingDateTime = CURRENT_TIMESTAMP();
    END IF;
END $$

DELIMITER ;

--
-- Definition of table `kartu_keluarga`
--

DROP TABLE IF EXISTS `kartu_keluarga`;
CREATE TABLE `kartu_keluarga` (
  `Id_Kk` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Id_Penduduk` int(10) unsigned NOT NULL,
  `Tgl_Buat` date NOT NULL,
  `Ya_Daftar` varchar(45) NOT NULL,
  `Ya_Kk` varchar(45) NOT NULL,
  `Ya_Nikah` varchar(45) NOT NULL,
  `Ya_Ktp` varchar(45) NOT NULL,
  `Ya_Dokter` varchar(45) NOT NULL,
  `Ya_Ktp_Saksi` varchar(45) NOT NULL,
  `Hub_Keluarga` varchar(45) NOT NULL,
  `Status` varchar(45) NOT NULL,
  `Tgl_Update` date NOT NULL,
  PRIMARY KEY (`Id_Kk`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kartu_keluarga`
--

/*!40000 ALTER TABLE `kartu_keluarga` DISABLE KEYS */;
INSERT INTO `kartu_keluarga` (`Id_Kk`,`Id_Penduduk`,`Tgl_Buat`,`Ya_Daftar`,`Ya_Kk`,`Ya_Nikah`,`Ya_Ktp`,`Ya_Dokter`,`Ya_Ktp_Saksi`,`Hub_Keluarga`,`Status`,`Tgl_Update`) VALUES 
 (1,2,'2017-05-09','Y','Y','N','Y','Y','Y','Anak','Syarat belum lengkap','2017-07-05');
/*!40000 ALTER TABLE `kartu_keluarga` ENABLE KEYS */;


--
-- Definition of table `karyawan`
--

DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `Id_Karyawan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NIP` int(10) NOT NULL,
  `Jabatan` varchar(45) NOT NULL,
  `Status_Kawin` varchar(45) NOT NULL,
  `Jenis_Kelamin` varchar(45) NOT NULL,
  `Agama` varchar(45) NOT NULL,
  `Nama` varchar(45) NOT NULL,
  `Tempat_Lahir` varchar(45) DEFAULT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` varchar(45) NOT NULL,
  `Mulai_Kerja` date NOT NULL,
  `Pendidikan` varchar(45) NOT NULL,
  `No_Hp` varchar(45) NOT NULL,
  `No_Rekening` varchar(45) NOT NULL,
  `Bank` varchar(45) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_Karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
INSERT INTO `karyawan` (`Id_Karyawan`,`NIP`,`Jabatan`,`Status_Kawin`,`Jenis_Kelamin`,`Agama`,`Nama`,`Tempat_Lahir`,`Tanggal_Lahir`,`Alamat`,`Mulai_Kerja`,`Pendidikan`,`No_Hp`,`No_Rekening`,`Bank`,`Username`,`Password`) VALUES 
 (1,12345,'Sekretaris','Belum Menikah','W','Islam','Riskiawati Fransiska','Jember','0000-00-00','Umbulsari','0000-00-00','D3','','','','riski','1234');
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;


--
-- Definition of table `kontak`
--

DROP TABLE IF EXISTS `kontak`;
CREATE TABLE `kontak` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `no` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

/*!40000 ALTER TABLE `kontak` DISABLE KEYS */;
INSERT INTO `kontak` (`id`,`no`,`nama`) VALUES 
 (1,'085746852144','lukman'),
 (2,'082234957339','bahar'),
 (3,'0855555555','mad');
/*!40000 ALTER TABLE `kontak` ENABLE KEYS */;


--
-- Definition of table `ktp`
--

DROP TABLE IF EXISTS `ktp`;
CREATE TABLE `ktp` (
  `NOKTP` int(10) unsigned NOT NULL,
  `Id_Penduduk` int(10) unsigned NOT NULL,
  `Ya_Usia` varchar(45) NOT NULL,
  `Ya_Kk` varchar(45) NOT NULL,
  `Tgl_Buat` date NOT NULL,
  `Status` varchar(45) NOT NULL,
  `Tgl_Update` date NOT NULL,
  PRIMARY KEY (`NOKTP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ktp`
--

/*!40000 ALTER TABLE `ktp` DISABLE KEYS */;
INSERT INTO `ktp` (`NOKTP`,`Id_Penduduk`,`Ya_Usia`,`Ya_Kk`,`Tgl_Buat`,`Status`,`Tgl_Update`) VALUES 
 (34,4,'Y','N','2017-05-01','Syarat belum lengkap','0000-00-00'),
 (123,2,'Y','Y','2017-05-09','Selesai','2017-07-05'),
 (834577534,3,'Y','Y','2017-07-04','Proses','0000-00-00');
/*!40000 ALTER TABLE `ktp` ENABLE KEYS */;


--
-- Definition of table `outbox`
--

DROP TABLE IF EXISTS `outbox`;
CREATE TABLE `outbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendBefore` time NOT NULL DEFAULT '23:59:59',
  `SendAfter` time NOT NULL DEFAULT '00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int(11) DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`),
  KEY `outbox_sender` (`SenderID`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `outbox`
--

/*!40000 ALTER TABLE `outbox` DISABLE KEYS */;
INSERT INTO `outbox` (`UpdatedInDB`,`InsertIntoDB`,`SendingDateTime`,`SendBefore`,`SendAfter`,`Text`,`DestinationNumber`,`Coding`,`UDH`,`Class`,`TextDecoded`,`ID`,`MultiPart`,`RelativeValidity`,`SenderID`,`SendingTimeOut`,`DeliveryReport`,`CreatorID`) VALUES 
 ('2017-07-05 11:21:40','2017-07-05 11:21:40','2017-07-05 11:21:40','23:59:59','00:00:00',NULL,'083162962343','Default_No_Compression',NULL,-1,'Pembuatan Akte atas nama Cipyanto Telah selesai, silahkan mengambil di kantor desa lengkong',101,'false',-1,NULL,'2017-07-05 11:21:40','default','Gammu 1.31.0');
/*!40000 ALTER TABLE `outbox` ENABLE KEYS */;


--
-- Definition of trigger `outbox_timestamp`
--

DROP TRIGGER /*!50030 IF EXISTS */ `outbox_timestamp`;

DELIMITER $$

CREATE DEFINER = `root`@`localhost` TRIGGER `outbox_timestamp` BEFORE INSERT ON `outbox` FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingTimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.SendingTimeOut = CURRENT_TIMESTAMP();
    END IF;
END $$

DELIMITER ;

--
-- Definition of table `outbox_multipart`
--

DROP TABLE IF EXISTS `outbox_multipart`;
CREATE TABLE `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`,`SequencePosition`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `outbox_multipart`
--

/*!40000 ALTER TABLE `outbox_multipart` DISABLE KEYS */;
/*!40000 ALTER TABLE `outbox_multipart` ENABLE KEYS */;


--
-- Definition of table `pbk`
--

DROP TABLE IF EXISTS `pbk`;
CREATE TABLE `pbk` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `GroupID` int(11) NOT NULL DEFAULT '-1',
  `Name` text NOT NULL,
  `Number` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pbk`
--

/*!40000 ALTER TABLE `pbk` DISABLE KEYS */;
/*!40000 ALTER TABLE `pbk` ENABLE KEYS */;


--
-- Definition of table `pbk_groups`
--

DROP TABLE IF EXISTS `pbk_groups`;
CREATE TABLE `pbk_groups` (
  `Name` text NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pbk_groups`
--

/*!40000 ALTER TABLE `pbk_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `pbk_groups` ENABLE KEYS */;


--
-- Definition of table `penduduk`
--

DROP TABLE IF EXISTS `penduduk`;
CREATE TABLE `penduduk` (
  `Id_Penduduk` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nama` varchar(45) NOT NULL,
  `Alamat` varchar(45) NOT NULL,
  `Agama` varchar(45) NOT NULL,
  `Jenis_Kelamin` varchar(45) NOT NULL,
  `Satatus_Kawin` varchar(45) NOT NULL,
  `Kecamatan` varchar(45) NOT NULL,
  `Desa` varchar(45) NOT NULL,
  `Dusun` varchar(45) NOT NULL,
  `Pendidikan` varchar(45) NOT NULL,
  `Pekerjaan` varchar(45) NOT NULL,
  `No_Hp` varchar(45) NOT NULL,
  `Anak_Ke` varchar(45) NOT NULL,
  `Nama_Ayah` varchar(45) NOT NULL,
  `Nama_Ibu` varchar(45) NOT NULL,
  `Tempat_Lahir` varchar(45) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  PRIMARY KEY (`Id_Penduduk`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

/*!40000 ALTER TABLE `penduduk` DISABLE KEYS */;
INSERT INTO `penduduk` (`Id_Penduduk`,`Nama`,`Alamat`,`Agama`,`Jenis_Kelamin`,`Satatus_Kawin`,`Kecamatan`,`Desa`,`Dusun`,`Pendidikan`,`Pekerjaan`,`No_Hp`,`Anak_Ke`,`Nama_Ayah`,`Nama_Ibu`,`Tempat_Lahir`,`Tanggal_Lahir`) VALUES 
 (2,'Cipyanto','mumbulsari 123','Kristen','W','Menikah','Mumbulsari 12','Lengkong 12','Barat 12','S2','MD marjan','83162962343','22','asd2','asd2','jember2','2017-05-15'),
 (3,'Asbily','kalisat','Islam','P','Belum Menikah','Kalisat','Kalisat','Barat','SMP','MD','82234957339','2','Sugianto','Sri Yunaini','Jember','2017-05-09'),
 (4,'Riskiawati Fransiska','asd','Islam','P','Belum Menikah','Kalisat','Kalisat','Barat','D3','Support System','85851165852','1','asd','asd','Jember','2017-05-01'),
 (5,'Subay','karang kembeng','Islam','P','Duda','Kalisat','Kalisat','Barat','SD','Pengemis','9876543','10','Rid','Mamik','Nusa kambangan','2005-06-14');
/*!40000 ALTER TABLE `penduduk` ENABLE KEYS */;


--
-- Definition of table `phones`
--

DROP TABLE IF EXISTS `phones`;
CREATE TABLE `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL DEFAULT 'no',
  `Receive` enum('yes','no') NOT NULL DEFAULT 'no',
  `IMEI` varchar(35) NOT NULL,
  `Client` text NOT NULL,
  `Battery` int(11) NOT NULL DEFAULT '-1',
  `Signal` int(11) NOT NULL DEFAULT '-1',
  `Sent` int(11) NOT NULL DEFAULT '0',
  `Received` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IMEI`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phones`
--

/*!40000 ALTER TABLE `phones` DISABLE KEYS */;
INSERT INTO `phones` (`ID`,`UpdatedInDB`,`InsertIntoDB`,`TimeOut`,`Send`,`Receive`,`IMEI`,`Client`,`Battery`,`Signal`,`Sent`,`Received`) VALUES 
 ('rizki','2017-05-15 06:54:05','2017-05-15 06:46:33','2017-05-15 06:54:15','yes','yes','355291044552194','Gammu 1.31.0, Windows Server 2007, GCC 4.6, MinGW 3.11',100,48,6,0);
/*!40000 ALTER TABLE `phones` ENABLE KEYS */;


--
-- Definition of trigger `phones_timestamp`
--

DROP TRIGGER /*!50030 IF EXISTS */ `phones_timestamp`;

DELIMITER $$

CREATE DEFINER = `root`@`localhost` TRIGGER `phones_timestamp` BEFORE INSERT ON `phones` FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.TimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.TimeOut = CURRENT_TIMESTAMP();
    END IF;
END $$

DELIMITER ;

--
-- Definition of table `sentitems`
--

DROP TABLE IF EXISTS `sentitems`;
CREATE TABLE `sentitems` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL DEFAULT NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL DEFAULT 'SendingOK',
  `StatusError` int(11) NOT NULL DEFAULT '-1',
  `TPMR` int(11) NOT NULL DEFAULT '-1',
  `RelativeValidity` int(11) NOT NULL DEFAULT '-1',
  `CreatorID` text NOT NULL,
  PRIMARY KEY (`ID`,`SequencePosition`),
  KEY `sentitems_date` (`DeliveryDateTime`),
  KEY `sentitems_tpmr` (`TPMR`),
  KEY `sentitems_dest` (`DestinationNumber`),
  KEY `sentitems_sender` (`SenderID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sentitems`
--

/*!40000 ALTER TABLE `sentitems` DISABLE KEYS */;
INSERT INTO `sentitems` (`UpdatedInDB`,`InsertIntoDB`,`SendingDateTime`,`DeliveryDateTime`,`Text`,`DestinationNumber`,`Coding`,`UDH`,`SMSCNumber`,`Class`,`TextDecoded`,`ID`,`SenderID`,`SequencePosition`,`Status`,`StatusError`,`TPMR`,`RelativeValidity`,`CreatorID`) VALUES 
 ('2017-05-12 06:53:11','2017-05-12 06:53:04','2017-05-12 06:53:11',NULL,'00500065006D00620075006100740061006E0020004B00540050002000610074006100730020006E0061006D0061002000430069007000790061006E0074006F002000540065006C00610068002000730065006C0065007300610069002C002000730069006C00610068006B0061006E0020006D0065006E00670061006D00620069006C0020006400690020006B0061006E0074006F0072002000640065007300610020006C0065006E0067006B006F006E0067','083162962343','Default_No_Compression','','+6281100000',-1,'Pembuatan KTP atas nama Cipyanto Telah selesai, silahkan mengambil di kantor desa lengkong',90,'rizki',1,'SendingOKNoReport',-1,168,255,'Gammu 1.31.0'),
 ('2017-05-12 06:54:47','2017-05-12 06:54:28','2017-05-12 06:54:47',NULL,'00500065006D00620075006100740061006E0020004B00540050002000610074006100730020006E0061006D00610020005200690073006B0069006100770061007400690020004600720061006E007300690073006B0061002000540065006C00610068002000730065006C0065007300610069002C002000730069006C00610068006B0061006E0020006D0065006E00670061006D00620069006C0020006400690020006B0061006E0074006F0072002000640065007300610020006C0065006E0067006B006F006E0067','082234957339','Default_No_Compression','','+6281100000',-1,'Pembuatan KTP atas nama Riskiawati Fransiska Telah selesai, silahkan mengambil di kantor desa lengkong',91,'rizki',1,'SendingOKNoReport',-1,169,255,'Gammu 1.31.0'),
 ('2017-05-12 06:55:52','2017-05-12 06:55:46','2017-05-12 06:55:52',NULL,'00500065006D00620075006100740061006E0020004B00540050002000610074006100730020006E0061006D0061002000430069007000790061006E0074006F002000540065006C00610068002000730065006C0065007300610069002C002000730069006C00610068006B0061006E0020006D0065006E00670061006D00620069006C0020006400690020006B0061006E0074006F0072002000640065007300610020006C0065006E0067006B006F006E0067','083162962343','Default_No_Compression','','+6281100000',-1,'Pembuatan KTP atas nama Cipyanto Telah selesai, silahkan mengambil di kantor desa lengkong',92,'rizki',1,'SendingOKNoReport',-1,170,255,'Gammu 1.31.0'),
 ('2017-05-12 07:01:32','2017-05-12 07:01:11','2017-05-12 07:01:32',NULL,'00500065006D00620075006100740061006E0020004B00540050002000610074006100730020006E0061006D00610020005200690073006B0069006100770061007400690020004600720061006E007300690073006B0061002000540065006C00610068002000730065006C0065007300610069002C002000730069006C00610068006B0061006E0020006D0065006E00670061006D00620069006C0020006400690020006B0061006E0074006F0072002000640065007300610020006C0065006E0067006B006F006E0067','085738997953','Default_No_Compression','','+6281100000',-1,'Pembuatan KTP atas nama Riskiawati Fransiska Telah selesai, silahkan mengambil di kantor desa lengkong',93,'rizki',1,'SendingOKNoReport',-1,171,255,'Gammu 1.31.0'),
 ('2017-05-12 07:08:40','2017-05-12 07:08:12','2017-05-12 07:08:40',NULL,'00500065006D00620075006100740061006E0020004B00540050002000610074006100730020006E0061006D00610020005200690073006B0069006100770061007400690020004600720061006E007300690073006B0061002000540065006C00610068002000730065006C0065007300610069002C002000730069006C00610068006B0061006E0020006D0065006E00670061006D00620069006C0020006400690020006B0061006E0074006F0072002000640065007300610020006C0065006E0067006B006F006E0067','085851165852','Default_No_Compression','','+6281100000',-1,'Pembuatan KTP atas nama Riskiawati Fransiska Telah selesai, silahkan mengambil di kantor desa lengkong',94,'rizki',1,'SendingOKNoReport',-1,172,255,'Gammu 1.31.0'),
 ('2017-05-15 06:47:07','2017-05-15 06:47:03','2017-05-15 06:47:07',NULL,'00500065006D00620075006100740061006E0020004B00540050002000610074006100730020006E0061006D0061002000430069007000790061006E0074006F002000540065006C00610068002000730065006C0065007300610069002C002000730069006C00610068006B0061006E0020006D0065006E00670061006D00620069006C0020006400690020006B0061006E0074006F0072002000640065007300610020006C0065006E0067006B006F006E0067','083162962343','Default_No_Compression','','+6281100000',-1,'Pembuatan KTP atas nama Cipyanto Telah selesai, silahkan mengambil di kantor desa lengkong',95,'rizki',1,'SendingOKNoReport',-1,174,255,'Gammu 1.31.0'),
 ('2017-05-15 06:49:12','2017-05-15 06:48:54','2017-05-15 06:49:12',NULL,'00500065006D00620075006100740061006E0020004B00610072007400750020004B0065006C00750061007200670061002000610074006100730020006E0061006D0061002000430069007000790061006E0074006F002000540065006C00610068002000730065006C0065007300610069002C002000730069006C00610068006B0061006E0020006D0065006E00670061006D00620069006C0020006400690020006B0061006E0074006F0072002000640065007300610020006C0065006E0067006B006F006E0067','083162962343','Default_No_Compression','','+6281100000',-1,'Pembuatan Kartu Keluarga atas nama Cipyanto Telah selesai, silahkan mengambil di kantor desa lengkong',96,'rizki',1,'SendingOKNoReport',-1,175,255,'Gammu 1.31.0'),
 ('2017-05-15 06:49:47','2017-05-15 06:49:23','2017-05-15 06:49:47',NULL,'00500065006D00620075006100740061006E00200041006B00740065002000610074006100730020006E0061006D0061002000430069007000790061006E0074006F002000540065006C00610068002000730065006C0065007300610069002C002000730069006C00610068006B0061006E0020006D0065006E00670061006D00620069006C0020006400690020006B0061006E0074006F0072002000640065007300610020006C0065006E0067006B006F006E0067','083162962343','Default_No_Compression','','+6281100000',-1,'Pembuatan Akte atas nama Cipyanto Telah selesai, silahkan mengambil di kantor desa lengkong',97,'rizki',1,'SendingOKNoReport',-1,176,255,'Gammu 1.31.0'),
 ('2017-05-15 06:52:53','2017-05-15 06:52:41','2017-05-15 06:52:53',NULL,'00500065006D00620075006100740061006E0020004B00540050002000610074006100730020006E0061006D0061002000430069007000790061006E0074006F002000540065006C00610068002000730065006C0065007300610069002C002000730069006C00610068006B0061006E0020006D0065006E00670061006D00620069006C0020006400690020006B0061006E0074006F0072002000640065007300610020006C0065006E0067006B006F006E0067','083162962343','Default_No_Compression','','+6281100000',-1,'Pembuatan KTP atas nama Cipyanto Telah selesai, silahkan mengambil di kantor desa lengkong',98,'rizki',1,'SendingOKNoReport',-1,177,255,'Gammu 1.31.0'),
 ('2017-05-15 06:52:57','2017-05-15 06:52:47','2017-05-15 06:52:57',NULL,'00500065006D00620075006100740061006E0020004B00540050002000610074006100730020006E0061006D00610020005200690073006B0069006100770061007400690020004600720061006E007300690073006B0061002000540065006C00610068002000730065006C0065007300610069002C002000730069006C00610068006B0061006E0020006D0065006E00670061006D00620069006C0020006400690020006B0061006E0074006F0072002000640065007300610020006C0065006E0067006B006F006E0067','085851165852','Default_No_Compression','','+6281100000',-1,'Pembuatan KTP atas nama Riskiawati Fransiska Telah selesai, silahkan mengambil di kantor desa lengkong',99,'rizki',1,'SendingOKNoReport',-1,178,255,'Gammu 1.31.0'),
 ('2017-05-15 06:53:01','2017-05-15 06:52:58','2017-05-15 06:53:01',NULL,'00500065006D00620075006100740061006E0020004B00610072007400750020004B0065006C00750061007200670061002000610074006100730020006E0061006D0061002000430069007000790061006E0074006F002000540065006C00610068002000730065006C0065007300610069002C002000730069006C00610068006B0061006E0020006D0065006E00670061006D00620069006C0020006400690020006B0061006E0074006F0072002000640065007300610020006C0065006E0067006B006F006E0067','083162962343','Default_No_Compression','','+6281100000',-1,'Pembuatan Kartu Keluarga atas nama Cipyanto Telah selesai, silahkan mengambil di kantor desa lengkong',100,'rizki',1,'SendingOKNoReport',-1,179,255,'Gammu 1.31.0');
/*!40000 ALTER TABLE `sentitems` ENABLE KEYS */;


--
-- Definition of trigger `sentitems_timestamp`
--

DROP TRIGGER /*!50030 IF EXISTS */ `sentitems_timestamp`;

DELIMITER $$

CREATE DEFINER = `root`@`localhost` TRIGGER `sentitems_timestamp` BEFORE INSERT ON `sentitems` FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
END $$

DELIMITER ;

--
-- Definition of table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `level_user` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(5) NOT NULL,
  `w_login` datetime NOT NULL,
  `photo` varchar(100) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` (`id_user`,`username`,`pass`,`level_user`,`email`,`status`,`w_login`,`photo`,`nohp`) VALUES 
 (2,'lukman','b5bbc8cf472072baffe920e4e28ee29c',1,'lukman@gmail.com',1,'2015-07-03 10:27:24','','0857468512144'),
 (3,'pakdar','491c6a29a7daaa9146c83a37d01eccea',2,'daryanto@gmail.com',0,'0000-00-00 00:00:00','','');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;


--
-- Definition of view `v_akte`
--

DROP TABLE IF EXISTS `v_akte`;
DROP VIEW IF EXISTS `v_akte`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_akte` AS select `p`.`Id_Penduduk` AS `Id_Penduduk`,`p`.`Nama` AS `Nama`,`p`.`Alamat` AS `Alamat`,`p`.`Agama` AS `Agama`,`p`.`Jenis_Kelamin` AS `Jenis_Kelamin`,`p`.`Satatus_Kawin` AS `Satatus_Kawin`,`p`.`Kecamatan` AS `Kecamatan`,`p`.`Desa` AS `Desa`,`p`.`Dusun` AS `Dusun`,`p`.`Pendidikan` AS `Pendidikan`,`p`.`Pekerjaan` AS `Pekerjaan`,`p`.`No_Hp` AS `No_Hp`,`p`.`Anak_Ke` AS `Anak_Ke`,`p`.`Nama_Ayah` AS `Nama_Ayah`,`p`.`Nama_Ibu` AS `Nama_Ibu`,`p`.`Tempat_Lahir` AS `Tempat_Lahir`,`p`.`Tanggal_Lahir` AS `Tanggal_Lahir`,`q`.`Id_Akte` AS `Id_Akte`,`q`.`Ya_Ket_Dokter` AS `Ya_Ket_Dokter`,`q`.`Ya_Kk` AS `Ya_Kk`,`q`.`Ya_Ktp` AS `Ya_Ktp`,`q`.`Ya_Buku_Nikah` AS `Ya_Buku_Nikah`,`q`.`Ya_Ktp_Saksi` AS `Ya_Ktp_Saksi`,`q`.`Tgl_Buat` AS `Tgl_Buat`,`q`.`Status` AS `Status`,`q`.`Tgl_Update` AS `Tgl_Update` from (`penduduk` `p` join `akte_lahir` `q`) where (`p`.`Id_Penduduk` = `q`.`Id_Penduduk`);

--
-- Definition of view `v_kk`
--

DROP TABLE IF EXISTS `v_kk`;
DROP VIEW IF EXISTS `v_kk`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kk` AS select `a`.`Id_Penduduk` AS `Id_Penduduk`,`a`.`Nama` AS `Nama`,`a`.`Alamat` AS `Alamat`,`a`.`Agama` AS `Agama`,`a`.`Jenis_Kelamin` AS `Jenis_Kelamin`,`a`.`Satatus_Kawin` AS `Satatus_Kawin`,`a`.`Kecamatan` AS `Kecamatan`,`a`.`Desa` AS `Desa`,`a`.`Dusun` AS `Dusun`,`a`.`Pendidikan` AS `Pendidikan`,`a`.`Pekerjaan` AS `Pekerjaan`,`a`.`No_Hp` AS `No_Hp`,`a`.`Anak_Ke` AS `Anak_Ke`,`a`.`Nama_Ayah` AS `Nama_Ayah`,`a`.`Nama_Ibu` AS `Nama_Ibu`,`a`.`Tempat_Lahir` AS `Tempat_Lahir`,`a`.`Tanggal_Lahir` AS `Tanggal_Lahir`,`c`.`Id_Kk` AS `Id_Kk`,`c`.`Tgl_Buat` AS `Tgl_Buat`,`c`.`Ya_Daftar` AS `Ya_Daftar`,`c`.`Ya_Kk` AS `Ya_Kk`,`c`.`Ya_Nikah` AS `Ya_Nikah`,`c`.`Ya_Ktp` AS `Ya_Ktp`,`c`.`Ya_Dokter` AS `Ya_Dokter`,`c`.`Ya_Ktp_Saksi` AS `Ya_Ktp_Saksi`,`c`.`Hub_Keluarga` AS `Hub_Keluarga`,`c`.`Status` AS `Status`,`c`.`Tgl_Update` AS `Tgl_Update` from (`penduduk` `a` join `kartu_keluarga` `c`) where (`a`.`Id_Penduduk` = `c`.`Id_Penduduk`);

--
-- Definition of view `v_ktp`
--

DROP TABLE IF EXISTS `v_ktp`;
DROP VIEW IF EXISTS `v_ktp`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ktp` AS select `a`.`Id_Penduduk` AS `Id_Penduduk`,`a`.`Nama` AS `Nama`,`a`.`Alamat` AS `Alamat`,`a`.`Agama` AS `Agama`,`a`.`Jenis_Kelamin` AS `Jenis_Kelamin`,`a`.`Satatus_Kawin` AS `Satatus_Kawin`,`a`.`Kecamatan` AS `Kecamatan`,`a`.`Desa` AS `Desa`,`a`.`Dusun` AS `Dusun`,`a`.`Pendidikan` AS `Pendidikan`,`a`.`Pekerjaan` AS `Pekerjaan`,`a`.`No_Hp` AS `No_Hp`,`a`.`Anak_Ke` AS `Anak_Ke`,`a`.`Nama_Ayah` AS `Nama_Ayah`,`a`.`Nama_Ibu` AS `Nama_Ibu`,`a`.`Tempat_Lahir` AS `Tempat_Lahir`,`a`.`Tanggal_Lahir` AS `Tanggal_Lahir`,`b`.`NOKTP` AS `NOKTP`,`b`.`Ya_Usia` AS `Ya_Usia`,`b`.`Ya_Kk` AS `Ya_Kk`,`b`.`Tgl_Buat` AS `Tgl_Buat`,`b`.`Status` AS `Status`,`b`.`Tgl_Update` AS `Tgl_Update` from (`penduduk` `a` join `ktp` `b`) where (`a`.`Id_Penduduk` = `b`.`Id_Penduduk`);



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
