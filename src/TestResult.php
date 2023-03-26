<?php

declare(strict_types=1);

namespace Smeghead\TddCopyingXunitPhp;

class TestResult
{
    private int $runCount;
    private int $errorCount;
    public function __construct()
    {
        $this->runCount = 0;
        $this->errorCount = 0;
    }

    public function summary(): string
    {
        return sprintf('%d run, %d failed', $this->runCount, $this->errorCount);
    }

    public function testStarted(): void
    {
        $this->runCount += 1;
    }

    public function testFailed(): void
    {
        $this->errorCount += 1;
    }
}
