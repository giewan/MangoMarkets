<?php
/**
 * Tests for MangoMarkets
 */

use PHPUnit\Framework\TestCase;
use Mangomarkets\Mangomarkets;

class MangomarketsTest extends TestCase {
    private Mangomarkets $instance;

    protected function setUp(): void {
        $this->instance = new Mangomarkets(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Mangomarkets::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
