<?php

use Illuminate\Support\Facades\Route;
use Nasteng\SayHello\Http\Controllers\HelloController;

Route::get('/hello', [HelloController::class, 'index']);
