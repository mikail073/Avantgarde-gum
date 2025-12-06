<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
// 1) Главная страница сайта (без авторизации)
Route::get('/', function () {
    return view('home');
});

// если хочешь, чтобы /home тоже работал:
Route::get('/home', function () {
    return view('home');
})->name('home');


// 2) Публичные страницы (всё доступно без логина)

Route::get('/home', fn () => view('home'))->name('home');
Route::get('/price/lower', fn () => view('price.lower'))->name('price.lower');
Route::get('/price/upper', fn () => view('price.upper'))->name('price.upper');
Route::get('/trainers', fn () => view('trainers'))->name('trainers');
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/gallery', fn () => view('gallery'))->name('gallery');
Route::get('/health', fn () => view('health'))->name('health');
Route::get('/nutrition', fn () => view('nutrition'))->name('nutrition');






// 3) Личный кабинет (оставляем под auth, если вдруг будешь пользоваться)



// 4) ВАЖНО: не трогаем, тут лежат маршруты login / register / logout
require __DIR__ . '/auth.php';
