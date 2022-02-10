<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MBlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManageCategoryController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::resource('blogs', BlogController::class);

Route::resource('manage', MBlogController::class);

Route::resource('category', CategoryController::class);

Route::resource('manage_category', ManageCategoryController::class);


/*Route::get('/manage', function () {
    return view('blogs.manage');
});
*/
/*Route::get('/blogs', function () {
    return view('blogs.manage', ['blogtitle' => 'asdfg']);
});
*/
