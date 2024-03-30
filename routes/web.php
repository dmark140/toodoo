<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\TitlesController;
use Illuminate\Support\Facades\Route;



Route::get('/', [MainController::class,'index'])->name('home');
Route::post('/title', [TitlesController::class,'store'] )->name('title.create');
Route::post('/note', [NotesController::class,'store'] )->name('note.create');
