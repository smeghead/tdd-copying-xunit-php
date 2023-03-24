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
    public function run(): void
    {
        $method = new \ReflectionMethod($this, $this->name);
        $method->invoke($this);
    }
}
