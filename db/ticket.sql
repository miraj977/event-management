-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 04:42 AM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--
CREATE DATABASE IF NOT EXISTS `ticket`;
USE `ticket`;
-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL,
  `about1` text,
  `about2` text,
  `about3` text,
  `meet` text,
  `whyus` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about1`, `about2`, `about3`, `meet`, `whyus`) VALUES
(1, 'Established as one of the leading travel brands within Australia, we at Everest view Travel and Tours, we take pride in offering unparalleled travel solutions to the customers travelling around the world. Backed by a comprehensive tech know-how and extensive research based planning, we have developed tours and holiday packages that ensure memories are made for a lifetime. Our personalized solution to each of your trip are certain to impress you as a traveler.', 'Our services include a plethora of products, ranging from cheapest flights, holidays, hotels, tour packages and deals, cruises, travel insurance, book now-pay later facility, travel visa services and much more. Our strength as a travel company is our ability to cater for all range of travel itineraries.  Whether itâ€™s unforgiving mountain expedition, mildly difficult trekking to luxury city sightseeing, we will be right with you in every leg of your trip.', 'Our hassle free travel is our priority and we deploy unique solutions to put together the best travel packages that will make your trip one of the best so far. Backed by 24/7 customer care services from our offices in Melbourne and Sydney and our productive partnerships across the sub-continent including Nepal, India, Bangladesh and Pakistan, Bhutan and Myanmar,  we make your dream travel â€“ possible!', 'Meet with these very dedicated team players. We guarantee that you will enjoy your go !!!', 'Our hassle free travel is our priority and we deploy unique solutions to put together the best travel packages that will make your trip one of the best so far. Backed by 24/7 customer care services from our offices in Melbourne and Sydney and our productive partnerships across the sub-continent including Nepal, India, Bangladesh and Pakistan, Bhutan and Myanmar,  we make your dream travel â€“ possible!'),
(1, 'Established as one of the leading travel brands within Australia, we at Everest view Travel and Tours, we take pride in offering unparalleled travel solutions to the customers travelling around the world. Backed by a comprehensive tech know-how and extensive research based planning, we have developed tours and holiday packages that ensure memories are made for a lifetime. Our personalized solution to each of your trip are certain to impress you as a traveler.', 'Our services include a plethora of products, ranging from cheapest flights, holidays, hotels, tour packages and deals, cruises, travel insurance, book now-pay later facility, travel visa services and much more. Our strength as a travel company is our ability to cater for all range of travel itineraries.  Whether itâ€™s unforgiving mountain expedition, mildly difficult trekking to luxury city sightseeing, we will be right with you in every leg of your trip.', 'Our hassle free travel is our priority and we deploy unique solutions to put together the best travel packages that will make your trip one of the best so far. Backed by 24/7 customer care services from our offices in Melbourne and Sydney and our productive partnerships across the sub-continent including Nepal, India, Bangladesh and Pakistan, Bhutan and Myanmar,  we make your dream travel â€“ possible!', 'Meet with these very dedicated team players. We guarantee that you will enjoy your go !!!', 'Our hassle free travel is our priority and we deploy unique solutions to put together the best travel packages that will make your trip one of the best so far. Backed by 24/7 customer care services from our offices in Melbourne and Sydney and our productive partnerships across the sub-continent including Nepal, India, Bangladesh and Pakistan, Bhutan and Myanmar,  we make your dream travel â€“ possible!'),
(1, 'Established as one of the leading travel brands within Australia, we at Everest view Travel and Tours, we take pride in offering unparalleled travel solutions to the customers travelling around the world. Backed by a comprehensive tech know-how and extensive research based planning, we have developed tours and holiday packages that ensure memories are made for a lifetime. Our personalized solution to each of your trip are certain to impress you as a traveler.', 'Our services include a plethora of products, ranging from cheapest flights, holidays, hotels, tour packages and deals, cruises, travel insurance, book now-pay later facility, travel visa services and much more. Our strength as a travel company is our ability to cater for all range of travel itineraries.  Whether itâ€™s unforgiving mountain expedition, mildly difficult trekking to luxury city sightseeing, we will be right with you in every leg of your trip.', 'Our hassle free travel is our priority and we deploy unique solutions to put together the best travel packages that will make your trip one of the best so far. Backed by 24/7 customer care services from our offices in Melbourne and Sydney and our productive partnerships across the sub-continent including Nepal, India, Bangladesh and Pakistan, Bhutan and Myanmar,  we make your dream travel â€“ possible!', 'Meet with these very dedicated team players. We guarantee that you will enjoy your go !!!', 'Our hassle free travel is our priority and we deploy unique solutions to put together the best travel packages that will make your trip one of the best so far. Backed by 24/7 customer care services from our offices in Melbourne and Sydney and our productive partnerships across the sub-continent including Nepal, India, Bangladesh and Pakistan, Bhutan and Myanmar,  we make your dream travel â€“ possible!'),
(1, 'Established as one of the leading travel brands within Australia, we at Everest view Travel and Tours, we take pride in offering unparalleled travel solutions to the customers travelling around the world. Backed by a comprehensive tech know-how and extensive research based planning, we have developed tours and holiday packages that ensure memories are made for a lifetime. Our personalized solution to each of your trip are certain to impress you as a traveler.', 'Our services include a plethora of products, ranging from cheapest flights, holidays, hotels, tour packages and deals, cruises, travel insurance, book now-pay later facility, travel visa services and much more. Our strength as a travel company is our ability to cater for all range of travel itineraries.  Whether itâ€™s unforgiving mountain expedition, mildly difficult trekking to luxury city sightseeing, we will be right with you in every leg of your trip.', 'Our hassle free travel is our priority and we deploy unique solutions to put together the best travel packages that will make your trip one of the best so far. Backed by 24/7 customer care services from our offices in Melbourne and Sydney and our productive partnerships across the sub-continent including Nepal, India, Bangladesh and Pakistan, Bhutan and Myanmar,  we make your dream travel â€“ possible!', 'Meet with these very dedicated team players. We guarantee that you will enjoy your go !!!', 'Our hassle free travel is our priority and we deploy unique solutions to put together the best travel packages that will make your trip one of the best so far. Backed by 24/7 customer care services from our offices in Melbourne and Sydney and our productive partnerships across the sub-continent including Nepal, India, Bangladesh and Pakistan, Bhutan and Myanmar,  we make your dream travel â€“ possible!');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `filepath` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `filename`, `filepath`) VALUES
(18, 'section-8.jpg', 'assets/banner/'),
(17, 'big_50.jpg', 'assets/banner/'),
(16, 'gallery_bg.jpg', 'assets/banner/'),
(15, 'big_12.jpg', 'assets/banner/');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL,
  `booking` text NOT NULL,
  `ticket` varchar(20) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` text NOT NULL,
  `airline` text NOT NULL,
  `issue` date NOT NULL,
  `date` date NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `booking`, `ticket`, `fname`, `mname`, `lname`, `email`, `mobile`, `airline`, `issue`, `date`, `notes`) VALUES
