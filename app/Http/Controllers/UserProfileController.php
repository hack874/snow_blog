<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
    public function index(User $user) //インスタンス名とルートパラメータを一致させる必要がある
    {
        return view ('posts/profiles/index')->with(['user' => $user]);
    }
}
