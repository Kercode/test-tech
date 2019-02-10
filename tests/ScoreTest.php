<?php

require('./src/Score.php');

use PHPUnit\Framework\TestCase;

class ScoreTest extends TestCase {

  public function testWithValidScore() {
    $score = new Score('1:2');

    $this->assertEquals(true, $score->isValid());
  }

  public function testWithInvalidScore() {
    $tooHighScore = new Score('5:2');
    $negativeScore = new Score('2:-1');

    $this->assertEquals(false, $tooHighScore->isValid());
    $this->assertEquals(false, $negativeScore->isValid());
  }

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
}