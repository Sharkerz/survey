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

use App\Formulaire;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return Formulaire::find(2)->rubriques[0]->formulaire;
});


Auth::routes();
Route::post('create','FormulaireController@insert');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('/formulaires', 'FormulaireController');
    Route::resource('/rubriques', 'RubriqueController');
    Route::resource('/questions', 'QuestionController');
    Route::resource('/type_reponses', 'TypeReponseController');
    Route::resource('/questions', 'QuestionController');
});