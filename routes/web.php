<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TruckTruckerController;



Route::get('/asociar',[TruckTruckerController::class,'index']);
Route::post('/store',[TruckTruckerController::class,'store'])->name('truck_trucker.store');




