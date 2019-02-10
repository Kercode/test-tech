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
}