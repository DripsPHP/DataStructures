<?php

namespace Drips\DataStructures;

interface IDataCollection
{
    public function get($key);

    public function set($key, $value);

    public function has($key);

    public function getAll();
}
