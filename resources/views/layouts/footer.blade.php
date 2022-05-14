<?php 
    use App\Models\self_info;
    $self_info = self_info::find(1);
?>
<div class="mx-auto lg:h-52 sm:h-80 w-auto bg-sky-800 text-white px-8">
    <div class="max-w-7xl mx-auto py-4 flex justify-between ">
        
        <div class="flex  flex-wrap">
            <div class="flex-col w-56">
                <div class="font-bold text-xl pt-4">產品介紹</div>
                <div class="flex-wrap mt-2 space-y-2">
                    <div>
                        <a class="mr-2" href="/product/1">玻璃系列</a>
                        <a class="ml-2" href="/product/4">曬衣架</a>
                    </div>
                    <div>
                        <a class="mr-2" href="/product/2">淋浴設備</a>
                        <a class="ml-2" href="/product/5">隔音地板</a>
                    </div>
                    <div>
                        <a class="mr-2" href="/product/3">衛浴設備</a>
                        <a class="ml-2" href="/product/6">V A F</a>
                    </div>
                </div>
            </div>
            <div class="flex-col w-40 xl:ml-12">
                <div class="font-bold text-xl pt-4">關於我們</div>
                <div class="flex-wrap mt-2 space-y-2">
                    <div>
                        <a class="mr-2" href="{{ route('about_us_story') }}">公司歷史</a>
                    </div>
                    <div>
                        <a class="mr-2" href="{{ route('about_us_business_item') }}">品牌優勢</a>
                    </div>
                    <div>
                        <a class="mr-2" href="{{ route('about_us_performance') }}">工程實績</a>
                    </div>
                </div>
            </div>
            <div class="flex-col w-40">
                <div class="font-bold text-xl pt-4">客服中心</div>
                <div class="flex-wrap mt-2 space-y-2">
                    <div>
                        <a class="mr-2" href="{{ route('customer_diy') }}">DIY維護教學</a>
                    </div>
                    <div>
                        <a class="mr-2" href="{{ route('customer_service')}}">維修通報</a>
                    </div>
                </div>
            </div>
            <div class="flex-col w-40">
                <div class="font-bold text-xl pt-4">後台登入</div>
                <div class="flex-wrap mt-2 space-y-2">
                    <div>
                        <a class="mr-2" href="{{ route('login') }}">登入頁面</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-80 lg:mt-16 flex-col">
            <div class="flex">
                <p>堡家麗</p><a href="https://www.facebook.com/%E5%A0%A1%E5%AE%B6%E9%BA%97-101540544811432/" target="_blank"><img src="/img/icon/fb.svg" class=" pl-2 h-6 w-6"></a>
            </div>
            <p>服務時間： 09:00-18:00</p>
            <p>連絡電話： {{ $self_info->phone_number }}</p>
            <p>傳真： {{ $self_info->fax }}</p>
            <p>電子信箱： {{ $self_info->mail }}</p>
        </div>
    </div>
</div>

<div class="h-16 xl:h-10 bg-sky-900 px-8">
    <div class="max-w-7xl mx-auto py-2 justify-between items-center text-white lg:flex">
        <div class="">
            Copyright © 堡家麗.&nbsp;&nbsp;All Rights Reserved.
        </div>
        <div class="">
            <a href="{{ route('privacy_policy') }}" target="_blank">隱私權政策</a>
            |
            <a href="{{ route('user_policy') }}" target="_blank">使用者條款</a>
        </div>
    </div>
</div>