<?php

require('./src/Season.php');

use PHPUnit\Framework\TestCase;

class SeasonTest extends TestCase {
  public function testWinAllTotal() {
    $matches = array_fill(0, 10, '1:0');
    $season = new Season($matches);

    $this->assertEquals(30, $season->total());
  }

  public function testDrawAllTotal() {
    $matches = array_fill(0, 10, '1:1');
    $season = new Season($matches);

    $this->assertEquals(10, $season->total());
  }

  public function testLooseAllTotal() {
    $matches = array_fill(0, 10, '0:1');
    $season = new Season($matches);

    $this->assertEquals(0, $season->total());
  }

  /**
   * @expectedException Exception
   */
  public function testTotalException() {
    $matches = array_fill(0, 11, '12:1');
    $season = new Season($matches);

    $this->expectException($season->total());
  }
}