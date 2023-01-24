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

        foreach ($usersFound as $user1) {
            dd($user1->teste());
        }
        dd($usersFound->teste());

        // $filters->dump();

        $this->view('home', ['title' => 'Home']);
    }    
}