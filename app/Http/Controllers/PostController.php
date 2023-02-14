<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);  
    }
    
    public function image()
    {
        $post = Post::all();
        return view('posts/image', compact('posts'));
    }
    
    public function create(Request $request)
    {
        //POST
        if($request->isMethod('POST')){
            dd($request->all());
        }
        return view('post.create');
    }
    
}
