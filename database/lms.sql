-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2024 at 03:29 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8 */
;
--
-- Database: `lms`
--
-- --------------------------------------------------------
--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `princ_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `contactno` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `utype` varchar(200) NOT NULL,
  `design` varchar(200) NOT NULL,
  `addrs` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`princ_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 2;
--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (
    `princ_id`,
    `Log_Id`,
    `name`,
    `contactno`,
    `email`,
    `password`,
    `date`,
    `utype`,
    `design`,
    `addrs`,
    `photo`
  )
VALUES (
    1,
    'AKL0021542786003',
    'Raj',
    '9847169014',
    'lms@gmail.com',
    'lms',
    '2022-02-02',
    'Admin',
    'Admin',
    'PALAKKAD',
    'a.jpg'
  );
-- --------------------------------------------------------
--
-- Table structure for table `chatm`
--

CREATE TABLE IF NOT EXISTS `chatm` (
  `cht_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` text NOT NULL,
  `sname` text NOT NULL,
  `smessage` text NOT NULL,
  `sdatetime` text NOT NULL,
  `sphoto` text NOT NULL,
  `receiver_id` text NOT NULL,
  `rname` text NOT NULL,
  `rmessage` text NOT NULL,
  `rdatetime` text NOT NULL,
  `rphoto` text NOT NULL,
  `chtsr_id` text NOT NULL,
  PRIMARY KEY (`cht_id`)
) ENGINE = InnoDB DEFAULT CHARSET = latin1 AUTO_INCREMENT = 19;
--
-- Dumping data for table `chatm`
--

INSERT INTO `chatm` (
    `cht_id`,
    `sender_id`,
    `sname`,
    `smessage`,
    `sdatetime`,
    `sphoto`,
    `receiver_id`,
    `rname`,
    `rmessage`,
    `rdatetime`,
    `rphoto`,
    `chtsr_id`
  )
VALUES (
    1,
    'STP7125642A',
    'RAS',
    'Hi',
    '03-02 16:03:12',
    'images.jfif',
    'STP7125642',
    'SHAMEER',
    'hi',
    '03-02 16:03:12',
    'images.jfif',
    'STP7125642'
  ),
  (
    2,
    'STP7125642A',
    'RAS',
    'Hi',
    '03-02 16:03:12',
    'images.jfif',
    'STP7125642',
    'SHAMEER',
    'hi',
    '03-02 16:03:04',
    'images.jfif',
    'STP7125642'
  ),
  (
    3,
    'STP7125642A',
    'RAS',
    'Welcome to palakad',
    '03-02 16:03:12',
    'images.jfif',
    'STP7125642',
    'SHAMEER',
    'hi',
    '03-02 16:03:09',
    'images.jfif',
    'STP7125642'
  ),
  (
    4,
    'STP7125642A',
    'RAS',
    'Hi',
    '03-02 16:03:12',
    'images.jfif',
    'STP7125642',
    'SHAMEER',
    'rtu',
    '03-02 16:03:04',
    'images.jfif',
    'STP7125642'
  ),
  (
    7,
    'STP7125642A',
    '',
    '',
    '',
    '',
    'STP7125642',
    'SHAMEER',
    'welcome',
    '03-02 16:03:39',
    'images.jfif',
    'STP7125642'
  ),
  (
    8,
    'STP7125642A',
    '',
    '',
    '',
    '',
    'STP7125642',
    'SHAMEER',
    'welcome',
    '03-02 16:03:16',
    'images.jfif',
    'STP7125642'
  ),
  (
    9,
    'STP7125642A',
    '',
    '',
    '',
    '',
    'STP7125642',
    'SHAMEER',
    'hi',
    '03-03 01:03:22',
    'images.jfif',
    'STP7125642'
  ),
  (
    10,
    'STP7125642A',
    '',
    '',
    '',
    '',
    'STP7125642',
    'SHAMEER',
    'ss',
    '03-03 01:03:30',
    'images.jfif',
    'STP7125642'
  ),
  (
    11,
    'STP7125642A',
    '',
    '',
    '',
    '',
    'STP7125642',
    'SHAMEER',
    'wsfasfasfsa',
    '03-03 01:03:35',
    'images.jfif',
    'STP7125642'
  ),
  (
    12,
    'STP7125642A',
    '',
    '',
    '',
    '',
    'STP7125642',
    'SHAMEER',
    'ss',
    '03-03 01:03:28',
    'images.jfif',
    'STP7125642'
  ),
  (
    13,
    'STP7125642A',
    '',
    '',
    '',
    '',
    'STP7125642',
    'SHAMEER',
    'sdgsdg',
    '03-03 01:03:54',
    'images.jfif',
    'STP7125642'
  ),
  (
    14,
    'STP7125642A',
    '',
    '',
    '',
    '',
    'STP7125642',
    'SHAMEER',
    'welcome',
    '03-03 01:03:25',
    'images.jfif',
    'STP7125642'
  ),
  (
    15,
    'STP7125642A',
    '',
    '',
    '',
    '',
    'STP7125642',
    'SHAMEER',
    'welcome',
    '03-03 01:03:20',
    'images.jfif',
    'STP7125642'
  ),
  (
    16,
    'STP7125642A',
    '',
    '',
    '',
    '',
    'STP7125642',
    'SHAMEER',
    'hi',
    '01-29 01:01:00',
    'images.jfif',
    'STP7125642'
  ),
  (
    17,
    'STP7125642A',
    '',
    '',
    '',
    '',
    'STP7125642',
    'SHAMEER',
    'yy',
    '02-19 14:02:13',
    'images.jfif',
    'STP7125642'
  ),
  (
    18,
    'STP7125642A',
    '',
    '',
    '',
    '',
    'STP7125642A',
    'SHAMEER',
    's',
    '02-19 15:02:45',
    'images.jfif',
    'STP7125642A'
  );
