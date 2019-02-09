<?php

require('./src/Score.php');

use PHPUnit\Framework\TestCase;

class ScoreTest extends TestCase {
  public function testWithValidScore() {
    $score = new Score('1:2');

    $this->assertEquals(true, $score->isValid());
  }
}