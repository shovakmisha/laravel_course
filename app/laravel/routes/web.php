<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TesttwoController;
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

    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
    //Route::view('/', 'welcome');

    // Route::redirect('/home', '/', 302);

    Route::get('/home', function () {
        return view('home.index');
    })->name('home');

    // По роуту test викличеться клас LogMiddleware
    // Можна було б і запихнути цілий клас у middleware - middleware(App\Http\Middleware\LogMiddleware::class)
    Route::get('/test', TestController::class)->middleware('test');

    Route::get('/testtwo', [TesttwoController::class, 'index']);


    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');
    Route::post('/blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');


// Це важкувато пояснити, але ця одна строчка заміняє всі верхні строчки(крім like). Якщо заглянути в документацію, там написано, що вона генерить всі роути для роботи з posts
// Так як він не дуже гучкий і створює зразу 7 методів класу PostController, можна якісь методи виключити. Кароче з цим можна погратись добавляючи only, exept, ...
// php artisan make:controller Post/CommentController --resource - Створить контроллер у якому вже є ці всі 7 методів
// Route::resource('posts', PostController::class);
// Route::resource('posts', PostController::class)->only([
//  'index', show
//]);
// Створю роут через ресурс, щоб краще зрозуміти. http://localhost:5555/posts/111/comments/777/edit - теж підійде під нього. Як я вже писав - ця строчка створить 7 методів
// і метод edit теж буде в класі CommentController.
// Треба подивити на верхні роути і сопоставити що буде коли роути додаються автоматом як в документації - https://laravel.com/docs/9.x/controllers#resource-controllers
//('posts/{post}/comments', 'posts/{post}/comments', 'posts/{post}/comments{comment}/edit')
Route::resource('posts/{post}/comments', \App\Http\Controllers\Post\CommentController::class);

Route::middleware('guest')->group(function (){
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login.store');
});




    // завжди пишеться вкінці
    Route::fallback(function (){
       return 'Fallback';
    });
