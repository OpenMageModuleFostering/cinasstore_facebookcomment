<?php

class Cinasstore_Facebookcomment_Block_Adminhtml_Facebookcomment_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'facebookcomment';
        $this->_controller = 'adminhtml_facebookcomment';
        
        $this->_updateButton('save', 'label', Mage::helper('facebookcomment')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('facebookcomment')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('facebookcomment_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'facebookcomment_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'facebookcomment_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('facebookcomment_data') && Mage::registry('facebookcomment_data')->getId() ) {
            return Mage::helper('facebookcomment')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('facebookcomment_data')->getTitle()));
        } else {
            return Mage::helper('facebookcomment')->__('Add Item');
        }
    }
}