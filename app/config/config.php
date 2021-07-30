<?php

// Global
define('APP_NAME' , 'MVC APP');
define('APP_DOMAIN' , 'http://mvc.test');

// Database Connection
define('DB_NAME', 'mvc_test');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');

// Paths
define("DS", DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__) . DS );
define("APP", ROOT . 'app');
define("CONFIG", APP . DS .'config');
define("CONTROLLERS", APP . DS . 'controllers');
define("MODELS", APP . DS .  'models');
define("VIEWS", APP . DS . 'views');
define("CORE", APP . DS . 'core');