(30, '894jik', '567098494032', 'Anusandhan', '', 'Adhikari', 'anusandhanadhikari@gmail.com', '04157688444', 'TG', '0000-00-00', '0000-00-00', ''),
(31, 'O3W4AX', '000', 'GIRI/AKRITI  ', 'ss', ' KC/ANKITA', 'sss@gmail.com', '0', 'tg', '2017-12-29', '2018-02-15', 'bne ktm bne'),
(32, 'O5AWV2', '000', 'pratima', 'm', 'tamang', 'sss@gmail.com', '000', 'sq', '2017-12-29', '2017-12-31', 'mel ktm mel'),
(33, 'O4LQML', '000', 'pratima', 'm', 'tamang', 'sss@gmail.com', '00', 'sq', '2017-12-29', '2017-12-31', 'MEL KTM MEL'),
(34, 'M5ANVS', '000', 'RAOLA/UMESH   ', 'M', 'ROILA/MAHESH', 'SSS@GMAIL.COM', '00', 'SQ', '2017-12-28', '2018-02-28', 'drw bkk drw'),
(35, 'LMLLBX', '000', 'bima', 'm', 'tamang', 'sss@gmail.com', '00', 'tg', '2017-12-28', '2018-01-22', 'mel ktm mel'),
(36, 'LMJJLG', '000', 'bima', 'm', 'tamang', 'sss@gmail.com', '00', 'sq', '2017-12-28', '2018-01-21', 'mel ktm mel'),
(37, 'JC9M8L', '000', 'CHIN BAHADUR', 'm', 'NEPALI/', 'sss@gmail.com', '00', 'od', '2017-12-21', '2018-01-05', 'bne ktm bne');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(12) NOT NULL,
  `category` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
(1, 'Travel'),
(8, 'Tour'),
(9, 'Hike'),
(10, 'Homes'),
(11, 'Ride'),
(12, 'Nightstay'),
(13, 'Lias');

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

