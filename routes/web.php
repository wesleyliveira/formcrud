<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class,'index'])->name('user.index');
Route::get('/usershow/{user}', [UserController::class,'show'])->name('user.show');
Route::get('/usercreate', [UserController::class,'create'])->name('user.create');
Route::post('/userstore', [UserController::class,'store'])->name('user.store');
#METODO POST(CRIA NOVO DADO)
Route::get('/useredit/{user}', [UserController::class,'edit'])->name('user.edit');
Route::put('/userupdate/{user}', [UserController::class,'update'])->name('user.update'); #METODO PUT(ATUALIZA DADO EXISTENTE)
Route::delete('/userdestroy/{user}', [UserController::class,'destroy'])->name('user.destroy');
