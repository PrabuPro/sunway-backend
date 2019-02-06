-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2019 at 01:19 PM
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
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `name`, `description`, `hotel_type`, `suitable_for`, `price`, `photo_id`, `location`) VALUES
(1, 'sdssasasa', 'test 123', 'standard', 'family', 1000, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo'),
(2, 'sdssasasa', 'test 123', 'standard', 'family', 1000, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo'),
(3, 'sdssasasa', 'test 123', 'standard', 'resurchers', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo'),
(4, 'sdssasasa', 'test 123', 'standard', 'couples', 1200, 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo');

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
(33, 'hotel 1', 'test 123', '3 star', 'seniors', '1000', 'http://localhost/sunwayholidays/assets/images/hotels/family-outdoor-happy-happiness-160994.jpeg', 'Negombo', 0, 0, '');

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
(3, 32, 'intro', '89.06484896', '98.564549149', 0);

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
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tour_item`
--
ALTER TABLE `tour_item`
  MODIFY `tourItem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
