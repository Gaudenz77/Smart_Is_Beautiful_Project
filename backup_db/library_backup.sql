-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Feb 01, 2023 at 11:20 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `topic` enum('music','ch-norris','animals','movies','d-n-d','astronautics','technology','ai','geography','sports','science','informatics','gen-knowledge') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-1` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-2` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-3` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-4` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-5` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `topic`, `question_text`, `answer-1`, `answer-2`, `answer-3`, `answer-4`, `answer-5`, `correct`) VALUES
(501, 'astronautics', 'What is the primary propulsion method used by most spacecrafts for interplanetary travel?', 'Chemical rockets', 'Nuclear propulsion', 'Solar sails', 'Ion thrusters', '', 'answer-1'),
(502, 'astronautics', 'Which Apollo mission did not land on the Moon?', 'Apollo 11', 'Apollo 12', 'Apollo 13', 'Apollo 14', '', 'answer-3'),
(503, 'astronautics', 'What is the name of the first privately-funded spacecraft to reach orbit?', 'Space Shuttle', 'SpaceX\r\n', 'Apollo\r\n', 'Orion', '', 'answer-2'),
(504, 'astronautics', 'What is the largest planet in our solar system?', 'Earth', 'Jupiter', 'Saturn', 'Uranus', '', 'answer-2'),
(505, 'astronautics', 'Which of the following is not one of the three main components of the International Space Station?', 'Columbus laboratory', 'Kibo laboratory', 'Harmony module', 'Atlantis shuttle', '', 'answer-4'),
(506, 'astronautics', 'What is the name of the first spacecraft to fly by Pluto?', 'New Horizons', 'Pioneer', 'Voyager', 'Mariner', '', 'answer-1'),
(507, 'astronautics', 'What is the name of the first human to orbit the Earth?', 'Neil Armstrong', 'Yuri Gagarin', 'John Glenn', 'Buzz Aldrin', '', 'answer-1'),
(508, 'astronautics', 'What is the term for the study of the behavior, structure, and properties of matter and energy in space?', 'Astrophysics', 'Astrometry', 'Astronomy', 'Aerodynamics\r\n', '', 'answer-1'),
(509, 'astronautics', 'In what year was the first privately-funded spacecraft to transport cargo to the International Space Station launched?', '2005', '2012', '2018', '2020', '', 'answer-2'),
(510, 'astronautics', 'What is the primary method used to study the properties of distant stars and galaxies?', 'Spectroscopy', 'Interferometry', 'Astrometry', 'Photometry', '', 'answer-1'),
(9999, 'geography', 'On which continent lies São Paulo?', 'Europe', 'Asia', 'South America', 'Australia', 'North America', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
