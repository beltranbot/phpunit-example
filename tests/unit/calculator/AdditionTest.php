<?php

use App\Calculator\Addition;
use PHPUnit\Framework\TestCase;
use App\Calculator\Exceptions\NoOperandsException;

use function PHPUnit\Framework\assertEquals;

class AdditionTest extends TestCase
{
    /** @test */
    public function adds_up_given_operands()
    {
        $addition = new Addition;
        $addition->setOperands([5, 10]);
        assertEquals(15, $addition->calculate());
    }

    /** @test */
    public function no_operands_given_throws_exception_when_calculating()
    {
        $this->expectException(NoOperandsException::class);
        $addition = new Addition;
        $addition->calculate();
    }
}