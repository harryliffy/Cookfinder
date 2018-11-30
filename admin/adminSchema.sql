-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2018 at 04:02 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin.io`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
`log_id` int(100) NOT NULL,
`log_activity` varchar(250) NOT NULL,
`log_user` varchar(100) NOT NULL,
`log_timestamp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`log_id`, `log_activity`, `log_user`, `log_timestamp`) VALUES
(1, 'Logged In', '', '09-07-2018 16:16:26'),
(2, 'Logged In', '39', '09-07-2018 16:31:00'),
(3, 'Logged In', '39', '09-07-2018 19:34:18'),
(4, 'Logged In', '39', '09-07-2018 19:43:10'),
(5, 'Logged In', '40', '09-07-2018 19:56:10'),
(6, 'Logged In', '39', '09-07-2018 20:01:28'),
(7, 'Logged In', '39', '09-07-2018 20:03:35'),
(8, 'logged in', '39', '10-07-2018 14:03:29'),
(9, 'logged in', '39', '11-07-2018 02:41:12'),
(10, 'logged in', '39', '11-07-2018 02:41:15'),
(11, 'logged in', '39', '11-07-2018 02:42:30'),
(12, 'logged in', '39', '11-07-2018 02:48:44'),
(13, 'logged in', '39', '11-07-2018 03:20:47'),
(14, 'logged in', '39', '11-07-2018 03:23:18'),
(15, 'logged in', '39', '11-07-2018 03:25:25'),
(16, 'logged in', '39', '11-07-2018 03:25:37'),
(17, 'logged in', '39', '11-07-2018 03:25:48'),
(18, 'logged in', '39', '11-07-2018 03:26:28'),
(19, 'logged in', '39', '11-07-2018 03:26:57'),
(20, 'logged in', '39', '11-07-2018 11:10:52'),
(21, 'logged in', '39', '11-07-2018 11:11:44'),
(22, 'logged in', '39', '11-07-2018 11:15:21'),
(23, 'logged in', '39', '11-07-2018 11:18:15'),
(24, 'logged in', '39', '11-07-2018 11:18:16'),
(25, 'logged in', '39', '11-07-2018 11:24:12'),
(26, 'logged in', '39', '11-07-2018 11:24:16'),
(27, 'logged in', '39', '11-07-2018 11:25:30'),
(28, 'logged in', '39', '11-07-2018 11:25:56'),
(29, 'logged in', '39', '11-07-2018 11:27:43'),
(30, 'logged in', '39', '11-07-2018 11:28:42'),
(31, 'logged in', '39', '11-07-2018 11:29:59'),
(32, 'logged in', '39', '11-07-2018 11:30:35'),
(33, 'logged in', '39', '11-07-2018 11:31:09'),
(34, 'logged in', '39', '11-07-2018 11:34:08'),
(35, 'logged in', '39', '11-07-2018 12:00:54'),
(36, 'logged in', '39', '11-07-2018 12:03:13'),
(37, 'logged in', '39', '11-07-2018 12:04:11'),
(38, 'logged in', '39', '11-07-2018 12:05:15'),
(39, 'logged in', '39', '11-07-2018 12:11:34'),
(40, 'logged in', '39', '11-07-2018 12:16:43'),
(41, 'logged in', '39', '11-07-2018 12:17:33'),
(42, 'logged in', '39', '11-07-2018 12:18:13'),
(43, 'logged in', '39', '11-07-2018 12:32:42'),
(44, 'logged in', '39', '11-07-2018 13:59:19'),
(45, 'logged in', '39', '11-07-2018 14:29:08'),
(46, 'logged in', '39', '11-07-2018 16:13:42'),
(47, 'logged in', '39', '11-07-2018 16:42:12'),
(48, 'logged in', '39', '12-07-2018 20:20:43'),
(49, 'logged in', '39', '15-07-2018 04:08:43'),
(50, 'logged in', '39', '19-07-2018 14:34:29'),
(51, 'logged in', '39', '20-07-2018 10:23:09'),
(52, 'logged in', '40', '29-07-2018 20:34:43'),
(53, 'logged in', '39', '29-07-2018 20:35:21'),
(54, 'logged in', '39', '04-08-2018 13:58:37'),
(55, 'logged in', '39', '26-08-2018 02:31:03'),
(56, 'logged in', '40', '26-08-2018 02:47:53');

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
`organisation_Id` int(200) NOT NULL,
`org_Name` varchar(250) NOT NULL,
`org_Address` text NOT NULL,
`org_Phone` varchar(50) NOT NULL,
`org_Email` varchar(150) NOT NULL,
`org_Logo` text NOT NULL,
`org_tagline` varchar(250) NOT NULL,
`org_category` varchar(100) NOT NULL,
`org_YearOfEst` varchar(50) NOT NULL,
`org_facebook` varchar(100) NOT NULL,
`org_twitter` varchar(100) NOT NULL,
`org_google` varchar(200) NOT NULL,
`org_linkedin` varchar(100) NOT NULL,
`org_ContactPerson` varchar(200) NOT NULL,
`org_CPhone` varchar(100) NOT NULL,
`org_CEmail` varchar(100) NOT NULL,
`org_Token` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--






