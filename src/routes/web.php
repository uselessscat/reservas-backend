<?php

/**
 * --------------------------------------------------------------------------
 *  Application Routes
 * --------------------------------------------------------------------------
 *
 *  Here is where you can register all of the routes for an application.
 *  It is a breeze. Simply tell Lumen the URIs it should respond to
 *  and give it the Closure to call when that URI is requested.
 *
 */

$router->get('/status', function () {
    return response()->json([
        'status' => 'The server is running &#128578',
    ]);
});

$router->get('/persons', 'PersonController@index');
$router->post('/persons', 'PersonController@store');
$router->get('/persons/{id}', 'PersonController@get');
$router->patch('/persons/{id}', 'PersonController@update');
$router->delete('/persons/{id}', 'PersonController@delete');

$router->get('/persons/{id}/roles', 'PersonRoleController@index');
$router->post('/persons/{id}/roles', 'PersonRoleController@store');
$router->get('/persons/{personId}/roles/{id}', 'PersonRoleController@get');
$router->patch('/persons/{personId}/roles/{id}', 'PersonRoleController@update');
$router->delete('/persons/{personId}/roles/{id}', 'PersonRoleController@delete');

$router->get('/roles', 'RoleController@index');
$router->post('/roles', 'RoleController@store');
$router->get('/roles/{id}', 'RoleController@get');
$router->patch('/roles/{id}', 'RoleController@update');
$router->delete('/roles/{id}', 'RoleController@delete');

$router->get('/place_types', 'PlaceTypeController@index');
$router->post('/place_types', 'PlaceTypeController@store');
$router->get('/place_types/{id}', 'PlaceTypeController@get');
$router->patch('/place_types/{id}', 'PlaceTypeController@update');
$router->delete('/place_types/{id}', 'PlaceTypeController@delete');

$router->get('/equipment_types', 'EquipmentTypeController@index');
$router->post('/equipment_types', 'EquipmentTypeController@store');
$router->get('/equipment_types/{id}', 'EquipmentTypeController@get');
$router->patch('/equipment_types/{id}', 'EquipmentTypeController@update');
$router->delete('/equipment_types/{id}', 'EquipmentTypeController@delete');

$router->get('/services', 'ServiceController@index');
$router->post('/services', 'ServiceController@store');
$router->get('/services/{id}', 'ServiceController@get');
$router->patch('/services/{id}', 'ServiceController@update');
$router->delete('/services/{id}', 'ServiceController@delete');

$router->get('/services/{serviceId}/requeriments', 'RequerimentController@index');
$router->post('/services/{serviceId}/requeriments', 'RequerimentController@store');
$router->get('/services/{serviceId}/requeriments/{id}', 'RequerimentController@get');
$router->patch('/services/{serviceId}/requeriments/{id}', 'RequerimentController@update');
$router->delete('/services/{serviceId}/requeriments/{id}', 'RequerimentController@delete');

$router->get('/appointments', 'AppointmentController@index');
$router->post('/appointments', 'AppointmentController@store');
$router->get('/appointments/{id}', 'AppointmentController@get');
$router->patch('/appointments/{id}', 'AppointmentController@update');
$router->delete('/appointments/{id}', 'AppointmentController@delete');
