CREATE TABLE IF NOT EXISTS `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`firstname` varchar(50) COLLATE utf8_bin DEFAULT NULL,
	`lastname` varchar(50) COLLATE utf8_bin DEFAULT NULL,
	`email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
	`username` varchar(50) COLLATE utf8_bin DEFAULT NULL,
	`password` varchar(128) COLLATE utf8_bin DEFAULT NULL,
	`token` varchar(128) COLLATE utf8_bin DEFAULT NULL,
	PRIMARY KEY (`id`)
)