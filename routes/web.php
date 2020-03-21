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

$router->group(['prefix' => 'api/v1/'], function () use ($router) {
    //Divisions
    $router->post('divisions', 'DivisionController@addDivision');
    $router->get('divisions', 'DivisionController@divisionList');
    $router->get('divisions/{slug}', 'DivisionController@divisionDetails');
    $router->put('divisions/{slug}', 'DivisionController@updateDivisionDetails');
    $router->delete('divisions/{slug}', 'DivisionController@deleteDivision');

    //Districts
    $router->post('districts', 'DistrictController@addDistrict');
    $router->get('districts', 'DistrictController@districtList');
    $router->get('districts/{slug}', 'DistrictController@districtDetails');
    $router->get('{division}/districts', 'DistrictController@divisionWiseDistrictList');
    $router->put('districts/{slug}', 'DistrictController@updateDistrictDetails');
    $router->delete('districts/{slug}', 'DistrictController@deleteDistrict');

    //Upzilas
    $router->post('upzilas', 'DistrictController@addDivision');
    $router->get('upzilas', 'DistrictController@divisionList');
    $router->get('upzila/{slug}', 'DistrictController@divisionDetails');
    $router->get('{division}/upzilas', 'DistrictController@divisionDetails');
    $router->get('{district}/upzilas', 'DistrictController@divisionDetails');
    $router->put('upzila/{slug}', 'DistrictController@updateDivisionDetails');
    $router->delete('upzila/{id}', 'DistrictController@deleteDivision');

    //Unions
    $router->post('unions', 'DistrictController@addDivision');
    $router->get('unions', 'DistrictController@divisionList');
    $router->get('unions/{id}', 'DistrictController@divisionDetails');
    $router->put('unions/{id}', 'DistrictController@updateDivisionDetails');
    $router->delete('unions/{id}', 'DistrictController@deleteDivision');
});


