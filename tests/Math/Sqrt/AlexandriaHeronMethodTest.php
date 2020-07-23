<?php
namespace Math\Sqrt;

use PHPUnit\Framework\TestCase;
use Math\Sqrt\AlexandriaHeronMethod;

final class AlexandriaHeronMethodTest extends TestCase {
  public function testSqrt() {

    $this->assertEquals("2.000", sprintf("%0.3f", AlexandriaHeronMethod::squareRoot(4)));
    $this->assertEquals("4.000", sprintf("%.3f", AlexandriaHeronMethod::squareRoot(16)));
    $this->assertEquals("3.162", sprintf("%.3f", AlexandriaHeronMethod::squareRoot(10)));
  }
}
