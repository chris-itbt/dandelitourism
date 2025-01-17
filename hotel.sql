

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `manager` (
  `uid` int(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `upass` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `uemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `manager` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(1, 'admin', '1234', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(200) NOT NULL,
  `room_cat` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `name` text NOT NULL,
  `phone` int(100) NOT NULL,
  `book` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_cat`, `checkin`, `checkout`, `name`, `phone`, `book`) VALUES
(23, 'AC Deluxe Room', '0000-00-00', '0000-00-00', '', 0, 'false'),
(24, 'AC Deluxe Room', '0000-00-00', '0000-00-00', '', 0, 'false'),
(25, 'AC Deluxe Room', '0000-00-00', '0000-00-00', '', 0, 'false'),
(26, 'AC Deluxe Room', '0000-00-00', '0000-00-00', '', 0, 'false'),
(27, 'AC Deluxe Room', '0000-00-00', '0000-00-00', '', 0, 'false'),
(28, 'Camping Tents', '0000-00-00', '0000-00-00', '', 0, 'false'),
(29, 'Camping Tents', '0000-00-00', '0000-00-00', '', 0, 'false'),
(30, 'Camping Tents', '0000-00-00', '0000-00-00', '', 0, 'false'),
(31, 'Camping Tents', '0000-00-00', '0000-00-00', '', 0, 'false'),
(32, 'Camping Tents', '0000-00-00', '0000-00-00', '', 0, 'false'),
(33, 'Maharaja Cottages', '0000-00-00', '0000-00-00', '', 0, 'false'),
(34, 'Maharaja Cottages', '0000-00-00', '0000-00-00', '', 0, 'false'),
(35, 'Maharaja Cottages', '0000-00-00', '0000-00-00', '', 0, 'false'),
(36, 'Maharaja Cottages', '0000-00-00', '0000-00-00', '', 0, 'false'),
(37, 'Maharaja Cottages', '0000-00-00', '0000-00-00', '', 0, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `roomname` text NOT NULL,
  `room_qnty` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `booked` int(11) NOT NULL,
  `no_bed` int(11) NOT NULL,
  `bedtype` text NOT NULL,
  `facility` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`roomname`, `room_qnty`, `available`, `booked`, `no_bed`, `bedtype`, `facility`, `price`) VALUES
('AC Deluxe Room', 5, 5, 0, 5, 'sharing', 'Watersports, Indoor Games, Sight Seeing', 2800),
('Camping Tents', 5, 5, 0, 3, 'sharing', 'Watersports, Indoor Games, Sight Seeing', 1800),
('Maharaja Cottages', 5, 5, 0, 4, 'sharing', 'Watersports, Indoor Games, Sight Seeing', 2200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`roomname`(100));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
