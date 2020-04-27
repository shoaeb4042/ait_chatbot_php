-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2017 at 09:49 PM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adbd_bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `query` text CHARACTER SET utf8 NOT NULL,
  `reply` text CHARACTER SET utf8 NOT NULL,
  `pub` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`query`, `reply`, `pub`, `score`, `id`) VALUES
('c.s.e. means', 'computer science and engineering', 1, 100, 63),
('b.a. means', 'bachelor of arts', 1, 100, 62),
('b.l.', 'bachelor of law', 1, 100, 61),
('a.m. means', 'Master of Arts', 1, 100, 60),
('asst. means', 'assistant', 1, 100, 59),
('a.m.i.e. means', 'associate member of institution of engineers', 1, 100, 58),
('adjt.', 'adjutant', 1, 100, 56),
('advt. means', 'advertisement', 1, 100, 57),
('a.c. means', 'alternating current', 1, 100, 55),
('age of earth', '10000 b.c.', 1, 101, 54),
('i am hungry', 'take some food, ofcourse healthy', 1, 100, 53),
('what is ai?', 'ai means artificial intelegence', 1, 100, 52),
('', 'Artificial intelligence (AI) is intelligence exhibited by machines. In computer science, the field of AI research defines itself as the study of \"intelligent agents\": any device that perceives its environment and takes actions that maximize its chance of success at some goal.Colloquially, the term \"artificial intelligence\" is applied when a machine mimics \"cognitive\" functions that humans associate with other human minds, such as \"learning\" and \"problem solving\"', 1, 100, 51),
('what is ai?', 'Artificial intelligence (AI) is intelligence exhibited by machines. In computer science, the field of AI research defines itself as the study of \"intelligent agents\": any device that perceives its environment and takes actions that maximize its chance of success at some goal. Colloquially, the term \"artificial intelligence\" is applied when a machine mimics \"cognitive\" functions that humans associate with other human minds, such as \"learning\" and \"problem solving\"', 1, 99, 50),
('i need some money', 'earn it', 1, 100, 49),
('help me', 'what is your problem?', 1, 100, 48),
('hi', 'hello', 1, 100, 47),
('How are you?', 'Fine', 1, 102, 46),
('Hi', 'Hellow', 1, 100, 45),
('b.o.t. means', 'board of trade', 1, 100, 64),
('b.l means', 'bachelor of law', 1, 100, 65),
('c.e means ', 'civil engineer', 1, 100, 66),
('b.l. means', 'Bachelor of Law', 1, 101, 67),
('hello', 'Hi , How are you?', 1, 100, 68),
('fine and u?', 'I am also fine. How can i help u?', 1, 100, 69),
('not so fine and u?', 'i am fine. But what is happen 2 u..How can i help u?', 1, 100, 70),
('good', 'I am also fine. How can i help u? ', 1, 100, 71),
('bad', 'Sorry dear. now tell me how can i help u?', 1, 100, 72),
('give me the definition of love', 'A feeling of strong or constant affection for a person. ', 1, 100, 73),
('what is love?', 'a feeling of strong or constant affection for a person.', 1, 100, 74),
('love means', 'a feeling of strong or constant affection for a person.', 1, 100, 75),
('love', 'a feeling of strong or constant affection for a person. ', 1, 100, 76),
('Are you a robot?', 'what do u think...but i am.. :)', 1, 101, 77),
('are u a robot?', 'what do you think .... but i am... :)', 1, 100, 78),
('are you a bot?', 'lets figure it out.... :)', 1, 100, 79),
('how can i figure it out?', 'chat with me..', 1, 100, 80),
('what is your name?', 'code 71.', 1, 100, 81),
('are u real?', 'yeah ..but not in real world... In the invisible world.. :)', 1, 100, 82),
('how old are you?', 'no one wants to tell his/ her age to a unknown person. but thank u.. :)', 1, 100, 83),
('where do u live?', 'Dhaka, Bangladesh', 1, 100, 84),
('which language do you speak?', 'English only', 1, 100, 85),
('what do you look like?', 'like my homepage picture... :)', 1, 100, 86),
('what are your hobbies?', 'Chatting is my only Hobby.. :)', 1, 100, 87),
('http means', 'Hyper Text Transfer Protocol', 1, 100, 88),
('i have some question', 'ok dear, tell me . what is it about?', 1, 100, 89),
('i have some questions', 'ok dear, tell me . what is it about?', 1, 100, 90),
('life', 'life is beautiful', 1, 100, 91);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
