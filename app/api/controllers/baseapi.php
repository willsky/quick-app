<?php
namespace App\Api\Controllers;


class BaseApi extends \Quick\Controller\Api
{
   
    protected function output($errorcode = 0, $msg = 'ok', $data = NULL) {
        $retval = [
            'code' => $errorcode,
            'msg' => $msg
        ];
        
        if (!is_null($data)) {
            $retval['data'] = $data;
        }
        
        $this->render($retval);
    }
}