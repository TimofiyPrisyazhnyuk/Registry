<?php

namespace Registry\Tests;

use Registry\Registry;

require __DIR__ . '/../Registry.php';

class RegistryTest
{
    public function test()
    {
        $key = Registry::LOGGER;
        $logger = 'some object or else data';

        Registry::set($key, $logger);
        echo Registry::get($key);
    }
}

(new RegistryTest())->test();