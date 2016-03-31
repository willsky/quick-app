<?php 

require(__DIR__ . DIRECTORY_SEPARATOR . 'conf' . DIRECTORY_SEPARATOR .'macros.php');
require(APP_PATH . DS . 'conf' . DS . 'error_code.php');
require(ROOT_PATH . DS . 'vendor' . DS . 'autoload.php');

\Quick\Server::run(function() {
    \Quick\Server::exceptionHandler(function($exceptionObject) {
        header('Content-Type: application/json; charset='.\Quick\Core\App::instance()->get('charset'));
        echo json_encode(array('c' => $exceptionObject->getCode(), 'msg' => $exceptionObject->getMessage()));
        exit;
    });
    \Quick\Server::errorHandler(function($code, $message, $errorFile, $errorLine) {
        header('Content-Type: application/json; charset='.\Quick\Core\App::instance()->get('charset'));
        echo json_encode(array('c' => $code, 'msg' => $message));
        exit;
    });
});
