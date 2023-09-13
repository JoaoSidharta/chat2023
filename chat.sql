CREATE TABLE IF NOT EXISTS `chat` (
  --coluna com id da mensagem com auto incremento
  `id` int(11) NOT NULL AUTO_INCREMENT,
  --coluna com nome do usuario
  `nome` varchar(255) NOT NULL,
  --coluna com mensagem
  `mensagem` text NOT NULL,
  --coluna com data da mensagem
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;