<?php
class Mitac_Hello2_Model_Cron
	{
		public function hideMessage()
		{
			$messages = Mage::getModel('mitachello/message')->getCollection()
			->addFieldToFilter('status', array('eq' => 1))
			->addFieldToFilter('created_time', array('lt' => date("Y-m-d H:i:s", strtotime('-5 min'))));
			if(count($messages)>0)
			{
				foreach($messages as $message)
				{
					$message->setStatus(0);
					$message->save();
				}
			}
		}