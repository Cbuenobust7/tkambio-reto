<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CambioController;


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
    return redirect('/cambios');
});

$router->post('login', ['as' => 'login', 'uses' => 'UserController@login']);
Route::resource('cambios', CambioController::class);



