<?php

define('HTTP_SERVER', 'http://localhost/test_goarac/');
define('HTTPS_SERVER', 'http://localhost/test_goarac/');

define('DIR_APPLICATION', 'C:/xampp/htdocs/test_goarac/catalog/');
define('DIR_SYSTEM', 'C:/xampp/htdocs/test_goarac/system/');
define('DIR_IMAGE', 'C:/xampp/htdocs/test_goarac/image/');
define('DIR_STORAGE', 'C:/xampp/htdocs/test_goarac/storage/');

define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'goarac');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');