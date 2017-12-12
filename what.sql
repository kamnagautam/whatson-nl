-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 12:34 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `what`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `eventcategory` varchar(20) NOT NULL,
  `eventbanner` varchar(50) DEFAULT NULL,
  `eventplace` varchar(50) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `eventcost` int(11) DEFAULT NULL,
  `eventabout` text,
  `lattitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `eventfeatures` text,
  `remarks` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `eventname`, `eventcategory`, `eventbanner`, `eventplace`, `start`, `end`, `eventcost`, `eventabout`, `lattitude`, `longitude`, `eventfeatures`, `remarks`) VALUES
(1, 'Highlight 2017', 'Social', 'highlight.png', 'Bastiaansplein', '2017-12-12 16:00:00', '2017-12-12 23:00:00', NULL, 'Highlight is the new event for light art, design and light experiences. Around Bastiaansplein upcoming designers, artists and students show exciting and innovative projects, stretching the boundaries of the light spectrum. Entrance is free of charge.', NULL, NULL, 'Tagtool by OMAi,Red Horizon by Gabey Tjon a Tham,Lampyridae by Matteo Marangoni + Dieter Vandoren,Bliksem Bowlen by Koen Fraijman,Facade Fragments by Aidan Wyber,Overscan and Mesh by Mike Rijnierse + Rob Bothof,Landschapslumen by Beeldjutters,Pixies by Jan-Willem Pelleboer. Rosanne le Roy. Tanya Somova & Roel Westrik (Robotic Building previously known as Hyperbody, TU Delft),Lichtmasten 4.0 by Arno Scheper + ReFunc,ledwork by Tom. Thomas. Cees-Willem & Teun,Dwaallicht by Opheldering,Buqs by Joris Hoogeboom + Teun Verkerk ', NULL),
(2, 'Lichtjesavond Delft 2017', 'Activity', 'licht.jpg', 'De Donkere Dagen van Delft', '2017-12-12 16:00:00', '2017-12-12 22:00:00', NULL, 'Put yourself in place and stay informed of Lichtjesavond Delft 2017!', NULL, NULL, NULL, NULL),
(3, 'Shell Inhouse Day', 'Education', 'shell.jpg', 'Rotterdam', '2017-12-14 08:30:00', '2017-12-14 18:00:00', NULL, 'MD \'Apollo\' will take you to Shell! On December the 14th we will pay a visit to Shell. First we go to Pernis, where we are shown around in the the largest oil refinery of Europe. In the afternoon we will go to the economic/business office in Rotterdam to solve a case. The event will end with nice networking drinks. \r\n\r\nJoin us for this great event!\r\nGet your ticket at:\r\nhttps://vsv.tudelft.nl/ticketshop/overview', NULL, NULL, NULL, NULL),
(4, '3M Company Tour', 'Career', '3m.jpg', '3M Nederland B.V.', '2017-12-12 16:00:00', '2017-12-12 18:00:00', NULL, 'IAESTE Delft invites you to join us in visiting innovation superstar 3M, right here in Delft! We will take a look in their innovation center while touring through their office. \r\nAfterwards we will have some drinks arranged by 3M! Only 20 spots available, so sign up quick: http://bit.ly/2kd2Ghn\r\n\r\nTheir location in Delft is more than just an office, it might be described the best by one of the employees themselves:\r\n\r\nAs an international technology company, 3M Netherlands is located at the TU Delft Science Park Technopolis. A science park that is aimed at high-tech companies and start-ups, in a knowledge-intensive environment, where sustainability is also of paramount importance.\r\nThis location fits perfectly with our brand promise "3M Science. Applied to Life ".\r\nAfter all, science is particularly useful if it is applicable in practice. In the 3M Innovation Center, a glimpse of the veil is highlighted in how 3M science and our corporate culture lead to numerous innovations. Innovations that have always been developed to realize improvements for our customers. For example doing our job easier, more effective or more efficient, but also safer and more sustainable.\r\nBe inspired in our Innovation Center and share with us your challenges. With the great diversity of our technology platforms there is a big chance that we have a solution for you.\r\n', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `eventname` (`eventname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
