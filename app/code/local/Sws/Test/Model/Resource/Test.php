<?php
class Sws_Test_Model_Resource_Test extends Mage_Core_Model_Resource_Db_Abstract
{
     public function _construct()
     {
         $this->_init('test/test', 'test_id');
     }
}
?>