<?php

class Cinasstore_Facebookcomment_Model_Mysql4_Facebookcomment_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('facebookcomment/facebookcomment');
    }
}