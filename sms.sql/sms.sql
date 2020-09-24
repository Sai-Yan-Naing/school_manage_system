--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `password`) VALUES
('nilar', 'nilar123');

-- --------------------------------------------------------

--
-- Table structure for table `registertable`
--

CREATE TABLE `registertable` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `age` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registertable`
--

INSERT INTO `registertable` (`name`, `email`, `gender`, `pass`, `age`, `phone`, `country`, `city`, `hobby`, `address`) VALUES
('Nilar', 'nilar@gmail.com', 'Female', 'nilar123', '23', 2147483647, 'Myanmar', 'Shwebo', 'Reading', 'Sagaing Division ,shwebo township'),
('Sai Yan Naing', 'sai@gmail.com', 'Male', 'sai12345', '27', 2147483647, 'Myanmar', 'á€±á€€á€ºá€¬á€€á€¹á€™á€²', 'Reading', 'á€›á€½á€™á€¹á€¸á€»á€•á€Šá€¹á€”á€šá€¹áŠá€±á€€á€ºá€'),
('Sai', 'saiyannaing@gmail.com', 'Male', 'saiyannaing123', '27', 2147483647, 'Myanmar', 'Kyat Mae', 'Reading', 'Shan State,Kyat Mae City,Pan Htan Village'),
('Htet Zar Chi Bo', 'htet@gmail.com', 'Female', 'htet123', '6', 2147483647, 'Myanmar', 'Shwebo', 'Dancing', 'Sagaing Division ,shwebo township'),
('Thar Htet Bo', 'htet@gmail.com', 'Male', 'thar123', '5', 2147483647, 'Myanmar', 'Shwebo', 'Listening Songs', 'Sagaing Division ,shwebo township');

-- --------------------------------------------------------

--
-- Table structure for table `schoolcontact`
--

CREATE TABLE `schoolcontact` (
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactno` int(30) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolcontact`
--

INSERT INTO `schoolcontact` (`fullname`, `email`, `contactno`, `message`) VALUES
('suesue', 'sue@gmail.com', 2147483647, ' adfdggfgfgfgfg'),
('Nilar Lwin', 'nilar@gmail.com', 2147483647, ' Want to suggest.'),
('Theint Nadi Aung', 'theint@gmail.com', 2147483647, ' sdfdfdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
