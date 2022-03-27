<nav x-data="{ open: false }" class="bg-white border-b border-gray-200">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden sm:-my-px sm:ml-10 sm:flex">

                    <a href="{{ route('news') }}" class="flex items-center text-lg mx-4">
                        <img class="h-7" src="/img/icon/news_{{ request()->is('news') ? 'blue' : 'black'}}.svg"/>
                        <div class="{{ request()->is('news') ? 'text-blue-500' : ''}}">最新消息</div> 
                    </a>

                    <a href="{{ route('product') }}" class="flex items-center text-lg mx-4">
                        <img class="h-7" src="/img/icon/product_{{ request()->is('product') ? 'blue' : 'black'}}.svg"/>
                        <div class="{{ request()->is('product') ? 'text-blue-500' : ''}}">產品介紹</div> 
                    </a>

                    <a href="{{ route('about_us') }}" class="flex items-center text-lg mx-4">
                        <img class="h-7" src="/img/icon/about_{{ request()->is('about_us') ? 'blue' : 'black'}}.svg"/>
                        <div class="{{ request()->is('about_us') ? 'text-blue-500' : ''}}">關於我們</div> 
                    </a>

                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6 ">
                <!-- nav right -->
                <form action="{{ route('search') }}">
                    <input type="text" class="bg-gray-300" name="context" placeholder="關鍵字"  id="context">
                </form>
                <a href="{{ route('search') }}" class="flex items-center text-lg ">
                    <img class="h-7" src="/img/icon/search_{{ request()->is('search') ? 'blue' : 'black'}}.svg"/>
                </a>
                <div class="mx-3">|</div>
                <a href="{{ route('customer_service') }}" class="flex items-center text-lg">
                    <img class="h-7" src="/img/icon/customer service_{{ request()->is('customer_service') ? 'blue' : 'black'}}.svg"/>
                </a>

                <a href="{{ route('login') }}"><img src="/img/icon/member_blue.svg" class="h-12 px-4"></a>
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-slot name="content">
                        
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </div>
            </div> 

            <!-- 選單 三 -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <a href="{{ route('news') }}" class="flex items-center text-lg mx-4 my-4">
            <img class="h-7" src="/img/icon/news_{{ request()->is('news') ? 'blue' : 'black'}}.svg"/>
            <div class="{{ request()->is('news') ? 'text-blue-500' : ''}}">最新消息</div> 
        </a>

        <a href="{{ route('product') }}" class="flex items-center text-lg mx-4 my-4">
            <img class="h-7" src="/img/icon/product_{{ request()->is('product') ? 'blue' : 'black'}}.svg"/>
            <div class="{{ request()->is('product') ? 'text-blue-500' : ''}}">產品介紹</div> 
        </a>

        <a href="{{ route('about_us') }}" class="flex items-center text-lg mx-4 my-4">
            <img class="h-7" src="/img/icon/about_{{ request()->is('about_us') ? 'blue' : 'black'}}.svg"/>
            <div class="{{ request()->is('about_us') ? 'text-blue-500' : ''}}">關於我們</div> 
        </a>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            

            <div class="mt-3 space-y-1 flex">
                <a href="{{ route('search') }}" class="flex items-center text-lg ">
                    <img class="h-7" src="/img/icon/search_{{ request()->is('search') ? 'blue' : 'black'}}.svg"/>
                </a>
                <div class="mx-3">|</div>
                <a href="{{ route('customer_service') }}" class="flex items-center text-lg">
                    <img class="h-7" src="/img/icon/customer service_{{ request()->is('customer_service') ? 'blue' : 'black'}}.svg"/>
                </a>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
