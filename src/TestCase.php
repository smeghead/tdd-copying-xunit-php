<?php

declare(strict_types=1);

namespace Smeghead\TddCopyingXunitPhp;

class TestCase
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function setUp(): void
    {
    }
    public function run(): TestResult
    {
        $result = new TestResult();
        $result->testStarted();
        $this->setUp();
        var_dump($this);
        $method = new \ReflectionMethod($this, $this->name);
        $method->invoke($this);
        $this->tearDown();
        return $result;
    }
    public function tearDown(): void
    {
    }
}
