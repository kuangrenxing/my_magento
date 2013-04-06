<?php
class Modulepackage_Myfirstmodule_Model_Resource_Mysql4_Blogpost extends
Mage_Core_Model_Mysql4_Abstract{
	protected  function _construct()
	{
		$this->_init('myfirstmodule/blogpost', 'blogpost_id');
	}
}