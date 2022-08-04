<?php
require __DIR__.'/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Teste\CursoSON\Hello;

//create a log chanel

$log = new Logger('name');
$log->pushHandler(new StreamHandler('app.log', Logger::WARNING));


//add record to the log

$log->warning((new Hello)->say('Iago'));