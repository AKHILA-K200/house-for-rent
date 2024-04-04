-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2022 at 06:51 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `houseforrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `no` varchar(15) NOT NULL,
  `bank` varchar(35) NOT NULL,
  `acc_name` varchar(35) NOT NULL,
  `acc_number` varchar(35) NOT NULL,
  `acc_type` varchar(35) NOT NULL,
  `branch` varchar(35) NOT NULL,
  `isc` varchar(35) NOT NULL,
  `baddress` varchar(250) DEFAULT NULL,
  `amount` int(10) DEFAULT 0,
  `deposit` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`no`, `bank`, `acc_name`, `acc_number`, `acc_type`, `branch`, `isc`, `baddress`, `amount`, `deposit`) VALUES
('1', 'SBI', 'admin', '123456789', 'savings', 'Keralassery', '0000724', 'keralassery palakkad', 0, NULL),
('oid12', 'SBI', 'vava', '21312435443', 'single', 'ernakulam', 'SBIN800', 'dfdfdfsdfsdfd', 0, NULL),
('oid2', 'SBI', 'Akssa P a', '45433424544', 'savings', 'Kolanchery', 'SBIN000434', 'Kolanchery,Ernakulam', 0, '10000'),
('oid3', 'Federal', 'Anu s', '23565678787', 'Savings', 'Mahilalayam', 'FDR54546576', 'Mahilalayam', 0, NULL),
('oid5', '', '', '', '', '', '', '', 0, NULL),
('oid6', 'SBI', 'Ajay', '675435767', 'Current', 'Ernakulam', 'SBIN0007654', 'Kalamassery,Ernakulam', 0, NULL),
('oid7', 'Federal', 'remya', '34455898236', 'Savings', 'Pachalam', 'FDR54546576', 'pachalam,Ernakulam', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `adno` int(10) NOT NULL,
  `no` varchar(15) DEFAULT NULL,
  `hno` int(10) DEFAULT NULL,
  `hname` varchar(35) DEFAULT NULL,
  `section` varchar(5) DEFAULT NULL,
  `vardno` varchar(8) DEFAULT NULL,
  `sname` varchar(30) DEFAULT NULL,
  `village` varchar(35) DEFAULT NULL,
  `city` varchar(35) DEFAULT NULL,
  `type` int(3) DEFAULT NULL,
  `disno` int(3) NOT NULL,
  `pcode` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`adno`, `no`, `hno`, `hname`, `section`, `vardno`, `sname`, `village`, `city`, `type`, `disno`, `pcode`) VALUES
(1, 'oid3', 345, 'anuhome', 'B', '6', 'thuruth palam', 'mahilayam', 'mahilalayam', 2, 7, 683104),
(1, 'oid6', 125, 'Ajay house', 'C', '7', 'Industrial road', 'kalamassery', 'Kalamassery', 3, 7, 683109),
(1, 'oid7', 231, 'Pachala,m,Ernakulam', 'A', '4', 'Pachalam', 'Pachalam', 'Ernakulam', 3, 7, 234134),
(1, 'oid12', 123, 'VV. DC jff', 'A', '5', '', '', 'Ernakulam', 1, 1, 683109);

-- --------------------------------------------------------

--
-- Table structure for table `advdate`
--

CREATE TABLE `advdate` (
  `no` varchar(15) NOT NULL,
  `num` int(11) NOT NULL,
  `joining` datetime DEFAULT NULL,
  `joinexp` datetime DEFAULT NULL,
  `leaving` datetime DEFAULT NULL,
  `leaveexp` datetime DEFAULT NULL,
  `rentdate` datetime DEFAULT NULL,
  `depdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advdate`
--

INSERT INTO `advdate` (`no`, `num`, `joining`, `joinexp`, `leaving`, `leaveexp`, `rentdate`, `depdate`) VALUES
('oid2', 3, '2019-08-10 00:00:00', '2020-07-10 00:00:00', NULL, NULL, '2019-12-25 00:00:00', '2019-11-20 02:35:25'),
('oid5', 13, '2019-11-21 00:00:00', '2020-10-21 00:00:00', NULL, NULL, NULL, '2022-07-10 14:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `num` int(15) NOT NULL,
  `no` varchar(15) NOT NULL,
  `oname` varchar(35) DEFAULT NULL,
  `typeof` int(5) DEFAULT NULL,
  `advno` int(10) NOT NULL,
  `ora` varchar(3) DEFAULT NULL,
  `nofbatch` int(10) NOT NULL,
  `bhk` int(5) NOT NULL,
  `forb` varchar(5) DEFAULT NULL,
  `sqrft` varchar(20) DEFAULT NULL,
  `facing` varchar(10) DEFAULT NULL,
  `fy` varchar(3) DEFAULT NULL,
  `flatcno` varchar(12) DEFAULT NULL,
  `ebc` varchar(12) DEFAULT NULL,
  `tax` varchar(12) DEFAULT NULL,
  `rent` int(15) NOT NULL,
  `floor` int(6) DEFAULT NULL,
  `adno` int(11) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `pkno` int(5) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `loan` varchar(3) DEFAULT NULL,
  `autname` varchar(30) DEFAULT NULL,
  `autdob` date DEFAULT NULL,
  `autcity` varchar(25) DEFAULT NULL,
  `autcno` varchar(12) DEFAULT NULL,
  `autpin` varchar(12) DEFAULT NULL,
  `autdesg` varchar(35) DEFAULT NULL,
  `autemail` varchar(35) DEFAULT NULL,
  `dis` int(4) DEFAULT NULL,
  `relation` varchar(12) DEFAULT NULL,
  `cno` varchar(15) DEFAULT NULL,
  `apornot` int(3) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`num`, `no`, `oname`, `typeof`, `advno`, `ora`, `nofbatch`, `bhk`, `forb`, `sqrft`, `facing`, `fy`, `flatcno`, `ebc`, `tax`, `rent`, `floor`, `adno`, `year`, `pkno`, `description`, `loan`, `autname`, `autdob`, `autcity`, `autcno`, `autpin`, `autdesg`, `autemail`, `dis`, `relation`, `cno`, `apornot`) VALUES
(12, 'oid3', 'Anu', 1, 1, 'o', 7, 3, 'f', '2500', 'north', 'ful', '8976543456', 'EBC656576', 'r345456778', 7000, 2, 1, '2003', 4, 'good flat', '1', 'Anusree', '1995-12-11', 'Cusat', '3456789230', '683109', 'Accountant', 'anusreea@gmail.com', 7, 'sister', 'oid4', 1),
(13, 'oid6', 'Ajay', 3, 1, 'o', 3, 3, 'b', '2500', 'east', '3', '', 'Ebi65655', 'fgffgcg', 6000, 2, 1, '2001', 4, 'Good home', '2', 'Immanuel', '1999-11-09', 'Ernakulam', '7736696091', '678543', 'Computer techie', 'imms123@gmail.com', 7, 'friend', 'oid5', 1),
(14, 'oid7', 'Remya', 3, 1, 'o', 5, 3, 'fb', '1500', 'south', 'sem', '', 'EBIN3u874878', 'eyttyt673673', 6000, 0, 1, '2002', 4, 'near road side.', '1', 'Indu', '2001-04-04', 'Ernakulam', '6677668823', '678543', 'Biotrchie', 'indu123@gmail.com', 7, 'sister', NULL, 1),
(18, 'oid12', '', 1, 1, 'o', 0, 2, '', '1600', '', 'not', '09745395245', '', '', 0, 0, 1, '', 2, '', '1', 'Akhila K', '2022-07-07', 'Ernakulam', '9847562565', '683109', '', 'akhiakhi0566@gmail.com', 1, '', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `disno` int(3) NOT NULL,
  `disname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`disno`, `disname`) VALUES
