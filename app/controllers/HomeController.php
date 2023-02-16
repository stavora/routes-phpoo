<?php

namespace app\controllers;

// use app\database\Filters;

use app\database\Filters;
use app\database\models\User;

class HomeController extends Controller
{
    public function index()
    {

        $filters = new Filters;
        $filters->join('posts','users.id','=','posts.userId','left join');

        $user = new User();
        $user->setFilters($filters);
        $userFound = $user->fetchAll();

        dd($userFound);

         $this->view('home', ['title' => 'Home']);
        
    } 

}