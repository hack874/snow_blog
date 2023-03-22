<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 md:ml-64 sm:ml-0 lg:px-8">
        <form action="/posts" method="POST" enctype="multipart/form-data">
              @csrf
             <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 text-orange-600" for="file_input">画像</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " id="file_input" name="images_array[]"  type="file" multiple="multiple">
            </div>
            
            <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600">コメント</label>
                <textarea id="message" name="post[comment]" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" placeholder="コメント">{{old('post.comment')}}</textarea>
            </div>
            
            <div style="background-color: #E8F4FA; text-align: center;">
                <label for="place" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">ゲレンデ</label>
                <input type="text" name="post[place]" style="margin: 1rem; padding: 0 1rem; width: 70%; border-radius: 6px; border: 1px solid #ccc; height: 2.3rem;" value = "{{old('post.place')}}" placeholder ="ゲレンデ名">
    
            </div>
                <button type="submit" style="background-color: #2695E0; color: white; border-radius: 10px; padding: 0.5rem;">{{$errors->first("post.comment")}}投稿する</button>
        </form>
    </div>
    
</x-app-layout>

