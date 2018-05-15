-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2018 at 02:48 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(20) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` char(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `status` varchar(8) NOT NULL,
  `payment` date NOT NULL,
  `nra` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `address`, `city`, `state`, `zip`, `email`, `phone`, `status`, `payment`, `nra`) VALUES
(3, 'Jane', 'Doe', '132 Main St', 'Embarrass', 'MN', '12345', 'email@email.com', '123-456-7890', 'Active', '2018-01-01', '123456790'),
(4, 'Jim', 'Johnson', '123 Main Blvd.', 'Minneapolis', 'MN', '12345', 'email@email.com', '123-456-5555', 'Active', '2018-01-01', '123456789'),
(5, 'Rob', 'Walzack', '100 South St N.', 'New York', 'MN', '12345', 'email@email.com', '612-612-6120', 'Active', '2018-04-13', '123456987'),
(7, 'Grunt', 'Logic', '456 Starcraft Ln', 'Blizzard', 'MN', '66666', 'grunt@logic.com', '456-789-1234', 'Active', '2018-01-01', '789456123'),
(8, 'Kyle', 'Penguin', '222 Frozen Tundra', 'Antartica', 'MN', '45612', 'kevin@alterego.com', '789-456-1234', 'Inactive', '2018-01-04', '456789123'),
(9, 'Lavi', 'Louisiana', '555 First St. NW', 'Anytown', 'MN', '54652', 'email@email.com', '564-789-1235', 'Active', '2018-01-06', '987654321'),
(10, 'Isaac', 'St. Newton', '4201 Highland Rd', 'Duluth', 'MN', '54102', 'email@email.com', '222-222-2222', 'Active', '2018-01-01', '654987322'),
(11, 'Connor', 'Bowling', '253 Timothy Ln', 'Mounds View', 'MN', '55555', 'email@email.com', '321-654-9871', 'Inactive', '2018-01-01', '987546213'),
(12, 'test', 'subject', '123 main st', 'Hibbing', 'MN', '55555', 'email@email.com', '123-654-9871', 'Active', '2018-01-01', '987564213'),
(14, 'Jimbo', 'Johnson', '123 First Ave', 'Minneapolis', 'MN', '55555', 'email@email.com', '123-789-4562', 'Active', '2018-04-04', '123654123'),
(15, 'Frank', 'Douglas', '132 Main St', 'Duluth', 'MN', '54321', 'email@email.com', '123-987-6541', 'Inactive', '2018-02-01', '321654987'),
(17, 'Phil', 'Hartman', '23 Main St. Apt 2', 'Dover-Foxtrot', 'WI', '55555', 'email.Email@email.com', '232-456-7898', 'Active', '2018-04-02', '123654714'),
(20, 'Bill', 'Hicks', '123 Funny Ln', 'Virginia', 'MN', '55555', 'email@example.com', '123-456-7892', 'Active', '2018-02-23', '321456879'),
(21, 'Andrew', 'Blesener', '321 Main St. N', 'Minneapolis', 'MN', '55555', 'email@email.com', '132-654-9871', 'Active', '2018-04-02', '123456987'),
(22, 'Frank', 'Thomas', '321 Main St', 'Fargo', 'ND', '55555', 't34t2G@FGG.com', '123-456-7892', 'Inactive', '2018-04-01', '987524136'),
(23, 'Pavel', 'Bure', '212 Main St', 'Miami', 'FL', '55555', '43t43@email.com', '321-987-6541', 'Active', '2018-04-01', '321654987'),
(24, 'Jared', 'Spurgeon', '321 Main St', 'Minneapolis', 'MN', '55555', 'email@email.com', '213-654-8521', 'Active', '2018-04-01', '331261987'),
(25, 'Tim', 'Tom', '321 1st St. S.', 'Lakeville', 'MN', '55555', 'email@email.com', '321-456-8741', 'Active', '2018-04-01', '321645879'),
(26, 'Bob', 'Barker', '312 Hwy. 75', 'Franklin', 'MN', '65206', 'email@email.com', '321-654-7852', 'Active', '2018-04-20', '321456789'),
(27, 'Jim', 'Doe', '321 Main St', 'Anytown', 'MN', '54126', 'email@email.com', '541-659-1214', 'Active', '2018-04-17', '213654985'),
(28, 'Jack', 'Anderson', '52 County Rd. 6', 'Rural', 'MN', '54213', 'email@email.com', '123-456-7895', 'Active', '2018-04-20', '213654789'),
(29, 'Ted', 'Johnson', '123 Main St.', 'Anytown', 'MN', '54321', 'adfd@dfklasjfd.com', '123-456-7899', 'Active', '2018-05-09', '123456789'),
(34, 'Bob', 'Dole', '123 Main St', 'City', 'MN', '54321', 'bd@mail.com', '123-789-7888', 'Active', '2018-05-09', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(23) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(13, 'admin', '$2y$10$yEzMd2eqlIMTlwn6X2hWeumEP3msRD9FY8tJJBm/kCDdtMgLGvoBe', 'admin'),
(14, 'newuser', '$2y$10$BISmZzpUjFbIa77F3sInfOupc7fBox.kKXRLnvOFPSJzBaHX6DUUS', 'admin'),
(15, 'sherwin', '$2y$10$jqzHo18ztu9nx9EFj0h9EuP99hSff0dfs/yyrZgyeMeY8GZWygg.a', 'admin'),
(16, 'me', '$2y$10$WEURjxQJ59BzCnGWJj/w.OGBl1.ItXeSFNowya6r1XRjzYCA/vRVm', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
