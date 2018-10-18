-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 18-Out-2018 às 13:31
-- Versão do servidor: 5.7.23
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Estrutura da tabela `aulas`
--

DROP TABLE IF EXISTS `aulas`;
CREATE TABLE IF NOT EXISTS `aulas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_aula` int(1) NOT NULL,
  `titulo_aula` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img_capa` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT 'img/default',
  `img_docs` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT 'img/img00',
  `link_apresentacao` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT '?',
  `link_documento` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT '?',
  `link_video` varchar(500) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'Link do vídeo usado na aula para apresentação do conetúdo',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `aulas`
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes_provas`
--

DROP TABLE IF EXISTS `questoes_provas`;
CREATE TABLE IF NOT EXISTS `questoes_provas` (
  `id_prova` int(11) NOT NULL AUTO_INCREMENT,
  `modulo_prova` int(11) NOT NULL,
  `pergunta_prova` varchar(500) COLLATE utf8_general_mysql500_ci NOT NULL,
  `id_resposta_correta` int(11) NOT NULL,
  PRIMARY KEY (`id_prova`),
  KEY `modulo_prova` (`modulo_prova`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `questoes_provas`
--

INSERT INTO `questoes_provas` (`id_prova`, `modulo_prova`, `pergunta_prova`, `id_resposta_correta`) VALUES
(1, 1, '', 1),
(2, 1, 'Levando em consideraÃ§Ã£o os Servidores Google, OneDrive, Mega e Dropbox. Quais sÃ£o suas quantidades de armazenamento no formato de cadastro Gratuito?', 2),
(3, 1, 'Selecione uma das vantagens de se usar os serviÃ§os de Cloud Computing: ', 3),
(4, 1, 'Falando do Servidor do Google (Drive), quais as funcionalidades alÃ©m de armazenamento de arquivos genÃ©ricos?', 4),
(5, 1, 'AlÃ©m de armazenamento de arquivos, podemos tambÃ©m compartilhar com outros usuÃ¡rios da mesma nuvem, ou atÃ© mesmo quem nÃ£o tem conta de usuÃ¡rio. Quais as duas formas bÃ¡sicas para compartilhamento?', 5),
(6, 3, 'Ã‰ um tipo de trabalhador que presta o serviÃ§o por conta prÃ³pria, para vÃ¡rios tomadores de serviÃ§o, mas sem estar presente a subordinaÃ§Ã£o. Assinale a alternativa que corresponde corretamente essa afirmaÃ§Ã£o. O que foi afirmado anterior, refere-se Ã :', 6),
(7, 3, 'Ã‰ aquele que desenvolve suas atividades profissionais esporadicamente (eventos, acontecimentos, obra, serviÃ§o especÃ­fico) para um empregador. Assinale a alternativa que corresponde corretamente essa afirmaÃ§Ã£o:', 7),
(8, 3, 'Ã‰ aquele prestado por pessoa fÃ­sica a uma empresa, para atender a necessidade transitÃ³ria de substituiÃ§Ã£o de seu pessoal regular e permanente ou a acrÃ©scimo extraordinÃ¡rio de serviÃ§os. Assinale a alternativa que corresponde corretamente essa afirmaÃ§Ã£o: ', 8),
(9, 3, 'Quando nÃ£o hÃ¡ documento que prove a vinculaÃ§Ã£o entre as partes, porÃ©m existindo provas apenas de testemunhas. De acordo com essa afirmaÃ§Ã£o, assinale a alternativa que corresponde corretamente ao tipo de contrato: ', 9),
(10, 3, 'Assinale a alternativa que preenche corretamente as lacunas da afirmaÃ§Ã£o a seguir. <p><b>Considera-se aprendizagem o contrato de trabalho celebrado com colaboradores entre ___ e ____ anos de idade, pelo qual o ________________ assume a responsabilidade de treinar esse funcionÃ¡rio para a atividade que foi designado.</b></p>', 10),
(11, 3, '<p><b>Sua finalidade consiste em mostrar ao empregador a verificaÃ§Ã£o da capacidade funcional do empregado na execuÃ§Ã£o dos serviÃ§os e tambÃ©m permitir ao empregado descobrir se vai se adaptar Ã s condiÃ§Ãµes de emprego. </b></p><p>Assinale a alternativa que corresponde ao contrato de trabalho correspondente a afirmaÃ§Ã£o:</p>', 11),
(12, 3, '<p>Ã‰ o contrato de trabalho que tem datas de inÃ­cio e tÃ©rmino antecipadamente combinadas entre o trabalhador e o empregador.</p> <p>Assinale a alternativa que corresponde ao contrato de trabalho com as caracterÃ­sticas acima citadas: </p>', 12),
(13, 3, '<p>_____________________________ Ã‰ aquele que, por vontade dos contratantes, nÃ£o Ã© estipulada a sua duraÃ§Ã£o, podendo findar a qualquer tempo, por iniciativa de uma das partes. </p> <p>Assinale a alternativa que corresponde corretamente com o tipo do contrato de acordo com a afirmaÃ§Ã£o acima: </p>', 13),
(14, 3, 'A lei permite que o trabalhador acumule mais de um emprego, pode isto ocorrer quando:', 14),
(15, 3, 'Os direitos apresentados no contrato de trabalho apenas deixarÃ£o de ter validade, quando: ', 15),
(16, 5, 'Qual a funÃ§Ã£o do painel de controle?', 16),
(17, 5, 'O que Ã© um firewall e sua importÃ¢ncia durante a navegaÃ§Ã£o na internet?', 17),
(18, 5, 'Qual Ã© a diferenÃ§a entre um usuÃ¡rio comum e um usuÃ¡rio administrador do sistema?', 18),
(19, 5, 'O que Ã© um grupo domÃ©stico e em qual local de rede ele pode ser configurado?', 19),
(20, 5, 'Selecione abaixo quais sÃ£o os 3 dispositivos que podem ser conectados no computador?', 20),
(21, 6, '__________, Sam, I\\\'m sure your performance will be great.', 21),
(22, 6, 'Hi, Tom, __________, I was just telling Sara about your new car', 22),
(23, 6, 'The English test was a _____________', 23),
(24, 6, 'They really ___________ when they built this bathroom', 24),
(25, 6, 'I have the biggest ______ on Triss. She\\\'s so cute!', 25),
(26, 6, 'told you I was going to settle the score! ___________.', 26),
(27, 6, 'What did you think of my new haircut? I loved it! It\\\'s _________!', 27),
(28, 6, 'Hey Tommy, what are you guys doing? We\\\'re _______________ Do you want to come round?', 28),
(29, 6, 'What\\\'s wrong with Amy?  Didn\\\'t you hear? Alex ___________ her last night! Just don\\\'t mention his name at all!', 29),
(30, 6, 'How was the Jack Johnson concert? It was awesome. Everyone _________', 30),
(31, 8, 'O que Ã© Sistema Operacional?', 31),
(32, 8, 'Qual programa que instala imagens de sistemas operacionais?', 32),
(33, 8, 'Selecione quais sÃ£o uma das vantagens para a instalaÃ§Ã£o da mÃ¡quina virtual?', 33),
(34, 8, 'O que Ã© particionamento?', 34),
(35, 8, 'Qual a vantagem da formataÃ§Ã£o de um computador?', 35),
(36, 8, 'O que Ã© gerenciador de boot?', 36),
(37, 8, 'O que Ã© BackUp?', 37),
(38, 8, 'O que sÃ£o Drivers?', 38),
(39, 8, 'O que Ã© BIOS?', 39),
(40, 8, 'Cite outro sistema operacional a nÃ£o ser o Windows.', 40);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas_provas`
--

DROP TABLE IF EXISTS `respostas_provas`;
CREATE TABLE IF NOT EXISTS `respostas_provas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pergunta` int(11) NOT NULL,
  `modulo_pergunta` int(11) NOT NULL,
  `resposta` varchar(500) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `verdadeira` int(1) DEFAULT '1' COMMENT '1: Verdadeira | 0: falsa',
  PRIMARY KEY (`id`),
  KEY `id_pergunta` (`id_pergunta`),
  KEY `modulo_pergunta` (`modulo_pergunta`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `respostas_provas`
--

INSERT INTO `respostas_provas` (`id`, `id_pergunta`, `modulo_pergunta`, `resposta`, `verdadeira`) VALUES
(1, 1, 1, '', 1),
(2, 1, 1, 'Baixar Músicas da internet', 0),
(3, 1, 1, 'Baixar fotos da internet', 0),
(4, 1, 1, 'Baixar filmes da internet', 0),
(5, 2, 1, 'Google - 15GB, OneDrive - 5GB, Mega - AtÃ© 50GB, Dropbox - Inicialmente 2GB', 1),
(6, 2, 1, 'Google - 10GB, OneDrive - 5GB, Mega - 500GB, DropBox - Ilimitado', 0),
(7, 2, 1, 'Google - 100GB, OneDrive - 50GB, Mega - 30GB, DropBox - 30GB', 0),
(8, 2, 1, 'Google - 70GB, OneDrive - 50GB, Mega - 5GB, DropBox - 10GB', 0),
(9, 3, 1, 'UtlizaÃ§Ã£o independente do sistema, compartilhamento no ambiente corporativo simplificado', 1),
(10, 3, 1, 'Resposta errada 1', 0),
(11, 3, 1, 'Resposta errada 2', 0),
(12, 3, 1, 'Resposta errada 3', 0),
(13, 4, 1, 'Compartilhar arquivos, criaÃ§Ã£o de arquivos diretamente na nuvem, armazenamento dos dados dos seu Smartphone', 1),
(14, 4, 1, 'Resposta errada 1', 0),
(15, 4, 1, 'Resposta errada 2', 0),
(16, 4, 1, 'Controlar as configuraÃ§Ãµes do computador, tais como data e hora, contas de usuÃ¡rios e demais recursos,', 0),
(17, 5, 1, 'Link de compartilhamento, autorizaÃ§Ã£o de usuÃ¡rio da nuvem', 1),
(18, 5, 1, 'Resposta errada 1', 0),
(19, 5, 1, 'Resposta errada 2', 0),
(20, 5, 1, 'Resposta errada 4', 0),
(21, 6, 3, 'AutÃ´nomo', 1),
(22, 6, 3, 'Resposta errada 1', 0),
(23, 6, 3, 'Resposta errada 2', 0),
(24, 6, 3, 'Resposta errada 4', 0),
(25, 7, 3, 'Eventual', 1),
(26, 7, 3, 'Resposta errada 1', 0),
(27, 7, 3, 'Resposta errada 2', 0),
(28, 7, 3, 'Resposta errada 4', 0),
(29, 8, 3, 'TemporÃ¡rio', 1),
(30, 8, 3, 'Resposta errada 1', 0),
(31, 8, 3, 'Resposta errada 2', 0),
(32, 8, 3, 'Resposta errada 4', 0),
(33, 9, 3, 'TÃ¡cito', 1),
(34, 9, 3, 'Resposta errada 1', 0),
(35, 9, 3, 'Resposta errada 2', 0),
(36, 9, 3, 'Resposta errada 4', 0),
(37, 10, 3, '14 e 24 / empregador', 1),
(38, 10, 3, 'Resposta errada 1', 0),
(39, 10, 3, 'Resposta errada 2', 0),
(40, 10, 3, 'Resposta errada 4', 0),
(41, 11, 3, 'ExperiÃªncia', 1),
(42, 11, 3, 'Resposta errada 1', 0),
(43, 11, 3, 'Resposta errada 2', 0),
(44, 11, 3, 'Resposta errada 4', 0),
(45, 12, 3, 'Determinado', 1),
(46, 12, 3, 'Resposta errada 1', 0),
(47, 12, 3, 'Resposta errada 2', 0),
(48, 12, 3, 'Resposta errada 4', 0),
(49, 13, 3, 'Contrato Indeterminado', 1),
(50, 13, 3, 'Resposta errada 1', 0),
(51, 13, 3, 'Resposta errada 2', 0),
(52, 13, 3, 'Resposta errada 4', 0),
(53, 14, 3, 'Os horÃ¡rios forem compatÃ­veis e as empresas nÃ£o forem concorrentes', 1),
(54, 14, 3, 'Resposta errada 1', 0),
(55, 14, 3, 'Resposta errada 2', 0),
(56, 14, 3, 'Resposta errada 4', 0),
(57, 15, 3, 'Por sua vez a empresa declarar falÃªncia ou dissoluÃ§Ã£o da empresa inclusive concordata (Art. 449 - CLT).', 1),
(58, 15, 3, 'Resposta errada 1', 0),
(59, 15, 3, 'Resposta errada 2', 0),
(60, 15, 3, 'Resposta errada 4', 0),
(61, 16, 5, 'Controlar as configuraÃ§Ãµes do computador, tais como data e hora, contas de usuÃ¡rios e demais recursos', 1),
(62, 16, 5, 'Resposta errada 1', 0),
(63, 16, 5, 'Resposta errada 2', 0),
(64, 16, 5, 'Resposta errada 4', 0),
(65, 17, 5, 'Ã‰ uma barreira de proteÃ§Ã£o que controla o trÃ¡fego entre seu computador e a internet, evitando ataques de usuÃ¡rios maliciosos ao seu sistema operacional', 1),
(66, 17, 5, 'Resposta errada 1', 0),
(67, 17, 5, 'Resposta errada 2', 0),
(68, 17, 5, 'Resposta errada 4', 0),
(69, 18, 5, 'Comum: autorizaÃ§Ã£o para usar o sistema e fazer modificaÃ§Ãµes que nÃ£o afetem o desempenho do sistema | Administrador: autorizaÃ§Ã£o para fazer quaisquer manipulaÃ§Ãµes no sistema operacional, inclusive instalar novos programas.', 1),
(70, 18, 5, 'Resposta errada 1', 0),
(71, 18, 5, 'Resposta errada 2', 0),
(72, 18, 5, 'Resposta errada 4', 0),
(73, 19, 5, 'Ã‰ um grupo de computadores em uma rede domÃ©stica que podem compartilhar arquivos e impressoras. VocÃª pode configurar no painel de controle', 1),
(74, 19, 5, 'Resposta errada 1', 0),
(75, 19, 5, 'Resposta errada 2', 0),
(76, 19, 5, 'Resposta errada 4', 0),
(77, 20, 5, 'Pendrive, Teclado, Mouse', 1),
(78, 20, 5, 'Resposta errada 1', 0),
(79, 20, 5, 'Resposta errada 2', 0),
(80, 20, 5, 'Resposta errada 4', 0),
(81, 21, 6, 'Break a Leg', 1),
(82, 21, 6, 'Resposta errada 1', 0),
(83, 21, 6, 'Resposta errada 2', 0),
(84, 21, 6, 'Resposta errada 4', 0),
(85, 22, 6, 'speak of the devil', 1),
(86, 22, 6, 'Resposta errada 1', 0),
(87, 22, 6, 'Resposta errada 2', 0),
(88, 22, 6, 'Resposta errada 4', 0),
(89, 23, 6, 'piece of cake', 1),
(90, 23, 6, 'Resposta errada 1', 0),
(91, 23, 6, 'Resposta errada 2', 0),
(92, 23, 6, 'Resposta errada 4', 0),
(93, 24, 6, 'cut corners', 1),
(94, 24, 6, 'Resposta errada 1', 0),
(95, 24, 6, 'Resposta errada 2', 0),
(96, 24, 6, 'Resposta errada 4', 0),
(97, 25, 6, 'crush', 1),
(98, 25, 6, 'Resposta errada 1', 0),
(99, 25, 6, 'Resposta errada 2', 0),
(100, 25, 6, 'Resposta errada 4', 0),
(101, 26, 6, 'Right in the bull\'s eyes', 1),
(102, 26, 6, 'Resposta errada 1', 0),
(103, 26, 6, 'Resposta errada 2', 0),
(104, 26, 6, 'Resposta errada 4', 0),
(105, 27, 6, 'awesome', 1),
(106, 27, 6, 'Resposta errada 1', 0),
(107, 27, 6, 'Resposta errada 2', 0),
(108, 27, 6, 'Resposta errada 4', 0),
(109, 28, 6, 'chilling (out)', 1),
(110, 28, 6, 'Resposta errada 1', 0),
(111, 28, 6, 'Resposta errada 2', 0),
(112, 28, 6, 'Resposta errada 4', 0),
(113, 29, 6, 'dumped', 1),
(114, 29, 6, 'Resposta errada 1', 0),
(115, 29, 6, 'Resposta errada 2', 0),
(116, 29, 6, 'Resposta errada 4', 0),
(117, 30, 6, 'had a blast', 1),
(118, 30, 6, 'Resposta errada 1', 0),
(119, 30, 6, 'Resposta errada 2', 0),
(120, 30, 6, 'Resposta errada 4', 0),
(121, 31, 8, 'Ã‰ o software mais importante de um computador, com ele podemos dar comandos ao nosso computador e fazer ele responder conforme a nossa necessidade', 1),
(122, 31, 8, 'Resposta errada 1', 0),
(123, 31, 8, 'Resposta errada 2', 0),
(124, 31, 8, 'Resposta errada 4', 0),
(125, 32, 8, 'Virtual Box', 1),
(126, 32, 8, 'Resposta errada 1', 0),
(127, 32, 8, 'Resposta errada 2', 0),
(128, 32, 8, 'Resposta errada 4', 0),
(129, 33, 8, 'Permite o teste do sistema operacional antes de utilizar a versÃ£o completa no computador', 1),
(130, 33, 8, 'Resposta errada 1', 0),
(131, 33, 8, 'Resposta errada 2', 0),
(132, 33, 8, 'Resposta errada 4', 0),
(133, 34, 8, 'Ã‰ uma divisÃ£o do disco rÃ­gido, permitindo instalaÃ§Ãµes de vÃ¡rios tipos de sistemas operacionais em um Ãºnico disco', 1),
(134, 34, 8, 'Resposta errada 1', 0),
(135, 34, 8, 'Resposta errada 2', 0),
(136, 34, 8, 'Resposta errada 4', 0),
(137, 35, 8, 'Processo que permite o correto esvaziamento de um disco rÃ­gido para poder reutilizÃ¡-lo depois. Normalmente, o processo de formataÃ§Ã£o Ã© realizado para reverter um sistema de arquivo que por alguma razÃ£o se tornou corrompido ou perigoso.', 1),
(138, 35, 8, 'Resposta errada 1', 0),
(139, 35, 8, 'Resposta errada 2', 0),
(140, 35, 8, 'Resposta errada 4', 0),
(141, 36, 8, 'SÃ£o softwares capazes de iniciar o processo de carregamento de sistemas operacionais em um computador.', 1),
(142, 36, 8, 'Resposta errada 1', 0),
(143, 36, 8, 'Resposta errada 2', 0),
(144, 36, 8, 'Resposta errada 4', 0),
(145, 37, 8, 'Backup Ã© um termo inglÃªs que tem o significado de cÃ³pia de seguranÃ§a. Ã‰ frequentemente utilizado em informÃ¡tica para indicar a existÃªncia de cÃ³pia de um ou mais arquivos guardados em diferentes dispositivos de armazenamento.', 1),
(146, 37, 8, 'Resposta errada 1', 0),
(147, 37, 8, 'Resposta errada 2', 0),
(148, 37, 8, 'Resposta errada 4', 0),
(149, 38, 8, 'SÃ£o programas responsÃ¡veis pela comunicaÃ§Ã£o entre o sistema operacional de computador e o hardware conectado a ele.', 1),
(150, 38, 8, 'Resposta errada 1', 0),
(151, 38, 8, 'Resposta errada 2', 0),
(152, 38, 8, 'Resposta errada 4', 0),
(153, 39, 8, 'Trata-se de um mecanismo responsÃ¡vel por algumas atividades consideradas corriqueiras em um computador, mas que sÃ£o de suma importÃ¢ncia para o correto funcionamento de uma mÃ¡quina. Se a BIOS para de funcionar, o PC tambÃ©m para.', 1),
(154, 39, 8, 'Resposta errada 1', 0),
(155, 39, 8, 'Resposta errada 2', 0),
(156, 39, 8, 'Resposta errada 4', 0),
(157, 40, 8, 'Linux', 1),
(158, 40, 8, 'Resposta errada 1', 0),
(159, 40, 8, 'Resposta errada 2', 0),
(160, 40, 8, 'Resposta errada 4', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unidade` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT 'tatuape',
  `matricula` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `matricula_md5` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `senha` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `senha_md5` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `turma` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `idade` int(2) DEFAULT '1',
  `aula1` int(11) DEFAULT '0',
  `aula2` int(11) DEFAULT '0',
  `aula3` int(11) DEFAULT '0',
  `aula4` int(11) DEFAULT '0',
  `aula5` int(11) DEFAULT '0',
  `aula6` int(11) DEFAULT '0',
  `aula7` int(11) DEFAULT '0',
  `aula8` int(11) DEFAULT '0',
  `prova1` int(11) DEFAULT '0',
  `prova2` int(11) DEFAULT '0',
  `prova3` int(11) DEFAULT '0',
  `prova4` int(11) DEFAULT '0',
  `prova5` int(11) DEFAULT '0',
  `prova6` int(11) DEFAULT '0',
  `prova7` int(11) DEFAULT '0',
  `prova8` int(11) DEFAULT '0',
  `permissao` int(11) DEFAULT '0' COMMENT '0 para alunos e 1 para prof 2 para adm',
  `ativado` int(1) DEFAULT '1' COMMENT '0 Para inativo, 1 para ativo',
  `foto` varchar(250) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `unidade`, `matricula`, `matricula_md5`, `senha`, `senha_md5`, `nome`, `email`, `turma`, `idade`, `aula1`, `aula2`, `aula3`, `aula4`, `aula5`, `aula6`, `aula7`, `aula8`, `prova1`, `prova2`, `prova3`, `prova4`, `prova5`, `prova6`, `prova7`, `prova8`, `permissao`, `ativado`, `foto`) VALUES
(1, 'tatuape', 'experience', 'd6e047923b2b0f63a7a03c66074a0151', '123456', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'hugo@n2y.com.br', 'Admin', 29, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1, 'default.jpg'),
(2, 'Tatuape', '663', '8757150decbd89b0f5442ca3db4d0e0e', '123456', 'e10adc3949ba59abbe56e057f20f883e', 'Hugo Christian Pereira Gomes', 'hugo.allnet@gmail.com', 'AdministraÃ§Ã£o', 29, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, NULL);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `questoes_provas`
--
ALTER TABLE `questoes_provas`
  ADD CONSTRAINT `questoes_provas_ibfk_1` FOREIGN KEY (`modulo_prova`) REFERENCES `aulas` (`id`);

--
-- Limitadores para a tabela `respostas_provas`
--
ALTER TABLE `respostas_provas`
  ADD CONSTRAINT `respostas_provas_ibfk_1` FOREIGN KEY (`id_pergunta`) REFERENCES `questoes_provas` (`id_prova`),
  ADD CONSTRAINT `respostas_provas_ibfk_2` FOREIGN KEY (`modulo_pergunta`) REFERENCES `aulas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
