CREATE TABLE `wawi_prices` (
  `tenant` int(11) NOT NULL DEFAULT '1',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wawi_articles_id` int(11) NOT NULL,
  `min_quant` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `vat_percentage` int(11) NOT NULL DEFAULT '0',
  `creator` int(11) NOT NULL,
  `last_editor` int(11) NOT NULL,
  `create_time` bigint(20) NOT NULL,
  `modify_time` bigint(20) NOT NULL,
  PRIMARY KEY (`tenant`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8