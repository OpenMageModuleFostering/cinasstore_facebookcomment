<?php

class Cinasstore_Facebookcomment_Model_Facebookcomment extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('facebookcomment/facebookcomment');
    }
}