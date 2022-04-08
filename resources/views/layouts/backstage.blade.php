<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap&subset=chinese-traditional"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        .z-20 {
            z-index: 50 !important;
        }

    </style>
    @livewireStyles
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/datepicker.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        $.ajax({
            url: "{{ route('get-num-json') }}",
            type: "GET",
            dataType: "json",
            success: function(data) {
                $('#productsNum').append(data.productsNum);
                $('#fixesNum').append(data.fixesNum);
            },

            error: function() {
                alert("資料更新失敗");
            }
        });

        $(document).ready(function() {
            $('#table').DataTable({
                searching: false,
                "dom": '<"toolbar">frtip'
            });
            $('div.toolbar').html('');
        });
    </script>

</head>

<body class="font-sans antialiased bg-gray-100">
    <div class="flex w-screen">
        @section('sidebar')
            <aside class="w-64 " aria-label="Sidebar">
                <div class="overflow-y-auto py-4  bg-side-bg h-screen  dark:bg-gray-800">
                    <ul class="space-y-4">
                        <li class="my-10">
                            <img src="/img/picture/index/human.png"
                                class="py-2 w-24 h-24 m-auto  text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white">
                            <div class="py-2 flex items-center tracking-wider">
                                <span class="text-white text-xl font-bold m-auto">{{ Auth::user()->name }}</span>
                            </div>
                        </li>
                        {{-- <li>
                     <a href="{{ route('backstage') }}" class="flex items-center p-2 text-base tracking-wider font-bold text-white  dark:text-white hover:bg-gray-100 hover:text-side-bg">
                        <span class="m-auto  text-xl">首頁</span>
                     </a>
                  </li> --}}
                        <li>
                            <a href="{{ route('backstage-news') }}"
                                class="flex items-center p-2 w-full text-base font-bold tracking-wider text-white  transition duration-75 group hover:bg-gray-100 hover:text-side-bg dark:text-white ">
                                <img src="/img/icon/news.svg"
                                    class="flex-shrink-0 w-8 h-8 text-gray-500 transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white">
                                <span class="flex-1 ml-3 text-left whitespace-nowrap text-xl"
                                    sidebar-toggle-item>最新消息</span>

                            </a>

                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-base font-bold text-white tracking-wider  dark:text-white hover:bg-gray-100 hover:text-side-bg"
                                aria-controls="dropdown-product" data-collapse-toggle="dropdown-product">
                                <img src="/img/icon/bath.svg"
                                    class="flex-shrink-0 w-8 h-8 text-gray-500 transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white"
                                    alt="">
                                <span class="flex-1 ml-3 whitespace-nowrap text-xl">產品介紹</span>
                                <span id="productsNum"
                                    class="inline-flex tracking-tight justify-center items-center px-2  text-sm font-semibold text-black bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300"></span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <ul id="dropdown-product"
                                class=" py-2 space-y-2 bg-black {{ strpos(request()->path(), 'product') ? '' : 'hidden' }}">
                                <li>
                                    <a href="/backstage/product/1"
                                        class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side-bg dark:text-white ">玻璃系列</a>

                                </li>
                                <li>
                                    <a href="/backstage/product/2"
                                        class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side-bg dark:text-white ">淋浴設備</a>
                                </li>
                                <li>
                                    <a href="/backstage/product/3"
                                        class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side-bg dark:text-white ">衛浴設備</a>
                                </li>
                                <li>
                                    <a href="/backstage/product/4"
                                        class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side-bg dark:text-white ">曬衣架</a>
                                </li>
                                <li>
                                    <a href="/backstage/product/5"
                                        class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side-bg dark:text-white ">隔音地板</a>
                                </li>
                                <li>
                                    <a href="/backstage/product/6"
                                        class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side-bg dark:text-white ">VAF</a>
                                </li>
                                <li>
                                    <a href="/backstage/product/7"
                                        class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side-bg dark:text-white ">Others</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-base font-bold text-white tracking-wider  dark:text-white hover:bg-gray-100 hover:text-side-bg"
                                aria-controls="dropdown-customer" data-collapse-toggle="dropdown-customer">
                                <img src="/img/icon/headphone.svg"
                                    class="flex-shrink-0 w-8 h-8 text-gray-500 transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white"
                                    alt="">
                                <span class="flex-1 ml-3 whitespace-nowrap text-xl">客服管理</span>
                                <span id="fixesNum"
                                    class="inline-flex justify-center items-center px-2 ml-3 text-sm font-semibold text-black bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300"></span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <ul id="dropdown-customer"
                                class=" py-2 space-y-2 bg-black {{ strpos(request()->path(), 'customer') ? '' : 'hidden' }}">
                                <li>
                                    <a href="{{ route('backstage-customer-performance') }}"
                                        class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side-bg dark:text-white ">工程實績管理</a>
                                </li>
                                <li>
                                    <a href="{{ route('backstage-customer-fix') }}"
                                        class="flex items-center p-2 pl-11 w-full text-base font-normal text-white  transition duration-75 group hover:bg-gray-100 hover:text-side-bg dark:text-white ">維修通報查詢</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

        @show
        <div class="bg-backstage-bg w-full">
            <nav class="bg-white mx-auto h-12 border-gray-300 border-b-4">
                <div class="flex justify-end mr-6 py-2 text-side-bg font-bold tracking-wider">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                     this.closest('form').submit();" class="flex text-xl">
                            <img src="/img/icon/log_out.svg"
                                class="flex-shrink-0 w-8 h-8 text-gray-500 transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white"
                                alt="">

                            {{ __('登出') }}
                        </a>
                    </form>
                </div>
            </nav>
            @yield('content')
        </div>

    </div>
</body>

</html>
