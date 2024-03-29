<?php

class Cinasstore_Facebookcomment_Block_Adminhtml_Facebookcomment_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('facebookcomment_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('facebookcomment')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('facebookcomment')->__('Item Information'),
          'title'     => Mage::helper('facebookcomment')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('facebookcomment/adminhtml_facebookcomment_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}