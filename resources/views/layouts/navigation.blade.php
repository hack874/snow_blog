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
            
            <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full md:translate-x-0" aria-label="Sidebar">
                <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                    <ul class="space-y-2">
                        <li>
                            <x-nav-link :href="route('profile.update')" :active="request()->routeIs('profile.update')">
                                {{__("ログイン中のユーザー:").Auth::user()->name }}
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                                {{ __('ホーム画面') }}
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('posts.create')" :active="request()->routeIs('posts.create')">
                                {{ __('投稿画面') }}
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('recruitments.create')" :active="request()->routeIs('recruitments.create')">
                                {{ __('募集画面') }}
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link :href="route('recruitments.index')" :active="request()->routeIs('recruitments.index')">
                                {{ __('募集一覧') }}
                            </x-nav-link>
                        </li>
                        
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                <x-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('ログアウト') }}
                                </x-nav-link>
                        </li>
                    </ul>
                </div>
            </aside>
    </nav>
</header>
