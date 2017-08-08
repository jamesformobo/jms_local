<?php
Class Mitac_Hello2_Block_Message extends Mage_Core_Block_Template
{
	public function getPostActionUrl()
	{
		return Mage::getUrl('michello/message/post');
	}

	public function getMessages()
	{
		$messages = Mage::getModel('mitachello/message')->getCollection()->addFieldToFilter('status', array('eq' => 1));
		return $messages;
	}	
}