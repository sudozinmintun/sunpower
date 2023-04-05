<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('news', NewsController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('about', AboutController::class);



Route::get('en', [LangController::class, 'lang_eng'])->name('en');
Route::get('jp', [LangController::class, 'lang_jp'])->name('jp');
