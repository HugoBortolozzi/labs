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
Route::get('/blog/{id}/categories',"BlogController@categories");
Route::get('/blog/{id}/tags',"BlogController@tags");
Route::post('/search',"BlogController@search");

Route::get('/blog-post/{id}/viewPost', "BlogController@blog_post");

Route::get('/contact', "MainController@contact")->name("contact");
Route::post('/contact/newMessage',"MainController@newMessage");

Route::get('/inscription',"MainController@inscription");

Route::post('/newsletter/newUser',"MainController@newsletter");

Auth::routes();

//Routes pour les éditeurs et guests ( certaines routes de l'éditeur sont écrites dans la section article)

Route::get('/user/profil',"AdminController@myProfil")->middleware('auth')->name('myProfil');
Route::get('/user/profil/edit',"AdminController@editProfil")->middleware('auth')->name('editProfil');
Route::post('/user/profil/update','AdminController@updateProfil')->middleware('auth');

Route::get('/editeur/articles/{id}/notValid',"BlogController@notValid")->middleware('auth',"user");

Route::get('/editeur/myArticles',"AdminController@myArticles")->middleware('auth','user')->name('myArticles');

// Routes de l'admin

Route::get('/home', "AdminController@admin")->name('home')->middleware('auth');

//Routes de la newsletter

Route::get('/admin/newsletter',"AdminController@viewNewsletter")->middleware('auth')->middleware('admin')->name('adminNewsletter');
Route::get('/admin/newsletter/{id}/delete',"AdminController@deleteNewsletter")->middleware('auth','admin');

// Routes pour les users 

Route::get('/admin/users',"AdminController@users")->middleware('auth')->name('adminUsers')->middleware('admin');
Route::get('/admin/users/{id}/delete',"AdminController@deleteUser")->middleware('auth')->middleware('admin');
Route::post('/admin/users/{id}/update',"AdminController@updateUser")->middleware('auth')->middleware('admin');
Route::get('/admin/users/newUser',"AdminController@newUser")->middleware('auth')->name('newUser')->middleware('admin');
Route::post('/admin/users/create',"AdminController@createUser")->middleware('auth')->middleware('admin');

// Routes pour le crud du template

Route::get('/admin/template',"EditTemplateController@template")->middleware('auth')->middleware('admin');


Route::get('/admin/template/home',"EditTemplateController@homepage")->middleware('auth')->middleware('admin')->name('homepage');

Route::patch('/admin/template/editBanner',"EditTemplateController@banner")->middleware('auth')->middleware('admin');
Route::patch('/admin/template/editSec1',"EditTemplateController@section1")->middleware('auth')->middleware('admin');
Route::patch('/admin/template/editSec2',"EditTemplateController@section2")->middleware('auth')->middleware('admin');
Route::patch('/admin/template/editSec3',"EditTemplateController@section3")->middleware('auth')->middleware('admin');
Route::patch('/admin/template/editSec4',"EditTemplateController@section4")->middleware('auth')->middleware('admin');
Route::patch('/admin/template/editSec5',"EditTemplateController@section5")->middleware('auth')->middleware('admin');
Route::patch('/admin/template/editSec6',"EditTemplateController@section6")->middleware('auth')->middleware('admin');
Route::patch('/admin/template/editForm',"EditTemplateController@formulaire")->middleware('auth')->middleware('admin');


Route::get('/admin/template/page2',"EditTemplateController@page2")->middleware('auth')->middleware('admin')->name('pageDeux');

Route::patch('/admin/template/editPage2Title',"EditTemplateController@P2Title")->middleware('auth')->middleware('admin');
Route::patch('/admin/template/editPage2Sec2',"EditTemplateController@P2sec2")->middleware('auth')->middleware('admin');

Route::get('/admin/template/page3',"EditTemplateController@page3")->middleware('auth')->middleware('admin')->name('pageTrois');

Route::patch('/admin/template/editPage3Title',"EditTemplateController@P3Title")->middleware('auth')->middleware('admin');
Route::patch('/admin/template/editWidget',"EditTemplateController@P3Widget")->middleware('auth')->middleware('admin');


Route::get('/admin/template/page4',"EditTemplateController@page4")->middleware('auth')->middleware('admin')->name('pageQuatre');
Route::patch('/admin/template/editPage4Title',"EditTemplateController@P4Title")->middleware('auth')->middleware('admin');

// Routes pour le crud du carousel 

Route::get('/admin/template/carousel',"MainController@carousel")->middleware('auth')->middleware('admin')->name('carousel');
Route::patch('/admin/template/carousel/{id}/update',"MainController@updateCarousel")->middleware('auth')->middleware('admin');
Route::get('/admin/template/carousel/{id}/delete',"MainController@deleteCarousel")->middleware('auth')->middleware('admin');
Route::get('/admin/template/carousel/newCarousel',"MainController@newCarousel")->middleware('auth')->middleware('admin');
Route::post('/admin/template/carousel/create',"MainController@createCarousel")->middleware('auth')->middleware('admin');

// Routes pour le crud des services 

Route::get('/admin/services',"ServiceController@adminServices")->middleware('auth')->middleware('admin')->name('adminServices');

