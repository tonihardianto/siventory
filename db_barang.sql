/*
SQLyog Ultimate v8.4 
MySQL - 5.5.5-10.4.17-MariaDB : Database - db_barang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_barang` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_barang`;

/*Table structure for table `tb_barang` */

DROP TABLE IF EXISTS `tb_barang`;

CREATE TABLE `tb_barang` (
  `barang_id` varchar(50) DEFAULT NULL,
  `barang_nama` varchar(150) DEFAULT NULL,
  `barang_satuan_id` int(11) DEFAULT NULL,
  `barang_kategori_id` int(11) DEFAULT NULL,
  `barang_stok` int(11) DEFAULT 0,
  `barang_min_stok` int(11) DEFAULT NULL,
  `barang_input` timestamp NULL DEFAULT NULL,
  `barang_last_update` timestamp NULL DEFAULT NULL,
  `barang_user_id` int(11) DEFAULT NULL,
  KEY `FK_tb_barang1` (`barang_satuan_id`),
  KEY `FK_tb_barang2` (`barang_kategori_id`),
  CONSTRAINT `FK_tb_barang1` FOREIGN KEY (`barang_satuan_id`) REFERENCES `tb_satuan` (`satuan_id`),
  CONSTRAINT `FK_tb_barang2` FOREIGN KEY (`barang_kategori_id`) REFERENCES `tb_kategori` (`kategori_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_barang` */

insert  into `tb_barang`(`barang_id`,`barang_nama`,`barang_satuan_id`,`barang_kategori_id`,`barang_stok`,`barang_min_stok`,`barang_input`,`barang_last_update`,`barang_user_id`) values ('BGID000001','Sutra Strawberry M',3,7,0,3,'2021-04-19 05:04:47',NULL,1),('BGID000002','Sutra Gerigi L',3,7,0,3,'2021-04-19 05:04:11',NULL,1),('BGID000003','Aqua 300 ml',4,2,0,3,'2021-04-19 05:04:47',NULL,1),('BGID000004','Aqua 600 ml',4,2,0,3,'2021-04-19 05:04:11',NULL,1),('BGID000005','One Push Vape 10 ml',4,10,0,3,'2021-04-19 05:04:54',NULL,1),('BGID000006','Gatsby Perfume White Up',4,11,0,3,'2021-04-19 06:04:00',NULL,1),('BGID000007','Coca Cola 500 ml',4,2,0,3,'2021-04-19 06:04:47',NULL,1),('BGID000008','Indomie Ayam Bawang',1,1,0,5,'2021-04-19 06:04:25',NULL,1),('BGID000009','Softties Face Mask',5,12,0,3,'2021-04-19 06:04:57','2021-04-19 06:04:14',1),('BGID000010','Alkaline Batere AAA 6',5,13,0,2,'2021-04-19 06:04:07','2021-04-19 06:04:21',1);

/*Table structure for table `tb_barang_in` */

DROP TABLE IF EXISTS `tb_barang_in`;

CREATE TABLE `tb_barang_in` (
  `produk_nofak` varchar(50) NOT NULL,
  `produk_tanggal` date NOT NULL,
  `produk_suplier` int(11) NOT NULL,
  `produk_kode_in` varchar(50) DEFAULT NULL,
  `produk_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_barang_in` */

/*Table structure for table `tb_barang_out` */

DROP TABLE IF EXISTS `tb_barang_out`;

CREATE TABLE `tb_barang_out` (
  `produk_id` varchar(50) NOT NULL,
  `produk_tanggal` date DEFAULT NULL,
  `produk_kode` varchar(50) DEFAULT NULL,
  `produk_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`produk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_barang_out` */

/*Table structure for table `tb_detail_in` */

DROP TABLE IF EXISTS `tb_detail_in`;

CREATE TABLE `tb_detail_in` (
  `d_masuk_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_masuk_faktur` varchar(50) DEFAULT NULL,
  `d_masuk_barang_id` varchar(50) DEFAULT NULL,
  `d_masuk_jumlah` int(11) DEFAULT NULL,
  `d_masuk_kode` varchar(50) DEFAULT NULL,
  UNIQUE KEY `d_masuk_id` (`d_masuk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_detail_in` */

/*Table structure for table `tb_detail_out` */

DROP TABLE IF EXISTS `tb_detail_out`;

CREATE TABLE `tb_detail_out` (
  `d_keluar_id` varchar(50) NOT NULL,
  `d_keluar_barang_id` varchar(50) DEFAULT NULL,
  `d_keluar_jumlah` int(11) DEFAULT NULL,
  `d_keluar_kode` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_detail_out` */

/*Table structure for table `tb_kategori` */

DROP TABLE IF EXISTS `tb_kategori`;

CREATE TABLE `tb_kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_kategori` */

insert  into `tb_kategori`(`kategori_id`,`kategori_nama`) values (1,'Makanan'),(2,'Minuman'),(5,'Pasta Gigi'),(6,'Obat-obatan'),(7,'Alat Kontrasepsi'),(10,'Pestisida'),(11,'Parfum'),(12,'Kesehatan'),(13,'Elektronik');

/*Table structure for table `tb_satuan` */

DROP TABLE IF EXISTS `tb_satuan`;

CREATE TABLE `tb_satuan` (
  `satuan_id` int(11) NOT NULL AUTO_INCREMENT,
  `satuan_nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`satuan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_satuan` */

insert  into `tb_satuan`(`satuan_id`,`satuan_nama`) values (1,'Pcs'),(3,'Box'),(4,'Botol'),(5,'Pack'),(6,'Sachet'),(12,'Liter');

/*Table structure for table `tb_supplier` */

DROP TABLE IF EXISTS `tb_supplier`;

CREATE TABLE `tb_supplier` (
  `suplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `suplier_nama` varchar(100) DEFAULT NULL,
  `suplier_alamat` varchar(200) DEFAULT NULL,
  `suplier_phone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`suplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_supplier` */

insert  into `tb_supplier`(`suplier_id`,`suplier_nama`,`suplier_alamat`,`suplier_phone`) values (1,'PT. Indomarco Tbk','Jakarta','0812345678'),(2,'PT. Alfamidi Tbk','Tangerang','0876546787646'),(4,'PT. Jaya Utama Santikah','Jl. Daan Mogot KM 19 Kebun Besar Batu Ceper Tangerang 15122, Kota Tangerang, Banten, Indonesia','081265778643');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(50) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_nama` varchar(100) DEFAULT NULL,
  `user_akses` varchar(50) DEFAULT NULL,
  `user_status` varchar(50) DEFAULT NULL,
  `user_last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_user` */

insert  into `tb_user`(`user_id`,`user_username`,`user_password`,`user_nama`,`user_akses`,`user_status`,`user_last_update`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3','Toni Hardianto','admin','aktif',NULL),(2,'user','ee11cbb19052e40b07aac0ca060c23ee','user','user',NULL,'2021-04-16 04:04:38');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
