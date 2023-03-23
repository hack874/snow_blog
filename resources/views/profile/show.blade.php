<x-app-layout>
      <div class="container pt-8 max-w-7xl mx-auto px-4 md:ml-64 sm:ml-0 lg:px-8">
          <h2 class="text-4xl">プロファイル画面</h2>
        <div class="flex items-center">
            <img
                id="preview"
                {{--isset画像が設定されているかどうか--}}
                src="{{ isset($user->profile_image) ? $user->profile_image : "/images/check.png"}}"{{--条件,?,trueの時の実行内容:falseの時の実行内容　--}}
                alt=""
                class="inline-block w-64 h-64 rounded-full object-cover border-none bg-gray-200">
            <p class="ml-2">{{$user->name}}</p>
        </div>
        <h3 class="text-xl">お気に入りゲレンデ</h3>
        <p class='favorite_place'>
            {{$user->favorite_place}}
        </p>
        <label for="age" class="col-md-4 col-form-label text-md-right">年齢:{{$user->age}}</label>
        <h3>種類</h3>
        <div class="flex items-center">
            @foreach($user->sportKinds as $sport_kind)
                @if($sport_kind->name=="スノーボード")
                    <img src="/images/check.png" class="w-4 h-4">
                    <label for="type" class="check w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$sport_kind->name}}</label> {{--多対多の場合foreachで回す--}}
                @else
                    <img src="/images/check.png" class="w-4 h-4">
                    <label for="type" class="check w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$sport_kind->name}}</label>
                @endif
            @endforeach
        </div>
        <h3>スノーボードスタイル</h3>
        <div class="flex items-center">
           @foreach($user->snowboardStyles as $snowboard_style)
            @switch($snowboard_style->name)
                @case('フリースタイル')
                    <img src="/images/check.png" class="w-4 h-4">
                    <label for="type" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$snowboard_style->name}}</label>
                    @break
                @case('パーク')
                    <img src="/images/check.png" class="w-4 h-4">
                    <label for="type" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$snowboard_style->name}}</label>
                    @break
                @case('ジブ')
                    <img src="/images/check.png" class="w-4 h-4">
                    <label for="type" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$snowboard_style->name}}</label>
                    @break
                @case('グラトリ')
                    <img src="/images/check.png" class="w-4 h-4">
                    <label for="type" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$snowboard_style->name}}</label>
                    @break
                @case('パウダー')
                    <img src="/images/check.png" class="w-4 h-4">
                    <label for="type" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$snowboard_style->name}}</label>
                    @break
            @endswitch
          @endforeach
        </div>
        <h3>自己紹介</h3>
        <p class='introduction'>
            {{$user->introduction}}
        </p>
        </div>
            
  
</x-app-layout>
    
    