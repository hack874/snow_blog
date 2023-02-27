<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
   
    
    public function store(User $user)
    {
        $image = $request->file('profileimage');
        if(isset($images))
        {
            $upload_url = Cloudinary::upload($image->getRealPath())->getSecurePath();
            $user->profile_image = $upload_url;
            $user->id = $user->id;
            $uer->save();
        }
        return redirect('posts/profile/index' . $user->id);
    }
    
    public function profile(user $user) {
        $user = Auth::user();
        return redirect('profile', ['user' => $user]);
    }
}
