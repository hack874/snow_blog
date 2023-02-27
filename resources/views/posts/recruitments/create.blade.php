<x-app-layout>
    <x-slot name="header">
 
        

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    </x-slot>
    <body>
        <h1> 投稿する</h1>
      <form action="/recruitments/store" method="POST">
          @csrf

        <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
            <textarea id="message" name="recruitment[comment]" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" placeholder="募集しましょう">{{old('recruitment.comment')}}</textarea>
        </div>
          
        <div class="form-group">
            <label for="date2" class="col-form-label">日にちを入力</label>
            <input type="date" class="form-control" id="date" name="recruitment[date]" value='2023-03-03'>
        </div>
        
        
        <div class="mb-6">
            <label for="place" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">予定ゲレンデ</label>
            <input type="text" id="place" name ="recruitment[place]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="スキー場名">
        </div>
        
            <button type="submit" style="background-color: #2695E0; color: white; border-radius: 10px; padding: 0.5rem;">{{$errors->first("recruitment.comment")}}ツイート</button>
        {{--<div style="background-color: #E8F4FA; text-align: center;">
            <input type="text" name="recruitment[comment]" style="margin: 1rem; padding: 0 1rem; width: 70%; border-radius: 6px; border: 1px solid #ccc; height: 2.3rem;" placeholder="今どうしてる？">
            <button type="submit" style="background-color: #2695E0; color: white; border-radius: 10px; padding: 0.5rem;">{{$errors->first("recruitment.comment")}}ツイート</button>
        </div>--}}
       
        
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