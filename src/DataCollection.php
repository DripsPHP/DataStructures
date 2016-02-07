<?php

namespace Drips\DataStructures;

class DataCollection implements IDataCollection
{
    protected $collection = array();

    public function __construct($array = array()) {
        $this->collection = $array;
    }

    public function get($key) {
        if ($this->has($key)) {
            return $this->collection[$key];
        }
        return null;
    }

    public function set($key, $value) {
        $this->collection[$key] = $value;
    }

    public function has($key) {
        return array_key_exists($key, $this->collection);
    }

    public function getAll() {
        return $this->collection;
    }

    public function delete($key) {
        if($this->has($key)){
            unset($this->collection[$key]);
            return true;
        }
        return false;
    }

    //ArrayAccess
    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->collection[] = $value;
        } else {
            $this->collection[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->collection[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->collection[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->collection[$offset]) ? $this->collection[$offset] : null;
    }
}
