<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\SportKind;
use App\Models\SnowboardStyle;
use Cloudinary;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request, SportKind $sport_kind, SnowboardStyle $snowboard_style): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
            'sport_kinds'=> $sport_kind->get(),
            'snowboard_styles'=>$snowboard_style->get(), //モデルのインスタンスがデータを取得してviewに返す
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $input_image = $request->image;
        
        if(isset($input_image))
        {
            $upload_url = Cloudinary::upload($input_image->getRealPath())->getSecurePath(); //getrealpathがnullなものに使われている
            $request->user()->profile_image = $upload_url;
        }  //issetはnullか否かを判断している.条件分はここではisset.2%2とかと同じ
       
        
        $input_sportkinds = $request->sport_kinds;
        
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        
        $request->user()->save();
        $request->user()->sport_kinds()->attach($input_sportkinds);

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
