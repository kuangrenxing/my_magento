<?php
class Modulepackage_Myfirstmodule_BlogController extends Mage_Core_Controller_Front_Action {
	public function indexAction(){
		//echo "Hello Blog";
		$blogpost = Mage::getModel('myfirstmodule/blogpost');
		echo get_class($blogpost);
	}
}