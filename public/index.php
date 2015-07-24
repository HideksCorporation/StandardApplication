<?php

require_once __DIR__.'/../vendor/autoload.php';

$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);

if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

defined('DS')
    || define('DS', DIRECTORY_SEPARATOR);

defined('APP_DIR')
    || define('APP_DIR', dirname(__DIR__).DS.'application');

defined('PUB_DIR')
    || define('PUB_DIR', dirname(__DIR__).DS.'public');

$application = new Hideks\Application;
$application->run();