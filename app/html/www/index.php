<?php 

require(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'conf' . DIRECTORY_SEPARATOR .'macros.php');
require(APP_PATH . DS . 'conf' . DS . 'error_code.php');
require(ROOT_PATH . DS . 'vendor' . DS . 'autoload.php');

\Quick\Server::run();
