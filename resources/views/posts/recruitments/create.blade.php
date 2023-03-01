<x-app-layout>
    <x-slot name="header">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    </x-slot>
    <body>
        <h1> 投稿する</h1>
        <form action="/recruitments/store" method="POST">
          @csrf
          
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <select id="default-search" name="recruitment[place_id]" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
        
        </div>
        <option value="">スキー場を選択してください</option>
                @foreach ($places as $place)
                    <option value="{{ $place->id }}">{{ $place->name }}</option>
                @endforeach
        </select>
         
        <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
            <textarea id="message" name="recruitment[comment]" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" placeholder="募集しましょう">{{old('recruitment.comment')}}</textarea>
        </div>
          
        <div class="form-group">
            <label for="date2" class="col-form-label">日にちを入力</label>
            <input type="date" class="form-control" id="date" name="recruitment[date]" value='2023-03-03'>
        </div>
        <button type="submit" style="background-color: #2695E0; color: white; border-radius: 10px; padding: 0.5rem;">{{$errors->first("recruitment.comment")}}ツイート</button>
    
        </form>
        
         
    </body>
    </x-app-layout>