<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class featuresController extends Controller
{
    //
    public function wallpaper(Request $request){
        $user_id = $request->user_id; //user found
        $data = DB::table('wallpapers')
            ->join('features', 'wallpapers.id', '=', 'features.id') 
            ->select('features.*')
            ->distinct() 
            ->get();
        return view("wallpaper", ['data' => $data,'user_id' => $user_id]);
    }

    public function notepad(Request $request)
    {   $user_id = $request->user_id; //user found
        $data = DB::table('notepads')
            ->join('features', 'features.id', '=', 'notepads.id') 
            ->select('features.*')
            ->distinct() 
            ->get();
        return view("notepad", ['data' => $data,'user_id' => $user_id]);
    }

    public function timer(Request $request){
        $user_id = $request->user_id; //user found
        $data = DB::table('timers')
            ->join('features', 'features.id', '=', 'timers.id') 
            ->select('features.*')
            ->distinct() 
            ->get();
        return view("timer", ['data' => $data,'user_id' => $user_id]);
    }
    public function profile_pic(Request $request){
        $user_id = $request->user_id; //user found
        $data = DB::table('profile_pics')
            ->join('features', 'features.id', '=', 'profile_pics.id') 
            ->select('features.*')
            ->distinct() 
            ->get();
        return view("profilePic", ['data' => $data,'user_id' => $user_id]);
    }
}
