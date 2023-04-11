 <header>
    <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 mx-auto flex items-center w-0">
                        <a href="{{ route('dashboard') }}">
                            {{--<x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />--}}
                            <img src="/images/snowboard.png " width="60" height="60">
                        </a>
                    </div>
                    
                <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                   <span class="sr-only">Open sidebar</span>
                   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                   </svg>
                </button>
            
            <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full md:translate-x-0" aria-label="Sidebar">
                <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <img src="/images/edit.png" class="w-5 h-5">
                            <x-nav-link :href="route('profile.update')" :active="request()->routeIs('profile.update')">
                                {{__("プロフィール編集画面")}}
                            </x-nav-link>
                        </li>
                        <li class="flex items-center">
                            <img src="/images/enter.png" class="w-5 h-5">
                            <x-nav-link :href="route('profile.show', auth()->user()->id)" :active="request()->routeIs('profile.show')">
                                {{ __('ログイン中のユーザー:') .Auth::user()->name}}
                            </x-nav-link>
                        </li>
                        
                        <li class="flex items-center">
                            <img src="/images/home.png" class="w-5 h-5">
                            <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                                {{ __('ホーム画面') }}
                            </x-nav-link>
                        </li>
                        <li class="flex items-center">
                            <img src="/images/edit.png" class="w-5 h-5">
                            <x-nav-link :href="route('posts.create')" :active="request()->routeIs('posts.create')">
                                {{ __('投稿画面') }}
                            </x-nav-link>
                        </li>
                        <li class="flex items-center">
                            <x-nav-link :href="route('recruitments.create')" :active="request()->routeIs('recruitments.create')">
                                {{ __('募集画面') }}
                            </x-nav-link>
                        </li>
                        <li class="flex items-center">
                            <img src="/images/search.png" class="w-5 h-5">
                            <x-nav-link :href="route('recruitments.index')" :active="request()->routeIs('recruitments.index')">
                                {{ __('募集一覧') }}
                            </x-nav-link>
                        </li>
                        
                        <li class="flex items-center">
                            <img src="/images/logout.png" class="w-5 h-5">
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                <x-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('ログアウト') }}
                                </x-nav-link>
                            </form>
                        </li>
                    </ul>
                </div>
            </aside>
         
        <div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
            <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
                <button type="button" onclick="location.href='{{route('index')}}'" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Home</span>
                </button>
                <button type="button" onclick="location.href='{{route('posts.create')}}'" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Create</span>
                </button>
                <button type="button" onclick="location.href='{{route('recruitments.index')}}'"class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>

                    <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Search</span>
                </button>
                <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                    </svg>
                    <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Settings</span>
                </button>
                
            </div>
        </div>
    </nav>
</header>
