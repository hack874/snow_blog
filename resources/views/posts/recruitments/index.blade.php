<x-app-layout>
    <x-slot name="header">
        <h1>スノボーSNS</h1>
        
    </x-slot>
        <form action="/recruitments/search" method="GET"> {{--スキー場のIDをsearchに送る--}}   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <select id="default-search" name="place_id" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
        
    </div>
            <option selected disabled>選択してください</option>
                @foreach ($places as $place)
                    <option value="{{ $place->id }}">{{ $place->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
      </div>
        </form>
        @if(isset($search_recruitments)){{--issetは変数に値が入ってるかどうか(変数が定義されているかどうか)--}}
        @foreach ($search_recruitments as $search_recruitment)
        <div class="recruitment mt-5 border-b-4 border-slate-200 flex items-center">
            <div class="mr-3 w-1/4 flex items-center">
                    <img
                    id="preview"
                      {{--isset画像が設定されているかどうか--}}
                      src="{{ isset($search_recruitment->user->profile_image) ? $search_recruitment->user->profile_image : ""}}"{{--条件,?,trueの時の実行内容:falseの時の実行内容　--}}
                      alt=""
                      class=" inline-block w-16 h-16 rounded-full object-cover border-none bg-gray-200">
                      <p><a href='/profiles/{{$search_recruitment->user->id}}'>{{$search_recruitment->user->name}}</a></p>
            </div>
            <div class="w-1/4">
                <p>{{ $search_recruitment->place->name }}</p> {{----}}
            </div>
            <div class="w-1/4">
                <p>{{$search_recruitment->date}}</p>
            </div>
            <div class="w-1/4">  
                <p>{{ $search_recruitment->comment }}</p>
            </div>
        </div>
        
        @endforeach
        @endif

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center mt-3">
                <div class="w-1/4"></div>
                <div class="w-1/4">ゲレンデ</div>
                <div class="w-1/4">日にち</div>
                <div class="w-1/4">コメント</div>
            </div> 
        @foreach ($recruitments as $recruitment) 
            <div class="recruitment mt-5 border-b-4 border-slate-200 flex items-center">
                <div class="mr-3 w-1/4 flex items-center">
                    <img
                    id="preview"
                      {{--isset画像が設定されているかどうか--}}
                      src="{{ isset($recruitment->user->profile_image) ? $recruitment->user->profile_image : ""}}"{{--条件,?,trueの時の実行内容:falseの時の実行内容　--}}
                      alt=""
                      class=" inline-block w-16 h-16 rounded-full object-cover border-none bg-gray-200">
                      <p><a href='/profiles/{{$recruitment->user->id}}'>{{$recruitment->user->name}}</a></p>
                </div>
                <div class="w-1/4">
                    <p>{{ $recruitment->place->name }}</p> {{----}}
                </div>
                <div class="w-1/4">
                    <p>{{$recruitment->date}}</p>
                </div>
                <div class="w-1/4">  
                    <p>{{ $recruitment->comment }}</p>
                </div>
            </div>
        @endforeach
        </div>
  
            
    
    </x-app-layout>