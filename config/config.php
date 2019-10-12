<?php

define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT']);
define('DS', DIRECTORY_SEPARATOR);
define("CONTROLLER_NAMESPACE", "app\\controllers\\");
define("TEMPLATES_DIR", "../views/");

// подключение к бд

define('DB_DRIVER', 'mysql');
define('HOST', 'localhost');
define('PORT', 3307);
define('DB', 'task_test');
define('USER', 'root');
define('PASS', '');
