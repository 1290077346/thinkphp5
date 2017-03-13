CREATE TABLE IF NOT EXISTS `think_data`(
	`id` int(8) unsigned NOT NULL AUTO_INCREMENT,
	`data` varchar(225) NOT NULL,
	PRIMARY KEY (`id`)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `think_data`(`id`,`data`) VALUES 
(0,'thinkphp'),
(1,'php'),
(2,'frame');