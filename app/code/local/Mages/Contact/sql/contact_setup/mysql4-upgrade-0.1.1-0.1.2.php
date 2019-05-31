<?php
$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

/**
 * Create table 'api/assert'
 */
$installer->getConnection()->dropTable( $installer->getTable('contact/contact'));
$table = $installer->getConnection()
    ->newTable($installer->getTable('contact/contact'))
    ->addColumn('contact_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Contact id')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_TEXT)
    ->addColumn('email', Varien_Db_Ddl_Table::TYPE_TEXT)
    ->addColumn('phone', Varien_Db_Ddl_Table::TYPE_TEXT)
    ->addColumn('content', Varien_Db_Ddl_Table::TYPE_TEXT)
    ->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable'  => false,
    ), 'Created At')
;
$installer->getConnection()->createTable($table);

$installer->endSetup();