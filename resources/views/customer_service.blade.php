<x-app-layout>
    <div class="h-64 relative">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
            <div class="text-center py-8 text-3xl  text-white tracking-wider font-black">
                客服中心
            </div>
        </div>
        <img src="/img/picture/index/greenbath.png" class="opacity-70 object-cover h-full w-full"/>
    </div>
    <div class="max-w-7xl mx-auto py-6 space-y-12 flex-col">
        <div class="">
            <div class="text-md text-gray-400">首頁 > 客服中心 > 維修通報</div>
        </div>
        <p class="text-blue-500 font-bold text-2xl tracking-wider text-center">維修通報</p>
        <div class="max-w-4xl flex-col mx-auto">
            <form action="{{ route('dashboard') }}" method="POST">
                @csrf
                <div class="mb-6 flex justify-center items-center content-center">
                    <label for="large-input" class="block mb-2 mr-32 text-sm font-medium text-gray-900 dark:text-gray-300">申報人</label>
                    <input type="text" id="large-input" class=" w-2/4">
                </div>
                <div class="mb-6 flex justify-center items-center content-center">
                    <label for="base-input" class="block mb-2 mr-32 text-sm font-medium text-gray-900 dark:text-gray-300">維修事項</label>
                    <input type="text" id="base-input" class=" w-2/4">
                </div>
                <div class="mb-6 flex justify-center items-center content-center">
                    <label for="small-input" class="block mb-2 mr-32 text-sm font-medium text-gray-900 dark:text-gray-300">維修原因</label>
                    <textarea type="text" id="small-input" class=" w-2/4"></textarea>
                </div>
                <div class="mb-6 flex justify-center  pl-96 items-center content-center">
                    <button type="reset" class=" px-4 py-2 mx-8 bg-blue-400 rounded text-white/90">清除</button>
                    <button type="submit" class=" px-4 py-2 mx-8 bg-blue-400 rounded text-white/90">送出</button>
                </div>
            </form>
            
        </div>
        
        
    </div>
</x-app-layout>