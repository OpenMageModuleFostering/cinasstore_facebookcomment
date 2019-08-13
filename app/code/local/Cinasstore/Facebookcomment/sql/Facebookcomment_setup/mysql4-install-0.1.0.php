<?php

$installer = $this;

$installer->startSetup();

 $installer->run("

DROP TABLE IF EXISTS {$this->getTable('facebookcomment')};
CREATE TABLE {$this->getTable('facebookcomment')} (
  `facebookcomment_id` int(11) unsigned NOT NULL auto_increment,
  `edit_time` datetime NULL,
  PRIMARY KEY (`facebookcomment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

$installer->endSetup(); 