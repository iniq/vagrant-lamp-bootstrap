<?php

include ('TriviaScorer.php');
class TriviaScorerTest extends PHPUnit_Framework_TestCase {

	/**
	 * @dataProvider stringScorerProvider
	 */
	public function testStringScorer($scoreString, $expectedScore) {
		$TriviaScorer = new TriviaScorer();

		$this->assertSame($expectedScore, $TriviaScorer->sumScore($scoreString));
	}

	public function stringScorerProvider() {
		return array(
			'test_empty_string_should_be_0' => array('', 0),
			'test_Y_string_should_be_1' => array('Y', 1),
			'test_X_string_should_be_0' => array('X', 0),
			'test_XY_string_should_be_1' => array('X,Y', 1),
			'test_XYXX_string_should_be_1' => array('X,Y,X,X', 1),
			'test_YXYY_string_should_be_3' => array('Y,X,Y,Y', 3),
			'test_5,10_string_should_be_15' => array('5,10', 15),
			'test_Y,X,5_string_should_be_6' => array('Y,X,5', 6),
			'test_Y1XY5Y7.5_string_should_be_16.5' => array('Y,1,X,Y,5,Y,7.5', 16.5),
			'test_percent_format_should_return_percentages' => array('^40^5,Y,7,12,Y,N,3', 72),
			'test_percent_format_where_score_is_single_digits' => array('^8^,Y,1,2,X', 50),
			'test_percent_format_where_score_is_triple_digits' => array('^100^,Y,1,2,X', 4),
			);
	}
}
