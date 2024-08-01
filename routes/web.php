<?php

use App\Http\Controllers\AbstractFactoryPatternController;
use App\Http\Controllers\BuilderPatternController;
use App\Http\Controllers\FactoryPatternController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/builder-pattern/sql',[BuilderPatternController::class,'sqlQueryBuilder']);
Route::get('/builder-pattern/postgres',[BuilderPatternController::class,'postgresQueryBuilder']);

Route::get('/factory-pattern',[FactoryPatternController::class,'testCode']);

Route::get('/abstract-factory-pattern/ex1/{OS}',[AbstractFactoryPatternController::class,'testCodeEx1']);
Route::get('/abstract-factory-pattern/ex2',[AbstractFactoryPatternController::class,'testCodeEx2']);


Route::get('/test',[TestController::class,'test']);