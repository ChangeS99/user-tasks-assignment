<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Task;
class TaskController extends Controller
{
    //

    public function getAllTasks () {
        $data = Task::all();
        return response()->json([
            "tasks" => $data
        ]);
    }
}
