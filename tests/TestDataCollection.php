<?php

namespace tests;


require_once __DIR__.'/../src/idatacollection.php';
require_once __DIR__.'/../src/datacollection.php';

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
        $collection->set($key, $value);
        $this->assertTrue($collection->has($key));
        $this->assertEquals($collection->getAll(), $result);
        $this->assertEquals($collection->get($key), $value);
    }
}
