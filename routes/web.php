<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/artikel/{year}/{month}/{day}/{slug}', [HomeController::class, 'show'])->name('post.show');
Route::get('/artikel', function() {
    abort(404);
});
Route::get('/category/{category:slug}', function(Category $category) {
    $post = $category->post;
    dd($post);
    // return view()
});