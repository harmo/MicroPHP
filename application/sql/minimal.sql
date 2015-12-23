DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(65) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `last_ip` varchar(150) NOT NULL,
  `blocked` int(1) NOT NULL DEFAULT '0',
  `lost_attempts` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
);
