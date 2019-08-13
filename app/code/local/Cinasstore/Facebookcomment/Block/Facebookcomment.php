<?php

class Cinasstore_Facebookcomment_Block_Facebookcomment extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
    public function getUniqueId(){
		return Mage::getStoreConfig('facebookcomment/general/unique_id_of_site');
	}
	
	public function numberOfCommment(){
 		return Mage::getStoreConfig('facebookcomment/general/show_number_of_comment');
	}
	
	public function widthOfCommmentBox(){
 		return Mage::getStoreConfig('facebookcomment/general/width_of_comment_box');
	}
	
	
	
	public function getProductId(){
		$productId = $this->getRequest()->getParam('id');
		
		return Mage::getModel('catalog/product')->load($productId)->getId();
	}
	
	public function getProductPageUrl()
	{
	  return Mage::helper('core/url')->getCurrentUrl();
	}
	
	public function getLanguage(){
		return Mage::getStoreConfig('facebookcomment/general/language');
	}
	
	
	
	public function getTemplate(){
		return parent::getTemplate();
	}	
}