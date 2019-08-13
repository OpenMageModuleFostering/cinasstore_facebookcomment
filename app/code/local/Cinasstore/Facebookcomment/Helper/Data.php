<?php

class Cinasstore_Facebookcomment_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function isHiddenLike(){
		return Mage::getStoreConfig('facebookcomment/general/hidden_like');
	}
	
	public function isHiddenComment(){
		return Mage::getStoreConfig('facebookcomment/general/hidden_comment');
	}
	
	public function isCustomLike(){
		return Mage::getStoreConfig('facebookcomment/like/custom');
	}
	
	public function isCustomComment(){
		return Mage::getStoreConfig('facebookcomment/comment/custom');
	}
	
	public function getLikeCssStyle(){
		return Mage::getStoreConfig('facebookcomment/like/css_style');
	}
	
	public function getCommentCssStyle(){
		return Mage::getStoreConfig('facebookcomment/comment/css_style');
	}
}