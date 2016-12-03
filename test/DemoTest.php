<?php
class DemoTest extends PHPUnit_Framework_TestCase {
  public function testPass() {
      $this->assertTrue(true);
    }
  public function testFail() {
      $this->assertFalse(false);
    }
}
?>