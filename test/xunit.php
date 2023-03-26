<?php
declare(strict_types=1);

use Smeghead\TddCopyingXunitPhp\TestCaseTest;

require_once(__DIR__ . '/../vendor/autoload.php');

(new TestCaseTest('testTemplateMethod'))->run();
(new TestCaseTest('testResult'))->run();
// (new TestCaseTest('testFailedResult'))->run();
