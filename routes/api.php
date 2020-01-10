<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List Articles
Route::get('articles', 'ArticleController@index');

//list single article
Route::get('article/{id}', 'ArticleController@show');

//create article
Route::post('articles', 'ArticleController@store');

//update article
Route::put('articles', 'ArticleController@store');

//delete article
Route::delete('articles', 'ArticleController@destroy');