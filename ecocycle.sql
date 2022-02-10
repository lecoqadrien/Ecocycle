-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 10, 2022 at 09:42 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ecocycle`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `prenom`, `email`) VALUES
(1, 'adrien', 'adrien.lecoq@hotmail.com'),
(2, 'adrien', 'adrien.lecoq@hotmail.com'),
(3, 'gilbert', 'gilbert.chevalier@gmail.com'),
(4, 'gilbert', 'gilbert.chevalier@gmail.com'),
(5, 'sophie', 'sophie.deschemin@gmail.com'),
(10, 'coralie', 'happy.coraline@hotmail.com'),
(11, 'jane', 'jane.roche@orange.fr'),
(12, 'toto', 'toto.toto@hotmail.com'),
(13, 'marc', 'marc.hebert@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;