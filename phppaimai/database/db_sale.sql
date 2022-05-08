-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2021-02-25 00:44:16
-- 服务器版本： 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sale`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- 表的结构 `tb_business`
--

DROP TABLE IF EXISTS `tb_business`;
CREATE TABLE IF NOT EXISTS `tb_business` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_business`
--

INSERT INTO `tb_business` (`id`, `username`, `password`, `time`) VALUES
(1, '123456', 'e10adc3949ba59abbe56e057f20f883e', '2021-02-25 07:48:40');

-- --------------------------------------------------------

--
-- 表的结构 `tb_gonggao`
--

DROP TABLE IF EXISTS `tb_gonggao`;
CREATE TABLE IF NOT EXISTS `tb_gonggao` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '公告id',
  `title` varchar(200) NOT NULL COMMENT '公告标题',
  `content` text NOT NULL COMMENT '公告内容',
  `ggdate` varchar(20) NOT NULL COMMENT '公告时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_gonggao`
--

INSERT INTO `tb_gonggao` (`id`, `title`, `content`, `ggdate`) VALUES
(1, '试测试测试测试测试测试测试测试测试测试测试', '测试测试测试测试测试测试测试', '2021-02-25');

-- --------------------------------------------------------

--
-- 表的结构 `tb_sale`
--

DROP TABLE IF EXISTS `tb_sale`;
CREATE TABLE IF NOT EXISTS `tb_sale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goodid` varchar(30) DEFAULT NULL,
  `goodprice` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_sale`
--

INSERT INTO `tb_sale` (`id`, `goodid`, `goodprice`) VALUES
(4, '29', '5200');

-- --------------------------------------------------------

--
-- 表的结构 `tb_saleuser`
--

DROP TABLE IF EXISTS `tb_saleuser`;
CREATE TABLE IF NOT EXISTS `tb_saleuser` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `goodid` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_saleuser`
--

INSERT INTO `tb_saleuser` (`id`, `goodid`, `price`, `user`, `time`) VALUES
(32, '29', '200', '123456', '2021-02-24 23:13:14');

-- --------------------------------------------------------

--
-- 表的结构 `tb_study`
--

DROP TABLE IF EXISTS `tb_study`;
CREATE TABLE IF NOT EXISTS `tb_study` (
  `eaid` int(11) NOT NULL AUTO_INCREMENT,
  `typeid` int(11) NOT NULL,
  `EAname` varchar(255) NOT NULL,
  `jianjie` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `oneprice` varchar(10) NOT NULL,
  `lowprice` varchar(10) NOT NULL,
  `overtime` varchar(32) NOT NULL,
  `price` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `introduction` varchar(1000) NOT NULL,
  `recommend` int(5) NOT NULL,
  `user` varchar(255) NOT NULL,
  `zt` varchar(10) DEFAULT '1',
  PRIMARY KEY (`eaid`),
  UNIQUE KEY `EAname` (`EAname`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_study`
--

INSERT INTO `tb_study` (`eaid`, `typeid`, `EAname`, `jianjie`, `brand`, `oneprice`, `lowprice`, `overtime`, `price`, `photo`, `introduction`, `recommend`, `user`, `zt`) VALUES
(30, 47, '测试', '测试', '测试', '0', '400', '2021-03-01', '测试', '/upimages/20210224232839.jpg', '测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试', 1, '123456', '1'),
(29, 49, ' 粤B8K9H6小汽车', '  苏GEU709汽车一辆', '野生', '1', '200', '2021-03-01', '5000', '/upimages/20210224132009.jpg', '桑塔纳苏GEU709号汽车一辆，车辆型号SVW7182QQD,排量1781ml，识别号LSVT91339CN063181,非营运，黑色，发动机号272516，车显里程856km。制造年月：2012年06月15日，初次登记日期：2012年11月15日。保险终止日期2013年11月09日，检验有效期止2014年11月30日。', 1, '123456', '1'),
(31, 47, '测试1', '21', '野生', '0', '1', '2021-03-01', '野生', '/upimages/20210225080628.jpg', 'a', 0, '1234561', '1');

-- --------------------------------------------------------

--
-- 表的结构 `tb_type`
--

DROP TABLE IF EXISTS `tb_type`;
CREATE TABLE IF NOT EXISTS `tb_type` (
  `typeid` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(30) DEFAULT NULL,
  `typedes` text,
  PRIMARY KEY (`typeid`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_type`
--

INSERT INTO `tb_type` (`typeid`, `typename`, `typedes`) VALUES
(53, '其他商品', '其他商品'),
(52, '家用电器', '家用电器'),
(51, '古董文玩', '古董文玩'),
(50, '房屋信息', '房屋信息'),
(49, '车辆信息', '车辆信息'),
(48, '生活用品', '生活用品'),
(47, '土地建筑', '土地建筑');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`userid`, `username`, `password`, `email`, `address`, `telephone`) VALUES
(96, 'xiaoming', 'e10adc3949ba59abbe56e057f20f883e', '123456@163.com', '18622222244', '13888886112'),
(95, 'xiaoming1', 'e10adc3949ba59abbe56e057f20f883e', '123456@163.com', '中国', '13888886611'),
(99, '123123', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '123', '213');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
