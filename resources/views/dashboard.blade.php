<x-app-layout>

    <div class="mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="text-center py-4 text-3xl text-sky-600 font-bold">
            產品介紹
        </div>
        <div class="flex flex-wrap justify-center space-x-8 py-6 ">
            <div class="py-4 px-4">
                <a href="glass" class="shrink-0 flex-col items-center text-center" >
                    <img src="img/icon/glass_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('glass') ? 'hidden' : 'active'}}"  />
                    <img src="img/icon/glass_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('glass') ? 'active' : 'hidden'}}"/>
                    {{ __('玻璃系列') }}
                </a>
            </div>
            <div class="py-4 px-4">
                <a href="shower" class="shrink-0 flex-col items-center text-center">
                    <img src="img/icon/shower_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('shower') ? 'hidden' : 'active'}}"  />
                    <img src="img/icon/shower_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('shower') ? 'active' : 'hidden'}}"/>

                    {{ __('淋浴設備') }}
                </a>
            </div>
            <div class="py-4 px-4">
                <a href="toilet" class="shrink-0 flex-col items-center text-center">
                    <img src="img/icon/toilet_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('toilet') ? 'hidden' : 'active'}}"  />
                    <img src="img/icon/toilet_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('toilet') ? 'active' : 'hidden'}}"/>

                    {{ __('衛浴設備') }}
                </a>
            </div>
            <div class="py-4 px-4">
                <a href="clothes-hanger" class="shrink-0 flex-col items-center text-center">
                    <img src="img/icon/clothes-hanger_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('clothes-hanger') ? 'hidden' : 'active'}}"  />
                    <img src="img/icon/clothes-hanger_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('clothes-hanger') ? 'active' : 'hidden'}}"/>

                    {{ __('曬衣架') }}
                </a>
            </div>
            <div class="py-4 px-4">
                <a href="floor" class="shrink-0 flex-col items-center text-center">
                    <img src="img/icon/floor_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('floor') ? 'hidden' : 'active'}}"  />
                    <img src="img/icon/floor_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('floor') ? 'active' : 'hidden'}}"/>
                    {{ __('隔音地板') }}
                </a>
            </div>
            <div class="py-4 px-4">
                <a href="VAF" class="shrink-0 flex-col items-center text-center">
                    <img src="img/icon/VAF_black.svg"  class="h-16 mx-auto mb-3 {{ request()->is('VAF') ? 'hidden' : 'active'}}"  />
                    <img src="img/icon/VAF_blue.svg"  class="h-16 mx-auto mb-3 {{ request()->is('VAF') ? 'active' : 'hidden'}}"/>
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
                <img src="img/picture/index/title_img.jpg" class="block h-60 w-max" >
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
            <div class="py-4 px-4 flex-col w-80">
                <img src="img/picture/index/title_img.jpg" class="block h-60 w-max" >
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
            <div class="py-4 px-4 flex-col w-80">
                <img src="img/picture/index/title_img.jpg" class="block h-60 w-max" >
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
        </div>
    </div>

    <div class="h-contact-us-height relative">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
            <div class="">
                <div class="text-center py-8 text-2xl  font-bold">
                    標題
                </div>
                <div class="py-8 px-4 text-center">
                    <a href="#" class="rounded bg-sky-800 text-white text-xl px-12 py-2">
                        聯絡我們
                    </a>
                </div>
            </div>
        </div>
        <img src="/img/picture/index/contact-us-background.jpg" class="opacity-70 object-cover h-full w-full"/>
        
        

    </div>
    
</x-app-layout>
