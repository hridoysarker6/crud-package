<?php

 
use Hridoy\CrudPackage\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::resource('posts',PostController::class);