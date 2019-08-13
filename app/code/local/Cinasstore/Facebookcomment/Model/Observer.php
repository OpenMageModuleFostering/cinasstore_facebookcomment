<?php

class Cinasstore_Facebookcomment_Model_Observer {

	public function saveFacebookcommentConfig($observer)
	{
		$facebookcomment = Mage::getModel('facebookcomment/facebookcomment');
		$facebookcomment->setEditTime(now());
		try{
			$facebookcomment->save();
		}catch(Exception $e){
			Mage::getSingleton('core/session')->addError($e);
		}
	}
	
	public function controller_action_predispatch_adminhtml($observer)
	{
		$controller = $observer->getControllerAction();
		if($controller->getRequest()->getControllerName() != 'system_config'
			|| $controller->getRequest()->getActionName() != 'edit')
			return;
		$section = $controller->getRequest()->getParam('section');
		if($section != 'facebookcomment')
			return;
	}			
}