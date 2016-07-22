# DataStructures

[![Build Status](https://travis-ci.org/Prowect/DataStructures.svg)](https://travis-ci.org/Prowect/DataStructures)
[![Code Climate](https://codeclimate.com/github/Prowect/DataStructures/badges/gpa.svg)](https://codeclimate.com/github/Prowect/DataStructures)
[![Test Coverage](https://codeclimate.com/github/Prowect/DataStructures/badges/coverage.svg)](https://codeclimate.com/github/Prowect/DataStructures/coverage)
[![Latest Release](https://img.shields.io/packagist/v/drips/DataStructures.svg)](https://packagist.org/packages/drips/datastructures)


Dieses Paket beinhaltet eine Klasse `DataCollection` zum Speichern von Daten. Hierbei stehen folgende Methoden zur Verfügung:

 - `get($key)` - liefert das Element mit dem entsprechenden `$key` zurück. Ist der `$key` nicht vorhanden, wird `null` zurückgegeben.
 - `set($key, $value)` - dient zum Einfügen eines Elements in die Collection. Hierbei wird der übergebene `$value` beim dazugehörigen `$key` hinterlegt.
 - `has($key)` - gibt `true` bzw. `false` zurück, je nachdem ob der Key in der der Collection existiert oder nicht.
 - `getAll()` - liefert die Collection als PHP-Array zurück.
 
Zusätzlich implementiert die `DataCollection` ein `ArrayAccess`, somit kann ähnlich wie bei einem Array darauf zugegriffen werden.

z.B.:

```php
<?php

use Drips\DataStructures\DataCollection;

$collection = new DataCollection;
$collection['test'] = 123;

echo $collection['test']; 
// Output: 123
```