CREATE TABLE IF NOT EXISTS `tblaccount` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `forgot` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`uid`, `username`, `password`, `forgot`, `email`) VALUES
(14, 'nucha', '2c0c72d406e965795ea7593cad586511', '', 'd@m.com'),
(16, 'miraj', 'c5edac1b8c1d58bad90a246d8f08f53b', 'sadmin', 'dungeon.master977@gmail.com'),
(22, 'nucha', 'KHADKA', 'KHADKA', 'dungeon.master977@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
  `Id` int(11) NOT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`Id`, `uname`, `pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomment`
--

CREATE TABLE IF NOT EXISTS `tblcomment` (
  `comment_Id` int(11) NOT NULL,
  `comment` text,
  `post_Id` int(11) DEFAULT NULL,
  `datetime` text,
  `user_Id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpost`
--

CREATE TABLE IF NOT EXISTS `tblpost` (
  `post_Id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `cat_id` text,
  `date` date DEFAULT NULL,
  `view` int(11) DEFAULT '0',
  `time` text,
  `organizer` text NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `website` text,
  `email` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `venue` text,
  `lat` text NOT NULL,
  `lon` text NOT NULL,
  `featured` int(11) DEFAULT NULL,
  `filepath` text,
  `filename` text
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpost`
--

INSERT INTO `tblpost` (`post_Id`, `title`, `content`, `cat_id`, `date`, `view`, `time`, `organizer`, `phone`, `website`, `email`, `price`, `venue`, `lat`, `lon`, `featured`, `filepath`, `filename`) VALUES
(55, 'Project X', 'We''ve all seen it when flipping through Instagram; those perfect, cinematic portraits of pregnant women in enchanted forests, happy couples lounging on the beach, and girls posing like models in abandoned buildings. Don''t you ever wonder how those photos came to be? Well, Brazilian wedding and family photographer Gilmar Silva has put together a brilliant series of ''behind-the-scenes'' reveals that prove professional photoshoots are definitely not always what they seem - and we''re not just talking about the amount of Photoshop that comes into play. The project, titled LUGARxPHOTO (''place and photo''), is both a humorous look at the lengths we go to get a decent shot, and an analysis of the illusions we perpetuate and often buy into through images of ourselves. Scroll down to see it all for yourself, and let us know in the comments if you laughed or cringed!', 'Tour, Music', '1992-05-02', 0, '12:00 am', 'X Jam', '0411381165', 'x.com', 'sd@dm.com', 120, 'Syd', '', '151.209296', 1, '../assets/uploads/', '15.jpg'),
(56, 'Their visit to Orange', 'According to the Event Manager Mr Sunil Ramailoo Added This time its going to be amazing We have strong plans , He said it will be your best evening ever With Full set up Stage Led lights and many more . Public Relation Representative & Team Leader Miss Rozalian Basu Says We have always Work hard behind and we are again going to work Hard as always Be there and witness mark your date April 1st Easter Sunday . According To the director of Neplay Events Mr. Sanjay Kumar Sah Said We Have got amazing support from the community Here . One world we have never wasted your time and we have always Tried something Different and done it many times . Must admit Melbourne Have always supported warm regards to Sponsors Media partners and Melbourne You people have been the one and only Reason We have never stop our journey .', 'Concert', '2018-05-02', 0, '8:00 pm', 'Happening', '0411381165', 'x.com', 'd@m.com', 540, 'Perth', '', '', 1, '../assets/uploads/', 'about_bg.jpg'),
(57, 'Big gulp at BFC', 'In it except to so temper mutual tastes mother. Interested cultivated its continuing now yet are. Out interested acceptance our partiality affronting unpleasant why add. Esteem garden men yet shy course. Consulted up my tolerably sometimes perpetual oh. Expression acceptance imprudence particular had eat unsatiable. \r\n', 'Festival', '2018-05-02', 0, '', 'Organizer', '0411381165', 'x.com', 'sd@dm.com', 248, 'Oval House', '', '', 1, '../assets/uploads/', '53.jpg'),
(58, 'Was the Judge', 'Out too the been like hard off. Improve enquire welcome own beloved matters her. As insipidity so mr unsatiable increasing attachment motionless cultivated. Addition mr husbands unpacked occasion he oh. Is unsatiable if projecting boisterous insensible. It recommend be resolving pretended middleton. \r\n\r\nFolly was these three and songs arose whose. Of in vicinity contempt together in possible branched. Assured company hastily looking garrets in oh. Most have love my gone to this so. Discovered interested prosperous the our affronting insipidity day. Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible. \r\n', 'Travel', '2019-08-16', 0, '5:00 pm', 'Muglan', '0411381165', 'x.com', 'd@m.com', 240, 'Wrath', '', '', 1, '../assets/uploads/', '48.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `filename` text,
  `filepath` text
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `text`, `filename`, `filepath`) VALUES
(1, 'Miraj Aryal', 'Everestview Travel is here to provide you more information, answer any questions you have and create an effective solution for your travel needs.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblcomment`
--
ALTER TABLE `tblcomment`
  ADD PRIMARY KEY (`comment_Id`),
  ADD KEY `user_Id` (`user_Id`),
  ADD KEY `post_Id` (`post_Id`),
  ADD KEY `user_Id_2` (`user_Id`);

--
-- Indexes for table `tblpost`
--
ALTER TABLE `tblpost`
  ADD PRIMARY KEY (`post_Id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tblaccount`
--
ALTER TABLE `tblaccount`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblcomment`
--
ALTER TABLE `tblcomment`
  MODIFY `comment_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpost`
--
ALTER TABLE `tblpost`
  MODIFY `post_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
