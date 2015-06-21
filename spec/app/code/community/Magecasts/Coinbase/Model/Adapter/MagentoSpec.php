<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Magecasts_Coinbase_Model_Adapter_MagentoSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Magecasts_Coinbase_Model_Adapter_Magento');
    }
}
