<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('employees', EmployeeController::class);
//Route::middleware(['auth:sanctum', 'verified'])->get('/index', 'EmployeeController@index')->name('employees.index');
Route::get('/employee/index', 'App\Http\Controllers\EmployeeController@index')->name('employee.index');
Route::get('/employee/create', 'App\Http\Controllers\EmployeeController@create')->name('employee.create');
Route::get('/employee/edit', 'App\Http\Controllers\EmployeeController@edit')->name('employee.edit');
Route::get('/employee/show', 'App\Http\Controllers\EmployeeController@show')->name('employee.show');