Route::get('/admin/services/{id}/edit',"ServiceController@edit")->middleware('auth')->middleware('admin');
Route::patch('/admin/services/{id}/update',"ServiceController@update")->middleware('auth')->middleware('admin');
Route::get('/admin/services/{id}/delete',"ServiceController@delete")->middleware('auth')->middleware('admin');
Route::get('/admin/services/newService',"ServiceController@newService")->middleware('auth')->middleware('admin');
Route::post('/admin/services/create',"ServiceController@create")->middleware('auth')->middleware('admin');

// Routes pour le crud des testimonials

Route::get('/admin/testimonials',"AdminController@testimonials")->middleware('auth')->middleware('admin')->name('adminTestimonials');

Route::get('/admin/testimonials/{id}/delete',"AdminController@deleteTestimonial")->middleware('auth')->middleware('admin');
Route::get('/admin/testimonials/{id}/edit',"AdminController@editTestimonial")->middleware('auth')->middleware('admin');
Route::patch('/admin/testimonials/{id}/update',"AdminController@updateTestimonial")->middleware('auth')->middleware('admin');
Route::get('/admin/testimonials/newTestimonial',"AdminController@newTestimonial")->middleware('auth')->middleware('admin');
Route::post('/admin/testimonials/create',"ServiceController@createTestimonial")->middleware('auth')->middleware('admin');

// Routes pour le crud de la team

Route::get('/admin/team',"AdminController@team")->middleware('auth')->middleware('admin')->name('adminTeam');

Route::get('/admin/team/{id}/edit',"AdminController@editTeam")->middleware('auth')->middleware('admin');
Route::patch('/admin/team/{id}/update',"AdminController@updateTeam")->middleware('auth')->middleware('admin');
Route::get('/admin/team/{id}/delete',"AdminController@deleteTeam")->middleware('auth')->middleware('admin');
Route::get('/admin/team/newTeam',"AdminController@newTeam")->middleware('auth')->middleware('admin');
Route::post('/admin/team/create',"AdminController@createTeam")->middleware('auth')->middleware('admin');
Route::patch('/admin/team/leader',"AdminController@leader")->middleware('auth')->middleware('admin');

// Routes pour le crud des projets

Route::get('/admin/projets',"AdminController@projet")->middleware('auth')->middleware('admin')->name('projet');
Route::get('/admin/projets/{id}/delete',"AdminController@deleteProjet")->middleware('auth')->middleware('admin');
Route::get('/admin/projets/newProjet',"AdminController@newProjet")->middleware('auth')->middleware('admin');
Route::get('/admin/projets/{id}/edit',"AdminController@editProjet")->middleware('auth')->middleware('admin');
Route::patch('/admin/projets/{id}/update',"AdminController@updateProjet")->middleware('auth')->middleware('admin');
Route::post('/admin/projets/create',"AdminController@createProjet")->middleware('auth')->middleware('admin');

// Routes pour les messages

Route::get('/admin/messages',"AdminController@viewMessage")->middleware('auth')->middleware('admin')->name('adminMessage');
Route::get('/admin/messages/{id}/delete',"AdminController@deleteMessage")->middleware('auth')->middleware('admin');

// Routes pour les articles 

Route::post('articles/{id}/newComment',"BlogController@newComment")->middleware('auth','user');

Route::get('/admin/articles',"BlogController@authorArticles")->middleware('auth','admin')->name('adminArticle');
Route::get('/admin/articles/{id}/articles',"BlogController@viewArticle")->middleware('auth','admin');
Route::get('/admin/articles/newArticle',"BlogController@newArticle")->middleware('auth','user')->name('newArticle');
Route::post('/admin/articles/create',"BlogController@createArticle")->middleware('auth','user');
Route::get('/admin/articles/{id}/edit',"BlogController@editArticle")->middleware('auth','user');
Route::patch('/admin/articles/{id}/update',"BlogController@updateArticle")->middleware('auth','user');
Route::get('/admin/articles/{id}/delete',"BlogController@deleteArticle")->middleware('auth','user');

Route::get('/admin/articles/categories',"BlogController@newCategorie")->middleware('auth','user');
Route::post('/admin/articles/categories/create',"BlogController@createCategorie")->middleware('auth','user');

Route::get('/admin/articles/tags','BlogController@newTag')->middleware('auth',"user");
Route::post('/admin/articles/tags/create',"BlogController@createTag")->middleware('auth',"user");

Route::patch('/admin/articles/{id}/valided',"BlogController@validArticle")->middleware('auth',"admin");

// Routes pour les catégories

Route::get('/admin/categories',"BlogController@adminCategories")->middleware('admin')->middleware('auth')->name('adminCategories');
Route::patch('/admin/categories/{id}/edit',"BlogController@editCategorie")->middleware('admin')->middleware('auth');
Route::get('/admin/categories/{id}/delete',"BlogController@deleteCategorie")->middleware('admin')->middleware('auth');

// Routes pour les tags

Route::get('/admin/tags',"BlogController@adminTags")->middleware('auth')->middleware('admin')->name('adminTags');
Route::patch('/admin/tags/{id}/edit',"BlogController@editTag")->middleware('auth')->middleware('admin');
Route::get('/admin/tags/{id}/delete',"BlogController@deleteTag")->middleware('auth')->middleware('admin');

