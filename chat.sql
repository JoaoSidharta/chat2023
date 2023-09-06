CREATE TABLE IF NOT EXISTS `chat`( 
    `id` INT (11) NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(255) NOT NULL,
    `mensagem` text NOT NULL,
    `data` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 
AUTO_INCREMENT=1 ;