<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// ---------------- Backend ------------------- //
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// komik
Route::get('/komik', 'KomikController@index')->name('komik');
Route::get('/komik/tambah', 'KomikController@tambah')->name('tambah_komik');
Route::post('/komik/store', 'KomikController@store')->name('store_komik');
Route::get('/komik/ubah/{id}', 'KomikController@ubah');
Route::post('/komik/update/{id}', 'KomikController@update')->name('update_komik');
Route::get('/komik/hapus/{id}', 'KomikController@hapus')->name('hapus_komik');
Route::get('/komik/complete/{id}', 'KomikController@complete');
Route::post('komik/setGenretoKomik', 'KomikController@setGenre');

// chapter
Route::get('/chapter', 'ChapterController@index')->name('chapter');
Route::get('/chapter/tambah/{id}', 'ChapterController@tambah')->name('tambah_chapter');
Route::post('/chapter/store', 'ChapterController@store')->name('store_chapter');
Route::get('/chapter/ubah/{id}', 'ChapterController@ubah');
Route::post('/chapter/update/{id}', 'ChapterController@update')->name('update_chapter');
Route::get('/chapter/hapus/{id}', 'ChapterController@hapus')->name('hapus_chapter');
Route::get('chapter/getKomik/{id}', 'ChapterController@ambilKomik');
Route::get('chapter/kirimKomik/{id}', 'ChapterController@kirimKomik');

// genre
Route::get('/genre', 'GenreController@index')->name('genre');
Route::get('/genre/tambah', 'GenreController@tambah')->name('tambah_genre');
Route::post('/genre/store', 'GenreController@store')->name('store_genre');
Route::get('/genre/ubah/{id}', 'GenreController@ubah');
Route::post('/genre/update/{id}', 'GenreController@update')->name('update_genre');
Route::get('/genre/hapus/{id}', 'GenreController@hapus')->name('hapus_genre');

// gambar 
Route::get('/gambar/{komik_id}/{ch}/{id}', 'GambarController@index')->name('gambar');
Route::get('/gambar/tambah/{komik_id}/{ch}/{id}', 'GambarController@tambah')->name('tambah_gambar');
Route::post('/gambar/store', 'GambarController@store')->name('store_gambar');
Route::get('/gambar/ubah/{komik_id}/{ch}/{id}/{gid}', 'GambarController@ubah');
Route::post('/gambar/update/{id}', 'GambarController@update')->name('update_gambar');
Route::get('/gambar/hapus/{komik_id}/{ch}/{id}', 'GambarController@hapus')->name('hapus_gambar');

// ------------------------- frontend -------------------------- //

Route::get('/nakamanga', 'NakamangaController@index');
Route::get('/nakamanga/manga', 'NakamangaController@manga');
Route::get('/nakamanga/genre', 'NakamangaController@genre');
Route::get('/nakamanga/inmanga', 'NakamangaController@inmanga');
Route::get('/nakamanga/baca', 'NakamangaController@baca');
