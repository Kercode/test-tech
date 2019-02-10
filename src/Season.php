<?php

class Season {
  public function __construct($arrayStringScore) {
    $this->arrayStringScore = $arrayStringScore;
  }

  public function hasValidNumberOfMatches() {
    if (count($this->arrayStringScore) === 10) {
      return true;
    } else {
      return false;
    }
  }
}