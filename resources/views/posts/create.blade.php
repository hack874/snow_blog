<x-app-layout>
    <x-slot name="header">
 
        

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    </x-slot>
    <body>
      <form action="/posts" method="POST" enctype="multipart/form-data">
          @csrf
         <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 text-orange-600" for="file_input">画像</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " id="file_input" name="images_array[]"  type="file" multiple="multiple">
        </div>
        
        <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">コメント</label>
            <textarea id="message" name="post[comment]" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" placeholder="コメント">{{old('post.comment')}}</textarea>
        </div>
        
        
         <div style="background-color: #E8F4FA; text-align: center;">
            <label for="place" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ゲレンデ</label>
            <input type="text" name="post[place]" style="margin: 1rem; padding: 0 1rem; width: 70%; border-radius: 6px; border: 1px solid #ccc; height: 2.3rem;" placeholder="ゲレンデ名">

        </div>
            <button type="submit" style="background-color: #2695E0; color: white; border-radius: 10px; padding: 0.5rem;">{{$errors->first("post.comment")}}ツイート</button>
        </form>
        
         
    </body>
    </x-app-layout>
