<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function __construct()
    {
        // ログインしていなかったらログインページに遷移する（この処理を消すとログインしなくてもページを表示する）
        $this->middleware('auth');
    }
    
    public function index( Post $post) //urlで渡ってきた投稿データ
    {
        return view('posts/card')->with(['post' => $post]);//blade(card)に投稿データを渡してる
    }
    
   public function store(Request $request)
   {
       $comment = new Comment();
       $comment->comment = $request->comment;
       $comment->post_id = $request->post_id;
       $comment->user_id = Auth::user()->id;
       $comment->save();

       return redirect('/posts/'. $request->post_id. '/comments'); //ルートパラでもできるが複雑になるフォームで送っている時だけ
   }

    public function destroy(Comment $comment, Request $request)
    {   
        $comment->delete();
        return redirect('/posts/'. $comment->post_id. '/comments'); //$comment->post_id(コメントを削除したときの投稿id)に戻りたい
    }

}
