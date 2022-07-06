<?php


use Persimmon\Framework\Application;

require __DIR__ . '/../vendor/autoload.php';

$application = new Application();
echo $application->run();