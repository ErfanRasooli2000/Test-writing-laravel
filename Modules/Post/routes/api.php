<?php

use Illuminate\Support\Facades\Route;
use Modules\Post\Http\Controllers\PostController;

Route::get("/test" , [PostController::class , 'test']);
