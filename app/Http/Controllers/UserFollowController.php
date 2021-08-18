<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    public function store($id)
    {
        \Auth::user()->follow($id);
        return back();
    }
    
    public function destroy($id)
    {
        \Log::info($id);
        \Auth::user()->unfollow($id);
        return back();
    }
}
