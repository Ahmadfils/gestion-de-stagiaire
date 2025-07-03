-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2025 at 06:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stagiaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `demandestage`
--

CREATE TABLE `demandestage` (
  `id_demande` int(30) NOT NULL,
  `date_demande` date NOT NULL,
  `statut` varchar(100) NOT NULL,
  `lettre_motivation` text NOT NULL,
  `id_etudiant` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demandestage`
--

INSERT INTO `demandestage` (`id_demande`, `date_demande`, `statut`, `lettre_motivation`, `id_etudiant`) VALUES
(1, '2025-05-01', 'accepter ou refuser', 'asefetgethehyhryryhyqq', 1),
(2, '2025-05-05', 'accepter ou refuser', 'asfdggfhhjgbc', 2);

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_etudiant` int(30) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `etablissement` varchar(100) NOT NULL,
  `filiere` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id_etudiant`, `nom`, `prenom`, `email`, `telephone`, `etablissement`, `filiere`) VALUES
(1, 'bukuru', 'eli', 'eli@gmail.com', '71123123', 'UGLnga', 'FAGA'),
(2, 'NINA ', 'ella', 'ella@gmail.com', '69123456', 'UGLnga', 'S.I');

-- --------------------------------------------------------

--
-- Table structure for table `stage`
--

CREATE TABLE `stage` (
  `id_stage` int(30) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `id_tuteur` int(60) NOT NULL,
  `domaine` varchar(100) NOT NULL,
  `id_etudiant` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stage`
--

INSERT INTO `stage` (`id_stage`, `date_debut`, `date_fin`, `id_tuteur`, `domaine`, `id_etudiant`) VALUES
(1, '2025-05-12', '2025-06-12', 34, 'informatique', 1),
(13, '2025-05-14', '2025-06-14', 4, 'informatique', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tuteur`
--

CREATE TABLE `tuteur` (
  `id_tuteur` int(30) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `poste` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tuteur`
--

INSERT INTO `tuteur` (`id_tuteur`, `nom`, `prenom`, `poste`, `email`) VALUES
(4, 'giti', 'emma', 'www', 'giti@gmail.com'),
(34, 'bubu', 'asa', 'hhttp', 'asa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(30) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `mot_de_passe`, `role`) VALUES
(2, 'aime', '1234', 'secretaire'),
(3, 'jean', '123', 'animateur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demandestage`
--
ALTER TABLE `demandestage`
  ADD PRIMARY KEY (`id_demande`),
  ADD KEY `id_etudiant` (`id_etudiant`),
  ADD KEY `id_etudiant_2` (`id_etudiant`),
  ADD KEY `id_etudiant_3` (`id_etudiant`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etudiant`);

--
-- Indexes for table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id_stage`);

--
-- Indexes for table `tuteur`
--
ALTER TABLE `tuteur`
  ADD PRIMARY KEY (`id_tuteur`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demandestage`
--
ALTER TABLE `demandestage`
  MODIFY `id_demande` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_etudiant` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stage`
--
ALTER TABLE `stage`
  MODIFY `id_stage` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tuteur`
--
ALTER TABLE `tuteur`
  MODIFY `id_tuteur` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
