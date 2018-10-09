-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.29-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para projetocamiseta
CREATE DATABASE IF NOT EXISTS `projetocamiseta` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projetocamiseta`;

-- Copiando estrutura para tabela projetocamiseta.camisetapredefinida
CREATE TABLE IF NOT EXISTS `camisetapredefinida` (
  `codCamisetaPreDefinida` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `tamanho` varchar(45) NOT NULL,
  `imagem` varchar(128) DEFAULT NULL,
  `sexo` varchar(50) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `FotoCamiseta_codFotoCamiseta` int(11) DEFAULT NULL,
  `preco` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`codCamisetaPreDefinida`),
  KEY `fk_CamisetaPreDefinida_FotoCamiseta1_idx` (`FotoCamiseta_codFotoCamiseta`),
  CONSTRAINT `fk_CamisetaPreDefinida_FotoCamiseta1` FOREIGN KEY (`FotoCamiseta_codFotoCamiseta`) REFERENCES `fotocamiseta` (`codFotoCamiseta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetocamiseta.camisetapredefinida: ~28 rows (aproximadamente)
/*!40000 ALTER TABLE `camisetapredefinida` DISABLE KEYS */;
INSERT INTO `camisetapredefinida` (`codCamisetaPreDefinida`, `nome`, `descricao`, `tamanho`, `imagem`, `sexo`, `modelo`, `FotoCamiseta_codFotoCamiseta`, `preco`) VALUES
	(7, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', '0', 'modelo', NULL, NULL),
	(9, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 9.99),
	(10, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 9.99),
	(11, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 9.99),
	(12, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 9.99),
	(13, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 9.99),
	(14, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 9.99),
	(15, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 9.99),
	(16, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 9.99),
	(17, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 9.99),
	(18, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 9.99),
	(19, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 9.99),
	(20, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 9.99),
	(21, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 24.90),
	(22, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 99.99),
	(23, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 1000.90),
	(24, 'nome', 'desccamisetapredefinidaricao', 'tamanho', '', 'sexo', 'modelo', NULL, 1000.90),
	(27, 'Camiseta do Adriano', 'Camiseta do Adriano Imperador', 'PP', '', 'masculino', 'tshirt', NULL, 25.00),
	(28, '', 'Camiseta do Adriano Imperador', '', '', 'masculino', 'tshirt', NULL, 25.00),
	(29, '', 'Camiseta imperadora', '', '', 'masculino', 'tshirt', NULL, 10.00),
	(30, '2wci2aw.jpg', 'Imperatriz', '12461', 'C:xampp	mpphp5259.tmp', 'feminino', 'polo', NULL, 90.00),
	(31, 'Imperatriz Chapeconhence', 'Camiseta da imperatriz', 'P', 'C:xampp	mpphpE3EF.tmp', 'masculino', 'tshirt', NULL, 10.00),
	(33, 'Camiseta', 'Camisetra', 'G', 'imagens/camiseta3.jpg', 'masculino', 'tshirt', NULL, 90.90),
	(34, 'Marcelo Rezemde ', 'Eawe', ' PP ', 'imagens/nomedaimagem.jpg', ' masculino ', 'tshirt', NULL, 5.90),
	(35, 'Camiseta Sininho  ', 'Camiseta da sininho ', ' GG ', 'imagens/sininho.jpg', ' feminino ', 'polo', NULL, 9.90),
	(36, 'Sininho', 'Camiseta da sininho', 'GG', 'imagens/sininho.jpg', 'feminino', 'cropped', NULL, 2.90);
/*!40000 ALTER TABLE `camisetapredefinida` ENABLE KEYS */;

-- Copiando estrutura para tabela projetocamiseta.carrinhodecompras
CREATE TABLE IF NOT EXISTS `carrinhodecompras` (
  `codCarrinhoDeCompras` int(10) NOT NULL AUTO_INCREMENT,
  `preco` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `PersonalizarCamiseta_codPersonalizada` int(11) NOT NULL,
  `Venda_codVenda` int(11) NOT NULL,
  `CamisetaPreDefinida_codCamisetaPreDefinida` int(11) NOT NULL,
  PRIMARY KEY (`codCarrinhoDeCompras`),
  KEY `fk_CarrinhoDeCompras_PersonalizarCamiseta1_idx` (`PersonalizarCamiseta_codPersonalizada`),
  KEY `fk_CarrinhoDeCompras_Venda1_idx` (`Venda_codVenda`),
  KEY `fk_CarrinhoDeCompras_CamisetaPreDefinida1_idx` (`CamisetaPreDefinida_codCamisetaPreDefinida`),
  CONSTRAINT `fk_CarrinhoDeCompras_CamisetaPreDefinida1` FOREIGN KEY (`CamisetaPreDefinida_codCamisetaPreDefinida`) REFERENCES `camisetapredefinida` (`codCamisetaPreDefinida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_CarrinhoDeCompras_PersonalizarCamiseta1` FOREIGN KEY (`PersonalizarCamiseta_codPersonalizada`) REFERENCES `personalizarcamiseta` (`codPersonalizada`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_CarrinhoDeCompras_Venda1` FOREIGN KEY (`Venda_codVenda`) REFERENCES `venda` (`codVenda`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetocamiseta.carrinhodecompras: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `carrinhodecompras` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrinhodecompras` ENABLE KEYS */;

-- Copiando estrutura para tabela projetocamiseta.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `codCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `rg` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `numeroCasa` int(11) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `cep` int(11) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `dataBloqueio` date NOT NULL,
  `horaBloqueio` time NOT NULL,
  PRIMARY KEY (`codCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetocamiseta.cliente: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Copiando estrutura para tabela projetocamiseta.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `codEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `cnpj` bigint(20) NOT NULL,
  `nomeFantasia` varchar(45) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `CEP` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  PRIMARY KEY (`codEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetocamiseta.empresa: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

-- Copiando estrutura para tabela projetocamiseta.estampacamiseta
CREATE TABLE IF NOT EXISTS `estampacamiseta` (
  `codEstampaCamiseta` int(11) NOT NULL AUTO_INCREMENT,
  `nomeEstampa` varchar(45) NOT NULL,
  `imagemEstampa` varchar(45) NOT NULL,
  PRIMARY KEY (`codEstampaCamiseta`,`nomeEstampa`,`imagemEstampa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetocamiseta.estampacamiseta: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `estampacamiseta` DISABLE KEYS */;
/*!40000 ALTER TABLE `estampacamiseta` ENABLE KEYS */;

-- Copiando estrutura para tabela projetocamiseta.fotocamiseta
CREATE TABLE IF NOT EXISTS `fotocamiseta` (
  `codFotoCamiseta` int(11) NOT NULL AUTO_INCREMENT,
  `fotoCamiseta` varchar(45) NOT NULL,
  PRIMARY KEY (`codFotoCamiseta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetocamiseta.fotocamiseta: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `fotocamiseta` DISABLE KEYS */;
/*!40000 ALTER TABLE `fotocamiseta` ENABLE KEYS */;

-- Copiando estrutura para tabela projetocamiseta.funcionario
CREATE TABLE IF NOT EXISTS `funcionario` (
  `codFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`codFuncionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetocamiseta.funcionario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;

-- Copiando estrutura para tabela projetocamiseta.itensdepersonalizacao
CREATE TABLE IF NOT EXISTS `itensdepersonalizacao` (
  `codItensDePersonalizacao` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `precoPersonalizacao` float NOT NULL,
  PRIMARY KEY (`codItensDePersonalizacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetocamiseta.itensdepersonalizacao: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `itensdepersonalizacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `itensdepersonalizacao` ENABLE KEYS */;

-- Copiando estrutura para tabela projetocamiseta.personalizarcamiseta
CREATE TABLE IF NOT EXISTS `personalizarcamiseta` (
  `codPersonalizada` int(11) NOT NULL AUTO_INCREMENT,
  `preco` float NOT NULL,
  `sexo` tinyint(4) NOT NULL,
  `cor` varchar(45) NOT NULL,
  `tamanho` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `imagem` varchar(45) NOT NULL,
  `modelo` varchar(25) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `Cliente_codCliente` int(11) NOT NULL,
  `EstampaCamiseta_codEstampaCamiseta` int(11) NOT NULL,
  PRIMARY KEY (`codPersonalizada`),
  KEY `fk_PersonalizarCamiseta_Cliente_idx` (`Cliente_codCliente`),
  KEY `fk_PersonalizarCamiseta_EstampaCamiseta1_idx` (`EstampaCamiseta_codEstampaCamiseta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetocamiseta.personalizarcamiseta: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `personalizarcamiseta` DISABLE KEYS */;
/*!40000 ALTER TABLE `personalizarcamiseta` ENABLE KEYS */;

-- Copiando estrutura para tabela projetocamiseta.venda
CREATE TABLE IF NOT EXISTS `venda` (
  `codVenda` int(11) NOT NULL,
  `horaVenda` time NOT NULL,
  `dataVenda` date NOT NULL,
  `precoTotal` float NOT NULL,
  `tipoDePagamento` varchar(20) NOT NULL,
  `Cliente_codCliente1` int(11) NOT NULL,
  PRIMARY KEY (`codVenda`),
  KEY `fk_Venda_Cliente1_idx` (`Cliente_codCliente1`),
  CONSTRAINT `fk_Venda_Cliente1` FOREIGN KEY (`Cliente_codCliente1`) REFERENCES `cliente` (`codCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetocamiseta.venda: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `venda` DISABLE KEYS */;
/*!40000 ALTER TABLE `venda` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
estampacamiseta