<?php

class FizzBuzz {

	function valueFor($value) {

		if (($value % 3 == 0) || ($value % 5 == 0)) {
			$specialWord = '';

			if ($value % 3 == 0) {
				$specialWord .= 'Fizz';
			}

			if ($value % 5 == 0) {
				$specialWord .= 'Buzz';
			}

			return $specialWord;

		}

		return $value;
	}
}
