<x-app-layout>
    <div class="h-64 relative">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
            <div class="text-center py-8 text-3xl  text-white tracking-wider font-black">
                客服中心
            </div>
        </div>
        <img src="/img/picture/index/contact-us-background.jpg" class="opacity-70 object-cover h-full w-full"/>
    </div>
    <div class="max-w-7xl mx-auto py-6 space-y-12 flex-col">
        <div class="">
            <div class="text-md text-gray-400">首頁 > 客服中心 > 維修通報</div>
        </div>
        <p class="text-blue-500 font-bold text-2xl tracking-wider text-center">維修通報</p>
        <form>
            <div class="flex justify-center items-start py-4">
                <p class="px-4 font-black text-md">申報人　</p>
                <input type="text" class=" w-1/2"/>
                
            </div>
            <div class="flex justify-center items-start py-4 ">
                <p class="px-4 font-black text-md">維修事項</p>
                <input type="text" class=" w-1/2"/>
                
            </div>
            <div class="flex justify-center items-start py-4 ">
                <p class="px-4 font-black text-md">維修原因</p>
                <textarea name="" id="" cols="60" class=" w-1/2" rows="6"></textarea>
            </div>
            
            <div class="flex justify-center items-start py-4">
                <button class=" bg-blue-500 rounded-md w-16 h-10 text-white m-2" type="reset">清除</button>
                <button class=" bg-blue-500 rounded-md w-16 h-10 text-white m-2" type="submit">送出</button>
            </div>
                
            

            
        </form>
    </div>
</x-app-layout>