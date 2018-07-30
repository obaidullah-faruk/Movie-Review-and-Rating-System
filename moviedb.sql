-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2017 at 06:38 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(254) NOT NULL,
  `username` varchar(250) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `username`, `pass`) VALUES
('Faruk', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `moviedetails`
--

CREATE TABLE `moviedetails` (
  `mid` int(11) NOT NULL,
  `moviename` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `language` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `director` varchar(100) NOT NULL,
  `stars` text NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moviedetails`
--

INSERT INTO `moviedetails` (`mid`, `moviename`, `year`, `language`, `duration`, `genre`, `director`, `stars`, `summary`) VALUES
(1, 'The Shawshank Redemption', 1994, 'English', '2h 22min', ' Crime, Drama', 'Frank Darabont', 'Tim Robbins, Morgan Freeman, Bob Gunton', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.'),
(2, 'Forrest Gump', 1994, 'English', '2h 22min', ' Comedy, Drama, Romance', 'Robert Zemeckis', ' Tom Hanks, Robin Wright, Gary Sinise', 'Forrest Gump, while not intelligent, has accidentally been present at many historic moments, but his true love, Jenny Curran, eludes him.'),
(4, 'Arrival', 2016, 'English', '1h 56min', ' Drama, Mystery, Sci-Fi', ' Denis Villeneuve', ' Amy Adams, Jeremy Renner, Forest Whitaker', 'When twelve mysterious spacecraft appear around the world, linguistics professor Louise Banks is tasked with interpreting the language of the apparent alien visitors.'),
(5, '12 Angry Men', 1957, 'English', '1h 36min', 'Crime,drama', 'Sidney Lumet', 'Henry Fonda, Lee J. Cobb, Martin Balsam', 'A jury holdout attempts to prevent a miscarriage of justice by forcing his colleagues to reconsider the evidence.'),
(7, 'Schindlers List', 1993, 'English', '3h 15min', ' Biography, Drama, History', ' Steven Spielberg', ' Thomas Keneally (book), Steven Zaillian (screenplay)', 'In German-occupied Poland during World War II, Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazi Germans.'),
(8, 'Fight Clu', 1999, 'English', ' 2h 19min', ' Drama', ' David Fincher ', ' Brad Pitt, Edward Norton, Meat Loaf ', 'An insomniac office worker, looking for a way to change his life, crosses paths with a devil-may-care soap maker, forming an underground fight club that evolves into something much, much more. '),
(9, 'Hacksaw Ridge', 2016, 'English', ' 2h 19min', ' Biography, Drama, History', ' Mel Gibson ', ' Andrew Garfield, Sam Worthington, Luke Bracey ', 'WWII American Army Medic Desmond T. Doss, who served during the Battle of Okinawa, refuses to kill people, and becomes the first man in American history to receive the Medal of Honor without firing a shot.'),
(11, 'Passengers', 2016, 'English', ' 1h 56min', ' Adventure, Drama, Romance', ' Morten Tyldum ', ' Jennifer Lawrence, Chris Pratt, Michael Sheen ', 'A spacecraft traveling to a distant colony planet and transporting thousands of people has a malfunction in its sleep chambers. As a result, two passengers are awakened 90 years early.'),
(12, '', 0000, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `moviename` varchar(250) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `rating` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`moviename`, `username`, `rating`) VALUES
('The Shawshank Redemption', '', 3),
('The Shawshank Redemption', '', 3),
('Arrival', 'Faruk75', 5),
('The Shawshank Redemption', 'user', 5),
('Forrest Gump', 'user', 4),
('12 Angry Men', 'user', 5),
('Fight Clu', 'user', 5),
('Passengers', 'user', 3),
('Hacksaw Ridge', 'user', 4),
('Forrest Gump', 'Faruk75', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `email` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `firstname`, `lastname`, `gen`, `birthdate`, `email`, `username`, `pass`) VALUES
(1, 'MD. Obaidullah', 'Al-Faruk', 'male', '1993-02-19', 'obaidullah.faruk@yahoo.com', 'Faruk75', 'faruk75'),
(2, 'Shahed', 'Iqbal', 'male', '1993-01-01', 'shahed.iqbal@gmail.com', 'shahed', 'shahed'),
(3, 'user', '123', 'male', '1999-03-23', 'user@user.com', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moviedetails`
--
ALTER TABLE `moviedetails`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moviedetails`
--
ALTER TABLE `moviedetails`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