(1, 'tivandrum'),
(2, 'Kollam'),
(3, 'pathanamthitta'),
(4, 'Alappuzha'),
(5, 'Kottayam'),
(6, 'Idukki'),
(7, 'Ernakulam'),
(8, 'Thrissur'),
(9, 'Palakkad'),
(10, 'Malappuram'),
(11, 'Kozhikkode'),
(12, 'Vayanad'),
(13, 'Kannur'),
(14, 'Kasargod');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `no` varchar(15) DEFAULT NULL,
  `slno` int(15) DEFAULT NULL,
  `fname` varchar(35) DEFAULT NULL,
  `fid` varchar(35) DEFAULT NULL,
  `fcno` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `num` int(15) NOT NULL,
  `img1` longtext DEFAULT NULL,
  `img2` longtext DEFAULT NULL,
  `img3` longtext DEFAULT NULL,
  `img4` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`num`, `img1`, `img2`, `img3`, `img4`) VALUES
(3, 'images/im5.png', NULL, NULL, NULL),
(13, 'images/hfr3.jpeg', NULL, NULL, NULL),
(5, 'hfr3.jpeg', NULL, NULL, NULL),
(14, 'images/image_5.jpg', NULL, NULL, NULL),
(18, 'images/im5.png', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `no` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT 'not null',
  `pasword` varchar(25) NOT NULL,
  `catno` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`no`, `username`, `pasword`, `catno`) VALUES
