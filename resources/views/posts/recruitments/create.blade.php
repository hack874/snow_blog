<x-app-layout>
    <x-slot name="header">
 
        

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    </x-slot>
    <body>
        <h1> 投稿する</h1>
      <form action="/posts" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 text-orange-600" for="file_input">画像</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " id="file_input" name="images_array[]"  type="file" multiple="multiple">
          
        </div>
        
        <div style="background-color: #E8F4FA; text-align: center;">
                <input type="text" name="recruitment[comment]" style="margin: 1rem; padding: 0 1rem; width: 70%; border-radius: 6px; border: 1px solid #ccc; height: 2.3rem;" placeholder="今どうしてる？">
                <button type="submit" style="background-color: #2695E0; color: white; border-radius: 10px; padding: 0.5rem;">{{$errors->first("recruitment.comment")}}ツイート</button>
        </div>
       
        
            <!--<div class="title">-->
            <!--  <h2>Title</h2>-->
            <!--  <input type="text" name=post[title] placeholder="タイトル">-->
            <!--  <p class = "title__error" style="color:red"></p>-->
            <!--</div>-->
            <!--  <div class="comment">-->
            <!--  <h2>comment</h2>-->
            <!--  <textarea name="post[comment]" placeholder="コメント"></textarea>-->
            <!--  <p class= "body__error" style="color:red"></p>  -->
            <!-- </div>-->
            <!--  <input type="submit" value="store">-->
        </form>
        
         
    </body>
    </x-app-layout>