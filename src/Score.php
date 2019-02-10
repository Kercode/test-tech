<?php

class Score {
  public function __construct($stringScore) {
    $scores = explode(':', $stringScore);

    $this->hero = $scores[0];
    $this->opponent = $scores[1];
  }

  public function points() {
    if(!$this->isValid()) {
      throw new Exception("Invalid score");
    }

    if ($this->hero > $this->opponent) {
      return 3;
    } elseif ($this->hero === $this->opponent) {
      return 1;
    } else {
      return 0;
    }
  }

  private function isValid() {
    return
      $this->hero >= 0 &&
      $this->hero <= 4 &&
      $this->opponent >= 0 &&
      $this->opponent <= 4;
  }
}