<x-app-layout>
    <x-slot name="header">
    </x-slot>
    
    <nav class="p-3 border-gray-200 rounded bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
  <div class="container flex-wrap items-center justify-start mx-auto">
    
    <button data-collapse-toggle="navbar-hamburger" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-hamburger" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full" id="navbar-hamburger">
      <ul class="flex flex-col mr-auto mt-4 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded dark:bg-blue-600" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white">Pricing</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
    
    
    
       <div class='posts max-w-7xl mx-auto px-4 sm:px-6 lg:px-8'>
            @foreach ($posts as $post)
              <div class="border-b-4 border-slate-200 mt-5">
                <div class='post flex'>
                  <div class="ml-5 ">
                    <img
                      id="preview"
                      {{--isset画像が設定されているかどうか--}}
                      src="{{ isset($post->user->profile_image) ? $post->user->profile_image : ""}}"{{--条件,?,trueの時の実行内容:falseの時の実行内容　--}}
                      alt=""
                      class=" inline-block w-16 h-16 rounded-full object-cover border-none bg-gray-200">
                  </div>
                  <div class="profile mt-1 ml-2">
                   <p class="mt-4"><a href='/profiles/{{$post->user->id}}'>{{$post->user->name}}<a/></p>
                  </div>
                  
                </div>
                  @foreach ($post->images as $image)
                  <div class="image flex justify-center">
                    <img class src="{{$image->path}}" width="50%"> 
                  </div>
                  @endforeach
                    <p class='body mt-3'>{{ $post->comment }}</p>
                <div class="flex">
                  <div class="flex flex-col items-center">
                  @if(auth()->user()->isLike($post->id)){{--関数を実行しているので実際に値を入れる$post->idの形になる--}}
                      <img id="image_{{$post->id}}" class="w-5 h-5" src="{{asset('/images/heart.png')}}" onclick="like({{$post->id}})">
                  @else
                      <img id="image_{{$post->id}}" class="w-5 h-5" src="{{asset('/images/love.png')}}" onclick="like({{$post->id}})">
                   {{--画像が押されたときにjsのlike関数の引数に投稿のデータがわたって実行される--}}
                  @endif
                      <p class="text-xs">いいね</p>
                  </div>
                  <div class="flex flex-col items-center ml-2">
                    <img src="/images/comment.png" class="w-5 h-5">
                      <p class="text-xs"><a href='posts/{{$post->id}}/comments'>コメント</p>
                  </div>
                  <div class="flex flex-col items-center">
                  @if(auth()->user()->id==$post->user->id)
                  <form action="/posts/{{$post->id}}" id="form_{{$post->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="buttom" onclick="deletePost({{$post->id}})">
                    <img src="{{ asset('/images/remove.png') }}" class="w-5 h-5" alt="My Image">
                    </button>
                  </form>
                  @endif
                  </div>
                </div>
              </div>
            @endforeach
      </div>
          
    <script src="{{ asset('/js/like.js') }}"></script>
    <script>
      function deletePost(id){
        'use strict'
        
        if(confirm("本当に削除しますか")){
          document.getElementById(`form_${id}`).submit();
        }
      }
    </script>
</x-app-layout>