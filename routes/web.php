<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/chi-siamo', [PublicController::class, 'about'])->name('about');
Route::get('/servizi', [PublicController::class, 'services'])->name('services');
Route::get('/crea-articolo', [ArticleController::class, 'create'])->name('article.create');
Route::post('/crea-articolo/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/catalogo', [PublicController::class, 'blog'])->name('blog');
Route::get('/articolo/dettaglio/{article}', [PublicController::class, 'articleDetail'])->name('article.detail');
Route::get('/articolo/modifica/{article}', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/articolo/aggiorna/{article}', [ArticleController::class, 'update'])->name('article.update');
Route::delete('/articolo/elimina/{article}', [ArticleController::class, 'destroy'])->name('article.delete');
Route::get('/articoli/{user}', [PublicController::class, 'userArticles'])->name('user.articles');
Route::get('/{category}/articoli', [PublicController::class, 'categoryArticles'])->name('category.articles');
Route::get('/lavora-con-noi', [PublicController::class, 'workWithUs'])->name('work.with.us');
Route::post('/lavora-con-noi/invio', [PublicController::class, 'workWithUsSubmit'])->name('work.with.us.submit');
Route::get('/articolo-ricerca', [PublicController::class, 'searchArticle'])->name('search');
Route::get('/dashboard-admin', [AdminController::class, 'dashboard'])->name('dashboard.admin');
Route::get('/dashboard-admin/scelta/{user}/{choice}', [AdminController::class, 'acceptRequest'])->name('admin.choice');
Route::put('/dashboard-admin/tags/modifica/{tag}', [AdminController::class, 'updateTag'])->name('admin.tags.update');
Route::delete('/dashboard-admin/tags/elimina/{tag}', [AdminController::class, 'destroyTag'])->name('admin.tags.delete');
Route::put('/dashboard-admin/categorie/modifica/{category}', [AdminController::class, 'updateCategory'])->name('admin.categories.update');
Route::delete('/dashboard-admin/categorie/elimina/{category}', [AdminController::class, 'destroyCategory'])->name('admin.categories.delete');
Route::get('/dashboard-revisor/', [RevisorController::class, 'dashboard'])->name('dashboard.revisor');
Route::get('/dashboard-revisor/article-detail/{article}', [RevisorController::class, 'articleDetail'])->name('revisor.article.detail');
Route::get('/dashboard-revisor/scelta/{article}/{choice}', [RevisorController::class, 'choiceRequest'])->name('revisor.choice');
