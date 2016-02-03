<?php

namespace Drips\DataStructures;

use ArrayAccess;

interface IDataCollection extends ArrayAccess
{
    public function get($key);

    public function set($key, $value);

    public function has($key);

    public function getAll();
}
