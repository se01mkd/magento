<?php
class Mages_Contact_Block_Adminhtml_Contact_Grid  extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();

        $this->setDefaultSort('created_at');
        $this->setDefaultDir('asc');
    }
    protected function _getCollectionClass()
    {
        return 'contact/contact_collection';
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }
    protected function _prepareColumns()
    {
        $this->addColumn('contact_id',
            array(
                'header'=> $this->__('ID'),
                'align' =>'right',
                'width' => '50px',
                'index' => 'contact_id'
            )
        );

        $this->addColumn('name',
            array(
                'header'=> $this->__('Name'),
                'index' => 'name'
            )
        );
        $this->addColumn('phone',
            array(
                'header'=> $this->__('Phone'),
                'index' => 'phone'
            )
        );
        $this->addColumn('content',
            array(
                'header'=> $this->__('Content'),
                'index' => 'content'
            )
        );
        $this->addColumn('created_at',
            array(
                'header'=> $this->__('Created_at'),
                'index' => 'created_at'
            )
        );
        return parent::_prepareColumns();
    }


}