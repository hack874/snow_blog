<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cloudinary;
use JD\Cloudder\Facades\Cloudder;

class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {   
        //dd($posts);
        $posts = Post::with('user', 'likes')->get();
        return view('posts/index', compact('posts'));
    }   
    
    public function create()
    {
        return view('posts/create');
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
        //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];//formから送られてきたものがrequestに入り,その中でname属性でpostというのがinputに入る
        $post->user_id = Auth::id();
        $post->fill($input)->save(); //fill使うと複数(title, comment)のプロパティに同時にデータを挿入できる
        
        $images = $request->file('images_array');
        if(isset($images))//配列の中身があったらtrue 、isset.
        {               
            foreach($images as $image) //送られてきた画像分
            {   
                $new_image = new Image; //インスタン作成 imagetableに画像を入れるためにインスタンスを作る cloudinaryから帰ってきたurlを保存する場所がprofとは異なる
                $upload_url = Cloudinary::upload($image->getRealPath())->getSecurePath(); //$upload_urlにcloudinaryのpathが入ってる
                $new_image->path = $upload_url; //new_imageのpathに$uplord_urlを代入
                $new_image->post_id = $post->id;
                $new_image->save();
            }
        }
        return redirect('/posts/' . $post->id);  
    }
    
    public function edit(Post $post)
    {
    return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
    $input_post = $request['post'];
    $post->fill($input_post)->save();//fill関数は何も編集してない場合、updated_atが変化しないようにする

    return redirect('/posts/' . $post->id); //controllerからweb.phpに戻る
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    
}
