<x-app-layout>
    <div class="h-72 relative">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 w-5/12">
            <div class="text-center py-12 text-5xl   text-white tracking-widest font-black bg-black/50">
                最新消息
            </div>
        </div>
        <img src="/img/picture/index/usephone.png" class=" object-fit h-full w-full" />
    </div>
    <div class="max-w-7xl mx-auto py-6 space-y-6">
        <div class="">
            <div class="text-md text-gray-500 pl-4">首頁 > 最新消息</div>
        </div>

        <div class="pt-4 px-8 tracking-wide">
        @foreach ($news as $new)
            <div class="text-side-bg font-bold text-4xl my-4">{{ $new->title }}</div>
            <div class="font-medium text-xl py-2">{{ $new->description }}
            </div>
        <div class="flex justify-center my-8">
            <img class="w-max block" src="{{$new->photo_path ? "/storage/" . str_replace('public/', '', $new->photo_path): "" }}"></div>
        <hr>
        @endforeach


        <div class="flex text-center justify-center py-7">{{ count($news) == 1 ? "": "" }}</div>
        </div>

    </div>


</x-app-layout>
