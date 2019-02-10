<?php

class Score {
  public function __construct($stringScore) {
    $this->stringScore = $stringScore;
  }

  public function isValid() {
    $scores = explode(':', $this->stringScore);
    $hero = intval($scores[0]);
    $opponent = intval($scores[1]);

    return
      $hero >= 0 &&
      $hero <= 4 &&
      $opponent >= 0 &&
      $opponent <= 4;
  }
}