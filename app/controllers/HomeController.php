<?php

namespace app\controllers;

// use app\database\Filters;

use app\database\Filters;
use app\database\models\User;

class HomeController extends Controller
{
    public function index()
    {

        //  $filters = new Filters;
        //  $filters->limit(1);
        //  $filters->orderBy('id', 'asc');

        $user = new User();
        // $user->setFilters($filters);
        $userFound = $user->first('id', '');

        dd($userFound);

         $this->view('home', ['title' => 'Home']);
        
    } 

}