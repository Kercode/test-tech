<?php

require('./src/Season.php');

use PHPUnit\Framework\TestCase;

class SeasonTest extends TestCase {
  public function testWithValidNumberOfMatches() {
    $matches = [
      '0:0', '0:0', '0:0', '0:0', '0:0',
      '0:0', '0:0', '0:0', '0:0', '0:0'
    ];
    $season = new Season($matches);

    $this->assertEquals(true, $season->hasValidNumberOfMatches($matches));
  }

  public function testWithInvalidNumberOfMatches() {
    $matches = ['0:0'];
    $season = new Season($matches);

    $this->assertEquals(false, $season->hasValidNumberOfMatches($matches));
  }
}