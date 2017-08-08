<?php
Class Mitac_Hello2_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function getMessageUrl()
	{
		return Mage::getUrl('michello/message/index');
	}
}