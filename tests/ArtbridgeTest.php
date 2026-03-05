<?php
/**
 * Tests for ArtBridge
 */

use PHPUnit\Framework\TestCase;
use Artbridge\Artbridge;

class ArtbridgeTest extends TestCase {
    private Artbridge $instance;

    protected function setUp(): void {
        $this->instance = new Artbridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Artbridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
