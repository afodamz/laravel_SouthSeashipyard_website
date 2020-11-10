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


Route::get('/', 'Pagescontroller@getHome');

Route::get('/company', 'Pagescontroller@getCompany');

Route::get('/projects', 'Pagescontroller@getProjects');

Route::get('/contact', 'Pagescontroller@getContact');

Route::get('/services', 'Pagescontroller@getServices');

Route::get('/career', 'Pagescontroller@getCareer');

Route::post('/career/submit', 'CareerController@submit');

Route::post('/contact/submit', 'contactcontroller@submit');