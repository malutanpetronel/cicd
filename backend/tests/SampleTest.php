<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testAddition()
    {
        $result = 2 + 2;
        $this->assertEquals(4, $result);
    }
}
