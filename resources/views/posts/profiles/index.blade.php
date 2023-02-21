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
        <div class ="profile">
            <img class="rounded" src="{{$user->profile_image}}">
            <p class="text-base font-semibold leading-none text-gray-900 dark:text-white">
            <a href="#">{{$user->name}}</a>
        </p>
            
            
        </div>
     
       
</div>
    </body>