-- --------------------------------------------------------
--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
`imageId` int(100) NOT NULL,
`imageDescription` varchar(500) NOT NULL,
`imageCategory` text NOT NULL,
`imageFile` text NOT NULL,
`imageBy` varchar(200) NOT NULL,
`dateCreated` varchar(100) NOT NULL,
`dateModified` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`imageId`, `imageDescription`, `imageCategory`, `imageFile`, `imageBy`, `dateCreated`,
`dateModified`) VALUES
(1, 'harryhh pp', 'Option 2', '342116ba.png',
'e1b842ab177c27b58c25b831c902f39fbd10d2cfa1fa6022746c5adf264a06190c5e99490c6eac12c028b632649f94b8282334efca914b57faa402a441191a45',
'19-07-2018 21:56:31', ''),
(2, 'secong image test', 'Option 2',
'722266-font-b-Hijab-b-font-Headwear-Full-Cover-Underscarf-Ninja-Inner-Neck-Chest-Plain-Hat.jpg',
'e1b842ab177c27b58c25b831c902f39fbd10d2cfa1fa6022746c5adf264a06190c5e99490c6eac12c028b632649f94b8282334efca914b57faa402a441191a45',
'19-07-2018 22:18:25', ''),
(3, 'third image tests', 'Option 4', '991024artworks-000216424520-2rljme-t500x500.jpg',
'e1b842ab177c27b58c25b831c902f39fbd10d2cfa1fa6022746c5adf264a06190c5e99490c6eac12c028b632649f94b8282334efca914b57faa402a441191a45',
'19-07-2018 22:18:56', ''),
(4, 'harryhh', 'Option 2', '841099images.png',
'e1b842ab177c27b58c25b831c902f39fbd10d2cfa1fa6022746c5adf264a06190c5e99490c6eac12c028b632649f94b8282334efca914b57faa402a441191a45',
'19-07-2018 22:19:35', ''),
(5, 'another one', 'Option 3', '514885PrintOne-400-400.jpg',
'e1b842ab177c27b58c25b831c902f39fbd10d2cfa1fa6022746c5adf264a06190c5e99490c6eac12c028b632649f94b8282334efca914b57faa402a441191a45',
'19-07-2018 22:31:04', ''),
(6, 'another one gh', 'General', '317200oleorent-01.png',
'e1b842ab177c27b58c25b831c902f39fbd10d2cfa1fa6022746c5adf264a06190c5e99490c6eac12c028b632649f94b8282334efca914b57faa402a441191a45',
'19-07-2018 22:34:49', ''),
(7, 'baby lov', 'Facility', '946562business-infographic-chart_23-2147502293.jpg',
'e1b842ab177c27b58c25b831c902f39fbd10d2cfa1fa6022746c5adf264a06190c5e99490c6eac12c028b632649f94b8282334efca914b57faa402a441191a45',
'20-07-2018 15:09:46', ''),
(8, 'awertyu', 'Facility', '361707busy-bees-creche-montessori-2.jpg',
'e1b842ab177c27b58c25b831c902f39fbd10d2cfa1fa6022746c5adf264a06190c5e99490c6eac12c028b632649f94b8282334efca914b57faa402a441191a45',
'29-07-2018 20:36:13', '');

-- --------------------------------------------------------

--
-- Table structure for table `sch_events`
--

