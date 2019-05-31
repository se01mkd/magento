<?php


class Mages_Contact_Block_Contact extends Mage_Core_Block_Template
{
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function getFormAction()
    {
        return $this->getUrl('contact/index/submit');

    }

    public function getListsContact()
    {

        $contacts = Mage::getModel('contact/contact')
            ->getCollection()->setOrder('created_at','desc');
        $request = $this->getRequest();
        if($request->getParam('search')!='')
        {
            $contacts = $contacts->addFieldToFilter(
                ['name','email'],
                [
                    ['like'=>'%'.$request->getParam('search').'%'],
                    ['like'=>'%'.$request->getParam('search').'%']
                ]

            );        }

        return $contacts->getItems();
    }

}