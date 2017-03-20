<?php
	
	require_once('../app/Mage.php');
	Mage::app();
  $file = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA);
  $filename = 'cse-online-voting-system-report.pdf';
  header('Content-type: application/pdf');
  header('Content-Disposition: inline; filename="' . $filename . '"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  @readfile($file);

?>