CREATE TABLE `sch_events` (
`event_id` int(255) NOT NULL,
`event_name` text NOT NULL,
`event_location` text NOT NULL,
`event_date` text NOT NULL,
`event_description` text NOT NULL,
`event_image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_events`
--

INSERT INTO `sch_events` (`event_id`, `event_name`, `event_location`, `event_date`, `event_description`, `event_image`)
VALUES
(108, 'popooooooo', 'Option 2', '2018-07-11', 'bnmnbmbmbmnbmbbmbnmbnmmbmn', '423345err 1.jpeg'),
(106, 'first test', 'Option 2', '2018-07-15', 'getghbr', '833977bgslide.jpg'),
(107, 'second event', 'General', '2018-07-11', 'second event second event', '198577bgslide1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`user_id` int(100) NOT NULL,
`full_name` varchar(100) NOT NULL,
`user_email` varchar(100) NOT NULL,
`user_password` varchar(255) NOT NULL,
`user_role` varchar(50) NOT NULL,
`token` varchar(200) NOT NULL,
`join_date` varchar(50) NOT NULL,
`modified_date` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `user_email`, `user_password`, `user_role`, `token`, `join_date`,
`modified_date`) VALUES
(40, 'Samad Jide', 'sking@mail.com', 'sking', 'user',
'd7ef1d24a632903279d9ff27fb317593ac3983c12f96f2aff553f295ae3cf36c866912dfbe21bc888f7f705b64ea7cc7a988fbf4412b24d5ef0c2c2091ffd26e',
'09-07-2018 19:55:20', '0'),
(39, 'harry Lifford', 'harryliffy@gmail.com', 'harry', 'user',
'e1b842ab177c27b58c25b831c902f39fbd10d2cfa1fa6022746c5adf264a06190c5e99490c6eac12c028b632649f94b8282334efca914b57faa402a441191a45',
'09-07-2018 04:40:43', '0');

--


-- Table structure for table `invite`
--

CREATE TABLE `invite` (
`invite_id` int(100) NOT NULL,
`invite_by` varchar(100) NOT NULL,
`invite_email` varchar(100) NOT NULL,
`company_id` varchar(255) NOT NULL,
`user_role` varchar(50) NOT NULL,
`token` varchar(200) NOT NULL,
`invite_date` varchar(50) NOT NULL,

) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--

-- Table structure for table `contact`
--

CREATE TABLE `contact` (
`contact_id` int(100) NOT NULL,
`contact_fullname` varchar(200) NOT NULL,
`contact_email` varchar(100) NOT NULL,
`contact_phone` varchar(100) NOT NULL,
`contact_organisation` varchar(255) NOT NULL,
`contact_message` text(1000) NOT NULL,
`contact__date` varchar(50) NOT NULL,

) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--


CREATE TABLE `Chefs` (
`chef_id` int(100) NOT NULL,
`chef_fullname` varchar(200) NOT NULL,
`chef_email` varchar(100) NOT NULL,
`chef_phone` varchar(100) NOT NULL,
`chef_address` varchar(255) NOT NULL,
`chef_city` text(1000) NOT NULL,
`chef_business_name` text(1000) NOT NULL,
`chef_business_logo` varchar(255) NOT NULL,
`chef_business_address` text(1000) NOT NULL,
`chef_business_phone` varchar(50) NOT NULL,
`chef_business_email` varchar(150) NOT NULL,
`chef_cooking_school` text(1000) NOT NULL,
`chef_year_of_grad` varchar (30) NOT NULL,
`chef_image` varchar(255) NOT NULL,


) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--


--chef main

CREATE TABLE `chefs` (
`chef_id` int(100) NOT NULL,
`chef_fullname` varchar(200) NOT NULL,
`chef_email` varchar(100) NOT NULL,
`chef_phone` varchar(50) NOT NULL,
`chef_address` varchar(250) NOT NULL,
`chef_city` varchar(250) NOT NULL,
`chef_business_name` varchar(250) NOT NULL,
`chef_business_logo` varchar(250) NOT NULL,
`chef_business_address` varchar(250) NOT NULL,
`chef_business_phone` varchar(50) NOT NULL,
`chef_business_email` varchar(250) NOT NULL,
`chef_cooking_school` varchar(250) NOT NULL,
`chef_year_of_grad` varchar(50) NOT NULL,
`chef_image` varchar(200) NOT NULL,
`token` varchar(200) NOT NULL,
`join_date` varchar(50) NOT NULL,

) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Indexes for dumped tables
--
--Dishes
CREATE TABLE `dishes`(
`dish_id` int(100) NOT NULL,
`dish_name` varchar(255) NOT NULL,
`dish_class` varchar(200) NOT NULL,
`meal_type` varchar(200) NOT NULL,
`dish_type` varchar(100) NOT NULL,
`add_date` varchar(50) NOT NULL,
`dish_image` varchar(200) NOT NULL,

) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
--chef dish
CREATE TABLE `chef_dish_menu`(
`chef_dish_id` int(150) NOT NULL,
`chef_id` varchar(255) NOT NULL,
`dish_id` varchar(200) NOT NULL,
`chef_dish_cat_id` varchar(100) NOT NULL,
`add_date` varchar(50) NOT NULL

) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--user transaction 
CREATE TABLE `transaction`(
`transaction_id` int(150) NOT NULL,
`user_id` varchar(255) NOT NULL,
`chef_id` varchar(200) NOT NULL,
`dish_id` varchar(100) NOT NULL,
`comment` text(1000) NOT NULL,
`status` varchar(100) NOT NULL,
`token` varchar(200) NOT NULL,
`add_date` varchar(50) NOT NULL

) ENGINE=MyISAM DEFAULT CHARSET=latin1;



-- Indexes for table `activity_log`
--
ALTER TABLE `Transaction`
ADD PRIMARY KEY (`token`);

--
ALTER TABLE `activity_log`
ADD PRIMARY KEY (`log_id`);

ALTER TABLE `chef_dish_menu`
ADD PRIMARY KEY (`chef_dish_id`);

ALTER TABLE `dishes`
ADD PRIMARY KEY (`dish_id`);
--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
ADD PRIMARY KEY (`imageId`);

--
-- Indexes for table `sch_events`
--
ALTER TABLE `sch_events`
ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY (`user_id`);

ALTER TABLE `organisation`
ADD PRIMARY KEY (`organisation_Id`);

--
-- AUTO_INCREMENT for dumped tables
--
ALTER TABLE `invite`
ADD PRIMARY KEY (`invite_id`);

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
MODIFY `log_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `imageId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sch_events`
--
ALTER TABLE `sch_events`
MODIFY `event_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

ALTER TABLE `invite`
MODIFY `invite_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
