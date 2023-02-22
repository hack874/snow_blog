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
            <x-picture-input />
          　<x-input-error class="mt-2" :messages="$errors->get('picture')" />
      　</div>
            <a href="#">{{$user->name}}</a>
        <h3>お気に入りゲレンデ</h3>
        <p class='favorite_place'>
            {{$user->favorite_place}}
        </p>
        
        <h3>自己紹介</h3>
        <p class='introduction'>
            {{$user->introduction}}
        </p>
    </body>