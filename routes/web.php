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
$router->get('/key', function () {
    return str_random(32);
});

//Admin CDs endpoint
$router->group([
    'prefix' => 'api/v1',
], function () use ($router) {
    $router->get('/admin/cd/collection', 'CdController@index');
    $router->get('/admin/cd/collection/{id}', 'CdController@show');
    $router->post('/admin/cd/collection', 'CdController@store');
    $router->patch('/admin/cd/collection/{id}', 'CdController@update');
    $router->delete('/admin/cd/collection/{id}', 'CdController@destroy');
});


//Costumer profile endpoint
$router->group([
    'prefix' => 'api/v1',
], 
    function () use ($router) {
    $router->get('/user/profile/{id}', 'ProfileController@show');
    $router->patch('/admin/cd/collection/{id}', 'ProfileController@update');
});

//Costumer CDs endpoint
$router->group([
    'prefix' => 'api/v1',
], function () use ($router) {
    $router->get('/user/cd/collection', 'CostumerController@index');
    $router->get('/user/cd/collection/{id}', 'CostumerController@show');
    $router->patch('/user/cd/collection/{id}', 'CostumerController@update');
});
