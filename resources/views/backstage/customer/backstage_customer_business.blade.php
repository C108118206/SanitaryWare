<?php use Carbon\Carbon; ?>
@extends('layouts.backstage')

@section('content')
    <script>
        function business_clear() {
            $('#id').val('0');
            $('#business_id').val('0');
            $('#type_id').val('0');
            $('#business_name').val('');
            $('#type_name').val('');
            $('#business_name').val('');
            $('#items_name').val('');
            $('#items_type_id').val('');
        }
        function get_business_value(id, url) {
            $.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#business_id').val(id);
                    $('#business_name').val(data.name);
                    $('#business_type_id').val(data.business_type_id);
                },

                error: function() {
                    alert("資料更新失敗");
                }
            });
        }
        function get_business_type_value(id, url) {
            $.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#type_id').val(id);
                    $('#type_name').val(data.name);
                },

                error: function() {
                    alert("資料更新失敗");
                }
            });
        }
        function get_business_item_value(id, url) {
            $.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#items_id').val(id);
                    $('#items_name').val(data.name);
                    $('#items_type_id').val(data.business_type_id);
                },

                error: function() {
                    alert("資料更新失敗");
                }
            });
        }
        function del_business_type(url,name){
            if(confirm('確定要刪除 '+name+' 營業類別\n並包含他底下的營業項目公司及營業項目嗎？')){
                window.location.href=url;
            }
        }
        function del_business(url,name){
            if(confirm('確定要刪除 '+name+' 營業項目公司嗎？')){
                window.location.href=url;
            }
        }
        function del_business_item(url,name){
            if(confirm('確定要刪除 '+name+' 營業項目嗎？')){
                window.location.href=url;
            }
        }
    </script>
    <!-- Main modal business_type -->
    <div id="business_type-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-3xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-8">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="business_type-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <span class=" text-2xl">營業項目類別</span>
                <form action="{{ route('backstage-customer-business_type-store') }}" enctype="multipart/form-data" method="POST">
                    <span class="text-red-500"> 注意：「紅色星號 * 為必填項目」 </span>
                    
                    @csrf
                    <input type="hidden" id="type_id" name="id" value="">

                    <div class="">
                        <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">類別名稱<span class="text-red-500"> * </span></label>
                        <input name="name" type="text" id="type_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>

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

    <!-- Main modal business_items -->
    <div id="business_items-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-3xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-8">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="business_items-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <span class=" text-2xl">營業項目</span>
                <form action="{{ route('backstage-customer-business_item-store') }}" enctype="multipart/form-data" method="POST">
                    <span class="text-red-500"> 注意：「紅色星號 * 為必填項目」 </span>
                    
                    @csrf
                    <input type="hidden" id="items_id" name="id" value="">

                    <div class="my-4">
                        <label for="business_type_id" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">營業項目<span class="text-red-500"> * </span></label>
                        <select name="business_type_id"  id="items_type_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            @foreach ($business_type as $item)
                                <option value="{{$item->id}}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="my-4">
                        <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">營業項目名稱<span class="text-red-500"> * </span></label>
                        <input name="name" type="text" id="items_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>

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

    <!-- Main modal business -->
    <div id="business-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-3xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-8">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="business-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <span class=" text-2xl">營業項目公司</span>
                <form action="{{ route('backstage-customer-business-store') }}" enctype="multipart/form-data" method="POST">
                    <span class="text-red-500"> 注意：「紅色星號 * 為必填項目」 </span>
                    @csrf
                    <input type="hidden" id="business_id" name="id" value="">

                    <div class="my-4">
                        <label for="business_type_id" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">營業項目<span class="text-red-500"> * </span></label>
                        <select name="business_type_id" id="business_type_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                            @foreach ($business_type as $item)
                                <option value="{{$item->id}}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="my-4">
                        <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">公司名稱<span class="text-red-500"> * </span></label>
                        <input name="name" type="text" id="business_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
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
            客服管理 > 營業項目管理
        </div>


        <div class="bg-white w-3/4 m-auto rounded-xl">
            <div class=" p-4">
                <div>
                    <span class=" text-2xl">營業項目類別</span>
                    <div class="relative overflow-x-auto shadow-md my-8">
                        <div class=" flex w-max justify-end">
                            <button
                                class="block text-black bg-yellow-300 hover:bg-dot font-medium rounded-lg text-xl px-5 py-2.5 text-center"
                                type="button" data-modal-toggle="business_type-modal" onclick="business_clear()">
                                + 新增
                            </button>
                        </div>
                        <table id="table" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class=" text-lg text-gray-700 uppercase bg-backstage_bg dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        功能
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        類別名稱
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($business_type as $item)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            <a data-modal-toggle="business_type-modal"
                                            onclick="get_business_type_value({{ $item->id }},'{{ route('get-business_type-json', ['id' => $item->id]) }}')">編輯</a>
                                            ｜ <a onclick="del_business_type('{{ route('backstage-customer-business_type-destroy', ['id' => $item->id]) }}','{{ $item->name }}')" >刪除</a>
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$item->name}}
                                        </td>
                                    </tr>
                                @endforeach
                                
                                
    
                            </tbody>
                        </table>
                    </div>
                </div>

                <div>
                    <span class=" text-2xl">營業項目公司</span>
                    <div class="relative overflow-x-auto shadow-md my-8">
                        <div class=" flex w-max justify-end">
                            <button
                                class="block text-black bg-yellow-300 hover:bg-dot font-medium rounded-lg text-xl px-5 py-2.5 text-center"
                                type="button" data-modal-toggle="business-modal" onclick="business_clear()">
                                + 新增
                            </button>
                        </div>
                        <table id="table2" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class=" text-lg text-gray-700 uppercase bg-backstage_bg dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        功能
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        類別名稱
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        公司名稱
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($business as $item)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            <a data-modal-toggle="business-modal"
                                            onclick="get_business_value({{ $item->id }},'{{ route('get-business-json', ['id' => $item->id]) }}')">編輯</a>
                                            ｜ <a onclick="del_business('{{ route('backstage-customer-business-destroy', ['id' => $item->id]) }}','{{ $item->business_name }}')">刪除</a>
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$item->business_type_name}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$item->business_name}}
                                        </td>
                                    </tr>
                                @endforeach
                                
                                
    
                            </tbody>
                        </table>
                    </div>
                </div>

                <div>
                    <span class=" text-2xl">營業項目</span>
                    <div class="relative overflow-x-auto shadow-md my-8">
                        <div class=" flex w-max justify-end">
                            <button
                                class="block text-black bg-yellow-300 hover:bg-dot font-medium rounded-lg text-xl px-5 py-2.5 text-center"
                                type="button" data-modal-toggle="business_items-modal" onclick="business_clear()">
                                + 新增
                            </button>
                        </div>
                        <table id="table3" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class=" text-lg text-gray-700 uppercase bg-backstage_bg dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        功能
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        類別名稱
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        項目名稱
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($business_item as $item)
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            <a data-modal-toggle="business_items-modal"
                                            onclick="get_business_item_value({{ $item->id }},'{{ route('get-business_item-json', ['id' => $item->id]) }}')">編輯</a>
                                            ｜ <a onclick="del_business_item('{{ route('backstage-customer-business_item-destroy', ['id' => $item->id]) }}','{{ $item->items_name }}')">刪除</a>
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$item->business_type_name}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$item->items_name}}
                                        </td>
                                        
                                    </tr>
                                @endforeach
                                
                                
    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#table2').DataTable({

                "dom": '<"toolbar">frtip',
                language: {
                    "lengthMenu": "顯示 _MENU_ 筆資料",
                    "sProcessing": "處理中...",
                    "sZeroRecords": "没有匹配结果",
                    "sInfo": "目前有 _MAX_ 筆資料",
                    "sInfoEmpty": "目前共有 0 筆紀錄",
                    "sInfoFiltered": " ",
                    "sInfoPostFix": "",
                    "sSearch": "搜尋:",
                    "sUrl": "",
                    "sEmptyTable": "尚未有資料紀錄存在",
                    "sLoadingRecords": "載入資料中...",
                    "sInfoThousands": ",",
                    "oPaginate": {
                        "sFirst": "首頁",
                        "sPrevious": "上一頁",
                        "sNext": "下一頁",
                        "sLast": "末頁"
                    },
                    "order": [[0, "desc"]],
                    "oAria": {
                        "sSortAscending": ": 以升序排列此列",
                        "sSortDescending": ": 以降序排列此列"
                    }
                }
            });
            $('#table3').DataTable({

                "dom": '<"toolbar">frtip',
                language: {
                    "lengthMenu": "顯示 _MENU_ 筆資料",
                    "sProcessing": "處理中...",
                    "sZeroRecords": "没有匹配结果",
                    "sInfo": "目前有 _MAX_ 筆資料",
                    "sInfoEmpty": "目前共有 0 筆紀錄",
                    "sInfoFiltered": " ",
                    "sInfoPostFix": "",
                    "sSearch": "搜尋:",
                    "sUrl": "",
                    "sEmptyTable": "尚未有資料紀錄存在",
                    "sLoadingRecords": "載入資料中...",
                    "sInfoThousands": ",",
                    "oPaginate": {
                        "sFirst": "首頁",
                        "sPrevious": "上一頁",
                        "sNext": "下一頁",
                        "sLast": "末頁"
                    },
                    "order": [[0, "desc"]],
                    "oAria": {
                        "sSortAscending": ": 以升序排列此列",
                        "sSortDescending": ": 以降序排列此列"
                    }
                }
            });
        });
    </script>
@stop
