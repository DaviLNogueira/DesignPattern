<?php

use Alura\DesignPattern\Log\StdoutLogManager;
use Alura\DesignPattern\Log\StdoutWritter;

require_once 'vendor/autoload.php';

$logManager = new \Alura\DesignPattern\Log\FileLogManager(__DIR__ .'/log');

$logManager -> log('info','Testando log manager');
