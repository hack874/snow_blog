<x-app-layout>
    <x-slot name="header">
    </x-slot>
        <div class="max-w-7xl mx-auto px-4 md:ml-64 sm:ml-0 lg:px-8">
            <h1> 投稿する</h1>
                <form action="/recruitments/store" method="POST">
                @csrf
              
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <select id="default-search" name="recruitment[place_id]" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
            </div>
            <option selected disabled>スキー場を選択してください</option>
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
        </div>
    </x-app-layout>