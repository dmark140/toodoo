<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\NotesStatusController;
use App\Http\Controllers\TitlesController;
use Illuminate\Support\Facades\Route;


Route::put('/noteStatus{id}', [NotesStatusController::class,'update'] )->name('noteStatus.put');

Route::get('/', [MainController::class,'index'])->name('home');
Route::post('/title', [TitlesController::class,'store'] )->name('title.create');
Route::delete('/title{id}', [TitlesController::class,'delete'] )->name('title.destroy');
Route::put('/title{id}', [TitlesController::class,'update'] )->name('title.put');


Route::post('/note', [NotesController::class,'store'] )->name('note.create');
Route::delete('/note/{id}', [NotesController::class,'delete'] )->name('note.destroy');
Route::put('/note{id}', [NotesController::class,'update'] )->name('note.put');

