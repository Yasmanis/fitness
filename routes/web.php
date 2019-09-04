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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user-card', 'HomeController@user_card')->name('user-card');
Route::get('/user-diagnosis', 'HomeController@user_diagnosis')->name('user-diagnosis');
Route::get('/user-tests', 'HomeController@user_tests')->name('user-tests');
Route::get('/user-tanita', 'HomeController@user_tanita')->name('user-tanita');

Route::post('/new_fitness_evaluation','Fitness_Evaluation@store')->name('new_fitness_evaluation');
Route::post('/user_ficha','User_Ficha@store')->name('user_ficha');
Route::post('/user_medical_history','UserMedicalHistoryController@store')->name('user_medical_history');
