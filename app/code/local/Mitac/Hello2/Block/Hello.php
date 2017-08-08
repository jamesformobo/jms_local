<?php
Class Mitac_Hello2_Block_Hello extends Mage_Core_Block_Template
{
	public function sayHello()
	{
		echo 'Hello from Block function';
	}

	public function saySomething( $str = '')
	{
		echo $str;
	}
}