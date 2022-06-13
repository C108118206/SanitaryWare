<x-app-layout>
    <div class="h-72 relative">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 w-5/12">
            <div class="text-center py-12 text-5xl  text-white tracking-widest font-black bg-black/50">
                關於我們
            </div>
        </div>
        <img src="/img/picture/index/about_us.png" class=" object-fit h-full w-full"/>
    </div>
    <div class="max-w-7xl mx-auto py-6 space-y-12 flex-col">
        <div class="">
            <div class="text-md text-gray-500 pl-4">首頁 > 關於我們</div>
        </div>
       <a href="" name="story"></a>
        <div class="text-center text-side_bg font-extrabold text-3xl py-6 tracking-widest">品牌故事</div>
        <div class="text-center font-medium text-lg block">
            <p class="text-2xl py-4 font-extrabold tracking-widest">{{ $story->title }}</p>
            <div class="text-xl py-6 tracking-widest flex-col space-y-12">
                {!! $story->content !!}
            </div>
        </div>
        <a href="" name="business_item"></a>
        <div class="text-center text-side_bg font-black text-3xl py-6 tracking-widest">營業項目</div>
        
        <div class="flex-col space-y-12 w-full">
            {{-- 第1間企業 --}}
            @foreach ($business_types as $type)
                <div class="lg:flex w-full space-x-12 justify-between">
                    <div class="w-10/12">
                        <div class="flex text-center py-2 my-4 text-2xl w-1/6  text-white tracking-widest font-bold bg-dot">
                            <div class="flex mx-4 justify-center items-center text-center w-full bg-dot">
                                {{$type->name}}
                            </div>
                        </div>
                        
                        @foreach($business->where('business_type_id',$type->id) as $company)
                            <div class="flex text-center py-2 my-4 text-2xl   text-side_bg tracking-widest font-bold">
                                {{ $company->name}}
                            </div>
                        @endforeach
                    </div>
                    @if (isset($business_items->where("business_type_id",$type->id)->skip(1)->take(1)->first()->name))
                        <div class="w-full">
                            <div class="flex text-center py-2 my-4 text-2xl   text-side_bg tracking-widest font-bold ">
                                @if(isset($business_items->where("business_type_id",$type->id)->take(1)->first()->name))
                                    <div class="flex mx-4 z-10 justify-center items-center w-4 h-4 bg-dot rounded-full ring-0 ring-white dark:bg-blue-900  dark:ring-gray-900 shrink-0"></div>
                                    {{$business_items->where("business_type_id",$type->id)->take(1)->first()->name}}
                                @endif
                            </div>
                            <div class="flex text-center py-2 my-4 text-2xl   text-side_bg tracking-widest font-bold ">
                                @if(isset($business_items->where("business_type_id",$type->id)->skip(1)->take(1)->first()->name))
                                    <div class="flex mx-4 z-10 justify-center items-center w-4 h-4 bg-dot rounded-full ring-0 ring-white dark:bg-blue-900  dark:ring-gray-900 shrink-0"></div>
                                    {{$business_items->where("business_type_id",$type->id)->skip(1)->take(1)->first()->name}}
                                @endif
                            </div>
                            <div class="flex text-center py-2 my-4 text-2xl   text-side_bg tracking-widest font-bold ">
                                @if(isset($business_items->where("business_type_id",$type->id)->skip(2)->take(1)->first()->name))
                                    <div class="flex mx-4 z-10 justify-center items-center w-4 h-4 bg-dot rounded-full ring-0 ring-white dark:bg-blue-900  dark:ring-gray-900 shrink-0"></div>
                                    {{$business_items->where("business_type_id",$type->id)->skip(2)->take(1)->first()->name}}
                                @endif
                            </div>
                        </div>
                    @endif
                    @if (isset($business_items->where("business_type_id",$type->id)->skip(3)->take(1)->first()->name))
                        <div class="w-full">
                            <div class="flex text-center py-2 my-4 text-2xl   text-side_bg tracking-widest font-bold ">
                                @if(isset($business_items->where("business_type_id",$type->id)->skip(3)->take(1)->first()->name))
                                    <div class="flex mx-4 z-10 justify-center items-center w-4 h-4 bg-dot rounded-full ring-0 ring-white dark:bg-blue-900  dark:ring-gray-900 shrink-0"></div>
                                    {{$business_items->where("business_type_id",$type->id)->skip(3)->take(1)->first()->name}}
                                @endif
                            </div>
                            <div class="flex text-center py-2 my-4 text-2xl   text-side_bg tracking-widest font-bold ">
                                @if(isset($business_items->where("business_type_id",$type->id)->skip(4)->take(1)->first()->name))
                                    <div class="flex mx-4 z-10 justify-center items-center w-4 h-4 bg-dot rounded-full ring-0 ring-white dark:bg-blue-900  dark:ring-gray-900 shrink-0"></div>
                                    {{$business_items->where("business_type_id",$type->id)->skip(4)->take(1)->first()->name}}
                                @endif
                            </div>
                            <div class="flex text-center py-2 my-4 text-2xl   text-side_bg tracking-widest font-bold ">
                                @if(isset($business_items->where("business_type_id",$type->id)->skip(5)->take(1)->first()->name))
                                    <div class="flex mx-4 z-10 justify-center items-center w-4 h-4 bg-dot rounded-full ring-0 ring-white dark:bg-blue-900  dark:ring-gray-900 shrink-0"></div>
                                    {{$business_items->where("business_type_id",$type->id)->skip(5)->take(1)->first()->name}}
                                @endif
                            </div>
                        </div>
                    @endif
                    @if (isset($business_items->where("business_type_id",$type->id)->skip(6)->take(1)->first()->name))
                        <div class="w-full">
                            <div class="flex text-center py-2 my-4 text-2xl   text-side_bg tracking-widest font-bold ">
                                @if(isset($business_items->where("business_type_id",$type->id)->skip(6)->take(1)->first()->name))
                                    <div class="flex mx-4 z-10 justify-center items-center w-4 h-4 bg-dot rounded-full ring-0 ring-white dark:bg-blue-900  dark:ring-gray-900 shrink-0"></div>
                                    {{$business_items->where("business_type_id",$type->id)->skip(6)->take(1)->first()->name}}
                                @endif
                            </div>
                            <div class="flex text-center py-2 my-4 text-2xl   text-side_bg tracking-widest font-bold ">
                                @if(isset($business_items->where("business_type_id",$type->id)->skip(7)->take(1)->first()->name))
                                    <div class="flex mx-4 z-10 justify-center items-center w-4 h-4 bg-dot rounded-full ring-0 ring-white dark:bg-blue-900  dark:ring-gray-900 shrink-0"></div>
                                    {{$business_items->where("business_type_id",$type->id)->skip(7)->take(1)->first()->name}}
                                @endif
                            </div>
                            <div class="flex text-center py-2 my-4 text-2xl   text-side_bg tracking-widest font-bold ">
                                @if(isset($business_items->where("business_type_id",$type->id)->skip(8)->take(1)->first()->name))
                                    <div class="flex mx-4 z-10 justify-center items-center w-4 h-4 bg-dot rounded-full ring-0 ring-white dark:bg-blue-900  dark:ring-gray-900 shrink-0"></div>
                                    {{$business_items->where("business_type_id",$type->id)->skip(8)->take(1)->first()->name}}
                                @endif
                            </div>
                        </div>
                    @endif
                    
                </div>
            @endforeach
            {{--  --}}


        <a href="" name="performance"></a>
        <div class="text-center text-side_bg font-extrabold text-3xl py-6 tracking-widest">工程實績</div>
        <div class="flex flex-row flex-wrap w-full  items-center justify-center">

            @foreach ($performs as $perform)
            <div class="basis-1/4 p-8 text-center text-lg">
                <img src="/storage/{{ str_replace('public/', '', $perform->photo_path) }}" class=" object-fill mb-2 h-48" alt="">
                {{ $perform->title }}
            </div>
            @endforeach

        </div>
    </div>
    
    
</x-app-layout>