('1', 'admin', '9745395245', 1),
('oid1', 'akhi123@gmail.com', '9847562565', 2),
('oid10', 'vivu123@gmail.com', '7744000413', 3),
('oid11', 'nahala123@gmail.com', '2134618291', 3),
('oid12', 'am@gmail.com', '9876512340', 2),
('oid13', 'akhi1@gmail.com', '9112345678', 2),
('oid2', 'akssapa47@gmail.com', '9744742158', 3),
('oid3', 'anu123@gmail.com', '9744352686', 2),
('oid4', 'achu123@gmail.com', '1234567890', 3),
('oid5', 'farisa8281@gmail.com', '8086892154', 3),
('oid6', 'ajay123@gmail.com', '9249771155', 2),
('oid7', 'remya123@gmail.com', '9746493175', 2),
('oid8', 'krishna123@gmail.com', '7588445787', 2),
('oid9', 'bismi123@gmail.com', '7865934020', 2);

-- --------------------------------------------------------

--
-- Table structure for table `maintainance`
--

CREATE TABLE `maintainance` (
  `mid` int(15) NOT NULL,
  `num` int(15) DEFAULT NULL,
  `no` varchar(15) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `mcharge` int(10) DEFAULT NULL,
  `mdate` datetime DEFAULT current_timestamp(),
  `mcomplete` int(2) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintainance`
--

INSERT INTO `maintainance` (`mid`, `num`, `no`, `mname`, `mcharge`, `mdate`, `mcomplete`) VALUES
(9, 3, 'oid2', 'carpenter', 500, '2019-11-20 12:19:36', 1),
(10, 13, 'oid5', 'carpenter', 500, '2022-07-10 17:54:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notid` int(11) NOT NULL,
  `type` varchar(250) NOT NULL,
  `user` varchar(20) NOT NULL,
  `no` varchar(15) DEFAULT NULL,
  `advno` int(10) DEFAULT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0,
  `time` datetime DEFAULT current_timestamp(),
  `nottype` varchar(10) DEFAULT NULL,
  `ora` varchar(3) DEFAULT NULL,
  `ono` varchar(15) DEFAULT NULL,
  `count` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notid`, `type`, `user`, `no`, `advno`, `read`, `time`, `nottype`, `ora`, `ono`, `count`) VALUES
(1, 'Registration ', 'Akhila', 'oid1', NULL, 0, '2019-11-08 08:34:09', 'reg', 'o', NULL, '1'),
(2, 'advertisement creation of owner', 'Akhila', 'oid1', 1, 0, '2019-11-08 13:07:23', 'adv', 'o', NULL, '1'),
(12, 'Registration ', 'Akssa', 'oid2', NULL, 0, '2019-11-15 16:41:35', 'reg', 'r', NULL, '1'),
(13, ' Tenant is assigned ', 'Akssa', 'oid2', 3, 0, '2019-11-18 00:32:44', 'acc', 'r', 'oid1', '1'),
(14, 'Registration ', 'Anu ', 'oid3', NULL, 0, '2019-11-18 13:41:22', 'reg', 'o', NULL, '1'),
(15, 'Registration ', 'Achu', 'oid4', NULL, 0, '2019-11-18 13:41:47', 'reg', 'r', NULL, '1'),
(17, 'Registration ', 'Farisa', 'oid5', NULL, 0, '2019-11-18 13:43:30', 'reg', 'r', NULL, '1'),
(18, 'advertisement creation of owner', 'Anu ', 'oid3', 1, 0, '2019-11-18 14:12:39', 'adv', 'o', NULL, '1'),
(19, ' Tenant is assigned ', 'Achu', 'oid4', 12, 0, '2019-11-18 23:13:17', 'acc', 'r', 'oid3', NULL),
(20, ' deposit payment', 'Akssa', 'oid2', 1, 0, '2019-11-20 09:51:02', 'pay', 'r', 'oid1', NULL),
(21, 'Registration ', 'Ajay', 'oid6', NULL, 0, '2019-11-20 21:25:52', 'reg', 'o', NULL, '1'),
(22, 'advertisement creation of owner', 'Ajay', 'oid6', 1, 0, '2019-11-20 22:02:02', 'adv', 'o', NULL, '1'),
(23, 'Tenant is assigned', 'Farisa', 'oid5', 13, 0, '2019-11-21 01:48:21', 'acc', 'r', 'oid6', '1'),
(24, 'Registration ', 'Remya', 'oid7', NULL, 0, '2019-11-21 05:45:32', 'reg', 'o', NULL, '1'),
(25, 'Registration ', 'Krishna', 'oid8', NULL, 0, '2019-11-21 05:47:18', 'reg', 'o', NULL, '1'),
(26, 'Registration ', 'Bismi', 'oid9', NULL, 0, '2019-11-21 05:47:55', 'reg', 'o', NULL, '1'),
(27, 'Registration ', 'Vivu', 'oid10', NULL, 0, '2019-11-21 05:49:04', 'reg', 'r', NULL, '1'),
(28, 'Registration ', 'Nahala', 'oid11', NULL, 0, '2019-11-21 05:50:18', 'reg', 'r', NULL, '1'),
(29, 'advertisement creation of owner', 'Remya', 'oid7', 1, 0, '2019-11-21 06:47:48', 'adv', 'o', NULL, '1'),
(30, 'Registration ', 'ammu', 'oid12', NULL, 0, '2022-07-10 15:43:14', 'reg', 'o', NULL, '1'),
(31, 'Registration ', 'test', 'oid13', NULL, 0, '2022-07-10 15:52:46', 'reg', 'o', NULL, '1'),
(32, 'advertisement creation of owner', 'Akhila', 'oid1', 2, 0, '2022-07-10 16:26:17', 'adv', 'o', NULL, '1'),
(33, 'advertisement creation of owner', 'test', 'oid13', 1, 0, '2022-07-10 17:21:37', 'adv', 'o', NULL, '1'),
(34, 'advertisement creation of owner', 'ammu', 'oid12', 1, 0, '2022-07-10 17:32:28', 'adv', 'o', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `no` varchar(15) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `phoneno` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `dob` date DEFAULT NULL,
  `license` varchar(30) NOT NULL,
  `viterid` varchar(30) NOT NULL,
  `curaddress` varchar(350) DEFAULT NULL,
  `city` varchar(350) DEFAULT NULL,
  `disno` int(3) DEFAULT NULL,
  `pin` varchar(10) DEFAULT NULL,
  `desg` varchar(20) DEFAULT NULL,
  `ono` varchar(15) DEFAULT NULL,
  `ora` varchar(3) DEFAULT NULL,
  `num` int(15) DEFAULT NULL,
  `apornot` int(1) DEFAULT 0,
  `odate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`no`, `name`, `phoneno`, `email`, `dob`, `license`, `viterid`, `curaddress`, `city`, `disno`, `pin`, `desg`, `ono`, `ora`, `num`, `apornot`, `odate`) VALUES
