<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfirmieresController;

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



Route::get('/', [InfirmieresController::class,'index'])->name("home.page");


Route::get('infirmiere/ajouter', [InfirmieresController::class,'add_infirmiere'])->name("add.infirmiere");

Route::post('infirmiere/store', [InfirmieresController::class,'store'])->name("infirmiere.store");

Route::delete('delete/infirmiere/{id}', [InfirmieresController::class,'deleteInfirmiere'])->name("delete.infirmiere");

Route::get('modifier/infirmiere/{id}', [InfirmieresController::class,'modifierInfirmiere'])->name("modifier.infirmiere");

Route::put('update/infirmiere', [InfirmieresController::class,'updateInfirmiere'])->name("update.infirmiere");