-- --------------------------------------------------------
--
-- Table structure for table `contest`
--

CREATE TABLE IF NOT EXISTS `contest` (
  `cnt_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `sname` varchar(200) NOT NULL,
  `qstn` varchar(200) NOT NULL,
  `opta` varchar(200) NOT NULL,
  `optb` varchar(200) NOT NULL,
  `optc` varchar(200) NOT NULL,
  `optd` varchar(200) NOT NULL,
  `answr` varchar(200) NOT NULL,
  `mrk` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `photo` text NOT NULL,
  `qno` varchar(200) NOT NULL,
  PRIMARY KEY (`cnt_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 6;
--
-- Dumping data for table `contest`
--

INSERT INTO `contest` (
    `cnt_id`,
    `Log_Id`,
    `sname`,
    `qstn`,
    `opta`,
    `optb`,
    `optc`,
    `optd`,
    `answr`,
    `mrk`,
    `date`,
    `photo`,
    `qno`
  )
VALUES (
    1,
    'MCY-594927653',
    'C',
    'Who is the first prime ninister',
    'SFAS',
    'SS',
    'SS',
    'SS',
    'A',
    '23',
    '2024-02-19',
    '3.jpg',
    '1'
  ),
  (
    2,
    'MCY-594927653',
    'C',
    'HI',
    'A',
    'A',
    'A',
    'A',
    'B',
    '23',
    '2024-02-19',
    'bg.jpg',
    '2'
  ),
  (
    3,
    'MCY-594927653',
    'C',
    'HI',
    'A',
    'A',
    'A',
    'A',
    'B',
    '23',
    '2024-02-19',
    'bg.jpg',
    '3'
  ),
  (
    4,
    'MCY-594927653',
    'C',
    'HI',
    'A',
    'A',
    'A',
    'A',
    'B',
    '23',
    '2024-02-19',
    'bg.jpg',
    '4'
  ),
  (
    5,
    'MCY-594927653',
    'C',
    'HI',
    'A',
    'A',
    'A',
    'A',
    'B',
    '23',
    '2024-02-19',
    'bg.jpg',
    '5'
  );
-- --------------------------------------------------------
--
-- Table structure for table `contestattend`
--

CREATE TABLE IF NOT EXISTS `contestattend` (
  `cnt_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `sname` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mrk` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `photo` text NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`cnt_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 2;
--
-- Dumping data for table `contestattend`
--

INSERT INTO `contestattend` (
    `cnt_id`,
    `Log_Id`,
    `sname`,
    `name`,
    `mrk`,
    `date`,
    `photo`,
    `status`
  )
VALUES (
    1,
    'STP7125642A',
    'C',
    'SHAMEER',
    '5',
    '2024-02-19',
    'images.jfif',
    'Win'
  );
-- --------------------------------------------------------
--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `subjct` varchar(200) NOT NULL,
  `descp` text NOT NULL,
  `date` date NOT NULL,
  `reply` text NOT NULL,
  `rdate` date NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE = InnoDB DEFAULT CHARSET = latin1 AUTO_INCREMENT = 15;
--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (
    `msg_id`,
    `Log_Id`,
    `name`,
    `subjct`,
    `descp`,
    `date`,
    `reply`,
    `rdate`
  )
VALUES (
    1,
    'MCY50506109',
    'Meena jose komban',
    'sss',
    'hghjgjgj',
    '2022-04-10',
    'ssdgsdg',
    '2023-02-03'
  ),
  (
    2,
    'YVK5822219592',
    'Meena jose komban',
    'hi',
    'hi',
    '2022-04-10',
    'hdfhdfh',
    '2023-02-17'
  ),
  (
    3,
    'MCY50506109',
    'RAS',
    'ss',
    'ss',
    '2023-02-02',
    'sss',
    '2023-02-17'
  ),
  (
    4,
    'MCY50506109',
    'RAS',
    'ss',
    'ss',
    '2023-02-02',
    'rturtu',
    '2023-03-05'
  ),
  (
    5,
    'MCY50506109',
    'RAS',
    'ss',
    'ss',
    '2023-02-02',
    'Pending',
    '0000-00-00'
  ),
  (
    6,
    'YVK5822219592',
    'SAJI',
    'ss',
    'sss',
    '2023-02-03',
    'Pending',
    '0000-00-00'
  ),
  (
    7,
    'YVK423070048',
    'SHAMS',
    'rdyre',
    'eryer',
    '2023-02-03',
    'Pending',
    '0000-00-00'
  ),
  (
    8,
    'MCY50506109',
    'RAS',
    'safasf',
    'asfsaf',
    '2023-02-17',
    'Pending',
    '0000-00-00'
  ),
  (
    9,
    'YVK5822219592',
    'SAJI',
    'rturtu',
    'asfaf',
    '2023-02-17',
    'Pending',
    '0000-00-00'
  ),
  (
    10,
    'YVK5822219592LK',
    'SAJI',
    'gsdg',
    'sdgsd',
    '2023-02-17',
    'Pending',
    '0000-00-00'
  ),
  (
    11,
    'STP7125642',
    'SHAMEER',
    'ss',
    'sssss',
    '2023-02-21',
    'Pending',
    '0000-00-00'
  ),
  (
    12,
    'STP7125642',
    'SHAMEER',
    'rtu',
    'rtu',
    '2023-03-02',
    'Pending',
    '0000-00-00'
  ),
  (
    13,
    'STP7125642',
    'SHAMEER',
    'welcome',
    'hi',
    '2023-03-02',
    'Pending',
    '0000-00-00'
  ),
  (
    14,
    'STP7125642',
    'SHAMEER',
    'rtu',
    'rtu',
    '2024-02-19',
    'Pending',
    '0000-00-00'
  );
-- --------------------------------------------------------
--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `not_id` int(11) NOT NULL AUTO_INCREMENT,
  `subjct` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `tme` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  PRIMARY KEY (`not_id`)
) ENGINE = InnoDB DEFAULT CHARSET = latin1 AUTO_INCREMENT = 4;
--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`not_id`, `subjct`, `date`, `tme`, `descp`)
VALUES (1, 'hi', '2024-02-07', '08:33:15 PM', 'ssss'),
  (2, 'hi', '2024-02-07', '08:34:04 PM', 'ssss'),
  (3, 'hi', '2024-02-07', '08:34:13 PM', 'ssss');
-- --------------------------------------------------------
--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teach_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date NOT NULL,
  `quali` varchar(200) NOT NULL,
  `expr` varchar(20) NOT NULL,
  `phone1` varchar(200) NOT NULL,
  `phone2` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  `addrs` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `pcode` varchar(200) NOT NULL,
  `depart` varchar(200) NOT NULL,
  `desig` varchar(200) NOT NULL,
  `jdate` date NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `about` text NOT NULL,
  `utype` varchar(200) NOT NULL,
  PRIMARY KEY (`teach_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 6;
--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (
    `teach_id`,
    `Log_Id`,
    `name`,
    `sex`,
    `age`,
    `dob`,
    `quali`,
    `expr`,
    `phone1`,
    `phone2`,
    `email`,
    `photo`,
    `addrs`,
    `city`,
    `state`,
    `pcode`,
    `depart`,
    `desig`,
    `jdate`,
    `password`,
    `date`,
    `about`,
    `utype`
  )
VALUES (
    5,
    'MCY-594927653',
    'Sr Jainy Jacob',
    'Female',
    48,
    '2002-01-01',
    'MCA',
    '15',
    '8590438749',
    '8590438749',
    'jainyjacob89@gmail.com',
    'a.jpg',
    'Mercy College',
    'Palakkad',
    'Kerala',
    '678504',
    'BCA',
    'Assistant Professor',
    '2023-02-26',
    '789//jainy',
    '2023-02-26',
    'Assistant Professor',
    'Hod'
  );
-- --------------------------------------------------------
--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `cntno` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  `addr` text NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `utype` varchar(200) NOT NULL,
  `depart` varchar(200) NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 5;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (
    `usr_id`,
    `Log_Id`,
    `name`,
    `sex`,
    `age`,
    `cntno`,
    `email`,
    `photo`,
    `addr`,
    `password`,
    `date`,
    `utype`,
    `depart`
  )
VALUES (
    3,
    'STP7125642',
    'SHAMEER',
    'Male',
    25,
    '9847169014',
    'sham@gmail.com',
    'images.jfif',
    'Palakkad',
    '123',
    '2023-02-19',
    'Cordinator',
    'BCA'
  ),
  (
    4,
    'STP7125642A',
    'SHAMEER',
    'Male',
    25,
    '9847169014',
    'ras@gmail.com',
    'images.jfif',
    'Palakkad',
    '123',
    '2023-02-19',
    'User',
    'BCA'
  );
-- --------------------------------------------------------
--
-- Table structure for table `user_cmnt`
--

CREATE TABLE IF NOT EXISTS `user_cmnt` (
  `cmnt_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  `cname` text NOT NULL,
  `descp` text NOT NULL,
  `date` date NOT NULL,
  `cmntid` varchar(200) NOT NULL,
  PRIMARY KEY (`cmnt_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 39;
--
-- Dumping data for table `user_cmnt`
--

INSERT INTO `user_cmnt` (
    `cmnt_id`,
    `Log_Id`,
    `name`,
    `sex`,
    `photo`,
    `cname`,
    `descp`,
    `date`,
    `cmntid`
  )
VALUES (
    34,
    'STP7125642',
    'SHAMEER',
    'Male',
    'images.jfif',
    'C',
    'hi',
    '2024-02-17',
    'CM385221'
  ),
  (
    35,
    'STP7125642',
    'SHAMEER',
    'Male',
    'images.jfif',
    'C',
    'ss',
    '2024-02-17',
    'CM302423'
  ),
  (
    36,
    'STP7125642',
    'SHAMEER',
    'Male',
    'images.jfif',
    'rturt',
    'hi',
    '2024-02-17',
    'CM363381'
  ),
  (
    37,
    'STP7125642A',
    'SHAMEER',
    'Male',
    'images.jfif',
    'rturt',
    's',
    '2024-02-19',
    'CM363381'
  ),
  (
    38,
    'STP7125642A',
    'SHAMEER',
    'Male',
    'images.jfif',
    'C',
    'tt',
    '2024-02-19',
    'CM385221'
  );
-- --------------------------------------------------------
--
-- Table structure for table `user_post`
--

CREATE TABLE IF NOT EXISTS `user_post` (
  `pst_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `cntno` varchar(20) NOT NULL,
  `photo` text NOT NULL,
  `cname` text NOT NULL,
  `subj` text NOT NULL,
  `ctgry` text NOT NULL,
  `descp` longtext NOT NULL,
  `file` text NOT NULL,
  `date` date NOT NULL,
  `status` varchar(200) NOT NULL,
  `ptype` varchar(200) NOT NULL,
  `cmntid` varchar(200) NOT NULL,
  `depart` varchar(200) NOT NULL,
  PRIMARY KEY (`pst_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 AUTO_INCREMENT = 34;
--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (
    `pst_id`,
    `Log_Id`,
    `name`,
    `sex`,
    `age`,
    `cntno`,
    `photo`,
    `cname`,
    `subj`,
    `ctgry`,
    `descp`,
    `file`,
    `date`,
    `status`,
    `ptype`,
    `cmntid`,
    `depart`
  )
VALUES (
    26,
    'STP7125642',
    'SHAMEER',
    'Male',
    25,
    '9847169014',
    'images.jfif',
    'C',
    'C',
    'dfhdf',
    '<p>WELCOME TO PALAKAD</p>',
    '',
    '2024-02-07',
    'ACCEPT',
    'Material',
    'CM385221',
    'BCA'
  ),
  (
    27,
    'STP7125642A',
    'SHAMEER',
    'Male',
    25,
    '9847169014',
    'images.jfif',
    'C',
    'C',
    'C',
    'sss',
    'pedestrians.mp4',
    '2024-02-07',
    'Accept',
    'Video',
    'CM302423',
    'BCA'
  ),
  (
    29,
    'STP7125642',
    'SHAMEER',
    'Male',
    25,
    '9847169014',
    'images.jfif',
    'rturt',
    'urtu',
    'rturtu',
    'rturturturtu',
    'educonnect.pdf',
    '2024-02-21',
    'Accept',
    'Pdf',
    'CM363381',
    'BCA'
  ),
  (
    31,
    'STP7125642A',
    'SHAMEER',
    'Male',
    25,
    '9847169014',
    'images.jfif',
    'C',
    'C',
    'dfhdf',
    '<p>WELCOME TO PALAKAD</p>',
    '',
    '2024-02-07',
    'ACCEPT',
    'Material',
    'CM385221',
    'BCA'
  ),
  (
    32,
    'STP7125642',
    'SHAMEER',
    'Male',
    25,
    '9847169014',
    'images.jfif',
    'C',
    'C',
    'C',
    'sss',
    'pedestrians.mp4',
    '2024-02-07',
    'ACCEPT',
    'Video',
    'CM302423',
    'BCA'
  ),
  (
    33,
    'STP7125642A',
    'SHAMEER',
    'Male',
    25,
    '9847169014',
    'images.jfif',
    'rturt',
    'urtu',
    'rturtu',
    'rturturturtu',
    'educonnect.pdf',
    '2024-02-21',
    'Accept',
    'Pdf',
    'CM363381',
    'BCA'
  );
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;