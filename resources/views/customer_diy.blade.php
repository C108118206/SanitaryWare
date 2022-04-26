<x-app-layout>
    <div class=" h-96 relative">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 w-5/12">
            <div class="text-center py-12 text-4xl   text-white tracking-widest font-black bg-black/50">
                客服中心
            </div>
        </div>
        <img src="/img/picture/index/contact-us-background.jpg" class=" object-fit h-full w-full" />
    </div>
    <div class="max-w-7xl mx-auto py-6 space-y-12 flex-col">
        <div class="">
            <div class="text-md text-gray-500 pl-4">首頁 > 客服中心 > DIY維護教學</div>
        </div>
        <p class="text-side-bg font-bold text-4xl tracking-wider text-center">DIY維護教學</p>
        <div class="flex flex-wrap justify-left  py-6 ml-6">
            @foreach($diys as $diy)
            <div class="py-4 px-4 flex-col w-80">
                <a class=" underline-offset-4 underline">
                    <img
                        src="{{ '/storage/' . str_replace('public/', '', $diy->image_path) }}"
                        class="block h-60 w-max">
                </a>
                <div class="text-2xl font-semibold py-2 mt-2">
                    {{ $diy->title }}
                </div>
                <div class="py-2 h-24">
                    {{ Str::limit($diy->title, $limit = 82, $end = '...') }}
                </div>
                <div class="py-2 h-24 text-lg text-gray-700 font-bold tracking-widest underline text-center">
                    <div class=""><a href="{{ '/storage/' . str_replace('public/', '', $diy->file_path) }}" target="_blank">文件下載</a></div>
                    <div class=""><a href="{{ '/storage/' . str_replace('public/', '', $diy->video_path) }}" target="_blank">影音下載</a></div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</x-app-layout>
