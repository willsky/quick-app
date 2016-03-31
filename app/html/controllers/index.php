<?php
namespace App\Html\Controllers;


class Index extends BaseHtml
{
    public function index() {
        $data = ['users' => [['name' => 'Senhua'], ['name' =>'Will'], ['name' => 'Eric']]];
        $this->view->set($data);
    }
}