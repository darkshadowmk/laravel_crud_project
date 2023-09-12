<?php

use App\Http\Controllers\Studentcontroller;

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

Route::get('/',[Studentcontroller::class,"index"])->name("students.view");
Route::get("/create",[Studentcontroller::class,"create"])->name("students.create");
Route::post("/store",[Studentcontroller::class,"store"])->name("students.store");
Route::get("/{student}/show",[Studentcontroller::class,"show"])->name("students.show");
Route::get('/{student}/edit',[Studentcontroller::class,"edit"])->name("students.edit");
Route::put("/{student}",[Studentcontroller::class,"update"])->name("students.update");
Route::delete("/{student}",[Studentcontroller::class,"destroy"])->name("students.delete");