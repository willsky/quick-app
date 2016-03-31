<?php
namespace App\Api\Controllers;


class Index extends BaseApi
{
    public function index() {
        $this->output(ALL_RIGHT, 'ok');
    }
}
