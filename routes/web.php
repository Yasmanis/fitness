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
Route::get('/user-tanita-parameters', 'HomeController@user_tanita_parameters')->name('user-tanita-parameters');


Route::post('/new_fitness_evaluation','Fitness_Evaluation@store')->name('new_fitness_evaluation');
Route::post('/user_ficha','User_Ficha@store')->name('user_ficha');
Route::post('/user_medical_history','UserMedicalHistoryController@store')->name('user_medical_history');

//ver los test
Route::get('/test/pliegues_perimetros', 'TestController@getpliegues_perimetros')->name('getpliegues_perimetros');
Route::get('/test/fms', 'TestController@getfms')->name('getfms');
Route::get('/test/plancha_prono', 'TestController@getplancha_prono')->name('getplancha_prono');
Route::get('/test/burpees', 'TestController@getburpees')->name('getburpees');
Route::get('/test/domin_susp_isométrica', 'TestController@getdomin_susp_isométrica')->name('getdomin_susp_isométrica');
Route::get('/test/cooper', 'TestController@getcooper')->name('getcooper');
Route::get('/test/ruffier', 'TestController@getruffier')->name('getruffier');
Route::get('/test/salto_vertical', 'TestController@getsalto_vertical')->name('getsalto_vertical');
Route::get('/test/rockport', 'TestController@getrockport')->name('getrockport');


//guardar los Test creados
Route::post('/storeplieguesperimetrosTest','TestController@storeplieguesperimetrosTest')->name('storeplieguesperimetrosTest');
Route::post('/storefmsTest','TestController@storefmsTest')->name('storefmsTest');
Route::post('/storeplanchapronoTest','TestController@storeplanchapronoTest')->name('storeplanchapronoTest');
Route::post('/storeburpeesTest','TestController@storeburpeesTest')->name('storeburpeesTest');
Route::post('/storedom_susp_isometricoTest','TestController@storedom_susp_isometricoTest')->name('storedom_susp_isometricoTest');
Route::post('/storecooperTest','TestController@storecooperTest')->name('storecooperTest');
Route::post('/storeruffierTest','TestController@storeruffierTest')->name('storeruffierTest');
Route::post('/storesalto_verticalTest','TestController@storesalto_verticalTest')->name('storesalto_verticalTest');
Route::post('/storerockportTest','TestController@storerockportTest')->name('storerockportTest');

Route::get('training-plan', 'UploadPlainController@training_plan')->name('training-plan');
Route::post('training-plan', 'UploadPlainController@training_plan_post')->name('training-plan-post');

Route::get('training-plan-template', 'UploadPlainController@training_plan_template')->name('training-plan-template');