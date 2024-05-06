<?php

use Illuminate\Support\Facades\Route;

// use DB;

use \App\Models\User;
use \App\Models\Task;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\TaskController;

Route::get('/', function () {

    $date = date('Y-m-d', time());

    dd($date);
});



Route::get("/users", [UserController::class, 'getAllUsers']);

Route::get("/tasks",[TaskController::class, 'getAllTasks']);

Route::get("/question",[UserController::class, 'questionQuery']);


