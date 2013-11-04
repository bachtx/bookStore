-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2013 at 10:26 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bookonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catalog`
--

CREATE TABLE IF NOT EXISTS `tbl_catalog` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `par_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `intro` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isactive` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tbl_catalog`
--

INSERT INTO `tbl_catalog` (`cat_id`, `par_id`, `name`, `intro`, `isactive`) VALUES
(1, 0, 'Fiction & Literature', '', 1),
(2, 1, 'Children', ' ', 1),
(3, 1, 'Science Fiction', ' ', 1),
(6, 0, 'Non - Fiction', '&nbsp;', 1),
(8, 6, 'Comic', '<br>', 1),
(10, 6, 'Cook', '', 1),
(11, 6, 'Psychology', '', 1),
(12, 6, 'Medical', '', 1),
(13, 6, 'Art', '', 1),
(14, 6, 'Photography', '', 1),
(15, 6, 'Law', '', 1),
(16, 6, 'History', '', 1),
(17, 6, 'Business', '', 1),
(18, 6, 'Computer', '', 1),
(19, 1, 'Fantasy', '', 1),
(20, 1, 'Mystery', '', 1),
(21, 1, 'Romance', '', 1),
(22, 1, 'Horror', '', 1),
(23, 1, 'Poetry', '', 1),
(24, 1, 'Literature', '', 1),
(25, 1, 'Crime', '', 1),
(26, 0, 'Orther', '', 1),
(27, 26, 'Baby', '', 1),
(28, 26, 'Sex', '', 1),
(29, 26, 'Travel', '', 1),
(30, 26, 'Science', '', 1),
(31, 26, 'Sports', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `desc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isactive` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_category`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `cdate` datetime NOT NULL,
  `fulltext` longtext NOT NULL,
  `isactive` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_comment`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE IF NOT EXISTS `tbl_content` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `intro` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fulltext` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cdate` datetime NOT NULL,
  `author` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thumb` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isactive` int(11) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_content`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_gmember`
--

CREATE TABLE IF NOT EXISTS `tbl_gmember` (
  `gmem_id` int(11) NOT NULL AUTO_INCREMENT,
  `par_id` int(11) DEFAULT '0',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci,
  `isadmin` int(11) DEFAULT '1',
  `isactive` int(11) DEFAULT '1',
  PRIMARY KEY (`gmem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_gmember`
--

INSERT INTO `tbl_gmember` (`gmem_id`, `par_id`, `name`, `intro`, `isadmin`, `isactive`) VALUES
(1, 0, 'Super Admin', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE IF NOT EXISTS `tbl_member` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `joindate` datetime NOT NULL,
  `lastlogin` datetime NOT NULL,
  `gmem_id` int(11) NOT NULL,
  `isactive` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`mem_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`mem_id`, `username`, `password`, `firstname`, `lastname`, `birthday`, `gender`, `address`, `phone`, `mobile`, `email`, `joindate`, `lastlogin`, `gmem_id`, `isactive`) VALUES
(1, 'admin', '74076346dee6d87ffe0f2f069dda57bb', 'Trần', 'Xuân Bách', '0000-00-00', '1', 'Cổ Nhuế - Hà Nội', '01656241161', '01656241161', 'txbachit@gmail.com', '2013-10-26 22:50:39', '2013-11-03 10:31:18', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cdate` datetime NOT NULL,
  `cname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cphone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cemail` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shiptype` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `add` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `payment` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `totalmoney` decimal(10,0) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=157 ;

--
-- Dumping data for table `tbl_order`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` decimal(10,0) NOT NULL,
  `price` int(11) NOT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=170 ;

--
-- Dumping data for table `tbl_order_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `intro` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fulltext` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thumb` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `old_price` int(10) NOT NULL,
  `cur_price` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cdate` datetime NOT NULL,
  `mdate` datetime NOT NULL,
  `visited` int(11) NOT NULL,
  `ishot` int(11) NOT NULL,
  `isactive` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`pro_id`, `cat_id`, `code`, `name`, `intro`, `fulltext`, `thumb`, `old_price`, `cur_price`, `quantity`, `cdate`, `mdate`, `visited`, `ishot`, `isactive`) VALUES
(2, 2, 'Bi-quyet-cham-tre', 'Bí quyết chăm trẻ', '&nbsp;', '&nbsp;', 'http://localhost/bookStore/images/product/thumb/3.jpg', 55, 51, 10, '2013-11-03 00:00:00', '2013-11-03 00:00:00', 0, 0, 1),
(3, 2, 'Bi-quyet-bac-ty', 'Bí quyết bạc tỷ', '&nbsp;', '&nbsp;', 'http://localhost/bookStore/images/product/thumb/2.jpg', 98, 90, 0, '2013-11-03 00:00:00', '2013-11-03 00:00:00', 0, 0, 1),
(4, 2, 'Sach-tre-em', 'Sách trẻ em', '&nbsp;', '&nbsp;', 'http://localhost/bookStore/images/product/thumb/6.jpg', 100, 90, 0, '2013-11-04 00:00:00', '2013-11-04 00:00:00', 0, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
