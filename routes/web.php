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

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->post('/division', 'DivisionController@addDivision');
    $router->get('/division', 'DivisionController@divisionList');
    $router->get('/division/{id}', 'DivisionController@divisionDetails');
    $router->put('/division/{id}', 'DivisionController@updateDivisionDetails');
    $router->delete('/division/{id}', 'DivisionController@deleteDivision');
});


