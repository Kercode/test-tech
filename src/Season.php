<?php

class Season {
  static public function getJSONSeason($id, $JSONSeasons) {
    foreach($JSONSeasons as $JSONSeason) {
      if($JSONSeason->id === $id) {
        return $JSONSeason;
      }
    }
  }

  public function __construct($arrayStringScore) {
    $this->arrayStringScore = $arrayStringScore;
  }

  public function total() {
    if(!$this->hasValidNumberOfMatches()) {
      throw new Exception("Invalid number of scores");
    }

    $total = 0;

    foreach($this->arrayStringScore as $stringScore) {
      $score = new Score($stringScore);

      $total += $score->points();
    }

    return $total;
  }

  private function hasValidNumberOfMatches() {
    if (count($this->arrayStringScore) === 10) {
      return true;
    } else {
      return false;
    }
  }
}