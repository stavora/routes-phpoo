<?php

namespace app\controllers;

// use app\database\Filters;

use app\database\Filters;
use app\database\models\User;

class HomeController extends Controller
{
    public function index()
    {

<<<<<<< HEAD
        //  $filters = new Filters;
        //  $filters->limit(1);
        //  $filters->orderBy('id', 'asc');

        $user = new User();
        // $user->setFilters($filters);
        $userFound = $user->first('id', '');
=======
        $filters = new Filters;
        $filters->join('posts','users.id','=','posts.userId','left join');

        $user = new User();
        $user->setFilters($filters);
        $userFound = $user->fetchAll();
>>>>>>> 746806409326c0bd5c23053e511d20c02aac710d

        dd($userFound);

         $this->view('home', ['title' => 'Home']);
        
    } 

}