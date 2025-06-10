<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

Route::get('/', [VideoController::class, 'index']);
Route::get('/a', function () {
   return view('welcome');
});
