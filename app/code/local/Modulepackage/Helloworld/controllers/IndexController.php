<?php
class Modulepackage_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	$params = $this->getRequest()->getParams();
//     	echo "Helloworld";
    	$blogpost = Mage::getModel('helloworld/blogpost');
    	echo get_class($blogpost);
    	//print_r($blogpost);
    	echo ("Loading the blogpost with and ID of ".$params['id']);
    	$blogpost->load($params['id']);
    	$data = $blogpost->getData();
    	// 		var_dump($data);
    	print_r($data);
    	 
    	echo $blogpost->getBlogpostId();
    	echo $blogpost['title'];
    }
}