<?php
class turn_pdf_Model_pdf extends Mage_Core_Model_Abstract
{
public function _construct()
{
parent::_construct();
$this->_init(‘pdf/pdf’);
