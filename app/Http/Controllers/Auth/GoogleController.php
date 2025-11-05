<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    
    public function handleGoogleCallback()
    {
        // Googleからユーザー情報を取得
        $googleUser = Socialite::driver('google')->user();
        
        // データベースで既存ユーザーを検索
        $user = User::where('google_id', $googleUser->id)
                   ->orWhere('email', $googleUser->email)
                   ->first();

        if ($user) {
            // 既存ユーザーの場合：ログイン
            Auth::login($user);
        } else {
            // 新規ユーザーの場合：作成してログイン
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
                'password' => Hash::make(uniqid()),
            ]);
            
        }
        
        return redirect('/dashboard');

        
    }
}
