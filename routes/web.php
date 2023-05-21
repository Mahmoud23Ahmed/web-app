<?php

use App\Models\Student;
use App\Models\subject;
use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\subRegistration;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DepartementController;


  Route::resource('/departements' , DepartementController::class);


  Route::resource('/subjects' , SubjectController::class);

 
  Route::resource('/student' , studentController::class);

  Route::resource('/doctor' , doctorController::class);

  Route::resource('/registration' , subRegistration::class);

  Route::get('/home' , [loginController::class , 'generate']);