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
            @foreach ($product_types as $type)
                @if ($type->main_product_type_id === null)
                    <a href="{{route('product-type',$type->id)}}">
                        <p class="{{ request()->is($type->id) ? 'underline underline-offset-8 decoration-blue-500' : '' }}">{{ $type->name }}</p>
                    </a>
                
                @endif
            @endforeach
        </div>

        <div class="flex space-x-12 text-xl">
            @foreach ($product_types as $type)
                @if(request()->is("product/$type->main_product_type_id"))
                    <a href="{{route('product-type',$type->main_product_type_id)}}">
                        {{-- <p class="{{ strpos(request()->path(),$type->main_product_type_id) ? 'text-blue-500 font-medium' : '' }}">{{ $type->name }}</p> --}}
                        <p class="{{ request()->is('product/'.$type->main_product_type_id) ? '' : 'hidden' }}">{{ $type->name }}</p>
                    </a>
                @endif
            @endforeach
        </div>

        <div class="flex flex-wrap">
            @foreach ($product as $p)
            <div class="flex-col space-y-4 m-8">
                <img src="/img/picture/index/title_img.jpg" class=" w-60 h-75" alt="">
                <div class=" font-black text-xl">{{ $p->name }}</div> 
                <div class="sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-400"></div>
                <div class="text-gray-400">{{ $p->content }}</div>
                <div class="text-gray-400">{{ $p->material }}</div>
                <div class="text-gray-400">{{ $p->size }}</div>
                <div class="text-right underline text-blue-500"><a href="{{ route("product_details",$p->id)}}">Read more...</a></div>
            </div>
            @endforeach
            
            
        </div>

        <div class="flex text-center justify-center">{{ $product->links() }}</div>
    </div>
    
    
</x-app-layout>