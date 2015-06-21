<?php

class Magecasts_Coinbase_Model_Adapter_Magento 
{
    public function getConfigValue($path = null)
    {
        return Mage::getStoreConfig($path);
    }

    public function throwException($message = null)
    {
        Mage::throwException($message);
    }

}
