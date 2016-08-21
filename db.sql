-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2016 at 07:03 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

-- Database: `final`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `final_hreg`
-- 

CREATE TABLE `final_hreg` (
`huname` VARCHAR( 15 ) NOT NULL ,
`hpass` VARCHAR( 30 ) NOT NULL ,
`hosname` VARCHAR( 30 ) NOT NULL ,
`state` VARCHAR( 30 ) NOT NULL ,
`city` VARCHAR( 30 ) NOT NULL ,
`type` VARCHAR( 20 ) NOT NULL ,
`ceo` VARCHAR( 30 ) NOT NULL ,
`gov` VARCHAR( 20 ) NOT NULL ,
`gen` VARCHAR( 20 ) NOT NULL ,
`reg` VARCHAR( 16 ) NOT NULL ,
`website` VARCHAR( 100 ) NOT NULL ,
`email` VARCHAR( 50 ) NOT NULL ,
UNIQUE KEY ( `huname` ) ,
PRIMARY KEY(`reg`)
) ENGINE = InnoDB

-- 
-- Dumping data for table `final_hreg`
-- 

INSERT INTO final_hreg(huname,hpass,hosname,state,city,type,ceo,gov,gen,reg,website,email) VALUES ('huser1','65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5','hospital_1','Rajasthan','Mumbai','Homeopathy,','Mr.Rahul Sharma','government','Specialized Hospital','1001','www.hospital_1.com','hospital_01@gmail.com')


INSERT INTO final_hreg(huname,hpass,hosname,state,city,type,ceo,gov,gen,reg,website,email) VALUES ('huser2','65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5','hospital_2','Gujarat','Surat','Allopathy,Homeopathy','Mr.Tanay Sharma','private','Clinic','1002','www.hospital_2.com','hospital_02@gmail.com')



-- 
-- Table structure for table `final_preg`
-- 

CREATE TABLE `final_preg` (
`uid` int( 15 ) NOT NULL ,
`uname` VARCHAR( 30 ) NOT NULL ,
`addr` VARCHAR( 255 ) NOT NULL ,
`state` VARCHAR( 30 ) NOT NULL ,
`city` VARCHAR( 30 ) NOT NULL ,
`contno` int( 20 ) NOT NULL ,
`emailid` VARCHAR( 30 ) NOT NULL ,
`gend` VARCHAR( 10 ) NOT NULL ,
PRIMARY KEY ( `uid` )
) ENGINE = InnoDB


-- 
-- Dumping data for table `final_preg`
-- 

INSERT INTO  `final_preg` (
`uid` ,`uname` ,`addr` ,`state` ,`city` ,`contno` ,`emailid` ,`gend`)
VALUES ('0001',  'shivani kaur',  'plot #12 aadarsh society,athwalines',  'Gujarat',  'surat',  '123456789',  'shivani@gmail.com',  'female'
);

INSERT INTO  `final_preg` (
`uid` ,`uname` ,`addr` ,`state` ,`city` ,`contno` ,`emailid` ,`gend`)
VALUES ('0002',  'shilpa jain',  'plot #12 aashirwaad society,washi',  'Maharahstra',  'andheri',  '871545',  'shilpa@gmail.com',  'female'
);



-- 
-- Table structure for table `gov_hreg`
-- 

CREATE TABLE `gov_hreg` (
`reg_no` bigint( 16 ) NOT NULL ,
`hosname` VARCHAR( 50 ) NOT NULL ,
PRIMARY KEY ( `reg_no` )
) ENGINE = InnoDB


-- 
-- Dumping data for table `gov_hreg`
-- 

INSERT INTO gov_hreg(reg_no,hosname)
VALUES ('100001','hospital_1')

INSERT INTO gov_hreg(reg_no,hosname)
VALUES ('100002','hospital_2')

INSERT INTO gov_hreg(reg_no,hosname)
VALUES ('100003','hospital_3')

INSERT INTO gov_hreg(reg_no,hosname)
VALUES ('100004','hospital_4')

INSERT INTO gov_hreg(reg_no,hosname)
VALUES ('100005','hospital_5')


-- 
-- Table structure for table `final_treat`
-- 

CREATE TABLE `final_treat` (
uid bigint(16),hosname varchar(50),docname varchar(50),check_dt varchar(10),prob varchar(500),test varchar(250),report varchar(300),pres varchar(500)
) ENGINE = InnoDB


-- 
-- Dumping data for table `final_treat`
-- 

INSERT INTO final_treat(uid,hosname,docname,check_dt,prob,test,report,pres)
VALUES ('0004','hospital_2','Jay Patel','08/03/2016','viral','blood test','positive','paracetamol')

INSERT INTO
final_treat(uid,hosname,docname,check_dt,prob,test,report,pres)
VALUES ('0004','hospital_2','JAY Patel','12/06/2016','stomach ache','sonography','positive','unasyn')



-- 
-- Table structure for table `cont`
-- 

CREATE TABLE `cont` (
name varchar(50),city varchar(25),state varchar(25),cno bigint(12),email varchar(50),comt varchar(300)
) ENGINE = InnoDB
