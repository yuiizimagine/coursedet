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
-- โครงสร้างตาราง `register`
-- 

CREATE TABLE `register` (
  `member_id` int(11) NOT NULL auto_increment,
  `user` varchar(30) character set tis620 NOT NULL,
  `pwd` varchar(40) character set tis620 NOT NULL,
  `email` varchar(100) NOT NULL,
  `visible_mail` tinyint(1) NOT NULL,
  `name` varchar(80) character set tis620 NOT NULL,
  `surname` varchar(80) character set tis620 NOT NULL,
  `gender` varchar(20) character set tis620 NOT NULL,
  `addr` varchar(255) character set tis620 NOT NULL,
  `birth_day` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `trainer` tinyint(1) NOT NULL,
  `practitioner` tinyint(1) NOT NULL,
  PRIMARY KEY  (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

-- 
-- dump ตาราง `register`
-- 

INSERT INTO `register` VALUES (23, 'L', '1', 'z', 1, 'aui', 'aa', 'male', 'A', '0000-00-00', 'user', 0, 0);
INSERT INTO `register` VALUES (22, 'auimicky', '1234', 'auimicky@hotmail.com', 0, 'Kanokporn', 'Ruanruen', 'female', 'Korea ', '0000-00-00', 'user', 0, 0);
INSERT INTO `register` VALUES (24, 'cartoonmed', 'cartoonman', 'cartoonman_jr@hotmail.com', 0, 'attakorn', 'poonkesorn', 'male', '111/2', '1991-04-01', 'admin', 0, 0);
INSERT INTO `register` VALUES (25, 'jkme', 'jkmee', 'yuiizimagine@gmail.com', 1, 'juthathip', 'kaensing', '', '99/99', '1991-04-09', 'admin', 0, 0);
INSERT INTO `register` VALUES (31, 'ccc', 'ccc', 'aaa', 1, 'aaa', 'aaa', 'female', 'aaa', '2013-01-01', 'user', 1, 1);
