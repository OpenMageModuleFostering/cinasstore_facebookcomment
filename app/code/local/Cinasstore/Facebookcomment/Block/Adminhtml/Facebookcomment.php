<?php
class Cinasstore_Facebookcomment_Block_Adminhtml_Facebookcomment extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_facebookcomment';
    $this->_blockGroup = 'facebookcomment';
    $this->_headerText = Mage::helper('facebookcomment')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('facebookcomment')->__('Add Item');
    parent::__construct();
  }
}