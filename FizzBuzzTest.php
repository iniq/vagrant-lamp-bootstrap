<?php

include ('FizzBuzz.php');
class FizzBuzzTest extends PHPUnit_Framework_TestCase {

	/**
	 * @dataProvider valueForProvider
	 */
	public function testValueFor($value, $expected) {
		$FizzBuzz = new FizzBuzz();
		$this->assertEquals($expected, $FizzBuzz->valueFor($value));
	}

	public function valueForProvider() {
		return array(
			'test_1_returns_1' => array('value' => 1, 'expected' => 1),
			'test_2_returns_2' => array('value' => 2, 'expected' => 2),
			'test_3_returns_Fizz' => array('value' => 3, 'expected' => 'Fizz'),
			'test_6_returns_Fizz' => array('value' => 6, 'expected' => 'Fizz'),
			'test_21_returns_Fizz' => array('value' => 21, 'expected' => 'Fizz'),
			'test_5_returns_Buzz' => array('value' => 5, 'expected' => 'Buzz'),
			'test_10_returns_Buzz' => array('value' => 10, 'expected' => 'Buzz'),
			'test_20_returns_Buzz' => array('value' => 20, 'expected' => 'Buzz'),
			'test_15_returns_Buzz' => array('value' => 15, 'expected' => 'FizzBuzz'),
			);
	}


}
