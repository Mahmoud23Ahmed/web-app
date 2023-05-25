<?php

use App\Models\Student;
use App\Models\subject;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Controllers\GeneratePdf;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\subRegistration;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\downloadController;
use App\Http\Controllers\DepartementController;

  

  Route::resource('/departements' , DepartementController::class);
  

  Route::resource('/subjects' , SubjectController::class);

 
  Route::resource('/student' , studentController::class);

 

 // Route::resource('/download' , doctorController::class);

  Route::resource('/registration' , subRegistration::class);

  Route::get('/gpdg' , [GeneratePdf::class , 'generate']);
  
  Route::view('upload' , 'upload');
  Route::post('upload' , [uploadController::class , 'index']);
  Route::get('download',  [downloadController::class , 'download'])->name("file.download");
  Route::get('pdf',  [downloadController::class, 'viewpdf']);

  Route::get('/doctor' , [doctorController::class,'index']);
  Route::get('/doctorCreate',[doctorController::class,'create'])->name("doctor.create");
  Route::post('/doctorCreate',[doctorController::class,'store'])->name("doctor.store");

  Route::delete('doctorDestroy{id}',[doctorController::class,'destroy'])->name("doctor.destroy");
  Route::get('/home',[loginController::class,'login']);
  Route::get('/logout',[LoginController::class,'logout']);

  Route::get('/generatepdf',[GeneratePdf::class,'generate'])->name("doctor.generate");

  Route::get('/upload',[uploadController::class,'uploadFiles'])->name("doctor.upload");

  Route::get('/dochome' ,function(){
    return view('doctorPage');
  });
  
  
  Route::get('/home1' ,function(){
    return view('home');
  });
  