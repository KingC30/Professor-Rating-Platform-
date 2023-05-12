--user_DK69815
--Gia Bao Vo
--FInal Project




-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--https://www.simplilearn.com/tutorials/php-tutorial/php-login-form
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 03:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `is4482019`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `contactus1`(
  `id` int(500) default null,
  `name` varchar(65)default null,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(65)default null,
  `message` varchar(65)default null,
)


CREATE TABLE IF NOT EXISTS `professor` (
  `pid` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `pname` varchar(300) NOT NULL,
  `pemail` varchar(300) NOT NULL,
  `pcourse` varchar(100) NOT NULL,
  `puniversity` varchar(30) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `tblrating` (
  `rid` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(6) NOT NULL,
  `rcomments` varchar(500) NOT NULL,
  `rdate` date DEFAULT NULL,
  `rrating` int(2) DEFAULT NULL,
  `rdifficulty` int(2) DEFAULT NULL,
  `rblank` varchar(500),
  PRIMARY KEY (`rid`), foeriegn key(pid)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `tblrating`
ADD rcourse varchar(100) NOT NULL,;

ALTER TABLE `tblrating`
ADD rtag varchar(200) NOT NULL,;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) DEFAULT NULL ,
  `username` varchar(65) DEFAULT NULL,
  `password` varchar(65) DEFAULT NULL,
  `name`varchar(65) default null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `user` (`id`, `username`, `password`,`Name`) VALUES
(1, 'turbo', 'turbo',`Bao Vo`),
(2, 'test', 'test',`test`),
(5, 'banana', 'banana',`Rana Odeh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--https://www.simplilearn.com/tutorials/php-tutorial/php-login-form
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 03:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `is4482019`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `contactus1`(
  `id` int(500) UNSIGNED default null,
  `name` varchar(65)default null,
  `date` datetime DEFAULT NULL,
  `country` varchar(65)default null,
  `email` varchar(65)default null,
  `subject` varchar(65)default null,
  `message` varchar(65)default null,
)


CREATE TABLE IF NOT EXISTS `professor` (
  `pid` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `pname` varchar(300) NOT NULL,
  `pemail` varchar(300) NOT NULL,
  `pcourse` varchar(100) NOT NULL,
  `puniversity` varchar(30) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `tblrating` (
  `rid` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(6) NOT NULL,
  `rcomments` varchar(500) NOT NULL,
  `rdate` date DEFAULT NULL,
  `rrating` int(2) DEFAULT NULL,
  `rdifficulty` int(2) DEFAULT NULL,
  `rblank` varchar(500),
  PRIMARY KEY (`rid`), foeriegn key(pid)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) DEFAULT NULL ,
  `username` varchar(65) DEFAULT NULL,
  `password` varchar(65) DEFAULT NULL,
  `name`varchar(65) default null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `user` (`id`, `username`, `password`,`Name`) VALUES
(1, 'turbo', 'turbo',`Bao Vo`),
(2, 'test', 'test',`test`),
(5, 'banana', 'banana',`Rana Odeh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
