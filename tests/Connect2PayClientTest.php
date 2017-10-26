<?php

use PHPUnit\Framework\TestCase;
use PayXpert\Connect2Pay\Connect2PayClient;

/**
 * @covers Connect2PayClient
 */
final class Connect2PayClientTest extends TestCase
{
    protected $connect2pay;
    protected $originator;
    protected $password;
    protected $c2pClient;

    public function setUp()
    {           
        $this->connect2pay = "http://localhost:43901";
        $this->originator = "102019";
        $this->password = "525c563011420f4d7a230ea1fc2fbe024031febb34da9f1508d564c5c72e0284";
        $this->c2pClient = new Connect2PayClient($this->connect2pay, $this->originator, $this->password);
    }

    public function testConfiguration()
    {
        $this->assertEquals($this->c2pClient->getMerchant(),$this->originator);
        $this->assertEquals($this->c2pClient->getPassword(),$this->password);
        $this->assertEquals($this->c2pClient->getUrl(),$this->connect2pay);
    }

    public function testValidateNoRequiredParameter()
    {
        $this->assertFalse($this->c2pClient->validate());
    }

    public function testValidateParameterRequired()
    {
        $this->c2pClient->setOrderID(date("Y-m-d-H.i.s"));
        $this->c2pClient->setCurrency("EUR");
        $this->c2pClient->setAmount(1216);
        $this->c2pClient->setShippingType(Connect2PayClient::_SHIPPING_TYPE_VIRTUAL);
        $this->c2pClient->setPaymentMode(Connect2PayClient::_PAYMENT_MODE_SINGLE);

        $this->assertTrue($this->c2pClient->validate());
    }

    public function testValidateParameterSize()
    {
        $this->orderDetails();
        $this->c2pClient->setCurrency("EURO");
        
        $this->assertFalse($this->c2pClient->validate());
        $this->assertEquals("currency Length 3 * ", $this->c2pClient->getClientErrorMessage());
    }

    /*
     * TODO
     *
     */

    // public function testPreparePayment()
    // {
    //     $this->orderDetails();
    // }

    private function orderDetails()
    {
        $this->c2pClient->setOrderID(date("Y-m-d-H.i.s"));
        $this->c2pClient->setCurrency("EUR");
        $this->c2pClient->setAmount(1216);
        $this->c2pClient->setShippingType(Connect2PayClient::_SHIPPING_TYPE_VIRTUAL);
        $this->c2pClient->setPaymentMode(Connect2PayClient::_PAYMENT_MODE_SINGLE);
    }

}
