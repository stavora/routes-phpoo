<?php

namespace app\controllers;

// use app\database\Filters;
use app\database\models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = new User;
        // $user->setFilters($filters);
        $usersFound = $user->fetchAll();
        dd($usersFound->teste());

        // $filters->dump();

        $this->view('home', ['title' => 'Home']);
    }    
}