<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
});

/*
Route::get('/Student/all', function () {
    return view('Student.Index');
});*/

Route::get('/Student/all', [StudentController::class,'index'])->name('Student.name');
Route::get('/Student/create', [StudentController::class,'create'])->name('Student.create');
Route::POST('/Student/store', [StudentController::class,'store'])->name('Student.store');
Route::get('/Student/{student_id}', [StudentController::class,'edit'])->name('Student.edit');
Route::put('/Student/{student_id}', [StudentController::class,'update'])->name('Student.update');
Route::get('/delete/{student_id}', [StudentController::class,'delete'])->name('Student.delete');

/*
Remove student from all as prefix

route::group(['prefix' => 'Student'],function() {
Route::get('/all', [StudentController::class,'index'])->name('Student.name');
Route::get('/create', [StudentController::class,'create'])->name('Student.create');
Route::POST('/store', [StudentController::class,'store'])->name('Student.store');
});
*/
