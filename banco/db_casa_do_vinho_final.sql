-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Ago-2020 às 19:02
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_casa_do_vinho`
--

-- --------------------------------------------------------

DROP DATABASE IF EXISTS db_casa_do_vinho;

CREATE DATABASE IF NOT EXISTS db_casa_do_vinho CHARACTER SET utf8 COLLATE utf8_general_ci;

USE db_casa_do_vinho;

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `id_sexo` int(11) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int(10) UNSIGNED NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `id_usu`, `nome`, `cpf`, `email`, `telefone`, `id_sexo`, `rua`, `numero`, `bairro`, `cep`, `cidade`, `id_estado`) VALUES
(1, 1, 'Matheus ', '70259203203', 'admin', '(92) 99999-999', 1, 'A', 4, 'Alto', '99999-999', 'Manaus', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `id_sexo` int(11) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int(10) UNSIGNED NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `id_usu`, `nome`, `cpf`, `email`, `telefone`, `id_sexo`, `rua`, `numero`, `bairro`, `cep`, `cidade`, `id_estado`) VALUES
(3, 5, 'Matheus Souza', '702.592.032-03', 'matheus@gmail.com', '(92) 99999-999', 1, 'M', 99, 'Alto', '99999-999', 'Manaus', 4);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `compra`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `compra` (
`id` int(11)
,`cliente` varchar(100)
,`Vinho` varchar(100)
,`Quantidade` int(11)
,`Data` varchar(20)
,`Total` float
,`Situacao` varchar(30)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vinho` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `total` float NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `mensagem` text NOT NULL,
  `hora_mensage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `telefone`, `mensagem`, `hora_mensage`) VALUES
(4, 'Matheus Souza', 'matheus@gmail.com', '(92)999999999', 'Boas qualidades de vinhos, porém ainda falta bastante opções de vinhos, no entanto, o site é bem prático e fácil de usar', '05/08/2020 às 17:13:'),
(5, 'Wesley Rodrigues', 'wesley@gmail.com', '(92) 99999-999', 'Super interessante os vinhos vendidos de preço e qualidade, acessíveis, e o fato de serem vinhos de várias regiões do mundo torna isso ainda melhor', '05/08/2020 às 17:18:'),
(6, 'Weverton Rodrigues', 'weverton@gmail.com', '(92) 999999-99', 'Eu nem gostava de vinho, mas quando conheci essa loja gostei', '05/08/2020 às 17:20:'),
(7, 'Renatha Duarte', 'renatha@gmail.com', '(92)99999-9999', 'Eu sinceramente odiei tudo, não gosto de nada e acho essa loja de vinho puro machismo', '05/08/2020 às 17:21:'),
(8, 'Eduarda Lima', 'duda@gmail.com', '(92) 999999-99', 'Eu realmente gostei de tudo e pela aparência do site o cara que fez parece ser muito lindo eu gosto dele demais, gostosão', '05/08/2020 às 17:23:'),
(9, 'Sebastião Souza', 'sebastiao@gmail.com', '(92) 88888-888', 'Eu com os meus 99 anos de idade nunca vi loja de vinho online tão boa, no sentido figurado pois nem vejo mais', '05/08/2020 às 18:34:');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `nome` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id`, `nome`) VALUES
(1, 'AC'),
(2, 'AL'),
(3, 'AP'),
(4, 'AM'),
(5, 'BA'),
(6, 'CE'),
(7, 'DF'),
(8, 'ES'),
(9, 'GO'),
(10, 'MA'),
(11, 'MT'),
(12, 'MS'),
(13, 'MG'),
(14, 'PA'),
(15, 'PB'),
(16, 'PR'),
(17, 'PE'),
(18, 'PI'),
(19, 'RJ'),
(20, 'RN'),
(21, 'RS'),
(22, 'RO'),
(23, 'RR'),
(24, 'SC'),
(25, 'SP'),
(26, 'SE'),
(27, 'TO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro_login`
--

CREATE TABLE `registro_login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `situacao` varchar(100) NOT NULL,
  `hora_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sexo`
--

CREATE TABLE `sexo` (
  `id` int(11) NOT NULL,
  `sexo_nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sexo`
--

INSERT INTO `sexo` (`id`, `sexo_nome`) VALUES
(1, 'Homem'),
(2, 'Mulher'),
(3, 'Prefiro não declarar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` char(32) NOT NULL,
  `perfil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `perfil`) VALUES
(1, 'Matheus ', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(5, 'Matheus Souza', 'matheus@gmail.com', '202cb962ac59075b964b07152d234b70', 'cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vinho`
--

CREATE TABLE `vinho` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `qtd` int(11) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vinho`
--

INSERT INTO `vinho` (`id`, `nome`, `marca`, `preco`, `qtd`, `descricao`) VALUES
(1, 'Vinho Tinto', 'Dom Bosco', 10, 0, 'Vinho Suave Tinto'),
(2, 'Vinho branco', 'Engenho', 20.4, 70, 'Vinho suave branco'),
(3, 'Vinho Polones', 'Polonia', 70.9, 47, 'Vinho direto da Polônia'),
(4, 'Vinho Luxerburgo', 'Luxius', 789.9, 30, 'Vinho de 1967, fermentado a base carvalho e com cerca de 53 guardado em depósito para melhor sabor, feito de uvas cultivada na argentina'),
(5, 'Vinho Branco 1500 Dom Pedro', 'Dom pedro', 1500.2, 1, 'Muitos não sabiam mas é que além de navegador Dom Pedro fazia vinhos e quando descobriu o brasil ele fez esse vinho e agora só restam dois, vai comprar?');

-- --------------------------------------------------------

--
-- Estrutura para vista `compra`
--
DROP TABLE IF EXISTS `compra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `compra`  AS  select `compras`.`id` AS `id`,`cliente`.`nome` AS `cliente`,`vinho`.`nome` AS `Vinho`,`compras`.`qtd` AS `Quantidade`,`compras`.`hora` AS `Data`,`compras`.`total` AS `Total`,`compras`.`status` AS `Situacao` from ((`cliente` join `compras` on(`compras`.`id_cliente` = `cliente`.`id`)) join `vinho` on(`vinho`.`id` = `compras`.`id_vinho`)) ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD KEY `id_usu` (`id_usu`),
  ADD KEY `id_sexo` (`id_sexo`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD KEY `id_usu` (`id_usu`),
  ADD KEY `id_sexo` (`id_sexo`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Índices para tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_vinho` (`id_vinho`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `registro_login`
--
ALTER TABLE `registro_login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vinho`
--
ALTER TABLE `vinho`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `registro_login`
--
ALTER TABLE `registro_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `vinho`
--
ALTER TABLE `vinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `adm`
--
ALTER TABLE `adm`
  ADD CONSTRAINT `adm_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `adm_ibfk_2` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id`),
  ADD CONSTRAINT `adm_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id`);

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id`),
  ADD CONSTRAINT `cliente_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id`);

--
-- Limitadores para a tabela `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_vinho`) REFERENCES `vinho` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
