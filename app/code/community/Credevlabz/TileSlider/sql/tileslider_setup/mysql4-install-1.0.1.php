<?php

$installer = $this;

$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('tileslider')};
CREATE TABLE {$this->getTable('tileslider')} (
  `tileslider_id` int(11) unsigned NOT NULL auto_increment,
  `stores` VARCHAR( 255 ) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL default '',
  `filename` varchar(255) NOT NULL default '',
  `slide_url` varchar(500) NOT NULL default '',
  `slide_target` varchar(255) NOT NULL default '',
  `content` text NOT NULL default '',
  `sort_order` TINYINT( 6 ) NOT NULL DEFAULT '0',
  `status` smallint(6) NOT NULL default '0',
  PRIMARY KEY (`tileslider_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

$installer->endSetup(); 