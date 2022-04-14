<x-app-layout>
    <div class="h-72 relative">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 w-5/12">
            <div class="text-center py-12 text-5xl   text-white tracking-widest font-black bg-black/50">
                {{ $product_type->find($id)->main_product_type_id !== null? $product_type->find($product_type->find($id)->main_product_type_id)->name . ' > ': '' }}
                {{ $product_type->find($id)->name }}
            </div>
        </div>
        
        <img src="/img/picture/index/產品介紹-{{ $product_type->find($id)->main_product_type_id !== null ? $product_type->find($product_type->find($id)->main_product_type_id)->name : $product_type->find($id)->name}}banner.jpg" class=" object-fit h-full w-full" />
    </div>
    <div class="max-w-7xl mx-auto py-4 space-y-6 flex-col">
        <div class="">
            <div class="text-md text-gray-500 pl-4">首頁 > 產品介紹 >
                {{ $product_type->find($id)->main_product_type_id !== null? $product_type->find($product_type->find($id)->main_product_type_id)->name . ' > ': '' }}
                {{ $product_type->find($id)->name }}</div>
        </div>

        <div class="flex flex-wrap justify-left ml-5">

            <div class="flex text-2xl flex-wrap">
                @foreach ($product_type as $item)
                    @if ($item->main_product_type_id === null)
                        <div class="px-3">
                            <button id="dropdownNavbarLink{{ $item->id }}"
                                data-dropdown-toggle="dropdownNavbar{{ $item->id }}"
                                class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-semibold text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-side-bg md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                                {{ $item->name }}
                                <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar{{ $item->id }}"
                                class="hidden  z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="{{ route('product', $item->id) }}"
                                            class="text-base block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">全部</a>
                                    </li>
                                </ul>
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400"
                                    aria-labelledby="dropdownLargeButton">
                                    @foreach ($product_type->where('main_product_type_id', $item->id) as $item_sub)
                                        <li>
                                            <a href="{{ route('product', $item_sub->id) }}"
                                                class="text-base block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $item_sub->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="flex flex-wrap justify-center mt-8">
                @foreach ($products as $p)
                    <div class="flex-col space-y-4 m-8 lg:w-1/6">
                        <a href="{{ route('product_details', $p->id) }}"><img 
                            src="{{ mb_strlen($p->image_path)!=8 ? '/storage/' . str_replace('public/', '', $p->image_path) : '/img/picture/product/' . $p->image_path . '.jpg' }}" alt="">
                            <div class=" font-black text-xl mt-3 tracking-wider">{{ $p->name }}</div>
                        </a>
                        <div class="sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-400"></div>
                        <div class="text-gray-400">{{ $p->content }}</div>
                        <div class="text-gray-400">{{ $p->material }}</div>
                        <div class="text-gray-400">{{ $p->size }}</div>
                        <div class="text-right underline text-dot"><a
                                href="{{ route('product_details', $p->id) }}">Read more...</a></div>
                    </div>
                @endforeach


            </div>
        </div>

        <div class="flex text-center justify-center py-7">{{ $products->links() }}</div>

</x-app-layout>
