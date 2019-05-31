<?php
$installer = $this;
$installer->startSetup();
$installer->run("
    CREATE TABLE `{$installer->getTable('contact/contact')}` (
      `contact_id` int(11) NOT NULL auto_increment,
      `name` text,
      `email` text,
      `password` datetime default NULL,
      `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
      PRIMARY KEY  (`contact_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

");
$installer->endSetup();