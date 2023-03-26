<?php
declare(strict_types=1);

use Smeghead\TddCopyingXunitPhp\TestCaseTest;

require_once(__DIR__ . '/../vendor/autoload.php');

echo (new TestCaseTest('testTemplateMethod'))->run()->summary() . "\n";
echo (new TestCaseTest('testResult'))->run()->summary() . "\n";
echo (new TestCaseTest('testFailedResult'))->run()->summary() . "\n";
echo (new TestCaseTest('testFailedResultFormatting'))->run()->summary() . "\n";
