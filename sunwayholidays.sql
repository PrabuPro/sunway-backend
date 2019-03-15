-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 11:18 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunwayholidays`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `hotel_type` varchar(20) NOT NULL,
  `suitable_for` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `photo_id` varchar(200) NOT NULL,
  `location` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL,
  `introduction` text NOT NULL,
  `sunway_ratings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `name`, `description`, `hotel_type`, `suitable_for`, `price`, `photo_id`, `location`, `country`, `introduction`, `sunway_ratings`) VALUES
(1, 'sdssasasa', 'test 123', 'standard', 'family', 1000, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', '', '', 0),
(2, 'sdssasasa', 'test 123', 'standard', 'family', 1000, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', '', '', 0),
(3, 'sdssasasa', 'test 123', 'standard', 'resurchers', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', '', '', 0),
(4, 'sdssasasa', 'test 123', 'standard', 'couples', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', '', '', 0),
(5, 'sdssasasa', 'test 123', '3 star', 'honeymooners', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka', '', 0),
(6, 'sdssasasa', 'test 123', '3 star', 'honeymooners', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka', '', 0),
(7, 'sdssasasa', 'test 123', 'boteque hotels', 'pilgrims', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'maldives', '', 0),
(8, 'sdssasasa', 'test 123', 'boteque hotels', 'pilgrims', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'maldives', '', 0),
(9, 'dsds', 'dfd', 'bouteque hotels', 'singles + kids', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'fdsf', 'maldives', '', 0),
(10, 'sdssasasa', 'test 123', 'standard', 'couples', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka', '', 0),
(11, 'hotel name', 'description', '3 star', 'couples', 2000, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka', '', 0),
(12, 'sdssasasa', 'test 123', '3 star', 'couples', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka', '', 0),
(13, 'sdssasasa', 'test 123', '3 star', 'couples', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka', '', 0),
(14, 'sdssasasa', 'test 123', '3 star', 'couples', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka', '', 0),
(15, 'This is the name', 'discription is awesome', 'standard', 'couples', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka', '', 0),
(16, 'sdssasasa', 'test 123', '3 star', 'researchers', 1000, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka', '', 0),
(17, 'sdssasasa', 'test 123', '3 star', 'researchers', 1000, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka', '', 0),
(18, 'sdssasasa', 'test 123', '3 star', 'researchers', 1000, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka', '', 0),
(19, 'name', 'description', 'bouteque hotels', 'singles + kids', 1500, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'maldives', '', 0),
(20, 'sdssasasa', 'test 123', '3 star', 'seniors', 1000, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka', '', 0),
(21, 'sdssasasa', 'test 123', '3 star', 'seniors', 1000, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka', '', 0),
(22, 'Kevin', 'test 123', '3 star', 'seniors', 1000, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka', '', 0),
(23, 'Kevin', 'test 123', '3 star', 'seniors', 1000, '23.jpeg', 'Negombo', 'sri lanka', '', 0),
(24, 'Kevin 3', 'test 123', '3 star', 'seniors', 1000, '24.jpeg', 'Negombo', 'sri lanka', '', 0),
(25, 'sdssasasa', 'test 123', '3 star', 'seniors', 1000, '25.jpeg', '232', 'sri lanka', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_basis`
--

CREATE TABLE `hotel_basis` (
  `hotel_basis_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `basis` varchar(20) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_facilities`
--

CREATE TABLE `hotel_facilities` (
  `hotel_facility_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `facilities` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel_facilities`
--

INSERT INTO `hotel_facilities` (`hotel_facility_id`, `hotel_id`, `facilities`) VALUES
(1, 17, 'Wifi,children'),
(2, 18, 'Wifi,children'),
(3, 19, 'wifi,children,meal,special'),
(4, 20, 'wifi,children,meal'),
(5, 21, 'wifi,children,meal'),
(6, 22, 'wifi,children,meal'),
(7, 23, 'wifi,children,meal'),
(8, 24, 'wifi,children,special'),
(9, 25, 'children,meal');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_location`
--

CREATE TABLE `hotel_location` (
  `hotel_location_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel_location`
--

INSERT INTO `hotel_location` (`hotel_location_id`, `hotel_id`, `lat`, `lng`) VALUES
(3, 15, 7.24816, 7.15458),
(4, 16, 7.24816, 7.15458),
(5, 17, 7.24816, 7.15458),
(6, 18, 7.24816, 7.15458),
(7, 19, 7.24816, 98.5646),
(8, 20, 45.4655, 50.5468),
(9, 21, 45.4655, 50.5468),
(10, 22, 45.4655, 7.15458),
(11, 23, 45.4655, 7.15458),
(12, 24, 45.4655, 7.15458),
(13, 25, 45.4655, 98.5646);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_roomtype`
--

CREATE TABLE `hotel_roomtype` (
  `hotel_bed_type_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `people` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel_roomtype`
--

INSERT INTO `hotel_roomtype` (`hotel_bed_type_id`, `hotel_id`, `room_type`, `people`, `children`, `price`) VALUES
(1, 17, 'single', 2, 1, 2000),
(2, 18, 'single', 2, 1, 2000),
(3, 19, 'double', 2, 1, 2500),
(4, 19, 'single', 1, 0, 2000),
(5, 20, 'single', 2, 1, 2500),
(6, 21, 'single', 2, 1, 2500),
(7, 22, 'double', 2, 0, 2000),
(8, 23, 'double', 2, 0, 2000),
(9, 24, 'double', 1, 0, 2000),
(10, 25, 'single', 1, 0, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiry_id` int(11) NOT NULL,
  `experience` varchar(150) NOT NULL,
  `pace` varchar(100) NOT NULL,
  `people_type` varchar(50) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `accomadation_type` varchar(20) NOT NULL,
  `accomadation_remarks` text NOT NULL,
  `start_date` date NOT NULL,
  `travel_status` varchar(20) NOT NULL,
  `duration` int(11) NOT NULL,
  `maldives_status` varchar(5) NOT NULL,
  `maldives_night` int(11) NOT NULL,
  `maldives_hotel_type` varchar(20) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `age_range` varchar(20) NOT NULL,
  `telephone_number` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `updates` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inquiry_id`, `experience`, `pace`, `people_type`, `adults`, `children`, `accomadation_type`, `accomadation_remarks`, `start_date`, `travel_status`, `duration`, `maldives_status`, `maldives_night`, `maldives_hotel_type`, `budget`, `message`, `first_name`, `last_name`, `age_range`, `telephone_number`, `email`, `updates`) VALUES
(80, 'culture & heritage,tea country & landscapes', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(81, 'tea country & landscapes,beach leisure time', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(82, 'tea country & landscapes,beach leisure time', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(83, 'culture & heritage,beach leisure time', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(84, 'culture & heritage,beach leisure time', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(85, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(86, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(87, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(88, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(89, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(90, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(91, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(92, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(93, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(94, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(95, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(96, '', 'pece', 'people', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(97, '', 'pece', 'people', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(98, '', 'pece', 'people', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(99, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(100, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(101, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(102, '', 'this', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(103, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(104, 'culture & heritage,tea country & landscapes', '3', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(105, 'beach leisure time', 'active', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(106, 'beach leasure time,colombo & shopping', 'soft adventure', 'couple', 0, 0, '', 'fdsafdsa', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', '0'),
(107, '', '', '', 0, 0, '', '', '2020-03-03', 'option-2', 3, '1', 0, '', '800-1100', '', '', '', '', '', '', '0'),
(108, '', '', '', 0, 0, '', '', '2020-03-03', 'option-2', 3, '1', 0, '', '800-1100', '', '', '', '', '', '', '0'),
(109, '', '', '', 0, 0, '', '', '2020-08-03', 'option-3', 4, '0', 0, '', '800-1100', '', '', '', '', '', '', '0'),
(110, '', '', '', 0, 0, '', '', '2020-09-03', 'option-3', 3, '0', 0, '', '1100-1500', 'uytruyryrytu', '', '', '', '', '', '0'),
(111, '', '', '', 0, 0, '', '', '2020-09-03', 'option-3', 3, '0', 0, '', '1100-1500', 'uytruyryrytu', '', '', '', '', '', '0'),
(112, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', 'john', 'gfgfds', '25-34', '0777915025', 'dfd@dfd.com', '0'),
(113, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', 'john', 'gfdsafds', '25-34', '0777915656', 'dfd@dfd.com', '0'),
(114, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', 'johniiiiiii', 'iiiiiiiiiiii', '55-64', 'i456456454', 'dfd@dfd.com', ''),
(115, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', 'john', 'fdsa', '25-34', '456456456', 'dfd@dfd.com', ''),
(116, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', 'john', 'fdsa', '35-44', '077919058', 'dfdfd@sdsd.com', ''),
(117, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', 'john', 'gfds', '25-34', '0777959595', 'dfd@dfd.com', '1'),
(118, '', '', '', 0, 0, '', '', '0000-00-00', '', 0, '', 0, '', '', '', 'john', 'fdsa', '35-44', '45645', 'dfd@dfd.com', '1'),
(119, 'culture & heritage,beach leasure time', 'active', 'solo', 0, 0, '3 star', 'fdsfd', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', ''),
(120, 'culture & heritage,beach leasure time', 'active', 'solo', 0, 0, '3 star', 'hfggfd', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', ''),
(121, 'culture & heritage,beach leasure time', 'soft adventure', 'family', 3, 1, '3 star', 'fdsfdsa', '0000-00-00', '', 0, '', 0, '', '', '', '', '', '', '', '', ''),
(122, 'culture & heritage,colombo & shopping', 'soft adventure', 'group', 0, 3, '3 star', 'fdsafdsa', '2020-09-03', 'option-2', 2, '1', 4, '4 star', '1100-1500', 'fdsafda', '', '', '', '', '', ''),
(123, 'culture & heritage,tea country & landscape', 'soft adventure', 'group', 3, 0, '5 star', 'fdsfdsa', '2020-09-03', 'option-2', 9, '1', 2, '3 star', '5000+', 'fdsafdsa', 'john', 'fdsa', '60+', '787878', 'dfd@dfd.com', '1'),
(124, 'culture & heritage,colombo & shopping', 'soft adventure', 'group', 2, 0, '5 star', 'fgdsfdsafdsa', '2019-01-03', 'option-2', 4, '0', 0, '', '1100-1500', 'fdsafdsa', 'john', 'fdsa', '55-64', '7878787', 'dfd@dfd.com', '1'),
(125, 'culture & heritage,colombo & shopping', 'soft adventure', 'family', 3, 3, '4 star', 'fdafdsa', '2019-06-03', 'option-2', 4, '1', 4, '3 star', '2000-3000', 'fdafdsafdsafdsa', 'john', 'fdsa', '25-34', '787878787', 'dfdfd@sdsd.com', '1'),
(126, 'culture & heritage,colombo & shopping', 'soft adventure', 'couple', 0, 0, '4 star', 'fdsafdsa', '2019-03-10', 'option-3', 3, '1', 3, '4 star', '1100-1500', 'fdsafdsafds', 'john', 'ewqewqewq', '35-44', '45645646545', 'dfd@dfd.com', '1'),
(127, 'culture & heritage,colombo & shopping', 'active', 'family', 2, 4, '4 star', 'fdsafdsa', '2019-03-30', 'option-2', 4, '1', 3, '3 star', '1500-2000', 'fdsafdsafdsa', 'john', 'gfgfds', '35-44', '78787878', 'dfd@dfd.com', '1'),
(128, 'culture & heritage,tea country & landscape,animals & wildlife,beach leasure time,colombo & shopping,local experience', 'relaxing', 'group', 2, 0, '5 star', 'Remarks for accomadation', '2019-05-10', 'option-3', 5, '1', 5, '3 star', '2000-3000', 'additional plans', 'john', 'fdsa', '45-54', '787878787', 'dfd@dfd.com', '1'),
(129, 'culture & heritage,tea country & landscape,animals & wildlife,colombo & shopping', 'soft adventure', 'solo', 4, 4, '4 star', 'remarks for accomadations', '2019-03-15', 'option-2', 4, '1', 2, '3 star', '1100-1500', 'additional plans', 'john', 'last', '35-44', '0777989898', 'dfd@dfd.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `itinerary`
--

CREATE TABLE `itinerary` (
  `itinerary_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `item_number` varchar(20) NOT NULL,
  `item_details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `itinerary`
--

INSERT INTO `itinerary` (`itinerary_id`, `tour_id`, `item_number`, `item_details`) VALUES
(80, 92, '2', 'fdsafdsafd'),
(81, 92, '2', 'fdsafdsafd'),
(82, 93, '2', 'fdsafdsafd'),
(83, 93, '2', 'fdsafdsafd'),
(84, 94, '2', 'fdsafdsafd'),
(85, 94, '2', 'fdsafdsafd'),
(86, 95, '2', 'fdsafdsafd'),
(87, 95, '2', 'fdsafdsafd'),
(88, 96, '2', 'fdsafdsafd'),
(89, 96, '2', 'fdsafdsafd'),
(90, 97, '2', 'fdsafdsafd'),
(91, 97, '2', 'fdsafdsafd'),
(92, 98, '2', 'fdsafdsafd'),
(93, 98, '2', 'fdsafdsafd'),
(94, 99, '1', 'eweqwdfsa'),
(95, 100, '1', 'eweqwdfsa'),
(96, 101, 'ere', 'fdsaf'),
(97, 102, 'ere', 'fdsaf');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `mail_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`mail_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'sdssasasa', 'dfd@dfd.com', 'fdsafdsa', 'fdsafdsa'),
(2, 'kevin', 'dfd@dfd.com', 'test', 'message'),
(3, 'kevin 2', 'dfd@dfd.com', 'test mail', 'this is the content'),
(4, 'Kevin 2', 'dfd@dfd.com', 'subject of mail', 'mail content'),
(5, 'Kevin 2', 'dfd@dfd.com', 'fsfdsf', 'fdsafdsafdsafdsa'),
(6, 'sdssasasa', 'dfd@dfd.com', 'test mail', 'fdsafdsafdsafdsa'),
(7, 'sdssasasa', '54454@fdfd.com', 'fdsa', 'fdsafdsa'),
(8, 'Kevin 6', 'dfd@dfd.com', 'test mail fdf', 'mail content'),
(9, 'Kevin 3', 'dfd@dfd.com', 'subject of mail', 'this is content'),
(10, 'Kevin', 'dfdfd@sdsd.com', 'test', 'dsadsafds'),
(11, 'my name', 'Some@gmail.com', 'this is cool', 'awesome');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `t_id` int(11) NOT NULL,
  `t_tid` varchar(11) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `t_x` varchar(20) NOT NULL,
  `t_y` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`t_id`, `t_tid`, `t_name`, `t_x`, `t_y`) VALUES
(1, '29', 'some thing', '7574545', '4545454'),
(3, '30', 'something 2', '46417', '78478');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `tour_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `tour_type` varchar(50) NOT NULL,
  `suitable_for` varchar(50) NOT NULL,
  `photo_id` varchar(200) NOT NULL,
  `introduction` text NOT NULL,
  `ratings` int(11) NOT NULL,
  `duration` varchar(5) NOT NULL,
  `map_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tour_highlights`
--

CREATE TABLE `tour_highlights` (
  `tour_highlights_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `highlights` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tour_item`
--

CREATE TABLE `tour_item` (
  `tourItem_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `introduction` text NOT NULL,
  `lat` varchar(20) NOT NULL,
  `lng` varchar(20) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tour_price`
--

CREATE TABLE `tour_price` (
  `tour_price_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `hotel_type` varchar(10) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tour_services_excludes`
--

CREATE TABLE `tour_services_excludes` (
  `tour_services_excludes_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `excludes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tour_services_includes`
--

CREATE TABLE `tour_services_includes` (
  `tour_services_includes_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `includes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tour_services_option`
--

CREATE TABLE `tour_services_option` (
  `tour_services_option` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `options` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'test', '$2y$12$jGv89K7MuFfpXJE.gss0f.O78nF9Ksq1GOE3gbAw4l6eNoowcK03y'),
(2, 'test', '$2y$12$ZOIOVZ0W/sSY3S/3MK4ps.6GaPGbaY0zsSfzCs.RXRBP9MrY2z1Fu'),
(3, 'add', '$2y$12$U2BQc6Dbg9k0IAXmII4JferTZBTT2.Q3ZqOWkeDCLuaiIQKIvcKA.'),
(4, '123', '$2y$12$UWAb.NeJeLfItzncxnl5fuJ.fgo/fTyBtONnwwU86aifMysb5KHmO'),
(5, 'user', '$2y$12$FxjsOUJDWEoGMLqXcO6WP.3Tlt95lOBBsEMxBartAisjtheTnp1My');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `hotel_basis`
--
ALTER TABLE `hotel_basis`
  ADD PRIMARY KEY (`hotel_basis_id`),
  ADD KEY `fk_hotel_basis` (`hotel_id`);

--
-- Indexes for table `hotel_facilities`
--
ALTER TABLE `hotel_facilities`
  ADD PRIMARY KEY (`hotel_facility_id`),
  ADD KEY `fk_hotel_facilities` (`hotel_id`);

--
-- Indexes for table `hotel_location`
--
ALTER TABLE `hotel_location`
  ADD PRIMARY KEY (`hotel_location_id`),
  ADD KEY `fk_hotel_location` (`hotel_id`);

--
-- Indexes for table `hotel_roomtype`
--
ALTER TABLE `hotel_roomtype`
  ADD PRIMARY KEY (`hotel_bed_type_id`),
  ADD KEY `fk_hotel_bed_type` (`hotel_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`itinerary_id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `tour_highlights`
--
ALTER TABLE `tour_highlights`
  ADD PRIMARY KEY (`tour_highlights_id`),
  ADD KEY `fk_tour_highlights` (`tour_id`);

--
-- Indexes for table `tour_item`
--
ALTER TABLE `tour_item`
  ADD PRIMARY KEY (`tourItem_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `tour_price`
--
ALTER TABLE `tour_price`
  ADD PRIMARY KEY (`tour_price_id`),
  ADD KEY `fk_tour_price` (`tour_id`);

--
-- Indexes for table `tour_services_excludes`
--
ALTER TABLE `tour_services_excludes`
  ADD PRIMARY KEY (`tour_services_excludes_id`),
  ADD KEY `fk_tour_services_excludes` (`tour_id`);

--
-- Indexes for table `tour_services_includes`
--
ALTER TABLE `tour_services_includes`
  ADD PRIMARY KEY (`tour_services_includes_id`),
  ADD KEY `fk_tour_services_includes` (`tour_id`);

--
-- Indexes for table `tour_services_option`
--
ALTER TABLE `tour_services_option`
  ADD PRIMARY KEY (`tour_services_option`),
  ADD KEY `fk_tour_services_options` (`tour_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `hotel_basis`
--
ALTER TABLE `hotel_basis`
  MODIFY `hotel_basis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_facilities`
--
ALTER TABLE `hotel_facilities`
  MODIFY `hotel_facility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hotel_location`
--
ALTER TABLE `hotel_location`
  MODIFY `hotel_location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hotel_roomtype`
--
ALTER TABLE `hotel_roomtype`
  MODIFY `hotel_bed_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `itinerary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `tour_highlights`
--
ALTER TABLE `tour_highlights`
  MODIFY `tour_highlights_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tour_item`
--
ALTER TABLE `tour_item`
  MODIFY `tourItem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tour_price`
--
ALTER TABLE `tour_price`
  MODIFY `tour_price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tour_services_excludes`
--
ALTER TABLE `tour_services_excludes`
  MODIFY `tour_services_excludes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tour_services_includes`
--
ALTER TABLE `tour_services_includes`
  MODIFY `tour_services_includes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tour_services_option`
--
ALTER TABLE `tour_services_option`
  MODIFY `tour_services_option` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotel_basis`
--
ALTER TABLE `hotel_basis`
  ADD CONSTRAINT `fk_hotel_basis` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`hotel_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel_facilities`
--
ALTER TABLE `hotel_facilities`
  ADD CONSTRAINT `fk_hotel_facilities` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`hotel_id`);

--
-- Constraints for table `hotel_location`
--
ALTER TABLE `hotel_location`
  ADD CONSTRAINT `fk_hotel_location` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`hotel_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel_roomtype`
--
ALTER TABLE `hotel_roomtype`
  ADD CONSTRAINT `fk_hotel_bed_type` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`hotel_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tour_highlights`
--
ALTER TABLE `tour_highlights`
  ADD CONSTRAINT `fk_tour_highlights` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`tour_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tour_price`
--
ALTER TABLE `tour_price`
  ADD CONSTRAINT `fk_tour_price` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`tour_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tour_services_excludes`
--
ALTER TABLE `tour_services_excludes`
  ADD CONSTRAINT `fk_tour_services_excludes` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`tour_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tour_services_includes`
--
ALTER TABLE `tour_services_includes`
  ADD CONSTRAINT `fk_tour_services_includes` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`tour_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tour_services_option`
--
ALTER TABLE `tour_services_option`
  ADD CONSTRAINT `fk_tour_services_options` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`tour_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
