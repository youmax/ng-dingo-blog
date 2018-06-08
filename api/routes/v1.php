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

$api = app('Dingo\Api\Routing\Router');
app('Dingo\Api\Transformer\Factory')->register('Author', 'AuthorTransformer');

$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($api) {
    # Author routes
    $api->get('authors', ['as' => 'authors.index', 'uses' => 'AuthorController@index']);
    $api->get('authors/{id}', ['as' => 'authors.show', 'uses' => 'AuthorController@show']);
    $api->get('authors/{name}/resume', ['as' => 'authors.resume', 'uses' => 'AuthorController@resume']);
    # Menu routes
    $api->get('menus', ['as' => 'menus.index', 'uses' => 'MenuController@index']);
    $api->get('menus/{id}', ['as' => 'menus.show', 'uses' => 'MenuController@show']);
});
