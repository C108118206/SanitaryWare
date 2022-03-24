<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name','Laravel')}}</title>

     <!-- Fonts -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

     <!-- Styles -->
     <link rel="stylesheet" href="{{ mix('css/app.css') }}">
     @livewireStyles

     <!-- Scripts -->
     <script src="{{ mix('js/app.js') }}" defer></script>
     <script src="https://unpkg.com/flowbite@1.4.0/dist/datepicker.js"></script>
     <script src="../path/to/flowbite/dist/flowbite.js"></script>
     <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.0/dist/flowbite.min.css" />
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="flex w-screen">
        @section('sidebar')
        <aside class="w-64 " aria-label="Sidebar">
            <div class="overflow-y-auto py-4  bg-side_bg h-screen  dark:bg-gray-800">
               <ul class="space-y-4">
                  <li class="my-10">
                    <svg class="py-2 w-24 h-24 m-auto  text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                    <div class="py-2 flex items-center tracking-wider">
                        <span class="text-white text-xl font-bold m-auto">admin</span>
                    </div>
                  </li>
                  <li>
                     <a href="{{ route('backstage-news') }}" class="flex items-center p-2 text-base tracking-wider font-bold text-white  dark:text-white hover:bg-gray-100 hover:text-side_bg hover:text-side_bg">
                        <span class="m-auto  text-xl">首頁</span>
                     </a>
                  </li>
                  <li>
                     <button type="button" class="flex items-center p-2 w-full text-base font-bold tracking-wider text-white  transition duration-75 group hover:bg-gray-100 hover:text-side_bg dark:text-white " >
                           <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                           <span class="flex-1 ml-3 text-left whitespace-nowrap text-xl" sidebar-toggle-item>最新消息</span>

                     </button>

                  </li>
                  <li>
                     <a href="#" class="flex items-center p-2 text-base font-bold text-white tracking-wider  dark:text-white hover:bg-gray-100 hover:text-side_bg" aria-controls="dropdown-product" data-collapse-toggle="dropdown-product">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap text-xl">產品介紹</span>
                        <span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                     </a>
                     <ul id="dropdown-product" class=" py-2 space-y-2 bg-black {{ request()->is('backstage-product') ? '' : 'hidden' }}">
                        <li>
                           <a href="{{ route('backstage-product') }}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side_bg dark:text-white ">玻璃系列</a>
                        </li>
                        <li>
                            <a href="{{ route('backstage-product') }}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side_bg dark:text-white ">淋浴設備</a>
                         </li>
                        <li>
                           <a href="{{ route('backstage-product') }}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side_bg dark:text-white ">衛浴設備</a>
                        </li>
                        <li>
                           <a href="{{ route('backstage-product') }}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side_bg dark:text-white ">曬衣架</a>
                        </li>
                        <li>
                            <a href="{{ route('backstage-product') }}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side_bg dark:text-white ">隔音地板</a>
                         </li>
                        <li>
                           <a href="{{ route('backstage-product') }}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side_bg dark:text-white ">VAF</a>
                        </li>
                  </ul>
                  </li>
                  <li>
                    <a href="#" class="flex items-center p-2 text-base font-bold text-white tracking-wider  dark:text-white hover:bg-gray-100 hover:text-side_bg" aria-controls="dropdown-customer" data-collapse-toggle="dropdown-customer">
                       <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                       <span class="flex-1 ml-3 whitespace-nowrap text-xl">客服管理</span>
                       <span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">2</span>
                       <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                    <ul id="dropdown-customer" class=" py-2 space-y-2 bg-black {{ request()->is('backstage-product') ? '' : 'hidden' }}">
                        <li>
                           <a href="{{ route('backstage-product') }}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side_bg dark:text-white ">DIY教學維護</a>
                        </li>
                        <li>
                           <a href="{{ route('backstage-product') }}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side_bg dark:text-white ">維修通報查詢</a>
                        </li>
                  </ul>
                 </li>
               </ul>
            </div>
         </aside>

        @show
        <div class="bg-backstage_bg w-full">
            <nav class="bg-white mx-auto h-12 border-gray-300 border-b-4">
                <div class="flex justify-end mr-6 py-2 text-side_bg font-bold tracking-wider">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    登出
                </div>
            </nav>
            @yield('content')
        </div>

    </div>


</body>
</html>
