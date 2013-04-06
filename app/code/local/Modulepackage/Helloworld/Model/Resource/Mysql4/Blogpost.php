<?php
class Modulepackage_Helloworld_Model_Resource_Mysql4_Blogpost extends
Mage_Core_Model_Mysql4_Abstract{
	protected  function _construct()
	{
		$this->_init('helloworld/blogpost', 'blogpost_id');
	}
}