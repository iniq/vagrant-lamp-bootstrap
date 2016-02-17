<?php

class TriviaScorer {

	public function sumScore($scoredAnswers) {

		if($this->wantsPercent($scoredAnswers)) {
			$totalScore = substr($scoredAnswers, 1, 2);
			$answers = substr($scoredAnswers, 4);

			$score = $this->sumScore($answers);

			return (int) floor($score / $totalScore * 100);
		}

		$score = 0;
		$answers = explode(',', $scoredAnswers);

		foreach ($answers as $currentAnswer) {
			$score += $this->answerValue($currentAnswer);
		}

		return $score;
	}

	function answerValue($answer) {
		if ($answer == 'Y') {
			return 1;
		} elseif (is_numeric($answer)) {
			return $answer;
		}

		return 0;
	}

	function wantsPercent($answerString) {
		if (empty($answerString)) {
			return false;
		}
		return ($answerString[0] == '^');
	}
}
