<?php

namespace Drips\DataStructures;

/**
 * Class DataCollection
 *
 * Ermöglicht es ein Array als Objekt abzubilden um Daten in ein Objekt (ähnlich wie ein Array) zu speichern. Der große
 * Vorteil bzw. Unterschied besteht darin, dass die Zugriffe auf die einzelnen Elemente - im Gegensatz zu einem Array -
 * kontrolliert und koordiniert werden können.
 *
 * @package Drips\DataStructures
 */
class DataCollection implements IDataCollection
{
    /**
     * Beinhaltet die Daten der Collection
     *
     * @var array
     */
    protected $collection = array();

    /**
     * Erzeugt eine neue Instanz der DataCollection und gibt eine Anfangsinitialization (als Array) mit.
     *
     * @param array $array
     */
    public function __construct($array = array())
    {
        $this->collection = $array;
    }

    /**
     * Liefert den zugehörigen Wert aus der Collection zurück, oder null, wenn der Key in der Collection nicht existiert
     *
     * @param $key
     *
     * @return mixed|null
     */
    public function get($key)
    {
        if ($this->has($key)) {
            return $this->collection[$key];
        }
        return null;
    }

    /**
     * Fügt einen neuen Wert in die Collection ein oder überschreibt diesen.
     *
     * @param $key
     * @param $value
     */
    public function set($key, $value)
    {
        $this->collection[$key] = $value;
    }

    /**
     * Prüft ob ein Element in der Collection existiert.
     *
     * @param $key
     *
     * @return bool
     */
    public function has($key)
    {
        return array_key_exists($key, $this->collection);
    }

    /**
     * Liefert die Collection als Array zurück
     *
     * @return array
     */
    public function getAll()
    {
        return $this->collection;
    }

    /**
     * Entfernt ein Element aus der Collection.
     *
     * @param $key
     *
     * @return bool
     */
    public function delete($key)
    {
        if ($this->has($key)) {
            unset($this->collection[$key]);
            return true;
        }
        return false;
    }

    // ===[ ArrayAccess ]===

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->collection[] = $value;
        } else {
            $this->collection[$offset] = $value;
        }
    }

    public function offsetExists($offset)
    {
        return isset($this->collection[$offset]);
    }

    public function offsetUnset($offset)
    {
        unset($this->collection[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->collection[$offset]) ? $this->collection[$offset] : null;
    }
}
