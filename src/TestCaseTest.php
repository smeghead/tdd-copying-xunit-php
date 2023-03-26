<?php

declare(strict_types=1);

namespace Smeghead\TddCopyingXunitPhp;

use Smeghead\TddCopyingXunitPhp\TestCase;
use Smeghead\TddCopyingXunitPhp\WasRun;

class TestCaseTest extends TestCase
{
    private TestResult $result;

    public function setUp(): void {
        $this->result = new TestResult();
    }
    public function testTemplateMethod(): void
    {
        $test = new WasRun('testMethod');
        $test->run($this->result);
        assert($test->log === 'setUp testMethod tearDown ');
    }
    public function testResult(): void
    {
        $test = new WasRun('testMethod');
        $test->run($this->result);
        assert('1 run, 0 failed' === $this->result->summary());
    }
    public function testFailedResult(): void
    {
        $test = new WasRun('testBrokenMethod');
        $test->run($this->result);
        assert('1 run, 1 failed' === $this->result->summary());
    }
    public function testFailedResultFormatting(): void
    {
        $this->result->testStarted();
        $this->result->testFailed();
        assert('1 run, 1 failed' === $this->result->summary());
    }
    public function testSuite(): void
    {
        $suite = new TestSuite();
        $suite->add(new WasRun('testMethod'));
        $suite->add(new WasRun('testBrokenMethod'));
        $suite->run($this->result);
        assert('2 run, 1 failed' === $this->result->summary());
    }
}
