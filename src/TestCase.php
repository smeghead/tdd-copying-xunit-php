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
    public function run(TestResult $result): void
    {
        $result->testStarted();
        $this->setUp();
        try {
            $method = new \ReflectionMethod($this, $this->name);
            $method->invoke($this);
        } catch (\Exception $e) {
            $result->testFailed();
        }
        $this->tearDown();
    }
    public function tearDown(): void
    {
    }
}
