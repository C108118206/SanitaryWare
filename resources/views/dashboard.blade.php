<x-app-layout>

    <div class="mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="text-center py-4 text-2xl text-sky-600 font-bold">
            產品介紹
        </div>
        <div class="flex flex-wrap justify-center space-x-8 py-6 ">
            <div class="py-4 px-4">
                <a href="news" class="shrink-0 flex-col items-center text-center" >
                    <img src="img/icon/glass_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('news') ? 'hidden' : 'active'}}"  />
                    <img src="img/icon/glass_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('news') ? 'active' : 'hidden'}}"/>
                    {{ __('玻璃系列') }}
                </a>
            </div>
            <div class="py-4 px-4">
                <a href="news" class="shrink-0 flex-col items-center text-center">
                    <img src="img/icon/shower_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('news') ? 'hidden' : 'active'}}"  />
                    <img src="img/icon/shower_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('news') ? 'active' : 'hidden'}}"/>

                    {{ __('淋浴設備') }}
                </a>
            </div>
            <div class="py-4 px-4">
                <a href="#" class="shrink-0 flex-col items-center text-center">
                    <img src="img/icon/toilet_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('news') ? 'hidden' : 'active'}}"  />
                    <img src="img/icon/toilet_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('news') ? 'active' : 'hidden'}}"/>

                    {{ __('衛浴設備') }}
                </a>
            </div>
            <div class="py-4 px-4">
                <a href="#" class="shrink-0 flex-col items-center text-center">
                    <img src="img/icon/clothes-hanger_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('news') ? 'hidden' : 'active'}}"  />
                    <img src="img/icon/clothes-hanger_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('news') ? 'active' : 'hidden'}}"/>

                    {{ __('曬衣架') }}
                </a>
            </div>
            <div class="py-4 px-4">
                <a href="#" class="shrink-0 flex-col items-center text-center">
                    <img src="img/icon/floor_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('news') ? 'hidden' : 'active'}}"  />
                    <img src="img/icon/floor_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('news') ? 'active' : 'hidden'}}"/>
                    {{ __('隔音地板') }}
                </a>
            </div>
            <div class="py-4 px-4">
                <a href="#" class="shrink-0 flex-col items-center text-center">
                    <img src="img/icon/VAF_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('news') ? 'hidden' : 'active'}}"  />
                    <img src="img/icon/VAF_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('news') ? 'active' : 'hidden'}}"/>
                    {{ __('V A F') }}
                </a>
            </div>
        </div>
    </div>

    <div class="mx-auto sm:px-6 lg:px-8 bg-stone-200">
        <div class="text-center pt-8 py-4 text-2xl text-sky-600 font-bold">
            最新消息
        </div>
        <div class="flex flex-wrap justify-center space-x-16 py-6 ">
            <div class="py-4 px-4 flex-col w-60">
                <img src="img/title_img.jpg" class="block h-96 w-max" >
                <div class="font-bold py-2">
                    標題文字
                </div>
                <div class="py-2">
                    內容文字內容文字內容文字內容文字內容文字內容文字內容文字
                </div>
                <div class="py-2 block w-auto text-right">
                    <a class=" underline-offset-4 underline" href="#">Read more</a>
                </div>
            </div>
            <div class="py-4 px-4 flex-col w-60">
                <img src="img/title_img.jpg" class="block h-40 w-max" >
                <div class="font-bold py-2">
                    標題文字
                </div>
                <div class="py-2 block w-auto">
                    內容文字內容文字內容文字內容文字內容文字內容文字內容文字
                </div>
                <div class="py-2 block w-auto text-right">
                    <a class=" underline-offset-4 underline" href="#">Read more</a>
                </div>
            </div>
            <div class="py-4 px-4 flex-col w-60">
                <img src="img/icon/title_img.jpg" class="block h-40 w-max" >
                <div class="font-bold py-2">
                    標題文字
                </div>
                <div class="py-2 block w-auto">
                    內容文字內容文字內容文字內容文字內容文字內容文字內容文字
                </div>
                <div class="py-2 block w-auto text-right">
                    <a class=" underline-offset-4 underline" href="#">Read more</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto sm:px-6 lg:px-8 h-80 bg-stone-300 grid content-center">
        <div class="text-center py-8 text-2xl  font-bold">
            標題
        </div>
        <div class="py-8 px-4 text-center">
            <a href="#" class="rounded bg-sky-800 text-white text-xl px-12 py-2">
                聯絡我們
            </a>
        </div>
    </div>
    
</x-app-layout>
