<?php

namespace app\controllers;

use app\controllers\Controller;
use app\core\Request;

class UserController extends Controller
{
    public function edit($params)
    {
        $this->view(
            'user',
            [
            'title' => 'Editar user' 
        ]);
    }

    public function update($params)
    {
        dd(Request::only('password'));
    }
}