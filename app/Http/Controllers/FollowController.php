<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function store(User $user)
    {   
        auth()->user()->follow($user);
        return back();
    }
    
    public function destroy(User $user)
    {
        auth()->user()->unfollow($user);
        return back();
    }
    
    public function following(User $user)
    {
        $following = $user->following;
        return view('following', compact('following'));
    }
    
    public function followers(User $user)
    {
        $followers = $user->followers;
        return view('followers', compact('followers'));
    }
    
}