('oid10', 'Vivu', '7744000413', 'vivu123@gmail.com', NULL, '', 'tghyyuy54j', NULL, NULL, NULL, NULL, NULL, NULL, 'r', NULL, 1, '2019-11-21 05:49:03'),
('oid11', 'Nahala', '2134618291', 'nahala123@gmail.com', NULL, 'ghjyuuju', '', NULL, NULL, NULL, NULL, NULL, NULL, 'r', NULL, 1, '2019-11-21 05:50:18'),
('oid12', 'ammu', '9876512340', 'am@gmail.com', '2022-07-01', '', '', 'VV. DC jff', 'Ernakulam', 1, '683109', '', NULL, 'o', NULL, 1, '2022-07-10 15:43:14'),
('oid2', 'Akssa', '9744742158', 'akssapa47@gmail.com', NULL, '', 'dfdsgrg', NULL, NULL, NULL, NULL, NULL, 'oid1', 'r', NULL, 1, '2019-11-19 22:07:44'),
('oid3', 'Anu ', '9744352686', 'anu123@gmail.com', '1999-10-10', '', '', 'mahilalayam', 'Aluva', NULL, 'o', 'Accountant', NULL, 'o', NULL, 1, '2019-11-19 22:07:44'),
('oid4', 'Achu', '1234567890', 'achu123@gmail.com', NULL, 'dsdddsdd', '', NULL, NULL, NULL, NULL, NULL, 'oid3', 'r', NULL, 1, '2019-11-19 22:07:44'),
('oid5', 'Farisa', '8086892154', 'farisa8281@gmail.com', NULL, '', 'dfdgghg', NULL, NULL, NULL, NULL, NULL, 'oid6', 'r', NULL, 1, '2019-11-19 22:07:44'),
('oid6', 'Ajay', '9249771155', 'ajay123@gmail.com', '2000-01-21', '', '', 'Chelakkad(h),Kalamassery', 'Kalamassery', NULL, 'o', 'Staff', NULL, 'o', NULL, 1, '2019-11-20 21:25:51'),
('oid7', 'Remya', '9746493175', 'remya123@gmail.com', '1999-01-11', '', '', 'Ernakulam', 'Ernakulam', 7, '324567', 'Techie', NULL, 'o', NULL, 1, '2019-11-21 05:45:32'),
('oid8', 'Krishna', '7588445787', 'krishna123@gmail.com', NULL, 'ytyujuy', '', NULL, NULL, NULL, NULL, NULL, NULL, 'o', NULL, 1, '2019-11-21 05:47:18'),
('oid9', 'Bismi', '7865934020', 'bismi123@gmail.com', NULL, 'hthtyty', '', NULL, NULL, NULL, NULL, NULL, NULL, 'o', NULL, 1, '2019-11-21 05:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `py`
--

CREATE TABLE `py` (
  `no` varchar(15) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `amt` varchar(15) DEFAULT NULL,
  `ton` varchar(15) DEFAULT NULL,
  `pdate` datetime DEFAULT NULL,
  `pid` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `py`
--

INSERT INTO `py` (`no`, `name`, `amt`, `ton`, `pdate`, `pid`) VALUES
('oid2', 'Akssa', '15000', 'oid1', '2019-11-20 02:35:25', 1),
('oid2', 'Akssa', '5000', 'oid1', '2019-11-20 03:20:24', 2),
('oid2', 'Akssa', '5000', 'oid1', '2019-11-20 03:23:03', 3),
('oid2', 'Akssa', '5000', 'oid1', '2019-11-20 03:35:33', 4),
('oid2', 'Akssa', '5000', 'oid1', '2019-11-20 03:36:11', 5);

-- --------------------------------------------------------

--
-- Table structure for table `typeofg`
--

CREATE TABLE `typeofg` (
  `type` int(3) NOT NULL DEFAULT 0,
  `typename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `typeofh`
--

CREATE TABLE `typeofh` (
  `typeof` int(5) NOT NULL DEFAULT 0,
  `tpfhtype` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typeofh`
--

INSERT INTO `typeofh` (`typeof`, `tpfhtype`) VALUES
(1, 'Flat'),
(2, 'House'),
(3, 'paying guest'),
(4, 'Commercial buiding'),
(5, 'Hostel');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `wid` int(15) NOT NULL,
  `wname` varchar(25) DEFAULT NULL,
  `wcno` int(15) DEFAULT NULL,
  `wcur` int(15) DEFAULT NULL,
  `mid` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`wid`, `wname`, `wcno`, `wcur`, `mid`) VALUES
(6, 'Adhars K', 10, 0, '0'),
(7, 'Akhila K', 10, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD KEY `type` (`type`),
  ADD KEY `disno` (`disno`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`num`),
  ADD KEY `adno` (`adno`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`disno`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `maintainance`
--
ALTER TABLE `maintainance`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notid`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`no`),
  ADD KEY `disno` (`disno`),
  ADD KEY `num` (`num`);

--
-- Indexes for table `py`
--
ALTER TABLE `py`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `typeofg`
--
ALTER TABLE `typeofg`
  ADD PRIMARY KEY (`type`),
  ADD UNIQUE KEY `typename` (`typename`);

--
-- Indexes for table `typeofh`
--
ALTER TABLE `typeofh`
  ADD PRIMARY KEY (`typeof`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `num` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `maintainance`
--
ALTER TABLE `maintainance`
  MODIFY `mid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `py`
--
ALTER TABLE `py`
  MODIFY `pid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `wid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
