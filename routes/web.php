<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Trang chủ
Route::get('/', [PageController::class, 'home'])->name('home');

// Giới thiệu
Route::get('/about', [PageController::class, 'about'])->name('about');

// Thực đơn
Route::get('/menu', [PageController::class, 'menu'])->name('menu');

// Chi tiết món
Route::get('/menu/{id}', [PageController::class, 'showDrink'])->name('menu.detail');

// Câu chuyện hạt cà phê
Route::get('/beans-story', [PageController::class, 'beansStory'])->name('beans.story');

// Liên hệ
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
