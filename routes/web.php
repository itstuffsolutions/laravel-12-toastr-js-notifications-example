<?php
  
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
 
Route::get('/', [ExampleController::class,'viewPage']);
Route::post('/store', [ExampleController::class,'store'])->name('store');
