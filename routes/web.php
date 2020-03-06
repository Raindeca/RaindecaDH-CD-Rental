<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


//Generate an application key
$router->get('/key', function() {
    return str_random(32);
});

//Testing the router activity
$router->get('/foo', function() {
    return 'Hello GET Method has been activated!';
});

$router->post('/bar', function() {
    return 'testing testing testing!';
});