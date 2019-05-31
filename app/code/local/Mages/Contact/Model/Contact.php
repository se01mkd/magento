<?php


class Mages_Contact_Model_Contact extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('contact/contact');
    }

    public function saveContact($param)
    {
        $contact = Mage::getModel('contact/contact');
        $contact->setName($param['name']);
        $contact->setEmail($param['email']);
        $contact->setPhone($param['telephone']);
        $contact->setContent($param['content']);
        $contact->setCreated_at(date(now()));
        $contact->save();
        return $contact;
    }
}