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

Route::get('/', "MainController@main")->name('main');

Route::get('/services', "ServiceController@service")->name("service");

Route::get('/blog', "BlogController@blog")->name('blog');

Route::get('/contact', "MainController@contact")->name("contact");

Route::get('/blog-post', function(){
    return view('blog-post');
});

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

// Route de l'admin

Route::get('/admin/template',"EditTemplateController@template")->middleware('auth');

Route::get('/admin/template/home',"EditTemplateController@homepage")->middleware('auth')->name('homepage');

Route::patch('/admin/template/editBanner',"EditTemplateController@banner")->middleware('auth');
Route::patch('/admin/template/editSec1',"EditTemplateController@section1")->middleware('auth');
Route::patch('/admin/template/editSec2',"EditTemplateController@section2")->middleware('auth');
Route::patch('/admin/template/editSec3',"EditTemplateController@section3")->middleware('auth');
Route::patch('/admin/template/editSec4',"EditTemplateController@section4")->middleware('auth');
Route::patch('/admin/template/editSec5',"EditTemplateController@section5")->middleware('auth');
Route::patch('/admin/template/editSec6',"EditTemplateController@section6")->middleware('auth');
Route::patch('/admin/template/editForm',"EditTemplateController@formulaire")->middleware('auth');
