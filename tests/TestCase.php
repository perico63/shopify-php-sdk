<?php

namespace Shopify;

class TestCase extends \PHPUnit_Framework_TestCase
{
    private $client;

    public function setUp()
    {
        Shopify::init(['test' => TRUE]);
    }

    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }
}