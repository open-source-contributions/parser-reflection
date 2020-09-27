<?php
declare(strict_types=1);

ini_set('display_errors', 'on');

if (defined("AUTOLOAD_PATH")) {
    if (is_file(__DIR__ . '/../' .AUTOLOAD_PATH)) {
        $loader = include_once __DIR__ . '/../' . AUTOLOAD_PATH;
    } else {
        throw new InvalidArgumentException("Cannot load custom autoload file located at ".AUTOLOAD_PATH);
    }
}
