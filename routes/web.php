<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/Apropos', [PagesController::class, 'apropos'])->name('apropos');
Route::get('/Projet', [PagesController::class, 'projet'])->name('projet');
Route::get('/Contribuez', [PagesController::class, 'contribuez'])->name('contribuez');
Route::get('/Equipe', [PagesController::class, 'equipe'])->name('equipe');
Route::get('/Departement', [PagesController::class, 'departement'])->name('departement');
Route::get('/Contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/Blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/ShowBlog', [PagesController::class, 'showBlog'])->name('showBlog');
