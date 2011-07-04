-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2011 at 08:56 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hrm_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_info`
--

CREATE TABLE IF NOT EXISTS `emp_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) DEFAULT NULL,
  `emp_lastname` varchar(100) NOT NULL DEFAULT '',
  `emp_firstname` varchar(100) NOT NULL DEFAULT '',
  `emp_middle_name` varchar(100) NOT NULL DEFAULT '',
  `emp_nick_name` varchar(100) DEFAULT '',
  `emp_smoker` smallint(6) DEFAULT '0',
  `ethnic_race_code` varchar(13) DEFAULT NULL,
  `emp_birthday` date DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `emp_gender` varchar(50) DEFAULT NULL,
  `emp_marital_status` varchar(20) DEFAULT NULL,
  `emp_ssn_num` varchar(100) CHARACTER SET latin1 DEFAULT '',
  `emp_sin_num` varchar(100) DEFAULT '',
  `emp_other_id` varchar(100) DEFAULT '',
  `emp_dri_lice_num` varchar(100) DEFAULT NULL,
  `emp_dri_lice_exp_date` date DEFAULT NULL,
  `emp_military_service` varchar(100) DEFAULT '',
  `emp_status` varchar(13) DEFAULT NULL,
  `job_title` varchar(13) DEFAULT NULL,
  `eeo_cat_code` varchar(13) DEFAULT NULL,
  `work_station` int(6) DEFAULT NULL,
  `emp_street1` varchar(100) DEFAULT '',
  `emp_street2` varchar(100) DEFAULT '',
  `city_code` varchar(100) DEFAULT '',
  `coun_code` varchar(100) DEFAULT '',
  `provin_code` varchar(100) DEFAULT '',
  `emp_zipcode` varchar(20) DEFAULT NULL,
  `emp_hm_telephone` varchar(50) DEFAULT NULL,
  `emp_mobile` varchar(50) DEFAULT NULL,
  `emp_work_telephone` varchar(50) DEFAULT NULL,
  `emp_work_email` varchar(50) DEFAULT NULL,
  `sal_grd_code` varchar(13) DEFAULT NULL,
  `joined_date` date DEFAULT NULL,
  `emp_oth_email` varchar(50) DEFAULT NULL,
  `terminated_date` date DEFAULT NULL,
  `termination_reason` varchar(256) DEFAULT NULL,
  `emp_subunit` varchar(250) DEFAULT NULL,
  `emp_surpervisor` varchar(250) DEFAULT NULL,
  `emp_description` varchar(250) DEFAULT NULL,
  `custom4` varchar(250) DEFAULT NULL,
  `custom5` varchar(250) DEFAULT NULL,
  `custom6` varchar(250) DEFAULT NULL,
  `custom7` varchar(250) DEFAULT NULL,
  `custom8` varchar(250) DEFAULT NULL,
  `custom9` varchar(250) DEFAULT NULL,
  `custom10` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `work_station` (`work_station`),
  KEY `ethnic_race_code` (`ethnic_race_code`),
  KEY `nation_code` (`nationality`),
  KEY `job_title_code` (`job_title`),
  KEY `emp_status` (`emp_status`),
  KEY `eeo_cat_code` (`eeo_cat_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `emp_info`
--

INSERT INTO `emp_info` (`id`, `employee_id`, `emp_lastname`, `emp_firstname`, `emp_middle_name`, `emp_nick_name`, `emp_smoker`, `ethnic_race_code`, `emp_birthday`, `nationality`, `emp_gender`, `emp_marital_status`, `emp_ssn_num`, `emp_sin_num`, `emp_other_id`, `emp_dri_lice_num`, `emp_dri_lice_exp_date`, `emp_military_service`, `emp_status`, `job_title`, `eeo_cat_code`, `work_station`, `emp_street1`, `emp_street2`, `city_code`, `coun_code`, `provin_code`, `emp_zipcode`, `emp_hm_telephone`, `emp_mobile`, `emp_work_telephone`, `emp_work_email`, `sal_grd_code`, `joined_date`, `emp_oth_email`, `terminated_date`, `termination_reason`, `emp_subunit`, `emp_surpervisor`, `emp_description`, `custom4`, `custom5`, `custom6`, `custom7`, `custom8`, `custom9`, `custom10`) VALUES
(29, '11111', 'Foon', 'Kebba', 'Wally', '', 0, 'Black/African', '1984-07-03', 'Gambia', 'Male', 'Single Cock Sucker', '1234567891', '2462789992', '55555', '', '2011-07-13', '', 'Fully Employe', 'Technician', NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, 'kebba.foon@qcell.gm', NULL, NULL, NULL, NULL, NULL, 'Technical', NULL, 'Kebba is an Asshole', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, '0003', 'Drammeh', 'Modou', 'F', '', 0, NULL, '2011-07-13', 'Gambia', 'Male', 'Single', '667765', '445355', '78886', '78988786', '2011-07-13', '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
