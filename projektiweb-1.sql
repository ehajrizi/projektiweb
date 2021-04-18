-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 06:14 PM
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
  `pershkrimi` text NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `pagenr` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `edited_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `titulli`, `foto`, `autori`, `pershkrimi`, `isbn`, `pagenr`, `created_by`, `edited_by`) VALUES
(1, 'The General of The Dead Army', '../gjuv.jpg', 'Ismail Kadare', 'This is the story of an Italian general, accompanied by his chaplain, charged with the mission of scouring Albania in search of the bones of their fallen countrymen, killed twenty years earlier during World War II.', '1566636841', 256, '', ''),
(2, 'The Dead River', '../lumi.jpg', 'Jakov Xoxa', 'The story revolves around the romantic love between the two main characters, Vita and Adil, and the ill fates of three Albanian families which all meet in a little town called Trokth in Albania. The seemingly independent stories that revolve around the three families are well interwoven with the fates of the two lovers.', '', 0, '', ''),
(3, 'Chronicle in Stone', '../kg.jpg', 'Ismail Kadare', 'The Second World War is about to start, but life for a young boy in a small town in Albania is still a game. Yet, as the country falls to the Italians, then the Greeks, then eventually to the Nazis, and is mercilessly bombed by the British, the boy grows up.', '', 0, '', ''),
(4, 'If I Were A Boy', '../std.jpg', 'Haki Stermilli', 'The novel \"If I Were a Boy\" was an echo of this social movement and one of the works where it was reflected more widely and directly. The novel has the form of a diary, kept by its main character, the young girl, Dija. Through her notes, the reader is acquainted with the daily life of an ordinary Albanian citizen family, where the marked social backwardness is felt, as well as the miserable position of the woman in the family, who must lead a closed life within the walls of the house and according to patriarchal laws.', '', 175, '', ''),
(5, 'Doruntine', '../dor.jpg', 'Ismail Kadare', '', '', 0, '', ''),
(6, 'The Palace of Dreams', '../pod.jpg', 'Ismail Kadare', 'A sinister totalitarian ministry called the Palace of Dreams recruits Mark-Alem to sort, classify, and interpret the dreams of the people in the empire, seeking the master-dreams that give clues to the empire\'s destiny.', '', 0, '', ''),
(8, 'The Highland Lute', '../lm.jpg', 'Gjergj Fishta', 'The Highland Lute became enormously popular in the 1920s and 30s, with its vivid, archetypal characters and panoramic descriptions: the backdrop to Albania\'s historical battles for freedom and independence from the Turks and Montenegrins. It propelled its author, Gjergj Fishta, to universal recognition as the national poet of Albania until the Communists took power in 1944. On its first public recital in post-Communist Albania, 45 years later, many in the audience still knew parts by heart. Robert Elsie\'s masterful new translation, the first to appear in English, captures the spirit of the original and, accompanied by a new critical introduction, will introduce the poem to a new generation of admirers.', '1845111184', 256, '', ''),
(9, 'Broken April', '../ba.jpg', 'Ismail Kadare', 'From the moment that Gjorg\'s brother is killed by a neighbour, his own life is forfeit: for the code of Kanun requires Gjorg to kill his brother\'s murderer and then in turn be hunted down. After shooting his brother\'s killer, young Gjorg is entitled to thirty days\' grace - not enough to see out the month of April.\r\n\r\nThen a visiting honeymoon couple cross the path of the fugitive. The bride\'s heart goes out to Gjorg, and even these \'civilised\' strangers from the city risk becoming embroiled in the fatal mechanism of vendetta.', '0099449870', 216, '', ''),
(10, 'The Siege', '../ts.jpg', 'Ismail Kadare', 'In the early fifteenth century, as winter falls away, the people of Albania know that their fate is sealed. They have refused to negotiate with the Ottoman Empire, and war is now inevitable. Soon enough dust kicked up by Turkish horses is spotted from a citadel. Brightly coloured banners, hastily constructed minarets and tens of thousands of men fill the plain below. From this moment on, the world is waiting to hear that the fortress has fallen. The Siege tells the enthralling story of the weeks and months that follow – of the exhilaration and despair of the battlefield, the constantly shifting strategies of war, and those whose lives are held in balance, from the Pasha himself to the technicians, artillerymen, astrologer, blind poet and harem of women that accompany him. Brilliantly vivid, as insightful as it is compelling, The Siege is an unforgettable account of the clash of two great civilisations. As a portrait of war, it resonates across the centuries and confirms Ismail Kadare as one of our most significant writers.', '184767030X ', 328, '', ''),
(11, 'Why?!', '../pse.jpg', 'Sterjo Spasse', 'Sterjo Spassa\'s artistic pens depicted the life of a pessimistic boy with sorrowful colors. The problem of love is the main point around which the characters of the novel revolve. Our habits, especially those of engagement and marriage, are painted with conscious precision. remains man without singing this book of poison and melancholy.', '1928374652', 205, '', ''),
(12, 'Free Verse', '../vl.jpg', 'Millosh Gjergj Nikolla (Migjeni)', 'Migjen expressed his dissatisfaction about the social reality of that time. Gave shocking images of the oppressed and exploited classes. In his work, for the first time, complete and very powerful figures and portraits of the highlander and the worker, of the Albanian woman who was a victim of a double exploitation, are obtained.', '3925196315', 117, '', ''),
(13, 'Tirana Blues', '../tb.jpg', 'Fatos Kongoli', 'At the start, a banal scene from everyday life: a man is taking a bath. He is a history teacher, constantly changing his phone number and cheating on his wife. This man is going to be the victim of an attack. Who wanted to kill him? First question we ask ourselves and which legitimately lets us think that we have just opened a detective story. There is a cop, a victim, there is even a beautiful woman; wrong path, however. The rest of the story is then taken over by three narrators full of states of mind who have in common only the fact of being linked to the attack: the professor himself, one of those responsible for the attack. and the inspector conducting the investigation. \"Tirana blues\" is a contemporary comic novel which intelligently mocks the decay of a society plagued by the mafia where the characters themselves accept the game of pretense.', '2743616288', 219, '', ''),
(14, 'Aphrodite back in the village', '../af.jpg', 'Sterjo Spasse', 'Aferdita Skënderaj is a teacher who works in a mountain village. Aphrodite works with great will and desire to improve the intellectual condition of the villagers.\r\n\r\nIn the end she manages to settle the disputes between the two villages.', '1739203748', 192, '', ''),
(15, 'Flag dealer', '../tf.png', 'Ernest Koliqi', 'This collection of novels follows the sequel to the volume that precedes them, \"Shadow of the Mountains\". After returning from exile and experience as a teacher in Vlora and Shkodra, he gains a more mature perspective on the constituent elements of the civic and provincial environment. The elements of the text continue to have autobiographical elements, where the identification of Koliqi with Hilush Vilza is noticed, giving the text a scalable extension towards mainly urban topics. It elaborates in one way or another the differences between the social strata, the stratifications are distinguished through the narrative, description, dialogue and other forms of discourse, resembling the urban dialect of Shkodra of that time.', '9995669242', 152, '', ''),
(16, 'The Country Where No One Ever Dies', '../uc.jpg', 'Ornela Vorpsi', 'A young girl’s father is constantly forcing her to kiss him, and her aunt predicts that she will grow up to be a whore. With Albania\'s communist regime crumbling around them, sex, dictatorship, and death are inescapable subjects for the girl and her family;though the protagonist of The Country Where No One Ever Dies always confronts the ridiculousness of her often brutal reality with unflappable irony and a peculiar kind of common sense. Her name and age changing from moment to moment, she is an unforgettable portrait of the imagination under siege, while The Country Where No One Ever Dies is itself a one-of-a-kind atlas to a land where black comedy is simply a way of life.', '1564785688', 109, '', ''),
(22, 'elitua', '../dor.jpg', 'edfghjk', 'xtfcghbjknjhg', '253746438', 123, '', ''),
(23, 'trfyhijlk;', '../elita5.png', 'dfghjkl', 'ghjkl', '53624423', 243, '', ''),
(24, 'resdtgyhjoi', '../nexhmijepagarusha.png', 'trdfyuijo', 'szdxfghjk', '6548359', 234, '', ''),
(25, 'tyujk', '../nexhmijepagarusha.png', 'ghjk', 'tdfyghijok;', '4534724', 234, '', ''),
(26, 'rtyuio', '../elifara.png', 'rtyui', 'cfghjk', '76548348', 364, '', ''),
(27, 'tdrfyuijokp', '../sabrifejzullahu.png', 'rtuil', 'trfyuiokpl', '67543468', 233, '', ''),
(28, 'fgyuijokp', '../sinanvllasaliu.png', 'dfghjkopl', 'cfyguijopkl', '5472858', 344, '', ''),
(29, 'fgyuijokp', '../sinanvllasaliu.png', 'dfghjkopl', 'cfyguijopkl', '5472858', 344, '', ''),
(30, 'tdryguiokp', '../shkurtefejza.png', '4serdtyuijok', 'yvghjiokp', '7625432', 764, '', ''),
(32, 'hjbsvkdld', '../dor.jpg', 'cghjkl', 'vbnm,', '74336295', 634, '', ''),
(33, 'xxfghjkl', '../dor.jpg', 'restdygujkl', 'esrtdygujk', '762643347', 987, '', ''),
(34, 'rtfgyhjoik', '../kg.jpg', 'erdghjkl', 'opopop', '234567', 45, '', 'elita123'),
(40, 'tyuhj', '../dor.jpg', 'dok', 'jh', '237648', 34, '', ''),
(41, 'ok', '../gjuv.jpg', 'dok', 'ikl', '237648', 46, '', ''),
(42, 'ok', '../lumi.jpg', 'dok', 'kjll', '237648', 12, 'elita123', ''),
(43, 'Wedding', '../dasma.jpg', 'Ismail Kadare', 'The wedding ( Albanian Dasma ) is a novel by Ismail Kadare , which was first published in 1967 in the magazine Nëntori with the title Lëkura e daulles ( German eardrum ). In 1968 the novel was published as a separate book by Naim Frashëri . [1] It was translated into English and dramatized by BBC Radio in 1969 under the title Weddings and Ghosts .\r\n\r\nThe novel was written in 1967 in an unfavorable climate for free-spirited creativity and writers who had crossed the party line .', '1065165210', 258, 'albana123', '');

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
(2, 'Albana ', 'Hajdini', 'test test 2'),
(6, 'eli', 'loe', 'elooo');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `written_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `text`, `written_by`) VALUES
(2, 'elifara.png', 'fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!fewjf!', ''),
(4, 'elita5.png', 'OCULJDBVOEBVLWDVVLKVBLKBVKEBVLJBVKJLBVLJBVCJSBDLJRVLLEJVB', ''),
(14, 'gjuv.jpg', 'OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!OKAY!', ''),
(15, '7f40dabf52ebafcfd7fda0b7a26cbe1c.jpg', 'I LOVED THIS BOOK SO MUCH! THIS QUOTE WAS SO GOOD!', ''),
(18, '', 'gvhbjkl;j', ''),
(20, 'dor.jpg', 'hdwklJF', ''),
(21, '', 'gvhjklk;gh', ''),
(22, 'elita5.png', 'ythjytguhijkughjk', ''),
(23, '', 'dfghjkl', ''),
(24, 'dor.jpg', 'shume i bukur libri', 'elita123'),
(25, 'b9cc2c48e6facda3418786dc3147da0f.png', 'hello from xixellonjat', 'elita123'),
(26, 'a583bfe3985d7af0dd279588307d3325.jpg', 'ckemi', 'albana123');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `artistid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `edited_by` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`artistid`, `name`, `description`, `foto`, `created_by`, `edited_by`, `link`) VALUES
(1, 'Nexhmije', 'Nexhmije Pagarusha - 7 May 1933 – 7 February 2020\r\nWas a Kosovo-Albanian vocalist, musician and actress from Republic of Kosovo, often referred to as the queen of Kosovan music. \r\nPopular songs:  Baresha ,Ani mori nuse, Mora testin etc.', '../nexhmijepagarusha.png', '', 'albana123', 'https://www.youtube.com/watch?v=gE4QciQMaEg&list=PLjS6QhYnZxF5chx9_SKqc7HqRbb1wxNGv'),
(2, 'Elita 5', 'Elita 5 is an Albanian rock band formed in Tetovë in 1988. \r\nThe group consisted of vocalist Arif Ziberi, guitarist Mevaip Mustafi, drummer Besim Ibraimi, bass player Agron Idrizi and keyboardist Nexhat Mujovi.\r\nPopular songs: Nuk jam une diktator,Degjo,M', '../elita5.png', '', '', 'https://www.youtube.com/watch?v=JyBpPo0LUEw&list=PLQ9BA7jDR87q-PmHSPhJ1O-NL5brGXDG_'),
(3, 'Sabri Fejzullahu', 'Sabri Fejzullahu (born in Besiana on September 16, 1947) is an actor, singer and politician from Kosovo.\r\nSabri Fejzullahu belongs to the old generation of singers who has managed to take its place in the entertainment music of Kosovo in the new time, but', '../sabrifejzullahu.png', '', '', 'https://www.youtube.com/watch?v=prirSjpO9tk&list=PLV7rNgxAa12y0DjJk9gixHQ4clJHuJoel'),
(4, 'Shkurte Fejza', 'Shkurte Fejza was born on November 18, 1961 in Mushtisht of Theranda, an Albanian singer from Kosovo.\r\nPopular songs: Mora fjale, Fati,Adem Jashari etc.', '../shkurtefejza.png', '', '', 'https://www.youtube.com/watch?v=CBBOtITApwg&list=PL7G8btMhXYfM1F7-x9HBvwy11YDQhTncH'),
(5, 'Sinan Vllasaliu', '\r\nSinan Vllasaliu was born in Prishtina on March 31, 1963. He started playing music at the age of 7-8.\r\nPopular songs: Mos ia falni,Pa Fat, Jemi nda etc.', '../sinanvllasaliu.png', '', '', 'https://www.youtube.com/watch?v=DCHXLkg2aww&list=PLZWvtEBjg1Wd0X7ODBrdGeZT6XaCiYXF0'),
(6, 'Eli Fara', 'Eli Fara is a popular Albanian folk singer from Korçë. She received the honor of being named Merited Artist of Albania by the Albanian government prior to 2000 and is one of Albanian\'s best-known singers.\r\nPopular Songs:Nata e Dasmave, Te dua per vete, So', '../elifara.png', '', '', 'https://www.youtube.com/watch?v=bxOEsyLbwdw&list=PLgpbtA6NIJb9Tp6Uw9oDJAEn6RcigRbdy');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `placeid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `edited_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`placeid`, `name`, `description`, `link`, `created_by`, `edited_by`) VALUES
(1, 'Prishtina', 'Pristina is the capital of Kosovo[a] and the seat of the eponymous municipality and district. Its population is predominantly Albanian-speaking constituting the second-largest such city in Europe, after Tirana. The city is located in the northeastern sect', 'http://farm7.static.flickr.com/6172/6200449324_dcf0c9e7a1_b.jpg', '', ''),
(2, 'Prevalla', 'Prevalla is a ski resort and touristic village which approximately is 30 km away from Prizren, Kosovo and about twelve kilometers from Brezovica, the largest ski center in Kosovo. Prevalla (Prevalac) is a popular destination for hikers or skiers. The vill', 'https://www.balkanhikingadventure.com/wp-content/uploads/2015/12/DSC09201.jpg', '', ''),
(3, 'Prizreni', 'Prizren is a city in Kosovo and the seat of the eponymous municipality and district. As of the constitution of Kosovo, the city is designated as the historical capital.', 'https://upload.wikimedia.org/wikipedia/commons/e/e5/37_Prizreni_-_Xhamia_e_Sinan_Pash%C3%ABs_-_The_Sinan_Pasha_Moscue.JPG', '', ''),
(4, 'Liqeni i Badovcit', 'Badovc Lake or Badovac Lake is an artificial reservoirs on the river \"Gračanka\" two kilometers above Gračanica, Kosovo, built in 1963–1966 in order to supply city of Pristina with water.', 'https://live.staticflickr.com/8878/17943734213_13fd3d16f4_b.jpg', '', ''),
(5, 'Gjakova', 'gjakova o ky vend mistik', 'https://crowdsourcingweek.com/wp-content/uploads/2015/08/Gjakova_cth1.jpg', 'albana123', 'albana123');

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
(2, 'Albana Hajdini', 'albana123', 0x243279243130242f78794c62654d3279433056555651786569535861754a6953577551594938416b6f526f76796f55596b4f676f70636d707a543371, 'ah48391@ubt-uni.net', 1),
(4, 'Elita', 'elita5', 0x2432792431302447314c785745365344532f7a68726b306339734e7075306c63336b7a552f357a4357364f654d7877667974337435594d4a64465832, 'elita@gmail.com', 0),
(7, 'Albana Haj', 'albhaj', 0x24327924313024646965753371364b535a58454964356e31564e4c642e58777a56726a77624d465072484f3678396937464f7775436b4a6848594c32, 'albhaj@gmail.com', 0);

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
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `artistid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `placeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `webusers`
--
ALTER TABLE `webusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
