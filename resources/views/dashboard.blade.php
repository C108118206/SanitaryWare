<x-app-layout>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>


    <div id="animation-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-48 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
             <!-- Item 1 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/img/icon/index-banner.svg" class="block absolute top-1/2 left-1/2 w-1/2 -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/img/picture/index/index-banner.jpg" class="block absolute top-1/2 left-1/2 w-1/2 -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                <img src="/img/picture/index/index-banner2.jpg" class="block absolute top-1/2 left-1/2 w-1/2 -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>

    <div class="mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="text-center py-4 text-3xl text-sky-600 font-bold">
            產品介紹
        </div>
        <div class="flex flex-wrap justify-center space-x-8 py-6 ">
            <div class="py-4 px-4">
                <a href="/product/1" class="shrink-0 flex-col items-center text-center" >
                    <img src="/img/icon/glass_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('glass') ? 'hidden' : 'active'}}"  />
                    <img src="/img/icon/glass_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('glass') ? 'active' : 'hidden'}}"/>
                    {{ __('玻璃系列') }}
                </a>
            </div>
            <div class="py-4 px-4">
                <a href="/product/2" class="shrink-0 flex-col items-center text-center">
                    <img src="/img/icon/shower_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('shower') ? 'hidden' : 'active'}}"  />
                    <img src="/img/icon/shower_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('shower') ? 'active' : 'hidden'}}"/>

                    {{ __('淋浴設備') }}
                </a>
            </div>
            <div class="py-4 px-4">
                <a href="/product/3" class="shrink-0 flex-col items-center text-center">
                    <img src="/img/icon/toilet_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('toilet') ? 'hidden' : 'active'}}"  />
                    <img src="/img/icon/toilet_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('toilet') ? 'active' : 'hidden'}}"/>

                    {{ __('衛浴設備') }}
                </a>
            </div>
            <div class="py-4 px-4">
                <a href="/product/4" class="shrink-0 flex-col items-center text-center">
                    <img src="/img/icon/clothes-hanger_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('clothes-hanger') ? 'hidden' : 'active'}}"  />
                    <img src="/img/icon/clothes-hanger_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('clothes-hanger') ? 'active' : 'hidden'}}"/>

                    {{ __('曬衣架') }}
                </a>
            </div>
            <div class="py-4 px-4">
                <a href="/product/5" class="shrink-0 flex-col items-center text-center">
                    <img src="/img/icon/floor_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('floor') ? 'hidden' : 'active'}}"  />
                    <img src="/img/icon/floor_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('floor') ? 'active' : 'hidden'}}"/>
                    {{ __('隔音地板') }}
                </a>
            </div>
            <div class="py-4 px-4">
                <a href="/product/6" class="shrink-0 flex-col items-center text-center">
                    <img src="/img/icon/VAF_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('VAF') ? 'hidden' : 'active'}}"  />
                    <img src="/img/icon/VAF_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('VAF') ? 'active' : 'hidden'}}"/>
                    {{ __('V A F') }}
                </a>
            </div>
        </div>
    </div>

    <div class="mx-auto sm:px-6 lg:px-8 bg-stone-200">
        <div class="text-center pt-8 py-4 text-3xl text-sky-600 font-bold">
            最新消息
        </div>
        <div class="flex flex-wrap justify-center  py-6 ">
            <div class="py-4 px-4 flex-col w-80">
                <img src="/img/picture/index/title_img.jpg" class="block h-60 w-max" >
                <div class="font-bold py-2">
                    標題文字
                </div>
                <div class="py-2">
                    內容文字內容文字內容文字內容文字內容文字內容文字內容文字
                </div>
                <div class="py-2 block w-auto text-right">
                    <a class=" underline-offset-4 underline" href="{{ route('unstructured') }}">Read more</a>
                </div>
            </div>
            <div class="py-4 px-4 flex-col w-80">
                <img src="/img/picture/index/title_img.jpg" class="block h-60 w-max" >
                <div class="font-bold py-2">
                    標題文字
                </div>
                <div class="py-2">
                    內容文字內容文字內容文字內容文字內容文字內容文字內容文字
                </div>
                <div class="py-2 block w-auto text-right">
                    <a class=" underline-offset-4 underline" href="{{ route('unstructured') }}">Read more</a>
                </div>
            </div>
            <div class="py-4 px-4 flex-col w-80">
                <img src="/img/picture/index/title_img.jpg" class="block h-60 w-max" >
                <div class="font-bold py-2">
                    標題文字
                </div>
                <div class="py-2">
                    內容文字內容文字內容文字內容文字內容文字內容文字內容文字
                </div>
                <div class="py-2 block w-auto text-right">
                    <a class=" underline-offset-4 underline" href="{{ route('unstructured') }}">Read more</a>
                </div>
            </div>
        </div>
    </div>

    <div class="h-contact-us-height relative">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
            <div class="">
                <div class="text-center py-8 text-2xl  font-bold">
                    DIY小學堂
                </div>
                <div class="py-8 px-4 text-center">
                    <a href="{{ route('unstructured') }}" class="rounded bg-sky-800 text-white text-xl px-12 py-2">
                        點我進入
                    </a>
                </div>
            </div>
        </div>
        <img src="/img/picture/index/contact-us-background.jpg" class="opacity-70 object-cover h-full w-full"/>
        
        

    </div>
    
</x-app-layout>
