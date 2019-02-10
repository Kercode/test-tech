<?php

class Season {
  public function __construct($arrayStringScore) {
    $this->arrayStringScore = $arrayStringScore;
  }

  public function total() {
    $total = 0;

    foreach($this->arrayStringScore as $stringScore) {
      $score = new Score($stringScore);

      $total += $score->points();
    }

    return $total;
  }

  public function hasValidNumberOfMatches() {
    if (count($this->arrayStringScore) === 10) {
      return true;
    } else {
      return false;
    }
  }
}