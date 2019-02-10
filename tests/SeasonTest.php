<?php

require('./src/Season.php');

use PHPUnit\Framework\TestCase;

class SeasonTest extends TestCase {
  public function testWithValidNumberOfMatches() {
    $matches = array_fill(0, 10, '0:0');
    $season = new Season($matches);

    $this->assertEquals(true, $season->hasValidNumberOfMatches($matches));
  }

  public function testWithInvalidNumberOfMatches() {
    $matches = ['0:0'];
    $season = new Season($matches);

    $this->assertEquals(false, $season->hasValidNumberOfMatches($matches));
  }

  public function testWinAllTotal() {
    $matches = array_fill(0, 10, '1:0');
    $season = new Season($matches);

    $this->assertEquals(30, $season->total($matches));
  }

  public function testDrawAllTotal() {
    $matches = array_fill(0, 10, '1:1');
    $season = new Season($matches);

    $this->assertEquals(10, $season->total($matches));
  }

  public function testLooseAllTotal() {
    $matches = array_fill(0, 10, '0:1');
    $season = new Season($matches);

    $this->assertEquals(0, $season->total($matches));
  }
}