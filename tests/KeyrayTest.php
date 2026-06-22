<?php
/**
 * Tests for KeyRay
 */

use PHPUnit\Framework\TestCase;
use Keyray\Keyray;

class KeyrayTest extends TestCase {
    private Keyray $instance;

    protected function setUp(): void {
        $this->instance = new Keyray(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Keyray::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
