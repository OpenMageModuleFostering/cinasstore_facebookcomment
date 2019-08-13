<?php

class Cinasstore_Facebookcomment_Block_Adminhtml_Facebookcomment_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('facebookcomment_form', array('legend'=>Mage::helper('facebookcomment')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('facebookcomment')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('facebookcomment')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('facebookcomment')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('facebookcomment')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('facebookcomment')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('facebookcomment')->__('Content'),
          'title'     => Mage::helper('facebookcomment')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getFacebookcommentData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getFacebookcommentData());
          Mage::getSingleton('adminhtml/session')->setFacebookcommentData(null);
      } elseif ( Mage::registry('facebookcomment_data') ) {
          $form->setValues(Mage::registry('facebookcomment_data')->getData());
      }
      return parent::_prepareForm();
  }
}