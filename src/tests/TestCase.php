<?php

use Laravel\Lumen\Testing\TestCase as LumenTestCase;

abstract class TestCase extends LumenTestCase
{
    public function createApplication()
    {
        return require __DIR__ . '/../bootstrap/app.php';
    }
}
