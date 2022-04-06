<nav x-data="{ open: false }" class="bg-white border-b border-gray-200">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="/img/picture/index/logo.png" class="block h-16 w-auto" alt="">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden sm:-my-px sm:ml-10 sm:flex">

                    <a href="{{ route('news') }}" class="flex items-center text-lg mx-4">
                        <img class="h-12 mr-1"
                            src="/img/icon/news_{{ request()->is('news') ? 'blue' : 'black' }}.svg" />
                        <div class="{{ request()->is('news') ? 'text-blue-500' : '' }} font-semibold">最新消息</div>
                    </a>

                    <a href="{{ route('product') }}" class="flex items-center text-lg mx-4">
                        <img class="h-12 mr-1"
                            src="/img/icon/product_{{ request()->is('product') ? 'blue' : 'black' }}.svg" />
                        <div class="{{ request()->is('product') ? 'text-blue-500' : '' }} font-semibold">產品介紹</div>
                    </a>

                    <a href="{{ route('about_us') }}" class="flex items-center text-lg mx-4">
                        <img class="h-12 mr-1"
                            src="/img/icon/about_{{ request()->is('about_us') ? 'blue' : 'black' }}.svg" />
                        <div class="{{ request()->is('about_us') ? 'text-blue-500' : '' }} font-semibold">關於我們</div>
                    </a>

                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6 ">
                <!-- nav right -->
                <form action="{{ route('search') }}" method="post" class=" flex" id="searchBox">
                    @csrf
                    <input type="text" class="bg-gray-50 mr-2" name="title" placeholder="請在此輸入關鍵字" id="title" style="display: none">

                    <button type="button" id="searchBtn">
                        <img class="h-8"
                            src="/img/icon/search_{{ request()->is('search') ? 'blue' : 'black' }}.svg" />
                    </button>
                </form>
                <div class="mx-3 text-2xl font-light">|</div>
                <a href="{{ route('customer_service') }}" class="flex items-center text-lg">
                    <img class="h-8"
                        src="/img/icon/customer service_{{ request()->is('customer_service') ? 'blue' : 'black' }}.svg" />
                </a>

                <a href="{{ route('login') }}"><img src="/img/icon/member_blue.svg" class="h-12 px-4"></a>

            </div>

            <!-- 選單 三 -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <a href="{{ route('news') }}" class="flex justify-center text-lg my-4">
            <img class="h-8 mr-1" src="/img/icon/news_{{ request()->is('news') ? 'blue' : 'black' }}.svg" />
            <div class="{{ request()->is('news') ? 'text-blue-500' : '' }} font-semibold">最新消息</div>
        </a>

        <a href="{{ route('product') }}" class="flex justify-center text-lg my-4">
            <img class="h-8 mr-1"
                src="/img/icon/product_{{ request()->is('product') ? 'blue' : 'black' }}.svg" />
            <div class="{{ request()->is('product') ? 'text-blue-500' : '' }} font-semibold">產品介紹</div>
        </a>

        <a href="{{ route('about_us') }}" class="flex justify-center text-lg my-4">
            <img class="h-8 mr-1"
                src="/img/icon/about_{{ request()->is('about_us') ? 'blue' : 'black' }}.svg" />
            <div class="{{ request()->is('about_us') ? 'text-blue-500' : '' }} font-semibold">關於我們</div>
        </a>

        <!-- Responsive Settings Options -->
        <div class="pt-4 mb-3 border-t border-gray-200 flex justify-center">

            <form action="{{ route('search') }}" method="post" class=" flex">
                @csrf
                <input type="text" class="bg-gray-50 mr-1" name="title" placeholder="請在此輸入關鍵字" id="title">

                <button type="submit"><img class="h-9"
                        src="/img/icon/search_{{ request()->is('search') ? 'blue' : 'black' }}.svg"  />
                </button>

            </form>
            <div class="mx-3 text-3xl text-gray-700">|</div>
            <a href="{{ route('customer_service') }}" class="flex items-center text-lg">
                <img class="h-9"
                    src="/img/icon/customer service_{{ request()->is('customer_service') ? 'blue' : 'black' }}.svg" />
            </a>
        </div>
    </div>
</nav>
