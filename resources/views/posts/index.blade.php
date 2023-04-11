<x-app-layout>
       <div class='container pt-8 max-w-7xl mx-auto px-4 md:ml-64 sm:ml-0 lg:px-8'>
            @foreach ($posts as $post)
              <div class="border-b-4 border-slate-200 mt-5">
                <div class='flex align-items relative'>
                  <div class="ml-5">
                    <img
                      id="preview"
                      {{--isset画像が設定されているかどうか--}}
                      src="{{ isset($post->user->profile_image) ? $post->user->profile_image : ""}}"{{--条件,?,trueの時の実行内容:falseの時の実行内容　--}}
                      alt=""
                      class=" inline-block w-20 h-20 rounded-full object-cover border-none bg-gray-200">
                  </div>
                  <div class="profile mt-1 ml-2">
                    <p class="mt-4 font-name"><a href='/profiles/{{$post->user->id}}'>{{$post->user->name}}</a></p>
                  </div>
                  
                  <div class="mt-5 dark:text-white absolute right-0">
                    @if(auth()->user()->id !== $post->user->id)
                      @if(auth()->user()->isFollowing($post->user))
                        <form method='post' action="{{ route('unfollow', $post->user) }}">
                          @csrf
                          @method('DELETE')
                          <button type="submit">フォローを解除する</button>
                        </form>
                      @else
                        <form action="{{ route('follow', $post->user) }}" method="POST">
                          @csrf
                          <button type="submit">フォローする</button>
                          </form>
                      @endif
                    @endif
                        
                    @if(auth()->user()->id==$post->user->id)
                      <form action="/posts/{{$post->id}}" id="form_{{$post->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{$post->id}})">
                          <img src="{{ asset('/images/option.png') }}" class="w-5 h-5" alt="trash Image">
                        </button>
                      </form>
                    @endif
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
                      <p id="count_{{ $post->id }}">{{ $post->likes->count() }}</p>
                      
                  </div>
                  <div class="flex flex-col items-center ml-2">
                    <img src="/images/comment.png" class="w-5 h-5">
                      <p class="text-xs"><a href='posts/{{$post->id}}/comments'>コメント</a></p>
                  </div>
                 

                </div>
                
              </div>
            @endforeach
      </div>
          
    <script src="{{ asset('/js/like.js') }}"></script>
    <script src="{{ asset('js/InfinitiScroll.js')}}"></script>
    <script>
      function deletePost(id){
        'use strict'
        
        if(confirm("本当に削除しますか")){
          document.getElementById(`form_${id}`).submit();
        }
      }
    </script>
</x-app-layout>