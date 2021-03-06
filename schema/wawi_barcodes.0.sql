CREATE TABLE `wawi_barcodes` (
  `tenant` int(11) NOT NULL DEFAULT '1',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(40) NOT NULL,
  `wawi_articles_id` int(11) NOT NULL,
  `creator` int(11) NOT NULL,
  `last_editor` int(11) NOT NULL,
  `create_time` bigint(20) NOT NULL,
  `modify_time` bigint(20) NOT NULL,
  PRIMARY KEY (`tenant`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8