DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL DEFAULT '',  // Maximo de caracteres 10
  `password` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
);
