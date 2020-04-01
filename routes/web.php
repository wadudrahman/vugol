<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1/'], function () use ($router) {
    //Divisions
//    $router->post('divisions', 'DivisionController@addDivision');
    $router->get('divisions', 'DivisionController@divisionList');
    $router->get('divisions/{slug}', 'DivisionController@divisionDetails');
//    $router->put('divisions/{slug}', 'DivisionController@updateDivisionDetails');
//    $router->delete('divisions/{id}', 'DivisionController@deleteDivision');

    //Districts
//    $router->post('districts', 'DistrictController@addDistrict');
    $router->get('districts', 'DistrictController@districtList');
    $router->get('districts/{slug}', 'DistrictController@districtDetails');
    $router->get('{division}/districts', 'DistrictController@divisionWiseDistrictList');
//    $router->put('districts/{slug}', 'DistrictController@updateDistrictDetails');
//    $router->delete('districts/{slug}', 'DistrictController@deleteDistrict');

    //Upzilas
//    $router->post('upzilas', 'DistrictController@addUozila');
    $router->get('upzilas', 'UpzilaController@upzilaList');
    $router->get('upzilas/{slug}', 'UpzilaController@upzilaDetails');
    $router->get('divisions/{division}/upzilas', 'UpzilaController@divisionWiseUpzilaList');
    $router->get('districts/{district}/upzilas', 'UpzilaController@districtWiseUpzilaList');
//    $router->put('upzila/{slug}', 'DistrictController@updateUpzilaDetails');
//    $router->delete('upzila/{id}', 'DistrictController@deleteUpzila');

    //Unions
//    $router->post('unions', 'DistrictController@addUnion');
    $router->get('unions', 'UnionController@unionList');
    $router->get('unions/{slug}', 'UnionController@unionDetails');
    $router->get('divisions/{division}/unions', 'UnionController@divisionWiseUnionList');
    $router->get('districts/{district}/unions', 'UnionController@districtWiseUnionList');
    $router->get('upzilas/{upzila}/unions', 'UnionController@upzilaWiseUnionList');
//    $router->put('unions/{slug}', 'DistrictController@updateUnionDetails');
//    $router->delete('unions/{id}', 'DistrictController@deleteUnion');

    //Post Office
    //Police Stations

});


