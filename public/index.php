<?php


use app\core\Router;

require '../vendor/autoload.php';

session_start();

// dd($_SERVER);

//dd(RequestType::get());

Router::run();