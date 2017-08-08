<?php
Class Mitac_Hello2_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		//echo "Hello!! World!!";
		$this->loadLayout(); //載入 Layout
		$this->renderLayout(); //輸出 Layout
	}
}