-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2015 at 07:34 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `flicks_and_chill`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `title` text NOT NULL,
  `imageURL` text NOT NULL,
  `description` text NOT NULL,
  `genre` text NOT NULL,
  `year` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`title`, `imageURL`, `description`, `genre`, `year`, `rating`, `price`) VALUES
('The Dark Knight', 'https://upload.wikimedia.org/wikipedia/en/8/8a/Dark_Knight.jpg', 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, the caped crusader must come to terms with one of the greatest psychological tests of his ability to fight injustice.', 'Action', 2008, 9, 5),
('Inception', 'http://ia.media-imdb.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_SX214_AL_.jpg', 'A thief who steals corporate secrets through use of the dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.\r\n', 'Action', 2010, 9, 6),
('Star Wars: Episode V - The Empire Strikes Back', 'http://ia.media-imdb.com/images/M/MV5BMjE2MzQwMTgxN15BMl5BanBnXkFtZTcwMDQzNjk2OQ@@._V1_SY317_CR0,0,214,317_AL_.jpg', 'After the rebels have been brutally overpowered by the Empire on their newly established base, Luke Skywalker takes advanced Jedi training with Master Yoda, while his friends are pursued by Darth Vader as part of his plan to capture Luke.\r\n', 'Action', 1980, 9, 4),
('The Matrix', 'http://ia.media-imdb.com/images/M/MV5BMTkxNDYxOTA4M15BMl5BanBnXkFtZTgwNTk0NzQxMTE@._V1_SX214_AL_.jpg', 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.\r\n', 'Action', 1999, 9, 4),
('Saving Private Ryan', 'http://ia.media-imdb.com/images/M/MV5BNjczODkxNTAxN15BMl5BanBnXkFtZTcwMTcwNjUxMw@@._V1_SY317_CR9,0,214,317_AL_.jpg', 'Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.\r\n', 'Action', 1998, 9, 3),
('The Wolf of Wall Street', 'http://ia.media-imdb.com/images/M/MV5BMjIxMjgxNTk0MF5BMl5BanBnXkFtZTgwNjIyOTg2MDE@._V1_SX214_AL_.jpg', 'Based on the true story of Jordan Belfort, from his rise to a wealthy stock-broker living the high life to his fall involving crime, corruption and the federal government.\r\n', 'Comedy', 2013, 8, 10),
('The Hangover', 'http://ia.media-imdb.com/images/M/MV5BMTU1MDA1MTYwMF5BMl5BanBnXkFtZTcwMDcxMzA1Mg@@._V1_SX214_AL_.jpg', 'Three buddies wake up from a bachelor party in Las Vegas, with no memory of the previous night and the bachelor missing. They make their way around the city in order to find their friend before his wedding.\r\n', 'Comedy', 2009, 8, 3),
('Ted 2', 'http://ia.media-imdb.com/images/M/MV5BMjEwMDg3MDk1NF5BMl5BanBnXkFtZTgwNjYyODA1NTE@._V1_SX214_AL_.jpg', 'Newlywed couple Ted and Tami-Lynn want to have a baby, but in order to qualify to be a parent, Ted will have to prove he''s a person in a court of law.\r\n', 'Comedy', 2015, 7, 14),
('Superbad', 'http://ia.media-imdb.com/images/M/MV5BMTc0NjIyMjA2OF5BMl5BanBnXkFtZTcwMzIxNDE1MQ@@._V1_SX214_AL_.jpg', 'Two co-dependent high school seniors are forced to deal with separation anxiety after their plan to stage a booze-soaked party goes awry.\r\n', 'Comedy', 2007, 8, 5),
('21 Jump Street', 'http://ia.media-imdb.com/images/M/MV5BMTc3NzQ3OTg3NF5BMl5BanBnXkFtZTcwMjk5OTcxNw@@._V1_SX214_AL_.jpg', 'A pair of underachieving cops are sent back to a local high school to blend in and bring down a synthetic drug ring.\r\n', 'Comedy', 2012, 7, 2),
('The Babadook', 'http://ia.media-imdb.com/images/M/MV5BMTk0NzMzODc2NF5BMl5BanBnXkFtZTgwOTYzNTM1MzE@._V1_SY317_CR0,0,214,317_AL_.jpg', 'A single mother, plagued by the violent death of her husband, battles with her son''s fear of a monster lurking in the house, but soon discovers a sinister presence all around her.\r\n', 'Horror', 2014, 7, 4),
('The Shining', 'http://ia.media-imdb.com/images/M/MV5BODMxMjE3NTA4Ml5BMl5BanBnXkFtZTgwNDc0NTIxMDE@._V1_SY317_CR1,0,214,317_AL_.jpg', 'A family heads to an isolated hotel for the winter where an evil and spiritual presence influences the father into violence, while his psychic son sees horrific forebodings from the past and of the future.\r\n', 'Horror', 1980, 8, 7),
('Saw', 'http://ia.media-imdb.com/images/M/MV5BMjAyNTcxNzYwMV5BMl5BanBnXkFtZTgwMzQzNzM5MjE@._V1_SX214_AL_.jpg', 'Would you kill to live? When a madman tries to teach how much life is worth, two men find themselves in a room with no idea how they got there or why they''re there.\r\n', 'Horror', 2004, 8, 3),
('The Exorcist', 'http://ia.media-imdb.com/images/M/MV5BMTgxMjIyNTc5Nl5BMl5BanBnXkFtZTgwMjgwNDgwNzE@._V1_SY317_CR0,0,214,317_AL_.jpg', 'When a teenage girl is possessed by a mysterious entity, her mother seeks the help of two priests to save her daughter.\r\n', 'Horror', 1973, 8, 1),
('The Conjuring', 'http://ia.media-imdb.com/images/M/MV5BMTM3NjA1NDMyMV5BMl5BanBnXkFtZTcwMDQzNDMzOQ@@._V1_SX214_AL_.jpg', 'Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse.\r\n', 'Horror', 2013, 8, 3),
('Inglorious Basterds', 'http://ia.media-imdb.com/images/M/MV5BMjIzMDI4MTUzOV5BMl5BanBnXkFtZTcwNDY3NjA3Mg@@._V1_SY317_CR0,0,214,317_AL_.jpg', 'In Nazi-occupied France during World War II, a plan to assassinate Nazi leaders by a group of Jewish U.S. soldiers coincides with a theatre owner''s vengeful plans for the same.\r\n', 'War', 2009, 8, 5),
('300', 'http://ia.media-imdb.com/images/M/MV5BMjAzNTkzNjcxNl5BMl5BanBnXkFtZTYwNDA4NjE3._V1_SX214_AL_.jpg', 'King Leonidas of Sparta and a force of 300 men fight the Persians at Thermopylae in 480 B.C.\r\n', 'War', 2006, 8, 4),
('Full Metal Jacket', 'http://ia.media-imdb.com/images/M/MV5BMjA4NzY4ODk4Nl5BMl5BanBnXkFtZTgwOTcxNTYxMTE@._V1_SX214_AL_.jpg', 'A pragmatic U.S. Marine observes the dehumanizing effects the U.S.-Vietnam War has on his fellow recruits from their brutal boot camp training to the bloody street fighting in Hue.\r\n', 'War', 1987, 8, 2),
('The Imitation Game', 'http://ia.media-imdb.com/images/M/MV5BNDkwNTEyMzkzNl5BMl5BanBnXkFtZTgwNTAwNzk3MjE@._V1_SY317_CR0,0,214,317_AL_.jpg', 'During World War II, mathematician Alan Turing tries to crack the enigma code with help from fellow mathematicians.\r\n', 'War', 2014, 8, 7),
('American Sniper', 'http://ia.media-imdb.com/images/M/MV5BMTkxNzI3ODI4Nl5BMl5BanBnXkFtZTgwMjkwMjY4MjE@._V1_SX214_AL_.jpg', 'Navy S.E.A.L. sniper Chris Kyle''s pinpoint accuracy saves countless lives on the battlefield and turns him into a legend. Back home to his wife and kids after four tours of duty, however, Chris finds that it is the war he can''t leave behind.\r\n', 'War', 2014, 7, 18),
('Interstellar', 'http://ia.media-imdb.com/images/M/MV5BMjIxNTU4MzY4MF5BMl5BanBnXkFtZTgwMzM4ODI3MjE@._V1_SX214_AL_.jpg', 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity''s survival.', 'Action', 2014, 9, 12);

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `title` text NOT NULL,
  `imageURL` text NOT NULL,
  `description` text NOT NULL,
  `genre` text NOT NULL,
  `year` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `accountType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `accountType`) VALUES
('admin', 'admin', 2);
