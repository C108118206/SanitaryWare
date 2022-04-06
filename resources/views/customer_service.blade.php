<x-app-layout>
    <div class=" h-96 relative">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 w-5/12">
            <div class="text-center py-12 text-5xl   text-white tracking-widest font-black bg-black/50">
                客服中心
            </div>
        </div>
        <img src="/img/picture/index/contact-us-background.jpg" class=" object-fit h-full w-full"/>
    </div>
    <div class="max-w-7xl mx-auto py-6 space-y-12 flex-col">
        <div class="">
            <div class="text-md text-gray-500">首頁 > 客服中心 > 維修通報</div>
        </div>
        @if (session()->has('notice'))
            <div class="bg-red-500 text-center">
                <p class="text-gray-200">{{ session()->get('notice') }}</p>
            </div>
        @endif
        <p class="text-dot font-bold text-3xl tracking-wider text-center">維修通報</p>
        <form class="max-w-xl mx-auto" method="POST" action="{{ route('fix_report') }}">
            @csrf
            <div class="mb-6">
                <label for="declarer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">申報人</label>
                <input type="text" id="declarer" name="declarer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">維修事項</label>
                <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">維修原因</label>
                <textarea id="content" rows="4" name="content" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="寫下您的原因..."></textarea>
            </div>
            
            <div class="flex justify-center items-start py-4">
                <button class=" bg-blue-500 rounded-md w-16 h-10 text-white m-2" type="reset">清除</button>
                <button class=" bg-blue-500 rounded-md w-16 h-10 text-white m-2" type="submit">送出</button>
            </div>
                
            

            
        </form>
    </div>
</x-app-layout>