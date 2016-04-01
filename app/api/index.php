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
    
    \Quick\Server::registerShutdown(function() {
        if (function_exists('app_shutdown')) {
            app_shutdown();
        }
        
        if (($error = error_get_last()) && in_array($error['type'], array(E_ERROR, E_PARSE, E_CORE_ERROR,E_COMPILE_ERROR, E_CORE_WARNING, E_COMPILE_WARNING))) {
            header('Content-Type: application/json; charset='.\Quick\Core\App::instance()->get('charset'));
            $code = ERROR_SYSTEM_CORE;
            $message = $error['message'];
            echo json_encode(array('c' => $code, 'msg' => $message));
        }
    });
});
