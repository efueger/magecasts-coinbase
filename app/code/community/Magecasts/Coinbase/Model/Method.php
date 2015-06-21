<?php

class Magecasts_Coinbase_Model_Method extends Mage_Payment_Model_Method_Abstract
{
    protected $_canAuthorize = true;
    private $_mageAdapter;

    public function __construct(array $services = array())
    {
        //Initialize the adapter for Magento
        if(isset($services['mage_adapter'])) {
            $this->_mageAdapter = $services['mage_adapter'];
        } else {
            $this->_mageAdapter = new Magecasts_Coinbase_Model_Adapter_Magento();
        }
    }

    public function authorize(Varien_Object $payment, $amount)
    {
        $api_key = $this->_mageAdapter->getConfigValue('payment/magecasts_coinbase/api_key');
        if(!isset($api_key)) {
            $this->_mageAdapter->throwException('There was a problem contacting Coinbase.');
        }
        return $this;
    }
}
