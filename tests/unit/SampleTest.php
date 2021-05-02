<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertTrue;

class SampleTest extends TestCase
{
    public function testTrueAssertsToTrue()
    {
        assertTrue(true);
    }
}
