<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    
    public function store($postId)
    {
       //User.phpの関数をここで実行してる
        return Auth::user()->like($postId);
    }
    
}
