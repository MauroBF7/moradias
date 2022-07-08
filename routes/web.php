<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;



Route::resource('alunos',AlunoController::class);
//Route::get('/alunos/{nusp}', [AlunoController::class,'show']);
