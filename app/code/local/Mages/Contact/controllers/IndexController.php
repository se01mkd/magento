<?php


class Mages_Contact_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function submitAction()
    {

        $post = $this->getRequest()->getPost();
        if ( $post ) {

                $error = false;

                if (!Zend_Validate::is(trim($post['name']) , 'NotEmpty')) {
                    $error = true;
                }

                if (!Zend_Validate::is(trim($post['content']) , 'NotEmpty')) {
                    $error = true;
                }

                if (!Zend_Validate::is(trim($post['email']), 'EmailAddress')) {
                    $error = true;
                }
                if (!Zend_Validate::is(trim($post['telephone']), 'Regex', ['/^[0-9 ]+$/']))
                {
                    $error = true;
                }
                if($error)
                {
                    Mage::getSingleton('core/session')->addError($this->__('Please check valid input'));
                    return $this->_redirect('*');
                }

                $contact = Mage::getModel('contact/contact')->saveContact($post);
                Mage::getSingleton('core/session')->addSuccess($this->__('Your inquiry was submitted and will be responded to as soon as possible. Thank you for contacting us.'));
                return $this->_redirect('*/*/lists');

            }
        else
            {
            Mage::getSingleton('core/session')->addError($this->__('Please enter Contact Us Form'));
            return $this->_redirect('*');
        }


    }

    public function listsAction()
    {
        $contacts = Mage::getModel('contact/contact')->getCollection()->getItems();

        $this->loadLayout();
        $this->renderLayout();
    }
}