<?php
define('VERSION', 0.9);
define('ROOT', getcwd() . '/');

echo $sysPath = ROOT . 'sys/';

require $sysPath . 'utils/router.php';

echo "<pre>";
var_dump($_SERVER);

echo $router('/chat/list');

