<?php
class Cinasstore_Facebookcomment_IndexController extends Mage_Core_Controller_Front_Action
{

    public function getCssAction()
    {	
		$helper = Mage::helper('facebookcomment');
		if($helper->isHiddenComment())
			$css .= 'div.comment_body, div.comment_body div {display:none;}';
		elseif($helper->isCustomComment())
			$css .= $helper->getCommentCssStyle();
			
		if($helper->isHiddenLike())
			$css .= 'div.like, div.like div {display:none;}';
		elseif($helper->isCustomLike())
			$css .= $helper->getLikeCssStyle();
		
		echo $css;
		return;
    }
	
	public function testAction(){
		echo Mage::getStoreConfig('facebookcomment/general/custom_style');
		return;
	}	
}