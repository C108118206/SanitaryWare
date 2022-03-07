<x-app-layout>
    <div class="h-64 relative">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
            <div class="text-center py-8 text-3xl  text-white tracking-wider font-black">
                淋浴設備
            </div>
        </div>
        <img src="/img/picture/index/contact-us-background.jpg" class="opacity-70 object-cover h-full w-full"/>
    </div>
    <div class="max-w-7xl mx-auto py-6 space-y-12 flex-col">
        <div class="">
            <div class="text-md text-gray-400">首頁 > 產品介紹 > 沐浴設備</div>
        </div>

        <div class="flex space-x-12 text-xl">
            <a href="#">
                <p class="{{ request()->is('product') ? 'underline underline-offset-8 decoration-blue-500' : '' }}">沐浴拉門</p>
            </a>
            <a href="#">
                <p class="{{ request()->is('productxxx') ? 'underline underline-offset-8 decoration-blue-500' : '' }}">浴缸</p>
            </a>
            <a href="#">
                <p class="{{ request()->is('productxxx') ? 'underline underline-offset-8 decoration-blue-500' : '' }}">浴櫃</p>
            </a>
            <a href="#">
                <p class="{{ request()->is('productxxx') ? 'underline underline-offset-8 decoration-blue-500' : '' }}">浴缸龍頭</p>
            </a>
            <a href="#">
                <p class="{{ request()->is('productxxx') ? 'underline underline-offset-8 decoration-blue-500' : '' }}">衛浴配件</p>
            </a>
        </div>

        <div class="flex space-x-12 text-xl">
            <a href="#">
                <p class="{{ request()->is('product') ? 'text-blue-500 font-medium' : '' }}">無框型</p>
            </a>
            <a href="#">
                <p class="{{ request()->is('product') ? 'text-blue-500 font-medium' : '' }}">有框型</p>
            </a>
            <a href="#">
                <p class="{{ request()->is('productxxx') ? 'text-blue-500 font-medium' : '' }}">單片型</p>
            </a>
        </div>

        <div class="flex flex-wrap">
            <div class="flex-col space-y-4 m-8">
                <img src="/img/picture/index/title_img.jpg" class=" w-60 h-75" alt="">
                <div class=" font-black text-xl">無框淋浴門</div> 
                <div class="sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-400"></div>
                <div class="text-gray-400">型號：AAA</div>
                <div class="text-gray-400">材質：BBB</div>
                <div class="text-gray-400">高度：CCC</div>
                <div class="text-right underline text-blue-500"><a href="{{ route("product_details")}}">Read more...</a></div>
            </div>
            <div class="flex-col space-y-4 m-8">
                <img src="/img/picture/index/title_img.jpg" class=" w-60 h-75" alt="">
                <div class=" font-black text-xl">無框淋浴門</div> 
                <div class="sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-400"></div>
                <div class="text-gray-400">型號：AAA</div>
                <div class="text-gray-400">材質：BBB</div>
                <div class="text-gray-400">高度：CCC</div>
                <div class="text-right underline text-blue-500"><a href="{{ route("product_details")}}">Read more...</a></div>
            </div>
            <div class="flex-col space-y-4 m-8">
                <img src="/img/picture/index/title_img.jpg" class=" w-60 h-75" alt="">
                <div class=" font-black text-xl">無框淋浴門</div> 
                <div class="sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-400"></div>
                <div class="text-gray-400">型號：AAA</div>
                <div class="text-gray-400">材質：BBB</div>
                <div class="text-gray-400">高度：CCC</div>
                <div class="text-right underline text-blue-500"><a href="{{ route("product_details")}}">Read more...</a></div>
            </div>
            <div class="flex-col space-y-4 m-8">
                <img src="/img/picture/index/title_img.jpg" class=" w-60 h-75" alt="">
                <div class=" font-black text-xl">無框淋浴門</div> 
                <div class="sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-400"></div>
                <div class="text-gray-400">型號：AAA</div>
                <div class="text-gray-400">材質：BBB</div>
                <div class="text-gray-400">高度：CCC</div>
                <div class="text-right underline text-blue-500"><a href="{{ route("product_details")}}">Read more...</a></div>
            </div>
            <div class="flex-col space-y-4 m-8">
                <img src="/img/picture/index/title_img.jpg" class=" w-60 h-75" alt="">
                <div class=" font-black text-xl">無框淋浴門</div> 
                <div class="sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-400"></div>
                <div class="text-gray-400">型號：AAA</div>
                <div class="text-gray-400">材質：BBB</div>
                <div class="text-gray-400">高度：CCC</div>
                <div class="text-right underline text-blue-500"><a href="{{ route("product_details")}}">Read more...</a></div>
            </div>
            <div class="flex-col space-y-4 m-8">
                <img src="/img/picture/index/title_img.jpg" class=" w-60 h-75" alt="">
                <div class=" font-black text-xl">無框淋浴門</div> 
                <div class="sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-400"></div>
                <div class="text-gray-400">型號：AAA</div>
                <div class="text-gray-400">材質：BBB</div>
                <div class="text-gray-400">高度：CCC</div>
                <div class="text-right underline text-blue-500"><a href="{{ route("product_details")}}">Read more...</a></div>
            </div>
            <div class="flex-col space-y-4 m-8">
                <img src="/img/picture/index/title_img.jpg" class=" w-60 h-75" alt="">
                <div class=" font-black text-xl">無框淋浴門</div> 
                <div class="sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-400"></div>
                <div class="text-gray-400">型號：AAA</div>
                <div class="text-gray-400">材質：BBB</div>
                <div class="text-gray-400">高度：CCC</div>
                <div class="text-right underline text-blue-500"><a href="{{ route("product_details")}}">Read more...</a></div>
            </div>
            
        </div>

        <div class="text-center"> < 1 2 3 4 5 ></div>
    </div>
    
    
</x-app-layout>