<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('プロフィール画面') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')
        
        <div>
            <x-picture-input />
          　<x-input-error class="mt-2" :messages="$errors->get('picture')" />
      　</div>
        
        <!--<div class="mb-6">-->
            <!--<label class="block mb-2 text-sm font-medium text-gray-900 text-orange-600" for="file_input">プロフィール画像</label>-->
            <!--<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " id="file_input" name="image"  type="file">-->

            <div>
                <x-input-label for="name" :value="__('ユーザー名')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
            
        
        <div class="">
            <label for="gender" class="">性別</label>
        
            <div class="" style="padding-top: 8px">
                @if($user->gender=='男性')
                    <input checked id="gender-m" type="radio" name="gender" value="男性">
                    <label for="gender-m">男性</label>
                    <input id="gender-f" type="radio" name="gender" value="女性">
                    <label for="gender-f">女性</label>
                @else 
                    <input id="gender-m" type="radio" name="gender" value="男性"> {{--「checked」ない場合、女性を選択したときにcheckが外れる--}}
                    <label for="gender-m">男性</label>
                    <input id="gender-f" type="radio" name="gender" value="女性">
                    <label for="gender-f">女性</label>
                @endif    
                @if ($errors->has('gender'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('gender') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="">
            <label for="age" class="">年齢</label>

            <div class="">
                <input id="age" type="number" min="1" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value={{$user->age}} required>
            </div>
        </div>


      
<h3 class="mb-4 font-semibold text-gray-900 dark:text-white">種類</h3>
<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
     @foreach($sport_kinds as $sport_kind)
       @if(in_array($sport_kind->id, $selected_sport_kinds)) {{--右辺が左辺と一致していた場合--}}
        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
            <div class="flex items-center pl-3">
                <input checked id="type" type="checkbox" name = "sport_kinds[]" value="{{$sport_kind->id}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="type" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$sport_kind->name}}</label>
            </div>
        </li>
        @else
        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
            <div class="flex items-center pl-3">
                <input id="type" type="checkbox" name ="sport_kinds[]" value="{{$sport_kind->id}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="type" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$sport_kind->name}}</label>
            </div>
        </li>
        @endif
     @endforeach
 </ul>
     
    
<h3 class="mb-4 font-semibold text-gray-900 dark:text-white">スノーボーダースタイル</h3>
<ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
     @foreach($snowboard_styles as $snowboard_style)
       @if(in_array($snowboard_style->id, $selected_snowboard_styles))
        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
            <div class="flex items-center pl-3">
                <input checked id="type" type="checkbox" name = "snowboard_styles[]" value="{{$snowboard_style->id}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="type" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$snowboard_style->name}}</label>
            </div>
        </li>
        @else
        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
            <div class="flex items-center pl-3">
                <input id="type" type="checkbox" name = "snowboard_styles[]" value="{{$snowboard_style->id}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="type" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$snowboard_style->name}}</label>
            </div>
        </li>
        @endif
     @endforeach
 </ul>
 
 <div class="mb-6">
    <label for="place" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">お気に入りゲレンデ</label>
    <input type="text" id="place" name ="favorite_place" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value = "{{old('user.favorite_place', $user->favorite_place)}}" placeholder="お気に入りのゲレンデを書きましょう">
  </div>
 
 <div class="mb-6">
    <label for="inrtoduction" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">自己紹介</label>
    <textarea id="introduction" name = "introduction" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="自己紹介しましょう">{{old('user.introduction', $user->introduction)}}</textarea>{{--第1はバリデーションかかってもintroを保持するためにある第2引数ではeditなどに必要--}}
  </div>
  
  
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
        
           

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
