<x-app-layout>
      <div class="container pt-8 max-w-7xl mx-auto w-3/5 text-center px-4 md:ml-64 sm:ml-0 lg:px-8 dark:text-white">
          <h2 class="text-4xl">プロファイル画面</h2>
        <div class="flex items-center">
            <img
                id="preview"
                {{--isset画像が設定されているかどうか--}}
                src="{{ isset($user->profile_image) ? $user->profile_image : "/images/check.png"}}"{{--条件,?,trueの時の実行内容:falseの時の実行内容　--}}
                alt=""
                class="inline-block w-40 h-40 rounded-full object-cover border-none bg-gray-200">
            <div class="flex flex-col ml-10 text-4xl">{{$user->name}}
                <div class="text-base">年齢:{{$user->age}}</div>
            </div>
        </div>
        <h3 class="text-xl">お気に入りゲレンデ</h3>
        <p class='border-b-2 border-slate-200'>
            {{$user->favorite_place}}
        </p>
        
        <h3>種類</h3>
        <div class="flex items-center border-b-2 border-slate-200">
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
        <div class="flex items-center border-b-2 border-slate-200">
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
        <p class='border-b-4 border-slate-200'>
            {{$user->introduction}}
        </p>
        </div>
            
  
</x-app-layout>
    
    