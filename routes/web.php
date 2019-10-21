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
Route::post('/contact/newMessage',"MainController@newMessage");

Route::get('/blog-post/{id}/viewPost', "BlogController@blog_post");

Route::get('/inscription',"MainController@inscription");

Route::post('/newsletter/newUser',"MainController@newsletter");
Route::get('/admin/newsletter',"AdminController@viewNewsletter")->middleware('auth')->name('adminNewsletter');
Route::get('/admin/newsletter/{id}/delete',"AdminController@deleteNewsletter")->middleware('auth');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

// Routes de l'admin

// Routes pour les users 

Route::get('/admin/users',"AdminController@users")->middleware('auth')->name('adminUsers');
Route::get('/admin/users/{id}/delete',"AdminController@deleteUser")->middleware('auth');
Route::post('/admin/users/{id}/update',"AdminController@updateUser")->middleware('auth');

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

// Routes pour le crud du carousel 

Route::get('/admin/template/carousel',"MainController@carousel")->middleware('auth')->name('carousel');
Route::patch('/admin/template/carousel/{id}/update',"MainController@updateCarousel")->middleware('auth');
Route::get('/admin/template/carousel/{id}/delete',"MainController@deleteCarousel")->middleware('auth');
Route::get('/admin/template/carousel/newCarousel',"MainController@newCarousel")->middleware('auth');
Route::post('/admin/template/carousel/create',"MainController@createCarousel")->middleware('auth');

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
Route::get('/admin/testimonials/{id}/edit',"AdminController@editTestimonial")->middleware('auth');
Route::patch('/admin/testimonials/{id}/update',"AdminController@updateTestimonial")->middleware('auth');
Route::get('/admin/testimonials/newTestimonial',"AdminController@newTestimonial")->middleware('auth');
Route::post('/admin/testimonials/create',"ServiceController@createTestimonial")->middleware('auth');

// Routes pour le crud de la team

Route::get('/admin/team',"AdminController@team")->middleware('auth')->name('adminTeam');

Route::get('/admin/team/{id}/edit',"AdminController@editTeam")->middleware('auth');
Route::patch('/admin/team/{id}/update',"AdminController@updateTeam")->middleware('auth');
Route::get('/admin/team/{id}/delete',"AdminController@deleteTeam")->middleware('auth');
Route::get('/admin/team/newTeam',"AdminController@newTeam")->middleware('auth');
Route::post('/admin/team/create',"AdminController@createTeam")->middleware('auth');
Route::patch('/admin/team/leader',"AdminController@leader")->middleware('auth');

// Routes pour le crud des projets

Route::get('/admin/projets',"AdminController@projet")->middleware('auth')->name('projet');
Route::get('/admin/projets/{id}/delete',"AdminController@deleteProjet")->middleware('auth');
Route::get('/admin/projets/newProjet',"AdminController@newProjet")->middleware('auth');
Route::get('/admin/projets/{id}/edit',"AdminController@editProjet")->middleware('auth');
Route::patch('/admin/projets/{id}/update',"AdminController@updateProjet")->middleware('auth');
Route::post('/admin/projets/create',"AdminController@createProjet")->middleware('auth');

// Routes pour les messages

Route::get('/admin/messages',"AdminController@viewMessage")->middleware('auth')->name('adminMessage');
Route::get('/admin/messages/{id}/delete',"AdminController@deleteMessage")->middleware('auth');

// Routes pour les articles 

Route::get('/admin/articles',"BlogController@authorArticles")->middleware('auth')->name('adminArticle');
Route::get('/admin/articles/{id}/articles',"BlogController@viewArticle")->middleware('auth');
Route::get('/admin/articles/newArticle',"BlogController@newArticle")->middleware('auth');
Route::post('articles/{id}/newComment',"BlogController@newComment")->middleware('auth');