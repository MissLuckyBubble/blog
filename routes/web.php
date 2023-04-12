<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


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

Route::get('/posts', function () {
    //latest means an order,
    // if we have a date that we want to order we can do latest('date')
    // we are doing with(..) to load everything, so we don't do +1 sqls for eevry post
    // $posts = Post::latest()->with('category','author')->get();
    // $posts = Post::latest()->without('category','author')->get();

    return view('posts',[
        'posts' => Post::latest()->get(),
        'categories' => Category::all()
    ]);
})->name('home');
Route::get('/', function () {
    return redirect('/posts');
});

//moje da dobavim v samiq  class getRouteKeyName ili tuk da kajem koi key iskame da izpolzvame  'posts/{post:slug}'
Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post,
        'categories' => Category::all()
    ]);
});

Route::get('categories/{category}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
})->name('categoriy');

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        //'posts' => $author->posts->load(['category','author'])
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});
