<?php

class Season {
  public function __construct($id, $period, $arrayStringScores) {
    $this->id = $id;
    $this->period = $period;
    $this->arrayStringScores = $arrayStringScores;
  }

  public function total() {
    if(!$this->hasValidNumberOfMatches()) {
      throw new Exception("Invalid number of scores");
    }

    $total = 0;

    foreach($this->arrayStringScores as $stringScore) {
      $score = new Score($stringScore);

      $total += $score->points();
    }

    return $total;
  }

  private function hasValidNumberOfMatches() {
    if (count($this->arrayStringScores) === 10) {
      return true;
    } else {
      return false;
    }
  }
}