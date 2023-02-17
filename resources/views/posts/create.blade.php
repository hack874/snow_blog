<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1> 投稿する</h1>
      <form action="/posts" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 text-orange-600" for="file_input">画像</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " id="file_input" name="images_array[]"  type="file" multiple="multiple">
          
        </div>
            <div class="title">
              <h2>Title</h2>
              <input type="text" name=post[title] placeholder="タイトル">
              <p class = "title__error" style="color:red">{{ $errors->first("post.title")}}</p>
            </div>
              <div class="comment">
              <h2>comment</h2>
              <textarea name="post[comment]" placeholder="コメント"></textarea>
              <p class= "body__error" style="color:red">{{$errors->first("post.comment")}}</p>  
             </div>
              <input type="submit" value="store">
        </form>
        
         
    </body>
</html>