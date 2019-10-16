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

Route::get('/services', "ServiceController@services")->name("services");

Route::get('/blog', "BlogController@blog")->name('blog');

Route::get('/contact', "MainController@contact")->name("contact");

Route::get('/blog-post', function(){
    return view('blog-post');
});

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

// Routes de l'admin

// Routes pour le crud du template

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


Route::get('/admin/template/page2',"EditTemplateController@page2")->middleware('auth')->name('pageDeux');

Route::patch('/admin/template/editPage2Title',"EditTemplateController@P2Title")->middleware('auth');
Route::patch('/admin/template/editPage2Sec2',"EditTemplateController@P2sec2")->middleware('auth');

Route::get('/admin/template/page3',"EditTemplateController@page3")->middleware('auth')->name('pageTrois');

Route::patch('/admin/template/editPage3Title',"EditTemplateController@P3Title")->middleware('auth');
Route::patch('/admin/template/editWidget',"EditTemplateController@P3Widget")->middleware('auth');


Route::get('/admin/template/page4',"EditTemplateController@page4")->middleware('auth')->name('pageQuatre');
Route::patch('/admin/template/editPage4Title',"EditTemplateController@P4Title")->middleware('auth');

// Routes pour le crud des services 

Route::get('/admin/services',"ServiceController@adminServices")->middleware('auth')->name('adminServices');

Route::get('/admin/services/{id}/edit',"ServiceController@edit")->middleware('auth');
Route::patch('/admin/services/{id}/update',"ServiceController@update")->middleware('auth');
Route::get('/admin/services/{id}/delete',"ServiceController@delete")->middleware('auth');
Route::get('/admin/services/newService',"ServiceController@newService")->middleware('auth');
Route::post('/admin/services/create',"ServiceController@create")->middleware('auth');

// Routes pour le crud des testimonials

Route::get('/admin/testimonials',"AdminController@testimonials")->middleware('auth')->name('adminTestimonials');

Route::get('/admin/testimonials/{id}/delete',"AdminController@deleteTestimonial")->middleware('auth');
Route::get('/admin/testimonials/{id}/update',"AdminController@updateTestimonial")->middleware('auth');