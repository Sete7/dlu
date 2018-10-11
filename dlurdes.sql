-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 09-Out-2018 às 20:56
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlurdes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cod`, `titulo`, `url`, `descricao`, `status`, `data`) VALUES
(3, ' Pizza Tradicionais', 'pizza-tradicionais', '  Pizza Tradicionais Semanais', 1, '2018-10-09 12:40:16'),
(2, '  Pizza Exclusivas', 'pizza-exclusivas', '  Pizza Exclusivas Semanais', 1, '2018-10-09 12:40:55'),
(4, 'Feijoada', 'feijoada', 'Feijoada Mineira', 1, '2018-10-08 12:45:17'),
(5, 'Receita Mineira', 'receita-mineira', '  Receita Comida Mineira', 1, '2018-10-08 14:41:39'),
(6, '  Pizza Especiais', 'pizza-especiais', ' Pizza Especiais Semanais', 1, '2018-10-09 12:41:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pizza`
--

DROP TABLE IF EXISTS `pizza`;
CREATE TABLE IF NOT EXISTS `pizza` (
  `cod_pizza` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `status` int(11) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  `valor` varchar(200) NOT NULL,
  PRIMARY KEY (`cod_pizza`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pizza`
--

INSERT INTO `pizza` (`cod_pizza`, `titulo`, `categoria`, `url`, `descricao`, `status`, `thumb`, `data`, `valor`) VALUES
(1, 'D&#39;ITALIA', 2, 'd-39-italia', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;Mussarela, calabresa, palmito, champignon, catupiry e or&#38;eacute;gano;&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', 1, 'pizzas/2018/10/pizza-1539108708.jpg', '2018-10-09 17:09:32', '30, 90'),
(3, 'BAIANA', 3, 'baiana', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;Mussarela, calabresa, e pimenta calabresa;&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', 1, 'pizzas/2018/10/pizza-b.jpg', '2018-10-09 17:10:01', '30, 00'),
(4, 'MONALISA', 2, 'monalisa', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Mussarela, lombinho, palmito, azeitona, milho, champignon e catupiry;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'pizzas/2018/10/monalisa.jpg', '2018-10-09 17:03:46', '30, 00'),
(5, 'FRANCESA', 6, 'francesa', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Mussarela, presunto, palmito, cebola, azeitona e or&eacute;gano;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'pizzas/2018/10/francesa.jpg', '2018-10-09 17:04:24', '30, 00'),
(6, 'BACON ESPECIAL', 3, 'bacon-especial', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Mussarela, tomate, ovo, bacon, catupiry e or&eacute;gano;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'pizzas/2018/10/bacon-especial.jpg', '2018-10-09 17:04:56', '39,90'),
(7, 'ATUM', 3, 'atum', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Mussarela, tomate, atum, cebola, azeitona e or&eacute;gano;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'pizzas/2018/10/atum.jpg', '2018-10-09 17:05:48', '39,90'),
(8, 'FRATELLI', 6, 'fratelli', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Mussarela, calabresa, ovo, milho, bacon, tomate, presunto, cebola, catupiry e or&eacute;gano;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'pizzas/2018/10/fratelli.jpg', '2018-10-09 17:06:32', '39,90'),
(9, 'FIORENTINA', 2, 'fiorentina', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Mussarela, presunto, cebola, catupiry e or&eacute;gano;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'pizzas/2018/10/fiorentina.jpg', '2018-10-09 17:07:05', '39,90'),
(10, 'MINEIRA', 3, 'mineira', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Mussarela, presunto, calabresa, milho, cebola, azeitona e or&eacute;gano;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'pizzas/2018/10/mineira.jpg', '2018-10-09 17:07:36', '39,90'),
(11, 'TORINO', 2, 'torino', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Mussarela, tomate, milho, azeitona, catupiry e or&eacute;gano;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'pizzas/2018/10/torino.jpg', '2018-10-09 17:08:35', '39,90'),
(12, 'BACALHAU', 2, 'bacalhau', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Mussarela, tomate, ovo, bacalhau, cebola, azeitona e or&eacute;gano;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'pizzas/2018/10/bacalhau.jpg', '2018-10-09 17:09:05', '39,90');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

DROP TABLE IF EXISTS `receita`;
CREATE TABLE IF NOT EXISTS `receita` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `status` int(11) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  `tipo` varchar(30) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `receita`
--

INSERT INTO `receita` (`cod`, `titulo`, `categoria`, `url`, `descricao`, `status`, `thumb`, `data`, `tipo`) VALUES
(1, 'Frango Com Quiabo Mineiro', 5, 'frango-com-quiabo-mineiro', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;FRANGO COM QUIABO MINEIRO&#60;br /&#62;1 quilo de quiabo&#60;br /&#62;1 frango inteiro, cortado em peda&#38;ccedil;os&#60;br /&#62;5 dentes de alho amassados&#60;br /&#62;1 cebola grande bem pitadinha&#60;br /&#62;1 x&#38;iacute;cara (ch&#38;aacute;) de &#38;oacute;leo&#60;br /&#62;1 colher (sobremesa) de colorau&#60;br /&#62;pimenta a gosto&#60;br /&#62;sal a gosto&#60;br /&#62;cheiro verde a gosto&#60;/p&#62;&#13;&#10;&#60;p&#62;MODO DE PREPARO&#60;br /&#62;Tempere o frango com o alho amassados, sal, pimenta e colorau&#60;br /&#62;Se desejar, acrescente uma colher (sopa) de vinagre&#60;br /&#62;Deixe marinar na geladeira por aproximadamente, 30 minutos&#60;br /&#62;PREPARANDO O QUIABO:&#60;br /&#62;lave o quiabo e seque com um pano, deixando-o bem sequinho&#60;br /&#62;Pique em rodelinhas finas&#60;br /&#62;Em uma panela, aque&#38;ccedil;a uma x&#38;iacute;cara de &#38;oacute;leo&#60;br /&#62;Acrescente o quiabo picado e deixe refogar at&#38;eacute; que n&#38;atilde;o tenha mais nenhuma baba&#60;br /&#62;tenha paci&#38;ecirc;ncia, porque a baba sai! este processo leva cerca de 20 minutos&#60;br /&#62;Mexa de vez em quando, com cuidado para o quiabo n&#38;atilde;o desmanchar&#60;br /&#62;Quando estiver sem baba, desligue o fogo, espere amornar e coe, para retirar o &#38;oacute;leo&#60;br /&#62;Reserve somente o quiabo&#60;br /&#62;PREPARANDO O FRANGO:&#60;br /&#62;Em uma panela, aque&#38;ccedil;a duas colheres (sopa) de &#38;oacute;leo e doure muito bem a cebola, como se estivesse queimando (isso far&#38;aacute; com que solte um corante natural no frango)&#60;br /&#62;Junte o frango e deixe -o fritar muito bem&#60;br /&#62;Quando estiver bastante dourado, junte tr&#38;ecirc;s x&#38;iacute;caras de &#38;aacute;gua fervente, ou um tanto que quase cubra o frango&#60;br /&#62;Corrija o sal, se necess&#38;aacute;rio, e deixe cozinhar em fogo m&#38;eacute;dio, com a panela semi-tampada por mais ou menos 20 minutos, ou at&#38;eacute; que o frango esteja bem macio&#60;br /&#62;Junte o quiabo reservado e deixe apurar at&#38;eacute; que fique encorpado&#60;br /&#62;Se estiver com muito caldo, aumente o fogo e deixe secar um pouco mais&#60;br /&#62;Verifique se est&#38;aacute; bom de sal&#60;br /&#62;Por &#38;uacute;ltimo, junte o cheiro-verde&#60;br /&#62;Sirva com arroz e feij&#38;atilde;o fresquinhos e angu (ou polenta sem molho)&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', 1, 'produtos/2018/10/frango-com-quiabo-mineiro.jpg', '2018-10-08 15:33:14', 'receitas'),
(3, 'Vaca Atolada', 5, 'vaca-atolada', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;INGREDIENTES&lt;br /&gt;1 kg de costela bovina&lt;br /&gt;500 g de mandioca cozida, sem o fio do centro&lt;br /&gt;Alho, cebola e sal a gosto&lt;br /&gt;Cheiro verde&lt;/p&gt;\r\n&lt;p&gt;MODO DE PREPARO&lt;br /&gt;Em uma panela de press&atilde;o frite as costelas em &oacute;leo at&eacute; estarem douradas de todos os lados&lt;br /&gt;Coloque o alho amassado e frite um pouco, em seguida frite a cebola, em fatias ou picada, como preferir&lt;br /&gt;Acrescente bastante &aacute;gua, salgando a seu gosto&lt;br /&gt;Cozinhe as costelas at&eacute; que os ossos se soltem da carne, aproximadamente 40 minutos depois que pegou press&atilde;o&lt;br /&gt;Retire as costelas, separando e descartando os ossos&lt;br /&gt;Passe o caldo para uma panela grande&lt;br /&gt;Acrescente a mandioca cozida e espremida, sem aquele fio que fica no meio&lt;br /&gt;Coloque a carne e deixe cozinhar em fogo baixo por 15 minutos&lt;br /&gt;Se ficar muito grosso, coloque mais &aacute;gua&lt;br /&gt;N&atilde;o pode ficar com o caldo nem ralo nem espesso demais&lt;br /&gt;Salpique com o cheiro verde no momento de servir&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'produtos/2018/10/vaca-atolada.jpg', '2018-10-08 15:29:55', 'receitas'),
(4, 'Torresmo Sequinho Sem Estouro', 5, 'torresmo-sequinho-sem-estouro', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;&#38;nbsp;&#60;/p&#62;&#13;&#10;&#60;p&#62;INGREDIENTES&#60;br /&#62;1 kg de barriga (panceta)&#60;br /&#62;Sal e pimenta do reino a gosto&#60;br /&#62;1 x&#38;iacute;cara de farinha de trigo&#60;br /&#62;1/2 lim&#38;atilde;o&#60;br /&#62;1/2 litro de &#38;oacute;leo para fritar&#60;/p&#62;&#13;&#10;&#60;p&#62;MODO DE PREPARO&#60;br /&#62;Pique a barriga em peda&#38;ccedil;os pequenos, tempere com sal e a pimenta e o lim&#38;atilde;o, reserve por uns 15 minutos&#60;br /&#62;Coloque no recipiente com tampa, coloque a farinha, tampe e fa&#38;ccedil;a movimentos bruscos para que a farinha misture bem e forme uma camada bem fina de cobertura&#60;br /&#62;Coloque o &#38;oacute;leo para aquecer e quando estiver quente, coloque as barrigas deixe que fique cobertas pelo &#38;oacute;leo, mexa de vez em quando at&#38;eacute; ficarem sequinhos&#60;br /&#62;Fique tranquilo(a) n&#38;atilde;o vai estourar e vai ficar uma delicia&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', 1, 'produtos/2018/10/torresmo-sequinho-sem-estouro.jpg', '2018-10-08 15:32:44', 'receitas'),
(5, 'Tutu à Mineiro', 5, 'tutu-a-mineiro', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;INGREDIENTES&#60;br /&#62;1/2 kg de feij&#38;atilde;o cozido sem tempero&#60;br /&#62;2 cebolas cruas raladas&#60;br /&#62;Farinha de mandioca&#60;br /&#62;Pimenta do reino&#60;br /&#62;1 colher de sopa de cacha&#38;ccedil;a&#60;br /&#62;2 ovos cozidos&#60;br /&#62;1/2 kg de ling&#38;uuml;i&#38;ccedil;a frita ou assada no forno&#60;br /&#62;200 g de bacon frito em cubinhos&#60;br /&#62;Couve refogada&#60;/p&#62;&#13;&#10;&#60;p&#62;MODO DE PREPARO&#60;br /&#62;Bater o feij&#38;atilde;o no liquidificador com o caldo do cozimento&#60;br /&#62;Dourar a cebola na gordura do bacon&#60;br /&#62;Refogar o feij&#38;atilde;o com alho amassado&#60;br /&#62;Colocar uma pitada de pimenta do reino, uma colher de cacha&#38;ccedil;a, sal a gosto&#60;br /&#62;Quando abrir fervura, colocar lentamente a farinha de mandioca, mexendo sem parar, at&#38;eacute; o ponto de um pir&#38;atilde;o&#60;br /&#62;Misturar o bacon frito e a ling&#38;uuml;i&#38;ccedil;a picadinha&#60;br /&#62;Despejar numa tigela e enfeitar com rodelas de ovos cozidos , couve e molho de cebola&#60;br /&#62;O tutu deve ser mole pra n&#38;atilde;o ficar seco&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', 1, 'produtos/2018/10/tutu-a-mineiro.jpg', '2018-10-08 17:44:48', 'receitas'),
(6, 'Galinha ao molho pardo', 5, 'galinha-ao-molho-pardo', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;&#38;nbsp;&#60;/p&#62;&#13;&#10;&#60;p&#62;INGREDIENTES&#60;br /&#62;1 galinha&#60;br /&#62;1 cebola picada&#60;br /&#62;&#38;Oacute;leo de soja&#60;br /&#62;Alho&#60;br /&#62;Sal&#60;br /&#62;Pimenta do reino branca&#60;br /&#62;Or&#38;eacute;gano&#60;br /&#62;Colorau&#60;br /&#62;Louro&#60;br /&#62;Manjeric&#38;atilde;o&#60;br /&#62;Salsinha&#60;br /&#62;3 copos de &#38;aacute;gua&#60;br /&#62;MOLHO:&#60;br /&#62;100 ml de vinagre branco&#60;br /&#62;1 x&#38;iacute;cara de ch&#38;aacute; de sangue de galinha&#60;br /&#62;1 unidade de piment&#38;atilde;o verde&#60;br /&#62;Hortel&#38;atilde;&#60;br /&#62;1 unidade de tomate sem pele&#60;/p&#62;&#13;&#10;&#60;p&#62;MODO DE PREPARO&#60;br /&#62;Bata bem no liquidificador o vinagre, o sangue, o piment&#38;atilde;o, a hortel&#38;atilde; e o tomate&#60;br /&#62;Reserve&#60;br /&#62;Corte a galinha em partes, tempere com sal, colorau e pimenta&#60;br /&#62;Reserve&#60;br /&#62;Em uma panela de press&#38;atilde;o, aque&#38;ccedil;a &#38;oacute;leo de soja, refogue o alho e a cebola&#60;br /&#62;Acrescente a galinha e deixe dourar&#60;br /&#62;Acrescente ent&#38;atilde;o o restante dos ingredientes, tampe a panela e deixe cozinhar por 40 minutos&#60;br /&#62;Retire a press&#38;atilde;o da panela com a galinha e junte o molho pardo&#60;br /&#62;Deixe ferver, mexendo, at&#38;eacute; o molho engrossar e a galinha terminar de cozinhar&#60;/p&#62;&#13;&#10;&#60;p&#62;&#38;nbsp;&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', 1, 'produtos/2018/10/galinha-ao-molho-pardo.jpg', '2018-10-08 16:54:40', 'receitas'),
(7, ' Feijão tropeiro', 5, 'feijao-tropeiro', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;INGREDIENTES&#60;br /&#62;150 g de bacon picadinho&#60;br /&#62;250 g de lingui&#38;ccedil;a calabresa picadinha&#60;br /&#62;1 x&#38;iacute;cara (caf&#38;eacute;) de azeite&#60;br /&#62;2 cebolas picadinhas&#60;br /&#62;6 dentes de alho amassados&#60;br /&#62;500 g de feij&#38;atilde;o cozido e escorrido&#60;br /&#62;1 cubo de caldo de bacon&#60;br /&#62;4 ovos fritos inteiros e picadinhos&#60;br /&#62;Cheiro verde&#60;br /&#62;1 1/2 colheres de farinha de mandioca crua&#60;br /&#62;Sal e pimenta &#38;agrave; gosto&#60;/p&#62;&#13;&#10;&#60;p&#62;MODO DE PREPARO&#60;br /&#62;Coloque o azeite em uma panela e frite o bacon e a lingui&#38;ccedil;a separadamente, depois reserve&#60;br /&#62;Na mesma panela frite a cebola e o alho, junte o feij&#38;atilde;o escorrido e o caldo de bacon&#60;br /&#62;Junte novamente o bacon e a lingui&#38;ccedil;a, acrescente a farinha de mandioca e os ovos fritos picadinhos&#60;br /&#62;Acrescente bastante cheiro verde&#60;br /&#62;Acerte o sal e a pimenta, est&#38;aacute; pronto para servir&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', 1, 'produtos/2018/10/feijao-tropeiro.jpg', '2018-10-08 16:54:14', 'receitas'),
(8, ' Angu à Mineira Tradicional', 5, 'angu-a-mineira-tradicional', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;INGREDIENTES&#60;br /&#62;4 colheres (sopa) de fub&#38;aacute; mimoso&#60;br /&#62;150 ml de &#38;aacute;gua para misturar o fub&#38;aacute;&#60;br /&#62;400 ml de &#38;aacute;gua para ferver&#60;/p&#62;&#13;&#10;&#60;p&#62;MODO DE PREPARO&#60;br /&#62;Inicie colocando os quatrocentos ml de &#38;aacute;gua em uma panela preferencialmente com o corpo mais alto e ferva a mesma&#60;br /&#62;O corpo da panela deve ser mais alto sen&#38;atilde;o vai espirar na hora de incorporar os ingredientes&#60;br /&#62;Em uma vasilha pequena coloque cento e cinquenta ml de &#38;aacute;gua e despeje na mesma as quatro colheres de fub&#38;aacute;&#60;br /&#62;Misture e deixe a parte&#60;br /&#62;Quando a &#38;aacute;gua estiver fervendo, adicione o fub&#38;aacute; j&#38;aacute; incorporado com os cento e cinquenta ml de &#38;aacute;gua e misture tudo por cerca de tr&#38;ecirc;s a cinco minutos e tampe a panela&#60;br /&#62;&#38;Eacute; importante notar que a incorpora&#38;ccedil;&#38;atilde;o dos ingredientes vai engrossar e ficar um mingau&#60;br /&#62;Se ficar muito grosso, coloque mais um pouco de &#38;aacute;gua, mas n&#38;atilde;o muito&#60;br /&#62;Uma vez ou outra mexa o angu para que n&#38;atilde;o queime e todo corpo do alimento seja cozido por completo&#60;br /&#62;O angu deve ser preparado com colher de pau&#60;br /&#62;Para saber se o angu esta pronto basta observar a panela&#60;br /&#62;Se nas bordas se o mesmo estiver desprendendo esta pronto&#60;br /&#62;Para finalizar, coloque o angu em um prato fundo e tampe com outro prato por cima&#60;br /&#62;Destampe de dez em dez minutos para tirar o suor que fica no prato de cima&#60;br /&#62;Deve ser feito isto pelo menos tr&#38;ecirc;s vezes para que o angu n&#38;atilde;o fique enxarcado de &#38;aacute;gua&#60;br /&#62;Ap&#38;oacute;s esfriar um pouco sirva&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', 1, 'produtos/2018/10/angu-a-mineira-tradicional.jpg', '2018-10-08 16:44:34', 'receitas'),
(9, 'Ambrosia', 5, 'ambrosia', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;INGREDIENTES&#60;br /&#62;1 l de leite&#60;br /&#62;2 x&#38;iacute;caras de a&#38;ccedil;&#38;uacute;car&#60;br /&#62;6 ovos inteiros&#60;br /&#62;1 pau de canela&#60;br /&#62;4 cravos da &#38;iacute;ndia&#60;br /&#62;Suco de 1 lim&#38;atilde;o pequeno&#60;/p&#62;&#13;&#10;&#60;p&#62;MODO DE PREPARO&#60;br /&#62;Coloque em uma panela m&#38;eacute;dia 1/2 x&#38;iacute;cara de a&#38;ccedil;&#38;uacute;car, a canela e os cravos da &#38;iacute;ndia&#60;br /&#62;Deixe ferver at&#38;eacute; dourar o a&#38;ccedil;&#38;uacute;car (cor de caramelo)&#60;br /&#62;Acrescente o leite, o suco do lim&#38;atilde;o o restante do a&#38;ccedil;&#38;uacute;car e os ovos ( misture os ovos antes para estourar as gemas)&#60;br /&#62;Mexa de vez em quando, com cuidado&#60;br /&#62;Depois deixe ferver at&#38;eacute; ficar quase seca&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', 1, 'produtos/2018/10/ambrosia.jpg', '2018-10-08 16:45:05', 'receitas'),
(10, 'Doce de leite', 5, 'doce-de-leite', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;&#60;br /&#62;INGREDIENTES&#60;br /&#62;2 litros de leite&#60;br /&#62;4 x&#38;iacute;caras de a&#38;ccedil;&#38;uacute;car&#60;/p&#62;&#13;&#10;&#60;p&#62;MODO DE PREPARO&#60;br /&#62;Coloque o leite e o a&#38;ccedil;&#38;uacute;car em uma panela grande de fundo largo&#60;br /&#62;Leve ao fogo m&#38;eacute;dio, mexendo sempre com uma colher de pau, at&#38;eacute; obter fervura (cerca de 15 minutos)&#60;br /&#62;Diminua o fogo e continue mexendo at&#38;eacute; obter um doce marrom claro de consist&#38;ecirc;ncia cremosa (cerca de 45 minutos)&#60;br /&#62;Passe o doce para um refrat&#38;aacute;rio, deixe esfriar bem e sirva colheradas em pratos de sobremesa com fatias de queijo branco&#60;/p&#62;&#13;&#10;&#60;p&#62;&#60;br /&#62;MODO DE PREPARO&#60;br /&#62;Coloque o leite e o a&#38;ccedil;&#38;uacute;car em uma panela grande de fundo largo&#60;br /&#62;Leve ao fogo m&#38;eacute;dio, mexendo sempre com uma colher de pau, at&#38;eacute; obter fervura (cerca de 15 minutos)&#60;br /&#62;Diminua o fogo e continue mexendo at&#38;eacute; obter um doce marrom claro de consist&#38;ecirc;ncia cremosa (cerca de 45 minutos)&#60;br /&#62;Passe o doce para um refrat&#38;aacute;rio, deixe esfriar bem e sirva colheradas em pratos de sobremesa com fatias de queijo branco&#60;br /&#62;INFORMA&#38;Ccedil;&#38;Otilde;ES ADICIONAIS&#60;br /&#62;&#38;Eacute; poss&#38;iacute;vel adicionar ameixas pretas previamente aferventadas, coco ralado, passas maceradas ao rum, nozes picadas ou figo em calda. Para obter um doce com textura bem delicada e cremosa, &#38;eacute; preciso mexer o leite sem parar para dissolver por completo o a&#38;ccedil;&#38;uacute;car.&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', 1, 'produtos/2018/10/doce-de-leite.jpg', '2018-10-08 16:44:26', 'receitas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sliders`
--

DROP TABLE IF EXISTS `tb_sliders`;
CREATE TABLE IF NOT EXISTS `tb_sliders` (
  `slider_cod` int(11) NOT NULL AUTO_INCREMENT,
  `slider_titulo` varchar(255) NOT NULL,
  `slider_status` int(11) NOT NULL,
  `slider_link` varchar(255) NOT NULL,
  `slider_thumb` varchar(255) NOT NULL,
  `slider_tamanho` char(1) NOT NULL,
  PRIMARY KEY (`slider_cod`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_sliders`
--

INSERT INTO `tb_sliders` (`slider_cod`, `slider_titulo`, `slider_status`, `slider_link`, `slider_thumb`, `slider_tamanho`) VALUES
(1, 'Banner Dia das Crianças', 1, '#', 'sliders/2018/10/banner-dia-das-criancas-1539006099.jpg', 'g'),
(2, 'Banner Dia das Crianças', 1, '#', 'sliders/2018/10/banner-dia-das-criancas-1539006371.jpg', ''),
(3, 'Banner Promoção', 1, '#', 'sliders/2018/10/banner-promocao.jpg', 'g'),
(4, 'Banner Maminha na grelha', 1, '#', 'sliders/2018/10/banner-maminha-na-grelha.jpg', 'g');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod` int(11) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel` int(1) NOT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `bairro` varchar(180) DEFAULT NULL,
  `cidade` varchar(180) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod`, `usuario`, `email`, `status`, `nome`, `senha`, `nivel`, `cep`, `bairro`, `cidade`, `endereco`, `estado`, `data`) VALUES
(2, 'Inove', 'inovepublicidadedf@gmail.com', 1, 'Inove', '827ccb0eea8a706c4c34a16891f84e7b', 1, ' 71950-904', 'Areal (Águas Claras)', 'Brasília', 'QS 1 Rua 210 Lote 40', 'DF', '2018-07-13 09:48:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
