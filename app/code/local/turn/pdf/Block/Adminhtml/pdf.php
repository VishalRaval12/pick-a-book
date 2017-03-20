<?php
class turn_pdf_Block_Adminhtml_pdf extends Mage_Adminhtml_Block_Widget_Grid_Container
{
public function __construct()
{
$this->_controller = ‘adminhtml_pdf’;
$this->_blockGroup = ‘pdf’;
$this->_headerText = Mage::helper(‘pdf’)->__(‘Item Manager’);
$this->_addButtonLabel = Mage::helper(‘pdf’)->__(‘Add Item’);
parent::__construct();
}
}