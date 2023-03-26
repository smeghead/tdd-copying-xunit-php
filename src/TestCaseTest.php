<?php

declare(strict_types=1);

namespace Smeghead\TddCopyingXunitPhp;

use Smeghead\TddCopyingXunitPhp\TestCase;
use Smeghead\TddCopyingXunitPhp\WasRun;

class TestCaseTest extends TestCase
{
    private mixed $test;
    public function setUp(): void
    {
        $this->test = new WasRun('testMethod');
    }
    public function testRunning(): void
    {
        $this->test->run();
        var_dump($this->test->wasRun);
        assert($this->test->wasRun);
    }
    public function testSetUp(): void
    {
        $this->test = new WasRun('testMethod');
        $this->test->run();
        var_dump($this->test->wasSetUp);
        assert($this->test->wasSetUp);
    }
}
