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
    $router->post('upzilas', 'DistrictController@addUozila');
    $router->get('upzilas', 'DistrictController@upzilaList');
    $router->get('upzila/{slug}', 'DistrictController@upzilaDetails');
    $router->get('{division}/upzilas', 'DistrictController@divisionWiseUpzilaList');
    $router->get('{district}/upzilas', 'DistrictController@districtWiseUpzilaList');
    $router->put('upzila/{slug}', 'DistrictController@updateUpzilaDetails');
    $router->delete('upzila/{id}', 'DistrictController@deleteUpzila');

    //Unions
    $router->post('unions', 'DistrictController@addUnion');
    $router->get('unions', 'DistrictController@unionList');
    $router->get('unions/{slug}', 'DistrictController@unionDetails');
    $router->get('{division}/unions', 'DistrictController@divisionWiseUnionList');
    $router->get('{district}/unions', 'DistrictController@districtWiseUnionList');
    $router->get('{upzila}/unions', 'DistrictController@upzilaWiseUnionList');
    $router->put('unions/{slug}', 'DistrictController@updateUnionDetails');
    $router->delete('unions/{id}', 'DistrictController@deleteUnion');

    //Post Office
    //Police Stations

});


