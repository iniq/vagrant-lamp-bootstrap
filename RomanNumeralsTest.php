<?php

include ('RomanNumerals.php');
class RomanNumeralsTest extends PHPUnit_Framework_TestCase {

	/**
	 * //dataProvider myProvider
	 */
	public function test_1_should_be_i() {
		$RomanNumerals = new RomanNumerals();

		$this->assertEquals('I', $RomanNumerals->fromInt(1));
	}

	public function test_2_should_be_ii() {
		$RomanNumerals = new RomanNumerals();

		$this->assertEquals('II', $RomanNumerals->fromInt(2));
	}
	public function test_5_should_be_v() {
		$RomanNumerals = new RomanNumerals();

		$this->assertEquals('V', $RomanNumerals->fromInt(5));
	}

	public function test_4_should_be_iv() {
		$RomanNumerals = new RomanNumerals();

		$this->assertEquals('IV', $RomanNumerals->fromInt(4));
	}
	public function test_6_should_be_vi() {
		$RomanNumerals = new RomanNumerals();

		$this->assertEquals('VI', $RomanNumerals->fromInt(6));
	}
	public function test_8_should_be_viii() {
		$RomanNumerals = new RomanNumerals();

		$this->assertEquals('VIII', $RomanNumerals->fromInt(8));
	}
	public function test_10_should_be_x() {
		$RomanNumerals = new RomanNumerals();

		$this->assertEquals('X', $RomanNumerals->fromInt(10));
	}	
	public function test_9_should_be_ix() {
		$RomanNumerals = new RomanNumerals();

		$this->assertEquals('IX', $RomanNumerals->fromInt(9));
	}
	public function test_11_should_be_xi() {
		$RomanNumerals = new RomanNumerals();

		$this->assertEquals('XI', $RomanNumerals->fromInt(11));
	}
	public function test_14_should_be_xiv() {
		$RomanNumerals = new RomanNumerals();

		$this->assertEquals('XIV', $RomanNumerals->fromInt(14));
	}
	public function test_20_should_be_xx() {
		$RomanNumerals = new RomanNumerals();

		$this->assertEquals('XX', $RomanNumerals->fromInt(20));
	}
	public function test_29_should_be_xxix() {
		$RomanNumerals = new RomanNumerals();

		$this->assertEquals('XXIX', $RomanNumerals->fromInt(29));
	}
	public function test_50_should_be_l() {
		$RomanNumerals = new RomanNumerals();

		$this->assertEquals('L', $RomanNumerals->fromInt(50));
	}
	// public function test_40_should_be_xl() {
	// 	$RomanNumerals = new RomanNumerals();

	// 	$this->assertEquals('XL', $RomanNumerals->fromInt(40));
	// }
	// public function test_49_should_be_xlix() {
	// 	$RomanNumerals = new RomanNumerals();

	// 	$this->assertEquals('XLIX', $RomanNumerals->fromInt(49));
	// }
}
