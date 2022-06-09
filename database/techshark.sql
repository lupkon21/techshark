-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vytvořeno: Čtv 09. čen 2022, 18:01
-- Verze serveru: 5.7.11
-- Verze PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `techshark`
--
CREATE DATABASE IF NOT EXISTS `techshark` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `techshark`;

-- --------------------------------------------------------

--
-- Struktura tabulky `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(20, 'New Rockford'),
(21, 'Richmond'),
(22, 'Durchhausen'),
(24, 'New York'),
(25, 'San Diego'),
(26, 'West Stockbridge'),
(27, 'San'),
(28, 'Richland'),
(29, 'Sepulveda'),
(30, 'Santa Ana'),
(31, 'Kendallville'),
(32, 'Monroe Center'),
(33, 'Los Angeles'),
(34, 'Little Rock'),
(35, 'Milwaukee'),
(36, 'Akron'),
(37, 'Clinton'),
(38, 'Greenwood'),
(39, 'Providence'),
(40, 'West Valley City'),
(41, 'Green Bay'),
(42, 'Hoffman'),
(43, 'Madison'),
(44, 'Fairfield'),
(45, 'Redding'),
(46, 'Livermore'),
(47, 'Tamarac'),
(48, 'Lansing'),
(49, 'Benton'),
(50, 'Spring Valley'),
(51, 'Carbon');

-- --------------------------------------------------------

--
-- Struktura tabulky `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `phone_number`, `email`, `street`, `number`, `city_id`) VALUES
(14, 'Kiara', 'Barna', '701-302-3310', 'KiaraBarna@jourrapide.com', 'Catherine', 2495, 24),
(15, 'Linda', 'Johnson', '765-983-7041', 'LindaJohnson@jourrapide.com', 'Fowler', 1340, 21),
(16, 'Stacee', 'Thomas', '530-568-5984', 'StaceeThomas@armyspy.com', 'Hill Croft Farm Road', 3054, 45),
(17, 'Caroline', 'Poole', '310-725-5695', 'CarolinePoole@teleworm.us', 'Poplar Avenue', 4815, 25),
(18, 'Maureen', 'Brandtley', '269-612-8540', 'MaureenBrantley@armyspy.com', 'Goff', 504, 25),
(19, 'Charlotte', 'Ward', '413-232-0122', 'CharlotteWard@jourrapide.com', 'Frank Avenue', 4129, 26),
(20, 'James', 'Cooper', '484-695-5975', 'JamesCooper@rhyta.com', 'Bastin Drive', 4916, 24),
(21, 'David', 'Elms', '509-371-7334', 'DavidElms@dayrep.com', 'Goodwin Avenue', 1897, 28),
(22, 'Ann', 'King', '818-895-8914', 'AnnKing@teleworm.us', 'Quite Valley Lane', 2232, 29),
(23, 'Lori', 'Wendler', '949-259-4199', 'LoriWendler@dayrep.com', 'Heavens Way', 3587, 30),
(24, 'Lisa', 'Siller', '260-343-7930', 'LisaSiller@rhyta.com', 'Cessna Drive', 515, 31),
(25, 'Eddie', 'Stack', '815-393-3776', 'EddieStack@armyspy.com', 'Lowland Drive', 3991, 32),
(26, 'James', 'Davis', '818-467-5348', 'JamesDavis@teleworm.us', 'Edsel Road', 1934, 33),
(27, 'Stephen', 'Ramage', '501-554-9324', 'StephenRamage@teleworm.us', 'Masonic Hill Road', 2377, 34),
(28, 'Carolyn', 'Green', '920-306-6706', 'CarolynGreen@jourrapide.com', 'Hartland Avenue', 1293, 35),
(29, 'Francisco', 'Borgman', '330-563-9101', 'FranciscoBorgman@jourrapide.com', 'Little Street', 82, 36),
(30, 'Rachel', 'Garcia', '580-660-7246', 'RachelGarcia@dayrep.com', 'Simpson Square', 1083, 37),
(31, 'Alice', 'Halloway', '662-341-6838', 'AliceHalloway@dayrep.com', 'Brownton Road', 3338, 38),
(32, 'Beth', 'Johnson', '401-745-1073', 'BethJohnson@dayrep.com', 'Bond Street', 1179, 39),
(33, 'Charles', 'Cantrell', '435-771-9966', 'CharlesCantrell@jourrapide.com', 'Lang Avenue', 2815, 40),
(34, 'Eric', 'Guillen', '920-310-0719', 'EricGuillen@dayrep.com', 'Hartland Avenue', 4822, 41),
(35, 'Thomas', 'Dorrance', '618-495-3231', 'ThomasDorrance@rhyta.com', 'Butternut Lane', 1782, 42),
(36, 'Patrice', 'Soares', '608-750-5210', 'PatriceSoares@jourrapide.com', 'Irish Lane', 3339, 43),
(37, 'Michael', 'Rosario', '203-259-6632', 'MichaelRosario@jourrapide.com', 'Colony Street', 3566, 44),
(38, 'Betty', 'Ramos', '925-371-6915', 'BettyRamos@armyspy.com', 'Park Street', 2632, 46),
(39, 'Steven', 'Smith', '954-951-5312', 'StevenSmith@rhyta.com', 'Pointe Lane', 1633, 47),
(40, 'Arlene', 'Sneed', '517-268-0423', 'ArleneSneed@dayrep.com', 'Amethyst Drive', 3586, 48),
(41, 'Virginia', 'Burton', '618-439-3787', 'VirginiaBurton@jourrapide.com', 'Butternut Lane', 2884, 49),
(42, 'Daniel', 'Dorman', '937-862-8813', 'DanielDorman@rhyta.com', 'Boggless Street', 1025, 50),
(43, 'Robert', 'Dunson', '254-639-1142', 'RobertDunson@teleworm.us', 'Clair Street', 3379, 51);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT pro tabulku `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
