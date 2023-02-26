<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Userprofile</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      <div>
        <div class="mr-3">
            <img
                id="preview"
                {{--isset画像が設定されているかどうか--}}
                src="{{ isset($post->user->profile_image) ? $post->user->profile_image : ""}}"{{--条件,?,trueの時の実行内容:falseの時の実行内容　--}}
                alt=""
                class=" inline-block w-16 h-16 rounded-full object-cover border-none bg-gray-200">
        </div>
      </div>
            <a href="#">{{$user->name}}</a>
        <h3>お気に入りゲレンデ</h3>
        <p class='favorite_place'>
            {{$user->favorite_place}}
        </p>
        <label for="type" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$sport_kind->name}}</label>
        
        <h3>自己紹介</h3>
        <p class='introduction'>
            {{$user->introduction}}
        </p>
    </body>