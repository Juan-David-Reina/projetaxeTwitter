-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2023 at 10:27 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/* L’objectif de cette année va vous amener à créer un réseau
social type microblogging (comme twitter ou mastodon).
N’importe qui pourra s’inscrire sur ce site et publier des posts. Il
y aura ceci dit deux particularités :
- Lors de la publication du post, la personne devra choisir 1 tag
parmi une liste de 10 tags le plus approprié à ce post. Chaque
tag aura une couleur associée
- Votre réseau social sera associé à un objet connecté qui
facilitera son utilisation au domicile de l’utilisateur.rice, et
permettra une utilisation raisonnée du téléphone portable. */

--
-- Database: `twitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tweet`
--

CREATE TABLE `tweet` (
  `id_tweet` int NOT NULL,
  `pseudo` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `date_message` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tweet`
--

INSERT INTO `tweet` (`id_tweet`, `pseudo`, `message`, `date_message`) VALUES
(24, 'ElonMusk', 'space', '2023-03-19 23:16:34'),
(25, 'June', ' ♥', '2023-03-19 23:17:45'),
(26, 'June', 'lorem ipsum', '2023-03-19 23:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `pseudo` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `mdp` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nom`, `pseudo`, `mail`, `mdp`, `photo`) VALUES
(123, 'Kauffmann', 'june', '@gmail', 'Ayato', '.jpg'),
(123, 'Kauffmann', 'David', '@gmail', 'Ayato', '.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id_tweet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id_tweet` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
