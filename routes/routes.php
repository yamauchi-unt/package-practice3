<?php

use Illuminate\Support\Facades\Route;
use YamauchiUnt\PackagePractice3\Http\Controllers\HelloController;

Route::get('/hello', [HelloController::class, 'index']);
