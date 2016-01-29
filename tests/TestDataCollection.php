<?php

namespace tests;

require_once __DIR__.'/../vendor/autoload.php';

use PHPUnit_Framework_TestCase;
use Drips\DataStructures\DataCollection;

class TestDataCollection extends PHPUnit_Framework_TestCase
{
    public function testDC(){
        $key = "key";
        $value = "value";
        $result = array($key => $value);
        $collection = new DataCollection;
        $this->assertFalse($collection->has($key));
        $this->assertNull($collection->get($key));
        $collection->set($key, $value);
        $this->assertTrue($collection->has($key));
        $this->assertEquals($collection->getAll(), $result);
        $this->assertEquals($collection->get($key), $value);
    }
}
