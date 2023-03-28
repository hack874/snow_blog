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
use JD\Cloudder\Facades\Cloudder;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.D
     */
     
    public function show(User $user) //インスタンス名とルートパラメータを一致させる必要がある
    {
        return view ('profile/show')->with(['user' => $user]);
        
    }
     
    public function edit(SportKind $sport_kind, SnowboardStyle $snowboard_style): View
    {
        $selected_sport_kinds=[];
        if(isset(Auth::user()->sportKinds)){
            foreach(Auth::user()->sportKinds as $sport_kind){
                array_push($selected_sport_kinds, $sport_kind->id); //配列にスポーツの種類のiDを入れてる
            }
        }
        
        $selected_snowboard_styles=[];
        if(isset(Auth::user()->snowboardStyles)){
            foreach(Auth::user()->snowboardStyles as $snowboard_style){
                array_push($selected_snowboard_styles, $snowboard_style->id);
            }
        }
        return view('profile.edit', [
            'user' => Auth::user(),
            'sport_kinds'=> $sport_kind->get(),
            'snowboard_styles'=>$snowboard_style->get(), //モデルのインスタンスがデータを取得してviewに返す
            'selected_sport_kinds'=>$selected_sport_kinds,
            'selected_snowboard_styles'=>$selected_snowboard_styles
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {   
        
        $input_image = $request->picture;
    
       
       
        
        $input_sportkinds = $request->sport_kinds;
        $input_snowboardstyles = $request->snowboard_styles;
        
        $request->user()->fill($request->safe()->only(['name', 'email', 'age', 'gender', 'region', 'password', 'favorite_place', 'introduction', 'profile_image']));
         if(isset($input_image))
        {
            $upload_url = Cloudinary::upload($input_image->getRealPath())->getSecurePath(); //getrealpathがnullなものに使われている
            $request->user()->profile_image = $upload_url;
        }  //issetはnullか否かを判断している.条件分はここではisset.2%2とかと同じ

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        
        
        $request->user()->save();
        Auth::user()->sportKinds()->sync($input_sportkinds);
        Auth::user()->snowboardStyles()->sync($input_snowboardstyles);

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
