<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DepartementtController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/Apropos', [PagesController::class, 'apropos'])->name('apropos');
Route::get('/Projet', [PagesController::class, 'projet'])->name('projet');
Route::get('/Contribuez', [PagesController::class, 'contribuez'])->name('contribuez');
Route::get('/Equipe', [PagesController::class, 'equipe'])->name('equipe');
Route::get('/Departement', [PagesController::class, 'departement'])->name('departement');
Route::get('/Contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/ShowBlog/{id}', [PagesController::class, 'show'])->name('showBlog');

//Blog

Route::get('/Blog', [PagesController::class, 'blog'])->name('blog');
Route::resource('blog', PagesController::class);

// Administration
Route::get('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/login', [AdminController::class, 'submit_login']);
Route::get('/admin/dasboard', [AdminController::class, 'dasboard'])->middleware('is_admin');
Route::get('/admin/logout', [AdminController::class, 'logout']);


//Posts
Route::get('/admin/post/{id}/delete',[PostController::class, 'destroy']);
Route::resource('/admin/post',PostController::class);


//Departement
Route::get('/admin/departement/{id}/delete',[DepartementtController::class, 'destroy']);
Route::resource('/admin/departement',DepartementtController::class);

//Image
Route::resource('/admin/image',ImageController::class);
Route::get('/image/galerie',[ImageController::class, 'galerie']);
Route::get('/admin/image/{id}/delete',[ImageController::class, 'destroy']);


//Equipe
Route::get('/admin/equipe/{id}/delete',[EquipeController::class, 'destroy']);
Route::resource('/admin/equipe',EquipeController::class);

//User
Route::get('/admin/user/{id}/delete',[UserController::class, 'destroy']);
Route::resource('/admin/user',UserController::class);
Auth::routes();

Route::get('home',[HomeController::class,'index'])->name('home');
Route::resource('userSimple',HomeController::class);


