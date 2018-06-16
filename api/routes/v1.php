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

$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($api) {
    # Author routes
    resource('authors', 'AuthorController');
    $api->get('author/resume/{name}', ['uses'=>'AuthorController@resume', 'as'=>'author.resume']);
    # Menu routes
    resource('menus', 'MenuController');
    # Translation routes
    resource('trans', 'TranslationController');
    //$api->resource('trans', ['uses' => 'TranslationController']);
});
