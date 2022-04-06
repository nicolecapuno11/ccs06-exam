<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\StudentController;

Route::get('begin', [StudentController::class, 'begin']);
Route::get('enter-grades', [StudentController::class, 'enterGrades']);
Route::get('compute-grades', [StudentController::class, 'computeGrades']);