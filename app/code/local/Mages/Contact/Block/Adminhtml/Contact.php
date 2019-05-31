<?php
class Mages_Contact_Block_Adminhtml_Contact extends Mage_Adminhtml_Block_Widget_Grid_Container {
    public function __construct()
    {
        $this->_blockGroup = 'adminhtml_contact';
        $this->_controller = 'contact';
        $this->_headerText = $this->__('Contact');

        parent::__construct();
        $this->_removeButton('add');

    }

}

