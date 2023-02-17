<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
    public function index(User $user)
    {
        return view ('posts/profiles/index')->with(['user' => $user]);
    }
}
