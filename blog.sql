-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `coursedetdb`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `blog`
-- 

CREATE TABLE `blog` (
  `topic` text NOT NULL,
  `detail` text NOT NULL,
  `owner` varchar(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `blog`
-- 

INSERT INTO `blog` VALUES ('ข่าววันใหม่', 'ข่าว รายละเอียดเยอะแยะมากมายก่ายกอง ข่าว รายละเอียดเยอะแยะมากมายก่ายกอง ข่าว รายละเอียดเยอะแยะมากมายก่ายกอง ข่าว รายละเอียดเยอะแยะมากมายก่ายกอง', 'cartoonmed', '2013-06-24 17:43:53');
INSERT INTO `blog` VALUES ('New Topic', 'Detail All', 'cartoonmed', '2013-06-24 17:48:33');
