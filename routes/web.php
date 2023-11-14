<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('docentes','DocenteController@index');
$router->get('docentes/{id}','DocenteController@show');
$router->post('docentes','DocenteController@store');
$router->put('docentes/{id}','DocenteController@update');
$router->delete('docentes/{id}','DocenteController@destroy');

$router->get('cursos','CursoController@index');
$router->get('cursos/{id}','CursoController@show');
$router->post('cursos','CursoController@store');
$router->put('cursos/{id}','CursoController@update');
$router->delete('cursos/{id}','CursoController@destroy');

$router->get('docentes/{id}/cursos', 'DocenteController@cursos');


$router->get('ocupaciones','OcupacionController@index');
$router->get('ocupaciones/{id}','OcupacionController@show');
$router->post('ocupaciones','OcupacionController@store');
$router->put('ocupaciones/{id}','OcupacionController@update');
$router->delete('ocupaciones/{id}','OcupacionController@destroy');


