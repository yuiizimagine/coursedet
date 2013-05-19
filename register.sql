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
-- ฐานข้อมูล: `scrum`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `register`
-- 

CREATE TABLE `register` (
  `member_id` int(11) NOT NULL auto_increment,
  `user` varchar(30) character set tis620 NOT NULL,
  `pwd` varchar(40) character set tis620 NOT NULL,
  `repwd` varchar(40) character set tis620 NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(80) character set tis620 NOT NULL,
  `surname` varchar(80) character set tis620 NOT NULL,
  `gender` varchar(20) character set tis620 NOT NULL,
  `date` varchar(2) character set tis620 NOT NULL,
  `month` varchar(2) character set tis620 NOT NULL,
  `year` varchar(2) character set tis620 NOT NULL,
  `addr` varchar(255) character set tis620 NOT NULL,
  PRIMARY KEY  (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

-- 
-- dump ตาราง `register`
-- 

INSERT INTO `register` VALUES (23, 'L', '1', 'q', 'z', 'aui', 'aa', 'male', '1', 'Ja', '20', 'A');
INSERT INTO `register` VALUES (22, 'auimicky', '1234', '1234', 'auimicky@hotmail.com', 'Kanokporn', 'Ruanruen', 'female', '20', 'Ja', '19', 'Korea ');
