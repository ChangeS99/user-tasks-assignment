<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\User;

class UserController extends Controller
{
    //

    public function getAllUsers () {
        $data = User::all();
        return response()->json([
            "users" => $data
        ]);
    }

    public function questionQuery () {

            // user left join tasks on id
            $date = date('Y-m-d', time());
            // $data = User::where('age', '<', 30)
            // ->join('tasks', 'tasks.user_id', '=', 'users.id')
            // ->where('tasks.expire_date', '<', $date)
            // ->get();
            $data = User::with('tasks')
            ->where('age', '<', 30)
            ->join('tasks', 'tasks.user_id', '=', 'users.id')
            ->where('tasks.expire_date', '<', $date)
            ->select('users.*')
            ->get();
        
        // Suggested code may be subject to a license. Learn more: ~LicenseLog:3968873402.
            return response()->json([
                "pending" => $data
            ]);
        
   
    }
}
