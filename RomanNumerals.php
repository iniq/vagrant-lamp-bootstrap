<?php

class RomanNumerals {

	public function fromInt($integer) {
		$romanString = '';

		$numerals = array(
			50 => 'L',
			10 => 'X',
			5 => 'V',
			1 => 'I',
			);

		if (isset($numerals[$integer])) {
			return $numerals[$integer];
		}

		$previousBase = 50;

		foreach ($numerals as $currentBase => $symbol) {

			if ($integer >= $currentBase) {
				$integer = ($integer - $currentBase);
				return $symbol . $this->fromInt($integer);
			}

			if ($integer >= ($currentBase - $previousBase) && $integer < $currentBase) {
				$integer = ($integer - $currentBase);
				return $this->fromInt($currentBase) . $numerals[$previousBase];
			}

			$previousBase = $currentBase;
		}

		return $romanString;
	}

}
