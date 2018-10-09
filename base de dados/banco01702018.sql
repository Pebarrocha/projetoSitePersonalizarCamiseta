-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.36-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
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

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela projetocamiseta.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `codCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `rg` varchar(45) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `fixo` varchar(45) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `cep` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`codCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela projetocamiseta.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `codEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `cnpj` bigint(20) NOT NULL,
  `nomeFantasia` varchar(45) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `CEP` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  PRIMARY KEY (`codEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela projetocamiseta.estampacamiseta
CREATE TABLE IF NOT EXISTS `estampacamiseta` (
  `codEstampaCamiseta` int(11) NOT NULL AUTO_INCREMENT,
  `nomeEstampa` varchar(45) NOT NULL,
  `imagemEstampa` mediumtext NOT NULL,
  PRIMARY KEY (`codEstampaCamiseta`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela projetocamiseta.fotocamiseta
CREATE TABLE IF NOT EXISTS `fotocamiseta` (
  `codFotoCamiseta` int(11) NOT NULL AUTO_INCREMENT,
  `fotoCamiseta` varchar(45) NOT NULL,
  PRIMARY KEY (`codFotoCamiseta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela projetocamiseta.funcionario
CREATE TABLE IF NOT EXISTS `funcionario` (
  `codFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`codFuncionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela projetocamiseta.itensdepersonalizacao
CREATE TABLE IF NOT EXISTS `itensdepersonalizacao` (
  `codItensDePersonalizacao` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `precoPersonalizacao` float NOT NULL,
  PRIMARY KEY (`codItensDePersonalizacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
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

-- Exportação de dados foi desmarcado.
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

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
