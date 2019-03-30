<?php

namespace Tests;

use Registry;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class RegistryTest
 * @package Registry\Tests
 */
class RegistryTest
{
    /**
     * Test registry.
     */
    public function test()
    {
        $key = Registry::LOGGER;
        $logger = 'some object or else data';

        Registry::set($key, $logger);
        echo Registry::get($key);
    }
}

// run test
(new RegistryTest())->test();