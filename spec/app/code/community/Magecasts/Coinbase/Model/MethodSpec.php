<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Magecasts_Coinbase_Model_MethodSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Magecasts_Coinbase_Model_Method');
    }

    function it_should_extend_the_payment_abstract_class()
    {
        $this->shouldHaveType('Mage_Payment_Model_Method_Abstract');
    }

    function it_can_authorize_a_transaction()
    {
        $this->canAuthorize()->shouldReturn(true);
    }

    function it_should_not_be_able_to_capture_a_transaction()
    {
        $this->canCapture()->shouldReturn(false);
    }

    function it_can_be_used_during_checkout()
    {
        $this->canUseCheckout()->shouldReturn(true);
    }

    function it_should_authorise_a_payment_transaction(\Mage_Sales_Model_Order_Payment $payment)
    {
        $amount = 10.00;
        $this->authorize($payment, $amount)->shouldReturn($this);
    }

}
