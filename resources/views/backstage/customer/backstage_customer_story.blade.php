<?php use Carbon\Carbon; ?>
@extends('layouts.backstage')

@section('content')


<script>
    function perform_clear() {
        $('#id').val('0');
        $('#title').val('');
        $('#content').val('');
    }

    function get_story_value(id,url) {
        $.ajax({
            url: url,
            type: "GET",
            dataType: "json",
            success: function(data) {
                $('#id').val(id);
                $('#title').val(data.title);
                YourEditor.setData(data.content)
            },

            error: function() {
                alert("資料更新失敗");
            }
        });
    }

    function del_story(url,name){
        if(confirm('確定要刪除 '+name+' 品牌故事嗎？')){
            window.location.href=url;
        }
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
                <form action="{{ route('backstage-story-store') }}" enctype="multipart/form-data" method="POST">
                    <span class="text-red-500"> 注意：「紅色星號 * 為必填項目」 </span>
                    
                    @csrf
                    <input type="hidden" id="id" name="id" value="">

                    <div class="">
                        <label for="title" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">標題<span class="text-red-500"> * </span></label>
                        <input name="title" type="text" id="title"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>

                    <div class="">
                        <label for="content"
                            class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">內容介紹<span class="text-red-500"> * </span></label>
                        <textarea name="content" type="text" id="content"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>


                    {{-- <div class="">
                <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">詳細介紹</label>
                <textarea name="detail" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></textarea>
                </div> --}}
                    <span class="block my-5">目前時間 : {{ Carbon::now('Asia/Taipei') }}</span>



                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button type="submit"
                            class="text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">送出</button>
                        <button type="reset"
                            class="text-white bg-blue-400  rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5  focus:z-10 ">清除</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="flex-col space-y-8 px-6 py-6 justify-center items-center">
        <div class=" font-bold text-2xl text-side-bg">
            客服管理 > 品牌故事管理
        </div>


        <div class="bg-white w-3/4 m-auto rounded-xl">
            <div class=" p-4">

                <div class=" flex w-max justify-end">
                    <button
                        class="block text-black bg-yellow-300 hover:bg-dot font-medium rounded-lg text-xl px-5 py-2.5 text-center"
                        type="button" data-modal-toggle="authentication-modal" onclick="perform_clear()">
                        + 新增
                    </button>
                </div>


                <div class="relative overflow-x-auto shadow-md my-8">
                    <table id="table" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class=" text-lg text-gray-700 uppercase bg-backstage_bg dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    功能
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    標題
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    內容
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    建立日期
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stories as $story)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        <a data-modal-toggle="authentication-modal"
                                            onclick="get_story_value({{ $story->id }},'{{ route('get-story-json', ['id' => $story->id]) }}')">
                                            編輯
                                        </a>
                                        ｜ <a
                                        onclick="del_story('{{route('backstage-story-drop', ['id' => $story->id]) }}','{{ $story->title }}')">刪除</a>
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $story->title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $story->content }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $story->created_at }}
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script>
        let YourEditor;
        ClassicEditor
            .create(document.querySelector('#content'))
            .then(editor => {
                window.editor = editor;
                YourEditor = editor;
            })
    </script>
@stop
