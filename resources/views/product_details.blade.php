<x-app-layout>
    <div class=" h-96 relative">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 w-5/12">
            <div class="text-center py-12 text-3xl lg:text-4xl  text-white tracking-widest font-black bg-black/50">
                {{ $product_type->find($id)->main_product_type_id !== null ? $product_type->find($product_type->find($id)->main_product_type_id)->name.' > ' : ''}} {{ $product_type->find($id)->name }}
            </div>
        </div>
        <img src="/img/picture/index/產品介紹-{{ $product_type->find($id)->main_product_type_id !== null ? $product_type->find($product_type->find($id)->main_product_type_id)->name : $product_type->find($id)->name}}banner.jpg" class=" object-fit h-full w-full" />

    </div>
    <div class="max-w-7xl mx-auto py-6 space-y-12 flex-col justify-center">
        <div class="">
            <div class="text-md text-gray-500 pl-4">首頁 > 產品介紹 > {{ $product_type->find($id)->main_product_type_id !== null ? $product_type->find($product_type->find($id)->main_product_type_id)->name.' > ' : ''}} {{ $product_type->find($id)->name }}</div>
        </div>

        <div class="lg:flex">
            <div class="flex-col w-2/3 mx-auto">
                @if($product->image_path === '')

                @else
                    <img src="{{ '/storage/'. str_replace('public/', '', $product->image_path[0]->image_path)}}" name="title_image" id="title_image" 
                    class="h-72 w-full rounded mx-auto" alt="">
                    <div class="flex pt-4 overflow-auto space-x-2">
                        @foreach ($product->image_path as $image)
                            <img src="{{'/storage/' . str_replace('public/', '', $image->image_path) }}" onclick="title_read(this);" class=" hover:cursor-pointer block border-2 border-dashed border-blue-500 h-20 w-32 px-4 rounded-lg" alt="">
                            
                        @endforeach
                        
                    </div>
                @endif
                
            </div>
            <div class="flex-col space-y-4 m-8 w-full">
                <div class=" font-black text-2xl text-side-bg">{{ $product->name }}</div> 
                <div class="sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-400"></div>
                <div class="text-gray-400">{{ $product->content }}</div>
                <div class="text-gray-400">{{ $product->name }}</div>
                <div class="text-gray-400">{{ $product->matrial }}</div>
                <div class="text-gray-400">{{ $product->size }}</div>
            </div>
        </div>

        <div class="mb-4 border-b border-gray-200">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2 text-lg" role="presentation">
                    <button class="text-side-bg inline-block p-4 rounded-t-lg border-b-2" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">詳細介紹</button>
                </li>
                <li class="mr-2 text-lg" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">注意事項</button>
                </li>
            </ul>
        </div>
        <div id="myTabContent">
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p class="text-gray-500 dark:text-gray-400">
                    {!! $product->details_introduction !!}
                </p>
            </div>
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <p class="text-gray-500 dark:text-gray-400">
                    {{ $product->Precautions }}
                </p>
            </div>
        </div>

    </div>
    <script>
        function title_read(object){
            $("#title_image").attr('src',object.src);
        }
    </script>
    
</x-app-layout>