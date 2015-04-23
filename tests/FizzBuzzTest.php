<?php

require_once __DIR__.'/../src/FizzBuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase {
	public function setUp()
	{
		$this->fizzbuzz = new FizzBuzz();
	}
	public function test1Return1()
	{
		$result = $this->fizzbuzz->getResult(1);
		$this->assertEquals(1, $result);
	}
	public function test3ReturnFizz()
	{
		$result = $this->fizzbuzz->getResult(3);
		$this->assertEquals('Fizz', $result);
	}
	public function test5ReturnBuzz()
	{
		$result = $this->fizzbuzz->getResult(5);
		$this->assertEquals('Buzz', $result);
	}
	public function test6ReturnFizz()
	{
		$result = $this->fizzbuzz->getResult(6);
		$this->assertEquals('Fizz', $result);
	}
	public function test9ReturnFizz()
	{
		$result = $this->fizzbuzz->getResult(9);
		$this->assertEquals('Fizz', $result);
	}
	public function test15ReturnFizzBuzz()
	{
		$result = $this->fizzbuzz->getResult(15);
		$this->assertEquals('FizzBuzz', $result);
	}
	public function test30ReturnFizzBuzz()
	{
		$result = $this->fizzbuzz->getResult(30);
		$this->assertEquals('FizzBuzz', $result);
	}

}