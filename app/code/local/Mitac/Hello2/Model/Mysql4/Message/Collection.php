<?php
class Mitac_Hello2_Model_Mysql4_Message_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
	{
		public function _construct()
		{
		parent::_construct();
		$this->_init('mitachello/message');
		}
	}