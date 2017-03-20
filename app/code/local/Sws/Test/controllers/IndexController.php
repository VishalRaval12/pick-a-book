<?php

class Sws_Test_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo 'Hello developer...';
		
    }
	
 
    public function sayHelloAction()
    {
        echo 'Hello one more time...';
    }
	
	public function demoAction()
	{
		 <?php block type="core/template" template="test/test.phtml"?>
	}
	
	public function saveAction()
{
 //print_r($_REQUEST);
 $fname= $_GET['name'];
 echo $fname;
 //die("call xyz"); 
 
 $lname=$_GET['nam'];
 echo $lname;
 
  $data = array('firstname'=>"$fname",'lastname'=>"$lname");
  
  //print_r(Mage::getModel('test/test')->setData());
  //die("28");
  
  $model = Mage::getModel('test/test')->setData($data);
      try {
            $insertId = $model->save()->getTestId();
             echo "Data successfully inserted. Insert ID: ".$insertId;
          } 
   catch (Exception $e)
   {
         echo $e->getMessage();
      }
}
}
?>