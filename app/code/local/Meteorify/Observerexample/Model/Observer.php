<?php
class Meteorify_Observerexample_Model_Observer {

    public function example(Varien_Event_Observer $observer) {
        //$observer contains data passed from when the event was triggered.
        //You can use this data to manipulate the order data before it's saved.
        //Uncomment the line below to log what is contained here:
        //Mage::log($observer);
		$product=$observer->getProduct();
		$productid=$observer->getId();
		echo $productid;
		$product->setName($product->getName().' is awesome!!!');
        Mage::log('We just made an Observer again!');
		
    }

}
?>