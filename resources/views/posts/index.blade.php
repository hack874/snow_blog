<x-app-layout>
    <x-slot name="header">
        <h1>スノボーSNS</h1>
        <a href="/posts/create" "text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2">新規投稿</a>
    </x-slot>
    
    <body>
      
<nav class="p-3 border-gray-200 rounded bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    
    <button data-collapse-toggle="navbar-hamburger" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-hamburger" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full" id="navbar-hamburger">
      <ul class="flex flex-col mt-4 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded dark:bg-blue-600" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Search</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white">Post</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Recruitment</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
   
       <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                   <p><a href='/posts/profiles/{{$post->user->id}}'>{{$post->user->name}}<a/></p>
                   <h2 class='title'>{{ $post->title }}</h2>
                  @foreach ($post->images as $image)
                    <img src="{{$image->path}}" width="25%"> 
                  @endforeach
                    <p class='body'>{{ $post->comment }}</p>
                  @if(auth()->user()->isLike($post->id)){{--関数を実行しているので実際に値を入れる$post->idの形になる--}}
                    <img id="image_{{$post->id}}" class="w-5 h-5" src="{{asset('/images/heart.png')}}" onclick="like({{$post->id}})">
                  @else
                    <img id="image_{{$post->id}}" class="w-5 h-5" src="{{asset('/images/love.png')}}" onclick="like({{$post->id}})">
                   {{--画像が押されたときにjsのlike関数の引数に投稿のデータがわたって実行される--}}
                  @endif
            @endforeach
      </div>
          
         
       

    <script src="{{ asset('/js/like.js') }}"></script>
    </body>
</x-app-layout>