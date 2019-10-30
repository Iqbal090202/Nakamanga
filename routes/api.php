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

Route::get('komik', 'API\KomikController@index');
Route::get('komik/{judul}', 'API\KomikController@getByName');
Route::get('komik/{kmk_id}', 'API\KomikController@getById');

Route::get('genre', 'API\GenreController@index');

Route::get('chapter', 'API\ChapterController@index');
Route::get('chapter/{komik_id}', 'API\ChapterController@getByIdKomik');

Route::get('gambar/{cp_id}', 'API\GambarController@index');
