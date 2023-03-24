<?php
declare(strict_types=1);

use Smeghead\TddCopyingXunitPhp\Test\TestCaseTest;

require_once(__DIR__ . '/../vendor/autoload.php');

$test = new TestCaseTest('testRunning');
$test->run();