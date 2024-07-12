-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2024 at 04:35 PM
-- Server version: 8.0.35-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buftiesn_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `ukey` smallint NOT NULL,
  `roleukey` smallint NOT NULL,
  `privilegeukey` smallint NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`ukey`, `roleukey`, `privilegeukey`, `status`) VALUES
(1, 4, 1, 1),
(2, 4, 2, 1),
(3, 4, 3, 1),
(4, 4, 4, 1),
(5, 4, 5, 1),
(6, 4, 6, 1),
(7, 4, 7, 1),
(8, 4, 8, 1),
(9, 4, 9, 1),
(10, 4, 10, 1),
(11, 4, 11, 1),
(12, 4, 12, 1),
(13, 4, 13, 1),
(14, 4, 14, 1),
(15, 4, 15, 1),
(16, 3, 13, 1),
(17, 3, 4, 1),
(18, 3, 10, 1),
(19, 1, 1, 0),
(20, 1, 2, 1),
(21, 1, 3, 1),
(22, 1, 4, 1),
(23, 1, 5, 1),
(24, 1, 6, 1),
(25, 1, 10, 0),
(26, 2, 2, 1),
(27, 2, 5, 1),
(28, 2, 6, 1),
(29, 2, 10, 1),
(35, 1, 16, 1),
(31, 2, 3, 1),
(32, 2, 4, 1),
(34, 1, 10, 1),
(36, 2, 16, 1),
(37, 3, 16, 1),
(38, 4, 16, 1),
(39, 1, 17, 1),
(40, 2, 17, 1),
(41, 4, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cluster`
--

CREATE TABLE `cluster` (
  `id` int NOT NULL,
  `cluster_name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cluster`
--

INSERT INTO `cluster` (`id`, `cluster_name`, `status`) VALUES
(1, 'Cluster 1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_operator`
--

CREATE TABLE `data_operator` (
  `id` int NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `guarantor` varchar(80) NOT NULL,
  `guarantor_phone` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_operator`
--

INSERT INTO `data_operator` (`id`, `fullname`, `phone_number`, `address`, `guarantor`, `guarantor_phone`, `status`) VALUES
(1, 'Musa Maude', '09038556877', 'Zage ', 'Maude Kande', '09077665544', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_operator_inventory`
--

CREATE TABLE `data_operator_inventory` (
  `id` int NOT NULL,
  `operator_id` int NOT NULL,
  `quantity_of_entry` int NOT NULL,
  `date` date NOT NULL,
  `inserted_by` varchar(50) NOT NULL,
  `insertion_date` date NOT NULL,
  `updated_by` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enumerator`
--

CREATE TABLE `enumerator` (
  `id` int NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `guarantor_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `guarantor_phone` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enumerator`
--

INSERT INTO `enumerator` (`id`, `fullname`, `address`, `phone_number`, `guarantor_name`, `guarantor_phone`, `status`) VALUES
(1, 'Abdullahi Zubairu', 'Danbare, Gwarzo Road, Kano. ', '07039338691', 'Yusuf Ahmed', '07037969117', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enumerator_inventory`
--

CREATE TABLE `enumerator_inventory` (
  `id` int NOT NULL,
  `enumerator_id` int NOT NULL,
  `forms_sold` int NOT NULL,
  `date_sold` date NOT NULL,
  `inserted_by` int NOT NULL,
  `insertion_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_price`
--

CREATE TABLE `form_price` (
  `id` int NOT NULL,
  `formtype` varchar(40) NOT NULL,
  `price` int NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_price`
--

INSERT INTO `form_price` (`id`, `formtype`, `price`, `status`) VALUES
(1, 'Market', 500, 1),
(2, 'Industry', 1000, 1),
(3, 'Plaza', 1000, 1),
(4, 'Road side', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_book`
--

CREATE TABLE `log_book` (
  `id` int NOT NULL,
  `forms_sold` int NOT NULL,
  `enumerator_id` int NOT NULL,
  `supervisor_id` int NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_book`
--

INSERT INTO `log_book` (`id`, `forms_sold`, `enumerator_id`, `supervisor_id`, `date`, `status`) VALUES
(1, 25, 1, 1, '2023-10-08', 2),
(2, 21, 1, 1, '2023-02-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `id` int NOT NULL,
  `market` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`id`, `market`) VALUES
(1, 'Kantin Kwari'),
(2, 'Sabon Gari'),
(3, 'Singer Markket'),
(4, 'Tarauni Market'),
(5, 'Sheka Yar Kasuwa Market'),
(6, 'Mariri Market'),
(7, 'Kasuwan Kafar Wanbai');

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `ukey` bigint NOT NULL,
  `title` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `urlpages` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `sort` int NOT NULL,
  `icon` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `privileges`
--

INSERT INTO `privileges` (`ukey`, `title`, `urlpages`, `sort`, `icon`, `status`) VALUES
(1, 'Cluster', 'cluster_list.php', 2, 'fa fa-users', 1),
(2, 'Data Operator', 'data_operator_list.php', 3, 'fa fa-user', 1),
(3, 'Enumerator', 'enumerator_list.php', 5, 'fa fa-user', 0),
(4, 'Supervisor', 'supervisor_list.php', 4, 'fa fa-user', 1),
(5, 'Supervisor Allocation', 'supervisor_allocation_list.php', 6, 'fa fa-user', 1),
(6, 'Log Book', 'logbook_list.php', 7, 'fa fa-book', 1),
(7, 'Roles', 'roles_list.php', 10, 'fa fa-user', 0),
(8, 'Privileges', 'privileges_list.php', 11, 'fa fa-book', 1),
(9, 'Access', 'access_list.php', 12, 'fa fa-book', 1),
(10, 'Change Password', 'change_password.php', 13, 'fa fa-lock', 1),
(11, 'Form Price', 'form_price_list.php', 8, 'fa fa-book', 1),
(13, 'Dashboard', 'dashboard.php', 1, 'nav-icon fas fa-tachometer-alt', 1),
(14, 'Users', 'users_list.php', 13, 'fa fa-users', 1),
(15, 'Password Reset', 'password_reset.php', 14, 'fa fa-lock', 1),
(17, 'Market', 'market_list.php', 16, 'fa fa-users', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ukey` bigint NOT NULL,
  `role_name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `status` smallint NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ukey`, `role_name`, `status`) VALUES
(1, 'CEO', 1),
(2, 'MD', 1),
(3, 'Store Officer', 1),
(4, 'Super Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `market_id` int NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `fullname`, `phone_number`, `market_id`, `status`) VALUES
(1, 'ABDULLAHI MUHAMMAD SARKI', '08034527631', 1, 1),
(2, 'ABUBAKAR SANI', '08088208310', 3, 1),
(3, 'ABUBAKAR YUSHAU YUSF', '08061200898', 4, 1),
(4, 'AUWAL MUHAMMAD SANI', '08105949560', 4, 1),
(5, 'BASHIR M. BASHIR', '07044753593', 5, 1),
(6, 'GARABA SHEHU UKASHATU', '07030607883', 3, 1),
(7, 'IBRAHIM SHUAIBU HASSAN', '08063270775', 2, 1),
(8, 'MUSTAPHA ABDU WALI', '08069442664', 1, 1),
(9, 'NASIR TIJJANI ABDULLAHI', '07038598323', 1, 1),
(10, 'RABIU WADA ADAMU', '08033989187', 2, 1),
(11, 'SADIQ DAYYABU HARUNA', '08106535634', 4, 1),
(12, 'SALISU AHMAD INYASS', '08037886104', 3, 1),
(13, 'ZIYAU ABDULLAHI', '08065728389', 2, 1),
(14, 'IBRAHIM SAMINU', '08031546904', 3, 1),
(15, 'ABULKADIR HAMISU', '08064143639', 6, 1),
(16, 'JAMILU BASHIR BELLO', '08038432658', 6, 1),
(17, 'ATTAHIR BALA NAIYA', '07030538888', 1, 1),
(18, 'HASSAN UMAR SULAIMAN', '08060587271', 3, 1),
(19, 'USMAN ABDULKADIR SAEED', '08128289565', 3, 1),
(20, 'ABDUSSALAM ABDULLAHI', '09038556877', 5, 1),
(21, 'Musa Ibrahim', '07037969117', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_allocation`
--

CREATE TABLE `supervisor_allocation` (
  `id` int NOT NULL,
  `cluster_id` int NOT NULL,
  `supervisor_id` int NOT NULL,
  `enumerator_id` int NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supervisor_allocation`
--

INSERT INTO `supervisor_allocation` (`id`, `cluster_id`, `supervisor_id`, `enumerator_id`, `status`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_inventory`
--

CREATE TABLE `supervisor_inventory` (
  `id` int NOT NULL,
  `supervisor_id` int NOT NULL,
  `forms_collected` int NOT NULL,
  `invoice_collected` int NOT NULL,
  `forms_fee` int NOT NULL,
  `date_collected` date NOT NULL,
  `forms_returned` int DEFAULT NULL,
  `invoice_returned` int DEFAULT NULL,
  `damage_forms` int DEFAULT NULL,
  `date_returned` date DEFAULT NULL,
  `inserted_by` int DEFAULT NULL,
  `insertion_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor_inventory`
--

INSERT INTO `supervisor_inventory` (`id`, `supervisor_id`, `forms_collected`, `invoice_collected`, `forms_fee`, `date_collected`, `forms_returned`, `invoice_returned`, `damage_forms`, `date_returned`, `inserted_by`, `insertion_date`, `updated_by`, `update_date`) VALUES
(1, 1, 400, 400, 500, '2023-10-12', NULL, NULL, NULL, NULL, NULL, '2023-10-13 11:43:47', NULL, '2023-10-13 11:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ukey` int NOT NULL,
  `role_ukey` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_num` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `uniid` varchar(100) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activation_date` datetime NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ukey`, `role_ukey`, `name`, `phone_num`, `email`, `username`, `password`, `uniid`, `image_path`, `created_at`, `activation_date`, `status`) VALUES
(2, 4, 'Yusuf Ahmad', '07037969117', 'yahmad.reg@buk.edu.ng', 'Abuhaneefa', 'ya6491', '', 'yahmad.reg@buk.edu.ng.jpg', '2023-09-16 17:24:20', '0000-00-00 00:00:00', 1),
(9, 4, 'Murtala Ismail', '09029798937', 'mismail.reg@buk.edu.ng', 'Abu-Abdallah', '123', '', 'mismail.reg@buk.edu.ng.jpg', '2023-09-22 17:05:59', '0000-00-00 00:00:00', 1),
(10, 3, 'Auwalu Abubakar Musa', '07060794203', 'auwalua@gmail.com', 'aam', '123', '', 'aam.jpg', '2023-09-30 12:45:27', '0000-00-00 00:00:00', 0),
(11, 1, 'Adamu Yau Dansure', '07038387807', 'adamubaffa24@gmail.com', 'Abu-Khalifa', '123', '', 'Abu-Khalifa.jpg', '2023-09-30 14:20:01', '0000-00-00 00:00:00', 0),
(12, 2, 'Anas Sani Abubakar', '08100008686', 'asabubakar17@gmail.com', 'ANAS SANI ABUBAKAR', '12345asa', '', 'ANAS SANI ABUBAKAR.jpg', '2023-09-30 15:25:46', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`ukey`);

--
-- Indexes for table `cluster`
--
ALTER TABLE `cluster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_operator`
--
ALTER TABLE `data_operator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `data_operator_inventory`
--
ALTER TABLE `data_operator_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enumerator`
--
ALTER TABLE `enumerator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enumerator_inventory`
--
ALTER TABLE `enumerator_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_price`
--
ALTER TABLE `form_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_book`
--
ALTER TABLE `log_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`ukey`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ukey`),
  ADD UNIQUE KEY `RoleNm` (`role_name`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor_allocation`
--
ALTER TABLE `supervisor_allocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor_inventory`
--
ALTER TABLE `supervisor_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ukey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
  MODIFY `ukey` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `cluster`
--
ALTER TABLE `cluster`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_operator`
--
ALTER TABLE `data_operator`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_operator_inventory`
--
ALTER TABLE `data_operator_inventory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enumerator`
--
ALTER TABLE `enumerator`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enumerator_inventory`
--
ALTER TABLE `enumerator_inventory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_price`
--
ALTER TABLE `form_price`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log_book`
--
ALTER TABLE `log_book`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `ukey` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `ukey` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `supervisor_allocation`
--
ALTER TABLE `supervisor_allocation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supervisor_inventory`
--
ALTER TABLE `supervisor_inventory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ukey` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
