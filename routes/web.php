<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EndUser;
use App\Http\Controllers\Crud;
use App\Http\Controllers\Admin;
use App\Models\Sections;


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'App\Http\Controllers\EndUser\EndUserController@home')-> name('home');


Route::get('/about', 'App\Http\Controllers\EndUser\EndUserController@about')-> name('about');

Route::get('/contact', 'App\Http\Controllers\EndUser\EndUserController@contact')-> name('contact');

Route::get('/event', 'App\Http\Controllers\EndUser\EndUserController@event')-> name('event');

Route::get('/projects', 'App\Http\Controllers\EndUser\EndUserController@projects')-> name('projects');

Route::get('/project', 'App\Http\Controllers\EndUser\EndUserController@project')-> name('project');

Route::get('/services', 'App\Http\Controllers\EndUser\EndUserController@services')-> name('services');

Route::get('/service', 'App\Http\Controllers\EndUser\EndUserController@service')-> name('service');

// Route::get('/register', 'App\Http\Controllers\Admin\AdminController@register')-> name('register');

// Route::get('/login', 'App\Http\Controllers\Admin\AdminController@login')-> name('login');
// Route::get('/reset', 'App\Http\Controllers\Admin\AdminController@reset')-> name('reset');


// Route::get('Admin',[App\Http\Controllers\Admin\AdminController::class,'login']);
// Route::post('add',[App\Http\Controllers\Admin\AdminController::class,'add']);




// route::group(['prefix'=>'Services'],function(){

//     Route::get('store', 'App\Http\Controllers\Crud\CrudController@store');

// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\EndUser\EndUserController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/newservice', 'App\Http\Controllers\Admin\AdminContoller@create');
 Route::post('store',[App\Http\Controllers\Admin\AdminContoller::class,'store']);
 Route::get('edit-service/{id}',[App\Http\Controllers\Admin\AdminContoller::class,'edit']);
 Route::put('EdnUser-services/{id}',[App\Http\Controllers\Admin\AdminContoller::class,'update']);

 Route::get('delete-service/{id}',[App\Http\Controllers\Admin\AdminContoller::class,'destroy']);
