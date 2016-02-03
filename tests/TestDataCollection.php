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
        $this->assertFalse(isset($collection["töst"]));
        $collection["töst"] = "EINZ";
        $this->assertTrue(isset($collection["töst"]));
        $this->assertEquals($collection["töst"], "EINZ");
    }
    
    public function testArrayAccess() {
        $collection = new DataCollection;
        $collection[] = "nulltes";
        $this->assertEquals(count($collection), 1);
        $this->assertFalse(isset($collection["töst"]));
        $collection["töst"] = "EINZ";
        $this->assertTrue(isset($collection["töst"]));
        $this->assertEquals($collection["töst"], "EINZ");
        unset($collection["töst"]);
        $this->assertFalse(isset($collection["töst"]));
    }
}
