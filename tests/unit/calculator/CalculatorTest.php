<?php

use App\Calculator\Calculator;
use App\Calculator\Addition;
use App\Calculator\Division;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /** @test */
    public function can_set_single_operation()
    {
        $addition = new Addition;
        $addition->setOperands([5, 10]);
        $calculator = new Calculator;
        $calculator->setOperation($addition);
        $this->assertCount(1, $calculator->getOperations());
    }

    /** @test */
    public function can_set_multiple_operations()
    {
        $addition1 = new Addition;
        $addition1->setOperands([5, 10]);
        $addition2 = new Addition;
        $addition2->setOperands([2, 2]);
        $calculator = new Calculator;
        $calculator->setOperations([$addition1, $addition2]);
        $this->assertCount(2 , $calculator->getOperations());
    }

    /** @test */
    public function operations_are_ignored_if_not_instance_of_operation_inteface()
    {
        $addition1 = new Addition;
        $addition1->setOperands([5, 10]);
        $calculator = new Calculator;
        $calculator->setOperations([$addition1, "cats", "dogs"]);
        $this->assertCount(1 , $calculator->getOperations());
    }

    /** @test */
    public function can_calculate_result()
    {
        $addition = new Addition;
        $addition->setOperands([5, 10]);
        $calculator = new Calculator;
        $calculator->setOperation($addition);
        $this->assertEquals(15, $calculator->calculate()[0]);

    }

    /** @test */
    public function calculate_method_returns_multiple_results()
    {
        $addition = new Addition;
        $addition->setOperands([5, 10]);
        $division = new Division;
        $division->setOperands([50, 2]);
        $calculator = new Calculator;
        $calculator->setOperations([$addition, $division]);
        $this->assertIsArray($calculator->calculate());
        $this->assertEquals(15, $calculator->calculate()[0]);
        $this->assertEquals(25, $calculator->calculate()[1]);
    }
}