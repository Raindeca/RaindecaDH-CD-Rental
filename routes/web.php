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

//CD's endpoint
$router->group([
    'prefix' => 'api/v1',
], function () use ($router) {
    $router->get('/admin/cd/collection', 'CdController@index');
    $router->get('/admin/cd/collection/{id}', 'CdController@show');
    $router->post('/admin/cd/collection', 'CdController@store');
    $router->patch('/admin/cd/collection/{id}', 'CdController@update');
    $router->delete('/admin/cd/collection/{id}', 'CdController@destroy');
});

// //Costumer's endpoint
// $router->group([
//     'prefix' => 'api/v1',
// ], function () use ($router) {
//     $router->get('/account/profile', 'CostumerController@index');
//     $router->get('/account/profile/{id}', 'CostumerController@show');
//     $router->post('/account/profile', 'CostumerController@store');
//     $router->patch('/account/profile/{id}', 'CostumerController@update');
//     $router->delete('/account/profile/{id}', 'CostumerController@destroy');
    
// });