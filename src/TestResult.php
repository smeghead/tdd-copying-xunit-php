<?php

declare(strict_types=1);

namespace Smeghead\TddCopyingXunitPhp;

class testResult
{
    private int $runCount;
    public function __construct()
    {
        $this->runCount = 0;
    }

    public function summary(): string
    {
        return sprintf('%d run, 0 failed', $this->runCount);
    }

    public function testStarted(): void
    {
        $this->runCount += 1;
    }
}
