<?php
// disable error reporting
error_reporting(0);
ini_set('display_errors', 'Off');

// directory separator shortcut
defined('DS') || define('DS', DIRECTORY_SEPARATOR);

defined('APP_PATH') || define('APP_PATH', realpath(dirname(__FILE__) . '/../..'));
defined('ASSETS_PATH') || define('ASSETS_PATH', '../assets');

set_include_path(implode(PATH_SEPARATOR, array( APP_PATH, get_include_path() )));

// default timezone
ini_set('date.timezone', 'UTC');