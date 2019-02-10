<?php

require('./src/Score.php');

use PHPUnit\Framework\TestCase;

class ScoreTest extends TestCase {
  public function testHeroWinPoints() {
    $score = new Score('4:2');

    $this->assertEquals(3, $score->points());
  }

  public function testDrawPoints() {
    $score = new Score('1:1');

    $this->assertEquals(1, $score->points());
  }

  public function testHeroLoosePoints() {
    $score = new Score('0:1');

    $this->assertEquals(0, $score->points());
  }

  /**
   * @expectedException Exception
   */
  public function testPointsWithInvalidScore() {
    $tooHighScore = new Score('5:2');
    $negativeScore = new Score('2:-1');

    $this->expectException($tooHighScore->points());
    $this->expectException($negativeScore->points());
  }
}