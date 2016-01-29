<?php

namespace Drips\DataStructures;

class DataCollection implements IDataCollection
{
    protected $collection = array();

    public function __construct($array = array()){
        $this->collection = $array;
    }

    public function get($key){
        if($this->has($key)){
            return $this->collection[$key];
        }
        return null;
    }

    public function set($key, $value){
        $this->collection[$key] = $value;
    }

    public function has($key){
        return array_key_exists($key, $this->collection);
    }

    public function getAll(){
        return $this->collection;
    }
}
