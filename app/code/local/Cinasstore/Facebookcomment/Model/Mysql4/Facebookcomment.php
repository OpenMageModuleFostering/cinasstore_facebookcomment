<?php

class Cinasstore_Facebookcomment_Model_Mysql4_Facebookcomment extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the facebookcomment_id refers to the key field in your database table.
        $this->_init('facebookcomment/facebookcomment', 'facebookcomment_id');
    }
}