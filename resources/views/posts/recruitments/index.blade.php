<app-layout>
    <x-slot name="header">
        <h1>スノボーSNS</h1>
        
    </x-slot>
    <body>
<div class='recruitments'>
             @foreach ($recruitments as $recruitment)
            <div class='recruitment'>
                    <p><a href='/posts/profiles/{{$post->user->id}}'>{{$post->user->name}}<a/></p>
                <div class="mr-3">
                    <img
                    id="preview"
                      {{--isset画像が設定されているかどうか--}}
                      src="{{ isset($post->user->profile_image) ? $post->user->profile_image : ""}}"{{--条件,?,trueの時の実行内容:falseの時の実行内容　--}}
                      alt=""
                      class=" inline-block w-16 h-16 rounded-full object-cover border-none bg-gray-200">
                      
                </div>
                <h2 class="comment mx-auto">{{$recruitment->comment}}</h2>
                <h2 class="place mx-auto">{{$recruitment->place}}</h2>
            @endforeach
            </div>
            
        </body> 
    </x-app-layout>