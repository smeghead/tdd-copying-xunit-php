<?php
declare(strict_types=1);

namespace Smeghead\TddCopyingXunitPhp\Test;

use Smeghead\TddCopyingXunitPhp\TestCase;
use Smeghead\TddCopyingXunitPhp\WasRun;

class TestCaseTest extends TestCase {
    public function testRunning(): void {
        $test = new WasRun('testMethod');
        var_dump($test->wasRun);
        assert(! $test->wasRun);

        $test->run();
        var_dump($test->wasRun);
        assert($test->wasRun);
    }
}