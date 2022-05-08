-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2022 年 04 月 24 日 10:52
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bid`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(12) CHARACTER SET utf8 NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `dingdan`
--

CREATE TABLE IF NOT EXISTS `dingdan` (
  `id` int(123) NOT NULL AUTO_INCREMENT,
  `title` varchar(123) COLLATE utf8_bin NOT NULL,
  `uname` varchar(123) COLLATE utf8_bin NOT NULL,
  `price` varchar(123) COLLATE utf8_bin NOT NULL,
  `pic` varchar(22) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pid` int(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=64 ;

--
-- 转存表中的数据 `dingdan`
--

INSERT INTO `dingdan` (`id`, `title`, `uname`, `price`, `pic`, `time`, `pid`) VALUES
(63, 'Currency of Qing Dynasty', 'lily', '90000', 'qhbd1.jpg', '2022-04-24 02:50:35', 175),
(62, 'Currency of Qing Dynasty', 'lily', '80000', 'qhbd1.jpg', '2022-04-24 02:40:31', 175),
(61, 'Currency of Qing Dynasty', 'lily', '70000', 'qhbd1.jpg', '2022-04-24 02:38:19', 175),
(60, 'Currency of Qing Dynasty', 'peter', '60000', 'qhbd1.jpg', '2022-04-24 02:35:01', 175),
(59, 'Currency of Qing Dynasty', 'peter', '50000', 'qhbd1.jpg', '2022-04-24 02:34:51', 175),
(58, 'Currency of Qing Dynasty', 'peter', '500', 'qhbd1.jpg', '2022-04-24 02:34:39', 175),
(57, ' porcelain', 'lily', '19000', 'qhc1.jpg', '2022-04-23 08:01:47', 173),
(56, ' porcelain', 'lily', '18000', 'qhc1.jpg', '2022-04-23 08:01:43', 173),
(55, ' porcelain', 'lily', '17000', 'qhc1.jpg', '2022-04-23 08:01:40', 173),
(54, ' porcelain', 'lily', '16000', 'qhc1.jpg', '2022-04-23 08:01:25', 173);

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint(254) NOT NULL AUTO_INCREMENT,
  `title` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `content` varchar(2143) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `btime` varchar(12) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pic` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `location` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price` int(123) NOT NULL,
  `state` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'ready',
  `etime` varchar(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=176 ;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `title`, `content`, `btime`, `pic`, `location`, `price`, `state`, `etime`) VALUES
(173, ' porcelain', 'Blue and white porcelain from remote and mysterious eastern China', '14:00:00', 'qhc1.jpg', 'CHINA', 15000, 'begin', '20:00:00'),
(174, 'Huang Tingjian calligraphy and painting', 'Huang Tingjian calligraphy and painting', '9:00:00', 'htj12.jpg', 'CHINA', 52222, 'begin', '11:00:00'),
(175, 'Currency of Qing Dynasty', 'Ancient and mysterious imperial currency in China', '09:00', 'qhbd1.jpg', 'CHINA', 15000, 'begin', '12:00');

-- --------------------------------------------------------

--
-- 表的结构 `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(123) NOT NULL AUTO_INCREMENT,
  `title` varchar(123) COLLATE utf8_bin NOT NULL,
  `uname` varchar(123) COLLATE utf8_bin NOT NULL,
  `content` varchar(123) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `reports`
--

INSERT INTO `reports` (`id`, `title`, `uname`, `content`, `time`) VALUES
(26, 'Auction start time', 'admin', 'Only within the specified auction start time can the auction be successful', '2022-04-24 02:20:39'),
(25, 'Bidding rules', 'admin', 'The bidding price needs to be higher than the price of the previous bidder', '2022-04-24 02:19:51');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(124) NOT NULL AUTO_INCREMENT,
  `yhm` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mm` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tel` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `role` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `yhm`, `mm`, `email`, `tel`, `role`) VALUES
(59, 'lily', '111111', '123123@qq.com', '1522729321', '企业'),
(71, 'peter', '111111', '123123@qq.com', '15227280192', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
