<?php
class turn_pdf_Block_Adminhtml_pdf_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
public function __construct()
{
parent::__construct();
$this->_objectId = ‘id’;
$this->_blockGroup = ‘pdf’;
$this->_controller = ‘adminhtml_pdf’;
$this->_updateButton(‘save’, ‘label’, Mage::helper(‘pdf’)->__(‘Save Item’));
$this->_updateButton(‘delete’, ‘label’, Mage::helper(‘pdf’)->__(‘Delete Item’));
}
public function getHeaderText()
{
if( Mage::registry(‘pdf_data’) && Mage::registry(‘pdf_data’)->getId() ) {
return Mage::helper(‘pdf’)->__(“Edit Item ‘%s'”, $this->htmlEscape(Mage::registry(‘pdf_data’)->getTitle()));
} else {
return Mage::helper(‘pdf’)->__(‘Add Item’);
}
}
}