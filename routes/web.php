<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login_con;
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

Route::get('login',[Login_con::class, 'login']);
Route::get('register',[Login_con::class, 'register']);
Route::post('create',[Login_con::class, 'create'])->name('create');
Route::post('check',[Login_con::class, 'check'])->name('check');
Route::get('profile',[Login_con::class, 'profile']);
Route::get('logout',[Login_con::class, 'logout']);
Route::view('edit','edit');
//Route::post('/edit',[Login_con::class, 'profile']);
//Route::post('/edit',[Login_con::class, 'edit']);
Route::post('edit',[Login_con::class, 'addData']);
Route::get('list',[Login_con::class, 'list']);
Route::get('delete/{id}',[Login_con::class, 'delete']);
Route::get('update/{id}',[Login_con::class, 'showdata']);
Route::post('updated',[Login_con::class, 'up']);