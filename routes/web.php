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
use App\Http\Controllers\Api\{DepartmentController};

//Route::get('/departments', [DepartmentController::class, 'index']);

Route::resource('departments', DepartmentController::class);

Route::get('/', function () {
    return view('welcome');
});
