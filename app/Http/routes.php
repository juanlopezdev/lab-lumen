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

$app->get('/', function() use ($app) {
  return "RESTful API for Lab";
});

$app->group(['prefix' => 'api/v1'], function () use ($app) {

  $app->get('users', 'App\Http\Controllers\UserController@getUsers');

  $app->get('user/{user_id}', 'App\Http\Controllers\UserController@getUser');

  $app->post('user', 'App\Http\Controllers\UserController@createUser');

  $app->put('user/{user_id}', 'App\Http\Controllers\UserController@updateUser');
});



