<?php
namespace phpunit\Tests\Doubles;

use PHPUnit\Framework\TestCase;
use phpunit\doubles\SomeClass;

class StubTest extends TestCase 
{
    public function testStub()
    {
        $stub = $this->createMock(SomeClass::class);

        $stub->method('doSomething')
            ->willReturn('foo');

        $this->assertEquals('foo', $stub->doSomething());
    }
}