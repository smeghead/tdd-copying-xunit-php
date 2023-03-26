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
}
