<x-app-layout>
    <div class="news-pic relative">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
            <div class="text-center py-8 text-3xl  text-white tracking-wider font-black">
                後台登入
            </div>
            <form action="{{ url('/login') }}" method="POST">
                <div class="flex justify-center items-start py-4">
                    <p class="px-4 font-black text-lg  text-white">帳號</p>
                    <input type="text" class=" w-2/3 rounded-md bg-white/50 border border-gray-500/50" name="userName"/>

                </div>
                <div class="flex justify-center items-start py-4 ">
                    <p class="px-4 font-black text-lg  text-white">密碼</p>
                    <input type="password" name="passWord" class=" w-2/3 rounded-md bg-white/50 border border-gray-500/50"/>

                </div>

                <div class="flex justify-center items-start py-4">
                    <button class=" bg-blue-500 rounded-md w-16 h-10 text-white m-2" type="submit">登入</button>
                </div>




            </form>
        </div>
        <img src="/img/picture/index/contact-us-background.jpg" class="opacity-70 object-cover h-full w-full"/>
    </div>
</x-app-layout>
