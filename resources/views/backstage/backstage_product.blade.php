<?php use Carbon\Carbon; ?>
@extends('layouts.backstage')

@section('content')

    <script>
        
        function product_clear() {
            $('#id').val('0');
            $('#name').val('');
            $('#details_introduction').val('');
            $('#Precautions').val('');
        }

        function product_type_clear() {
            $('#type_id').val('0');
            $('#type_name').val('');
            $('#main_type_id').val('{{ $product_type_id }}');
        }

        function get_product_value(id, url) {
            $.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#id').val(id);
                    $('#name').val(data.name);
                    $('#product_type_id').val(data.product_type_id);
                    $('#Precautions').val(data.Precautions);
                    YourEditor.setData(data.details_introduction)
                },

                error: function() {
                    alert("資料更新失敗");
                }
            });
        }

        function get_product_type_value(id, url) {
            $.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#type_id').val(id);
                    $('#type_name').val(data.name);
                    $('#main_type_id').val(data.main_product_type_id);
                },

                error: function() {
                    alert("資料更新失敗");
                }
            });
        }

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
            $('div.toolbar').html('');
        });
        function del_product_type(url,name){
            if(confirm('確定要刪除 '+name+' 產品類別並包含他底下的產品嗎？')){
                window.location.href=url;
            }
        }
        function del_product(url,name){
            if(confirm('確定要刪除 '+name+' 產品嗎？')){
                window.location.href=url;
            }
        }
    </script>

    <!-- 產品類別Modal -->
    <div id="product_type-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-3xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-8">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="product_type-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('backstage-product-type-store') }}" enctype="multipart/form-data" method="POST">
                    <span class="text-red-500"> 注意：「紅色星號 * 為必填項目」 </span>
                    @csrf
                    <input type="hidden" id="type_id" name="type_id" value="">

                    <input type="hidden" id="main_type_id" name="main_type_id" value="">

                    <div class="">
                        <label for="type_name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">產品類別名稱<span class="text-red-500"> * </span></label>
                        <input name="type_name" type="text" id="type_name"
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

    <!-- 產品Modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-3xl h-full md:h-auto">
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
                <form action="{{ route('backstage-product-store') }}" enctype="multipart/form-data" method="POST">
                    <span class="text-red-500"> 注意：「紅色星號 * 為必填項目」 </span>
                    @csrf
                    <input type="hidden" id="id" name="id" value="">
                    <div class="">
                        <label for="product_type_id"
                            class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">產品類別<span class="text-red-500"> * </span></label>
                        <select name="product_type_id" id="product_type_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                            <option value="{{$product_type_id}}">不分類</option>

                            @foreach ($product_type_sub as $item)
                                <option value="{{$item->id}}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    

                    <div class="">
                        <label for="name" class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">產品名稱<span class="text-red-500"> * </span></label>
                        <input name="name" type="text" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>


                    <div class="">
                        <label for="Precautions"
                            class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">注意事項</label>
                        <input name="Precautions" type="text" id="Precautions"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                    </div>


                    <div class="">
                        <label for="details_introduction"
                            class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">內容介紹</label>
                        <textarea name="details_introduction" type="text" id="details_introduction"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
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
            產品介紹
            @if(sizeof($product) == 0)
                > {{ $product_type->name }}
            @elseif (!is_null($product->first()->main_product_type_id))
                > {{ $product_type->name }}
            @endif
            @if (sizeof($product) != 0 && $product->first()->main_product_type_id == null && !is_null($product->first()->main_product_type_id) != $product_type->id)
                > {{ $product->first()->product_type_name }}
            @else
            @endif
        </div>


        <div class=" w-3/4 m-auto rounded-xl ">
            <div class=" p-4 border bg-white border-gray-300 rounded-xl">
                <div class=" flex w-max justify-end">
                    <div class=" font-bold text-2xl text-side-bg my-auto pr-4">
                        產品類別
                    </div>
                    <button
                        class="block text-black bg-yellow-300 hover:bg-dot font-medium rounded-lg text-xl px-5 py-2.5 text-center"
                        type="button" data-modal-toggle="product_type-modal" onclick="product_type_clear()">
                        + 新增
                    </button>
                    
                </div>
                <div class="relative overflow-x-auto shadow-md my-8">
                    <table id="table2" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class=" text-lg text-gray-700 uppercase bg-backstage_bg dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    功能
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    產品類別名稱
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    建立日期
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    修改日期
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product_type_sub as $p_sub)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        <a data-modal-toggle="product_type-modal"
                                            onclick="get_product_type_value({{ $p_sub->id }},'{{ route('get-product-type-json', ['id' => $p_sub->id]) }}')">編輯</a>
                                        ｜ <a
                                        onclick="del_product_type('{{ route('backstage-product-type-drop', ['id' => $p_sub->id]) }}','{{ $p_sub->name }}')">刪除</a>
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $p_sub->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $p_sub->created_at }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $p_sub->updated_at }}
                                    </td>
                                </tr>
                            @endforeach
                            

                        </tbody>
                    </table>

                </div>
            </div>
            <div class=" h-2"></div>

            <div class=" p-4 border bg-white border-gray-300 rounded-xl">
                <div class=" flex w-max justify-end">
                    <div class=" font-bold text-2xl text-side-bg my-auto pr-4">
                        產品列表
                    </div>
                    <button
                        class="block text-black bg-yellow-300 hover:bg-dot font-medium rounded-lg text-xl px-5 py-2.5 text-center"
                        type="button" data-modal-toggle="authentication-modal" onclick="product_clear()">
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
                                    產品類別名稱
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    產品名稱
                                </th>
                                
                                <th scope="col" class="px-6 py-3">
                                    上傳圖片(預覽第一張圖)
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    建立日期
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $p)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        <a data-modal-toggle="authentication-modal"
                                            onclick="get_product_value({{ $p->product_id }},'{{ route('get-product-json', ['id' => $p->product_id]) }}')">編輯</a>
                                        ｜ <a 
                                        onclick="del_product('{{ route('backstage-product-drop', ['id' => $p->product_id]) }}','{{ $p->product_name }}')">刪除</a>
                                        ｜ <a href="{{ route('backstage-product-image', ['id' => $p->product_id]) }}">修改圖片</a>
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $p->product_type_name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $p->product_name }}
                                    </td>
                                    
                                    <td class="px-6 py-4">
                                        <img class="w-32 mx-auto"
                                            src="{{ mb_strlen($p->image_path) != 8? '/storage/' . str_replace('public/', '', $p->image_path): '/img/picture/product/' . $p->image_path . '.jpg' }}"
                                            alt="">
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $p->product_created_at }}
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
        // let YourEditor;
        // ClassicEditor
        //     .create(document.querySelector('#details_introduction'))
        //     .then(editor => {
        //         window.editor = editor;
        //         YourEditor = editor;
        //     })
        
        let YourEditor;

        ClassicEditor
            .create( document.querySelector( '#details_introduction' ),{
                ckfinder: {
                    uploadUrl: '{{ route('imageCKF').'?_token='.csrf_token() }}',
                }
            })
            .then(editor => {
                window.editor = editor;
                YourEditor = editor;
            })
            .catch( error => {
                console.error(error);
            })
    </script>

@stop
