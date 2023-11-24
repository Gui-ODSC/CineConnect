-- Adminer 4.8.1 MySQL 8.0.35-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `Filmes`;
CREATE TABLE `Filmes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `duracao` varchar(6) NOT NULL,
  `data_estreia` varchar(10) NOT NULL,
  `classificacao` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `genero` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `atores` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sala_exibicao` varchar(30) NOT NULL,
  `sessao` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `link` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `Filmes` (`id`, `titulo`, `duracao`, `data_estreia`, `classificacao`, `genero`, `atores`, `sala_exibicao`, `sessao`, `link`) VALUES
(1,	'Elementos',	'1h42',	'12-04-2023',	'Livre',	'Animação',	'Leah Lewis, Mason Wertheimer',	'Sala 12',	'17h',	'https://lumiere-a.akamaihd.net/v1/images/elemental_bport_765442cf.png'),
(2,	'Oppenheimer',	'3h00',	'20-07-2023',	'18 anos',	'Ação, Drama',	'Cillian Murphy...',	'Sala 02',	'20h',	'https://cinepop.com.br/wp-content/uploads/2023/07/oppenheimer-movie.jpg.webp'),
(3,	'Jogos Vorazes',	'2h38',	'15-11-2023',	'14 anos',	'Ficção, Ação',	'Jennifer Lawrence..',	'Sala 05',	'21h20',	'https://cinepop.com.br/wp-content/uploads/2023/09/jogos-vorazes-poster.jpg'),
(4,	'Megatubarão 2',	'1h56',	'03-08-2023',	'18 anos',	'Ação, Terror, Aventura',	'Li Bingbing, Jason Stathan',	'Sala 05',	'15h',	'https://pop.proddigital.com.br/wp-content/uploads/sites/8/2023/05/meg-2-image.jpg'),
(5,	'Furiosa',	'2h50',	'24-05-2024',	'18 anos',	'Ação, Ficção',	'Taylor-Joy',	'Sala 22',	'23h00',	'https://img.olhardigital.com.br/wp-content/uploads/2022/08/furiosa-roteiro.jpeg'),
(6,	'Kung Fu Panda 4',	'2h00',	'04-03-2024',	'Livre',	'Animação',	'Jackie Chan',	'Sala 07',	'10h',	'https://www.planocritico.com/wp-content/uploads/2016/02/plano-cr%C3%ADtico-kung-fu-panda-2008.jpg'),
(7,	'Joker: Folie à Deux',	'3h00',	'04-10-2024',	'18 anos',	'Drama, Ação',	' Joaquin Phoenix',	'Sala 11',	'22h00',	'https://m.media-amazon.com/images/M/MV5BODUyODM1OGEtNTY3ZC00OTFjLTkyNDgtODU4MTk5NzkzYmQ5XkEyXkFqcGdeQXVyNjczMjc4NTA@._V1_FMjpg_UX1000_.jpg'),
(10,	'Barbie',	'1h54',	'20-07-2023',	'12 anos',	'Comédia, Fantasia',	'Margot Robbie, Ryan..',	'Sala 03',	'14h35',	'https://s2-vogue.glbimg.com/FmNhe17El_Iab8n7qo203-cBDGw=/0x0:480x600/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_5dfbcf92c1a84b20a5da5024d398ff2f/internal_photos/bs/2023/x/C/jqAddPQOijfNlCNKNEFg/339277575-166477655924790-1364217602656200753-n.jpeg'),
(11,	'Super Mario Bros',	'1h32',	'05-04-2023',	'Livre',	'Comédia, Aventura',	'Anya Taylor-Joy',	'Sala 05',	'13h30',	'https://s2-techtudo.glbimg.com/_SNwRBXpexCnbUTYdqcvJ_AXpXw=/0x0:1200x700/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2023/c/u/JMc0NrTZGew6dSglJMSQ/mario-bros.jpg'),
(12,	'Besouro Azul',	'2h07',	'17-08-2023',	'14 anos',	'Ação, Ficção Científica',	'Bruna Marquezine, Xolo...',	'Sala 01',	'21h40',	'https://stories.cnnbrasil.com.br/wp-content/uploads/sites/9/2023/08/bruna-marquezine-besouro-azul-divulgacao-greve-atores-hollywood-2.jpg'),
(13,	'Sonic 3 - O Filme',	'2h15',	'20-12-2024',	'10 anos',	'Ação, Comédia',	'Ben Schwartz, Jim Carrey',	'Sala 07',	'15h30',	'https://cinepop.com.br/wp-content/uploads/2023/01/sonic3_2.webp'),
(14,	'Deadpool 3',	'2h12',	'26-07-2024',	'16 anos',	'Ação, Comédia',	'Ryan Reynolds, Hugh Jackman',	'Sala 02',	'21h00',	'https://i0.wp.com/www.murphysmultiverse.com/wp-content/uploads/2022/05/DP3.jpg?resize=800%2C450&ssl=1');

-- 2023-11-24 19:26:17
