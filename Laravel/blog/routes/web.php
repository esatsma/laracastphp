<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

Route::get('/', function (): View {
    return view('welcome');
})->name('home');

Route::get('/posts', [PostController::class, 'index'])->name('blog');

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories/{category:slug}', function (Category $category): View{
    return view('posts', [
        'posts' => $category->posts->load(['category', 'author']),
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
});

Route::get('authors/{author:username}', function (User $author): View{
    return view('posts', [
        'posts' => $author->posts->load(['category', 'author'])
    ]);
});

