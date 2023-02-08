<?php

namespace app\controllers;

// use app\database\Filters;

use app\database\Filters;
use app\database\models\User;

class HomeController extends Controller
{
    public function index()
    {

        // $filters = new Filters;
        // $filters->where('id' ,'=', 2, 'and');

        $user = new User;
        //$user->setFilters($filters);
        $deleted = $user->delete('id', 2);

        dd($deleted);
        // $filters->dump();

        $this->view('home', ['title' => 'Home']);
        
    } 

}