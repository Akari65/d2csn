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

Route::get('login', function () {
    return view('login');
});

Route::get('register', [App\Http\Controllers\RegistrationController::class,'Register']);
Route::get('create_role_index', function () {
    return view('create_role_index');
});

Route::get('get_role_list/{param_type}/{id}/{status}', [App\Http\Controllers\RegistrationController::class,'get_role_list']);

Route::post('create_role', [App\Http\Controllers\RegistrationController::class,'create_role']);
Route::post('update_role', [App\Http\Controllers\RegistrationController::class,'update_role']);
Route::get('edit_role/{id}', [App\Http\Controllers\RegistrationController::class,'edit_role']);
Route::get('delete_role/{id}', [App\Http\Controllers\RegistrationController::class,'delete_role']);

