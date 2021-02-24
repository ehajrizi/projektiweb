-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 11:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektiweb-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookid` int(11) NOT NULL,
  `titulli` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `autori` varchar(255) NOT NULL,
  `linku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `titulli`, `foto`, `autori`, `linku`) VALUES
(1, 'The General of The Dead Army', '../gjuv.jpg', 'Ismail Kadare', 'https://www.goodreads.com/book/show/223666.The_General_of_the_Dead_Army?from_search=true&from_srp=true&qid=hvVBVXeTWJ&rank=12'),
(2, 'The Dead River', '../lumi.jpg', 'Jakov Xoxa', 'https://www.goodreads.com/book/show/15846260-lumi-i-vdekur'),
(3, 'Chronicle in Stone', '../kg.jpg', 'Ismail Kadare', 'https://www.goodreads.com/book/show/708124.Chronicle_in_Stone?from_search=true&from_srp=true&qid=0ZDXuwVMfm&rank=1'),
(4, 'If I Were A Boy', '../std.jpg', 'Haki Stermilli', 'https://www.goodreads.com/book/show/13615770-if-i-were-a-boy'),
(5, 'Doruntine', '../dor.jpg', 'Ismail Kadare', 'https://www.goodreads.com/book/show/223668.Doruntine'),
(6, 'The Palace of Dreams', '../pod.jpg', 'Ismail Kadare', 'https://www.goodreads.com/book/show/797635.The_Palace_of_Dreams?ac=1&from_search=true&qid=qb7BrCW2uz&rank=1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `firstname`, `lastname`, `subject`) VALUES
(1, 'Elita', 'Hajrizi', 'test test'),
(2, 'Albana ', 'Hajdini', 'test test 2');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `artistid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`artistid`, `name`, `role`, `description`, `foto`) VALUES
(1, 'Nexhmije Pagarusha', 'Nexhmije Pagarusha - 7 May 1933 – 7 February 2020\r\nWas a Kosovo-Albanian vocalist, musician and actress from Republic of Kosovo, often referred to as the queen of Kosovan music. \r\nPopular songs:  Baresha ,Ani mori nuse, Mora testin etc.', '', '../nexhmijepagarusha.png'),
(2, 'Elita 5', 'Elita 5 is an Albanian rock band formed in Tetovë in 1988. \r\nThe group consisted of vocalist Arif Ziberi, guitarist Mevaip Mustafi, drummer Besim Ibraimi, bass player Agron Idrizi and keyboardist Nexhat Mujovi.\r\nPopular songs: Nuk jam une diktator,Degjo,M', '', '../elita5.png'),
(3, 'Sabri Fejzullahu', 'Sabri Fejzullahu (born in Besiana on September 16, 1947) is an actor, singer and politician from Kosovo.\r\nSabri Fejzullahu belongs to the old generation of singers who has managed to take its place in the entertainment music of Kosovo in the new time, but', '', '../sabrifejzullahu.png'),
(4, 'Shkurte Fejza', 'Shkurte Fejza was born on November 18, 1961 in Mushtisht of Theranda, an Albanian singer from Kosovo.\r\nPopular songs: Mora fjale, Fati,Adem Jashari etc.', '', '../shkurtefejza.png'),
(5, 'Sinan Vllasaliu', '\r\nSinan Vllasaliu was born in Prishtina on March 31, 1963. He started playing music at the age of 7-8.\r\nPopular songs: Mos ia falni,Pa Fat, Jemi nda etc.', '', '../sinanvllasaliu.png'),
(6, 'Eli Fara', 'Eli Fara is a popular Albanian folk singer from Korçë. She received the honor of being named Merited Artist of Albania by the Albanian government prior to 2000 and is one of Albanian\'s best-known singers.\r\nPopular Songs:Nata e Dasmave, Te dua per vete, So', '', '../elifara.png');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `placeid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`placeid`, `name`, `description`, `link`) VALUES
(1, 'Prishtina', 'Pristina is the capital of Kosovo[a] and the seat of the eponymous municipality and district. Its population is predominantly Albanian-speaking constituting the second-largest such city in Europe, after Tirana. The city is located in the northeastern sect', 'http://farm7.static.flickr.com/6172/6200449324_dcf0c9e7a1_b.jpg'),
(2, 'Prevalla', 'Prevalla is a ski resort and touristic village which approximately is 30 km away from Prizren, Kosovo and about twelve kilometers from Brezovica, the largest ski center in Kosovo. Prevalla (Prevalac) is a popular destination for hikers or skiers. The vill', 'https://www.balkanhikingadventure.com/wp-content/uploads/2015/12/DSC09201.jpg'),
(3, 'Prizreni', 'Prizren is a city in Kosovo and the seat of the eponymous municipality and district. As of the constitution of Kosovo, the city is designated as the historical capital.', 'https://upload.wikimedia.org/wikipedia/commons/e/e5/37_Prizreni_-_Xhamia_e_Sinan_Pash%C3%ABs_-_The_Sinan_Pasha_Moscue.JPG'),
(4, 'Liqeni i Badovcit', 'Badovc Lake or Badovac Lake is an artificial reservoirs on the river \"Gračanka\" two kilometers above Gračanica, Kosovo, built in 1963–1966 in order to supply city of Pristina with water.', 'https://live.staticflickr.com/8878/17943734213_13fd3d16f4_b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `webusers`
--

CREATE TABLE `webusers` (
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` binary(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webusers`
--

INSERT INTO `webusers` (`userid`, `name`, `username`, `password`, `email`, `role`) VALUES
(1, 'Elita', 'elita123', 0x2432792431302437657871336446326f426f4c7a44344764415363732e6c706b466b6e4f6c6c6477574c626a4469684f36677a4c656675636c6b6b43, 'eh47718@ubt-uni.net', 1),
(2, 'Albana Hajdini', 'albana123', 0x243279243130242f78794c62654d3279433056555651786569535861754a6953577551594938416b6f526f76796f55596b4f676f70636d707a543371, 'ah48391@ubt-uni.net', 0),
(4, 'Elita', 'elita', 0x2432792431302447314c785745365344532f7a68726b306339734e7075306c63336b7a552f357a4357364f654d7877667974337435594d4a64465832, 'elita@gmail.com', 0),
(5, 'eli', 'eli123', 0x2432792431302455566f786a5669794e4f6d4e7a436c70454e5a66742e2f494954314a4c6c324d736b57504f41564e65756a6d4e6362746b69426c65, 'eli123@gmail.com', 0),
(7, 'Albana Haj', 'albhaj', 0x24327924313024646965753371364b535a58454964356e31564e4c642e58777a56726a77624d465072484f3678396937464f7775436b4a6848594c32, 'albhaj@gmail.com', 0),
(8, '', '', 0x24327924313024634b484b676c7164495a344e41694b6d51314f436b2e54364a455056735364432f6a5a596d3278534679784b72356c6e726e4b362e, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`artistid`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`placeid`);

--
-- Indexes for table `webusers`
--
ALTER TABLE `webusers`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `artistid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `placeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `webusers`
--
ALTER TABLE `webusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
