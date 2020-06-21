-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 21, 2020 at 04:33 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conge_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `demande_conge`
--

DROP TABLE IF EXISTS `demande_conge`;
CREATE TABLE IF NOT EXISTS `demande_conge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `status` tinyint(4) DEFAULT '2',
  `comment` mediumtext NOT NULL,
  `User_id` int(11) NOT NULL,
  `type_conge` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkIdx_39` (`User_id`),
  KEY `fkIdx_48` (`type_conge`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demande_conge`
--

INSERT INTO `demande_conge` (`id`, `from_date`, `to_date`, `created_at`, `status`, `comment`, `User_id`, `type_conge`) VALUES
(7, '2020-06-09', '2020-06-10', '2020-06-18 22:21:58', 0, 'some reason de', 10, 4),
(2, '2020-06-22', '2020-06-30', '2020-06-18 13:51:26', 1, 'i\'m sick i need to be home for the time being', 3, 3),
(13, '2020-07-04', '2020-07-07', '2020-06-20 12:00:09', 1, 'conge exceptionnel thanks', 11, 2),
(4, '2020-03-01', '2020-03-15', '2020-06-18 14:08:42', 1, 'fffff', 10, 1),
(5, '2020-06-24', '2020-07-07', '2020-06-18 19:14:03', 0, 'pregnanet\r\n', 10, 4),
(12, '2021-02-01', '2021-02-06', '2020-06-20 11:44:12', 2, 'my daughter\'s wedding ', 2, 2),
(11, '2020-08-12', '2020-08-28', '2020-06-20 11:43:18', 1, 'A certain reason ', 2, 1),
(14, '2020-08-01', '2020-09-30', '2020-06-20 12:01:00', 0, 'thank you for understanding', 10, 4),
(15, '2020-10-02', '2020-11-04', '2020-06-20 12:02:04', 2, 'yearly time of', 9, 1),
(16, '2020-06-29', '2020-06-30', '2020-06-20 12:02:36', 1, 'just a test leave', 9, 5),
(17, '2021-06-05', '2021-07-15', '2020-06-20 12:03:11', 2, 'just filling db we leaves', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month` date NOT NULL,
  `gross_salary` float NOT NULL,
  `leave_days` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkIdx_60` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(45) NOT NULL,
  `service_shortname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_name`, `service_shortname`) VALUES
(1, ' Human resources ', 'HR'),
(2, 'Information Technology', 'IT'),
(3, 'Operation', 'OP'),
(4, 'Product design', 'PD'),
(5, 'web development', 'WD'),
(6, ' meddep ', 'mdpp'),
(9, 'service p', 'sp');

-- --------------------------------------------------------

--
-- Table structure for table `type_conge`
--

DROP TABLE IF EXISTS `type_conge`;
CREATE TABLE IF NOT EXISTS `type_conge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conge_name` varchar(50) NOT NULL,
  `conge_label` varchar(45) NOT NULL,
  `solde_conge` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_conge`
--

INSERT INTO `type_conge` (`id`, `conge_name`, `conge_label`, `solde_conge`) VALUES
(1, '  Conge annuel ', 'PTO ( paid time off )', 21),
(2, ' Conge exceptionnel ', 'exceptionnel', 10),
(3, ' Conge de maladie  ', 'sante', 20),
(4, ' Maternite', 'Maternite', 14),
(5, 'Leave test', 'leave label', 23);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `cin` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `role` varchar(45) NOT NULL,
  `salary` float DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `sexe` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sold_conge` mediumint(100) DEFAULT NULL,
  `photo_profile` varchar(200) NOT NULL,
  `service_id` int(11) NOT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fkIdx_28` (`service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `surname`, `cin`, `tel`, `role`, `salary`, `hire_date`, `sexe`, `birthday`, `sold_conge`, `photo_profile`, `service_id`, `status`) VALUES
(77, 'admin', '38e402450eae449f64174a96cd9b8417', 'admin@congeapp.com', 'Med', 'Mouiguina', 'EC51160', '066-658-2020', 'Sytem Admin', 21000000, '2020-06-17', 'Male', '1997-10-15', 50, 'profile-pic.jpg', 1, 1),
(2, 'Meded', '25d55ad283aa400af464c76d713c07ad', 'med@gmail.com', 'Meded', 'oppo', 'EC52200', '066-658-2020', 'web developper', 11000, '2020-06-17', 'Male', '1997-10-15', 20, '2.jpg', 2, 1),
(3, 'Bruce', '25d55ad283aa400af464c76d713c07ad', 'Bean@congeapp.com', 'Bruce', 'Bean', 'EC52200', '066-658-2020', 'web developper', 11000, '2020-06-17', 'Male', '1997-10-15', 20, '3.jpg', 5, 0),
(4, 'Khulus', '25d55ad283aa400af464c76d713c07ad', 'Taym@congeapp.com', 'Khulus', 'Taym', 'EC52200', '066-658-2020', 'Hr manager', 11000, '2012-03-07', 'Male', '1997-10-28', 20, '4.jpg', 1, 1),
(9, 'Wafiqah', '25d55ad283aa400af464c76d713c07ad', 'Karam@congeapp.com', 'Wafiqah', 'Karam', 'EC52200', '066-658-5050', 'Operation specialist', 22000, '2021-05-24', 'Female', '1993-09-16', 20, '5.jpg', 3, 0),
(10, 'Zanubiya', '25d55ad283aa400af464c76d713c07ad', 'Zanubiya@congeapp.com', 'Ghazal', 'Zanubiya', 'EC52244', '066-658-7272', 'product designer', 15000, '2020-08-05', 'Female', '2002-09-15', 20, '10.jpg', 4, 1),
(11, 'Faruq', '25d55ad283aa400af464c76d713c07ad', 'Faruq@congeapp.com', 'Hanif', 'Faruq', 'EC52200', '066-658-2020', 'backend developper', 176000, '2013-04-17', 'Male', '1997-10-15', 20, '9.jpg', 5, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
