<?php

class Mages_Contact_Adminhtml_ContactController extends Mage_Adminhtml_Controller_Action
{

    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('contact');
    }


    public function indexAction()
    {
        $this->loadLayout();
        $this->_title($this->__("Contacts"));
        $this->renderLayout();
    }
}
