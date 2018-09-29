-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 07:16 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n2yco435_experience`
--

-- --------------------------------------------------------

--
-- Table structure for table `aulas`
--

CREATE TABLE `aulas` (
  `id` int(11) NOT NULL,
  `numero_aula` int(1) NOT NULL,
  `titulo_aula` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img_capa` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT 'img/default',
  `img_docs` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT 'img/img00',
  `link_apresentacao` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT '?',
  `link_documento` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT '?',
  `link_video` varchar(500) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'Link do vídeo usado na aula para apresentação do conetúdo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `aulas`
--

    INSERT INTO `aulas` (`id`, `numero_aula`, `titulo_aula`, `img_capa`, `img_docs`, `link_apresentacao`, `link_documento`, `link_video`) VALUES
(1, 1, 'Cloud Computing', 'img/Aula1', 'img/img01', 'https://drive.google.com/open?id=0Bx4hVCOh5y-Xem92aXFaanJPcmM', 'https://drive.google.com/open?id=0B4tUvFXK86gKR2x2and1dTRxTkU', 'https://www.youtube.com/watch?v=FDFejm-ovtI'),
(2, 2, 'Vocabulary', 'img/Aula2', 'img/img02', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XWVNHNzI1ZW9lRnM', '', 'https://www.youtube.com/watch?v=D_1QgnnVT4c'),
(3, 3, 'Contrato de Trabalho', 'img/Aula3', 'img/img03', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XMjhyT1JPdFNreVE', 'https://drive.google.com/open?id=0B4tUvFXK86gKTEkzd1E1YVVDM1k', 'https://www.youtube.com/watch?v=IYEthTyzbLc'),
(4, 4, 'Identidade Visual', 'img/Aula4', 'img/img04', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XOGVMd0lOY3NHZjQ', '', 'https://www.youtube.com/watch?v=NWN4PsTV4ck'),
(5, 5, 'Painel de Controle', 'img/Aula5', 'img/img05', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XRU45YngtVWxpUU0', 'https://drive.google.com/open?id=0B4tUvFXK86gKZFZNYnR0OFN6TFU', 'https://www.youtube.com/watch?v=Tk5QUGXcWio'),
(6, 6, 'Chunks', 'img/Aula6', 'img/img06', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XbFRheXZnbFBsRGs', 'https://drive.google.com/open?id=0B4tUvFXK86gKWFBBTmtObE1TemM', 'https://www.youtube.com/watch?v=EAi9PVxQZ_U'),
(7, 7, 'Empreendedorismo', 'img/Aula7', 'img/img07', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XbnNfQ1VIYWRpOTA', 'https://drive.google.com/open?id=0B4tUvFXK86gKZDlJUFR3dGVkdFk', 'https://www.youtube.com/watch?v=uyM0y0PWW4w'),
(8, 8, 'FormataÃ§Ã£o de Computadores', 'img/Aula8', 'img/img08', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XQkEyWlQwNU51M0U', 'https://drive.google.com/open?id=0Bx4hVCOh5y-XTEpmS0ZqdGtFSms', 'https://www.youtube.com/watch?v=QXT7oubQ-Ng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aulas`
--
ALTER TABLE `aulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
