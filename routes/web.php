<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
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

// Route::group(['middleware' => 'locale'], function () {

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('search', [App\Http\Controllers\HomeController::class, 'create'])->name('search');
Route::get('blogs', [App\Http\Controllers\Client\BlogsController::class, 'index'])->name('blogs.index');
Route::get('/email/{slug}', [App\Http\Controllers\HomeController::class, 'email'])->name('email');
Route::get('/tags/search', [App\Http\Controllers\Api\TagController::class, 'searchTags'])->name('tags.search');

Route::get('refresh', [App\Http\Controllers\HomeController::class, 'refresh'])->name('refresh');
Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('change-language');

Route::get('/{slug}', [App\Http\Controllers\HomeController::class, 'show'])->name('blogs');

Route::get('/auth/google', [App\Http\Controllers\Auth\GoogleLoginController::class, 'loginWithGoogle'])->name('google.login');
Route::any('/api/callback', [App\Http\Controllers\Auth\GoogleLoginController::class, 'callbackFromGoogle'])->name('callback');


Route::group(['prefix' => '/admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'isAdmin']], function () {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('permissions', PermissisonController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('tags', TagController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('codes', CodeController::class);
    Route::resource('products', ProductController::class);
    Route::resource('fields', FieldController::class);
    Route::resource('jobs', JobsController::class);

    Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
    Route::get('/user/search', [App\Http\Controllers\Api\UserController::class, 'searchTags'])->name('users.search');

    Route::get('/logs', [App\Http\Controllers\Admin\LogController::class, 'index'])->name('admin.log');
    Route::get('/logs/show/{file_name}', [App\Http\Controllers\Admin\LogController::class, 'show'])->name('admin.log.show');

    Route::controller(BackupController::class)->group(function () {

        Route::get('backups', 'index')->name('backup.index');
        Route::get('backups/create', 'create')->name('backup.create');
        Route::get('backups/{file_name}', 'download')->name('backup.download');
        Route::delete('backups/{file_name}', 'destroy')->name('backup.delete');
    });

    Route::controller(ExportController::class)->group(function () {

        Route::get('exportTags', 'exportTags')->name('exportTags');
        Route::get('exportCategories', 'exportCategories')->name('exportCategories');
        Route::get('exportArticles', 'exportArticles')->name('exportArticles');
        Route::get('exportUsers', 'exportUsers')->name('exportUsers');
    });

    Route::controller(TruncateController::class)->group(function () {

        Route::post('resetTags', 'resetTags')->name('resetTags');
        Route::post('resetCategories', 'resetCategories')->name('resetCategories');
        Route::post('resetArticles', 'resetArticles')->name('resetArticles');
        Route::post('resetUsers', 'resetUsers')->name('resetUsers');
    });
});
// });

// http://codemarket.com/laravel-websockets