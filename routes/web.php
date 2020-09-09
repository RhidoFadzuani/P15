<?php

use Illuminate\Support\Facades\Route;

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

Route::get('halo', function () {
	return "halo dunia";
});

Route::get('kuis', function () {
	return "kuis pertemuan 9";
});



Route::prefix('/tugas15')->group(function ()
{

	Route::get('/tugas', function () {
		return view('pertemuan15/views1');
	});

	Route::get('/tugas1', function () {
		return view('pertemuan15/views2',
		[
			"pelajaran1" => "matematika",
			"pelajaran2" => "bahasa inggris",
			"pelajaran3" => "Sains",

		]);
	});

	Route::get('/tugas2', function () {
		return view('pertemuan15/views3',
		[
			"guru1" => "pak pallah",
			"guru2" => "pak egi",
			"guru3" => "bu retno",

		]);
	});
	


});