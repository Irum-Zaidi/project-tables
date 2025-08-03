<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[StudentController::class, 'showStudents'])->name('show.students');
Route::get('/union',[StudentController::class, 'uniondata'])->name('union.students');
Route::get('/when',[StudentController::class, 'whendata'])->name('when.students');
Route::get('/chunk',[StudentController::class, 'chunkdata'])->name('chunk.students');