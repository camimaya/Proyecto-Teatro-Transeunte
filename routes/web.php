<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;

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


Route::get('/',[HomeController::class, 'getHome']);
Route::post('/',[HomeController::class, 'postHome']);

Route::get('/cursos/circo', [CursoController::class, 'getCirco']);

Route::get('/cursos/clown1', [CursoController::class, 'getClown1']);

Route::get('/cursos/teatro', [CursoController::class, 'getTeatro']);

Route::get('/logout', function () {
    return 'logout';
});

/*Route::group(['middleware' => 'auth'], function() {

    Route::get('/cursos/circo', [CursoController::class, 'getCirco']);

    Route::get('/cursos/clown1', [CursoController::class, 'getClown1']);

    Route::get('/cursos/teatro', [CursoController::class, 'getTeatro']);

});
*/



Auth::routes();
