-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 07:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xenzer_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_cred`
--

CREATE TABLE `admin_cred` (
  `sr_no` int(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_cred`
--

INSERT INTO `admin_cred` (`sr_no`, `admin_name`, `admin_pass`) VALUES
(1, 'kavindu damsith', '50Kavindu'),
(2, 'Malitha Prabhashana', 'MP12345'),
(3, 'MP', 'mp');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomId` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` int(15) NOT NULL,
  `adults` int(10) NOT NULL,
  `childers` int(10) NOT NULL,
  `fetures` varchar(100) NOT NULL,
  `facilites` varchar(100) NOT NULL,
  `rating` int(4) NOT NULL,
  `description` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomId`, `name`, `image`, `price`, `adults`, `childers`, `fetures`, `facilites`, `rating`, `description`) VALUES
(1, 'Samole Room 1', './Images/room4.jpg ', 30000, 5, 2, '2 Rooms,1 Bathroom,1 Balcony', 'wifi,AC,Television,Room heater', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(2, 'Samole Room 2', './Images/room4.jpg ', 20000, 4, 3, '5 Rooms,4 Bathroom,1 Balcony', 'wifi,AC,Television', 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, 'Sample Room 3', './Images/room4.jpg ', 40000, 6, 3, '5 Rooms,1 Bathroom', 'wifi,AC,Television', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(4, 'Sample Room 4', './Images/room4.jpg ', 40000, 6, 3, '5 Rooms', 'wifi,AC,Television', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(5, 'Sample Room 5', './Images/room4.jpg ', 10000, 2, 3, '5 Rooms', 'wifi,AC,Television', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(6, 'Sample Room 6', './Images/room4.jpg ', 10000, 4, 2, 'Room 6 ', 'Room 6 ', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(7, 'Sample Room 7 ', './Images/room4.jpg ', 12000, 3, 3, 'Room 7 ', 'Room 7', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(8, 'Sample Room 8 ', './Images/room4.jpg ', 18000, 5, 4, 'Room 8 ', 'Room 8 ', 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(9, 'Sample Room 9 ', './Images/room4.jpg ', 7000, 3, 2, 'Room 9 ', 'Room 9 ', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(10, 'Sample Room 10 ', './Images/room4.jpg ', 11000, 3, 3, 'Room 10', 'Room 10', 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `room_1`
--

CREATE TABLE `room_1` (
  `orderId` int(100) NOT NULL,
  `userId` int(11) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_1`
--

