-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2019 at 08:07 AM
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
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `name`, `description`, `hotel_type`, `suitable_for`, `price`, `photo_id`, `location`, `country`) VALUES
(1, 'sdssasasa', 'test 123', 'standard', 'family', 1000, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', ''),
(2, 'sdssasasa', 'test 123', 'standard', 'family', 1000, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', ''),
(3, 'sdssasasa', 'test 123', 'standard', 'resurchers', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', ''),
(4, 'sdssasasa', 'test 123', 'standard', 'couples', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', ''),
(5, 'sdssasasa', 'test 123', '3 star', 'honeymooners', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka'),
(6, 'sdssasasa', 'test 123', '3 star', 'honeymooners', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'sri lanka'),
(7, 'sdssasasa', 'test 123', 'boteque hotels', 'pilgrims', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'maldives'),
(8, 'sdssasasa', 'test 123', 'boteque hotels', 'pilgrims', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 'maldives'),
(9, 'dsds', 'dfd', 'bouteque hotels', 'singles + kids', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'fdsf', 'maldives');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiry_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `country` varchar(20) NOT NULL,
  `num_of_adults` int(11) NOT NULL,
  `num_of_children` varchar(5) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `hotel_type` varchar(20) NOT NULL,
  `tour_type` varchar(20) NOT NULL,
  `transportation_type` varchar(5) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inquiry_id`, `name`, `email`, `phone`, `country`, `num_of_adults`, `num_of_children`, `check_in_date`, `check_out_date`, `hotel_type`, `tour_type`, `transportation_type`, `message`) VALUES
(1, 'sdssasasa', '54454@fdfd.com', '+94112255756', 'fdsa', 2, '2', '2019-02-15', '2019-02-15', 'bouteque hotels', 'advanture', 'van', 'dsadsa'),
(2, 'sdssasasa', '54454@fdfd.com', '+94112255756', 'fdsa', 2, '2', '2019-02-15', '2019-02-15', 'bouteque hotels', 'advanture', 'van', 'dsadsa'),
(3, 'sdssasasa', '54454@fdfd.com', '+94112255756', 'fdsa', 2, '2', '2019-02-15', '2019-02-15', '4 star', 'echo', 'van', 'gffdsgfds'),
(4, 'sdssasasa', '54454@fdfd.com', '+94112255756', 'fdsa', 2, '2', '2019-02-15', '2019-04-18', '4 star', 'echo', 'van', 'gffdsgfds'),
(5, 'dsds', 'dfdfd@sdsd.com', '+94112255756', 'fdsa', 5, '5', '2019-02-14', '2019-02-15', 'bouteque hotels', 'wild life', 'van', 'fdsfsd'),
(6, 'sdssasasa', '54454@fdfd.com', '+94112255756', 'fdsa', 3, '2', '2019-02-13', '2019-02-26', '3 star', 'beach', 'van', 'gfdgf'),
(7, 'sdssasasa', '54454@fdfd.com', '+94112255756', 'fdsa', 3, '2', '2019-02-13', '2019-02-26', '3 star', 'beach', 'van', 'gfdgf'),
(8, 'ds', '54454@fdfd.com', '+94112255756', 'fdsa', 2, '4', '2019-02-21', '2019-02-16', '3 star', 'echo', 'van', 'dsda'),
(9, 'sdssasasa', '54454@fdfd.com', '+94112255756', 'fdsa', 4, '5', '2019-02-14', '2019-02-16', '5 star', 'wild life', 'van', 'dsds'),
(10, 'sdssasasa', '54454@fdfd.com', '+94112255756', 'fdsa', 4, '5', '2019-02-14', '2019-02-16', '5 star', 'wild life', 'van', 'dsds'),
(11, 'sdssasasa', '54454@fdfd.com', '+94112255756', 'fdsa', 2, '2', '2019-02-28', '2019-02-22', 'villas', 'action', 'car', 'dsfsfsd'),
(12, 'sdssasasa', '54454@fdfd.com', '+94112255756', 'fdsa', 2, '2', '2019-02-28', '2019-02-22', 'villas', 'action', 'car', 'dsfsfsd'),
(13, 'ds', 'dfdfd@sdsd.com', '+94112255756', 'fdsa', 3, '2', '2019-02-21', '2019-02-22', 'bouteque hotels', 'wild life', 'van', 'sdfsf'),
(14, 'ds', 'dfdfd@sdsd.com', '+94112255756', 'fdsa', 3, '2', '2019-02-21', '2019-02-22', 'bouteque hotels', 'wild life', 'van', 'sdfsf'),
(15, 'sdssasasa', '54454@fdfd.com', '+94112255756', 'fdsa', 6, '5', '2019-02-15', '2019-02-14', '4 star', 'beach', 'car', 'dsfsdfsd'),
(16, 'test', 'prabuddha.proart@gmail.com', '+94112255756', 'Sri Lanka', 1, '1', '2019-02-19', '2019-02-20', 'standard', 'nature', 'car', 'message'),
(17, 'test', 'prabuddha.proart@gmail.com', '+94112255756', 'Sri Lanka', 1, '1', '2019-02-19', '2019-02-20', 'standard', 'nature', 'car', 'message'),
(18, 'test 1', 'prabuddha.proart@gmail.com', '+94112255756', 'Sri Lanka', 2, '2', '2019-02-15', '2019-02-22', '5 star', 'nature', 'van', 'fdsfsdfsdf'),
(19, 'sdssasasa', 'dfdfd@sdsd.com', '+94112255756', 'Sri Lanka', 2, '1', '2019-02-21', '2019-02-21', 'bouteque hotels', 'wild life', 'van', 'hgfdhgdfhgfd'),
(20, 'sdssasasa', '54454@fdfd.com', '+94112255756', 'Sri Lanka', 1, '1', '2019-02-27', '2019-02-18', '4 star', 'echo', 'van', 'fdsfdsa'),
(21, 'sdssasasa', '54454@fdfd.com', '+94112255756', 'Sri Lanka', 1, '1', '2019-02-27', '2019-02-18', '4 star', 'echo', 'van', 'fdsfdsa'),
(22, 'dsds', 'prabuddha.proart@gmail.com', '+94112255756', 'Sri Lanka', 6, '4', '2019-02-07', '2019-02-07', 'bouteque hotels', 'nature', 'van', 'fdsafdsa');

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
(1, 29, 'item 1', 'fdklsajfieoafdl ajio vfewf'),
(2, 29, 'item 2', 'jfdlas;j kflafieaf jdl;asjfiea'),
(3, 29, 'item 1', 'fdklsajfieoafdl ajio vfewf'),
(4, 29, 'item 2', 'jfdlas;j kflafieaf jdl;asjfiea');

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
  `price` varchar(10) NOT NULL,
  `photo_id` varchar(200) NOT NULL,
  `location` varchar(50) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `Introduction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`tour_id`, `name`, `description`, `tour_type`, `suitable_for`, `price`, `photo_id`, `location`, `lat`, `lng`, `Introduction`) VALUES
(19, 'sdssasasa', 'test 123', 'common', 'seniors', '1000', 'http://localhost/sunwayholidays/assets/images/tours/food-banner3.jpg', 'Negombo', 0, 0, ''),
(20, 'sdssasasa', 'dfd', 'beach', 'couples', '1000', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', 'fdfd', 0, 0, ''),
(21, 'sdssasasa', 'dfd', 'beach', 'couples', '1000', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', 'fdfd', 0, 0, ''),
(22, 'sdssasasa', 'dfd', 'beach', 'couples', '1000', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', 'fdfd', 0, 0, ''),
(23, 'sdssasasa', 'test 123', 'beach', 'resurchers', '3434', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', '232', 0, 0, ''),
(24, 'sdssasasa', 'test 123', 'beach', 'resurchers', '3434', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', '232', 0, 0, ''),
(25, 'sdssasasa', 'test 123', 'beach', 'resurchers', '3434', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', '232', 0, 0, ''),
(26, 'sdssasasa', 'test 123', 'beach', 'resurchers', '3434', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', '232', 0, 0, ''),
(27, 'tour name', 'discription for tour', 'common', 'couples', '1000', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 0, 0, ''),
(28, 'sdssasasa', 'dfsdf', 'common', 'singles-kids', '121', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 0, 0, ''),
(29, 'sdfsafsaf', 'dafdsafdsafdsafdsafdsa', 'beach', 'singles-kids', '23232', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', '232', 0, 0, ''),
(30, 'sdssasasa', 'fdsafdas', 'beach', 'resurchers', '1200', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 0, 0, ''),
(31, 'test 123', 'discription', 'beach', 'small-group', '1200', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 89.0648, 98.5646, 'intro'),
(32, 'test 123', 'discription', 'beach', 'small-group', '1200', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 0, 0, ''),
(33, 'hotel 1', 'test 123', '3 star', 'seniors', '1000', 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 0, 0, ''),
(34, 'hotel 2', 'best hotel', 'wild life', 'small group', '1500', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 0, 0, ''),
(35, 'tour 4', 'tour 4', 'adventure', 'honeymooners', '1200', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', 'Colombo', 0, 0, ''),
(36, 'sdssasasa', 'test 123', 'wild life', 'family', '1200', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 0, 0, ''),
(37, 'sdssasasa', 'test 123', 'eco', 'honeymooners', '1200', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 0, 0, ''),
(38, 'sdssasasa', 'test 123', 'action', 'honeymooners', '1000', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 0, 0, ''),
(39, 'sdssasasa', 'test 123', 'ayurweda', 'singles + kids', '1000', 'http://localhost/sunwayholidays/assets/images/tours/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 0, 0, '');

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

--
-- Dumping data for table `tour_item`
--

INSERT INTO `tour_item` (`tourItem_id`, `tour_id`, `introduction`, `lat`, `lng`, `t_id`) VALUES
(1, 29, 'fdsafdsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaafda', '7.24815788', '7.1545845', 0),
(2, 30, 'fdsafdsafdasfdsa', '7.24815788', '7.1545845', 0),
(3, 32, 'intro', '89.06484896', '98.564549149', 0),
(4, 34, 'ok', '45.46548', '50.54678', 0),
(5, 35, 'fds', '4564', '4564', 0),
(6, 36, 'assda', '7.24815788', '98.564549149', 0),
(7, 37, 'sadsa', '7.24815788', '50.54678', 0),
(8, 38, 'dfsad', '7.24815788', '50.54678', 0),
(9, 39, 'ewrew', '7.24815788', '4564', 0);

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
(4, '123', '$2y$12$UWAb.NeJeLfItzncxnl5fuJ.fgo/fTyBtONnwwU86aifMysb5KHmO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

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
-- Indexes for table `tour_item`
--
ALTER TABLE `tour_item`
  ADD PRIMARY KEY (`tourItem_id`),
  ADD KEY `tour_id` (`tour_id`);

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
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `itinerary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tour_item`
--
ALTER TABLE `tour_item`
  MODIFY `tourItem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
