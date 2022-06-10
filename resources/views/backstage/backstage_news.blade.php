<?php use Carbon\Carbon; ?>
@extends('layouts.backstage')

@section('content')

    <script>
        function news_clear() {
            $('#id').val('0');
            $('#title').val('');
            $('#description').val('');
            $('#launch_date').val('');
            $('#takedown_date').val('');
        }

        function get_news_value(id, url) {
            $.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#id').val(id);
                    $('#title').val(data.title);
                    $('#description').val(data.description);
                    $('#launch_date').val(data.launch_date.replace(" 00:00:00", ""));
                    $('#takedown_date').val(data.takedown_date.replace(" 00:00:00", ""));
                },

                error: function() {
                    alert("資料更新失敗");
                }
            });
        }
    </script>

    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-8">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="authentication-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('backstage-news-store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" id="id" name="id" value="">

                    <div class="">
                        <label for="title" class=" mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">消息名稱<span class="text-red-500"> * </span></label>
                        <input name="title" type="text" id="title"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>

                        <label for="description"
                            class=" mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">描述文字</label>
                        <textarea rows="4" name="description" id="description"
                            class="block p-2.5 w-full text-xl text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="(選填)"></textarea>

                    </div>
                    <label for="launch_date" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">上架日期<span class="text-red-500"> * </span></label>

                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input datepicker datepicker-autohide datepicker-format="yyyy-mm-dd" type="text" id="launch_date"
                            name="launch_date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date" required>
                    </div>
                    <label for="takedown_date"
                        class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">下架日期<span class="text-red-500"> * </span></label>

                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input datepicker datepicker-autohide datepicker-format="yyyy-mm-dd" type="text" id="takedown_date"
                            name="takedown_date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date" required>
                    </div>


                    <div class="form-group">
                        <label for="image" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">上傳圖片</label>
                        <input name="image" type="file" id="image"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <span class="block my-5">目前時間 : {{ Carbon::now('Asia/Taipei') }}</span>


                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button
                            class="text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">送出</button>
                        <button
                            class="text-white bg-blue-400  rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5  focus:z-10 ">清除</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="flex-col space-y-8 px-6 py-6 justify-center items-center">
        <div class=" font-bold text-2xl text-side-bg">
            最新消息
        </div>


        <div class="bg-white w-3/4 m-auto  rounded-xl">
            <div class=" p-4">
                <form action="{{ route('backstage-news-find') }}" method="post" class="flex justify-between my-4">
                    @csrf
                    <div class="flex">
                        <label for="name" class="bg-slate-200 text-xl py-2.5 px-2">名稱</label>
                        <input type="text" class="" name="name" id="name">
                    </div>
                    <div class="flex mr-64">
                        <label for="between" class="bg-slate-200 text-xl py-2.5 px-2">期間</label>
                        <div date-rangepicker datepicker-format="yyyy-mm-dd" date class="flex items-center px-2">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input name="start" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date start">
                            </div>
                            <span class="mx-4 text-gray-500">~</span>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input name="end" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Select date end">
                            </div>
                        </div>
                        <button type="submit" class=" bg-slate-600">
                            <img src="/img/icon/search.svg"
                                class="flex-shrink-0 h-6 text-gray-500 transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white"
                                alt="">
                        </button>
                    </div>



                    <div class=" flex w-max justify-end">
                        <button
                            class="block text-black bg-yellow-300 hover:bg-dot font-medium rounded-lg text-xl px-5 py-2.5 text-center"
                            type="button" data-modal-toggle="authentication-modal" onclick="news_clear()">
                            + 新增
                        </button>
                    </div>

                </form>
                <div class="relative overflow-x-auto shadow-md my-8">
                    <table id="table" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class=" text-lg text-gray-700 uppercase bg-backstage_bg dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    功能
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    消息名稱
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    描述文字
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    上架日期
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    下架日期
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    上傳圖片
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    建立日期
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $new)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        <a data-modal-toggle="authentication-modal"
                                            onclick="get_news_value({{ $new->id }},'{{ route('get-news-json', ['id' => $new->id]) }}')">
                                            編輯
                                        </a>
                                        ｜ <a href="{{ route('backstage-news-drop', ['id' => $new->id]) }}">刪除</a>
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $new->title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $new->description }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $new->launch_date }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $new->takedown_date }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <img class="w-32"
                                            src="/storage/{{ str_replace('public/', '', $new->photo_path) }}" alt="">
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $new->created_at }}
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
