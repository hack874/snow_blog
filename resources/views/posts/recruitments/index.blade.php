<x-app-layout>
    <x-slot name="header">
        <h1>スノボーSNS</h1>
        
    </x-slot>
        <form class="form-inline my-2 my-lg-0 ml-2">
            <div class="form-group">
                <input type="search" class="form-control mr-sm-2" name="search"  value="{{request('search')}}" placeholder="キーワードを入力" aria-label="検索...">
            </div>
                <input type="submit" value="検索" class="btn btn-info">
        </form>
        <div class='recruitments'>
            @foreach ($recruitments as $recruitment)
            <div class='recruitment'>
                    <p><a href='/posts/profiles/{{$recruitment->user->id}}'>{{$recruitment->user->name}}<a/></p>
                <div class="mr-3">
                    
                    <img
                    id="preview"
                      {{--isset画像が設定されているかどうか--}}
                      src="{{ isset($recruitment->user->profile_image) ? $recruitment->user->profile_image : ""}}"{{--条件,?,trueの時の実行内容:falseの時の実行内容　--}}
                      alt=""
                      class=" inline-block w-16 h-16 rounded-full object-cover border-none bg-gray-200">
                      
                </div>
                <h2 class="comment mx-auto">{{$recruitment->comment}}</h2>
                <h2 class="place mx-auto">{{$recruitment->place}}</h2>
            </div>
            @endforeach
    </div>
            
    
    </x-app-layout>