INSERT INTO `room_1` (`orderId`, `userId`, `checkIn`, `checkOut`) VALUES
(1, 10, '2022-06-29', '2022-07-02'),
(3, 15, '2022-06-29', '2022-07-06'),
(13, 15, '2022-07-05', '2022-07-06'),
(14, 15, '2022-07-03', '2022-07-08'),
(17, 15, '2022-07-11', '2022-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `room_2`
--

CREATE TABLE `room_2` (
  `orderId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_2`
--

INSERT INTO `room_2` (`orderId`, `userId`, `checkIn`, `checkOut`) VALUES
(2, 16, '2022-07-05', '2022-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `room_3`
--

CREATE TABLE `room_3` (
  `orderId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_3`
--

INSERT INTO `room_3` (`orderId`, `userId`, `checkIn`, `checkOut`) VALUES
(2, 19, '2022-07-01', '2022-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `room_4`
--

CREATE TABLE `room_4` (
  `orderId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_4`
--

INSERT INTO `room_4` (`orderId`, `userId`, `checkIn`, `checkOut`) VALUES
(1, 20, '2022-07-06', '2022-07-22'),
(2, 25, '2022-07-24', '2022-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `room_5`
--

CREATE TABLE `room_5` (
  `orderId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_5`
--

INSERT INTO `room_5` (`orderId`, `userId`, `checkIn`, `checkOut`) VALUES
(1, 17, '2022-07-06', '2022-06-30'),
(2, 15, '2022-06-07', '2022-07-06'),
(3, 16, '2022-07-13', '2022-05-17'),
(4, 17, '2022-07-05', '2022-07-09'),
(5, 15, '2022-07-11', '2022-07-13'),
(6, 15, '2022-07-18', '2022-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `room_6`
--

CREATE TABLE `room_6` (
  `orderId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_6`
--

INSERT INTO `room_6` (`orderId`, `userId`, `checkIn`, `checkOut`) VALUES
(1, 22, '2022-07-06', '2022-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `room_7`
--

CREATE TABLE `room_7` (
  `orderId` int(13) NOT NULL,
  `userId` int(13) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_7`
--

INSERT INTO `room_7` (`orderId`, `userId`, `checkIn`, `checkOut`) VALUES
(1, 15, '2022-07-03', '2022-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `room_8`
--

CREATE TABLE `room_8` (
  `orderId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_8`
--

INSERT INTO `room_8` (`orderId`, `userId`, `checkIn`, `checkOut`) VALUES
(2, 21, '2022-07-03', '2022-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `room_9`
--

CREATE TABLE `room_9` (
  `orderId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_9`
--

INSERT INTO `room_9` (`orderId`, `userId`, `checkIn`, `checkOut`) VALUES
(1, 19, '2022-07-06', '2022-07-14'),
(2, 15, '2022-07-19', '2022-07-20'),
(3, 15, '2022-07-01', '2022-07-05'),
(4, 15, '2022-07-25', '2022-07-29'),
(5, 15, '2022-07-31', '2022-08-02'),
(6, 15, '2022-06-26', '2022-06-27'),
(7, 26, '2022-08-05', '2022-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `room_10`
--

CREATE TABLE `room_10` (
  `orderId` int(13) NOT NULL,
  `userId` int(13) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_10`
--

INSERT INTO `room_10` (`orderId`, `userId`, `checkIn`, `checkOut`) VALUES
(1, 15, '2022-07-01', '2022-07-07'),
(2, 15, '2022-07-11', '2022-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `single_room`
--

CREATE TABLE `single_room` (
  `roomId` int(11) NOT NULL,
  `singleRoom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `single_room`
--

INSERT INTO `single_room` (`roomId`, `singleRoom`) VALUES
(1, 'ROOM_1'),
(2, 'ROOM_2'),
(3, 'ROOM_3'),
(4, 'ROOM_4'),
(5, 'ROOM_5'),
(6, 'ROOM_6'),
(7, 'ROOM_7'),
(8, 'ROOM_8'),
(9, 'ROOM_9'),
(10, 'ROOM_10');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `userID` int(13) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pinCode` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dateOfBirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`userID`, `userName`, `email`, `phoneNumber`, `address`, `pinCode`, `password`, `dateOfBirth`) VALUES
(15, 'damsith', 'kavindudamsith5@gmail.com', '761747447', 'Mahawaththa ,lewke ,galathara', 71505, '50Kavindu%', '2022-06-29'),
(16, 'Malitha Prabhashana', 'mp@gmail.com', '1025532522', 'abcd', 7410, '50Kavindu%', '2001-08-12'),
(17, 'kasun', 'kasun@gmail.com', '1111111111', 'abcdefg', 1111, '50Kavindu%', '2002-06-20'),
(18, 'Sandun Gamage\r\n', 'SandunGamage1@gmail.com\r\n', '0711234586', 'Kandy road', 865465, 'D6543gf$', '2002-03-02'),
(19, 'Nadun Prasanna', 'NadunPrasanna2@gmail.com', '0265235426', 'Colombo road', 986746, '645gdF86^', '1998-11-10'),
(20, 'Madara Rathnathilake', 'MadaraRathnathilake3@gmail.com', '0789525412', 'Galle road', 987465, 'Kjhdcb53#', '1995-05-08'),
(21, 'Kalhara Dias', 'diaskalhara2@gmail.com', '0265215426', 'Colombo road', 95235, '585gjhF86^', '1995-06-10'),
(22, 'Malshan Bandara', 'malshanbandara3@gmail.com', '0789255412', 'Galle road', 787465, 'Kjjhdcb53#', '1999-05-08'),
(23, 'Dilshani Herath', 'dilshaniherath@gmail.com', '1235269854', 'Anuradhapura', 6984531, '68534regd^D', '1998-02-15'),
(24, 'kavindu', 'kavindudamsith9@gmail.com', '761747447', 'Mahawaththa ,lewke ,galathara', 71505, '50Kavindu%', '2022-07-21'),
(25, 'kavindu', 'kavindudamsith65@gmail.com', '761747447', 'Mahawaththa ,lewke ,galathara', 71505, '50Kavindu%', '2022-07-19'),
(26, 'tharindu', 'noone9@gmail.com', '761747447', 'Mahawaththa ,lewke ,galathara', 71505, '50Kavindu%', '2022-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `seen` int(11) NOT NULL DEFAULT 0,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_queries`
--

INSERT INTO `user_queries` (`date`, `id`, `name`, `email`, `seen`, `subject`, `message`) VALUES
('2022-07-04 19:36:19', 43, 'kaivndu damsith', 'kavindudamsith65@gmail.com', 1, 'second testing', 'dsds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_cred`
--
ALTER TABLE `admin_cred`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomId`);

--
-- Indexes for table `room_1`
--
ALTER TABLE `room_1`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `room_2`
--
ALTER TABLE `room_2`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `room_3`
--
ALTER TABLE `room_3`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `room_4`
--
ALTER TABLE `room_4`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `room_5`
--
ALTER TABLE `room_5`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `room_6`
--
ALTER TABLE `room_6`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `room_7`
--
ALTER TABLE `room_7`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `room_8`
--
ALTER TABLE `room_8`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `room_9`
--
ALTER TABLE `room_9`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `room_10`
--
ALTER TABLE `room_10`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `single_room`
--
ALTER TABLE `single_room`
  ADD PRIMARY KEY (`roomId`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_cred`
--
ALTER TABLE `admin_cred`
  MODIFY `sr_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `roomId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `room_1`
--
ALTER TABLE `room_1`
  MODIFY `orderId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `room_2`
--
ALTER TABLE `room_2`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_3`
--
ALTER TABLE `room_3`
  MODIFY `orderId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_4`
--
ALTER TABLE `room_4`
  MODIFY `orderId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_5`
--
ALTER TABLE `room_5`
  MODIFY `orderId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room_6`
--
ALTER TABLE `room_6`
  MODIFY `orderId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room_7`
--
ALTER TABLE `room_7`
  MODIFY `orderId` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room_8`
--
ALTER TABLE `room_8`
  MODIFY `orderId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_9`
--
ALTER TABLE `room_9`
  MODIFY `orderId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room_10`
--
ALTER TABLE `room_10`
  MODIFY `orderId` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `userID` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
