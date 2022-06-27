<?php

use Alura\DesignPattern\PdoConnection;

require_once  'vendor\autoload.php';

$pdo = PdoConnection::getInstance('sqlite::memory:');
//$pdo -> query('');

/** @var \PDO $pdo1 */
$pdo1 = PdoConnection::getInstance('sqlite::memory:');

var_dump($pdo,$pdo1);

