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

$router->group(['prefix' => 'v1'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return $router->app->version();
    });
    $router->post('register', 'UserManagementController@register');
    $router->post('login', 'UserManagementController@retrieve');
    $router->group(['middleware' => ['user_authorization'], 'prefix' => 'user'], function () use ($router) {
        $router->get('profile', 'UserManagementController@profile');
        $router->get('collection', 'UserManagementController@collection');
    });
});