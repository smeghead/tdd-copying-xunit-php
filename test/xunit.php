<?php
declare(strict_types=1);

use Smeghead\TddCopyingXunitPhp\TestCaseTest;
use Smeghead\TddCopyingXunitPhp\TestResult;
use Smeghead\TddCopyingXunitPhp\TestSuite;

require_once(__DIR__ . '/../vendor/autoload.php');

$suite = new TestSuite();
$suite->add(new TestCaseTest('testTemplateMethod'));
$suite->add(new TestCaseTest('testResult'));
$suite->add(new TestCaseTest('testFailedResult'));
$suite->add(new TestCaseTest('testFailedResultFormatting'));
$suite->add(new TestCaseTest('testSuite'));
$result = new TestResult();
$suite->run($result);
echo $result->summary() . "\n";
