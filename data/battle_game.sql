-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2024 at 07:37 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `battle_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `battle_game_character`
--

DROP TABLE IF EXISTS `battle_game_character`;
CREATE TABLE IF NOT EXISTS `battle_game_character` (
  `bg_char_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `bg_char_owner_id` int UNSIGNED NOT NULL,
  `bg_char_exp` int UNSIGNED NOT NULL,
  `bg_char_hp` tinyint UNSIGNED NOT NULL,
  `bg_char_att` tinyint UNSIGNED NOT NULL,
  `bg_char_def` tinyint UNSIGNED NOT NULL,
  PRIMARY KEY (`bg_char_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `battle_game_users`
--

DROP TABLE IF EXISTS `battle_game_users`;
CREATE TABLE IF NOT EXISTS `battle_game_users` (
  `battle_user_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `battle_user_login` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `battle_user_pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `battle_user_name` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `battle_user_email` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `battle_user_permission` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `battle_user_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`battle_user_id`),
  UNIQUE KEY `object_user_login` (`battle_user_login`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
