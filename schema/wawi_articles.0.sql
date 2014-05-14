CREATE TABLE `wawi_articles` (
  `tenant` int(11) NOT NULL DEFAULT '1',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sku` text NOT NULL,
  `shortdesc` varchar(250) NOT NULL,
  `longdesc` text NOT NULL,
  `remarks` text NOT NULL,
  `creator` int(11) NOT NULL,
  `last_editor` int(11) NOT NULL,
  `create_time` bigint(20) NOT NULL,
  `modify_time` bigint(20) NOT NULL,
  PRIMARY KEY (`tenant`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8