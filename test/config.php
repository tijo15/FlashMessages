<?php

include __DIR__ . "/../autoloader.php";
include __DIR__ . "/../vendor/autoload.php";
/**
 * Define essential Anax paths, end with /
 *
 */
define('ANAX_INSTALL_PATH', realpath(__DIR__ . '/../vendor/anax/mvc') . '/');
define('ANAX_APP_PATH',     ANAX_INSTALL_PATH . 'app/');

