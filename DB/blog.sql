-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 15/03/2025 às 13:24
-- Versão do servidor: 8.0.30
-- Versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_artigo`
--

CREATE TABLE `tb_artigo` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `img_url` text NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `curtidas` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `tb_artigo`
--

INSERT INTO `tb_artigo` (`id`, `title`, `img_url`, `text`, `curtidas`) VALUES
(1, 'Penguins', 'https://static.nationalgeographicbrasil.com/files/styles/image_3200/public/11240321653_dd01bf61e7_o.webp?w=1600&h=900', 'Os pinguins são aves marinhas fascinantes que capturam a imaginação de pessoas ao redor do mundo. Conhecidos por sua aparência distinta e comportamento peculiar, esses animais são frequentemente associados às regiões geladas da Antártida, embora algumas espécies habitem áreas mais temperadas, como as costas da África do Sul, Nova Zelândia e América do Sul.', 0),
(2, 'Quem é o fundador da DeepSeek? Conheça a história de Liang Wenfeng', 'data:image/png;base64,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', 'O DeepSeek é uma empresa de tecnologia que se dedica ao desenvolvimento de soluções avançadas em inteligência artificial (IA) e aprendizado de máquina. Com foco em pesquisa e inovação, a empresa busca criar sistemas capazes de analisar grandes volumes de dados de forma eficiente, extraindo insights valiosos para diversas aplicações, como finanças, saúde, marketing e segurança. O DeepSeek se destaca por sua capacidade de combinar técnicas de IA com análise de dados em tempo real, oferecendo ferramentas poderosas para tomada de decisões estratégicas.\r\n\r\nAlém disso, o DeepSeek tem se posicionado como uma referência no desenvolvimento de algoritmos de deep learning e processamento de linguagem natural (NLP), permitindo a criação de sistemas inteligentes que podem compreender e interagir com dados não estruturados, como textos e imagens. A empresa também valoriza a ética e a transparência no uso de IA, garantindo que suas soluções sejam seguras e alinhadas com as necessidades dos usuários. Com uma equipe altamente qualificada e uma visão voltada para o futuro, o DeepSeek continua a expandir suas fronteiras, contribuindo para a evolução da inteligência artificial e suas aplicações no mundo real.', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_comment`
--

CREATE TABLE `tb_comment` (
  `id` int NOT NULL,
  `user_name` text NOT NULL,
  `text` text NOT NULL,
  `artigo_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `tb_comment`
--

INSERT INTO `tb_comment` (`id`, `user_name`, `text`, `artigo_id`) VALUES
(2, 'Caio', 'Achei muito legal', 1),
(3, 'Manoel', 'Nossa que chato', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int NOT NULL,
  `name` varchar(90) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Cakios', 'Caio_Henrique2006@outlook.com', '123456'),
(2, 'Julio', 'julio@gmail.com', '123456'),
(3, 'Manoel', 'manoel@gmail.com', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_artigo`
--
ALTER TABLE `tb_artigo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_artigo`
--
ALTER TABLE `tb_artigo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
