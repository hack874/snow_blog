<x-app-layout>
  <div class='container pt-8 max-w-7xl mx-auto px-4 md:ml-64 sm:ml-0 lg:px-8'>

    @foreach ($posts as $post)
      <!-- 投稿1件全体を囲むブロック -->
      <div class="border-b-4 border-slate-200 mt-5">

        <!-- 投稿ヘッダ部分 -->
        <div class="flex items-center justify-between flex-nowrap px-4 py-3">

          <!-- 左側：プロフィール画像と名前 -->
          <div class="flex items-center">
            <div class="ml-5">
              <img
                id="preview"
                src="{{ isset($post->user->profile_image) ? $post->user->profile_image : '' }}"
                alt="プロフィール画像"
                class="inline-block w-20 h-20 rounded-full object-cover border-none bg-gray-200">
            </div>
            <div class="profile mt-1 ml-3">
              <p class="mt-4 font-name text-lg font-semibold dark:text-white">
                <a href='/profiles/{{$post->user->id}}'>{{$post->user->name}}</a>
              </p>
            </div>
          </div>

          <!-- 右側：投稿日・フォローボタンなど -->
          <div class="text-right dark:text-white">
            @if(auth()->user()->id !== $post->user->id)
              @if(auth()->user()->isFollowing($post->user))
                <form method='post' action="{{ route('unfollow', $post->user) }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-sm text-blue-600 hover:underline">フォロー解除</button>
                </form>
              @else
                <form action="{{ route('follow', $post->user) }}" method="POST">
                  @csrf
                  <button type="submit" class="text-sm text-blue-600 hover:underline">フォローする</button>
                </form>
              @endif
            @endif

            <p class="text-gray-500 text-sm mt-1">投稿日: {{ $post->created_at->format('Y年m月d日') }}</p>

            @if(auth()->user()->id == $post->user->id)
              <form action="/posts/{{$post->id}}" id="form_{{$post->id}}" method="post" class="mt-1">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deletePost({{$post->id}})">
                  <img src="{{ asset('/images/option.png') }}" class="w-5 h-5 inline" alt="削除">
                </button>
              </form>
            @endif
          </div>
        </div>
        <!-- /投稿ヘッダ -->

        <!-- 投稿画像 -->
        @foreach ($post->images as $image)
          <div class="image flex justify-center">
            <img src="{{$image->path}}" class="w-1/2 object-cover rounded-md" alt="投稿画像"> 
          </div>
        @endforeach

        <!-- 投稿本文 -->
        <p class='body mt-3 px-6 dark:text-white'>{{ $post->comment }}</p>

        <!-- いいね・コメント -->
        <div class="flex px-6 mt-2">
          <div class="flex flex-col items-center">
            @if(auth()->user()->isLike($post->id))
              <img id="image_{{$post->id}}" class="w-5 h-5 cursor-pointer" src="{{asset('/images/love.png')}}" onclick="like({{$post->id}})">
            @else
              <img id="image_{{$post->id}}" class="w-5 h-5 cursor-pointer" src="{{asset('/images/heart01.svg')}}" onclick="like({{$post->id}})">
            @endif
            <p class="text-xs text-gray-500">いいね</p>
            <p id="count_{{ $post->id }}">{{ $post->likes->count() }}</p>
          </div>

          <div class="flex flex-col items-center ml-4">
            <img src="/images/comment01.svg" class="w-5 h-5">
            <p class="text-xs text-gray-500"><a href='posts/{{$post->id}}/comments'>コメント</a></p>
          </div>
        </div>

      </div> <!-- /投稿1件 -->
    @endforeach

  </div> <!-- /container -->

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