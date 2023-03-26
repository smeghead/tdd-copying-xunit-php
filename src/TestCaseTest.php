<?php

declare(strict_types=1);

namespace Smeghead\TddCopyingXunitPhp;

use Smeghead\TddCopyingXunitPhp\TestCase;
use Smeghead\TddCopyingXunitPhp\WasRun;

class TestCaseTest extends TestCase
{
    public function testTemplateMethod(): void
    {
        $test = new WasRun('testMethod');
        $test->run();
        var_dump($test->log);
        assert($test->log === 'setUp testMethod tearDown ');
    }
    public function testResult(): void {
        $test = new WasRun('testMethod');
        $result = $test->run();
        var_dump($result->summary());
        assert('1 run, 0 failed' === $result->summary());
    }
    public function testFailedResult(): void {
        $test = new WasRun('testBrokenMethod');
        $result = $test->run();
        // var_dump($result->summary());
        assert('1 run, 1 failed' === $result->summary());
    }
}
