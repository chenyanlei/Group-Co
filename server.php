<?php

define('ASYNC', TRUE);
define('__ROOT__', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);

$loader = require __DIR__.'/vendor/autoload.php';
$loader->setUseIncludePath(true);

$kernal = new \Group\SwooleKernal();
$kernal->init();


