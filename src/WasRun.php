<?php

declare(strict_types=1);

namespace Smeghead\TddCopyingXunitPhp;

class WasRun extends TestCase
{
    public bool $wasRun;
    public bool $wasSetUp;
    public string $name;

    public function __construct(string $name)
    {
        $this->wasRun = false;
        $this->wasSetUp = false;
        parent::__construct($name);
    }

    public function setUp(): void
    {
        $this->wasSetUp = true;
    }

    public function testMethod(): void
    {
        $this->wasRun = true;
    }
}
