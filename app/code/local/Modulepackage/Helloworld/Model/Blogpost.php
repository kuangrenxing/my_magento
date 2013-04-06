<?php
class Modulepackage_Helloworld_Model_Blogpost extends Mage_Core_Model_Abstract
{
	public function _construct()
	{
		$this->_init('helloworld/blogpost');
	}
}